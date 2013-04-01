<td class="sf_admin_text sf_admin_list_td_setting_key">
  <?php echo link_to($setting->getSettingKey(), 'setting_edit', $setting) ?>
</td>
<td class="sf_admin_text sf_admin_list_td_value1">
  <?php echo $setting->getValue1() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_value2">
  <?php echo $setting->getValue2() ?>
</td>
