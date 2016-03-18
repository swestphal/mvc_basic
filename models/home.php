<?php
/**
 * Created by PhpStorm.
 * User: simonewestphal
 * Date: 16.03.16
 * Time: 17:04
 */

class HomeModel extends Model
{

    public function Index()
    {
        $this->query('SELECT * FROM posts ORDER BY create_date DESC');
        $rows=$this->resultSet();
return $rows;
    }
}