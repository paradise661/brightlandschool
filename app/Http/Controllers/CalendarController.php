<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use AnuzPandey\NepaliDate;

class CalendarController extends Controller
{
    public function calendar()
    {
        $todayAD = now()->toDateString();
        $todayBS = toNepaliDate($todayAD);

        // Fetch upcoming and ongoing events
        $upcoming_events = Event::where(function ($query) use ($todayBS) {
            $query->where('start_date', '>=', $todayBS) // starts today or later
                ->orWhere(function ($q) use ($todayBS) {
                    $q->where('start_date', '<=', $todayBS) // started before today
                        ->where('end_date', '>=', $todayBS); // ends after today
                });
        })
            ->orderBy('start_date', 'asc')
            ->get();

        return view('frontend.calendar.index', compact('upcoming_events'));
    }
}
