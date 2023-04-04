<?php

/**
 * @file
 * Contains \Drupal\marvel\Form\APIConfigForm.
 */

namespace Drupal\marvel\Form;

use Drupal\Core\Form\FormBase;
use \Drupal\Core\Form\FormStateInterface;

class APIConfigForm extends FormBase {

    public function getFormId() {
        return'api_config_form';
    }

    public function buildForm(array $form, FormStateInterface $form_state) {

        $form['endpoint'] = [
            '#type' => 'textfield',
            '#title' => t('Endpoint: '),
            '#required' => TRUE,
        ];

        $form['api_key'] = [
            '#type' => 'textfield',
            '#title' => t('API Key: '),
            '#required' => TRUE,
        ];

        return $form;
    }

    public function submitForm(array &$form, FormStateInterface $form_state){

    }
}