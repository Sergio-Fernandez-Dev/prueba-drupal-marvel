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
 *      base_table = "marvel_comics",
 *      entity_keys = {
 *          "id" = "id",
 *          "uuid" = "uuid",
 *      }
 * )
 */
class Comic extends ContentEntityBase implements ComicInterface 
{

    public static function baseFieldDefinitions(EntityTypeInterface $entity_type)
    {
        $fields = parent::baseFieldDefinitions($entity_type); 

        $fields['comic_id'] = BaseFieldDefinition::create('integer')
        ->setLabel(t('Comic Id'))
        ->setDescription(t('The Id of the comic'))
        ->setRequired(true);
        
        $fields['users'] = BaseFieldDefinition::create('entity_reference')
            ->setLabel(t('Users'))
            ->setDescription(t('The users who have favorited this comic.'))
            ->setSetting('target_type', 'user')
            ->setCardinality(BaseFieldDefinition::CARDINALITY_UNLIMITED)
            ->setDefaultValue([]);

        return $fields;
    }
} 