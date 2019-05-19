<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function test() {

    }

    public function createStudentAccount(Request $request) {
        $newUser = new User();
        $newUser->name = $request->name;
        $newUser->password = Hash::make($request->password);
        $newUser->email = $request->email;
        $newUser->save();
        return $newUser;
    }
    
    public function getInfoByID(Request $request) {
        return User::find($request->student_id);
    }

}
