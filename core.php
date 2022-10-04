<?php 

$page = (isset($_GET['page']) ? $_GET['page'] : false);

require_once 'app/constants/constants.php';
require_once 'app/database/Database.php';
require_once 'app/function/Session.php';

require_once 'app/function/Test.php';
require_once 'app/function/Auth.php';
require_once 'app/function/Prodi.php';
require_once 'app/function/Mahasiswa.php';

require_once 'app/actions/auth.php';
require_once 'app/actions/prodi.php';
require_once 'app/actions/mahasiswa.php';
