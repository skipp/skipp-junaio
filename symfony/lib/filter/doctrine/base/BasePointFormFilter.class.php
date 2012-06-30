<?php

/**
 * Point filter form base class.
 *
 * @package    sf_sandbox
 * @subpackage filter
 * @author     SKiPP
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BasePointFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'name'                 => new sfWidgetFormFilterInput(),
      'description'          => new sfWidgetFormFilterInput(),
      'interaction_feedback' => new sfWidgetFormFilterInput(),
      'placed_date'          => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'longitude'            => new sfWidgetFormFilterInput(),
      'latitude'             => new sfWidgetFormFilterInput(),
      'altitude'             => new sfWidgetFormFilterInput(),
      'X'                    => new sfWidgetFormFilterInput(),
      'Y'                    => new sfWidgetFormFilterInput(),
      'Z'                    => new sfWidgetFormFilterInput(),
      'accuracy'             => new sfWidgetFormFilterInput(),
      'maxdistance'          => new sfWidgetFormFilterInput(),
      'mime_type'            => new sfWidgetFormFilterInput(),
      'model_uri'            => new sfWidgetFormFilterInput(),
      'thumbnail_url'        => new sfWidgetFormFilterInput(),
      'icon_url'             => new sfWidgetFormFilterInput(),
      'phonenumber'          => new sfWidgetFormFilterInput(),
      'email'                => new sfWidgetFormFilterInput(),
      'homepage'             => new sfWidgetFormFilterInput(),
      'local_name'           => new sfWidgetFormFilterInput(),
      'line'                 => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'name'                 => new sfValidatorPass(array('required' => false)),
      'description'          => new sfValidatorPass(array('required' => false)),
      'interaction_feedback' => new sfValidatorPass(array('required' => false)),
      'placed_date'          => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'longitude'            => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'latitude'             => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'altitude'             => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'X'                    => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'Y'                    => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'Z'                    => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'accuracy'             => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'maxdistance'          => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'mime_type'            => new sfValidatorPass(array('required' => false)),
      'model_uri'            => new sfValidatorPass(array('required' => false)),
      'thumbnail_url'        => new sfValidatorPass(array('required' => false)),
      'icon_url'             => new sfValidatorPass(array('required' => false)),
      'phonenumber'          => new sfValidatorPass(array('required' => false)),
      'email'                => new sfValidatorPass(array('required' => false)),
      'homepage'             => new sfValidatorPass(array('required' => false)),
      'local_name'           => new sfValidatorPass(array('required' => false)),
      'line'                 => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('point_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Point';
  }

  public function getFields()
  {
    return array(
      'id'                   => 'Number',
      'name'                 => 'Text',
      'description'          => 'Text',
      'interaction_feedback' => 'Text',
      'placed_date'          => 'Date',
      'longitude'            => 'Number',
      'latitude'             => 'Number',
      'altitude'             => 'Number',
      'X'                    => 'Number',
      'Y'                    => 'Number',
      'Z'                    => 'Number',
      'accuracy'             => 'Number',
      'maxdistance'          => 'Number',
      'mime_type'            => 'Text',
      'model_uri'            => 'Text',
      'thumbnail_url'        => 'Text',
      'icon_url'             => 'Text',
      'phonenumber'          => 'Text',
      'email'                => 'Text',
      'homepage'             => 'Text',
      'local_name'           => 'Text',
      'line'                 => 'Text',
    );
  }
}
