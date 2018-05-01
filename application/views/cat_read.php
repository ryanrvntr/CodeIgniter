<?php $this->load->view('header'); ?>

<br><br><br><br>
     <main role="main" class="container">
      <a href="<?php echo base_url('index.php/category/create') ?>" class="btn btn-primary mb-3">Tambah</a>
     <table class="table table-bordered">
       <thead>
         <th>#</th>
         <th>Name</th>
         <th>Description</th>
         <th>Action</th>
       </thead>
       <tbody>
         <?php foreach ($cat_read as $key => $value): ?>
           <tr>
             <td><?php echo $key+1 ?></td>
             <td><?php echo $value['cat_name'] ?></td>
             <td><?php echo $value['cat_description'] ?></td>
             <td>
               <a href="<?php echo base_url('index.php/category/update/'.$value['cat_id']) ?>" class="btn btn-sm btn-success">Ubah</a>
               <a href="<?php echo base_url('index.php/category/delete/'.$value['cat_id']) ?>" class="btn btn-sm btn-danger">Hapus</a>
             </td>
           </tr>
         <?php endforeach ?>
       </tbody>
     </table>
    </main>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
<?php $this->load->view('footer'); ?>