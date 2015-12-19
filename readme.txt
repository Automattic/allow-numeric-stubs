=== Allow Numeric Slugs ===
Contributors: Viper007Bond
Donate link: http://www.viper007bond.com/donate/
Tags: page, pages, numeric, number
Requires at least: 3.3
Tested up to: 4.4
Stable tag: trunk

Allows Pages to have a slug (URL) that is only a number. Sacrifices the paged content ability in Pages to accomplish it.

== Description ==

Normally it is not possible to have a page slug (the page's name in the URL) that is a number. For example this will not work: `yoursite.com/about/2/`. That URL conflicts with paged content feature where you can posts and pages with multiple pages of content by adding `<!--nextpage-->` within your content.

This plugin allows you to have pages with numbers as slugs by giving up the ability to have paged content pages which isn't a big deal as most people don't use paged content pages anyway.

Code contributions and bug reports are welcome via [this plugin's GitHub repository](https://github.com/Viper007Bond/allow-numeric-stubs).

== Installation ==

1. Go to your admin area and select Plugins → Add New from the menu.
2. Search for "Allow Numeric Slugs".
3. Click install.
4. Click activate.

== ChangeLog ==

= Version 3.0.0 =

* Ditch all of the old fragile hackery of this plugin in favor of just hooking into the WordPress function that ensures that slugs are unique. It's what was adding the `-2` suffix in the first place.

= Version 2.2.0 =

* Update for WordPress 4.4's rewrite rules.
* PHP 7 compatibility by renaming class constructor. Also drops unneeded references.

= Version 2.1.0 =

* Update for WordPress 3.3's rewrite rules.

= Version 2.0.1 =

* Re-add the `save_post` filter after fixing the slug incase multiple posts are updated in one pageload.

= Version 2.0.0 =

* Recoded for WordPress 3.0+. WordPress now won't let you manually enter a numeric slug -- it will prefix "-2" onto the end of it so that the page is viewable. This new plugin version works around it.

= Version 1.0.0 =

* Initial release.