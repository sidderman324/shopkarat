		</div><!-- .col-full -->
	</div><!-- #content -->

	<?php do_action( 'storefront_before_footer' ); ?>

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="col-full">
			<?php do_action( 'storefront_footer' ); ?>
		</div><!-- .col-full -->
	</footer><!-- #colophon -->

	<?php do_action( 'storefront_after_footer' ); ?>
</div><!-- #page -->

<?php wp_footer(); ?>

        <?php if($_SERVER['REMOTE_ADDR'] === '127.0.0.1'): ?>
            <div class="development">DEVELOPMENT VERSION</div>
        <?php endif; ?>
</body>
</html>
