<?php

/**
 * @file
 * Contains \Drupal\marvel\Entity\Character.
 */
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
 *      base_table = "marvel_characters",
 *      entity_keys = {
 *          "id" = "character_id",
 *          "uuid" = "uuid",
 *      },
 *      handlers = {
 *          "view_builder" = "Drupal\Core\Entity\EntityViewBuilder",
 *          "views_data" = "Drupal\views\EntityViewsData"
 *      },
 * )
 */
class Character extends ContentEntityBase implements CharacterInterface
{

    public static function baseFieldDefinitions(EntityTypeInterface $entity_type)
    {
        $fields = parent::baseFieldDefinitions($entity_type); 

        $fields['character_id'] = BaseFieldDefinition::create('integer')
            ->setLabel(t('Character Id'))
            ->setDescription(t('The Id of the character'))
            ->setRequired(true)
            ->addConstraint('UniqueField', []);

        $fields['users'] = BaseFieldDefinition::create('entity_reference')
            ->setLabel(t('Users'))
            ->setDescription(t('The users who have favorited this character.'))
            ->setSetting('target_type', 'user')
            ->setCardinality(BaseFieldDefinition::CARDINALITY_UNLIMITED)
            ->setDefaultValue([]);

        return $fields;
    }
}