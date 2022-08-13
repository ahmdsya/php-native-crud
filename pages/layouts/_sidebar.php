<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">PHP Native <sup>CRUD</sup></div>
    </a>

    <hr class="sidebar-divider my-0">

    <li class="nav-item <?= (!isset($_GET['page']) ? 'active' : '') ?>">
        <a class="nav-link" href="index.php">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <li class="nav-item <?= $_GET['page'] == 'prodi' ? 'active' : '' ?>">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true"
            aria-controls="collapseTwo">
            <i class="fas fa-fw fa-cog"></i>
            <span>Data Master</span>
        </a>
        <div id="collapseTwo" class="collapse <?= $_GET['page'] == 'prodi' ? 'show' : '' ?>" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item <?= $_GET['page'] == 'prodi' ? 'active' : '' ?>" href="index.php?page=prodi">Program Studi</a>
            </div>
        </div>
    </li>

    <li class="nav-item <?= $_GET['page'] == 'mahasiswa' ? 'active' : '' ?>">
        <a class="nav-link" href="index.php?page=mahasiswa">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Data Mahasiswa</span></a>
    </li>

    <hr class="sidebar-divider d-none d-md-block">

    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>