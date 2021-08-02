<?php

namespace App\Http\Controllers;

use App\Http\Resources\EmployeeRescource;
use App\Models\Employee;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function show($id)
    {
        $profile = Employee::where('id' , $id)->first();
        if($profile)
        {
            return New EmployeeRescource($profile);
        }

        return response()->json('Not Found' , 404);
    }
}
