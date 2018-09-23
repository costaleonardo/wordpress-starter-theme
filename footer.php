		<div class="sidebar">
			<!-- Check for sidebar -->
			<?php if (is_active_sidebar('sidebar')) : ?>
				<?php dynamic_sidebar('sidebar'); ?>
			<?php endif; ?>
		</div>
		<div class="clr"></div>
	</div>

	<?php wp_footer(); ?>
</body>
</html>
