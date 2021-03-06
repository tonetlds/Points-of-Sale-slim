<?php

/**
 * POINTS OF SALE slim
 *
 * @link              https://github.com/tonetlds/Points-of-Sale-slim
 * @since             1.0.1
 * @package           Points_Of_Sale
 *
 * @wordpress-plugin
 * Plugin Name:       Points Of Sale slim
 * Plugin URI:        https://github.com/tonetlds/Points-of-Sale-slim
 * Description:       Lista pontos de venda. Versão resumida de tonetlds/Points-of-Sale
 * Version:           2.0.0
 * Author:            Luciano Tonet
 * Author URI:        https://lucianotonet.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       points-of-sale
 * Domain Path:       /languages
 * GitHub Plugin URI: https://github.com/tonetlds/Points-of-Sale-slim
 * GitHub Branch:     master
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-points-of-sale-activator.php
 */
function activate_points_of_sale() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-points-of-sale-activator.php';
	Points_Of_Sale_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-points-of-sale-deactivator.php
 */
function deactivate_points_of_sale() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-points-of-sale-deactivator.php';
	Points_Of_Sale_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_points_of_sale' );
register_deactivation_hook( __FILE__, 'deactivate_points_of_sale' );

/**
 * The core plugin class that is used to define internationalization,
 * dashboard-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-points-of-sale.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_points_of_sale() {

	$plugin = new Points_Of_Sale();
	$plugin->run();

}
run_points_of_sale();
