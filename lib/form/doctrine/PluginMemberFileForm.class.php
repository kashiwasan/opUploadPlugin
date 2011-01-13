<?php

/**
 * PluginMemberFile form.
 *
 * @package    ##PROJECT_NAME##
 * @subpackage form
 * @author     ##AUTHOR_NAME##
 * @version    SVN: $Id: sfDoctrineFormPluginTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
abstract class PluginMemberFileForm extends BaseMemberFileForm
{
  public function setup()
  {
    parent::setup();
    
    $this->setValidator('title', new opValidatorString(array('max_length' => 140, 'trim' => true)));
    $this->setValidator('body', new opValidatorString(array('max_length' => 2147483647, 'trim' => true)));
    $this->setValidator('title', new opValidatorString(array('max_length' => 16, 'trim' => true)));
    
    $this->setWidget(''
    
    
    
    
    
    
    
    $this->useFields(array('title', 'body', 'password'));
  }
}
