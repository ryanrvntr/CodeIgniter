<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?><!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Ryan R</title>
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.13/datatables.min.css"/>
        <!-- Style tambahan
        Note: Jika menginginkan style CSS tambahan, gunakan file custom.css sehingga file CSS asli milik Bootstrap tetap orisinil. Tujuannya, agar nantinya jika ada update baru dari Bootstrap dan ingin kita implementasikan, maka custom style kita tidak tertimpa.
      -->
      <!-- <link rel="stylesheet" href="<?php //echo base_url() ?>assets/css/theme.min.css"> -->
      <!--  <link rel="stylesheet" href="<?php //echo base_url() ?>assets/css/custom.css">-->
    </head>
    <body>
      <nav class="navbar navbar-expand-md navbar-dark bg-dark box-shadowf">
        <a class="navbar-brand" href="#">Ryan R</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainnavbar" aria-controls="mainnavbar" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="mainnavbar">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <a class="nav-link" href="<?php echo site_url() ?>">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo site_url() ?>biodata">Biodata</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo site_url() ?>blog">Artikel</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo site_url() ?>category">Kategori</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo site_url() ?>about">About</a>
            </li>
          </ul>

          <div class="btn-group" role="group" aria-label="Data baru">
            <?php // echo anchor('blog/create', 'Artikel Baru', array('class' => 'btn btn-outline-light')); ?>
            <?php //echo anchor('category/create', 'Kategori Baru', array('class' => 'btn btn-outline-light')); ?>

          </div>
          <?php if($this->session->userdata('user_login')){ ?>
          <a class="nav-link" href="<?php echo site_url() ?>user/logout">Logout</a>
          <?php }  else { ?>
          <a class="nav-link" href="<?php echo site_url() ?>user/login">Login</a>
          <?php } ?>
        </div>
        <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
        <script>
          jQuery(document).ready(function(){

       // Contoh inisialisasi Datatable tanpa konfigurasi apapun
       // #dt-basic adalah id html dari tabel yang diinisialisasi
       $('#dt-basic').DataTable();
     });

          jQuery(document).ready(function(){
            $('#dt-ajax').DataTable({
              "ajax": "<?php echo base_url() ?>datatables/get_json",
              "columns": [
              { "data": "post_id" },
              { "data": "date_created" },
              { "data": "post_title" },
              { "data": "cat_name" },
              { "data": "post_status" },
      // Kolom Action
      {
        "data" : null,
        "render": function (data) {
          return '<a href="<?php echo base_url('blog/edit/') ?>'+ data.post_id + '" class="btn btn-sm btn-outline-warning">Edit</a> <a href="<?php echo base_url('blog/delete/') ?>'+ data.post_id + '" class="btn btn-sm btn-outline-danger">Delete</a>'
        }
      },
      ],
    });
          });
        </script>
      </nav>

      <!-- akhir Header -->
