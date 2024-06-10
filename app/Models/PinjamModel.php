<?php

namespace App\Models;

use CodeIgniter\Model;

class PinjamModel extends Model
{
    protected $table            = 'pinjam';
    protected $primaryKey       = 'no_pinjam';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['id_anggota', 'no_buku', 'tgl_pinjam', 'tgl_kembali', 'created_at', 'update_at'];

    protected bool $allowEmptyInserts = false;
    protected bool $updateOnlyChanged = true;

    protected array $casts = [];
    protected array $castHandlers = [];

    // Dates
    protected $useTimestamps = true;
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


    public function getPinjamWithDetails()
    {
        $builder = $this->db->table($this->table);
        $builder->select('pinjam.*, anggota.nama AS nama_anggota, buku.judul AS judul_buku');
        $builder->join('anggota', 'anggota.id_anggota = pinjam.id_anggota');
        $builder->join('buku', 'buku.no_buku = pinjam.no_buku');
        return $builder->get()->getResultArray();
    }

    // $data['pinjam'] = $this->pinjamModel->where('id_anggota', $id_anggota)->getPinjamByUser();
    public function getPinjamByUser($id_anggota)
    {
        $builder = $this->db->table($this->table);
        $builder->select('pinjam.*, anggota.nama AS nama_anggota, buku.judul AS judul_buku');
        $builder->join('anggota', 'anggota.id_anggota = pinjam.id_anggota');
        $builder->join('buku', 'buku.no_buku = pinjam.no_buku');
        $builder->where('pinjam.id_anggota', $id_anggota);
        return $builder->get()->getResultArray();
    }
    
}
