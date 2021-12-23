<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       www.tk.te.ua
 * @since      1.0.0
 *
 * @package    Tailoring
 * @subpackage Tailoring/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the public-facing stylesheet and JavaScript.
 *
 * @package    Tailoring
 * @subpackage Tailoring/public
 * @author     Mariia <mkapacila@gmail.com>
 */
class Tailoring_Public {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of the plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Tailoring_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Tailoring_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/tailoring-public.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Tailoring_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Tailoring_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/tailoring-public.js', array( 'jquery' ), $this->version, false );

	}

}

class hstngr_widget extends WP_Widget {

//Вставляйте функции сюда
function __construct() {
parent::__construct(
// widget ID
'tailoring_widget',
// widget name
__('tailoring', ' hstngr_widget_domain'),
// widget description
array( 'description' => __( 'Как создать виджеты для WordPress', 'hstngr_widget_domain' ), )
);}
	
	
	public function widget( $args, $instance ) {
$title = apply_filters( 'widget_title', $instance['title'] );?>
	<form action="#" method="POST">
      <p>Оберіть розмір</p>
		<p><input type="radio" name="size" placeholder="Розмір" value="rad01">100*100 <Br>
		<input type="radio" name="size" placeholder="Розмір" value="rad02">120*90<Br>
		<input type="radio" name="size" placeholder="Розмір" value="rad03">120*120</p>
		<input type="varchar[25]" name="Color" placeholder="Колір">
		 <p>Оберіть кількість одиниць в межах 1 - 10</p>
		<input type="range" min="1" max="10" name="count" placeholder="Кількість">
		<p><input type="varchar[25]" name="Material" placeholder="Тканина"></p>
		<p><input type="varchar[25]" name="Name" placeholder="Ім'я"></p>
		<p><input type="varchar[25]" name="Surname" placeholder="Прізвище"></p>
		<p><input type="text" name="Phone" placeholder="Номер телефону"></p>
		<p>Оберіть метод доставки</p>
		<p><input type="radio" name="delivery" placeholder="Доставка" value="rad1">Самовивіз з магазину <Br>
		<input type="radio" name="delivery" placeholder="Доставка" value="rad2">Доставка по Тернополю<Br>
		<input type="radio" name="delivery" placeholder="Доставка" value="rad3">Доставка по Україні</p>
		<p><input type="varchar[25]" name="Address" placeholder="Адреса"></p>
        <p><input type="submit" value="Надіслати заявку"></p>
    </form>
	</body>
	</html>
	<?php
}
	
	public function form( $instance ) {
$colors = $_POST['Color'];
	$named = $_POST['Name'];
	$materials = $_POST['Material'];
	$surnames = $_POST['Surname'];
	$phones = $_POST['Phone'];
	$addresa = $_POST['Address'];
	
	global $wpdb;
			
	$wpdb -> insert('wp_tailoring',
	array(
		'color'=>"$colors",
		'name'=>"$named",
		'material'=>"$materials",
		'surname'=>"$surnames",
		'phone'=>"$phones",
		'address'=>"$addresa",
	),
	array('%s', '%s', '%s','%s','%s')
); ?>
</p>
<?php
}
	
	
	public function update( $new_instance, $old_instance ) {

}
}
	function hstngr_register_widget() {
register_widget( 'hstngr_widget' );
}
add_action( 'widgets_init', 'hstngr_register_widget' );
