HTML Minifier
Plugin Name: HTML Minifier
Description: A plugin to optimize or minify all HTML output in the browser.
Version: 1.0
Author: Gumilar L Wijayadi
Author URI: LinkedIn Profile
License: GPLv2 or later

Description
The HTML Minifier plugin is designed to optimize and minify HTML output on your WordPress site. This helps in reducing the page size by removing unnecessary whitespace, comments, and line breaks, which can improve the page load speed and overall performance.

Features
Removes HTML comments
Reduces excessive whitespace within HTML tags
Removes extra spaces and new lines between tags
Optimizes HTML output to be compact and efficient
Installation
Download the Plugin:

Download the html-minifier.php file from the repository.
Upload the Plugin:

Go to your WordPress admin dashboard.
Navigate to Plugins > Add New.
Click on Upload Plugin and select the html-minifier.php file.
Click Install Now and then Activate the plugin.
Usage:

The plugin automatically minifies HTML output for pages using the page-home.php template. Ensure that your page template is correctly set to page-home.php.
Configuration
No additional configuration is required. The plugin hooks into the template_redirect action to start minifying HTML and the shutdown action to flush the output buffer.

Debugging
If you encounter issues or need to debug the minification process:

Enable debugging in WordPress by setting WP_DEBUG and WP_DEBUG_LOG to true in your wp-config.php file:

```php
define('WP_DEBUG', true);
define('WP_DEBUG_LOG', true);
```
Check the debug log in wp-content/debug.log for detailed information on the HTML before and after minification.

Changelog
1.0
Initial release.
FAQ
Q: How do I ensure that the plugin is working correctly?

A: Ensure that your page uses the page-home.php template. View the source code of the page in your browser, and you should see that the HTML output is minified and compact.

Q: Can I use this plugin with other page templates?

A: Currently, the plugin is configured to work with the page-home.php template. To use it with other templates, modify the start_html_minify() function in the html-minifier.php file.

Support
For support, please visit Gumilar L Wijayadi's LinkedIn or create an issue on the plugin's repository.

License
This plugin is licensed under the GPLv2 or later license. See the LICENSE file for more details.
