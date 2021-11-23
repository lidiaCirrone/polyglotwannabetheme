			<?php
				// If Single or Archive (Category, Tag, Author or a Date based page).
				if ( is_single() || is_archive() ) :
			?>
					<!-- </div> --><!-- /.col -->

					<!-- sidebar ??? -->

				<!-- </div> --><!-- /.row -->
			<?php
				endif;
			?>
		</main><!-- /#main -->
		<footer id="footer">
			<div class="container">
				<div class="row">
					<div class="col text-center text-white small">
						<p><?php printf( esc_html__( '&copy; %1$s %2$s', 'polyglotwannabe' ), date_i18n( 'Y' ), strtolower(get_bloginfo( 'name', 'display' ) )); ?></p>
					</div>
				</div><!-- /.row -->
			</div><!-- /.container -->
		</footer><!-- /#footer -->
	</div><!-- /#wrapper -->
	<?php
		wp_footer();
	?>
</body>
</html>
