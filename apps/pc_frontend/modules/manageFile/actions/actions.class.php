<?php

/**
 * This file is part of the OpenPNE package.
 * (c) OpenPNE Project (http://www.openpne.jp/)
 *
 * For the full copyright and license information, please view the LICENSE
 * file and the NOTICE file that were distributed with this source code.
 */

/**
 * manageFile actions.
 *
 * @package    OpenPNE
 * @subpackage manageFile
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 9301 2008-05-27 01:08:46Z dwhittle $
 */
class manageFileActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->forward('default', 'module');
  }

  public function executeNew(sfWebRequest $request)
  {
    $manageFile = new MemberFileForm();
    $
    
  }

  public function executeUpload(sfWebRequest $request)
  {
    $memberFile = new MemberFileForm();
    $memberFile->setMemberId(this->
    $fileName = $this->getRequest()->getFileName('file');
    if(Doctrine::getTable('SnsConfig')->get('op_upload_plugin_upload_dir', null)==null){
      return sfView::ERROR;
    }
    $path = Doctrine::getTable('SnsConfig')->get('op_upload_plugin_upload_dir').'/'.$fileName;
    $this->getRequest()->moveFile('file', $path)
    $this->renderText($path);
    
  }

  public function executeEdit(sfWebRequest $request)
  {
    $manageFile = $this->getRoute->getObject();
    
    $this->forward404Unless($room->isEditable($this->getUser()->getMemberId()));

    $this->form = new MemberFileForm($room);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $manageFile = $this->getRoute->getObject();
    
    $this->forward404Unless($this->manageFile->getMemberId() === $this->getUser()->getMemberId());

    $this->form = new MemberFileForm($room);

  }

  public function executeDeleteConfirm(sfWebRequest $request)
  {
    $this->manageFile = $this->getRoute()->getObject();
    $this->forward404Unless($this->manageFile->getMemberId() === $this->getUser()->getMemberId());
  }

  public function executeDelete(sfWebRequest $request)
  {
    $manageFile = $this->getRoute->getObject();
    $this->forward404Unless($this->manageFile->getMemberId() === $this->getUser()->getMemberId());
    $this->checkCSRFProtection();
    $manageFile->delete()
    $this->getUser()->setFlash('notice', 'íœ‚µ‚Ü‚µ‚½B');
    $this->redirect('@downloads_list');
  }

}
