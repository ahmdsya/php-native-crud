<?php

class Test extends Database
{
    public function cekDB()
    {
        $data = $this->db->table('mahasiswa')->count();
        return  $data;
    }
}