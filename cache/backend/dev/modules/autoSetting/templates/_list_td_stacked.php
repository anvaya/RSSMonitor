<td colspan="3">
  <?php echo __('%%setting_key%% - %%value1%% - %%value2%%', array('%%setting_key%%' => link_to($setting->getSettingKey(), 'setting_edit', $setting), '%%value1%%' => $setting->getValue1(), '%%value2%%' => $setting->getValue2()), 'messages') ?>
</td>
