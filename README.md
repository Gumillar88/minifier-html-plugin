<p>Description:</p>
<br>
<p>The HTML Minifier plugin is designed to optimize and minify HTML output on your WordPress site. This helps in reducing the page size by removing unnecessary whitespace, comments, and line breaks, which can improve the page load speed and overall performance.</p>

<p>Features</p>
<br>
<p>Removes HTML comments</p>
<br>
<p>Reduces excessive whitespace within HTML tags</p>
<br>
<p>Removes extra spaces and new lines between tags</p>
<br>
<p>Optimizes HTML output to be compact and efficient</p>
<br>
<p>Installation</p>
<br>
<p>Download the Plugin:</p>
<br>

<p>Download the html-minifier.php file from the repository.</p>
<p></p>Upload the Plugin:</p>

<p></p>Go to your WordPress admin dashboard.</p>
<p>Navigate to Plugins > Add New.</p>
<p>Click on Upload Plugin and select the html-minifier.php file.</p>
<p>Click Install Now and then Activate the plugin.</p>
<p>Usage:</p>

<p>The plugin automatically minifies HTML output for pages using the page-home.php template. Ensure that your page template is correctly set to page-home.php.</p>
<p>Configuration</p>
<p>No additional configuration is required. The plugin hooks into the template_redirect action to start minifying HTML and the shutdown action to flush the output buffer.</p>

<p>Debugging</p>
<p>If you encounter issues or need to debug the minification process:</p>

<p>Enable debugging in WordPress by setting WP_DEBUG and WP_DEBUG_LOG to true in your wp-config.php file:</p>

```php
define('WP_DEBUG', true);
define('WP_DEBUG_LOG', true);
```
<p>Check the debug log in wp-content/debug.log for detailed information on the HTML before and after minification.</p>

<p>Changelog</p>
<p>1.0</p>
<p>Initial release.</p>
<p>FAQ</p>
<p>Q: How do I ensure that the plugin is working correctly?</p>

<p>A: Ensure that your page uses the page-home.php template. View the source code of the page in your browser, and you should see that the HTML output is minified and compact.</p>

<p>Q: Can I use this plugin with other page templates?</p>

<p>A: Currently, the plugin is configured to work with the page-home.php template. To use it with other templates, modify the start_html_minify() function in the html-minifier.php file.</p>

<p>Support</p>
<p>For support, please visit Gumilar L Wijayadi's LinkedIn or create an issue on the plugin's repository.</p>

<p>License</p>
<p>This plugin is licensed under the GPLv2 or later license. See the LICENSE file for more details.</p>
