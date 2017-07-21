<?php

/**
 * Provide a admin area view for the plugin
 *
 * This file is used to markup the admin-facing aspects of the plugin.
 *
 * @link       http://rajendrarijal.com.np/
 * @since      1.0.0
 *
 * @package    Multiplefeaturedimage
 * @subpackage Multiplefeaturedimage/admin/partials
 */
?>

<!-- This file should primarily consist of HTML with a little bit of PHP. -->


<?php
/**
*
* admin/partials/wp-cbf-admin-display.php - Don't add this comment
*
**/
?>

<!-- This file should primarily consist of HTML with a little bit of PHP. -->
<div class="wrap">

    <h2><?php echo esc_html(get_admin_page_title()); ?></h2>

    <form method="post" name="cleanup_options" action="options.php">

        <!-- remove some meta and generators from the <head> -->
        <fieldset>
            <legend class="screen-reader-text"><span>Clean WordPress head section</span></legend>
            <label for="<?php echo $this->plugin_name; ?>-cleanup">
                <input type="checkbox" id="<?php echo $this->plugin_name; ?>-cleanup" name="<?php echo $this->plugin_name; ?> [cleanup]" value="1"/>
                <span><?php esc_attr_e('Clean up the head section', $this->plugin_name); ?></span>
            </label>
        </fieldset>

        <!-- remove injected CSS from comments widgets -->
        <fieldset>
            <legend class="screen-reader-text"><span>Remove Injected CSS for comment widget</span></legend>
            <label for="<?php echo $this->plugin_name; ?>-comments_css_cleanup">
                <input type="checkbox" id="<?php echo $this->plugin_name; ?>-comments_css_cleanup" name="<?php echo $this->plugin_name; ?>[comments_css_cleanup]" value="1"/>
                <span><?php esc_attr_e('Remove Injected CSS for comment widget', $this->plugin_name); ?></span>
            </label>
        </fieldset>

        <!-- remove injected CSS from gallery -->
        <fieldset>
            <legend class="screen-reader-text"><span>Remove Injected CSS for galleries</span></legend>
            <label for="<?php echo $this->plugin_name; ?>-gallery_css_cleanup">
                <input type="checkbox" id="<?php echo $this->plugin_name; ?>-gallery_css_cleanup" name="<?php echo $this->plugin_name; ?>[gallery_css_cleanup]" value="1" />
                <span><?php esc_attr_e('Remove Injected CSS for galleries', $this->plugin_name); ?></span>
            </label>
        </fieldset>

        <!-- add post,page or product slug class to body class -->
        <fieldset>
            <legend class="screen-reader-text"><span><?php _e('Add Post, page or product slug to body class', $this->plugin_name); ?></span></legend>
            <label for="<?php echo $this->plugin_name; ?>-body_class_slug">
                <input type="checkbox" id="<?php echo $this->plugin_name;?>-body_class_slug" name="<?php echo $this->plugin_name; ?>[body_class_slug]" value="1" />
                <span><?php esc_attr_e('Add Post slug to body class', $this->plugin_name); ?></span>
            </label>
        </fieldset>

        <!-- load jQuery from CDN -->
        <fieldset>
            <legend class="screen-reader-text"><span><?php _e('Load jQuery from CDN instead of the basic wordpress script', $this->plugin_name); ?></span></legend>
            <label for="<?php echo $this->plugin_name; ?>-jquery_cdn">
                <input type="checkbox" id="<?php echo $this->plugin_name; ?>-jquery_cdn" name="<?php echo $this->plugin_name; ?>[jquery_cdn]" value="1" />
                <span><?php esc_attr_e('Load jQuery from CDN', $this->plugin_name); ?></span>
            </label>
                    <fieldset>
                        <p>
                        	You can choose your own custom post type 
                        </p>
                        <legend class="screen-reader-text"><span><?php _e('Choose your prefered cdn provider', $this->plugin_name); ?></span></legend>
                        <input type="url" class="regular-text" id="<?php echo $this->plugin_name; ?>-cdn_provider" name="<?php echo $this->plugin_name; ?>[cdn_provider]" value=""/>
                    </fieldset>
        </fieldset>

        <?php submit_button('Save changes', 'primary','submit', TRUE); ?>

    </form>


    <!-- Featured Image Plus -->
    <h2><?php esc_attr_e( 'Featured Image Plus: Fieldset and Input Field', 'WpAdminStyle' ); ?></h2>
    <form action="options.php" method="post">

    <fieldset>
        <legend class="screen-reader-text"><span>Fieldset Example</span></legend>
        <label for="<?php echo $this->plugin_name; ?>">
            <input name="" type="checkbox" id="<?php echo $this->plugin_name; ?>" value="1" />
            <span><?php esc_attr_e( 'Check to enable additional featured image on Post', 'WpAdminStyle' ); ?></span>
        </label> <br>

        <label for="<?php echo $this->plugin_name; ?>">
        <input name="" type="checkbox" id="users_can_register2" value="1" />
        <span><?php esc_attr_e( 'Check to enable additional featured image on Pages', 'WpAdminStyle' ); ?></span>
        </label> <br>

        <fieldset>
                    <p>
                        You can choose your own custom post type 
                    </p>        
        <input type="text" value=".regular-text" class="regular-text" />
        <span><?php esc_attr_e( 'Type CPT (custom post type) on enable additional featured image', 'WpAdminStyle' ); ?></span>
        
        </fieldset>
    </fieldset>
    <fieldset>

    <?php submit_button('Save changes', 'primary','submit', TRUE); ?>
    </form>

</div>