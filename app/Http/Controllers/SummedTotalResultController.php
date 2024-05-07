<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lga;
use App\Models\AnnouncedPuResult;
use Illuminate\Support\Facades\DB;

class SummedTotalResultController extends Controller
{
    public function index()
    {
        // Retrieve LGAs from the database
        $lgas = Lga::where('state_id', 25)->get();

        return view('summed_total_result.index', compact('lgas'));
    }

    public function show(Request $request)
    {
        $lgaId = $request->input('lga_id');

        // Fetch the name of the selected LGA
        $lgaName = Lga::where('uniqueid', $lgaId)->value('lga_name');

        // Fetch the summed total result for the given LGA ID
        $totalScore = AnnouncedPuResult::join('polling_unit', 'announced_pu_results.polling_unit_uniqueid', '=', 'polling_unit.uniqueid')
            ->where('polling_unit.lga_id', $lgaId)
            ->sum('announced_pu_results.party_score');

        return view('summed_total_result.show', compact('lgaName', 'totalScore'));
    }
}

