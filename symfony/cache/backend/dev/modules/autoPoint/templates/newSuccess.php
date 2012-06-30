<?php use_helper('I18N', 'Date') ?>
<?php include_partial('point/assets') ?>

<div id="sf_admin_container">
  <h1><?php echo __('New Point', array(), 'messages') ?></h1>

  <?php include_partial('point/flashes') ?>

  <div id="sf_admin_header">
    <?php include_partial('point/form_header', array('point' => $point, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>

  <div id="sf_admin_content">
    <?php include_partial('point/form', array('point' => $point, 'form' => $form, 'configuration' => $configuration, 'helper' => $helper)) ?>
  </div>

  <div id="sf_admin_footer">
    <?php include_partial('point/form_footer', array('point' => $point, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>
</div>
