<?php

class ImportController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction()
    {
         
      $form = new Application_Form_Plik();
    $form->setAction('index.php/import/dodaj') // tutaj wpisujemy adres URL strony, gdzie ma zostaæ wykonany formularz
           ->setMethod('post');
  $this->view->form = $form;

    }
    
       public function createformAction()
    {
        $this->view->form = new Application_Form_Plik();
        $url = $this->view->url(array('action' => 'create'));
        $this->view->form->setAction($url);
    }
    
    public function createAction()
    {
        if ($this->getRequest()->isPost()) {
            $form = new Application_Form_Plik();
            if ($form->isValid($this->getRequest()->getPost())) {
                $dane = $form->getValues();
                $Plik = new Application_Model_DbTable_Plik();
              
                $Plik->insert($dane);
                $fld = realpath(APPLICATION_PATH . '/../public/');
              

                
                
                $Raport= $dane['nazwapliku'];
                
                
                $xml = file_get_contents($Raport);

        // // <-- looks good

        $dom = new Zend_Dom_Query();
        $dom->setDocumentXml($xml);

//var_dump($dom); // <-- looks good
//$listings = $dom->query('Item');

        $tytul = $dom->queryXpath('/Report/Page/Group/Item/Title');
        $wartosc = $dom->queryXpath('/Report/Page/Group/Item/Value');


        for ($index = 0; $index < count($tytul); $index++) {
            
        }





//var_dump($tytul->getCssQuery()); // <-- looks good
        // <-- 0  not correct, should be 10
//$count = count($wartosc);
//echo $tytul[1] .'<br /> ';
//        foreach ($tytul as $nazwa) {
//           $nazwa->nodeValue;
//            if($nazwa->nodeValue == 'Karta sieciowa'){
//               // echo $nazwa->nodeValue . '<br />';
//                //echo $nazwa->next()->nodeValue;
//                //echo $nazwa->current();
//                
//            }}


        $szukaj = array(
            'System operacyjny',
            'Nazwa komputera',
            'Nazwa u¿ytkownika',
            'Data / Czas',
            'Typ procesora',
            'Nazwa p³yty g³ównej',
            'Mikrouk³ad p³yty g³ównej',
            'Pamiêæ fizyczna',
            'Karta wideo',
            'Karta d¼wiêkowa',
            'Dysk fizyczny',
            'Napêd dysków optycznych',
            'Rozmiar ca³kowity',
            'Podstawowy adres IP',
            'Podstawowy adres karty (MAC)',
            'Karta sieciowa',
            'Modem',
            'Drukarka'
        );

        $Praca = new Application_Model_DbTable_Praca();

        foreach ($tytul as $nazwa) {
            $nodetyt[] = $nazwa;
        }

        foreach ($wartosc as $war) {
            $nodearr[] = $war;
        }
        for ($i = 0; $i < count($szukaj); $i++) {
            for ($index = 0; $index < count($tytul); $index++) {
                
                    if($nodearr[$index]->nodeValue == NULL ){
                        $nodearr[$index]->nodeValue = 'Brak danych';
                    }
                if($nodetyt[$index]->nodeValue == NULL ){
                        $nodetyt[$index]->nodeValue = 'Brak danych';
                    }
                
                if ($nodetyt[$index]->nodeValue == $szukaj[$i]) {
                   
                    
                    echo $nodetyt[$index]->nodeValue . ' ' . $nodearr[$index]->nodeValue . '<br />';
                 
                    
                   $sprzet[$i] = $nodetyt[$index]->nodeValue;
                    $opis[$i] = $nodearr[$index]->nodeValue;
                    
                }
            
            
                
            }
        }
        
        for ($i = 0; $i < count($szukaj); $i++) {
             $dane = array(
            'System operacyjny' => $opis[0],
            'Nazwa komputera' => $opis[1],
            'Nazwa uzytkownika' => $opis[2],
            'Data / Czas' => $opis[3],
            'Typ procesora' => $opis[4],
            'Nazwa plyty glownej' => $opis[5],
            'Mikrouklad plyty glownej' => $opis[6],
            'Pamiec fizyczna' => $opis[7],
            'Karta wideo' => $opis[8],
            'Karta dzwiekowa' => $opis[9],
            'Dysk fizyczny' => $opis[10],
            'Naped dyskow optycznych' => $opis[11],
            'Rozmiar calkowity' => $opis[12],
            'Podstawowy adres IP' => $opis[13],
            'Podstawowy adres karty (MAC)' => $opis[14],
            'Karta sieciowa' => $opis[15],
            'Modem' => $opis[16],
            'Drukarka' => $opis[17]
                );   
 }

if($this->$form->getElement($wczytaj)== 1){
    echo 'Przycisniêty klawisz';
}
 
//            print_r($dane);
 
//if($this->getRequest()->isPost('zapisz')){
//$Praca->insert($dane);
//}
//            
//           
//              
//                    foreach ($wartosc as $tmp) {
//                  $data = array (
//                  'Title' =>$tmp->Title    
//                  );                 
//            }     
//       echo $nazwa->nodeValue . '<br />';
//       echo $war->nodeValue . '<br />';
//       for ($index = 0; $index < count($tytul); $index++) {
//           
//               echo $tytul->nodeValue;
//           
//          
//       }

     
     
        
        
        
        
        
        
        
        
        
//        if ($this->getRequest()->isPost()) {  
//          
//      if ($form->isValid($this->getRequest()->getPost())) {  
//         $data = $this->getRequest()->getPost();

       
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
//      
//            $DbTable = new Application_Model_DbTable_System();  
//          $DbTable->insert($data); 
//            
//           // return $this->_helper->redirector(  
//             //   'index', 'zestaw', null, array('id' => $id)  
//           // );  
//       }  
//       
//        $this->view->form = $form;  
//    } else {  
//        throw new Zend_Controller_Action_Exception('B³êdny adres!', 404);  
//    }  
                
                
                
                
                
                
                
                //return $this->_helper->redirector('dodaj');
            }
            $this->view->form = $form;
        } else {
            throw new Exception('B³êdny adres!', 404);
        }
    }
    
    public function dodajAction()
    {
         if ($this->getRequest()->isPost()){ 
            $form = new Application_Form_Plik();
            if ($form->isValid($this->getRequest()->getPost())){ 
                $dane = $form->getValues('nazwapliku');
                echo $dane;
            }}
        
        
         
    
     
         $Raport = 'Raport.xml';
        $xml = file_get_contents($Raport);

        // // <-- looks good

        $dom = new Zend_Dom_Query();
        $dom->setDocumentXml($xml);

//var_dump($dom); // <-- looks good
//$listings = $dom->query('Item');

        $tytul = $dom->queryXpath('/Report/Page/Group/Item/Title');
        $wartosc = $dom->queryXpath('/Report/Page/Group/Item/Value');


        for ($index = 0; $index < count($tytul); $index++) {
            
        }





//var_dump($tytul->getCssQuery()); // <-- looks good
        // <-- 0  not correct, should be 10
//$count = count($wartosc);
//echo $tytul[1] .'<br /> ';
//        foreach ($tytul as $nazwa) {
//           $nazwa->nodeValue;
//            if($nazwa->nodeValue == 'Karta sieciowa'){
//               // echo $nazwa->nodeValue . '<br />';
//                //echo $nazwa->next()->nodeValue;
//                //echo $nazwa->current();
//                
//            }}


        $szukaj = array(
            'System operacyjny',
            'Nazwa komputera',
            'Nazwa u¿ytkownika',
            'Data / Czas',
            'Typ procesora',
            'Nazwa p³yty g³ównej',
            'Mikrouk³ad p³yty g³ównej',
            'Pamiêæ fizyczna',
            'Karta wideo',
            'Karta d¼wiêkowa',
            'Dysk fizyczny',
            'Napêd dysków optycznych',
            'Rozmiar ca³kowity',
            'Podstawowy adres IP',
            'Podstawowy adres karty (MAC)',
            'Karta sieciowa',
            'Modem',
            'Drukarka'
        );

        $Praca = new Application_Model_DbTable_Praca();

        foreach ($tytul as $nazwa) {
            $nodetyt[] = $nazwa;
        }

        foreach ($wartosc as $war) {
            $nodearr[] = $war;
        }
        for ($i = 0; $i < count($szukaj); $i++) {
            for ($index = 0; $index < count($tytul); $index++) {
                
                    if($nodearr[$index]->nodeValue == NULL ){
                        $nodearr[$index]->nodeValue = 'Brak danych';
                    }
                if($nodetyt[$index]->nodeValue == NULL ){
                        $nodetyt[$index]->nodeValue = 'Brak danych';
                    }
                
                if ($nodetyt[$index]->nodeValue == $szukaj[$i]) {
                   
                    
                    echo $nodetyt[$index]->nodeValue . ' ' . $nodearr[$index]->nodeValue . '<br />';
                 
                    
                   $sprzet[$i] = $nodetyt[$index]->nodeValue;
                    $opis[$i] = $nodearr[$index]->nodeValue;
                    
                }
            
            
                
            }
        }
        
        for ($i = 0; $i < count($szukaj); $i++) {
             $dane = array(
            'System operacyjny' => $opis[0],
            'Nazwa komputera' => $opis[1],
            'Nazwa uzytkownika' => $opis[2],
            'Data / Czas' => $opis[3],
            'Typ procesora' => $opis[4],
            'Nazwa plyty glownej' => $opis[5],
            'Mikrouklad plyty glownej' => $opis[6],
            'Pamiec fizyczna' => $opis[7],
            'Karta wideo' => $opis[8],
            'Karta dzwiekowa' => $opis[9],
            'Dysk fizyczny' => $opis[10],
            'Naped dyskow optycznych' => $opis[11],
            'Rozmiar calkowity' => $opis[12],
            'Podstawowy adres IP' => $opis[13],
            'Podstawowy adres karty (MAC)' => $opis[14],
            'Karta sieciowa' => $opis[15],
            'Modem' => $opis[16],
            'Drukarka' => $opis[17]
                );   
 }


 
//            print_r($dane);
//$Praca->insert($dane);
//            
//           
//              
//                    foreach ($wartosc as $tmp) {
//                  $data = array (
//                  'Title' =>$tmp->Title    
//                  );                 
//            }     
//       echo $nazwa->nodeValue . '<br />';
//       echo $war->nodeValue . '<br />';
//       for ($index = 0; $index < count($tytul); $index++) {
//           
//               echo $tytul->nodeValue;
//           
//          
//       }

     
     
        
        
        
        
        
        
        
        
        
//        if ($this->getRequest()->isPost()) {  
//          
//      if ($form->isValid($this->getRequest()->getPost())) {  
//         $data = $this->getRequest()->getPost();

       
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
//      
//            $DbTable = new Application_Model_DbTable_System();  
//          $DbTable->insert($data); 
//            
//           // return $this->_helper->redirector(  
//             //   'index', 'zestaw', null, array('id' => $id)  
//           // );  
//       }  
//       
//        $this->view->form = $form;  
//    } else {  
//        throw new Zend_Controller_Action_Exception('B³êdny adres!', 404);  
//    }  
    }


}

