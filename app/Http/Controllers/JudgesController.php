<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class JudgesController extends Controller
{
  public function index(){
    $judges = User::where('is_judge', '=', true)->get();
    return view('admin.judges.index', array('judges'=>$judges));
  }

  public function edit($id){
    $judge = User::find($id);
    $params = array(
      'action' => 'Update',
      'form_action' => route('admin.judges.id.update', array('id'=>$id)),
      'judge' => $judge
    );
    return view('admin.judges.edit', array('params' => $params));
  }

  public function create(){
    $params = array(
      'action' => 'Add',
      'form_action' => route('admin.judges.store'),
      'judge' => new User()
    );
    return view('admin.judges.create', array('params'=>$params));
  }

  public function store(Request $request){
    $judge = new User();
    $judge->username = $request->username;
    $judge->name = $request->name;
    $judge->email = str_random().'@gmail.com';
    $judge->is_tabulator = false;
    $judge->is_judge = true;
    $judge->password = bcrypt($request->passcode);
    $judge->passcode = $request->passcode;
    $judge->save();

    return redirect()->route('admin.judges.index');
  }

  public function update(Request $request, $id){
    $judge = User::find($id);
    $judge->name = $request->name;
    $judge->username = $request->username;
    $judge->password = bcrypt($request->passcode);
    $judge->passcode = $request->passcode;
    $judge->save();
    return redirect()->route('admin.judges.index');
  }

  public function delete($id){
    $judge = User::find($id);
    $judge->delete();
    return redirect()->route('admin.judges.index');
  }
}
