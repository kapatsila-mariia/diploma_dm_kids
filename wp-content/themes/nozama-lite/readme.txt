=== Nozama Lite ===
Theme Name: Nozama Lite
Theme URI: https://www.cssigniter.com/themes/nozama-lite/
Author URI: https://www.cssigniter.com/
Author: The CSSIgniter Team
Contributors: cssigniterteam
Stable tag: 1.4.1
Requires PHP: 5.6
Requires at least: 5.2
Tested up to: 5.6
License: GPLv2
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Nozama Lite is a beautiful E-Commerce theme for WordPress.

== Description ==

Nozama Lite is a beautiful E-Commerce theme for WordPress.

Theme page: https://www.cssigniter.com/themes/nozama-lite/
Demo: https://www.cssigniter.com/preview/nozama-lite/

Nozama Lite WordPress Theme, Copyright 2018 CSSIgniter LLC
Nozama Lite is distributed under the GNU General Public License, version 2

== Installation ==

1. In your dashboard, go to *Appearance > Themes* and click the *Add New* button.
2. Click *Upload Theme* and then click *Browse... / Choose File...*.
3. Select the theme's .zip file. Then click *Install Now*.
3. Click Activate to use your new theme right away.

== Documentation ==

Please visit https://www.cssigniter.com/docs/nozama-lite/

== Frequently Asked Questions ==

= I have a problem. Where can I get support? =
We are providing support for this theme, via the WordPress Theme forums at https://wordpress.org/support/theme/nozama-lite

== Resources ==
* Bootstrap - http://getbootstrap.com/
	Copyright (c) 2011-2018 Twitter, Inc.
	Copyright (c) 2011-2018 The Bootstrap Authors
	Released under the MIT license - http://opensource.org/licenses/MIT
* normalize.css v7.0.0 - https://github.com/necolas/normalize.css
	Copyright Nicolas Gallagher, Jonathan Neal
	Released under the MIT license - http://opensource.org/licenses/MIT
* Font Awesome 5.1.0 - http://fontawesome.io
	Copyright Dave Gandy
	Font files licensed under SIL OFL 1.1 - http://scripts.sil.org/OFL
	CSS files licensed under the MIT license - http://opensource.org/licenses/MIT
* Alpha Color Picker - https://github.com/BraadMartin/components/tree/master/alpha-color-picker
	Copyright Braad Martin
	Released under the GPL license - http://www.gnu.org/licenses/gpl.html
* Alpha Color Picker Customizer Control - https://github.com/BraadMartin/components/tree/master/customizer/alpha-color-picker
	Copyright Braad Martin
	Released under the GPL license - http://www.gnu.org/licenses/gpl.html
* Magnific Popup v1.0.0 - http://dimsemenov.com/plugins/magnific-popup/
	Copyright 2014 Dmitry Semenov
	Released under the MIT license - http://opensource.org/licenses/MIT
* Slick v1.6.0 - https://github.com/kenwheeler/slick
	Copyright 2016 Ken Wheeler
	Released under the MIT license - http://opensource.org/licenses/MIT
* FitVids v1.1 - http://fitvidsjs.com/
	Copyright 2013, Chris Coyier, Dave Rupert
	Released under the WTFPL license - http://sam.zoy.org/wtfpl/
* jQuery mmenu v5.5.3 - http://mmenu.frebsite.nl
	Copyright Fred Heusschen
	Released under the MIT license - http://opensource.org/licenses/MIT
* Source Sans Pro - https://github.com/adobe-fonts/source-sans-pro
	Copyright 2010, 2012, 2014 Adobe Systems Incorporated
	Font files licensed under SIL OFL 1.1 - http://scripts.sil.org/OFL

The following photographs appear in the theme's screenshot:
* https://pixabay.com/en/apple-macbook-business-1867762/
* https://pixabay.com/en/iphone-smartphone-desk-mobile-518101/
* https://pixabay.com/en/video-controller-video-game-336657/
	Released under the CC0 license - https://www.pexels.com/photo-license/

== Changelog ==

= 1.4.1 =
* FIXED: Lightbox captions wouldn't get properly escaped.
* FIXED: Wrong default avatar size.
* UPDATED: Update product block styling for WooCommerce 4.8.0 support

= 1.4 =
* REMOVED: No longer needed WooCommerce template global/quantity-input.php
* FIXED: Shop "View" (products per page) now maintain the user's selection when navigating from the shop into a category.
* REMOVED: Removed registration of non-existent script 'mmenu-toggles' jquery.mmenu.toggles.js
* ADDED: Skip link to main content.
* ADDED: Keyboard navigation for the main menu.
* REMOVED: Removed direct links to sample content.
* UPDATED: Onboarding page.

= 1.3.1 =
* UPDATED: Compatibility with WooCommerce 4.0

= 1.3.0 =
* FIXED: Improved wording of the "Serve Google Fonts locally" option's description.
* REMOVED: Compatibility code for wp_body_open() in WordPress versions older than v5.2
* UPDATED: Onboarding page.
* ADDED: Import notice for successful demo import.
* ADDED: Additional plugin recommendations in onboarding page.
* ADDED: "Upgrade to pro" tab in onboarding page.
* FIXED: When importing sample content, now WooCommerce pages are correctly assigned.
* UPDATED: Compatibility with WooCommerce 3.9.0

= 1.2.0 =
* Fixed a bug that would cause nozama_lite_hex2rgba() to return rgb() instead of rgba() values, when passed a valid opacity number.
* Added call to wp_body_open() (since WP v5.2) with backward compatibility for earlier versions.
* Fixed a bug that would cause Maxslider sliders added into posts/pages contents to display a last blank slide.
* Renamed maxslider/slider.php to slider-home.php
* Removed Google+ Social Icon
* Added Telegram Social Icon
* Force term recount after import.
* Compatibility with WooCommerce 3.7.x

= 1.1.0 =
* Compatibility with WooCommerce 3.6.x

= 1.0.3 =
* Added styles for Gutenberg blocks.

= 1.0.2 =
* Compatibility with WooCommerce 3.5.2
* Page template-bound metaboxes, wouldn't behave correctly in Gutenberg mode (where applicable).
* "Hide featured image" checkbox that appeared in posts/pages, now appears as its own metabox, to maintain compatibility with Gutenberg.
* Onboarding admin notice wouldn't persist its state when dismissed from within the block editor.
* Minor stylistic improvements.
* Improved markup for post items/articles.

= 1.0.1 =
* UPDATED: Support for WooCommerce 3.5

= 1.0 =
* Initial release
