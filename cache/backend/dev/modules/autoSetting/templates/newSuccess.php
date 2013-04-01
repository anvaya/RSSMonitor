<?php use_helper('I18N', 'Date') ?>
<?php include_partial('setting/assets') ?>

<div id="sf_admin_container">
  <h1><?php echo __('New Setting', array(), 'messages') ?></h1>

  <?php include_partial('setting/flashes') ?>

  <div id="sf_admin_header">
    <?php include_partial('setting/form_header', array('setting' => $setting, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>

  <div id="sf_admin_content">
    <?php include_partial('setting/form', array('setting' => $setting, 'form' => $form, 'configuration' => $configuration, 'helper' => $helper)) ?>
  </div>

  <div id="sf_admin_footer">
    <?php include_partial('setting/form_footer', array('setting' => $setting, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>
</div>
