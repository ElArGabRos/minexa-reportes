<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\alcaldia;
use Maatwebsite\Excel\Concerns\FromCollection;

class ExportAlcaldia extends Model
{
    //
    public function collection()
    {
        return alcaldia::all();
    }
}
