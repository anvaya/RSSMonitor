<?php slot('sf_admin.current_header') ?>
<th class="sf_admin_text sf_admin_list_th_song_name">
  <?php if ('song_name' == $sort[0]): ?>
    <?php echo link_to(__('Song name', array(), 'messages'), '@scan_song', array('query_string' => 'sort=song_name&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'))) ?>
    <?php echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php echo link_to(__('Song name', array(), 'messages'), '@scan_song', array('query_string' => 'sort=song_name&sort_type=asc')) ?>
  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="sf_admin_text sf_admin_list_th_artist_name">
  <?php if ('artist_name' == $sort[0]): ?>
    <?php echo link_to(__('Artist name', array(), 'messages'), '@scan_song', array('query_string' => 'sort=artist_name&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'))) ?>
    <?php echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php echo link_to(__('Artist name', array(), 'messages'), '@scan_song', array('query_string' => 'sort=artist_name&sort_type=asc')) ?>
  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="sf_admin_text sf_admin_list_th_already_exists">
  <?php echo __('Already exists', array(), 'messages') ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="sf_admin_boolean sf_admin_list_th_added_to_system">
  <?php if ('added_to_system' == $sort[0]): ?>
    <?php echo link_to(__('Added to system', array(), 'messages'), '@scan_song', array('query_string' => 'sort=added_to_system&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'))) ?>
    <?php echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php echo link_to(__('Added to system', array(), 'messages'), '@scan_song', array('query_string' => 'sort=added_to_system&sort_type=asc')) ?>
  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="sf_admin_text sf_admin_list_th_date_added">
  <?php echo __('Date added', array(), 'messages') ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?>