<?php

if($page == 'mahasiswa') {

    if(isset($_POST['submit'])) {

        if($_POST['mode'] == PAGE_MODE_CREATE){

            if($_FILES['foto'] && $_FILES['foto']['name']){
                $nama_file      = $_FILES['foto']['name'];
                $x              = explode('.', $nama_file);
                $ekstensi       = strtolower(end($x));
                $file_tmp       = $_FILES['foto']['tmp_name'];
                $nama_file_baru = "assets/img/".uniqid(true).".".$ekstensi;
                
                $upload = move_uploaded_file($file_tmp, $nama_file_baru);

                if($upload){
                    $data = [
                        'prodi_id'       => $_POST['prodi_id'],
                        'nim'            => $_POST['nim'],
                        'nama_mahasiswa' => $_POST['nama_mahasiswa'],
                        'jk'             => $_POST['jk'],
                        'foto'           => $nama_file_baru
                    ];
                }
                else {
                    $session->flash('error', 'Gagal mengupload foto Mahasiswa.');
                    header('Location:index.php?page=mahasiswa');
                }
            }
            else {
                $data = [
                    'prodi_id'       => $_POST['prodi_id'],
                    'nim'            => $_POST['nim'],
                    'nama_mahasiswa' => $_POST['nama_mahasiswa'],
                    'jk'             => $_POST['jk']
                ];
            }
            
    
            $save = $mahasiswa->save($data);
    
            if($save){
                $session->flash('success', 'Data Mahasiswa berhasil ditambahkan.');
                header('Location:index.php?page=mahasiswa');
            }
            else {
                $session->flash('error', 'Gagal menambahkan Data Mahasiswa.');
                header('Location:index.php?page=mahasiswa');
            }
        }

        if($_POST['mode'] == PAGE_MODE_EDIT){
            
            $id = $_POST['id'];

            // var_dump($_FILES['foto']);

            if($_FILES['foto'] && $_FILES['foto']['name']){
                $nama_file      = $_FILES['foto']['name'];
                $x              = explode('.', $nama_file);
                $ekstensi       = strtolower(end($x));
                $file_tmp       = $_FILES['foto']['tmp_name'];
                $nama_file_baru = "assets/img/".uniqid(true).".".$ekstensi;
                
                $msh = $mahasiswa->getData($id);

                $del_file = unlink($msh->foto);

                $upload = move_uploaded_file($file_tmp, $nama_file_baru);

                if($upload){
                    $data = [
                        'prodi_id'       => $_POST['prodi_id'],
                        'nim'            => $_POST['nim'],
                        'nama_mahasiswa' => $_POST['nama_mahasiswa'],
                        'jk'             => $_POST['jk'],
                        'foto'           => $nama_file_baru
                    ];
                }
                else {
                    $session->flash('error', 'Gagal mengupload foto Mahasiswa.');
                    header('Location:index.php?page=mahasiswa');
                }
            }
            else {
                $data = [
                    'prodi_id'       => $_POST['prodi_id'],
                    'nim'            => $_POST['nim'],
                    'nama_mahasiswa' => $_POST['nama_mahasiswa'],
                    'jk'             => $_POST['jk']
                ];
            }
    
            $edit = $mahasiswa->edit($data, $id);
    
            if($edit){
                $session->flash('success', 'Data Mahasiswa berhasil diubah.');
                header('Location:index.php?page=mahasiswa');
            }
            else {
                $session->flash('error', 'Gagal mengubah Data Mahasiswa.');
                header('Location:index.php?page=mahasiswa');
            }
        }
    }

    if(isset($_POST['delete'])) {
        $id = $_POST['id'];

        $msh = $mahasiswa->getData($id);

        $del_file = unlink($msh->foto);
    
        $delete = $mahasiswa->delete($id);

        if($delete){
            $session->flash('success', 'Data Mahasiswa berhasil dihapus.');
            header('Location:index.php?page=mahasiswa');
        }
        else {
            $session->flash('error', 'Gagal menghapus Data Mahasiswa.');
            header('Location:index.php?page=mahasiswa');
        }
    }
}
