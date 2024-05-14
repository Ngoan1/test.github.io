<!--- tab first -->
<div class="theme_link">
    <h3><?php esc_html_e('1. Setup Home Page','shopping-ecommerce-wp'); ?><!-- <php echo $theme_config['plugin_title']; ?> --></h3>
        <p><?php esc_html_e('To set up the HomePage in Shopping Ecommerce WP theme, Just follow the below given Instructions.','shopping-ecommerce-wp'); ?> </p>
<p><?php esc_html_e('Go to Wp Dashboard > Pages > Add New > Create a Page using “Homepage Template” available in Page attribute.','shopping-ecommerce-wp'); ?> </p>
<p><?php esc_html_e('Now go to Settings > Reading > Your homepage displays > A static page (select below) and set that page as your homepage.','shopping-ecommerce-wp'); ?> </p>
     <p>
        <?php
		if($this->_check_homepage_setup()){
            $class = "activated";
            $btn_text = __("Home Page Activated",'shopping-ecommerce-wp');
            $Bstyle = "display:none;";
            $style = "display:inline-block;";
        }else{
            $class = "default-home";
             $btn_text = __("Set Home Page",'shopping-ecommerce-wp');
             $Bstyle = "display:inline-block;";
            $style = "display:none;";
        }
        ?>
        <button style="<?php echo esc_attr($Bstyle); ?>" class="button activate-now <?php echo esc_attr($class); ?>">

            <?php echo esc_html($btn_text);?>
                
        </button>
		
         </p>
    <p>
        <a target="_blank" href="https://testerwp.com/docs/shopping-ecommerce-theme-doc/" class="button button-primary"><?php esc_html_e('Theme Documentation','shopping-ecommerce-wp'); ?></a>
    </p>
</div>

<!--- tab third -->

<!--- tab second -->

<div class="theme_link">
    <h3><?php esc_html_e('2. Customize Your Website','shopping-ecommerce-wp'); ?></h3>

    <p><?php esc_html_e('Shopping Ecommerce WP theme support live customizer for home page set up. Everything visible at home page can be changed through customize panel','shopping-ecommerce-wp'); ?></p>
    <p>
    <a href="<?php echo admin_url('customize.php'); ?>" class="button button-primary"><?php esc_html_e("Start Customize","shopping-ecommerce-wp"); ?></a>
    </p>
</div>
<!--- tab third -->

  <div class="theme_link">
    <h3><?php esc_html_e("3. Customizer Links","shopping-ecommerce-wp"); ?></h3>
    <div class="card-content">
        <div class="columns">
                <div class="col">
                    <a href="<?php echo admin_url('customize.php?autofocus[control]=custom_logo'); ?>" class="components-button is-link"><?php esc_html_e("Upload Logo","shopping-ecommerce-wp"); ?></a>
                    <hr>
                    <a href="<?php echo admin_url('customize.php?autofocus[panel]=woocommerce'); ?>" class="components-button is-link"><?php esc_html_e("Woocommerce","shopping-ecommerce-wp"); ?></a><hr>

                </div>

               <div class="col">

                <a href="<?php echo admin_url('customize.php?autofocus[panel]=shopping-ecommerce-wp-panel-frontpage'); ?>" class="components-button is-link"><?php esc_html_e("FrontPage Sections","shopping-ecommerce-wp"); ?></a><hr>


                 <a href="<?php echo admin_url('customize.php?autofocus[section]=bizzesc_html_ecommerce_footer_section_content'); ?>" class="components-button is-link"><?php esc_html_e("Footer Section","shopping-ecommerce-wp"); ?></a><hr>
            </div>

        </div>
    </div>

</div>
<!--- tab fourth -->
  <div class="theme_link">
    <h3><?php esc_html_e("4. Premium Version","shopping-ecommerce-wp"); ?></h3>
    <div class="card-content">
        <div class="columns">
               
                    <a href="https://testerwp.com/lp/bizz-ecommerce-pro-preview/" target="_blank" class="button button-primary"><?php esc_html_e("Check Pro","shopping-ecommerce-wp"); ?></a>
                    <hr>
               
 

        </div>
    </div>

</div>