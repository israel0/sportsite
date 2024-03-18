<?php

namespace App\Http\Controllers;

use App\Helper\Helper;
use App\Models\ActivationCode;
use App\Models\plan;
use App\Models\Stage;
use App\Models\User;
use App\Models\Wallet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
  
    public function index()
    {
        return view("scout");
    }

}
