		<?php do_atomic( 'after_container' ); ?>

	</div><!-- #container -->

	<?php do_atomic( 'before_footer' ); ?>

	<div id="footer-container" class="<?php echo apply_atomic( 'footer_container_class', '' ); ?>">

		<?php do_atomic( 'open_footer' ); ?>

		<div id="footer">

			<?php do_atomic( 'footer' ); ?>

		</div>

		<?php do_atomic( 'close_footer' ); ?>

	</div>

	<?php do_atomic( 'after_footer' ); ?>

</div><!-- #body-container -->


<?php do_atomic( 'after_html' ); ?>
<?php wp_footer(); ?>

</body>
</html>