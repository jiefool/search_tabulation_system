<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CandidatesController extends Controller
{
    public function create(){
    	return view('admin.candidates.create');
    }
}
