<?php

namespace App\Controllers;


use App\Models\M_batas as ModelsTable_batas;

class TableBatas extends BaseController
{
  public function table_batas()
  {

    $batas = new ModelsTable_batas();

    $data = [
      'batas' => $batas->getdata(),
    ];

    // dd($data);

    return view('table_batas', $data);
  }

  
}
