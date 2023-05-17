<?php

namespace App\Http\Controllers;

use App\Models\Speaker;
use Illuminate\Http\Request;

class SpeakerController extends Controller
{
    public function index()
    {   
        $nomor = 1;
        $speakers = Speaker::latest()->paginate(3);
        return view('admin.speakers.index', compact('speakers', 'nomor'));
    }

    public function create()
    {
        return view('admin.speakers.create');
    }

    public function store(Request $request)
    {   
        // Validate Request
        $request->validate([
            'name' => 'required|string',
            'avatar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'email' => 'required|email',
            'status' => 'required',
            'occupation' => 'required|string',
            'workplace' => 'required',
            'address' => 'required',
            'city'
        ]);

        // Image Upload
        $image = $request->file('avatar');
        $image->storeAs('public/images', $image->hashName());

        // Create Speaker
        $data = $request->except('_token');
        $data['avatar'] = $image->hashName();

        Speaker::create($data);

        return redirect()->route('admin.speaker_index')->with(['success' => 'Data Speaker berhasil di simpan!']);
    }
}
