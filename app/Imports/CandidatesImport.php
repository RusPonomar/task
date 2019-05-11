<?php

namespace App\Imports;

use App\Candidate;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class CandidatesImport implements ToModel, WithHeadingRow
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new Candidate([
            'first_name'     => $row['first_name'],
            'last_name'     => $row['last_name'],
            'email'    => $row['email'],
        ]);
    }
}