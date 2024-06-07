<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\District;
use Illuminate\Http\Request;


class DropdownController extends Controller
{
    public function fetchCity(Request $request)
    {
        $data['states'] = City::where("country_id", $request->country_id)
                                ->get(["name", "id"]);

        return response()->json($data);
    }
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function fetchDistrict(Request $request)
    {
        $data['cities'] = District::where("city_id", $request->state_id)
                                    ->get(["name", "id"]);

        return response()->json($data);
    }
}
