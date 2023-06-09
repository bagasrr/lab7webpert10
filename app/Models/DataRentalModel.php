<?php 

namespace App\Models;

use CodeIgniter\Model;

class DataRentalModel extends Model 
{
    protected $table = 'datarental';
    protected $useTimestamps = true;
    protected $allowedFields = ['nama_penyewa', 'nik_penyewa', 'waktu_penyewaan', 'jenis_mobil', 'no_plat', 'gambar_kendaraan', 'harga', 'jenis_sewa'];

    public function getDataRental($id = false)
    {
        if ($id==false){
            return $this->findAll();
        }
        return $this->where(['id' => $id])->first();
    }
}

?>