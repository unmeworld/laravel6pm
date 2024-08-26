<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    protected $pagepath = 'auth.';

    public function index()
    {
        return view($this->pagepath . 'dashboard.index');
    }
}
