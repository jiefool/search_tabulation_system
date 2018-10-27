<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Candidate;


class JudgingController extends Controller
{
  public function index(){
    $categories = Category::all();
    return view('judging.index', array('categories'=>$categories));
  }

  public function judgingCategory($id){
    $candidates = Candidate::all();
    $category = Category::find($id);
    return view('judging.category', array('candidates'=>$candidates, 'category'=>$category));
  }
}
