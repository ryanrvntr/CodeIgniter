<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<!-- Begin page content -->
<main role="main">
	<section class="jumbotron text-center">
		<div class="container">
			<h1 class="jumbotron-heading"><?php echo $page_title ?></h1>
			<?php if ($this->session->userdata('level') == 1 || 'level' == 2):
					if ($this->session->userdata('logged_in') == true): ?>
			<p>
				<?php echo anchor('blog/create', 'Tulis Artikel', array('class' => 'btn btn-primary')); ?>
			</p>
			<?php 
			endif;
			endif; ?>
		</div>
	</section>
		<?php var_dump($this->session->userdata('user_id')); ?>
	<?php var_dump($this->session->userdata('level')); ?>
	<?php var_dump($this->session->userdata('logged_in')); ?>
	<?php if( !empty($all_artikel) ) : ?>
		<div class="album py-5 bg-light">
			<div class="container">
				<div class="row">

					<?php
					foreach ($all_artikel as $key) :
						?>

						<div class="col-md-6">
							<div class="media mb-4 box-shadow border-0 bg-white">
								<?php if( $key->post_thumbnail ) : ?>
									<img class="mr-3" src="<?php echo base_url() .'uploads/'. $key->post_thumbnail ?>" alt="Card image cap" style="height: 200px; width: 200px;">
									<?php ; else : ?>
									<img class="mr-3" data-src="holder.js/100px190?theme=thumb&bg=eaeaea&fg=aaa&text=Thumbnail" alt="Card image cap" style="height: 200px; width: 200px;">
								<?php endif; ?>

								<div class="card-body">
									<h5><?php echo character_limiter($key->post_title, 40) ?></h5>
									<small class="text-success text-uppercase"><?php echo $key->cat_name ?></small>
									<p class="card-text"><?php echo word_limiter($key->post_content, 10) ?></p>

									<div class="d-flex justify-content-between align-items-center">
										<div class="btn-group">
											<!-- Untuk link detail -->
											<a href="<?php echo base_url(). 'blog/read/' . $key->post_slug ?>" class="btn btn-outline-secondary">Baca</a>
											<a href="<?php echo base_url(). 'blog/edit/' . $key->post_id ?>" class="btn btn-outline-secondary">Edit</a>
										</div>
										<small class="text-muted"><?php echo time_ago($key->post_date) ?></small>
									</div>
								</div>

							</div>
						</div>
					<?php endforeach; ?>

				</div>
			</div>
		</div>
	<?php else : ?>
		<center>
			<p>Belum ada data gan..</p>
		</center>
	<?php endif; ?>
	<?php
        // $links ini berasal dari fungsi pagination
        // Jika $links ada (data melebihi jumlah max per page), maka tampilkan
	if (isset($links)) {
		echo $links;
	}
	?>

</main>
