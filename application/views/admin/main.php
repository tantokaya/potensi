<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="shortcut icon" href="<?php echo base_url();?>assets/img/GameRanger.ico">
    <title> <?php echo $judul_halaman; ?> - TBOFF Software</title>

    <meta name="description" content="overview &amp; stats" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <?php include "incl.php"; ?>

    <!--inline styles related to this page-->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>

<body>
<div class="navbar">
    <div class="navbar-inner">
        <div class="container-fluid">
            <?php
            include "brand.php";
            include "ace-nav.php";
            ?>

        </div><!--/.container-fluid-->
    </div><!--/.navbar-inner-->
</div>

<div class="main-container container-fluid">
    <a class="menu-toggler" id="menu-toggler" href="#">
        <span class="menu-text"></span>
    </a>

    <div class="sidebar" id="sidebar">
        <?php
        if($this->session->userdata('id_level')=='01'){
            echo $this->load->view('admin/menu_super');
        }elseif($this->session->userdata('id_level')=='02'){
            echo $this->load->view('admin/menu_admin');
        }else{
            echo $this->load->view('admin/menu_user');
        }
        ?>

    </div>

    <div class="main-content">
        <?php include_once "script.php"; ?>
        <?php echo $content; ?>


    </div><!--/.main-container-->



</body>
</html>
