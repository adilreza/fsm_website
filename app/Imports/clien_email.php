<?php

namespace App\Imports;

use App\elient_email;
use Maatwebsite\Excel\Concerns\ToModel;

class clien_email implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new elient_email([
            'name' => $row[0],
            'email' =>$row[1]
        ]);
    }
}
