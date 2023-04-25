<?php

/**
 * @file
 * Contains \Drupal\marvel\Form\APIConfigForm.
 */

namespace Drupal\marvel\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Messenger\MessengerInterface;
use Drupal\marvel\Entity\ApiKey;


/**
 * Class ApiConfigForm.
 *
 * @package Drupal\marvel\Form
 */
class ApiConfigForm extends FormBase
{
    /**
     * The messenger service.
     *
     * @var \Drupal\Core\Messenger\MessengerInterface
     */
    protected $messenger;

    /**
     * ApiConfigForm constructor.
     *
     * @param \Drupal\Core\Messenger\MessengerInterface $messenger
     *   The messenger service.
     */
    public function __construct(MessengerInterface $messenger)
    {
        $this->messenger = $messenger;
    }

    /**
     * {@inheritdoc}
     */
    public static function create(\Symfony\Component\DependencyInjection\ContainerInterface $container)
    {
        return new static(
            $container->get('messenger')
        );
    }

    /**
     * {@inheritdoc}
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

        $form['endpoint'] = [
            '#type' => 'textfield',
            '#title' => t('Endpoint: '),
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
        $apiVersion = $form_state->getValue('api_version');
        $endpoint = $form_state->getValue('endpoint');
        $publicKey = $form_state->getValue('public_key');
        $privateKey = $form_state->getValue('private_key');
        $timestamp = \time();

        $hash = \md5($timestamp . $privateKey . $publicKey);

        $url = "https://gateway.marvel.com/{$apiVersion}/{$endpoint}?ts={$timestamp}&apikey={$publicKey}&hash={$hash}";

        $fields = [
            'api_version' => $apiVersion,
            'endpoint' => $endpoint,
            'url' => $url,
        ];

        $apiKey = ApiKey::create($fields);

        if ($apiKey->save()) {
            $this->messenger->addMessage(t('New URL created: ' . $url));
        } else {
            $this->messenger->addError(t('Error: The URL cannot be created.'));
        }
    }
}