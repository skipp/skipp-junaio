<?php

/**
 * Point form.
 *
 * @package    sf_sandbox
 * @subpackage form
 * @author     SKiPP
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class PointForm extends BasePointForm
{
  public function configure()
  {
    $this->widgetSchema['interaction_feedback'] = new sfWidgetFormChoice(array(
      'choices' => Point::getFeedbackChoices()
    ));

    $this->validatorSchema['interaction_feedback'] = new sfValidatorChoice(array(
      'choices' => array_keys(Point::getFeedbackChoices())
    ));

    // $this->validatorSchema->setOption('allow_extra_fields', true);
    // $this->validatorSchema->setOption('filter_extra_fields', false);
  }
}
