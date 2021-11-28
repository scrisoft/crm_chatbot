<?php
/**
 * Settings Inc
 *
 * This file contains the functions required
 * to display the settings in the CRM Settings app
 *
 * @author Scrisoft
 * @package CRM
 * @author   Scrisoft <asksyn@gmail.com>
 * @license  https://github.com/scrisoft/crm_chatbot/blob/main/license CRM Chatbot License
 * @link     https://www.midrub.com/
 */

defined('BASEPATH') OR exit('No direct script access allowed');

// Set general's tab
set_crm_settings_general_tab (
    'crm_chatbot_general_chatbot_tab',
    array(
        'name' => $this->lang->line('crm_chatbot'),
        'icon' => '<img src="' . base_url('assets/base/user/apps/collection/crm-chatbot/img/cover.png') . '" alt="' . $this->lang->line('crm_chatbot') . '">',
        'position' => 10
    )
);

// Set general's tab option
set_crm_settings_general_tab_option (
    'crm_chatbot_general_chatbot_tab',
    array(
        'template_slug' => 'category',
        'slug' => 'crm_chatbot_general_chatbot_tab_notifications_category',
        'label' => $this->lang->line('crm_chatbot_notifications'),
        'position' => 1
    )
);

// Set general's tab option
set_crm_settings_general_tab_option (
    'crm_chatbot_general_chatbot_tab',
    array(
        'template_slug' => 'checkbox_input',
        'slug' => 'crm_chatbot_new_threads_alerts',
        'label' => $this->lang->line('crm_chatbot_new_threads_alerts'),
        'label_description' => $this->lang->line('crm_chatbot_new_threads_alerts_description'),
        'position' => 2
    )
);

/* End of file settings.php */