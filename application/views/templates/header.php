<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?><!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Ryan R</title>
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/js/bootstrap.min.js">
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
      <?php if($this->session->userdata('logged_in')){ ?>
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
