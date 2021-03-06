<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

	<!-- Begin page content -->
	<main role="main" class="container">
		<section class="jumbotron text-center">
			<div class="container">
				<h3 class="jumbotron-heading"><?php echo $page_title ?> berhasil.</h5>
					<div class="btn-group" role="group" style="background: linear-gradient(90deg, #ba0520, #541389);">
							<?php echo anchor('category', 'Back to category', array('class' => 'btn btn-outline-light')); ?>
							<?php echo anchor('category/create', 'Create new category', array('class' => 'btn btn-outline-light')); ?>
					</div>
			</div>
		</section>
	</main>
