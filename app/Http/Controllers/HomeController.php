<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        return view("welcome");
    }

    public function contact(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);

        // Logika untuk menyimpan atau mengirim email
        // Contoh: return redirect()->back()->with('success', 'Pesan terkirim!');
    }
}
