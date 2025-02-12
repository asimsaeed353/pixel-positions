<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function __invoke()
    {
        // search job in the database
       $jobs =  Job::with(['employer', 'tags'])
           ->where('title', 'LIKE', '%'.request('q').'%')
           ->get();

       return view('results', ['jobs' => $jobs]);
    }
}

