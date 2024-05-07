<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PollingUnit;
use App\Models\AnnouncedPuResult;

class PollingUnitController extends Controller
{
    public function index()
    {
        $polling_units = PollingUnit::select('uniqueid', 'polling_unit_name')->get();
        return view('polling_unit.index', compact('polling_units'));
    }

    public function show(Request $request)
    {
        $polling_unit_uniqueid = $request->input('polling_unit_uniqueid');
        $result = AnnouncedPuResult::select('polling_unit_number', 'polling_unit_name', 'party_abbreviation', 'party_score')
            ->join('polling_unit', 'announced_pu_results.polling_unit_uniqueid', '=', 'polling_unit.uniqueid')
            ->where('polling_unit.uniqueid', $polling_unit_uniqueid)
            ->get();

        return view('polling_unit.result', compact('result'));
    }
}
