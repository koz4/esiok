<?php

class Application_Form_Zestaw extends Zend_Form
{

    public function init()
    {
        
            $system = $this->createElement('text', 'system');
    $system->setLabel('System operacyjny:')
            ->setRequired(TRUE)
            ->setAttrib('size', 50)
            ->addFilters(array(
                new Zend_Filter_StringTrim(),
                new Zend_Filter_StripNewlines(),
                new Zend_Filter_StripTags()
            ))
            ->addValidators(array(
                new Zend_Validate_NotEmpty(),
                new Zend_Validate_StringLength(5, 100)
            ));
               $numer = $this->createElement('text', 'numer');
    $numer->setLabel('Numer komputera:')
            ->setRequired(TRUE)
            ->setAttrib('size', 50)
            ->addFilters(array(
                new Zend_Filter_StringTrim(),
                new Zend_Filter_StripNewlines(),
                new Zend_Filter_StripTags()
            ))
            ->addValidators(array(
                new Zend_Validate_NotEmpty(),
                new Zend_Validate_StringLength(5, 100)
            ));
               $user = $this->createElement('text', 'user');
    $user->setLabel('Nazwa u¿ytkownika:')
            ->setRequired(TRUE)
            ->setAttrib('size', 50)
            ->addFilters(array(
                new Zend_Filter_StringTrim(),
                new Zend_Filter_StripNewlines(),
                new Zend_Filter_StripTags()
            ))
            ->addValidators(array(
                new Zend_Validate_NotEmpty(),
                new Zend_Validate_StringLength(5, 100)
            ));
               $data = $this->createElement('text', 'data');
    $data->setLabel('Data inwentaryzacji:')
            ->setRequired(TRUE)
            ->setAttrib('size', 50)
            ->addFilters(array(
                new Zend_Filter_StringTrim(),
                new Zend_Filter_StripNewlines(),
                new Zend_Filter_StripTags()
            ))
            ->addValidators(array(
                new Zend_Validate_NotEmpty(),
                new Zend_Validate_StringLength(5, 100)
            ));
               $procesor = $this->createElement('text', 'procesor');
    $procesor->setLabel('Procesor:')
            ->setRequired(TRUE)
            ->setAttrib('size', 50)
            ->addFilters(array(
                new Zend_Filter_StringTrim(),
                new Zend_Filter_StripNewlines(),
                new Zend_Filter_StripTags()
            ))
            ->addValidators(array(
                new Zend_Validate_NotEmpty(),
                new Zend_Validate_StringLength(5, 100)
            ));
               $plyta = $this->createElement('text', 'plyta');
    $plyta->setLabel('P³yta g³ówna:')
            ->setRequired(TRUE)
            ->setAttrib('size', 50)
            ->addFilters(array(
                new Zend_Filter_StringTrim(),
                new Zend_Filter_StripNewlines(),
                new Zend_Filter_StripTags()
            ))
            ->addValidators(array(
                new Zend_Validate_NotEmpty(),
                new Zend_Validate_StringLength(5, 100)
            ));
               $chipset = $this->createElement('text', 'chipset');
    $chipset->setLabel('Chipset:')
            ->setRequired(TRUE)
            ->setAttrib('size', 50)
            ->addFilters(array(
                new Zend_Filter_StringTrim(),
                new Zend_Filter_StripNewlines(),
                new Zend_Filter_StripTags()
            ))
            ->addValidators(array(
                new Zend_Validate_NotEmpty(),
                new Zend_Validate_StringLength(5, 100)
            ));
               $pamiec = $this->createElement('text', 'pamiec');
    $pamiec->setLabel('Pamiêæ:')
            ->setRequired(TRUE)
            ->setAttrib('size', 50)
            ->addFilters(array(
                new Zend_Filter_StringTrim(),
                new Zend_Filter_StripNewlines(),
                new Zend_Filter_StripTags()
            ))
            ->addValidators(array(
                new Zend_Validate_NotEmpty(),
                new Zend_Validate_StringLength(5, 100)
            ));
               $grafika = $this->createElement('text', 'grafika');
    $grafika->setLabel('Karta graficzna:')
            ->setRequired(TRUE)
            ->setAttrib('size', 50)
            ->addFilters(array(
                new Zend_Filter_StringTrim(),
                new Zend_Filter_StripNewlines(),
                new Zend_Filter_StripTags()
            ))
            ->addValidators(array(
                new Zend_Validate_NotEmpty(),
                new Zend_Validate_StringLength(5, 100)
            ));
               $dzwiek = $this->createElement('text', 'dzwiek');
    $dzwiek->setLabel('Karta dzwiêkowa:')
            ->setRequired(TRUE)
            ->setAttrib('size', 50)
            ->addFilters(array(
                new Zend_Filter_StringTrim(),
                new Zend_Filter_StripNewlines(),
                new Zend_Filter_StripTags()
            ))
            ->addValidators(array(
                new Zend_Validate_NotEmpty(),
                new Zend_Validate_StringLength(5, 100)
            ));
               $hdd = $this->createElement('text', 'hdd');
    $hdd->setLabel('Dysk Twardy:')
            ->setRequired(TRUE)
            ->setAttrib('size', 50)
            ->addFilters(array(
                new Zend_Filter_StringTrim(),
                new Zend_Filter_StripNewlines(),
                new Zend_Filter_StripTags()
            ))
            ->addValidators(array(
                new Zend_Validate_NotEmpty(),
                new Zend_Validate_StringLength(5, 100)
            ));
               $odd = $this->createElement('text', 'odd');
    $odd->setLabel('Napêd optyczny:')
            ->setRequired(TRUE)
            ->setAttrib('size', 50)
            ->addFilters(array(
                new Zend_Filter_StringTrim(),
                new Zend_Filter_StripNewlines(),
                new Zend_Filter_StripTags()
            ))
            ->addValidators(array(
                new Zend_Validate_NotEmpty(),
                new Zend_Validate_StringLength(5, 100)
            ));
               $rozmiar = $this->createElement('text', 'rozmiar');
    $rozmiar->setLabel('Rozmiar ca³kowity:')
            ->setRequired(TRUE)
            ->setAttrib('size', 50)
            ->addFilters(array(
                new Zend_Filter_StringTrim(),
                new Zend_Filter_StripNewlines(),
                new Zend_Filter_StripTags()
            ))
            ->addValidators(array(
                new Zend_Validate_NotEmpty(),
                new Zend_Validate_StringLength(5, 100)
            ));
               $ip = $this->createElement('text', 'ip');
    $ip->setLabel('Adres IP:')
            ->setRequired(TRUE)
            ->setAttrib('size', 50)
            ->addFilters(array(
                new Zend_Filter_StringTrim(),
                new Zend_Filter_StripNewlines(),
                new Zend_Filter_StripTags()
            ))
            ->addValidators(array(
                new Zend_Validate_NotEmpty(),
                new Zend_Validate_StringLength(5, 100)
            ));
               $mac = $this->createElement('text', 'mac');
    $mac->setLabel('Adres MAC:')
            ->setRequired(TRUE)
            ->setAttrib('size', 50)
            ->addFilters(array(
                new Zend_Filter_StringTrim(),
                new Zend_Filter_StripNewlines(),
                new Zend_Filter_StripTags()
            ))
            ->addValidators(array(
                new Zend_Validate_NotEmpty(),
                new Zend_Validate_StringLength(5, 100)
            ));
               $nic = $this->createElement('text', 'nic');
    $nic->setLabel('Karta sieciowa:')
            ->setRequired(TRUE)
            ->setAttrib('size', 50)
            ->addFilters(array(
                new Zend_Filter_StringTrim(),
                new Zend_Filter_StripNewlines(),
                new Zend_Filter_StripTags()
            ))
            ->addValidators(array(
                new Zend_Validate_NotEmpty(),
                new Zend_Validate_StringLength(5, 100)
            ));
                   $modem = $this->createElement('text', 'modem');
    $modem->setLabel('Modem:')
            ->setRequired(TRUE)
            ->setAttrib('size', 50)
            ->addFilters(array(
                new Zend_Filter_StringTrim(),
                new Zend_Filter_StripNewlines(),
                new Zend_Filter_StripTags()
            ))
            ->addValidators(array(
                new Zend_Validate_NotEmpty(),
                new Zend_Validate_StringLength(5, 100)
            ));
               $drukarka = $this->createElement('text', 'drukarka');
    $drukarka->setLabel('Drukarka:')
            ->setRequired(TRUE)
            ->setAttrib('size', 50)
            ->addFilters(array(
                new Zend_Filter_StringTrim(),
                new Zend_Filter_StripNewlines(),
                new Zend_Filter_StripTags()
            ))
            ->addValidators(array(
                new Zend_Validate_NotEmpty(),
                new Zend_Validate_StringLength(5, 100)
            ));
       $submit = new Zend_Form_Element_Submit('submit');
    
    $this->addElements(array(
        $system,
        $numer,
        $user,
        $data,
        $procesor,
        $plyta,
        $chipset,
        $pamiec,
        $grafika,
        $dzwiek,
        $grafika,
        $dzwiek,
        $hdd,
        $odd,
        $rozmiar,
        $ip,
        $mac,
        $nic,
        $modem,
        $drukarka,
        array('submit', 'submit', array('label' => 'Zapisz')),
    ));
    
    }


}
