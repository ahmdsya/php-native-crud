<?php

if($page == 'prodi'){
    
    if(isset($_POST['submit'])) {

        if($_POST['mode'] == PAGE_MODE_CREATE){
            $data = [
                'nama_prodi' => $_POST['nama_prodi']
            ];
    
            $save = $prodi->save($data);
    
            if($save){
                $session->flash('success', 'Program Studi berhasil ditambahkan.');
                header('Location:index.php?page=prodi');
            }
            else {
                $session->flash('error', 'Gagal menambahkan Program Studi.');
                header('Location:index.php?page=prodi');
            }
        }

        if($_POST['mode'] == PAGE_MODE_EDIT){
            $data = [
                'nama_prodi' => $_POST['nama_prodi']
            ];

            $id = $_POST['id'];
    
            $edit = $prodi->edit($data, $id);
    
            if($edit){
                $session->flash('success', 'Program Studi berhasil diubah.');
                header('Location:index.php?page=prodi');
            }
            else {
                $session->flash('error', 'Gagal mengubah Program Studi.');
                header('Location:index.php?page=prodi');
            }
        }
    }

    if(isset($_POST['delete'])) {
        $id = $_POST['id'];
    
        $delete = $prodi->delete($id);

        if($delete){
            $session->flash('success', 'Program Studi berhasil dihapus.');
            header('Location:index.php?page=prodi');
        }
        else {
            $session->flash('error', 'Gagal menghapus Program Studi.');
            header('Location:index.php?page=prodi');
        }
    }
}