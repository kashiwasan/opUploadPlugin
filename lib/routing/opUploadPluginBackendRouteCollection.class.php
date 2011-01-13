<?php

/**
 * This file is part of the OpenPNE package.
 * (c) OpenPNE Project (http://www.openpne.jp/)
 *
 * For the full copyright and license information, please view the LICENSE
 * file and the NOTICE file that were distributed with this source code.
 */

/**
 * opUploadPluginBackendRouteCollection
 *
 * @package    opUploadPlugin
 * @subpackage routing
 * @author     kashiwasan
 */
class opUploadPluginBackendRouteCollection extends opUploadPluginBaseRouteCollection
{
  protected function generateRoutes()
  {
    return array(
      'opUploadPlugin' => new sfRoute(
        '/opUploadPlugin',
        array('module' => 'opUploadPlugin', 'action' => 'index')
      )
    );
  }
}
