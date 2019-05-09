<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
        return view('welcome')->withTasks([
            'Task subject 1',
            'Task subject 2',
            'Task subject 3'
        ]);
    }
}
