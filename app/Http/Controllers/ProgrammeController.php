<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Programme;

class ProgrammeController extends Controller
{
    //
    public function fetchAllProgramme(Request $request) 
    {
        $data = Programme->all();
        return response()->json($data);
    }
}
