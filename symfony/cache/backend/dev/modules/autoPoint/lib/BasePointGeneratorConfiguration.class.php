<?php

/**
 * point module configuration.
 *
 * @package    ##PROJECT_NAME##
 * @subpackage point
 * @author     ##AUTHOR_NAME##
 * @version    SVN: $Id: configuration.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BasePointGeneratorConfiguration extends sfModelGeneratorConfiguration
{
  public function getActionsDefault()
  {
    return array();
  }

  public function getFormActions()
  {
    return array(  '_delete' => NULL,  '_list' => NULL,  '_save' => NULL,  '_save_and_add' => NULL,);
  }

  public function getNewActions()
  {
    return array();
  }

  public function getEditActions()
  {
    return array();
  }

  public function getListObjectActions()
  {
    return array(  '_edit' => NULL,  '_delete' => NULL,);
  }

  public function getListActions()
  {
    return array(  '_new' => NULL,);
  }

  public function getListBatchActions()
  {
    return array(  '_delete' => NULL,);
  }

  public function getListParams()
  {
    return '%%id%% - %%name%% - %%placed_date%% - %%longitude%% - %%latitude%% - %%altitude%% - %%local_name%% - %%line%%';
  }

  public function getListLayout()
  {
    return 'tabular';
  }

  public function getListTitle()
  {
    return 'Point List';
  }

  public function getEditTitle()
  {
    return 'Edit Point';
  }

  public function getNewTitle()
  {
    return 'New Point';
  }

  public function getFilterDisplay()
  {
    return array(  0 => 'name',  1 => 'line',);
  }

  public function getFormDisplay()
  {
    return array();
  }

  public function getEditDisplay()
  {
    return array();
  }

  public function getNewDisplay()
  {
    return array();
  }

  public function getListDisplay()
  {
    return array(  0 => 'id',  1 => 'name',  2 => 'placed_date',  3 => 'longitude',  4 => 'latitude',  5 => 'altitude',  6 => 'local_name',  7 => 'line',);
  }

  public function getFieldsDefault()
  {
    return array(
      'id' => array(  'is_link' => true,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'name' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'description' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'interaction_feedback' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'placed_date' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Date',),
      'longitude' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'latitude' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'altitude' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'X' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'Y' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'Z' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'accuracy' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'maxdistance' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'mime_type' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'model_uri' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'thumbnail_url' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'icon_url' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'phonenumber' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'email' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'homepage' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'local_name' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'line' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
    );
  }

  public function getFieldsList()
  {
    return array(
      'id' => array(),
      'name' => array(),
      'description' => array(),
      'interaction_feedback' => array(),
      'placed_date' => array(),
      'longitude' => array(),
      'latitude' => array(),
      'altitude' => array(),
      'X' => array(),
      'Y' => array(),
      'Z' => array(),
      'accuracy' => array(),
      'maxdistance' => array(),
      'mime_type' => array(),
      'model_uri' => array(),
      'thumbnail_url' => array(),
      'icon_url' => array(),
      'phonenumber' => array(),
      'email' => array(),
      'homepage' => array(),
      'local_name' => array(),
      'line' => array(),
    );
  }

  public function getFieldsFilter()
  {
    return array(
      'id' => array(),
      'name' => array(),
      'description' => array(),
      'interaction_feedback' => array(),
      'placed_date' => array(),
      'longitude' => array(),
      'latitude' => array(),
      'altitude' => array(),
      'X' => array(),
      'Y' => array(),
      'Z' => array(),
      'accuracy' => array(),
      'maxdistance' => array(),
      'mime_type' => array(),
      'model_uri' => array(),
      'thumbnail_url' => array(),
      'icon_url' => array(),
      'phonenumber' => array(),
      'email' => array(),
      'homepage' => array(),
      'local_name' => array(),
      'line' => array(),
    );
  }

  public function getFieldsForm()
  {
    return array(
      'id' => array(),
      'name' => array(),
      'description' => array(),
      'interaction_feedback' => array(),
      'placed_date' => array(),
      'longitude' => array(),
      'latitude' => array(),
      'altitude' => array(),
      'X' => array(),
      'Y' => array(),
      'Z' => array(),
      'accuracy' => array(),
      'maxdistance' => array(),
      'mime_type' => array(),
      'model_uri' => array(),
      'thumbnail_url' => array(),
      'icon_url' => array(),
      'phonenumber' => array(),
      'email' => array(),
      'homepage' => array(),
      'local_name' => array(),
      'line' => array(),
    );
  }

  public function getFieldsEdit()
  {
    return array(
      'id' => array(),
      'name' => array(),
      'description' => array(),
      'interaction_feedback' => array(),
      'placed_date' => array(),
      'longitude' => array(),
      'latitude' => array(),
      'altitude' => array(),
      'X' => array(),
      'Y' => array(),
      'Z' => array(),
      'accuracy' => array(),
      'maxdistance' => array(),
      'mime_type' => array(),
      'model_uri' => array(),
      'thumbnail_url' => array(),
      'icon_url' => array(),
      'phonenumber' => array(),
      'email' => array(),
      'homepage' => array(),
      'local_name' => array(),
      'line' => array(),
    );
  }

  public function getFieldsNew()
  {
    return array(
      'id' => array(),
      'name' => array(),
      'description' => array(),
      'interaction_feedback' => array(),
      'placed_date' => array(),
      'longitude' => array(),
      'latitude' => array(),
      'altitude' => array(),
      'X' => array(),
      'Y' => array(),
      'Z' => array(),
      'accuracy' => array(),
      'maxdistance' => array(),
      'mime_type' => array(),
      'model_uri' => array(),
      'thumbnail_url' => array(),
      'icon_url' => array(),
      'phonenumber' => array(),
      'email' => array(),
      'homepage' => array(),
      'local_name' => array(),
      'line' => array(),
    );
  }


  /**
   * Gets the form class name.
   *
   * @return string The form class name
   */
  public function getFormClass()
  {
    return 'PointForm';
  }

  public function hasFilterForm()
  {
    return true;
  }

  /**
   * Gets the filter form class name
   *
   * @return string The filter form class name associated with this generator
   */
  public function getFilterFormClass()
  {
    return 'PointFormFilter';
  }

  public function getPagerClass()
  {
    return 'sfDoctrinePager';
  }

  public function getPagerMaxPerPage()
  {
    return 20;
  }

  public function getDefaultSort()
  {
    return array(null, null);
  }

  public function getTableMethod()
  {
    return '';
  }

  public function getTableCountMethod()
  {
    return '';
  }
}
