<div class="dparts memberFileList">
  <div class="parts">
  <div class="partsHeading">
  <h3><?php echo __('List of Member File') ?></h3>
  </div>
  <div class="partsInfo">
  <ul id="downloadFile">
<?php foreach($memberFiles as $memberFile): ?>  
<li>
<div class="box_memberImage">
<p><?php echo link_to(op_image_tag_sf_image($memberFile->getMember()->getImageFileName(), array('alt' => sprintf('[%s]', $memberFile->getMember()), 'size' => '48x48')), '@obj_member_profile?id='.$memberFile->getMemberId()) ?></p>
</div>
<div class="box_body">
<p>
<?php echo link_to($memberFile->getTitle(), '@download_file_show?id='.$memberFile->getId()); ?><br />
<?php echo(__('Last Updated'), $member->getUpdatedAt()); ?><br />
</p>
</div>
</li>
<?php endforeach; ?>
  </ul>
  </div>
  </div>
</div>
