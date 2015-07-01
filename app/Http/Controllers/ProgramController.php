<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\Program;

use Response;

class ProgramController extends Controller
{
    public function index()
    {
    	$program = Program::all();

    	return Response::json($program);
    }

    public function limitResults()
    {
    	$program = Program::all();

    	return Response::json($program);
    }
}
