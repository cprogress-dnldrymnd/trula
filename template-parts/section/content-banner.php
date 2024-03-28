<?php 
$DisplayData = new DisplayData();

if(!carbon_get_the_post_meta('hide_page_banner')) {
	?>
	<section id="page-banner" class="page-banner align-center background-image-cover overlay primary-overlay pt-medium pb-medium">
		<div class="container">
			<div class="content-holder-smaller color-white">
				<?php 	
				$DisplayData->title();
				$basename = basename(get_page_template());
				?>
				<?php if(get_the_content() && (basename(get_page_template()) != 'page.php') || get_post_type() == 'services') { ?>
					<div class="description-box">
						<?php the_content() ?>
					</div>
				<?php } ?>
				<?php if(!carbon_get_the_post_meta('hide_get_a_quote') || !carbon_get_the_post_meta('hide_request_callback')) { ?>
					<div class="button-group-wrapper justify-flex-start">
						<?php if(!carbon_get_the_post_meta('hide_get_a_quote')) { ?>
							<div class="button-box button-accent button-wide-padding">
								<a href="/get-life-insurance/">
									<span>Get a Quote</span>
								</a>
							</div>
						<?php } ?>
						<?php if(!carbon_get_the_post_meta('hide_request_callback')) { ?>
							<div class="button-box button-white button-wide-padding">
								<a href="/#hero-banner">
									<span>Request a Callback</span>
								</a>
							</div>
						<?php } ?>
					<?php } ?>

				</div>
			</div>
		</div>
	</section>
<?php }  else { ?>
	<style>
		.navbar-wrapper {
			border-bottom: 1px solid var(--border-color);
			border-top: 1px solid var(--border-color);
		}
	</style>
	<?php } ?>