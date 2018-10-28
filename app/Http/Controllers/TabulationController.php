<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\User;
use App\Candidate;
use App\CategoryJudgeCriteriaWeight;


class TabulationController extends Controller
{ 

  public function index(){
    $categories = Category::all();
    $judges = User::where('is_judge', '=', true)->get();
    $candidates = Candidate::all();

    $cjc_score = array();
    foreach($candidates as $candidate){
      foreach($judges as $judge){
        foreach($categories as $category){
          $cjc_score[$candidate->id][$judge->id][$category->id] = $this->get_category_total_score($candidate->id, $judge->id, $category->id);
        }
      }
    }

    $cjc_total = array();
    foreach($candidates as $candidate){
      foreach($judges as $judge){
        foreach($categories as $category){
          $cjc_total[$candidate->id][$judge->id] = round($this->get_average($cjc_score[$candidate->id][$judge->id]),2);
        }
      }
    }


    $cjc_total_average = array();
    foreach($candidates as $candidate){
      foreach($judges as $judge){
        $cjc_total_average[$candidate->id] = round($this->get_average($cjc_total[$candidate->id]),2);
      }
    }

    return view('admin.tabulation.index', 
      array(
        'categories'=>$categories,
        'judges'=>$judges,
        'candidates'=>$candidates,
        'cjc_score'=>$cjc_score,
        'cjc_total'=>$cjc_total,
        'cjc_total_average'=>$cjc_total_average
      ));
  }


  public function get_category_total_score($candidate_id, $judge_id, $category_id){
    $cjc = CategoryJudgeCriteriaWeight::where('candidate_id', '=', $candidate_id)
                                        ->where('user_id', '=', $judge_id)
                                        ->where('category_id', '=', $category_id)
                                        ->get();
    $score = 0;
    foreach($cjc as $c){
      $score += $c->weight;
    }

    return $score;
  }

  public function get_average($category_scores){
    $score = 0;
    foreach($category_scores as $c){
      $score += $c;
    }

    return $score/count($category_scores);
  }

  
}
