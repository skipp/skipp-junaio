<?php

/**
 * sfGuardUserProfile filter form base class.
 *
 * @package    sf_sandbox
 * @subpackage filter
 * @author     SKiPP
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BasesfGuardUserProfileFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'sf_guard_user_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('User'), 'add_empty' => true)),
      'first_name'       => new sfWidgetFormFilterInput(),
      'middle_name'      => new sfWidgetFormFilterInput(),
      'last_name'        => new sfWidgetFormFilterInput(),
      'email_address'    => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'sf_guard_user_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('User'), 'column' => 'id')),
      'first_name'       => new sfValidatorPass(array('required' => false)),
      'middle_name'      => new sfValidatorPass(array('required' => false)),
      'last_name'        => new sfValidatorPass(array('required' => false)),
      'email_address'    => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('sf_guard_user_profile_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'sfGuardUserProfile';
  }

  public function getFields()
  {
    return array(
      'id'               => 'Number',
      'sf_guard_user_id' => 'ForeignKey',
      'first_name'       => 'Text',
      'middle_name'      => 'Text',
      'last_name'        => 'Text',
      'email_address'    => 'Text',
    );
  }
}
