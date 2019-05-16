<ul>
    <li>
        <a href="javascript: jQuery('#contextual-help-link').trigger('click');" target="_blank">
            <i class="dashicons-before dashicons-media-text"></i>
            <?php _e('Documentation', 'wp-mailto-links') ?>
        </a>
    </li>
    <li>
        <a href="http://wordpress.org/support/plugin/wp-mailto-links#postform" target="_blank">
            <i class="dashicons-before dashicons-welcome-comments"></i>
            <?php _e('Report a problem', 'wp-mailto-links') ?>
        </a>
    </li>
    <li>
        <a href="http://wordpress.org/extend/plugins/wp-mailto-links/faq/" target="_blank">
            <i class="dashicons-before dashicons-editor-help"></i>
            <?php _e('FAQ', 'wp-mailto-links') ?>
        </a>
    </li>
</ul>

<hr>
<p>
    <a href="http://wordpress.org/support/view/plugin-reviews/wp-mailto-links" target="_blank">
        <i class="dashicons-before dashicons-thumbs-up"></i>
        <strong><?php _e('Rate the plugin!', 'wp-mailto-links') ?></strong>
    </a>
</p>

<?php if (empty($showOtherPlugins)): ?>
<hr>
<h4><?php _e('Other plugins by WebFactory', 'wp-mailto-links') ?></h4>
<ul>
    <li>
        <a href="https://wordpress.org/plugins/eps-301-redirects/" target="_blank">
            <i class="dashicons-before dashicons-star-filled"></i>
            <?php _e('301 Redirects', 'wp-mailto-links') ?>
        </a>
    </li>
    <li>
        <a href="https://wordpress.org/plugins/google-maps-widget/" target="_blank">
            <i class="dashicons-before dashicons-star-filled"></i>
            <?php _e('Google Maps Widget', 'wp-mailto-links') ?>
        </a>
    </li>
    <li>
        <a href="https://wordpress.org/plugins/security-ninja/" target="_blank">
            <i class="dashicons-before dashicons-star-filled"></i>
            <?php _e('Security Ninja', 'wp-mailto-links') ?>
        </a>
    </li>
    <li>
        <a href="https://wordpress.org/plugins/under-construction-page/" target="_blank">
            <i class="dashicons-before dashicons-star-filled"></i>
            <?php _e('UnderConstructionPage', 'wp-mailto-links') ?>
        </a>
    </li>
    <li>
        <a href="https://wordpress.org/plugins/wp-htaccess-editor/" target="_blank">
            <i class="dashicons-before dashicons-star-filled"></i>
            <?php _e('WP Htaccess Editor', 'wp-mailto-links') ?>
        </a>
    </li>

</ul>
<?php endif; ?>
