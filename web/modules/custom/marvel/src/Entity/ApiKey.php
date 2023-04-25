<?php

/**
 * @file
 * Contains \Drupal\marvel\Entity\ApiKey.
 */
namespace Drupal\marvel\Entity;

use Drupal\Core\Entity\ContentEntityBase;
use \Drupal\Core\Entity\Annotation\ContentEntityType;
use Drupal\Core\Entity\EntityTypeInterface;
use Drupal\Core\Field\BaseFieldDefinition;
use \Drupal\marvel\ApiKeyInterface;

/**
 * Defines an ApiKey entity type.
 * 
 * @ContentEntityType(
 *      id = "marvel_api_key",
 *      label = "API Keys",
 *      base_table = "marvel_api_key",
 *      entity_keys = {
 *          "id" = "id",
 *      },
 *      handlers = {
 *          "views_data" = "Drupal\views\EntityViewsData"
 *      },
 * )
 */
class ApiKey extends ContentEntityBase implements ApiKeyInterface
{

    public static function baseFieldDefinitions(EntityTypeInterface $entity_type)
    {
        $fields = parent::baseFieldDefinitions($entity_type);

        $fields['id'] = BaseFieldDefinition::create('integer')
            ->setLabel(t('API Key Id'))
            ->setDescription(t('The Id of the API Key'))
            ->setRequired(true)
            ->addConstraint('UniqueField', []);

        $fields['api_version'] = BaseFieldDefinition::create('string')
            ->setLabel(t('API version'))
            ->setDescription(t('The API version used by the API key.'))
            ->setRequired(true)
            ->setDefaultValue('')
            ->setSetting('max_length', 10);

        $fields['endpoint'] = BaseFieldDefinition::create('string')
            ->setLabel(t('Public key'))
            ->setDescription(t('The endpoint used to access to the API'))
            ->setRequired(true)
            ->setDefaultValue('')
            ->setSetting('max_length', 255);

        $fields['url'] = BaseFieldDefinition::create('string')
            ->setLabel(t('URL'))
            ->setDescription(t('The complete url used to access to the API'))
            ->setRequired(true)
            ->setDefaultValue('')
            ->setSetting('max_length', 255);

        return $fields;
    }
}