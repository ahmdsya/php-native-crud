<?php

class Prodi extends Database
{
    private $table = 'prodi';

    public function getData($id = null, $where = [])
    {
        if ($id != null) {
            $data = $this->db->table($this->table)->find($id);
        }
        elseif(count($where) == 2){
            $data = $this->db->table($this->table)
                    ->where($where[0], $where[1])
                    ->get();
        }
        else{
            $data = $this->db->table($this->table)->get();
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

$prodi = new Prodi();