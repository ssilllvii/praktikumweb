<?php
namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class FormController extends BaseController
{
//     public function submitform()
//     {
//         $nama = $this ->request->getPost('nama');
//         $nim = $this ->request->getPost('nim');
//         $kelas = $this ->request->getPost('kelas');
//         $matakuliah = $this ->request->getPost('matakuliah');
//         $dosen = $this ->request->getPost('dosen');
//         $asisten = $this ->request->getPost('asisten');

//         $data = [
//             'nama' => $nama,
//             'nim' => $nim,
//             'kelas' => $kelas,
//             'matakuliah' => $matakuliah,
//             'dosen' => $dosen,
//             'asisten' => $asisten,
//         ];

//         return view ('form_result', $data);
//     }

    public function input() {
        return view('form_result');
    }
}