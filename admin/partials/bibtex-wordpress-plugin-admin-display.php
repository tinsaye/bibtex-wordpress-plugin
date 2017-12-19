<?php

/**
 * Provide a admin area view for the plugin
 *
 * This file is used to markup the admin-facing aspects of the plugin.
 *
 * @link       https://github.com/tinsaye
 * @since      1.0.0
 *
 * @package    Bibtex_Wordpress_Plugin
 * @subpackage Bibtex_Wordpress_Plugin/admin/partials
 */
?>


<!-- This file should primarily consist of HTML with a little bit of PHP. -->
<div class="wrap">

    <h2><?php echo esc_html(get_admin_page_title()); ?></h2>

    <form method="post" name="bibtex_wpp_options" action="options.php">

    <?php settings_fields($this->plugin_name); ?>
    
        <!-- add post,page or product slug class to body class -->
        <fieldset>
            <legend class="screen-reader-text">
            	<span>
            		<?php _e('Some settings', $this->plugin_name); ?>
            	</span>
            </legend>
            <label for="<?php echo $this->plugin_name; ?>-some_settings">
                <input type="checkbox" id="<?php echo $this->plugin_name;?>-some_settings" name="<?php echo $this->plugin_name; ?>[some_settings]" value="1" />
                <span>
                	<?php esc_attr_e('Some settings', $this->plugin_name); ?>	
                </span>
            </label>
        </fieldset>

        <?php submit_button('Save all changes', 'primary','submit', TRUE); ?>

    </form>

</div>
<!-- This file should primarily consist of HTML with a little bit of PHP. -->
