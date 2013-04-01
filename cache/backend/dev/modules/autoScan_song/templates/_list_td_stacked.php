<td colspan="5">
  <?php echo __('%%song_name%% - %%artist_name%% - %%already_exists%% - %%added_to_system%% - %%date_added%%', array('%%song_name%%' => $scan_song->getSongName(), '%%artist_name%%' => $scan_song->getArtistName(), '%%already_exists%%' => $scan_song->getAlreadyExists(), '%%added_to_system%%' => get_partial('scan_song/list_field_boolean', array('value' => $scan_song->getAddedToSystem())), '%%date_added%%' => $scan_song->getDateAdded()), 'messages') ?>
</td>
