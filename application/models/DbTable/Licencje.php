<?php

class Application_Model_DbTable_Licencje extends Zend_Db_Table_Abstract
{

    protected $_name = 'licencje';
    protected $_dependentTables = array('Application_Model_DbTable_Programy');


}

