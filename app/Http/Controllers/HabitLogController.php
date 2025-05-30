<?php

namespace App\Http\Controllers;

use App\Http\Resources\HabitLogResource;
use App\Models\Habit;
use App\Models\HabitLog;
use Illuminate\Http\Request;

class HabitLogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Habit $habit)
    {
        return HabitLogResource::collection(
            $habit->logs()
                ->paginate(10)
        );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(HabitLog $habitLog)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, HabitLog $habitLog)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(HabitLog $habitLog)
    {
        //
    }
}
