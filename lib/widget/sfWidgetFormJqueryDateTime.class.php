<?php

/**
 * A widget of datetime.
 *
 * @package     lib
 * @subpackage  widget
 * @author      Keval
 * @version     SVN: $Id: sfWidgetFormDoctrineChoiceGrouped.class.php 16265 2009-03-12 15:23:41Z Kris.Wallsmith $
 */
class sfWidgetFormJqueryDateTime extends sfWidgetFormDateTime
{
  /**
   * Configures the current widget.
   *
   * Available options:
   *
   *  * image:       The image path to represent the widget (false by default)
   *  * config:      A JavaScript array that configures the JQuery date widget
   *  * culture:     The user culture
   *  * date_widget: The date widget instance to use as a "base" class
   *
   * @param array $options     An array of options
   * @param array $attributes  An array of default HTML attributes
   *
   * @see sfWidgetForm
   */
  protected function configure($options = array(), $attributes = array())
  {
    $this->addOption('image', false);
    $this->addOption('config', '{}');
    $this->addOption('culture', '');
    $this->addOption('date_widget', new sfWidgetFormDateTime());

    parent::configure($options, $attributes);

    if ('en' == $this->getOption('culture'))
    {
      $this->setOption('culture', 'en');
    }
  }

  /**
   * @param  string $name        The element name
   * @param  string $value       The date displayed in this widget
   * @param  array  $attributes  An array of HTML attributes to be merged with the default HTML attributes
   * @param  array  $errors      An array of errors for the field
   *
   * @return string An HTML tag string
   *
   * @see sfWidgetForm
   */
  public function render($name, $value = null, $attributes = array(), $errors = array())
  {
    $prefix = str_replace('-', '_', $this->generateId($name));

    $image = '';
    if (false !== $this->getOption('image'))
    {
      $image = sprintf(', buttonImage: "%s", buttonImageOnly: true', $this->getOption('image'));
    }

    if ($this->getOption('date_widget') instanceof sfWidgetFormDateTime)
    {
      $years = $this->getOption('date_widget')->getDateWidget()->getOption('years');
    }
    else
    {
      $years = $this->getOption('date_widget')->getOption('years');
    }

    return $this->getOption('date_widget')->render($name, $value, $attributes, $errors).
           $this->renderTag('input', array('type' => 'hidden', 'size' => 10, 'id' => $id = $this->generateId($name).'_jquery_control', 'disabled' => 'disabled')).
           $this->renderContentTag('button', '...',array('class'=>'ui-datepicker-trigger', 'id'=>'button_'.$id,'onclick'=>'javascript:$("#'.$id.'").trigger("focus");return false;')).
           sprintf(<<<EOF
<script type="text/javascript">
  function wfd_%s_read_linked()
  {
    jQuery("#%s").val(jQuery("#%s").val() + "-" + jQuery("#%s").val() + "-" + jQuery("#%s").val() +" "+ jQuery("#%s").val()+":"+jQuery("#%s").val());

    return {};
  }

  function wfd_%s_update_linked(date)
  {
    jQuery("#%s").val(parseInt(date.substring(0, 4), 10));
    jQuery("#%s").val(parseInt(date.substring(5, 7), 10));
    jQuery("#%s").val(parseInt(date.substring(8,10), 10));
    jQuery("#%s").val(parseInt(date.substring(11,13), 10));
    jQuery("#%s").val(parseInt(date.substring(14,16), 10));

    wfd_%s_check_linked_days();
  }

  function wfd_%s_check_linked_days()
  {
    var daysInMonth = 32 - new Date(jQuery("#%s").val(), jQuery("#%s").val() - 1, 32).getDate();

    jQuery("#%s option").attr("disabled", "");
    jQuery("#%s option:gt(" + (%s) +")").attr("disabled", "disabled");

    if (jQuery("#%s").val() > daysInMonth)
    {
      jQuery("#%s").val(daysInMonth);
    }
  }

  jQuery(document).ready(function() {
    jQuery("#%s").datetimepicker(jQuery.extend({}, {
      MinDate:    new Date(%s, 1 - 1, 1),
      MaxDate:    new Date(%s, 12 - 1, 31),
      beforeShow: wfd_%s_read_linked,
      onSelect:   wfd_%s_update_linked,
      ShowOn:     "button",
      %s
    }, jQuery.datepicker.regional["%s"], %s, {dateFormat: "yy-mm-dd"}));
    wfd_%s_check_linked_days();
  });

  jQuery("#%s, #%s, #%s, #%s, #%s").change(wfd_%s_check_linked_days);
</script>
EOF
      ,
      $prefix, $id,
      $this->generateId($name.'[year]'), $this->generateId($name.'[month]'), $this->generateId($name.'[day]'), $this->generateId($name.'[hour]'), $this->generateId($name.'[minute]'),
      $prefix,
      $this->generateId($name.'[year]'), $this->generateId($name.'[month]'), $this->generateId($name.'[day]'), $this->generateId($name.'[hour]'), $this->generateId($name.'[minute]'),
      $prefix, $prefix,
      $this->generateId($name.'[year]'), $this->generateId($name.'[month]'),
      $this->generateId($name.'[day]'), $this->generateId($name.'[day]'),
      ($this->getOption('date_widget')->getOption('can_be_empty') ? 'daysInMonth' : 'daysInMonth - 1'),
      $this->generateId($name.'[day]'), $this->generateId($name.'[day]'),
      $id,
      min($years), max($years),
      $prefix, $prefix, $image, $this->getOption('culture'), $this->getOption('config'),
      $prefix,
      $this->generateId($name.'[day]'), $this->generateId($name.'[month]'), $this->generateId($name.'[year]'), $this->generateId($name.'[hour]'), $this->generateId($name.'[minute]'),
      $prefix
    );
  }
  
}
