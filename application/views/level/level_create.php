<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<main role="main" class="container">
  <section class="jumbotron text-center">
    <div class="container">
      <h1 class="jumbotron-heading"><?php	echo $page_title ?></h1>
    </div>
  </section>
  <section>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 offset-lg-2">
          <?php
          $this->form_validation->set_error_delimiters('<div class="alert alert-warning" role="alert">', '</div>');
          echo validation_errors();
          echo form_open('level/create', array('class' => 'needs-validation', 'novalidate' => ''));
          ?>
          <div class="form-group">
            <label>Level</label>
            <input type="text" class="form-control" name="level" placeholder="level"value="<?php echo set_value('level') ?>" required autofocus>
            <!-- <div class="invalid-feedback">Isi Nama Anda</div> -->
          
          <button type="submit" class="btn btn-primary">Daftar</button>
          <?php echo form_close(); ?>
        </div>
      </div>
    </div>
  </section>
</main>