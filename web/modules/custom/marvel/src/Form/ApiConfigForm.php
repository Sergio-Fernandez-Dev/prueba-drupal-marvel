<?php

/**
 * @file
 * Contains \Drupal\marvel\Form\APIConfigForm.
 */

namespace Drupal\marvel\Form;

use Drupal\Core\Form\FormBase;
use \Drupal\Core\Form\FormStateInterface;
use Drupal\marvel\Entity\ApiKey;

class ApiConfigForm extends FormBase
{
    /** 
     * {@inheritDoc}
     */
    public function getFormId()
    {
        return 'api_config_form';
    }

    /** 
     * {@inheritDoc}
     */
    public function buildForm(array $form, FormStateInterface $form_state)
    {
        $form['api_version'] = [
            '#type' => 'textfield',
            '#title' => t('API Version: '),
            '#required' => TRUE,
        ];

        $form['public_key'] = [
            '#type' => 'textfield',
            '#title' => t('Public Key: '),
            '#required' => TRUE,
        ];

        $form['private_key'] = [
            '#type' => 'textfield',
            '#title' => t('Private Key: '),
            '#required' => TRUE,
        ];

        $form['submit'] = [
            '#type' => 'submit',
            '#value' => t('Create Key'),
        ];

        return $form;
    }

    /** 
     * {@inheritDoc}
     */
    public function submitForm(array &$form, FormStateInterface $form_state)
    {
        $publicKey = $form_state->getValue('public_key');
        $privateKey = $form_state->getValue('private_key');
        $timestamp = \time();
        $hash = \md5($timestamp . $privateKey . $publicKey);

        $fields = [
            'api_version' => $form_state->getValue('api_version'),
            'endpoint' => $form_state->getValue('endpoint'),
            'public_key' => $publicKey,
            'private_key' => $privateKey,
            'timestamp' => $timestamp,
            'hash' => $hash,
        ];

        $apiKey = ApiKey::create($fields);

        $apiKey->save();
    }
}