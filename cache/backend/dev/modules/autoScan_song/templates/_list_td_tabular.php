<td class="sf_admin_text sf_admin_list_td_song_name">
  <?php echo $scan_song->getSongName() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_artist_name">
  <?php echo $scan_song->getArtistName() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_already_exists">
  <?php echo $scan_song->getAlreadyExists() ?>
</td>
<td class="sf_admin_boolean sf_admin_list_td_added_to_system">
  <?php echo get_partial('scan_song/list_field_boolean', array('value' => $scan_song->getAddedToSystem())) ?>
</td>
<td class="sf_admin_text sf_admin_list_td_date_added">
  <?php echo $scan_song->getDateAdded() ?>
</td>
