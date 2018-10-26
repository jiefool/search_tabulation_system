<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Critereon;

class CriteriaController extends Controller
{
  public function create($id){
    $category = Category::find($id);
    $params = array(
      'form_action' => route('admin.categories.cid.criteria.store', array('id' => $category->id)),
      'action' => 'Add',
      'critereon' => new Critereon()
    );
    return view('admin.categories.criteria.create', array('params' => $params));
  }

  public function store(Request $request, $id){
    $critereon = new Critereon();
    $critereon->category_id = $id;
    $critereon->name = $request->name;
    $critereon->weight = $request->weight;
    $critereon->save();
    return view('admin.categories.id.show', array('id' => $id));
  }
}
