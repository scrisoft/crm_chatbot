<section class="crm-chatbot-page" data-quick-guide="crmchatbot">
    <?php md_get_the_file(CMS_BASE_USER_APPS_CRM_CHATBOT . 'views/parts/new_bot.php'); ?>
</section>

<?php md_get_the_file(CMS_BASE_USER_APPS_CRM_CHATBOT . 'views/modals/bot_categories.php'); ?>
<?php md_get_the_file(CMS_BASE_USER_APPS_CRM_CHATBOT . 'views/modals/operator.php'); ?>
<?php md_get_the_file(CMS_BASE_USER_APPS_CRM_CHATBOT . 'views/modals/confirmation.php'); ?>

<?php if ( md_the_option('app_crm_chatbot_quick_guide') ) { ?>
    <?php md_get_the_file(CMS_BASE_USER . 'default/php/quick_guide.php'); ?>
<?php } ?>

<script language="javascript">

    // CRM Chatbot words list
    let words = {
        start: "<?php echo $this->lang->line('crm_chatbot_start'); ?>",
        text: "<?php echo $this->lang->line('crm_chatbot_text'); ?>",
        image: "<?php echo $this->lang->line('crm_chatbot_image'); ?>",
        carousel: "<?php echo $this->lang->line('crm_chatbot_carousel'); ?>",
        video: "<?php echo $this->lang->line('crm_chatbot_video'); ?>",
        buttons: "<?php echo $this->lang->line('crm_chatbot_buttons'); ?>",
        items: "<?php echo $this->lang->line('crm_chatbot_items'); ?>",
        this_automatic_text_response: "<?php echo $this->lang->line('crm_chatbot_this_automatic_text_response'); ?>",
        edit: "<?php echo $this->lang->line('crm_chatbot_edit'); ?>",
        delete: "<?php echo $this->lang->line('crm_chatbot_delete'); ?>",
        element_not_found: "<?php echo $this->lang->line('crm_chatbot_element_not_found'); ?>",  
        operator_not_found: "<?php echo $this->lang->line('crm_chatbot_operator_not_found'); ?>",  
        write_url_here: "<?php echo $this->lang->line('crm_chatbot_write_url_here'); ?>",
        element_text_too_short: "<?php echo $this->lang->line('crm_chatbot_element_text_too_short'); ?>",
        element_text_too_long: "<?php echo $this->lang->line('crm_chatbot_element_text_too_long'); ?>",
        please_upload_image: "<?php echo $this->lang->line('crm_chatbot_please_upload_image'); ?>",
        selected_element_supports_an_image: "<?php echo $this->lang->line('crm_chatbot_selected_element_supports_an_image'); ?>",
        please_upload_video: "<?php echo $this->lang->line('crm_chatbot_please_upload_video'); ?>",
        selected_element_supports_a_video: "<?php echo $this->lang->line('crm_chatbot_selected_element_supports_an_video'); ?>",
        button: "<?php echo $this->lang->line('crm_chatbot_button'); ?>",
        button_text: "<?php echo $this->lang->line('crm_chatbot_button_text'); ?>",
        enter_button_text: "<?php echo $this->lang->line('crm_chatbot_enter_button_text'); ?>",
        button_target: "<?php echo $this->lang->line('crm_chatbot_button_target'); ?>",
        link: "<?php echo $this->lang->line('crm_chatbot_link'); ?>",
        element: "<?php echo $this->lang->line('crm_chatbot_element'); ?>",
        button_url: "<?php echo $this->lang->line('crm_chatbot_button_url'); ?>",
        enter_button_url: "<?php echo $this->lang->line('crm_chatbot_enter_button_url'); ?>",
        button_actions: "<?php echo $this->lang->line('crm_chatbot_button_actions'); ?>",
        remove_button: "<?php echo $this->lang->line('crm_chatbot_remove_button'); ?>",
        new_button: "<?php echo $this->lang->line('crm_chatbot_new_button'); ?>",
        please_add_button: "<?php echo $this->lang->line('crm_chatbot_please_add_button'); ?>",
        buttons_element_maximum_buttons: "<?php echo $this->lang->line('crm_chatbot_buttons_element_maximum_buttons'); ?>",
        all_buttons_should_have_text: "<?php echo $this->lang->line('crm_chatbot_all_buttons_should_have_text'); ?>",
        buttons_link_target_valid_urls: "<?php echo $this->lang->line('crm_chatbot_buttons_link_target_valid_urls'); ?>",
        item_1: "<?php echo $this->lang->line('crm_chatbot_item_1'); ?>",
        item_1_description: "<?php echo $this->lang->line('crm_chatbot_item_1_description'); ?>",
        item_10_usd: "<?php echo $this->lang->line('crm_chatbot_10_usd'); ?>",
        item_name: "<?php echo $this->lang->line('crm_chatbot_item_name'); ?>",
        item_price: "<?php echo $this->lang->line('crm_chatbot_item_price'); ?>",
        item_description: "<?php echo $this->lang->line('crm_chatbot_item_description'); ?>",
        item_actions: "<?php echo $this->lang->line('crm_chatbot_item_actions'); ?>",
        remove_item: "<?php echo $this->lang->line('crm_chatbot_remove_item'); ?>",
        new_item: "<?php echo $this->lang->line('crm_chatbot_new_item'); ?>",
        enter_item_name: "<?php echo $this->lang->line('crm_chatbot_enter_item_name'); ?>",
        enter_item_price: "<?php echo $this->lang->line('crm_chatbot_enter_item_price'); ?>",
        enter_item_description: "<?php echo $this->lang->line('crm_chatbot_enter_item_price'); ?>",
        item_image: "<?php echo $this->lang->line('crm_chatbot_item_image'); ?>",
        please_add_item: "<?php echo $this->lang->line('crm_chatbot_please_add_item'); ?>",
        items_element_maximum_items: "<?php echo $this->lang->line('crm_chatbot_items_element_maximum_items'); ?>",
        all_items_should_have_name: "<?php echo $this->lang->line('crm_chatbot_all_items_should_have_name'); ?>",
        all_items_should_have_description: "<?php echo $this->lang->line('crm_chatbot_all_items_should_have_description'); ?>",
        the_items_one_image: "<?php echo $this->lang->line('crm_chatbot_the_items_one_image'); ?>",
        text_above_buttons: "<?php echo $this->lang->line('crm_chatbot_text_above_buttons'); ?>",
        text_above_items: "<?php echo $this->lang->line('crm_chatbot_text_above_items'); ?>",
        no_bot_data: "<?php echo $this->lang->line('crm_chatbot_no_bot_data'); ?>",
        elements_should_be_linked: "<?php echo $this->lang->line('crm_chatbot_elements_should_be_linked'); ?>",
        text_elements_short_value: "<?php echo $this->lang->line('crm_chatbot_text_elements_short_value'); ?>",
        bot_name_short: "<?php echo $this->lang->line('crm_chatbot_bot_name_short'); ?>",
        image_element_missing_image: "<?php echo $this->lang->line('crm_chatbot_image_element_missing_image'); ?>",
        carousel_element_missing_image: "<?php echo $this->lang->line('crm_chatbot_carousel_element_missing_image'); ?>",
        video_element_missing_video: "<?php echo $this->lang->line('crm_chatbot_video_element_missing_video'); ?>",
        please_add_button: "<?php echo $this->lang->line('crm_chatbot_please_add_button'); ?>",
        buttons_should_have_element: "<?php echo $this->lang->line('crm_chatbot_buttons_should_have_element'); ?>",
        item_url: "<?php echo $this->lang->line('crm_chatbot_item_url'); ?>",
        enter_item_url: "<?php echo $this->lang->line('crm_chatbot_enter_item_url'); ?>",
        all_items_should_have_url: "<?php echo $this->lang->line('crm_chatbot_all_items_should_have_url'); ?>",
        icon_smart_toy: '<?php echo md_the_user_icon(array('icon' => 'smart_toy')); ?>',
        icon_fa_align_left: '<?php echo md_the_user_icon(array('icon' => 'fa_align_left')); ?>',
        icon_fa_align_center: '<?php echo md_the_user_icon(array('icon' => 'fa_align_center')); ?>',
        icon_fa_align_right: '<?php echo md_the_user_icon(array('icon' => 'fa_align_right')); ?>',
        icon_fa_align_justify: '<?php echo md_the_user_icon(array('icon' => 'fa_align_justify')); ?>',
        icon_fa_bold: '<?php echo md_the_user_icon(array('icon' => 'fa_bold')); ?>',
        icon_fa_italic: '<?php echo md_the_user_icon(array('icon' => 'fa_italic')); ?>',
        icon_fa_underline: '<?php echo md_the_user_icon(array('icon' => 'fa_underline')); ?>',
        icon_fa_link: '<?php echo md_the_user_icon(array('icon' => 'fa_link')); ?>',
        icon_fa_unlink: '<?php echo md_the_user_icon(array('icon' => 'fa_unlink')); ?>',
        icon_file_cloud: '<?php echo md_the_user_icon(array('icon' => 'file_cloud')); ?>',
        icon_delete: '<?php echo md_the_user_icon(array('icon' => 'delete')); ?>',
        icon_forbid: '<?php echo md_the_user_icon(array('icon' => 'forbid')); ?>',
        icon_arrow_down_black: '<?php echo md_the_user_icon(array('icon' => 'arrow_down', 'class' => 'theme-color-black')); ?>',
        icon_home: '<?php echo md_the_user_icon(array('icon' => 'home')); ?>',
        icon_slideshow: '<?php echo md_the_user_icon(array('icon' => 'slideshow')); ?>',
        icon_article_material: '<?php echo md_the_user_icon(array('icon' => 'article_material')); ?>',
        icon_image_material: '<?php echo md_the_user_icon(array('icon' => 'image_material')); ?>',
        icon_collections: '<?php echo md_the_user_icon(array('icon' => 'collections')); ?>',
        icon_arrow_right_circle: '<?php echo md_the_user_icon(array('icon' => 'arrow_right_circle')); ?>',
        icon_arrow_left_circle: '<?php echo md_the_user_icon(array('icon' => 'arrow_left_circle')); ?>',
        icon_add_road: '<?php echo md_the_user_icon(array('icon' => 'add_road')); ?>',
        icon_add_shopping_cart: '<?php echo md_the_user_icon(array('icon' => 'add_shopping_cart')); ?>',
        icon_bi_image: '<?php echo md_the_user_icon(array('icon' => 'bi_image')); ?>',
        icon_bi_play_btn: '<?php echo md_the_user_icon(array('icon' => 'bi_play_btn')); ?>'
    };

</script>