<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Candidate;

class CandidatesController extends Controller
{
    public function index(){
      $candidates = Candidate::all();
      return view('admin.candidates.index', array('candidates'=>$candidates));
    }

    public function create(){
      $params = array(
        'form_action' => route('admin.candidates.store'),
        'action' => 'Add',
        'candidate' => new Candidate()
      );
    	return view('admin.candidates.create', array('params'=>$params));
    }

    public function store(Request $request){
      $candidate = new Candidate();

      $image = $request->image;
      $image_name = time().'.'.$image->getClientOriginalExtension();
      $destination_path = public_path('/images');
      $image->move($destination_path, $image_name);

      $candidate->first_name = $request->first_name;
      $candidate->last_name = $request->last_name;
      $candidate->middle_name = $request->middle_name;
      $candidate->image_url = $image_name;
      $candidate->contact_number = $request->contact_number;
      $candidate->age = $request->age;
      $candidate->address = $request->address;
      $candidate->vital_statistics = $request->vital_statistics;
      $candidate->save();
      
      return redirect()->route('admin.candidates.index');
    }

    public function edit($id){
      $candidate = Candidate::find($id);
      $params = array(
        'action' => 'Edit',
        'form_action' => route('admin.candidates.id.update', array('id'=>$candidate->id)),
        'candidate' => $candidate
      );
      return view('admin.candidates.edit', array('params'=>$params));
    }

    public function update(Request $request, $id){
      $candidate = Candidate::find($id);

      if($request->image){
        $image = $request->image;
        $image_name = time().'.'.$image->getClientOriginalExtension();
        $destination_path = public_path('/images');
        $image->move($destination_path, $image_name);
        $candidate->image_url = $image_name;  
      }

      $candidate->first_name = $request->first_name;
      $candidate->last_name = $request->last_name;
      $candidate->middle_name = $request->middle_name;
      $candidate->contact_number = $request->contact_number;
      $candidate->age = $request->age;
      $candidate->address = $request->address;
      $candidate->vital_statistics = $request->vital_statistics;
      $candidate->save();

      
      return redirect()->route('admin.candidates.index');
    }

    public function delete($id){
      $candidate = Candidate::find($id);
      $candidate->delete();
      return redirect()->route('admin.candidates.index');
    }
}
