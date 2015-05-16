<?php
/**
 * @file
 * Contains \Drupal\form_test\Form\TestForm.
 */

namespace Drupal\form_test\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\ConfigFormBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Component\Utility\UrlHelper;

/**
 * Contribute form.
 */
class TestForm extends FormBase {
  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'form_test_test_form';
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $form['checkboxen'] = array(
      '#type' => 'checkboxes',
      '#title' => t('Checkboxes'),
      '#required' => TRUE,
      '#options' => array(
        'Option 1',
        'Option 2',
        'Option 3',
      ),
    );

    $form['radios'] = array(
      '#type' => 'radios',
      '#title' => t('Radios'),
      '#required' => TRUE,
      '#options' => array(
        'Option 1',
        'Option 2',
        'Option 3',
      ),
    );
    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function validateForm(array &$form, FormStateInterface $form_state) {
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
  }
}