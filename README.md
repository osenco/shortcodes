# shortcodes
Wordpress-style shortcodes for Laravel

## Usage
### Add Shortcodes
To register a shortcode, use the helper function `shortcode()->add()` in the constructor method of any Controller or model you want to use.

Pass the shortcode tag as the first argument, and an anonymous function as the second argument, e.g

`shortcode()->add('tag', function(){ return date('Y); });`

### Render Content
To output content with the shortcodes parsed, use the `shortcode()->do()`

Pass the content you want to output as the argument.

`{!! shortcodes()->do($content) !!}`
