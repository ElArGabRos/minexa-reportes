<?php

namespace App\Exports;

use App\alcaldia;
use Maatwebsite\Excel\Concerns\FromCollection;

class ExpAlcaldia implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return alcaldia::all();
    }
}
