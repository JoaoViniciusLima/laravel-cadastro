<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Prest;
class ApiController extends Controller
{
    public function list(){
        return Prest::all();
     }    
}