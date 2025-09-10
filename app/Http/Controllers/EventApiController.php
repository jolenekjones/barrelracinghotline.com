<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventApiController extends Controller
{
    public function barrel_races()
    {
        return response()->json(['message' => 'API working']);
    }
    public function Profile($id){
               $events_current = BarrelRacesEvents::where('enddate', '>=', date('Y-m-d'))
                        ->when($owner_id, function ($query, $owner_id) {
                            $query->where(function ($subQuery) use ($owner_id) {
                                $subQuery->where('owned_by', $owner_id);
                            });
                        })
                        ->orderBy('eventdate')
                        ->orderBy('event_state')
                        ->orderBy('event_city')->paginate(21, ['*'], 'current_page')->appends(request()->query());
       
    }
}
