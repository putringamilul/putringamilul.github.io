<?php

namespace App\Models;

use CodeIgniter\Model;

class PesanModel extends Model
{
    protected $table      = 'pesan';
    // Uncomment below if you want add primary key
    protected $primaryKey = 'id';
    protected $allowedFields = ['id_user', 'nama', 'no_nota', 'tanggal', 'total_harga', 'no_meja', 'status'];
}
