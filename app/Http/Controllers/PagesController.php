<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index() {
        $title = 'Hi there, welcome to my first projecttt';
        //return view('pages.index', compact('title'));
        return view('pages.index', compact('title'))-> with('title', $title);
    }

    public function about() {
        $title = 'Hi there, welcome to my about page!';
        return view('pages.about')->with('title', $title);
    }

    public function services() {
        $data = array(
            'title' => 'services',
            'services' => ['Web design', 'Programming', 'Eating']
        );
        return view('pages.services')->with($data);
    }
}
