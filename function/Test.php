<?php

class Test extends Database
{
    public function cekDB()
    {
        $data = $this->db->table('mahasiswa')->count();
        return  $data;
    }

    public function createUser()
    {
        $data = [
            'email' => 'admin@mail.com',
            'nama' => 'Administrattor',
            'password' => password_hash('admin123', PASSWORD_DEFAULT)
        ];

        $isnert = $this->db->table('user')->insert($data);

        echo "OK";
    }
}

$test = new Test();