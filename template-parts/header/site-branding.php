<?php
/**
 * child theme Displays header site branding
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */
?>
<div class="site-branding">

	<div class="header-title">
		<div class="menu-icon-user-area">
			<a href="#">teste</a>
		</div>

		<?php $blog_info = get_bloginfo( 'name' ); ?>
		<?php if ( ! empty( $blog_info ) ) : ?>
			<?php if ( is_front_page() && is_home() ) : ?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<?php else : ?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
			<?php endif; ?>
		<?php endif; ?>
	</div>

	<div class="header-nav">
		<?php if ( has_nav_menu( 'menu-1' ) ) : ?>

				<nav id="site-navigation" class="main-navigation" aria-label="<?php esc_attr_e( 'Top Menu', 'twentynineteen-child' ); ?>">
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'menu-1',
							'menu_class'     => 'main-menu',
							'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
						)
					);
					?>
				</nav><!-- #site-navigation -->

		<?php endif; ?>
	</div>

</div><!-- .site-branding -->
