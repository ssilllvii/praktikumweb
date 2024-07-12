<?php
namespace App\Controllers;

use App\Models\MahasiswaModel;

class Crud extends BaseController
{
    protected $db;
    public function __construct()
    {
        $this->db = new MahasiswaModel();
    }

    
    public function index()
{
    $all = $this->db->findAll();
    $data = [
        'mahasiswa' => $all
    ];
    return view('crud/view', $data);
}


   
    public function tambah()
{
    if ($this->request->getMethod() == 'POST') {
        $data = $this->request->getPost([
            'nim',
            'nama',
            'prodi',
            'universitas',
            'nomor_handphone'
        ]);

        // Debug data input
        log_message('debug', 'Data input: ' . print_r($data, true));

        // Periksa apakah nim sudah ada di database
        if ($this->db->find($data['nim'])) {
            return redirect()->back()->with('error', 'NIM sudah ada');
        }

        $this->db->insert($data);
        return redirect()->to(base_url('/crud'));
    } else {
        return view('crud/upload');
    }
}


    public function edit($id)
    {
        if (isset($_POST['nim'])) {
            $data = $this->request->getPost([
                'nim',
                'nama',
                'prodi',
                'universitas',
                'nomor_handphone'
            ]);
            $this->db->update($id, $data);
            return redirect()->to(base_url('/crud'));
        } else {
            $data = ['data' => $this->db->find($id)];
            return view('crud/edit', $data);
        }
    }

    public function hapus($id)
    {
        $this->db->delete($id);
        return redirect()->to(base_url('/crud'));
    }
}