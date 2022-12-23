<?php

namespace App\Controllers;


use App\Models\M_fasilitas as ModelsTable_fasilitas;

class TableMigas extends BaseController
{
  public function table_migas()
  {

    $fasilitas = new ModelsTable_fasilitas();

    $data = [
      'fasilitas' => $fasilitas->getdata(),
    ];

    // dd($data);

    return view('table_migas', $data);
  }

 
}
