<?php

class IndexController extends Zend_Controller_Action {

    public function init() {
        /* Initialize action controller here */
    }

    public function indexAction() {
        
       
        
        $Licencje = new Application_Model_DbTable_Licencje();
        $Programy = new Application_Model_DbTable_Programy();

//        $dane_l = array(
//            'nazwa' => 'freeware'
//        );
//        $licencje_id = $Licencje->createRow($dane_l)->save();
//
//        $dane_p = array(
//            'nazwa' => 'Asd',
//            'licencje_id' => $licencje_id
//        );
//        $Programy->createRow($dane_p)->save();
        
        
//            $obj = $Licencje->find(35)->current();
//    $program = $obj->findDependentRowset('Application_Model_DbTable_Programy');  
//    $program->toArray();
//    foreach ($program as $programy) {  
//        echo $programy->nazwa;
//    }  
    
       // $Panstwo = new Application_Model_DbTable_Panstwo();  
 
     echo '<table><td>L.p.</td><td>Program</td><td>Licencja</td>';
    
     for ($i = 38,$u=1; $i <46 ; $u++,$i++) {
         
    $program = $Programy->find($i)->current();  
    $licencje = $program->findParentRow('Application_Model_DbTable_Licencje');
    echo '<tr><td>'. $u .'</td><td>' . $program->nazwa .' '.'</td><td>' . $licencje->nazwa;  
    echo '</td></tr>';
         }
      
      echo '</table>';
      $sztuk=$u-1;
   echo 'Razem sztuk: '.$sztuk;
    
//public function findDependentRowset(
//$dependentTable,
// $ruleKey = null,
// Zend_Db_Table_Select $select=null
//
//)
   
     
    }

}

