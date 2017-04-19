<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\User;

class UsersController extends Controller
{
    public function index()
    {
        $users = User::paginate(10);
        
        return view('users.index', [
            'users' => $users,
        ]);
    }
    
     public function show($id)
    {
        $user = User::find($id);
        
        $tasklists = $user->tasklists()->orderBy('created_at', 'desc')->paginate(10);
        $count_tasklists = $user->tasklists()->count();
        
        $data = [
            'user' => $user,
            'tasklists' => $tasklists,
        ];
        
        $data += $this->counts($user);
        
       return view('users.show', $data);
    }
}