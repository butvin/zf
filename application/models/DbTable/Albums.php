<?php

class Application_Model_DbTable_Albums extends Zend_Db_Table_Abstract
{
    protected $_name = 'albums';
    public function getAlbum($id)
    {
        $id = (int)$id;
        $row = $this->fetchRow('id = ' . $id);
        if (!$row) {
            throw new Exception("Could not find row $id");
        }
        return $row->toArray();
    }
    public function addAlbum($artist, $title, $year)
    {
        $data = array(
            'artist' => $artist,
            'title' => $title,
            'year' => $year,
        );
        $this->insert($data);
    }
    public function updateAlbum($id, $artist, $title, $year)
    {
        $data = array(
            'artist' => $artist,
            'title' => $title,
            'year' => $year,
        );
        $this->update($data, 'id = '. (int)$id);
    }
    public function deleteAlbum($id)
    {
        $this->delete('id =' . (int)$id);
    }
}
