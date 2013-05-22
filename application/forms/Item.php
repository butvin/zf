<?php
class Application_Form_Item extends Zend_Form {
        public function init() {
        $this->setAction('/catalog/item/create')->setMethod('post');

        $id = new Zend_Form_Element_Hidden('id');
        $id->addFilter('Int');

        $name = new Zend_Form_Element_Text('SellerName');
        $name->setLabel('Name:')
            ->setOptions(array('size' => '35'))
            ->setRequired(true)
            ->addValidator('Regex', false, array(
                'pattern' => '/^[a-zA-Z]=[A-Za-z\'\-\.]{1.50}$/'
            ))
            ->addFilter('HtmlEntities')
            ->addFilter('StringTrim');

        $email = new Zend_Form_Element_Text('SellerEmail');
        $email->setLabel('Email address:');
        $email->setOptions(array('size'=>'50'))
            ->setRequired(true)
            ->addValidator('EmailAddress', false)
            ->addFilter('HtmlEntities')
            ->addFilter('StringTrim')
            ->addFilter('StringToLower');

        $tel = new Zend_Form_Element_Text('SellerTel');
        $tel->setLabel('Telefone number:');
        $tel->setOptions(array('size'=>'50'))
            ->addValidator('StringLength', false, array('min'=>8))
            ->addValidator('Regex', false, array(
                'pattern' => '',
                'messages' => array(
                    Zend_Validete_Regex::INVALID =>
                    '\'%value%\' does not match number format +XXYYZZZZ',
                    Zend_Validete_Regex::NOT_MATCH =>
                    '\'%value%\' does not match number format +XXYYZZZZ',
                )
            ))
            ->addValidator('Int')
            ->addFilter('HtmlEntities')
            ->AddFilter('StringTrim');

        $title = new Zend_Form_Element_Text('Title');
        $title->setLabel('Title:')
            ->setOptions(array('size'=>'50'))
            ->setRequired(true)
            ->addFilter('HtmlEntities')
            ->addFilter('StringTrim');

        $year = new Zend_Form_Element_Text('Year');
        $year->setLabel('Year:')
            ->setOptions(array('size' => '8', 'length' => '4'))
            ->setRequired(true)
            ->addValidator('Between', false,array(
                'min' => 1950, 'max' => 2013
            ))
            ->addFilter('HtmlEntities')
            ->addValidator('Int')
            ->addFilter('StringTrim');

//        $country = new Zend_Form_Element_Select('CountryID');
//        $country->setLabel('Country:')
//            ->setRequired(true)
//            ->addValidator('Int')
//            ->addFilter('HtmlEntities')
//            ->addFilter('StringTrim')
//            ->addFilter('StringToUpper');
//        foreach ($this->getCountries() as $c) {
//            $country->addMultiOption($c['CountryID'], $c['CountryName']);
//        }

        $denomination = new Zend_Form_Element_Text('Denomination');
        $denomination->setLabel('Denomination: ')
            ->setOptions(array('size'=>'8'))
            ->setRequired(true)
            ->addValidator('Float')
            ->addFilter('HtmlEntities')
            ->addFilter('StringTrim');

//        $type = new Zend_Form_Element_Radio('TypeID');
//        $type->setLabel('Type:')
//            ->setRequired(true)
//            ->addValidator('Int')
//            ->addFilter('HtmlEntities')
//            ->addFilter('StringTrim');
//        foreach ($this->getTypes() as $t) {
//            $type->addMultiOption($t['TypeID'], $t['TypeName']);
//        }
//        $type->setValue(1);
//
//        $grade = new Zend_Form_Element_Select('GradeID');
//        $grade->setLabel('Grade:')
//            ->setRequired(true)
//            ->addValidator('Int')
//            ->addFilter('HtmlEntities')
//            ->addFilter('StringTrim');
//
//        foreach ($this->getGrades() as $g) {
//            $grade->addMultiOption($g['GradeID'], $g['GradeName']);
//        }

        $priceMin = new Zend_Form_Element_Text('SalePriceMin');
        $priceMin->setLabel('Sale price (min):')
            ->setOptions(array('size'=>'8'))
            ->setRequired(true)
            ->addValidator('Float')
            ->addFilter('HtmlEntities')
            ->addFilter('StringTrim');

        $priceMax = new Zend_Form_Element_Text('SalePriceMax');
        $priceMax->setLabel('Sale price (max):')
            ->setOptions(array('size'=>'8'))
            ->setRequired(true)
            ->addValidator('Float')
            ->addFilter('HtmlEntities')
            ->addFilter('StringTrim');

        $notes = new Zend_Form_Element_Textarea('Description');
        $notes->setLabel('Descriptions:')
            ->setOptions(array('rows'=> '15', 'cols'=>'60'))
            ->setRequired(true)
            ->addFilter('HtmlEntities')
            ->addFilter('StripTags')
            ->addFilter('StringTrim');

        $submit = new Zend_Form_Element_Submit('submit');
        $submit ->setLabel('Submit Entry')
            ->setOrder(100)
            ->setOptions(array('class' => 'submit'));

        $this->addElement($name)
            ->addElement($email)
            ->addElement($tel);

        $this->addDisplayGroup(
            array('SellerName', 'SellerEmail', 'SellerTel'), 'contact');

        $this->getDisplayGroup('contact')->setOrder(10)->setLegend('Seller info');


        $this->addElement($title)
            ->addElement($year)
//            ->addElement($country)
//            ->addElement($type)
//            ->addElement($grade)
            ->addElement($priceMin)
            ->addElement($priceMax)
            ->addElement($denomination)
            ->addElement($notes);

        $this->addDisplayGroup(array(
            'Title', 'Year', 'Denomination', 'SalePriceMin', 'SalePriceMax', 'Description'), 'item');

        $this->getDisplayGroup('item')
            ->setOrder(20)
            ->setLegend('Item Information');

        $this->addElement($submit);
    }

//        public function getCountries() {
//            //
//        }
//        public function getGrades() {
//            //
//        }
//        public function getTypes() {
//            //
//        }

}