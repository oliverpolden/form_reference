INTRODUCTION
------------

The Form Reference module adds a new form reference field which can be used to
load a form within an entity.


RECOMMENDED MODULES
-------------------

 * Xautoload - https://www.drupal.org/project/xautoload
 * COOL - https://www.drupal.org/project/cool

These two modules allow PSR-4 strategy for defining forms. This is an elegant
way of creating forms that are defined in their own files and are autoloaded.

As of 8th Jan 2015 the COOL module isn't up to date with the Drupal 8 APIs and
should be patched as per this issue: https://www.drupal.org/node/2401887


INSTALLATION
------------

 * Install as you would normally install a contributed Drupal module. See:
   https://drupal.org/documentation/install/modules-themes/modules-7
   for further information.


CONFIGURATION
-------------

 * Add a form reference field to an entity making sure you select some forms
   that can be referenced.


TROUBLESHOOTING
---------------

A form exists but it won't load:
 - This is most likely because the form isn't included at runtime. You will need
   to define your own hook_form_reference().
   See form_reference_form_reference().


NOTES
-----

This module assumes that only appropriate users have permission to configure a
form reference field and they should be vigilant about the forms they allow
users to select e.g. search vs permissions form.


KNOWN ISSUES
------------

This has currently been developed to work with nodes. It uses the standard field
API but cannot be guaranteed to work with other entities.


SIMILAR MODULES
---------------

* https://www.drupal.org/project/plug - Not released and requires symphony
  components.
* https://www.drupal.org/project/inline_entity_form - This allows forms to be
  added on the edit page of entities and does not present them on display.


MAINTAINERS
-----------

Current maintainers:
 * Oliver Polden (oliverpolden) - https://www.drupal.org/user/236885

This project has been sponsored by:
 * Capgemini - http://www.capgemini.com
