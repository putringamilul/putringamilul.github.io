<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\PesanModel;
use App\Models\DetailPesanModel;

class LaporanController extends Controller
{

    /** 
     * Instance of the main Request object.
     * 
     * @var HTTP\IncromingRequest
     */
    protected $request;
    function __construct()
    {
        $this->laporan = new PesanModel();
        $this->detailpesan = new DetailPesanModel();
    }
    public function tampil()
    {

        $data['laporan'] = $this->laporan->findAll();
        $data['detailpesan'] = $this->detailpesan->findAll();
        return view('laporan', $data);
    }
}
