
<div class="row">
    <div class="col-md-12">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary d-inline-block">Program Studi</h6>
                <a href="index.php?page=prodi&mode=<?= PAGE_MODE_CREATE ?>"
                    class="btn btn-sm btn-primary float-right">Tambah</a>
            </div>
            <div class="card-body">

                <?php if($session->get('success') || $session->get('error')): ?>
                <div class="alert alert-dismissible fade show <?= ($session->get('error') ? 'alert-danger' : 'alert-success') ?>" role="alert">
                    <?= $session->get('success') ? $session->get('success') : $session->get('error') ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <?php endif; ?>
                    
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th width=10% class="text-center">NO</th>
                            <th>Program Studi</th>
                            <th class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($prodi->getData() as $index => $row): ?>
                        <tr>
                            <td class="text-center"><?= $index+1 ?></td>
                            <td><?= $row->nama_prodi ?></td>
                            <td class="text-center">
                                <form method="post">
                                    <input type="hidden" name="id" value="<?= $row->id ?>">
                                    <a href="index.php?page=prodi&mode=<?= PAGE_MODE_EDIT ?>&id=<?= $row->id ?>" class="btn btn-sm btn-warning">Edit</a>
                                    <button type="submit" name="delete" class="btn btn-sm btn-danger">Hapus</button>
                                </form>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>