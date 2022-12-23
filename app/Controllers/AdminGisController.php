<?php

namespace App\Controllers;

// use App\Model\ArtikelModel;
// use App\Models\ArtikelModel as ModelsArtikelModel;

use App\Models\M_batas;
use App\Models\M_jalan;
use App\Models\M_fasilitas;


class AdminGisController extends BaseController
{
    protected $M_batas;
    protected $M_jalan;
    protected $M_fasilitas;
  

    public function __construct()
    {
        $this->M_batas = new M_batas();
        $this->M_jalan = new M_jalan();
        $this->M_fasilitas = new M_fasilitas();
 
    }
   

    public function admingis()
    {
        // dd($this->site);
        $data = [
            'title' => 'sistem informasi geografi | Home',
            'site' => $this->site,
            'vb' => $this->vb,
            'neighborhood_associations' => $this->M_batas->findAll(),
            'roads' => $this->M_jalan->findAll(),
            'facilities' => $this->M_fasilitas->findAll(),
            'getsegment' => $this->request->uri->getSegment(1)
        ];

        // dd($data);
        // return view('gis/rt', $data);
        return view('admingis', $data);
    }

    public function adminrt()
    {
        $data = [
            'title' => 'Batas RT | Home',
            'site' => $this->site,
            'vb' => $this->vb,
            'neighborhood_associations' => $this->M_batas->findAll(),
            'facilities' => $this->M_fasilitas->findAll(),
            'getsegment' => $this->request->uri->getSegment(1)
        ];
        return view('adminrt', $data);
        // dd($data);
    }
    public function adminjalan()
    {
        // dd($this->M_jalan->findAll());
        $data = [
            'title' => 'Jalan desa | Home',
            'site' => $this->site,
            'vb' => $this->vb,
            'roads' => $this->M_jalan->findAll(),
            'getsegment' => $this->request->uri->getSegment(1)
        ];
        return view('adminjalan', $data);
        // dd($data);
    }

    public function adminfasilitas()
    {
        // dd($this->M_jalan->findAll());
        $data = [
            'title' => 'Fasilitas umum desa | Home',
            'site' => $this->site,
            'vb' => $this->vb,
            // 'roads' => $this->M_jalan->findAll(),
            'facilities' => $this->M_fasilitas->findAll(),
            'getsegment' => $this->request->uri->getSegment(1)
        ];
        // dd($data);
        return view('adminfasilitas', $data);
    }

    public function adminbatasadministrasi()
    {
        
        $data = [
            'title' => 'batas | Home',
            'site' => $this->site,
            'vb' => $this->vb,
            // 'roads' => $this->M_jalan->findAll(),
         
            'getsegment' => $this->request->uri->getSegment(1)
        ];
      
        return view('adminbatasadministrasi' , $data);
    }


}