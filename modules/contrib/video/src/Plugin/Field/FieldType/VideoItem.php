<?php

namespace Drupal\video\Plugin\Field\FieldType;

use Drupal\Component\Utility\DeprecationHelper;
use Drupal\Component\Utility\Random;
use Drupal\Core\Field\FieldDefinitionInterface;
use Drupal\Core\Field\FieldStorageDefinitionInterface;
use Drupal\Core\File\FileExists;
use Drupal\Core\File\FileSystemInterface;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\TypedData\DataDefinition;
use Drupal\file\Plugin\Field\FieldType\FileItem;

/**
 * Plugin implementation of the 'video' field type.
 *
 * @FieldType(
 *   id = "video",
 *   label = @Translation("Video"),
 *   description = @Translation("This field stores the ID of an video file or embedded video as an integer value."),
 *   category = "reference",
 *   default_widget = "video_embed",
 *   default_formatter = "video_embed_player",
 *   column_groups = {
 *     "file" = {
 *       "label" = @Translation("File"),
 *       "columns" = {
 *         "target_id", "data"
 *       }
 *     },
 *   },
 *   list_class = "\Drupal\file\Plugin\Field\FieldType\FileFieldItemList",
 *   constraints = {"ReferenceAccess" = {}, "FileValidation" = {}},
 *   serialized_property_names = {
 *     "data"
 *   }
 * )
 */
class VideoItem extends FileItem {

  /**
   * The entity manager.
   *
   * @var \Drupal\Core\Entity\EntityTypeManagerInterface
   */
  protected $entityTypeManager;

  /**
   * {@inheritdoc}
   */
  public static function defaultStorageSettings() {
    return [
      'default_video' => [
        'uuid' => NULL,
        'data' => NULL
      ],
    ] + parent::defaultStorageSettings();
  }

  /**
   * {@inheritdoc}
   */
  public static function defaultFieldSettings() {
    $settings = [
      'file_extensions' => '',
      'file_directory' => 'videos/[date:custom:Y]-[date:custom:m]',
    ] + parent::defaultFieldSettings();
    // Remove field option.
    unset($settings['description_field']);
    return $settings;
  }

  /**
   * {@inheritdoc}
   */
  public static function schema(FieldStorageDefinitionInterface $field_definition) {
    return [
      'columns' => [
        'target_id' => [
          'description' => 'The ID of the file entity.',
          'type' => 'int',
          'unsigned' => TRUE,
        ],
        'data' => [
          'description' => "Additional video metadata.",
          'type' => 'varchar',
          'length' => 512,
        ],
      ],
      'indexes' => [
        'target_id' => ['target_id'],
      ],
      'foreign keys' => [
        'target_id' => [
          'table' => 'file_managed',
          'columns' => ['target_id' => 'fid'],
        ],
      ],
    ];
  }

  /**
   * {@inheritdoc}
   */
  public static function propertyDefinitions(FieldStorageDefinitionInterface $field_definition) {
    $properties = parent::propertyDefinitions($field_definition);

    // unset the default values from the file module
    unset($properties['display']);
    unset($properties['description']);

    $properties['data'] = DataDefinition::create('string')
      ->setLabel(t('Additional video metadata'))
      ->setDescription(t("Additional metadata for the uploadded or embedded video."));

    return $properties;
  }

  /**
   * {@inheritdoc}
   */
  public function storageSettingsForm(array &$form, FormStateInterface $form_state, $has_data) {
    $element = [];
    return $element;
  }

  /**
   * {@inheritdoc}
   */
  public function fieldSettingsForm(array $form, FormStateInterface $form_state) {
    // Get base form from FileItem.
    $element = parent::fieldSettingsForm($form, $form_state);

    // Remove the description option.
    unset($element['description_field']);
    unset($element['file_directory']);
    unset($element['file_extensions']);
    unset($element['max_filesize']);
    return $element;
  }

  /**
   * {@inheritdoc}
   */
  public function preSave() {
    parent::preSave();
  }

  /**
   * {@inheritdoc}
   */
  public static function generateSampleValue(FieldDefinitionInterface $field_definition) {
    $random = new Random();
    $settings = $field_definition->getSettings();

    // Prepare destination.
    $dirname = static::doGetUploadLocation($settings);
    \Drupal::service('file_system')->prepareDirectory($dirname, FileSystemInterface::CREATE_DIRECTORY);

    // Generate a file entity.
    $destination = $dirname . '/' . $random->name(10, TRUE) . '.mp4';
    $data = $random->paragraphs(3);
    $file = DeprecationHelper::backwardsCompatibleCall(\Drupal::VERSION, '10.3.0', fn() => \Drupal::service('file.repository')->writeData($data, $destination, FileExists::Error), fn() => \Drupal::service('file.repository')->writeData($data, $destination, FileSystemInterface::EXISTS_ERROR));
    $values = [
      'target_id' => $file->id(),
    ];
    return $values;
  }

  /**
   * {@inheritdoc}
   */
  public function isDisplayed() {
    // Video items do not have per-item visibility settings.
    return TRUE;
  }

  /**
   * Gets the entity manager.
   *
   * @return \Drupal\Core\Entity\EntityTypeManagerInterface.
   */
  protected function getEntityTypeManager() {
    if (!isset($this->entityTypeManager)) {
      $this->entityTypeManager = \Drupal::entityTypeManager();
    }
    return $this->entityTypeManager;
  }

}
