<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              www.tk.te.ua
 * @since             1.0.0
 * @package           Tailoring
 *
 * @wordpress-plugin
 * Plugin Name:       dm_kids_tailoring
 * Plugin URI:        www.tk.te.ua
 * Description:       Цей плагін призначений для відправки форми замовлення на пошиття пеленок.
 * Version:           1.0.0
 * Author:            Mariia
 * Author URI:        www.tk.te.ua
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       tailoring
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'TAILORING_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-tailoring-activator.php
 */
function activate_tailoring() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-tailoring-activator.php';
	Tailoring_Activator::activate();
global $wpdb;

	require_once(ABSPATH.'wp-admin/includes/upgrade.php');

	dbDelta("CREATE TABLE IF NOT EXISTS `{$wpdb -> prefix}tailoring` (
		`id` INT(11) UNSIGNED NOT NULL PRIMARY KEY AUTO_INCREMENT,
		`size` VARCHAR(255) NOT NULL,
		`color` VARCHAR(255) NOT NULL,
		`count` VARCHAR(255) NOT NULL,
		`material` VARCHAR(255) NOT NULL,
		`name` VARCHAR(255) NOT NULL,
		`surname` VARCHAR(255) NOT NULL,
		`phone` VARCHAR(12) NOT NULL,
		`delivery` VARCHAR(255) NOT NULL,
		`city` VARCHAR(255) default null,
		`address` VARCHAR(255) default null,
		`department` VARCHAR(255) default null,
		`date_create` INT(10) default null
	) {$wpdb -> get_charset_collate()};");
	
	return TRUE;
}


/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-tailoring-deactivator.php
 */
function deactivate_tailoring() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-tailoring-deactivator.php';
	Tailoring_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_tailoring' );
