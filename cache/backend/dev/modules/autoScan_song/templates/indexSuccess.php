<?php use_helper('I18N', 'Date') ?>
<?php include_partial('scan_song/assets') ?>

<div id="sf_admin_container">
  <h1><?php echo __('New Songs List', array(), 'messages') ?></h1>

  <?php include_partial('scan_song/flashes') ?>

  <div id="sf_admin_header">
    <?php include_partial('scan_song/list_header', array('pager' => $pager)) ?>
  </div>

  <div id="sf_admin_bar">
    <?php include_partial('scan_song/filters', array('form' => $filters, 'configuration' => $configuration)) ?>
  </div>

  <div id="sf_admin_content">
    <form action="<?php echo url_for('scan_song_collection', array('action' => 'batch')) ?>" method="post">
    <?php include_partial('scan_song/list', array('pager' => $pager, 'sort' => $sort, 'helper' => $helper)) ?>
    <ul class="sf_admin_actions">
      <?php include_partial('scan_song/list_batch_actions', array('helper' => $helper)) ?>
      <?php include_partial('scan_song/list_actions', array('helper' => $helper)) ?>
    </ul>
    </form>
  </div>

  <div id="sf_admin_footer">
    <?php include_partial('scan_song/list_footer', array('pager' => $pager)) ?>
  </div>
</div>
