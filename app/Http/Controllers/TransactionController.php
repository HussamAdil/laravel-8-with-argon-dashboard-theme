<?php

namespace App\Http\Controllers;

use App\Http\Resources\TransactionResource;
use App\Models\Route;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function index()
    {
        $routes = Route::get();
        return TransactionResource::collection($routes);
    }
}
