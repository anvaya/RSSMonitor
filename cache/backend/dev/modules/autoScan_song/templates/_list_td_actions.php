<td>
  <ul class="sf_admin_td_actions">
    <li class="sf_admin_action_play">
      <?php echo link_to(__('Play', array(), 'messages'), 'scan_song/Play?id='.$scan_song->getId(), array(  'popup' =>   array(    0 => 'Play',    1 => 'width=400,height=400,scrollbars=1',  ),)) ?>
    </li>
    <li class="sf_admin_action_add_to_system">
      <?php echo link_to(__('Add To System', array(), 'messages'), 'scan_song/add2System?id='.$scan_song->getId(), array()) ?>
    </li>
    <li class="sf_admin_action_delete_file">
      <?php echo link_to(__('Delete File', array(), 'messages'), 'scan_song/deleteFile?id='.$scan_song->getId(), array()) ?>
    </li>
  </ul>
</td>
