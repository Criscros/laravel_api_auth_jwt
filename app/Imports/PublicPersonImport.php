<?php

namespace App\Imports;

use App\Models\PublicPerson;
use Maatwebsite\Excel\Concerns\ToModel;

class PublicPersonImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new PublicPerson([
            //
            'deparment'     => $row[0],
            'locality'      => $row[1],
            'municipality'  => $row[2],
            'name'          => $row[3],
            'active_years'  => $row[4],
            'type_person'   => $row[5],
            'type_charge'   => $row[6],
        ]);
    }
}
