<?php
/**
 * Admin Inc
 *
 * PHP Version 7.3
 *
 * This files contains the hooks for
 * the to display the CRM Chatbot app in the Admin Panel
 *
 * @author Scrisoft
 * @package CRM
 * @author   Scrisoft <asksyn@gmail.com>
 * @license  https://github.com/scrisoft/crm_chatbot/blob/main/license CRM Chatbot License
 * @link     https://www.midrub.com/
 */

 // Define the constants
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * The public method set_admin_app_options registers options for Admin's panel
 * 
 * @since 0.0.8.3
 */
md_set_admin_app_options(
    'crm_chatbot',
    array (
            
        array(
            'field_slug' => 'app_crm_chatbot_enabled',
            'field_type' => 'checkbox',
            'field_words' => array(
                'field_title' => $this->lang->line('crm_chatbot_enable_app'),
                'field_description' => $this->lang->line('crm_chatbot_if_is_enabled')
            ),
            'field_params' => array(
                'checked' => md_the_option('app_crm_chatbot_enabled')?1:0
            )

        ),
        array(
            'field_slug' => 'app_crm_chatbot_quick_guide',
            'field_type' => 'checkbox',
            'field_words' => array(
                'field_title' => $this->lang->line('crm_chatbot_quick_guide'),
                'field_description' => $this->lang->line('crm_chatbot_quick_guide_description')
            ),
            'field_params' => array(
                'checked' => md_the_option('app_crm_chatbot_quick_guide')?1:0
            )

        ),
        array(
            'field_slug' => 'app_crm_chatbot_ip2location_enabled',
            'field_type' => 'checkbox',
            'field_words' => array(
                'field_title' => $this->lang->line('crm_chatbot_enable_ip2location'),
                'field_description' => $this->lang->line('crm_chatbot_enable_ip2location_description')
            ),
            'field_params' => array(
                'checked' => md_the_option('app_crm_chatbot_ip2location_enabled')?1:0
            )

        ),
        array(
            'field_slug' => 'app_crm_chatbot_ip2location_api_key',
            'field_type' => 'text',
            'field_words' => array(
                'field_title' => $this->lang->line('crm_chatbot_ip2location_api_key'),
                'field_description' => $this->lang->line('crm_chatbot_ip2location_api_key_description')
            ),
            'field_params' => array(
                'placeholder' => $this->lang->line('crm_chatbot_enter_ip2location_api_key'),
                'value' => md_the_option('app_crm_chatbot_ip2location_api_key')?md_the_option('app_crm_chatbot_ip2location_api_key'):'',
                'disabled' => false
            )

        ),
        array(
            'field_slug' => 'app_crm_chatbot_google_map_enabled',
            'field_type' => 'checkbox',
            'field_words' => array(
                'field_title' => $this->lang->line('crm_chatbot_enable_google_map'),
                'field_description' => $this->lang->line('crm_chatbot_enable_google_map_description')
            ),
            'field_params' => array(
                'checked' => md_the_option('app_crm_chatbot_google_map_enabled')?1:0
            )

        ),
        array(
            'field_slug' => 'app_crm_chatbot_google_map_api_key',
            'field_type' => 'text',
            'field_words' => array(
                'field_title' => $this->lang->line('crm_chatbot_google_map_api_key'),
                'field_description' => $this->lang->line('crm_chatbot_google_map_api_key_description')
            ),
            'field_params' => array(
                'placeholder' => $this->lang->line('crm_chatbot_enter_google_map_api_key'),
                'value' => md_the_option('app_crm_chatbot_google_map_api_key')?md_the_option('app_crm_chatbot_google_map_api_key'):'',
                'disabled' => false
            )

        )
        
    )

);

/* End of file admin.php */