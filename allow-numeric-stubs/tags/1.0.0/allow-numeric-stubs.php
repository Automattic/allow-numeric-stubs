<?php /*

**************************************************************************

Plugin Name:  Allow Numeric Stubs
Plugin URI:   http://www.viper007bond.com/wordpress-plugins/allow-numeric-stubs/
Description:  Allows children Pages to have a stub that is only a number. Sacrifices the <code>&lt;!--nextpage--&gt;</code> ability in Pages to accomplish it.
Version:      1.0.0
Author:       Viper007Bond
Author URI:   http://www.viper007bond.com/

**************************************************************************

Copyright (C) 2008 Viper007Bond

This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program.  If not, see <http://www.gnu.org/licenses/>.

**************************************************************************/

// Register plugin hooks
register_activation_hook( __FILE__, 'allow_numeric_stubs_activate' );
add_filter( 'page_rewrite_rules', 'allow_numeric_stubs' );


// Force a flush of the rewrite rules when this plugin is activated
function allow_numeric_stubs_activate() {
	global $wp_rewrite;
	$wp_rewrite->flush_rules();
}


// Remove the rule that "breaks" it and replace it with a non-paged version
function allow_numeric_stubs( $rules ) {
	unset( $rules['(.+?)(/[0-9]+)?/?$'] );

	$rules['(.+?)?/?$'] = 'index.php?pagename=$matches[1]';

	return $rules;
}

?>