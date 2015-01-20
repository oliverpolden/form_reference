<?php

/**
 * @file
 * Documentation for form_reference API.
 */

/**
 * @addtogroup hooks
 * @{
 */

/**
 * Specify forms to be available to form_reference.
 *
 * Each form is specified using its form_id as the element key.
 *
 * As a minimum, name should be defined and appears in the field configuration.
 *
 * Optional:
 *   - category - Category the form belongs in. 'Other' if not specified.
 *   - wrapper - A wrapper function to be used instead of drupal_get_form().
 *   - module - The module in which the form exists.
 *   - file - The file in which the form exists.
 *   - validation_element - Existence of this element in the loaded form will be
 *     checked to validate that the form_id is valid.
 *
 * @return array
 *   Array of form definitions.
 */
function hook_form_reference() {
  $forms = array(
    'user_login' => array(
      'name' => t('User Login'),
    ),
    'page' => array(
      'name' => t('Basic page'),
      // The following are optional.
      'category' => t('Core'),
      'wrapper' => 'node_add',
      'module' => 'node',
      'file' => 'node.pages.inc',
      'validation_element' => '#node_edit_form',
    ),
  );

  return $forms;
}
