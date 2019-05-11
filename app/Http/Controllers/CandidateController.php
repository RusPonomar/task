<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\CandidatesExport;
use App\Imports\CandidatesImport;
use Maatwebsite\Excel\Facades\Excel;

class CandidateController extends Controller
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function importExportView()
    {
        return view('import');
    }

    /**
     * @return \Illuminate\Support\Collection
     */
    public function export()
    {
        return Excel::download(new CandidatesExport, 'candidates.xlsx');
    }

    /**
     * @return \Illuminate\Support\Collection
     */
    public function import()
    {
        Excel::import(new CandidatesImport,request()->file('file'));

        return back();
    }
}