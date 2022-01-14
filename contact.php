<?php
    /*
    Template Name: Kontakt
    */
?>

<?php get_header(); ?>

<main>
			<section>
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-md-8 col-md-offset-2">
							<h1><?php wp_title(''); ?></h1>
							<form>
								<label>Namn</label>
								<input type="text" name="name" value="<?php echo $name;?>">
								<label>E-post</label>
								<input type="email" name="email" value="<?php echo $email;?>">
								<label>Meddelande</label>
								<textarea name="message" ><?php echo $message;?></textarea>
								<input type="submit" value="Skicka" />
							</form>
						</div>
					</div>
				</div>
			</section>
        </main>

<?php get_footer(); ?>