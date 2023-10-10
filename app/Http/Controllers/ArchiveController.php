<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArchiveController extends Controller
{
    public function getArchive(){
        return view('pages.donnesTerrain.archive');
    }
}
