<?php

/**
 * PluginMemberFile
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @package    ##PACKAGE##
 * @subpackage ##SUBPACKAGE##
 * @author     ##NAME## <##EMAIL##>
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class PluginMemberFile extends BaseMemberFile
{
  public function isEditable($member_id)
  {
    return $this->member_id == $member_id;
  }


  public function isViewable($memberId)
  {
    if ($this->is_open) return true;

    $flags = $this->getTable()->getViewablePublicFlags($this->getTable()->getPublicFlagByMemberId($this->member_id, $memberId));

    return in_array($this->public_flag, $flags);
  }
}