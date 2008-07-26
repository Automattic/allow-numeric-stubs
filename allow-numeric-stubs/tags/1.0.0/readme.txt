=== Allow Numeric Stubs ===
Contributors: Viper007Bond
Donate link: http://www.viper007bond.com/donate/
Tags: page, pages, numeric, number
Requires at least: 2.5
Tested up to: 2.6
Stable tag: trunk

Allows children Pages to have a stub that is only a number. Sacrifices the paging ability in Pages to accomplish it.

== Description ==

Starting with WordPress 2.5, there is a bug where you cannot have a child Page that's stub is a number. For example this will not work: `/about/5/`. That URL conflicts with paged content feature where you can posts and Pages with multiple pages of content by adding `<!--nextpage-->` within your content.

This plugin allows you to have children Pages with numbers as stubs by giving up the ability to have paged Pages which isn't a big deal as most people don't use paged Pages anyway.

== Installation ==

###Updgrading From A Previous Version###

To upgrade from a previous version of this plugin, delete the entire folder and files from the previous version of the plugin and then follow the installation instructions below.

###Installing The Plugin###

Extract all files from the ZIP file, making sure to keep the file structure intact, and then upload it to `/wp-content/plugins/`.

This should result in the following file structure:

`- wp-content
    - plugins
        - allow-numeric-stubs
            | readme.txt
            | allow-numeric-stubs`

Then just visit your admin area and activate the plugin. That's it!

**See Also:** ["Installing Plugins" article on the WP Codex](http://codex.wordpress.org/Managing_Plugins#Installing_Plugins)

== ChangeLog ==

**Version 1.0.0**

* Initial release.