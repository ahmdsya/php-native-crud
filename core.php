<?php 

$page = (isset($_GET['page']) ? $_GET['page'] : false);

require_once 'constants/constants.php';
require_once 'database/Database.php';

// require_once 'function/Test.php';
require_once 'function/Session.php';
require_once 'function/Prodi.php';
require_once 'function/Mahasiswa.php';

require_once 'actions/prodi.php';
require_once 'actions/mahasiswa.php';
