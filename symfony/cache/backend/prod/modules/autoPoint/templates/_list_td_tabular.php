<td class="sf_admin_text sf_admin_list_td_name">
  <?php echo $point->getName() ?>
</td>
<td class="sf_admin_date sf_admin_list_td_placed_date">
  <?php echo false !== strtotime($point->getPlacedDate()) ? format_date($point->getPlacedDate(), "f") : '&nbsp;' ?>
</td>
<td class="sf_admin_text sf_admin_list_td_longitude">
  <?php echo $point->getLongitude() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_latitude">
  <?php echo $point->getLatitude() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_altitude">
  <?php echo $point->getAltitude() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_local_name">
  <?php echo $point->getLocalName() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_line">
  <?php echo $point->getLine() ?>
</td>
