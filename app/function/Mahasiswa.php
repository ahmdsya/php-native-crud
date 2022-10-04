<?php 

class Mahasiswa extends Database
{
    protected $table = 'mahasiswa';

    public function __construct()
    {
        parent::__construct();
    }

    public function getData($id = null, $where = [])
    {
        if ($id != null) {
            $data = $this->db->table($this->table)
                    ->join('prodi', 'prodi.id', '=', $this->table.'.prodi_id')
                    ->where($this->table.'.id', $id)
                    ->select([$this->table.'.*', 'prodi.nama_prodi'])
                    ->first();
        }
        elseif(count($where) == 2){
            $data = $this->db->table($this->table)
                    ->join('prodi', 'prodi.id', '=', $this->table.'.prodi_id')
                    ->where($where[0], $where[1])
                    ->select([$this->table.'.*', 'prodi.nama_prodi'])
                    ->get();
        }
        else{
            $data = $this->db->table($this->table)
                    ->join('prodi', 'prodi.id', '=', $this->table.'.prodi_id')
                    ->select([$this->table.'.*', 'prodi.nama_prodi'])
                    ->get();
        }

        return $data;
    }

    public function save($data)
    {
        $this->db->table($this->table)->insert($data);

        return true;
    }

    public function edit($data, $id)
    {
        $this->db->table($this->table)->where('id', $id)
            ->update($data);

        return true;
    }

    public function delete($id)
    {
        $this->db->table($this->table)->where('id', $id)
            ->delete();

        return true;
    }
}

$mahasiswa = new Mahasiswa();