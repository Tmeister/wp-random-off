# Tmeister Random Redirect Disable

Disables the `/random/` redirect that WordPress 7.2 adds to your site.

![Requires WordPress 7.2+](https://img.shields.io/badge/WordPress-7.2%2B-21759b?logo=wordpress)
![Requires PHP 7.4+](https://img.shields.io/badge/PHP-7.4%2B-777bb4?logo=php)
![License GPLv2 or later](https://img.shields.io/badge/license-GPLv2%2B-blue)

## Why

WordPress 7.2 adds a `/random/` URL that sends visitors to a random piece of content on your site. If you'd rather not have it, this plugin turns it off.

There are no settings. Activate the plugin to disable the redirect, and deactivate it to bring the core behavior back.

## How it works

The whole plugin is one filter:

```php
add_filter( 'wp_enable_random_content_redirect', '__return_false' );
```

It stores no data, adds no database tables, and makes no external requests.

## Installation

**From WordPress.org**

1. In your admin, go to **Plugins → Add New** and search for "Tmeister Random Redirect Disable".
2. Click **Install Now**, then **Activate**.

**From this repo**

```bash
cd wp-content/plugins
git clone https://github.com/Tmeister/wp-random-off.git tmeister-random-redirect-disable
```

Then activate **Tmeister Random Redirect Disable** on the Plugins screen. You can also do it with WP-CLI:

```bash
wp plugin activate tmeister-random-redirect-disable
```

**Without the plugin**

If you'd rather not install a plugin, add the same filter to a must-use plugin or to your theme's `functions.php`:

```php
add_filter( 'wp_enable_random_content_redirect', '__return_false' );
```

## Requirements

- WordPress 7.2 or later
- PHP 7.4 or later

## Changelog

### 1.0.0

- Initial release.

## License

[GPLv2 or later](LICENSE.txt).

Made by [Enrique Chavez](https://tmeister.dev).
