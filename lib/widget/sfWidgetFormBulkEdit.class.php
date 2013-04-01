<?php
/**
 * Description of sfWidgetFormMultiCondition
 *
 * @author Mrugendra Bhure
 */
class sfWidgetFormBulkEdit extends sfWidgetForm
{
    const CHANGE  = "CH";
    const NO_CHANGE = "NCH";
    const SET_BLANK     = "B";
        
    public function configure($options = array(), $attributes = array()) 
    {        
        $this->addRequiredOption('value_widget');
    }
    
    public function render($name, $value = null, $attributes = array(), $errors = array()) 
    {
        $master_widget = $this->getOption('value_widget');
        /* @var $master_widget sfWidgetForm */        
        
        $choices = array(
            self::NO_CHANGE=>"No Change",
            self::CHANGE=>"Change To",
            self::SET_BLANK=>"Set Blank",            
        );        
        
        $choice_widget = new sfWidgetFormChoice(array("choices"=>$choices));
        
        $operator_value = $field_value = null;
        
        if(isset($value['operator']))
            $operator_value = $value['operator'];
        if(isset($value['value']))
            $field_value = $value['value'];
        
        $operator_id = str_replace("]","_",str_replace("[", "_", $name))."operator";
        
        $attributes['onChange']="$('#".$operator_id."').val('".self::CHANGE."');";
            
        $operator_render = $choice_widget->render($name."[operator]", $operator_value , array(), $errors);
        $value_render  = $master_widget->render($name."[value]", $field_value , $attributes, $errors);        
        
        $separator = '&nbsp;';
        return $operator_render.$separator.$value_render;
    }       
    
    public function needsMultipartForm() 
    {
        return $this->getOption('value_widget')->needsMultipartForm();
    }
}

?>