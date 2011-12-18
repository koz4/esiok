<?php

class ZestawController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction()
    {
       
    $form = new Application_Form_Zestaw();
    $form->setAction('dodaj') // tutaj wpisujemy adres URL strony, gdzie ma zostaæ wykonany formularz
         ->setMethod('post');
    $this->view->form = $form;

        
        
    }
public function dodajAction()
    {
        $form = new Application_Form_Zestaw();
        if ($this->getRequest()->isPost()) {  
          
      if ($form->isValid($this->getRequest()->getPost())) {  
         $data = $form->getValues();
                

       
        //  $data = $form->getValue('system');
//              $numer = $form->getValues('numer');
//        $user = $form->getValues('user');
//        $data = $form->getValues('data');
//        $procesor = $form->getValues('procesor');
//         $plyta = $form->getValues('plyta');
//        $chipset = $form->getValues('chipset');
//        $pamiec = $form->getValues('pamiec');
//        $grafika = $form->getValues('grafika');
//        $dzwiek = $form->getValues('dzwiek');
//        $hdd = $form->getValues('hdd');
//        $odd = $form->getValues('odd');
//        $rozmiar = $form->getValues('rozmiar');
//        $ip = $form->getValues('ip');
//        $mac = $form->getValues('mac');
//        $nic = $form->getValues('nic');
//        $modem = $form->getValues('modem');
//        $drukarka = $form->getValues('drukarka');
           //  echo   print_r($data);
      
            $DbTable = new Application_Model_DbTable_System();  
          $DbTable->insert($data); 
            
           // return $this->_helper->redirector(  
             //   'index', 'zestaw', null, array('id' => $id)  
           // );  
       }  
       
        $this->view->form = $form;  
    } else {  
        throw new Zend_Controller_Action_Exception('B³êdny adres!', 404);  
    }  
    }



}





