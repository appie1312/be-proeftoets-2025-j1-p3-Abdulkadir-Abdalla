<?php

class SneakersModel
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function getAllsneakers()
    {
        $sql = 'SELECT SNKS.Merk, SNKS.Model, SNKS.Type
                FROM sneakers as SNKS

                ORDER By SNKS.Merk DESC';

        $this->db->query($sql);

        return $this->db->resultSet();
    }
}
