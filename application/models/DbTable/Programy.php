<?php

class Application_Model_DbTable_Programy extends Zend_Db_Table_Abstract
{

    protected $_name = 'programy';
    protected $_referenceMap = array(
        'Licencje' => array(
            'columns' =>array('licencje_id'),
            'refTableClass' => 'Application_Model_DbTable_Licencje',
            'refTableColumns' =>array('licencje_id')
    
            
           
            
            )
        
        
        
        );
    
    

}

