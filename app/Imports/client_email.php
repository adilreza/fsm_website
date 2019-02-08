<?php

namespace App\Imports;

use App\client_list;
use Maatwebsite\Excel\Concerns\ToModel;

class client_email implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new client_list([
            'name' => $row[0],
            'email' =>$row[1]
        ]);
    }
}
