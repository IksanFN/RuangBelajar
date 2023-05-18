<?php

namespace App\Http\Controllers\User;

use App\Models\Bootcamp;
use App\Models\Transaction;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    public function index()
    {
        // return view('user.checkout.index');
    }

    public function create(Bootcamp $bootcamp)
    {
        return view('user.checkout.index', compact('bootcamp'));
    }

    public function checkoutSuccess()
    {
        return view('user.checkout.checkout-success');
    }

    public function store(Request $request, Bootcamp $bootcamp)
    {
        // Mapping Data 
        $request->except('_token');
        
        // Update data user by user login
        $user = Auth::user();
        $user->email = $request->email;
        $user->name = $request->name;
        $user->phone_number = $request->phone_number;
        $user->occupation = $request->occupation;
        $user->address = $request->address;
        $user->save();

        // Create Checkout Transaction
        $checkout = new Transaction();
        $checkout->uuid = Str::uuid();
        $checkout->user_id = Auth::id();
        $checkout->bootcamp_id = $bootcamp->id;
        $checkout->save();

        // Redirect to checkout success
        return redirect()->route('checkout.success');
    }
}
