<?php $this->load->view('header'); ?>

<br><br><br><br>
     <main role="main" class="container">
      <?php echo validation_errors() ?>
     <?php echo form_open( 'category/update/'.$cat_update['cat_id'], array('class' => 'needs-validation', 'novalidate' => '') ); ?>
	<div class="form-group">
   	<label for="cat_name">Nama Kategori</label>
   	<input type="text" class="form-control" name="cat_name" value="<?php echo $cat_update['cat_name'] ?>" required>
   	<div class="invalid-feedback">Isi judul dulu gan</div>
	</div>

	<div class="form-group">
   	<label for="text">Deskripsi</label>
   	<input type="text" class="form-control" name="cat_description" value="<?php echo $cat_update['cat_description'] ?>" required>
   	<div class="invalid-feedback">Isi deskripsinya dulu gan</div>
	</div>
	<button id="submitBtn" type="submit" class="btn btn-success">Ubah</button>
    </main>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
<?php $this->load->view('header'); ?>