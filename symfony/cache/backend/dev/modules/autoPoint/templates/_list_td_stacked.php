<td colspan="8">
  <?php echo __('%%id%% - %%name%% - %%placed_date%% - %%longitude%% - %%latitude%% - %%altitude%% - %%local_name%% - %%line%%', array('%%id%%' => link_to($point->getId(), 'point_edit', $point), '%%name%%' => $point->getName(), '%%placed_date%%' => false !== strtotime($point->getPlacedDate()) ? format_date($point->getPlacedDate(), "f") : '&nbsp;', '%%longitude%%' => $point->getLongitude(), '%%latitude%%' => $point->getLatitude(), '%%altitude%%' => $point->getAltitude(), '%%local_name%%' => $point->getLocalName(), '%%line%%' => $point->getLine()), 'messages') ?>
</td>
