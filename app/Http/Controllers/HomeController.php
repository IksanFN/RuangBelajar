<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        $countBootcamp = Transaction::with('bootcamp')->whereUserId(Auth::id())->count();
        $countTransaction = Transaction::with('user')->whereUserId(Auth::id())->count();
        $noPaid = Transaction::whereIsPaid(false)->count();

        return view('user.dashboard', compact('countBootcamp', 'countTransaction', 'noPaid'));
    }
}
