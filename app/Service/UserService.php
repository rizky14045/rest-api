<?php

namespace App\Service;

use App\Models\User;

class UserService{

    public function getUserById($id):User {
        return User::where('id',$id)->first();
    }
    public function getUserByEmail($email):User {
        return User::where('email',$email)->first();
    }
}