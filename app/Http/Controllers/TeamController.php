<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function show($slug)
    {
        if ($slug === '5a13e4fd16') {
            return view('team.marius');
        } elseif ($slug === 'e5b097b696') {
            return view('team.florian');
        } elseif ($slug === 'test') {
            return view('team.test');
        } else {
            dump($slug);
        }
    }
}
