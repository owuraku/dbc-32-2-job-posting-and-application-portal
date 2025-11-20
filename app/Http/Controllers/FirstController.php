<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FirstController extends Controller
{
    //
    public function index()
    {
        return "This response is from the First Controller Class";
    }

    public function showAllUsers()
    {
        return [
            "Ama",
            "Kofi",
            "Yaw"
        ];
    }

    public function showOneUser()
    {
        return "Yaw";
    }
}
