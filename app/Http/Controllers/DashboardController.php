<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Information;

class DashboardController extends Controller
{
    public function index()
    {
        $information = Information::find(1);

        return view("dashboard.index", ["information" => $information]);
    }

    public function skill()
    {
        return view("dashboard.skill");
    }
}