<?php slot('sf_admin.current_header') ?>
<th class="sf_admin_text sf_admin_list_th_setting_key">
  <?php if ('setting_key' == $sort[0]): ?>
    <?php echo link_to(__('Key', array(), 'messages'), '@setting', array('query_string' => 'sort=setting_key&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'))) ?>
    <?php echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php echo link_to(__('Key', array(), 'messages'), '@setting', array('query_string' => 'sort=setting_key&sort_type=asc')) ?>
  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="sf_admin_text sf_admin_list_th_value1">
  <?php if ('value1' == $sort[0]): ?>
    <?php echo link_to(__('Value1', array(), 'messages'), '@setting', array('query_string' => 'sort=value1&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'))) ?>
    <?php echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php echo link_to(__('Value1', array(), 'messages'), '@setting', array('query_string' => 'sort=value1&sort_type=asc')) ?>
  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="sf_admin_text sf_admin_list_th_value2">
  <?php if ('value2' == $sort[0]): ?>
    <?php echo link_to(__('Value2', array(), 'messages'), '@setting', array('query_string' => 'sort=value2&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'))) ?>
    <?php echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php echo link_to(__('Value2', array(), 'messages'), '@setting', array('query_string' => 'sort=value2&sort_type=asc')) ?>
  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?>