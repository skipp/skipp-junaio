<?php

/**
 * PointStat filter form base class.
 *
 * @package    sf_sandbox
 * @subpackage filter
 * @author     SKiPP
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BasePointStatFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'uid'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'l'    => new sfWidgetFormFilterInput(),
      'p'    => new sfWidgetFormFilterInput(),
      'm'    => new sfWidgetFormFilterInput(),
      'page' => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'uid'  => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'l'    => new sfValidatorPass(array('required' => false)),
      'p'    => new sfValidatorPass(array('required' => false)),
      'm'    => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'page' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('point_stat_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'PointStat';
  }

  public function getFields()
  {
    return array(
      'id'   => 'Number',
      'uid'  => 'Number',
      'l'    => 'Text',
      'p'    => 'Text',
      'm'    => 'Number',
      'page' => 'Number',
    );
  }
}
