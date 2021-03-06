<?php

use CMSFactory\assetManager;

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

/**
 * @property Xforms_model xforms_model
 */
class Xforms_Widgets extends MY_Controller
{

    private $defaults = ['form_id' => 0];

    public function __construct()
    {
        parent::__construct();
        $lang = new MY_Lang();
        $lang->load('xforms');
        $this->load->model('xforms_model');
    }

    /**
     * display template form
     * @param array $widget
     * @return string
     */
    public function show_form($widget = [])
    {
        if ($widget['settings'] === FALSE) {
            $settings = $this->defaults;
        } else {
            $settings = $widget['settings'];
        }

        $form = $this->xforms_model->get_form((int)$settings['form_id']);

        if ($form['captcha'] == 1) {
            $this->dx_auth->captcha();
            $form['captcha_image'] = $this->dx_auth->get_captcha_image();
        }

        $fields = $this->xforms_model->get_form_fields($settings['form_id'], ['visible' => 1]);

        // Если есть поля "файл" в форме. Что бы не загружать лишние скрипты...
        $result = array_filter($fields, function ($lines) {
            return ($lines['type'] == 'file'); //Поиск по первому значению
        });

        if ($result) {
            return assetManager::create()
                ->setData('widget', $widget)
                ->setData('fields', $fields)
                ->setData('form', $form)
                ->registerScript('jquery.ui.widget')
                ->registerScript('jquery.iframe-transport')
                ->registerScript('jquery.fileupload')
                ->registerScript('xforms')
                ->registerScript('xforms_files')
                ->registerStyle('xforms')
                ->fetchTemplate('../widgets/' . $widget['name']);
        } else {
            return assetManager::create()
                ->setData('widget', $widget)
                ->setData('fields', $fields)
                ->setData('form', $form)
                ->registerScript('xforms')
                ->registerStyle('xforms')
                ->fetchTemplate('../widgets/' . $widget['name']);
        }
    }

    /**
     * Configure widget settings
     * @param string $action
     * @param array $widget_data
     */
    public function show_form_configure($action = 'show_settings', array $widget_data = [])
    {
        if ($this->dx_auth->is_admin() == FALSE) {
            exit;
        }

        switch ($action) {
            case 'show_settings':
                assetManager::create()
                    ->setData('widget', $widget_data)
                    ->setData('forms', $this->xforms_model->get_forms())
                    ->renderAdmin('widget_settings');
                break;

            case 'update_settings':
                $this->form_validation->set_rules('form_id', 'Форма', 'required');

                if ($this->form_validation->run($this) == FALSE) {
                    showMessage(validation_errors(), false, 'r');
                } else {
                    $data = ['form_id' => $this->input->post('form_id')];

                    $this->load->module('admin/widgets_manager')->update_config($widget_data['id'], $data);
                    showMessage(lang('Changes has been saved', 'xforms'));
                    if ($this->input->post('action') == 'tomain') {
                        pjax('/admin/widgets_manager/index');
                    }
                }
                break;

            case 'install_defaults':
                $this->load->module('admin/widgets_manager')->update_config($widget_data['id'], $this->defaults);
                break;
        }
    }

}