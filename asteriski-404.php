<?php
/**
 * Plugin Name:       404 surprise for Asteriski ry
 * Plugin URI:        https://takiainen.fi
 * Description:       Plugin to add some spice to 404.
 * Requires at least: 5.8
 * Requires PHP:      7.0
 * Version:           0.1.0
 * Author:            Roosa Virta
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       asteriski-404
 * Domain Path:       /languages
 *
 * @package           asteriski-404
 */

add_action('generate_after_content', 'dino_game');

function dino_game(){
    if(is_404()){
        echo '<div class="dino-game-container">';
        include_once plugin_dir_path(__FILE__).'chrome-dino/game.php';
        echo '</div>';
    }
}