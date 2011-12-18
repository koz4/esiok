<?php

class Application_Form_Plik extends Zend_Form
{

    public function init()
    {
        $this->setMethod('post');

        $element = new Zend_Form_Element_File('nazwapliku', array('required' => true));
        $element
            ->setLabel('Dodaj zdjecie:')
            ->setDestination(realpath(APPLICATION_PATH . '/../public/'))
            ->addValidator('NotEmpty', true)
            ->addValidator('Count', true, 1)
            ->addValidator('Size', true, 1024000)
            ->addValidator('NotExists', realpath(APPLICATION_PATH . '/../public/'))
            ->addValidator('Extension', false, 'xml');
        $this->addElement($element, 'nazwapliku');

        $this->nazwapliku->getValidator('NotExists')->setMessages(array(
            Zend_Validate_File_NotExists::DOES_EXIST => "Plik '%value%' ju¿ istnieje!",
        ));
        $this->nazwapliku->getValidator('Upload')->setMessages(array(
            Zend_Validate_File_Upload::NO_FILE => "Nazwa pliku nie mo¿e byæ pusta!",
        ));
        $this->nazwapliku->getValidator('Size')->setMessages(array(
            Zend_Validate_File_Size::TOO_BIG => "Maksymalny rozmiar pliku to '%max%'. Przes³any plik '%value%' ma rozmiar '%size%'.",
        ));

        $this->addElement('submit', 'submit', array(
            'label' => 'Zapisz do bazy',
        ));


 
 $this->addElement (new Zend_Form_Element_Button('wczytaj', array(
         'label' => 'Wczytaj',
          'class' => 'ui-button ui-button-text-only ui-widget ui-state-default ui-corner-all',
     
     ))
 );
 
$this->addDisplayGroup(array('submit', 'wczytaj'), 'submitButtons');
 }

}