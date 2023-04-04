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
class Comic extends ContentEntityBase implements ComicInterface 
{

    public static function baseFieldDefinitions(EntityTypeInterface $entity_type)
    {
        $fields = parent::baseFieldDefinitions($entity_type); 

        $fields['title'] = BaseFieldDefinition::create('string')
            ->setLabel(t('Title'))
            ->setDescription(t('The title of the comic.'))
            ->setRequired(true)
            ->setSetting('max_length', 75);

        $fields['description'] = BaseFieldDefinition::create('string')
            ->setLabel(t('Description'))
            ->setDescription(t('The resume of the comic'))
            ->setRequired(true)
            ->setDefaultValue('Not available description')
            ->setSetting('max_length', 255);

        $fields['num_of_pages'] = BaseFieldDefinition::create('integer')
            ->setLabel(t('Number of pages'))
            ->setDescription(t('The number of pages in the comic'))
            ->setRequired(true)
            ->setDefaultValue(0);


        $fields['thumbnail_path'] = BaseFieldDefinition::create('string')
            ->setLabel(t('Front page'))
            ->setDescription(t('The front page of the comic.'))
            ->setRequired(true)
            ->setSetting('max_length', 255);
        
        $fields['thumbnail_extension'] = BaseFieldDefinition::create('string')
            ->setLabel(t('Picture extension'))
            ->setDescription(t("The extension of comic's picture"))
            ->setRequired(true)
            ->setSetting('max_length', 4);

        $fields['created'] = BaseFieldDefinition::create('created')
            ->setLabel(t('Created'))
            ->setDescription(t('The time that the entity was created.'));

        return $fields;
    }
} 