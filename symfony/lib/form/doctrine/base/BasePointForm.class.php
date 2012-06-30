<?php

/**
 * Point form base class.
 *
 * @method Point getObject() Returns the current form's model object
 *
 * @package    sf_sandbox
 * @subpackage form
 * @author     SKiPP
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BasePointForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                   => new sfWidgetFormInputHidden(),
      'name'                 => new sfWidgetFormInputText(),
      'description'          => new sfWidgetFormInputText(),
      'interaction_feedback' => new sfWidgetFormInputText(),
      'placed_date'          => new sfWidgetFormDate(),
      'longitude'            => new sfWidgetFormInputText(),
      'latitude'             => new sfWidgetFormInputText(),
      'altitude'             => new sfWidgetFormInputText(),
      'X'                    => new sfWidgetFormInputText(),
      'Y'                    => new sfWidgetFormInputText(),
      'Z'                    => new sfWidgetFormInputText(),
      'accuracy'             => new sfWidgetFormInputText(),
      'maxdistance'          => new sfWidgetFormInputText(),
      'mime_type'            => new sfWidgetFormInputText(),
      'model_uri'            => new sfWidgetFormInputText(),
      'thumbnail_url'        => new sfWidgetFormInputText(),
      'icon_url'             => new sfWidgetFormInputText(),
      'phonenumber'          => new sfWidgetFormInputText(),
      'email'                => new sfWidgetFormInputText(),
      'homepage'             => new sfWidgetFormInputText(),
      'local_name'           => new sfWidgetFormInputText(),
      'line'                 => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'                   => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'name'                 => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'description'          => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'interaction_feedback' => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'placed_date'          => new sfValidatorDate(array('required' => false)),
      'longitude'            => new sfValidatorNumber(array('required' => false)),
      'latitude'             => new sfValidatorNumber(array('required' => false)),
      'altitude'             => new sfValidatorNumber(array('required' => false)),
      'X'                    => new sfValidatorNumber(array('required' => false)),
      'Y'                    => new sfValidatorNumber(array('required' => false)),
      'Z'                    => new sfValidatorNumber(array('required' => false)),
      'accuracy'             => new sfValidatorInteger(array('required' => false)),
      'maxdistance'          => new sfValidatorInteger(array('required' => false)),
      'mime_type'            => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'model_uri'            => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'thumbnail_url'        => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'icon_url'             => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'phonenumber'          => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'email'                => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'homepage'             => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'local_name'           => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'line'                 => new sfValidatorString(array('max_length' => 255, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('point[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Point';
  }

}
