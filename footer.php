
<footer id="footer">
			<div class="container">
				<div class="row top">

				<?php if (is_active_sidebar('footer1')) : ?>
					<div class="col-xs-12 col-sm-6 col-md-4">
						<?php dynamic_sidebar('footer1')?>
					</div>
				<?php endif; ?>

				<?php if (is_active_sidebar('footer2')) : ?>
					<div class="col-xs-12 col-sm-3 col-md-3 col-md-offset-1">
						<?php dynamic_sidebar('footer2')?>
					</div>
				<?php endif; ?>

				<?php if (is_active_sidebar('footer3')) : ?>
					<div class="col-xs-12 col-sm-3 col-md-3 col-md-offset-1">
						<?php dynamic_sidebar('footer3')?>
					</div>
				<?php endif; ?>

				</div>
				<div class="row bottom">
					<div class="col-xs-12">
						<?php dynamic_sidebar('footer4')?>
					</div>
				</div>
			</div>
		</footer>

	</div>



</footer>

<?php wp_footer(); ?>
</body>
</html>


