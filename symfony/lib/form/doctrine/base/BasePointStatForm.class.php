<?php

/**
 * PointStat form base class.
 *
 * @method PointStat getObject() Returns the current form's model object
 *
 * @package    sf_sandbox
 * @subpackage form
 * @author     SKiPP
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BasePointStatForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'   => new sfWidgetFormInputHidden(),
      'uid'  => new sfWidgetFormInputText(),
      'l'    => new sfWidgetFormInputText(),
      'p'    => new sfWidgetFormInputText(),
      'm'    => new sfWidgetFormInputText(),
      'page' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'   => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'uid'  => new sfValidatorInteger(),
      'l'    => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'p'    => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'm'    => new sfValidatorInteger(array('required' => false)),
      'page' => new sfValidatorInteger(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('point_stat[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'PointStat';
  }

}
