<?php

/**
 * Description of sfValidatorFormMultiCondition
 *
 * @author Mrugendra Bhure
 */
class sfValidatorFormBulkEdit extends sfValidatorBase
{
    public function configure($options = array(), $messages = array()) 
    {
        $this->addRequiredOption('value_validator');
        $this->addOption('field_type','text');
        parent::configure($options, $messages);
    }      
        
    public function doClean($value)
    {
        $value_validator = $this->getOption('value_validator');
        
        /*
        if(isset($value['operator']))
        {
            
        }*/
        
        if(isset($value['value']))
        {            
            $value_return = $value_validator->clean($value['value']);
        }
        
        return array("operator"=>$value['operator'], 'value'=>$value_return );
    }
    
   
}

?>