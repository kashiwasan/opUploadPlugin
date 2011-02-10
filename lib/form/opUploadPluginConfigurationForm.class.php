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
class opUploadPluginConfigurationForm extends sfForm
{
  public function configure()
  {

    $this->setWidgets(array(
      'allow_extensions'    => new sfWidgetFormInput(),
      'max_size'   => new sfWidgetFormInput(),
      'strage_size' => new sfWidgetFormInput(),
    ));

    $this->widgetSchema->setLabels(array(
      'allow_extensions'    => 'allow files in extensions.',
      'max_size'   => 'max file size here.',
      'strage_size' => 'your max strage size here.',
    ));
    $this->setDefaults(array(
      'allow_extensions' => ,
      '' => ,
      '' => ,
    ));

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
