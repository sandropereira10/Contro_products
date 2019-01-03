<?php
namespace App\repository;
use App\User;

class UserRepository
{


    public function ageMinMax()
    {
        return User::where([
           ['age', '>=' , 18],
           ['age', '<=', 25]

        ])->get();




    }

    public function show()
    {
        return User::where(
    [
        ['id', '>=', 0 ]

    ])->get();
    }
}