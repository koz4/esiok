<?php

class ListaController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction()
    {
        // action body
    }

    public function systemyAction()
    {
        $lista = new Application_Model_DbTable_System();
        $cos = $lista->fetchAll();
        $this->view->lista = $cos;
 // $cos->toArray();
  //echo $cos[1];
        $pdf = new Zend_Pdf();
$pdf->pages[] = new Zend_Pdf_Page(Zend_Pdf_Page::SIZE_A4);
        $filename = 'Lista.pdf';
        $pdf->save($filename);
        
  
    }


}



