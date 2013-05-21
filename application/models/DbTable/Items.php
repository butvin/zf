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

}