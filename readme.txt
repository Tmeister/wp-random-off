=== Random Off ===
Contributors: tmeister
Tags: random, redirect, disable
Requires at least: 7.2
Tested up to: 7.2
Requires PHP: 7.4
Stable tag: 1.0.0
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Disables the /random/ redirect that WordPress 7.2 adds to your site.

== Description ==

WordPress 7.2 adds a `/random/` URL that redirects visitors to a random piece of content on your site. If you don't want that, Random Off turns it off.

There are no settings. Activate the plugin and the redirect is disabled. Deactivate it and the core behavior comes back.

The plugin adds a single filter:

`add_filter( 'wp_enable_random_content_redirect', '__return_false' );`

It does not store data, add database tables, or contact external services.

== Installation ==

1. In your admin, go to Plugins > Add New and search for "Random Off".
2. Click Install Now, then Activate.

Or upload the `random-off` folder to `/wp-content/plugins/` and activate it from the Plugins screen.

== Frequently Asked Questions ==

= Is there a settings page? =

No. The plugin works as soon as it is activated.

= What happens when someone visits /random/ after activating? =

WordPress handles the URL like any other unknown path, so visitors get your normal 404 page, unless you have content at that address.

= Does it leave anything behind when I delete it? =

No. The plugin stores nothing, so there is nothing to clean up.

== Changelog ==

= 1.0.0 =
* Initial release.

== Upgrade Notice ==

= 1.0.0 =
Initial release.
