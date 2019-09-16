<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class Dashboard extends Controller
{
    public function __construct()
    {
        $this->middleware('cek_login');
    }
    public function Index()
    {
        return view('dashboard');
    }
}