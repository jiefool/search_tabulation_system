<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Critereon;

class CriteriaController extends Controller
{
  public function create($id){
    $category = Category::find($id);
    $critereon = new Critereon();
    $critereon->category_id = $category->id;
    $params = array(
      'form_action' => route('admin.categories.cid.criteria.store', array('id' => $category->id)),
      'action' => 'Add',
      'critereon' => $critereon
    );
    return view('admin.categories.criteria.create', array('params' => $params));
  }

  public function store(Request $request, $id){
    $category = Category::find($id);
    $critereon = new Critereon();
    $critereon->category_id = $id;
    $critereon->name = $request->name;
    $critereon->weight = $request->weight;
    $critereon->save();
    return redirect()->route('admin.categories.id.show', array('id'=>$category->id));
  }

  public function edit($cid, $id){
    $critereon = Critereon::find($id);
    $params = array(
      'form_action' => route('admin.categories.cid.criteria.id.update', array('cid'=>$cid, 'id'=>$id)),
      'action' => 'Edit',
      'critereon' => $critereon
    );
    return view('admin.categories.criteria.edit', array('params'=>$params));
  }

  public function update(Request $request, $cid, $id){
    $category = Category::find($cid);
    $critereon = Critereon::find($id);
    $critereon->category_id = $cid;
    $critereon->name = $request->name;
    $critereon->weight = $request->weight;
    $critereon->save();
    return redirect()->route('admin.categories.id.show', array('category' => $category));
  }

  public function delete($cid, $id){
    $category = Category::find($cid);
    $critereon = Critereon::find($id);
    $critereon->delete();
    return redirect()->route('admin.categories.id.show', array('category' => $category));
  }
}
