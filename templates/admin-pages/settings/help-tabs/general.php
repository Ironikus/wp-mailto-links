<?php $pluginData = get_plugin_data(WP_MAILTO_LINKS_FILE); ?>
<h3><i class="dashicons-before dashicons-email"></i>  <?php echo get_admin_page_title() ?> - v<?php echo $pluginData['Version']; ?></h3>
<p>
    <?php _e('The plugin works out-of-the-box to protect your email addresses. All settings are default set to protect your email addresses automatically.', 'wp-mailto-links'); ?>
</p>
<p>
    <?php _e('If you want to manually create protected mailto links, just use the shortcode (<code>[wpml_mailto]</code>) within your posts or use the template tags (<code>wpml_mailto()</code> or <code>wpml_filter()</code>) in your theme files.', 'wp-mailto-links'); ?>
</p>
<p>
    <?php _e('For developers there is a filter hook (<code>wpml_mailto</code>) and an action hook (<code>wpml_ready</code>) available. These are deprecated though. The filter hook will be improved after refactoring the front end (this part still needs some serious refactoring). The action hook <code>wpml_ready</code> is actually unnecessary, you could use the WP\'s <code>plugins_loaded</code> action instead.', 'wp-mailto-links'); ?>
</p>
<p>
    <?php _e('To report problems or bugs or for support, please use <a href="https://wordpress.org/support/plugin/wp-mailto-links#postform" target="_new">the official forum</a>.', 'wp-mailto-links'); ?>
</p>
<p>
    <?php echo $pluginData['Author']; ?>
    <i class="dashicons-before dashicons-universal-access"></i>
</p>

<hr>
<h3><?php _e('Cheat Sheet', 'wp-mailto-links'); ?> <i class="dashicons-before dashicons-smiley"></i></h3>
<table>
    <tr>
        <td><?php _e('Shortcode:', 'wp-mailto-links'); ?></td>
        <td><code><b>[wpml_mailto</b> email="..."<b>]</b>...<b>[/wpml_mailto]</b></code></td>
    </tr>
    <tr>
        <td><?php _e('Template tags:', 'wp-mailto-links'); ?></td>
        <td><code><b>wpml_mailto(</b> $email [, $display] [, $attrs] <b>)</b>;</code></td>
    </tr>
    <tr>
        <td></td>
        <td><code><b>wpml_filter(</b> $content <b>)</b>;</code></td>
    </tr>
    <tr>
        <td><?php _e('Filter hook:', 'wp-mailto-links'); ?> <span class="description"><?php _e('(deprecated)', 'wp-mailto-links'); ?></span></td>
        <td><code>add_filter('<b>wpml_mailto</b>', 'func', 10, 4);</code></td>
    </tr>
    <tr>
        <td><?php _e('Action hook:', 'wp-mailto-links'); ?> <span class="description"><?php _e('(deprecated)', 'wp-mailto-links'); ?></span></td>
        <td><code>add_action('<b>wpml_ready</b>', 'func');</code></td>
    </tr>
</table>
