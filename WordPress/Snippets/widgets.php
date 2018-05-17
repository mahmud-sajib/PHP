<?php

// creating a professional widget (author bio)

class AuthorBio extends WP_Widget{

	/*
	  Register widget with WordPress
	*/

	public function __construct(){
		parent::__construct(
			'author_bio', // widget id
			'Author Bio', // widget name to display
			array(
			'description' => __('A simple widget to display author bio','twentyseventeen')
			// widgets description in an array  
		    )
		);
	}

	/*
	 * Front-end display of widget.
	 * @param $args sets Widget arguments.
	 * @param $instance fetch saved values from database.
	*/

	public function widget($args,$instance){

		$title = $instance['title'];
		$profession = $instance['profession'];
		$about = $instance['about'];

		$widget_content = $args['before_title']."Name: ".$title.$args['after_title'];
		$widget_content .= $args['before_title']."Profession: ".$profession.$args['after_title'];
		$widget_content .= $args['before_title']."About You: ".$about.$args['after_title'];

		echo $args['before_widget'].$widget_content.$args['after_widget'];

	}

	/*
	  Back-end widget form
	*/

	public function form($instance){

		$title = !empty($instance['title']) ? $instance['title'] : 'Your Name';
		$profession = !empty($instance['profession']) ? $instance['profession'] : 
		'Profession Please';
		$about = !empty($instance['about']) ? $instance['about'] : 'Write something About u';

		?>

		<p> 
			<label for="<?php echo $this->get_field_id('title'); ?>">Name</label>
			<input id="<?php echo $this->get_field_id('title'); ?>" type="text" name="<?php echo $this->get_field_name('title'); ?>" value="<?php echo $title; ?>" > 
		</p>

		<p> 
			<label for="<?php echo $this->get_field_id('profession'); ?>">Job</label>
			<input id="<?php echo $this->get_field_id('profession'); ?>" type="text" name="<?php echo $this->get_field_name('profession'); ?>" value="<?php echo $profession; ?>" > 
		</p>

		<p> 
			<label for="<?php echo $this->get_field_id('about'); ?>">About you</label>
			
			<textarea name="<?php echo $this->get_field_name('about'); ?>" id="<?php echo $this->get_field_id('about'); ?>" placeholder="<?php echo $about; ?>" cols="30" rows="6"></textarea>
		</p>

		<?php
	}

	/*
	 * @param $new_instance refers to new values just sent to be saved
	 * @param $old_instance refers to previously saved values from database
	 * $instance holds the values of $new_instance in an array
	 */

	public function update($new_instance,$old_instance){

		$instance = array();
		$instance['title'] = $new_instance['title'];
		$instance['profession'] = $new_instance['profession'];
		$instance['about'] = $new_instance['about'];
		return $instance;

	}

}

// registering the widget

function author_bio_widget(){
	register_widget('AuthorBio');
}

add_action('widgets_init','author_bio_widget');















