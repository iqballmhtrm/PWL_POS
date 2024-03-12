<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        
$user =UserModel::find(1);
$user =UserModel::where('level_id', 1)->first();
$user =UserModel::firstWhere('level_id', 1);
}
}