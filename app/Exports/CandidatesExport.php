<?php

namespace App\Exports;

use App\Candidate;
use Maatwebsite\Excel\Concerns\FromCollection;

class CandidatesExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Candidate::all();
    }
}
