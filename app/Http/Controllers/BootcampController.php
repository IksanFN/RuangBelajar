<?php

namespace App\Http\Controllers;

use App\Models\Bootcamp;
use Illuminate\Http\Request;

class BootcampController extends Controller
{
    public function bootcamp()
    {
        $bootcamps = Bootcamp::latest()->paginate(5);
        return view('user.bootcamp.index', compact('bootcamps'));
    }
}
