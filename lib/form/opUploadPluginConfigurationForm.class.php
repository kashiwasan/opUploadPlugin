<?php

/**
 * This file is part of the OpenPNE package.
 * (c) OpenPNE Project (http://www.openpne.jp/)
 *
 * For the full copyright and license information, please view the LICENSE
 * file and the NOTICE file that were distributed with this source code.
 */

/**
 * opUploadPluginConfigurationForm
 *
 * @package    OpenPNE
 * @subpackage opUploadPlugin
 * @author     Kashiwasan <kashiwasan@gmail.com>
 */
class opUploadPluginConfigurationForm extends BaseForm
{
  public function configure()
  {

    $this->widgetSchema['allow_extentions'] = new sfWidgetFormInput();
    $this->setDefault('allow_extentions', Doctrine::getTable('SnsConfig')->get('op_upload_plugin_allow_extentions', ''));
    $this->widgetSchema->setHelp('allow_extentions', 'Write your list to allow files of extentions.');

    $this->widgetSchema->setNameFormat('op_upload_plugin[%s]');
  }

  public function save()
  {
    $names = array('allow_extentions');

    foreach ($names as $name)
    {
      Doctrine::getTable('SnsConfig')->set('op_upload_plugin_'.$name, $this->getValue($name));
    }
  }
}
