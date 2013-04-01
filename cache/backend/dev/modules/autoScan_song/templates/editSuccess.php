<?php use_helper('I18N', 'Date') ?>
<?php include_partial('scan_song/assets') ?>

<div id="sf_admin_container">
  <h1><?php echo __('Edit Scan song', array(), 'messages') ?></h1>

  <?php include_partial('scan_song/flashes') ?>

  <div id="sf_admin_header">
    <?php include_partial('scan_song/form_header', array('scan_song' => $scan_song, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>

  <div id="sf_admin_content">
    <?php include_partial('scan_song/form', array('scan_song' => $scan_song, 'form' => $form, 'configuration' => $configuration, 'helper' => $helper)) ?>
  </div>

  <div id="sf_admin_footer">
    <?php include_partial('scan_song/form_footer', array('scan_song' => $scan_song, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>
</div>
