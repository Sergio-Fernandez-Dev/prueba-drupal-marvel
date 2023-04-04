<?php 

namespace Drupal\marvel\Entity;

use Drupal\Core\Entity\ContentEntityBase;
use \Drupal\Core\Entity\Annotation\ContentEntityType;
use Drupal\Core\Entity\EntityTypeInterface;
use Drupal\Core\Field\BaseFieldDefinition;
use Drupal\marvel\ComicInterface;

/**
 * Defines a comic entity type.
 * 
 * @ContentEntityType(
 *      id = "marvel_comic",
 *      base_table = "comics",
 *      entity_keys = {
 *          "id" = "id",
 *          "uuid" = "uuid",
 *          "label" = "label",
 *      }
 * )
 */
/**class Comic extends ContentEntityBase implements ComicInterface 
{

    public static function baseFieldDefinitions(EntityTypeInterface $entity_type)
    {
        $fields = parent::baseFieldDefinitions($entity_type); 

        $fields['name'] = BaseFieldDefinition::create('string')
            ->setLabel(t('Character Name'))
            ->setDescription(t('The name of the character'))
            ->setRequired(true)
            ->setSetting('max_length', 50);

        $fields['description'] = BaseFieldDefinition::create('string')
            ->setLabel(t('Description'))
            ->setDescription(t('The description of the character'))
            ->setRequired(true)
            ->setDefaultValue('Not available description')
            ->setSetting('max_length', 255);

        $fields['thumbnail_path'] = BaseFieldDefinition::create('string')
            ->setLabel(t('Character Picture'))
            ->setDescription(t('The picture of the character'))
            ->setRequired(true)
            ->setSetting('max_length', 255);
        
        $fields['thumbnail_extension'] = BaseFieldDefinition::create('string')
            ->setLabel(t('Character Picture Extension'))
            ->setDescription(t("The extension of character's picture"))
            ->setRequired(true)
            ->setSetting('max_length', 4);

        $fields['created'] = BaseFieldDefinition::create('created')
            ->setLabel(t('Created'))
            ->setDescription(t('The time that the entity was created.'));

        return $fields;
    }
}  */