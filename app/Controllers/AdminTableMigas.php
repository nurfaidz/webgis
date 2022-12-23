<?php

namespace App\Controllers;


use App\Models\M_fasilitas as ModelsAdmin_Table_fasilitas;
use CodeIgniter\HTTP\Request;

class AdminTableMigas extends BaseController
{
  public function admin_table_migas()
  {

    $fasilitas = new ModelsAdmin_Table_fasilitas();

    $data = [
      'fasilitas' => $fasilitas->getdata(),
    ];

    // dd($data);

    return view('admin_table_migas', $data);
  }

  public function createtablemigas()
  {
    // session();
    $data = [
      'title' => 'Form Tambah Data',
      'validation' => \Config\Services::validation()
    ];

    return view ('createtablemigas', $data);

  }

  // public function save_table_migas()
  // {
    
  //   $table_migas = new ModelsAdmin_Table_fasilitas();
  //   // dd($table_migas);
  //   $slug = url_title($this->request->getVar('nama'), '-', true);
  //   $table_migas->insert([
  //     'nama' => $this->request->getVar('nama'),
  //     'slug' =>$slug,
  //     'koordinat' => $this->request->getVar('koordinat'),
  //     'jenis' => $this->request->getVar('jenis'),
  //     'operator' => $this->request->getVar('operator'),
  //     'lisensi' => $this->request->getVar('lisensi'),
  //     'status' => $this->request->getVar('status'),
  //     'kedalaman' => $this->request->getVar('kedalaman'),
  //     'sumber' => $this->request->getVar('sumber'),
  //     'gambar' => $this->request->getVar('gambar')
  //   ]);

  //   session()->setFlashdata('pesan', 'Data Berhasil Ditambahkan.');
    
  //   return redirect()->to('/admin_table_migas');
    
  // }

  public function getFasilitas ($id)
  {
    $fasilitas = new ModelsAdmin_Table_fasilitas();

    $data = [
      'fasilitas' => $fasilitas->getFasilitasById($id)
    ];

    // dd($data);
    return view('detail_table_migas', $data);
  }

  public function admin_detail($id) {
    $fasilitas = new ModelsAdmin_Table_fasilitas();

    $data = [
      'fasilitas' => $fasilitas->getFasilitasById($id)
    ];

    dd($data);
    
  }

  // public function save()
  // {
  //     $model = new ModelsAdmin_Table_fasilitas();
  //     $data = array(
  //         'koordinat'        => $this->request->getPost('koordinat'),
  //         'nama'       => $this->request->getPost('nama'),
  //         'jenis' => $this->request->getPost('jenis'),
  //         'operator' => $this->request->getPost('operator'),
  //         'lisensi' => $this->request->getPost('lisensi'),
  //         'status' => $this->request->getPost('status'),
  //         'kedalaman' => $this->request->getPost('kedalaman'),
  //         'sumber' => $this->request->getPost('sumber'),
  //         'gambar' => $this->request->getPost('gambar'),
  //     );
  //     $model->saveMigas($data);
  //     return redirect()->to('/table_migas');
  // }

  public function edit($id = 0)
  {
    $migas = new ModelsAdmin_Table_fasilitas();
    $findMigas = $migas->findProduct($id);

    $data['findMigas'] = $findMigas;

    // dd($data);
  }

  public function updateMigas()
  {
      $model = new ModelsAdmin_Table_fasilitas();
      $id = $this->request->getVar('id');
      $data = array(
        'koordinat'        => $this->request->getVar('koordinat'),
        'nama'       => $this->request->getVar('nama'),
        'jenis' => $this->request->getVar('jenis'),
        'operator' => $this->request->getVar('operator'),
        'lisensi' => $this->request->getVar('lisensi'),
        'status' => $this->request->getVar('status'),
        'kedalaman' => $this->request->getVar('kedalaman'),
        'sumber' => $this->request->getVar('sumber'),
        'gambar' => $this->request->getVar('gambar'),
      );
      $model->updateMigas($data, $id);
      return redirect()->to('/admin_table_migas');
  }

  public function deleteMigas()
  {
      $model = new ModelsAdmin_Table_fasilitas();
      $id = $this->request->getVar('id');
      $model->deleteMigas($id);
      return redirect()->to('/admin_table_migas');
  }
  public function insertMigas()
  {
      $model = new ModelsAdmin_Table_fasilitas();
      $id = $this->request->getVar('id');
      $data = array(
        'koordinat'        => $this->request->getVar('koordinat'),
        'nama'       => $this->request->getVar('nama'),
        'jenis' => $this->request->getVar('jenis'),
        'operator' => $this->request->getVar('operator'),
        'lisensi' => $this->request->getVar('lisensi'),
        'status' => $this->request->getVar('status'),
        'kedalaman' => $this->request->getVar('kedalaman'),
        'sumber' => $this->request->getVar('sumber'),
        'gambar' => $this->request->getVar('gambar'),
      );
      $model->insertMigas($data, $id);
      return redirect()->to('/admin_table_migas');
  }
}
