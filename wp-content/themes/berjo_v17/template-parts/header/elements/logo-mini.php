<div class="vlog-site-branding mini">
	<?php
		$logo_mini = vlog_get_option('logo_mini');
		$brand = !empty($logo_mini) ? '<img class="vlog-logo-mini" src="'.esc_url( $logo_mini ).'" alt="'.esc_attr(get_bloginfo( 'name' )).'" >' : get_bloginfo( 'name' );
	?>
	<span class="site-title h1"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php echo $brand; ?></a></span>
</div>