<?php
session_start();
require_once "../../config/utils.php";
//checkAdminLoggedIn();

#lấy tất cả bản ghi của bảng users

$getAllMemberSql = "select * from users where role_id = 1 ";
$users = queryExcute($getAllMemberSql, true);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php require_once "../_share/style.php"; ?>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
    <div class="content-wrapper">
        <!-- Navbar -->
        <?php include_once '../_share/header.php'; ?>
        <!-- .navbar -->

        <!-- Content wrapper. contains page content -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0-text-dark">Dashboard</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item">
                                <a href="">Home</a>
                            </li>
                            <li class="breadcrumb-item active">
                                Dashboard v1
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <section class="content">
            <div class="col-lg-4 col-6">
             <div class="small-box bg-info">
                 <div class="inner">
                     <h3><?php count($users); ?></h3>
                     <p>Người dùng</p>
                 </div>
                 <div class="icon">
                     <i class="fa fa-users"></i>
                 </div>
                 <a href="<?= ADMIN_URL . 'users'?>" class="small-box-footer">Chi tiết<i class="fas fa-arrow-cricle-right"></i></a>
             </div>


            </div>
            <div class="col-lg-4 col-6">
                <div class="small-box bg-warning">
                    <div class="inner">
                        <h3><?= count($room)?>Phòng</h3>
                    </div>
                    <div class="icon">
                        <i class="fa fa-room"></i>
                    </div>
                    <a href="<?=ADMIN_URL . 'room'?>" class="small-box-footer">Chi tiết</a>
                </div>
            </div>
        </section>
    </div>
    <?php include_once '../_share/footer.php'; ?>
</div>
    <?php include_once '../_share/script.php'; ?>
</body>
</html>