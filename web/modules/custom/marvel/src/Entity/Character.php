<?php

namespace Drupal\marvel\Entity;

use Drupal\Core\Entity\ContentEntityBase;
use \Drupal\Core\Entity\Annotation\ContentEntityType;
use Drupal\Core\Entity\EntityTypeInterface;
use Drupal\Core\Field\BaseFieldDefinition;
use \Drupal\marvel\CharacterInterface;
/**
 * Defines a character entity type.
 * 
 * @ContentEntityType(
 *      id = "marvel_character",
 *      base_table = "characters",
 *      entity_keys = {
 *          "id" = "id",
 *          "uuid" = "uuid",
 *          "label" = "label",
 *      }
 * )
 */
class Character extends ContentEntityBase implements CharacterInterface
{

    public static function baseFieldDefinitions(EntityTypeInterface $entity_type)
    {
        $fields = parent::baseFieldDefinitions($entity_type); 

        $fields['name'] = BaseFieldDefinition::create('string')
            ->setLabel(t('Character name'))
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
            ->setLabel(t('Picture'))
            ->setDescription(t('The picture of the character'))
            ->setRequired(true)
            ->setSetting('max_length', 255);
        
        $fields['thumbnail_extension'] = BaseFieldDefinition::create('string')
            ->setLabel(t('Picture extension'))
            ->setDescription(t("The extension of character's picture"))
            ->setRequired(true)
            ->setSetting('max_length', 4);

        $fields['created'] = BaseFieldDefinition::create('created')
            ->setLabel(t('Created'))
            ->setDescription(t('The time that the entity was created.'));

        $fields['users'] = BaseFieldDefinition::create('entity_reference')
            ->setLabel(t('Users'))
            ->setDescription(t('The users who have favorited this comic.'))
            ->setSetting('target_type', 'user')
            ->setCardinality(BaseFieldDefinition::CARDINALITY_UNLIMITED)
            ->setDefaultValue([]);

        return $fields;
    }
}