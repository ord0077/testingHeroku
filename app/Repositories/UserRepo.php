<?php
namespace App\Repositories;

use App\Models\User;

class UserRepo {

    public $user;

    public function __construct()
    {
        $this->user = User::where('role_id',1)->orderBy("id","desc")->simplePaginate(4);
        //$user=User::where('role_id',1)->orderBy("id","desc")->simplePaginate(4);
    }

   
}