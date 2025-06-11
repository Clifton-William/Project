<?php

namespace App\Http\Controllers;

use App\Models\Schedule;
use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    public function index()
    {
        $schedules = Schedule::all();
        return view('schedules.index', compact('schedules'));
    }

    public function create()
    {
        return view('schedules.create');
    }

    // Menyimpan jadwal baru
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'reminder_time' => 'required|date',
        ]);

        Schedule::create($request->all());
        return redirect()->route('schedules.index');
    }

    // Menampilkan form edit jadwal
    public function edit($id)
    {
        $schedule = Schedule::findOrFail($id);
        return view('schedules.edit', compact('schedule'));
    }

    // Menyimpan perubahan jadwal
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'reminder_time' => 'required|date',
        ]);

        $schedule = Schedule::findOrFail($id);
        $schedule->update($request->all());
        return redirect()->route('schedules.index');
    }

    // Menghapus jadwal
    public function destroy($id)
    {
        $schedule = Schedule::findOrFail($id);
        $schedule->delete();
        return redirect()->route('schedules.index');
    }

    public function list()
    {
        $schedules = Schedule::all();
        return view('dashboard.list', compact('schedules'));
    }

    public function about()
    {
        return view('dashboard.about');
    }

}
