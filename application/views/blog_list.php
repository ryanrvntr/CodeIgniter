<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>RYAN REVANTARA YUDA</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  </head>
  <body>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark mb-4">
      <a class="navbar-brand" href="#">RYAN R</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="#">Disabled</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url("index.php/Blog") ?>">Blog</a>
          </li>
        </ul>
      </div>
    </nav>
    <main role="main" class="container">
      <a href="<?php echo base_url("index.php/Blog/add_view") ?>" class="btn btn-primary">Tambah Blog</a>
      <br>
      <br>
      <ul class="list-unstyled">
      <?php foreach ($records as $key => $value): ?>
        <li class="media">
          <img class="mr-3" src="http://2.bp.blogspot.com/-NBHPU2GYupE/VU7cOUlO-XI/AAAAAAAAJRg/h76CEfX96BE/s1600/gambar%2Bhati%2B(5).jpg" alt="Generic placeholder image" width="100px" height="150px">
          <div class="media-body">
            <h6 class="text-muted"><?php echo $value['date'] ?></h6>
            <h5 class="mt-0 mb-1"><?php echo $value['title'] ?></h5>
            <?php echo $value['content'] ?>
            <br>
              <a href="<?php echo base_url('index.php/Blog/byId/'.$value['id']) ?>">View Details</a>
          </div>
      </li>
      <?php endforeach ?>
      </ul>
    </main>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
