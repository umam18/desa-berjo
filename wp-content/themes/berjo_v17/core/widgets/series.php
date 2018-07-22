<?php

class VLOG_Series_Widget extends WP_Widget {

	var $defaults;

	function __construct() {
		$widget_ops = array( 'classname' => 'vlog_series_widget', 'description' => esc_html__( 'Display your series (playlists) with this widget', 'vlog' ) );
		$control_ops = array( 'id_base' => 'vlog_series_widget' );
		parent::__construct( 'vlog_series_widget', esc_html__( 'Vlog Series (Playlists)', 'vlog' ), $widget_ops, $control_ops );

		$this->defaults = array(
			'title' => esc_html__( 'Playlists', 'vlog' ),
			'series' => array(),
			'count' => 1
		);
	}


	function widget( $args, $instance ) {
		extract( $args );
		$instance = wp_parse_args( (array) $instance, $this->defaults );

		echo $before_widget;

		$title = apply_filters( 'widget_title', $instance['title'] );

		if ( !empty($title) ) {
			echo $before_title . $title . $after_title;
		}

		$instance['count'] = true;
		?>

		<ul>
		    <?php $cats = get_terms( array('taxonomy' => 'series', 'include'	=> $instance['series']) ); ?>
		    <?php $cats = vlog_sort_option_items( $cats,  $instance['series']); ?>
		    <?php foreach($cats as $cat): ?>
		    	<?php $count = !empty($instance['count']) ? '<span class="vlog-count">'.$cat->count.'</span>' : ''; ?>
		    	<li><a href="<?php echo esc_url(get_category_link($cat)); ?>"><span class="series-text"><?php echo $cat->name; ?></span><?php echo $count; ?></a></li>
		    <?php endforeach; ?> 
		</ul>

		<?php
		echo $after_widget;
	}


	function update( $new_instance, $old_instance ) {
		
		$instance = $old_instance;
		
		$instance['title'] = strip_tags( $new_instance['title'] );
		$instance['series'] = !empty($new_instance['series']) ? $new_instance['series'] : array();
		$instance['count'] = isset($new_instance['count']) ? 1 : 0;
		
		return $instance;
	}

	function form( $instance ) {

		$instance = wp_parse_args( (array) $instance, $this->defaults ); ?>

		<p>
			<label for="<?php echo esc_attr($this->get_field_id( 'title' )); ?>"><?php esc_html_e( 'Title', 'vlog' ); ?>:</label>
			<input id="<?php echo esc_attr($this->get_field_id( 'title' )); ?>" type="text" name="<?php echo esc_attr($this->get_field_name( 'title' )); ?>" value="<?php echo esc_attr( $instance['title'] ); ?>" class="widefat" />
		</p>

		<?php $cats = get_terms( array('taxonomy' => 'series', 'hide_empty' => false, 'number' => 0 ) ); ?>
		<?php $cats = vlog_sort_option_items( $cats,  $instance['series']); ?>

		<p class="vlog-widget-content-sortable">
		<?php foreach ( $cats as $cat ) : ?>
		   	<?php $checked = in_array( $cat->term_id, $instance['series'] ) ? 'checked' : ''; ?>
		   	<label><input type="checkbox" name="<?php echo esc_attr($this->get_field_name( 'series' )); ?>[]" value="<?php echo esc_attr($cat->term_id); ?>" <?php echo esc_attr($checked); ?> /><?php echo $cat->name;?></label>
		<?php endforeach; ?>
		</p>

		<p>
			<label><input type="checkbox" name="<?php echo esc_attr($this->get_field_name( 'count' )); ?>" value="1" <?php echo checked($instance['count'], 1, true); ?> /><?php esc_html_e( 'Show post count?', 'vlog' ); ?></label>
		</p>

		<?php
	}

}

?>
