# shortcodes
Wordpress-style shortcodes for Laravel

## Usage
### Add Shortcodes
To register a shortcode, use the helper function `shortcode()->add()` 

Pass the shortcode tag as the first argument, and an anonymous function as the second argument, e.g

`shortcode()->add('tag', function(){ return date('Y); });`
