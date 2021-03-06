<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\Department;

use Response;

class DepartmentController extends Controller
{
    public function index($results = null)
    {
    	$departments = null;

    	if ($results == null) {
    		$departments = Department::all();
    	}else {
    		$departments = Department::paginate($results);
    	}

    	return Response::json($departments);
    }

    public function show($id)
    {
    	$department = Department::where('id', $id)->with('programs')->first();

    	if (count($department) == 0) {
    		return "Department does not exist.";
    	}

    	return Response::json($department);
    }

    public function programs($id, $results = null)
    {
    	$departments = null;

    	if ($results == null) {
    		$departments = Department::find($id)->programs()->get();
    	}else {
    		$departments = Department::find($id)->programs()->paginate($results);
    	}

    	return Response::json($departments);
    }
}
