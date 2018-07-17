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
          echo form_open('user/register', array('class' => 'needs-validation', 'novalidate' => ''));
          ?>
          <div class="form-group">
            <label>Nama Lengkap</label>
            <input type="text" class="form-control" name="nama" placeholder="Nama Lengkap"value="<?php echo set_value('nama') ?>" required autofocus>
            <!-- <div class="invalid-feedback">Isi Nama Anda</div> -->
          </div>
          <div class="form-group">
            <label>Email</label>
            <input type="text" class="form-control" name="email" placeholder="Email" value="<?php echo set_value('email') ?>" required>
            <!-- <div class="invalid-feedback">Isi Email Anda</div> -->
          </div>
          <div class="form-group">
            <label>Kodepos</label>
            <input type="text" class="form-control" name="kodepos" placeholder="Kodepos" value="<?php echo set_value('kodepos') ?>" required>
            <!-- <div class="invalid-feedback">Isi Kodepos Anda</div> -->
          </div><div class="form-group">
            <label>Username</label>
            <input type="text" class="form-control" name="username" placeholder="Username" value="<?php echo set_value('username') ?>" required>
            <!-- <div class="invalid-feedback">Isi Username Anda</div> -->
          </div>
          <div class="form-group">
            <label>Password</label>
            <input type="password" class="form-control" name="password" placeholder="Password">
            <!-- <div class="invalid-feedback">Isi Password Anda</div> -->
          </div>
          <div class="form-group">
            <label for="">Jenis Akun</label>
            <?php foreach ($levels as $key) : ?>
              <?php if ($key->id != 1): ?>
                
              
              <div class="form-check">
                <input class="form-check-input" type="radio" name="membership" id="<?php echo $key->level; ?>" value="<?php echo $key->id ?>" checked>
                <label class="form-check-label" for="regulermember"><?php echo $key->level; ?></label>
              </div>
              <?php endif ?>
            <?php endforeach; ?>
          </div>
          
          <div class="form-group">
            <label>Konfirmasi Password</label>
            <input type="password" class="form-control" name="password2" placeholder="Password">
            <!-- <div class="invalid-feedback">Konfirmasi Password Anda</div> -->
          </div>
          <button type="submit" class="btn btn-primary">Daftar</button>
          <?php echo form_close(); ?>
        </div>
      </div>
    </div>
  </section>
</main>