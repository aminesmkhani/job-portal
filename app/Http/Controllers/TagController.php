<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TagController extends Controller
{
    public function __invoke()
    {
        // jobs for this tag!
        return view('results', compact('jobs'));
    }
}
