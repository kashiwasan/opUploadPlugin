<?php

/**
 * This file is part of the OpenPNE package.
 * (c) OpenPNE Project (http://www.openpne.jp/)
 *
 * For the full copyright and license information, please view the LICENSE
 * file and the NOTICE file that were distributed with this source code.
 */

/**
 * downloads actions.
 *
 * @package    OpenPNE
 * @subpackage downloads
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 9301 2008-05-27 01:08:46Z dwhittle $
 */
class downloadsActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->memberId = isset($request->getParameter('id')) ? $request->getParameter('id') : $this->getUser()->getMember()->getId();
    $this->memberFiles = Doctrine::getTable('MemberFile')->findByMemberId($this->memberId);
    if(!$this->memberFiles){
      return sfView::ERROR;
    }
    return sfView::SUCCESS;
  }

  public function executeShow(sfWebRequest $request)
  {
    if(!$request->getParameter('id')){
      return sfView::ERROR;
    }
    $this->FileId = $request->getParameter('id');
    $this->memberFile = Doctrine::getTable('MemberFile')->find($this->FileId);
    if(!$this->memberFile){
      return sfView::ERROR;
    }
    return sfView::SUCCESS;
  }

  public function executeFile(sfWebRequest $request)
  {
    if(!$request->getParameter('id')){
      return sfView::ERROR;
    }
    $FileId = $request->getParameter('id');
    $memberFile = Doctrine::getTable('MemberFile')->find($FileId);
    if(!$this->memberFile){
      return sfView::ERROR;
    }

    $path = $memberFile->getPath();
    $filename = basename($path);

    //output headers.
    header('Content-type: application/octet-stream');
    header('Content-Disposition: attachment; filename='.$filename);
    header('Content-Length: '.filesize($path));
    header('Content-Transfer-Encoding: binary');

    /download the file.
    readfile ($npath);
    
    return sfView::NONE;

  }

}
