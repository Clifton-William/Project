<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Guest;
use Barryvdh\DomPDF\Facade\Pdf;

class GuestController extends Controller
{
    public function exportPDF()
    {
        $guests = Guest::all();
        $pdf = PDF::loadView('admin.pdf', ['guests' => $guests]);
        return $pdf->download('buku_tamu.pdf');
    }
    public function create()
    {
        return view('guest.form');
    }
    public function index(Request $request)
    {
        $guests = Guest::query();
        if ($request->filled('date')) {
            $guests->whereDate('visit_time', $request->date);
        }
        if ($request->filled('search')) {
            $guests->where('name', 'like', '%' . $request->search . '%');
        }
        return view('admin.dashboard', ['guests' => $guests->latest()->get()]);
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'institution' => 'required',
            'phone' => 'required',
            'purpose' => 'required',
        ]);
        Guest::create($request->all());
        return redirect('/')->with('success', 'Data berhasil disimpan!');
    }
}
