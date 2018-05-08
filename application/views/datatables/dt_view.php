<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<main role="main">
  <section class="jumbotron text-center">
    <div class="container">
    </div>
  </section>
  <div class="album py-5 bg-light">
    <div class="container">
      <table id="dt-basic" class="table table-striped table-bordered">
        <thead>
          <tr>
            <th>ID</th>
            <th>Tanggal</th>
            <th>Judul</th>
            <th>Kategori</th>
            <th>Status</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($data as $d) : ?>
            <tr>
              <td><?php echo $d->post_id ?></td>
              <td><?php echo $d->post_date ?></td>
              <td><?php echo $d->post_title ?></td>
              <td><?php echo $d->cat_name ?></td>
              <td><?php echo $d->post_status ?></td>
              <td >
                <a href="<?php echo base_url('/blog/edit/') . $d->post_id ?>" class="btn btn-sm btn-warning">Edit</a>
                <a href="<?php echo base_url('/blog/delete/') . $d->post_id ?>" class="btn btn-sm btn-danger">Delete</a></td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>
  </main>