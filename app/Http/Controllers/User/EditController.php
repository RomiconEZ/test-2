<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Resources\User\UserResource;
use App\Models\User;
use Illuminate\Http\Request;

class EditController extends BaseController
{    public function __invoke(User $user){
        return new UserResource($user);
        //return view('employees.edit', compact('employee'));
    }
}
