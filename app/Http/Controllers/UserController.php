<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class UserController extends Controller
{
    public function index(Request $request)
{
    $userCount = User::count();
    
    return view('admin.home_admin', compact('userCount'));
}
}
