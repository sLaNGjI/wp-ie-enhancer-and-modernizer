<?php 
/*
Plugin Name: IE Enhancer and Modernizer
Plugin URI: https://slangji.wordpress.com/wp-ie-enhancer-and-modernizer/
Description: Fix and recalc HTML/CSS issues on IE5/IE6/IE7/IE8, transparent PNG on IE5/IE6, shiv (X)HTML5 elements on IE6/IE7/IE8, applies basic (X)HTML5 styling for elements on IE6/IE7/IE8/IE9, Safari 4.x (and iPhone 3.x), Firefox 3.x, allowing (X)HTML5 elements to be styled and contain children while being printed on IE6/IE7/IE8, render latest IE Edge or Chrome Frame version, squish some IE bugs and make it compatible with modern browsers, prevent framekiller, clickjacking and XSS on IE8+ browser, disable Imagetoolbar on IE6.
Version: 2014.0925.1858
Author: sLaNGjIs
Author URI: https://slangji.wordpress.com/plugins/
Requires at least: 2.1
Tested up to: 4.0
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Indentation: GNU style coding standard
Indentation URI: https://www.gnu.org/prep/standards/standards.html
 *
Network: True
 *
 * LICENSING
 *
 * [IE Enhancer and Modernizer](https://wordpress.org/plugins/wp-ie-enhancer-and-modernizer/) Make IE standards-compliant Browser
 *
 * Copyright (C) 2010-2016 [sLaNGjIs](https://slangji.wordpress.com/) (email: <slangjis [at] googlemail [dot] com>)
 *
 * This program is free software; you can redistribute it and/or
 * modify it under the terms of the [GNU General Public License](https://wordpress.org/about/gpl/)
 * as published by the Free Software Foundation; either version 2
 * of the License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * on an "AS IS", but WITHOUT ANY WARRANTY; without even the implied
 * warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 * See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, see [GNU General Public Licenses](https://www.gnu.org/licenses/),
 * or write to the Free Software Foundation, Inc., 51 Franklin Street,
 * Fifth Floor, Boston, MA 02110-1301, USA.
 *
 * DISCLAIMER
 *
 * The license under which the WordPress software is released is the GPLv2 (or later) from the
 * Free Software Foundation. A copy of the license is included with every copy of WordPress.
 *
 * Part of this license outlines requirements for derivative works, such as plugins or themes.
 * Derivatives of WordPress code inherit the GPL license.
 *
 * There is some legal grey area regarding what is considered a derivative work, but we feel
 * strongly that plugins and themes are derivative work and thus inherit the GPL license.
 *
 * The license for this software can be found on [Free Software Foundation](https://www.gnu.org/licenses/gpl-2.0.html)
 * and as license.txt into this plugin package.
 *
 * The author of this plugin is available at any time, to make all changes, or corrections, to respect these specifications.
 *
 * THERMS
 *
 * This uses (or it parts) code derived from
 *
 * wp-header-footer-log.php by sLaNGjIs <slangjis [at] googlemail [dot] com>
 * Copyright (C) 2009-2013 [sLaNGjIs](https://slangji.wordpress.com/) (email: <slangjis [at] googlemail [dot] com>)
 *
 * according to the terms of the GNU General Public License version 2 (or later)
 *
 * This wp-header-footer-log.php uses (or it parts) code derived from
 *
 * wp-footer-log.php by sLaNGjIs <slangjis [at] googlemail [dot] com>
 * Copyright (C) 2008-2013 [sLaNGjIs](https://slangji.wordpress.com/) (email: <slangjis [at] googlemail [dot] com>)
 *
 * sLa2sLaNGjIs.php by sLaNGjIs <slangjis [at] googlemail [dot] com>
 * Copyright (C) 2009-2013 [sLaNGjIs](https://slangji.wordpress.com/) (email: <slangjis [at] googlemail [dot] com>)
 *
 * according to the terms of the GNU General Public License version 2 (or later)
 *
 * According to the Terms of the GNU General Public License version 2 (or later) part of Copyright
 * belongs to your own author and part belongs to their respective others authors:
 *
 * Copyright (C) 2008-2013 [sLaNGjIs](https://slangji.wordpress.com/) (email: <slangjis [at] googlemail [dot] com>)
 *
 * VIOLATIONS
 *
 * [Violations of the GNU Licenses](https://www.gnu.org/licenses/gpl-violation.en.html)
 * The author of this plugin is available at any time, to make all changes, or corrections, to respect these specifications.
 *
 * GUIDELINES
 *
 * This software meet [Detailed Plugin Guidelines](https://wordpress.org/plugins/about/guidelines/)
 * paragraphs 1,4,10,12,13,16,17 quality requirements.
 *
 * The author of this plugin is available at any time, to make all changes, or corrections, to respect these specifications.
 *
 * CODING
 *
 * This software implement [GNU style](https://www.gnu.org/prep/standards/standards.html) coding standard indentation.
 * The author of this plugin is available at any time, to make all changes, or corrections, to respect these specifications.
 *
 * VALIDATION
 *
 * This readme.txt rocks. Seriously. Flying colors. It meet the specifications according to
 * WordPress [Readme Validator](https://wordpress.org/plugins/about/validator/) directives.
 *
 * The author of this plugin is available at any time, to make all changes, or corrections, to respect these specifications.
 *
 * EXTERNAL LICENSING
 *
 * [IE9.js - ie7-recalc.js - ie7-squish.js](https://code.google.com/p/ie7-js/) - Copyright 2004-2010,
 * Dean Edwards | MIT License
 *
 * [html5shiv-printshiv.js](https://code.google.com/p/html5shiv-printshiv/) - Copyright 2009-2013,
 * @afarkas @jdalton @jon_neal @rem | Dual MIT/GPLv2 or later License
 *
 * The [MIT License](https://www.opensource.org/licenses/mit-license.php) (MIT)
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 *
 * EXTERNAL LICENSING DISCLAIMER
 *
 * The MIT License is not related to this plugin, but to external linked .js script.
 * This plugin is only Licensed to GPLv2 or later License
 */

	/**
	 * @package WP IE Enhancer and Modernizer
	 * @subpackage WordPress PlugIn
	 * @description Make IE standards-compliant Browser Enhancer and Modernizer WordPress Surfing Experience
	 * @since 2.1+
	 * @version 2014.0925.1858
	 * @1stversion 2010.0427.0133
	 * @status STABLE (trunk) release
	 * @development Code in Becoming!
	 * @install The configuration of this Plugin is Automattic!
	 * @author sLaNGjIs
	 * @license GPLv2 or later
	 * @indentation GNU style coding standard
	 * @keytag 74be16979710d4c4e7c6647856088456
	 */

	if ( !function_exists( 'add_action' ) )
		{
			header( 'HTTP/0.9 403 Forbidden' );
			header( 'HTTP/1.0 403 Forbidden' );
			header( 'HTTP/1.1 403 Forbidden' );
			header( 'Status: 403 Forbidden' );
			header( 'Connection: Close' );
				exit();
		}

	global $wp_version;

	if ( $wp_version < 2.1 )
		{
			wp_die( __( 'This plugin requires WordPress 2.1+ or Greater to Function: Please Upgrade. Activation Stopped.' ) );
		}

	add_action( 'wp_head', 'wpieeam' );
	add_action( 'login_head', 'wpieeam' );
	add_action( 'admin_head', 'wpieeam' );

	add_filter( 'wp_headers', 'wpieeam_headers' );

	/**
	 * Adds a header to WordPress https://wordpress.org/support/topic/ie-edge-doesnt-work/
	 *
	 * @return array Where header => header value
	 */
	function wpieeam_headers($headers)
		{
			if ( isset($_SERVER['HTTP_USER_AGENT']) && (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') !== false) )
			$headers['X-UA-Compatible'] = 'IE=Edge,chrome=1';
				return $headers;
		}

	function wpieeam()
		{
			echo '
	<!--Start IE Enhancer and Modernizer Code-->
	<!--[if !IE]>
	<script src="//html5shiv-printshiv.googlecode.com/svn/trunk/html5shiv-printshiv.js"></script>
	<![endif]-->
	<!--[if IE 13]>
	<script src="//html5shiv-printshiv.googlecode.com/svn/trunk/html5shiv-printshiv.js"></script>
	<![endif]-->
	<!--[if IE 12]>
	<script src="//html5shiv-printshiv.googlecode.com/svn/trunk/html5shiv-printshiv.js"></script>
	<![endif]-->
	<!--[if IE 11]>
	<script src="//html5shiv-printshiv.googlecode.com/svn/trunk/html5shiv-printshiv.js"></script>
	<![endif]-->
	<!--[if IE 10]>
	<script src="//html5shiv-printshiv.googlecode.com/svn/trunk/html5shiv-printshiv.js"></script>
	<![endif]-->
	<!--[if IE 9]>
	<script src="//html5shiv-printshiv.googlecode.com/svn/trunk/html5shiv-printshiv.js"></script>
	<![endif]-->
	<!--[if lt IE 9]>
	<script src="//ie7-js.googlecode.com/svn/trunk/lib/IE9.js">IE7_PNG_SUFFIX=".png";</script>
	<script src="//ie7-js.googlecode.com/svn/trunk/lib/ie7-recalc.js</script>
	<script src="//ie7-js.googlecode.com/svn/trunk/lib/ie7-squish.js</script>
	<script src="//html5shiv-printshiv.googlecode.com/svn/trunk/html5shiv-printshiv.js"></script>
	<![endif]-->
	<!--[if gt IE 7]>
	<meta http-equiv="X-Content-Type-Options" content="nosniff">
	<meta http-equiv="X-XSS-Protection" content="1;mode=block">
	<![endif]-->
	<!--[if IE 6]>
	<meta http-equiv="imagetoolbar" content="no">
	<![endif]-->
	<!--[if IE]>
	<meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
	<![endif]-->
	<meta http-equiv="X-Frame-Options" content="SAMEORIGIN">
	<!--/End IE Enhancer and Modernizer Code-->
	';
		}

	add_filter( 'plugin_row_meta', 'wpieeam_rml', 10, 2 );

	function wpieeam_rml( $links, $file )
		{
			if ( $file == plugin_basename( __FILE__ ) )
				{
					$links[] = '<a title="Offer a Beer to sLa" href="https://slangji.wordpress.com/donate/">Donate</a>';
					$links[] = '<a title="Bugfix and Suggestions" href="https://slangji.wordpress.com/contact/">Contact</a>';

				global $wp_version;

				if ( $wp_version < 3.8 )
					{
						//$links[] = '<a title="Visit other author plugin" href="https://slangji.wordpress.com/plugins/">Other Plugin</a>';
					}

				if ( $wp_version >= 3.8 )
					{
						//$links[] = '<a title="Visit other author plugin" href="https://slangji.wordpress.com/plugins/">Other</a>';
					}

				}
			return $links;
		}

	add_action( 'wp_head', 'wpieeam_hfl' );
	add_action( 'wp_footer', 'wpieeam_hfl' );

	function wpieeam_hfl()
		{
			echo "\n<!--Plugin IE Enhancer and Modernizer 2014.0925.1858 Active - Tag " . md5( md5( "" . "" ) ) . "-->\n";
			echo "\n<!--Site Optimized to Enhancer and Modernizer IE WordPress Surfing Experience-->\n\n";
		}
?>