register_deactivation_hook( __FILE__, 'deactivate_tailoring' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-tailoring.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */


function ref_func($atts) {  // [ref text="Текст ссылки" url="url ссылки"]
extract(shortcode_atts( array(),$atts));
?>
<form id="buy" action="#tailoring_work.php" method="POST">
      <p>Оберіть розмір</p>
		<p><select name="Size" id="1" required>
		<option value="" disabled selected>Виберіть розмір</option>
		<option value="90*90">90*90</option>
		<option value="90*100">90*100</option>
		<option value="100*100">100*100</option></select></p>
	<p>Оберіть кількість одиниць в межах 1 - 10</p>
	<p><input type="text" name="Count" placeholder="Вкажіть кількість"></p>
		<p><select name="Color" id="2" required>
		<option value="" disabled selected>Оберіть колір</option>
		<option value="Синій">Синій</option>
		<option value="Білий">Білий</option>
		<option value="Рожевий">Рожевий</option>
		<option value="Жовтий">Жовтий</option>
		<option value="Голубий">Голубий</option>
		<option value="Фіолетовий">Фіолетовий</option>
		<option value="Зелений">Зелений</option></select></p>
		<p><select name="Material" id="3" required>
		<option value="" disabled selected>Оберіть матеріал</option>
		<option value="Байка">Байка</option>
		<option value="Бавовна">Бавовна</option>
		<option value="Ситець">Ситець</option></select></p>
		<p><input type="text" name="Name" placeholder="Ім'я"></p>
		<p><input type="text" name="Surname" placeholder="Прізвище"></p>
		<p><input type="text" name="Phone_num" placeholder="Номер телефону"></p>
		<p>Оберіть метод доставки</p>
		<p><select name="Delivery" id="4" required>
		<option value="" disabled selected>Оберіть метод доставки</option>
		<option value="Самовивіз">Самовивіз</option>
		<option value="Тернополь">Доставка по Тернополю</option>
		<option value="Україна">Доставка по Україні</option></select></p>
		<p><input type="text" name="City" placeholder="Місто" value="-"></p>
		<p><input type="text" name="Address" placeholder="Адреса" value="-"></p>
		<p><input type="text" name="Department" placeholder="Відділення нової пошти" value="-"></p>
        <p><input type="submit" name = "Ok" value="Надіслати заявку"></p>
    </form>
<?php


$url = 'http://wordpress//';
return '<noindex><a href="'. $url .'" rel="nofollow">'.$text.'</a></noindex>';
}


if(isset($_POST['Ok'])){
	$size = $_POST['Size'];
	$colors = $_POST['Color'];
	$counts = $_POST['Count'];
	$materials = $_POST['Material'];
	$named = $_POST['Name'];
	$surnames = $_POST['Surname'];
	$phones = $_POST['Phone_num'];
	$delivery = $_POST['Delivery'];
	$city = $_POST['City'];
	$addresa = $_POST['Address'];
	$department = $_POST['Department'];
	
	global $wpdb;
	$wpdb -> insert($wpdb->prefix.'tailoring',
	array(
		'size'=>"$size",
		'color'=>"$colors",
		'count'=>"$counts",
		'material'=>"$materials",
		'name'=>"$named",
		'surname'=>"$surnames",
		'phone'=>"$phones",
		'delivery'=>"$delivery",
		'city'=>"$city",
		'address'=>"$addresa",
		'department'=>"$department",
	),
	array('%s', '%s', '%s','%s','%s','%s', '%s','%s','%s','%s','%s')
);

}



add_shortcode('ref', 'ref_func');




///////////
if(is_admin() == TRUE)
{
    new Tailoring_INIT_Menu_Table_Create();
	
}

class Tailoring_INIT_Menu_Table_Create
{
	public function __construct()
{
	add_action('admin_menu', array($this, 'createMenu'));
	add_filter('set-screen-option', array($this, 'setScreenOption'), 10, 3);
//	add_action('plugins_loaded', array($this, 'loadTextdomain'));
	
}
public function showScreenOptions()
{
	add_screen_option('per_page', array(
	'label' => __('Records', 'plance'),
	'default' => 10,
	'option' => 'plance_per_page'
));
	
}



public function createMenu()
{
	

	add_menu_page('Tailoring_Table_Create"', 'Пошиття', 'manage_options', 'tailoring_init_menu_table_create', array($this, 'createTable'));
}

public function createTable()
{
	$Table = new Tailoring_Menu_Table_Create();
	$Table -> prepare_items();

	?>
		<div class="wrap">
			<h2><?php _e( 'Tailoring', 'tailoring' );?></h2><a class="button" href="/wp-admin/options-general.php?page=tailoring">
			<i class="fa fa-pencil" aria-hidden="true"></i><?php _e( 'Add', 'tailoring' );?></a>
			<?php $Table -> display(); ?>
		</div>
	<?php
}

}

if(class_exists('WP_List_Table') == FALSE)
{
    require_once(ABSPATH.'wp-admin/includes/class-wp-list-table.php');
}

class Tailoring_Menu_Table_Create extends WP_List_Table
{
/* … */
public function prepare_items()
{
	//Sets
	$per_page = 5;

	/* Получаєм дані для формування таблиці */
	$data = $this -> table_data();

	/* Встановлюємо дані для пагінації */
	$this -> set_pagination_args( array(
		'total_items' => count($data),
		'per_page'    => $per_page
	));

	/* Ділимо масив на частини для пагінації */
	$data = array_slice(
		$data,
		(($this -> get_pagenum() - 1) * $per_page),
		$per_page
	);

	/* Встанолюємо дані колонок */
	    $this -> _column_headers = array(
		$this -> get_columns(), /* Отримуємо масив назв колокнок */
		$this -> get_hidden_columns(), /* Отримуємо масив назв колокнок котрі треба приховати */
		$this -> get_sortable_columns() /* Отримуємо масив назв колокнок котрі можна сортувати */
	);

	/* Встанолюємо дані таблиці */
	$this -> items = $data;
}

public function get_columns()
{
	return array(
		'cb' => '<input type="checkbox" />',
		'id'			=> 'ID',
		'size'		=> 'Розмір',
		'color'		=> 'Колір',
		'count'     => 'к-сть',
		'material'		=> 'Матеріал',
		'name'     => 'Ім\'я',
		'surname'     => 'Прізвище',
		'phone'     => 'Телефон',
		'delivery'     => 'Доставка',
		'citi'     => 'Місто',
		'address'     => 'Адреса',
		'department'     => 'Область',
		'date_create'     => 'Дата',
	);
}

function column_cb($item)
{
	return '<input type="checkbox" name="id[]" value="'.$item['id'].'" />';
}

function column_id($item)
{
	return $item['id'].' '.$this -> row_actions(array(
		'edit'	 => '<a class="button icon-edit" href="?page='.$_REQUEST['page'].'&action=edit&book='.$item['id'].'" >редагувати</a>',
		'delete' => '<a href="?page='.$_REQUEST['page'].'&action=delete&book='.$item['id'].'">видалити</a>',
	));
}

function get_bulk_actions()
{
	return array(
		'delete' => __('delete', 'plance'),
		'lock' => __('lock', 'plance'),
		'unlock' => __('unlock', 'plance'),
	);
}

public function get_hidden_columns()
{
	return array();
}

public function get_sortable_columns()
{
	return array(
		'id' => array('id', false),
		'size' => array('size', true),
		'color' => array('color', false),
		'count' => array('count', false),
	);
}
private function table_data()
{
	
	require_once( $_SERVER['DOCUMENT_ROOT'] . '/wp-config.php' );
require_once( $_SERVER['DOCUMENT_ROOT'] . '/wp-includes/wp-db.php' );
global $wpdb;
//	$wpdb->show_errors();
	$viewTailoring=$wpdb->get_results( 'SELECT * FROM '.$wpdb->prefix.'tailoring','ARRAY_A' );
	
	//print_r( $viewTailoring );
	//$wpdb->print_error();
	//$wpdb->hide_errors();
	
	return $viewTailoring;
	
	
}

public function column_default($item, $column_name )
{
	switch($column_name)
	{
		case 'id':
		case 'size':
		case 'color':
		case 'count':
		case 'material':
		case 'name':
		case 'surname':
		case 'phone':
		case 'delivery':
		case 'citi':
		case 'address':
		case 'department':
		case 'date_create':
			return $item[$column_name];
		default:
			return print_r($item, true);
	}
}


}


///////////////





function run_tailoring() {

	$plugin = new Tailoring();
	$plugin->run();

}
run_tailoring();
