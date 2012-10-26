<?php
/*
Plugin Name: Composer Test Plugin
Plugin URI: http://github.com/kendru/composer-plugin-test
Description: Dummy WordPress plugin designed to show how to to use Composer in plugin develpment
Version: 0.1
Author: Andrew Meredith
Author URI: http://www.andrewmeredith.info
*/

/**
 * Copyright (c) 2012 Andrew Meredith <andymeredith@gmail.com>. All rights reserved.
 *
 * Released under the GPL license
 * http://www.opensource.org/licenses/gpl-license.php
 *
 * This is an add-on for WordPress
 * http://wordpress.org/
 *
 * **********************************************************************
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 * **********************************************************************
 */

require 'vendor/autoload.php';

$app = new \ComposerTestPlugin\App();
$app->setPluginDir(plugin_dir_path(__FILE__));
$app->init();