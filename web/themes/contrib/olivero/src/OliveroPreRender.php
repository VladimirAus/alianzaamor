<?php

namespace Drupal\olivero;

use Drupal\Core\Security\TrustedCallbackInterface;

/**
 * Implements trusted prerender callbacks for the Olivero theme.
 *
 * @internal
 */
class OliveroPreRender implements TrustedCallbackInterface {

  /**
   * Prerender callback for text_format elements.
   */
  public static function textFormat($element) {
    // Add clearfix for filter wrapper.
    $element['format']['#attributes']['class'][] = 'filter-wrapper';
    $element['format']['#attributes']['class'][] = 'clearfix';
    $element['format']['format']['#wrapper_attributes']['class'][] = 'form-item--editor-format';
    $element['format']['format']['#attributes']['class'][] = 'filter-list';
    $element['format']['format']['#attributes']['class'][] = 'form-element--small';
    $element['format']['format']['#attributes']['class'][] = 'form-element--editor-format';
    $element['format']['guidelines']['#attributes']['class'][] = 'filter-guidelines';
    $element['format']['help']['#attributes']['class'][] = 'filter-help';
    return $element;
  }

  /**
   * {@inheritdoc}
   */
  public static function trustedCallbacks() {
    return [
      'textFormat',
    ];
  }

}