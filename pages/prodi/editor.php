<?php 
    $id = isset($_GET['id']) ? $_GET['id'] : false;
?>

<div class="row">
    <div class="col-md-12">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary d-inline-block">
                    <?= ($_GET['mode'] == PAGE_MODE_CREATE ? 'Tambah' : 'Edit') ?> Program Studi
                </h6>
                <a href="index.php?page=prodi" class="btn btn-sm btn-success float-right">Kembali</a>
            </div>
            <div class="card-body">
                <form method="post">
                    <div class="form-group">
                        <label for="nama_prodi">Nama Prodi</label>
                        <input type="hidden" name="mode" value="<?= $_GET['mode'] ?>">
                        <input type="hidden" name="id" value="<?= $id ?>">
                        <input type="text" name="nama_prodi"
                            value="<?= ($id ? $prodi->getData($id)->nama_prodi : '') ?>" class="form-control"
                            id="nama_prodi" style="width: 50%;" placeholder="Masukkan nama prodi" required>
                        <button type="submit" name="submit" class="btn btn-sm btn-primary mt-3">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>