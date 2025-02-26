<?php

namespace App\Models;

use CodeIgniter\Model;

class TbSoal extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'tb_soal';
    protected $primaryKey       = 'id_soal';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['pil_benar'];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];


    public function getJawabanBenarById($id)
    {
        // Ambil nilai 'Jawaban_benar' berdasarkan id
        $result = $this->select('pil_benar')->find($id);

        return $result ? $result['pil_benar'] : null;
    }

}
