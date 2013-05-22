<?php

class Application_Model_DbTable_Items extends Zend_Db_Table_Abstract {
    protected $_name = 'items';
    public function getItem($id) {
        $id = (int)$id;
        $row = $this->fetchRow('id = '. $id);
        if (!$row) {
            throw new Exception('Cant find row' . $id);
        }
        return $row->toArray();
    }
    public function addItem($name, $email, $tel, $title, $year, $denomination, $priceMin,$priceMax,  $notes){
        $data = array(
            'name' => $name,
            'email'=> $email,
            'tel' => $tel,
            'title' => $title,
            'year' => $year,
            'denomination' => $denomination,
            'priceMin' => $priceMin,
            'priceMax' => $priceMax,
            'notes' => $notes,
        );
        $this->insert($data);
    }
    public function updateItem($id, $name, $email, $tel, $title, $year, $denomination, $priceMin,$priceMax,  $notes) {
        $data = array(
            'name' => $name,
            'email'=> $email,
            'tel' => $tel,
            'title' => $title,
            'year' => $year,
            'denomination' => $denomination,
            'priceMin' => $priceMin,
            'priceMax' => $priceMax,
            'notes' => $notes,
        );
        $this->update($data, 'id = '. (int)$id);
    }
    public function deleteItem($id) {
        $this->delete('id = ' .(int)$id);
    }
}