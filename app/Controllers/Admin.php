<?php

namespace App\Controllers;


use App\Models\DataRentalModel;

class Admin extends BaseController
{
    protected $dataRentalModel;

    public function __construct()
    {
        $this->dataRentalModel = new DataRentalModel();
    }

    public function index()
    {
        $dataSewa = $this->dataRentalModel->findAll();
        $data = [
            'title' => 'Admin Page',
            'dataSewa' => $dataSewa
        ];

        return view('pages/admin', $data);
    }
    

    public function add()
    {
        $data = [
            'title' => 'Insert Data'
        ];
        return view('pages/create', $data);
    }

    public function save()
    {
        $this->dataRentalModel->save([
            'nama_penyewa' => $this->request->getVar('nama_penyewa'),
            'nik_penyewa' => $this->request->getVar('nik_penyewa'),
            'waktu_penyewaan' => $this->request->getVar('waktu_penyewaan'),
            'jenis_mobil' => $this->request->getVar('jenis_mobil'),
            'no_plat' => $this->request->getVar('no_plat'),
            'gambar_kendaraan' => $this->request->getVar('gambar_kendaraan'),
            'harga' => $this->request->getVar('harga'),
            'jenis_sewa' => $this->request->getVar('jenis_sewa')
        ]);
        // dd($this->request->getVar());
        session()->setFlashdata('pesan', 'Data penyewa berhasil ditambahkan :)');

        return redirect()->to(base_url('cumadminyangtau'));
    }

    public function delete($id)
    {
        
    }

    public function info()
    {
        $data = [
            'title' => 'Info'
        ];
        return view('pages/info', $data);
    }
}