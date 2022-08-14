<?php 
    $id = isset($_GET['id']) ? $_GET['id'] : false;
?>

<div class="row">
    <div class="col-md-12">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary d-inline-block">
                    <?= ($_GET['mode'] == PAGE_MODE_CREATE ? 'Tambah' : 'Edit') ?> Mahasiswa
                </h6>
                <a href="index.php?page=mahasiswa" class="btn btn-sm btn-success float-right">Kembali</a>
            </div>
            <div class="card-body">
                <form method="post" enctype="multipart/form-data">
                    <input type="hidden" name="mode" value="<?= $_GET['mode'] ?>">
                    <input type="hidden" name="id" value="<?= ($id ? $id : '') ?>">

                    <div class="form-group mb-2">
                        <label for="nim">NIM</label>
                        <input type="text" name="nim" class="form-control" id="nim"
                            value="<?= ($id ? $mahasiswa->getData($id)->nim : '') ?>"
                            placeholder="Nomor Induk Mahasiswa" required style="width: 50%;">
                    </div>
                    <div class="form-group">
                        <label for="prodi_id">Program Studi</label>
                        <select name="prodi_id" id="prodi_id" class="form-control" style="width: 50%;">
                            <?php foreach($prodi->getData() as $prodi): ?>
                            <option value="<?= $prodi->id ?>"
                                <?= ($id && $prodi->id == $mahasiswa->getData($id)->prodi_id ? 'selected' : '') ?>>
                                <?= $prodi->nama_prodi ?>
                            </option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group mb-2">
                        <label for="nama_mahasiswa">Nama Mahasiswa</label>
                        <input type="text" name="nama_mahasiswa" class="form-control" id="nama_mahasiswa"
                            value="<?= ($id ? $mahasiswa->getData($id)->nama_mahasiswa : '') ?>"
                            placeholder="Nama Mahasiswa" required style="width: 50%;">
                    </div>
                    <div class="form-group mb-2">
                        <label for="jk">Jenis Kelamin</label>
                        <select name="jk" id="jk" class="form-control" style="width: 50%;">
                            <option value="Laki-Laki"
                                <?= ($id && $mahasiswa->getData($id)->jk == 'Laki-Laki' ? 'selected' : '') ?>>
                                Laki-Laki
                            </option>
                            <option value="Perempuan"
                                <?= ($id && $mahasiswa->getData($id)->jk == 'Perempuan' ? 'selected' : '') ?>>
                                Perempuan
                            </option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="foto">Upload Foto</label>
                        <input type="file" name="foto" class="form-control" id="foto" accept="image/*" style="width: 50%;">

                        <?php if($_GET['mode'] == PAGE_MODE_EDIT && $id && $mahasiswa->getData($id)->foto != NULL): ?>
                            <img src="<?= $mahasiswa->getData($id)->foto ?>" class="rounded-circle mt-3 d-block" width="100px;"
                                    alt="<?= $mahasiswa->getData($id)->nama_mahasiswa ?>">
                        <?php endif; ?>
                    </div>
                    
                    <button type="submit" name="submit" class="btn btn-sm btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>