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
<h4><?php _e('Other plugins by Ironikus', 'wp-mailto-links') ?></h4>
<ul>
    <li>
        <a href="https://wordpress.org/plugins/wp-webhooks/" target="_blank">
            <i class="dashicons-before dashicons-star-filled"></i>
            <?php _e('WP Webhooks', 'wp-mailto-links') ?>
        </a>
    </li>
    <li>
        <a href="https://wordpress.org/plugins/wp-snow/" target="_blank">
            <i class="dashicons-before dashicons-star-filled"></i>
            <?php _e('WP Snow', 'wp-mailto-links') ?>
        </a>
    </li>

</ul>
<?php endif; ?>
