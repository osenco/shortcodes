# Laravel Shortcodes
Wordpress-style shortcodes for Laravel

## Usage
### Register Shortcode
To register a shortcode, use the helper function `shortcode()->add()` in the constructor method of any Controller or model you want to use.

Pass the shortcode tag as the first argument, and an anonymous function as the second argument, e.g

`shortcode()->add('tag', function(){ return date('Y); });`

### Use Shortcode
Add a shortcode to your content, optionally adding arguments as follows:

`[shortcode_tag]`
`[shortcode_tag attr="attr1"]`

### Render Content
To output content with the shortcodes parsed, use the `shortcode()->do()`

Pass the content you want to output as the argument.

`{!! shortcodes()->do($content) !!}`
