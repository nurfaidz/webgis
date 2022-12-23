<?php

namespace App\Controllers;


use App\Models\M_batas as ModelsAdmin_Table_batas;

class AdminBatas extends BaseController
{
  public function admin_table_batas()
  {

    $batas = new ModelsAdmin_Table_batas();

    $data = [
      'batas' => $batas->getdata(),
    ];

    // dd($data);

    return view('admin_table_batas', $data);
  }

  public function createtablebatas()
  {
    // session();
    $data = [
      'title' => 'Form Tambah Data',
      'validation' => \Config\Services::validation()
    ];

    return view ('createtablebatas', $data);

  }

  public function save_table_batas()
  {
    // //validasi input 
    // if(!$this->validate([
    //   'nama' =>[
    //     'rules' =>  'required|is_unique[admin_table_batas.nama]',
    //     'errors' => [
    //       'required' => '{field} Nama Harus Diisi.',
    //       'is_unique' => '{field} Nama Sudah Terdaftar'
    //     ]
    //   ]
     

    // ])) {
    //   $validation = \Config\Services::validation();
    //   return redirect()->to('createtablebatas')->withInput()->with('validation', $validation);
    // }

    $table_batas = new ModelsAdmin_Table_batas();
    // dd($table_batas);
    $slug = url_title($this->request->getVar('desa'), '-', true);
    $table_batas->insert([
      'desa' => $this->request->getVar('desa'),
      'slug' =>$slug,
      'koordinat' => $this->request->getVar('koordinat'),
      'kelurahan' => $this->request->getVar('kelurahan'),
     
    ]);

    // session()->setFlashdata('pesan', 'Data Berhasil Ditambahkan.');
    
    // return redirect()->to('/admin_table_batas');
    // redirect(base_url('admin_table_batas')
    return redirect()->route("admin_table_batas")->with("success", "Data Berhasil Disimpan");
  }

  public function getbatas ($id)
  {
    $batas = new ModelsAdmin_Table_batas();

    $data = [
      'batas' => $batas->getBatasById($id)
    ];

    // dd($data);
    return view('detail_table_batas', $data);
  }
  public function edit($id = 0)
  {
    $Batas = new ModelsAdmin_Table_batas();
    $findBatas = $Batas->findProduct($id);

    $data['findBatas'] = $findBatas;

    // dd($data);
  }

  public function updateBatas()
  {
      $model = new ModelsAdmin_Table_batas();
      $id = $this->request->getVar('id');
      $data = array(
        'desa' => $this->request->getVar('desa'),
      'koordinat' => $this->request->getVar('koordinat'),
      'kelurahan' => $this->request->getVar('kelurahan'),
      );
      $model->updateBatas($data, $id);
      return redirect()->to('/admin_table_batas');
  }

  public function deleteBatas()
  {
      $model = new ModelsAdmin_Table_batas();
      $id = $this->request->getVar('id');
      $model->deleteBatas($id);
      return redirect()->to('/admin_table_batas');
  }

  public function insertBatas()
  {
      $model = new ModelsAdmin_Table_batas();
      $id = $this->request->getVar('id');
      $data = array(
        'desa' => $this->request->getVar('desa'),
      'koordinat' => $this->request->getVar('koordinat'),
      'kelurahan' => $this->request->getVar('kelurahan'),
      'gambar' => $this->request->getVar('gambar'),
      );
      $model->insertBatas($data, $id);
      return redirect()->to('/admin_table_batas');
  }
}
