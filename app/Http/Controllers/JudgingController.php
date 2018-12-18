<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Candidate;
use App\CategoryJudgeCriteriaWeight;
use Auth;


class JudgingController extends Controller
{
  public function index(){
    $categories = Category::all();
    return view('judging.index', array('categories'=>$categories));
  }

  public function judging_category($id){
    $candidates = Candidate::orderBy('candidate_number', 'asc')->get();
    $category = Category::find($id);
    $cjcw = array();
    foreach($candidates as $candidate){
      foreach($category->criteria as $critereon){
        $score = CategoryJudgeCriteriaWeight::where('candidate_id', '=', $candidate->id)
                                            ->where('user_id', '=', Auth::user()->id)
                                            ->where('category_id', '=', $id)
                                            ->where('criteria_id', '=', $critereon->id)
                                            ->first();
                                
        $cjcw[$candidate->id][Auth::user()->id][$id][$critereon->id] = $score ? $score->weight : 0;
      }
    }
    return view('judging.category', array('candidates'=>$candidates, 'category'=>$category, 'cjcw'=>$cjcw));
  }

  public function judging_candidate_category(Request $request, $candidate_id, $category_id){
    $category = Category::find($category_id);
    $criteria = $category->criteria;
    foreach($criteria as $critereon){
      $cjcw = CategoryJudgeCriteriaWeight::where('candidate_id', '=', $candidate_id)
                                            ->where('user_id', '=', Auth::user()->id)
                                            ->where('category_id', '=', $category_id)
                                            ->where('criteria_id', '=', $critereon->id)
                                            ->first();
      if ($cjcw == null){
        $cjcw = new CategoryJudgeCriteriaWeight();
      }

      $field_name = 'weight_'.$critereon->id;
      
      $cjcw->category_id = $category_id;
      $cjcw->user_id = Auth::user()->id;
      $cjcw->candidate_id = $candidate_id;
      $cjcw->criteria_id = $critereon->id;
      $cjcw->weight = $request->$field_name;
      $cjcw->save();
    }

    return redirect()->back();
  }
}
