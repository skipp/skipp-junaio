<td colspan="7">
  <?php echo __('%%name%% - %%placed_date%% - %%longitude%% - %%latitude%% - %%altitude%% - %%local_name%% - %%line%%', array('%%name%%' => $point->getName(), '%%placed_date%%' => false !== strtotime($point->getPlacedDate()) ? format_date($point->getPlacedDate(), "f") : '&nbsp;', '%%longitude%%' => $point->getLongitude(), '%%latitude%%' => $point->getLatitude(), '%%altitude%%' => $point->getAltitude(), '%%local_name%%' => $point->getLocalName(), '%%line%%' => $point->getLine()), 'messages') ?>
</td>
