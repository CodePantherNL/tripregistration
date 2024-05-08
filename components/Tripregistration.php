<?php namespace Nielsvandendries\Tripregistration\Components;

use Cms\Classes\ComponentBase;
use NielsVanDenDries\TripRegistration\Models\Trip;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use Redirect;

class Tripregistration extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name' => 'Trip Registration',
            'description' => 'To register and view Registrations'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    function onRun() 
    {
        $this->page['trips'] = Trip::all();
    }

    public function onSave(Request $request)
    {
        $trip = new Trip();
        $trip->date = $request->input('date');
        $trip->from = $request->input('from');
        $trip->to = $request->input('to');
        $trip->mileage = $request->input('mileage');
        $trip->save();

        return redirect()->refresh();
    }

    public function onDelete()
    {
        $tripId = post('trip_id');
        $trip = Trip::find($tripId);

        if ($trip) {
            $trip->delete();
        }

        return redirect()->refresh();
    }
}
