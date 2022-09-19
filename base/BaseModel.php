<?php

require './base/database.php';

class BaseModel
{

    public static function arrToModel($result)
    {
        $class = get_called_class();
        $model = new $class;
        if(is_array($result))
        {
            foreach($result as $key => $value)
            {
                $model->$key = $value;
            }
            return $model;
        }else{
            return null;
        }
    }

    public static function tableName()
    {
        if(isset(static::$table) && static::$table)
        {
            return static::$table;
        }else{
            return strtolower(get_called_class()) . 's';
        }

    }

    public static function tableCols()
    {
        global $db;
        $q = "SELECT COLUMN_NAME FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_SCHEMA = '".DB_NAME."' AND TABLE_NAME = '".self::tableName()."'";
        $results = $db->fetch($q);
        $output = [];
        foreach($results as $key => $result)
        {
            $output [] = $result['COLUMN_NAME'];
        }
        return $output;
    }

    public static function createList($results , $class = null)
    {
        $list = [];
        foreach($results as $result)
        {
            if($class)
            {
            $list [] = $class::arrToModel($result);
            }else{
               $list[] = self::arrToModel($result);
            }
        }
        return $list;
    }

    public static function all($filters = [])
    {
        self::tableCols();
        global $db;
        $query = "SELECT * FROM " . self::tableName() . " WHERE 1 ";
        if(count($filters))
        {
            foreach($filters as $key => $value)
            {
                $query .= "AND $key = '$value' ";
            }
        }
        $results = $db->fetch($query);
        return self::createList($results);
    }

    public static function find($id)
    {
        global $db;
        $query = "SELECT * FROM " . self::tableName() . " WHERE id=$id";
        $result = $db->find($query);
        $result = self::arrToModel($result);
        return $result;
    }

    public static function where($arr,$ignore = 0)
    {
        global $db;
        $query = "SELECT * FROM " . self::tableName() . " WHERE ";
        foreach($arr as $key => $value)
        {
            $query .= "$key = '$value' AND ";
        }
        $query .= 1;
        if($ignore)
        {
            $query .= " And id != $ignore";
        }
        // die($query);
        $result = $db->find($query);
        $result = self::arrToModel($result);
        return $result;
    }

    public static function store($arr)
    {
        global $db;
        $attributes = self::tableCols();
        $query = "INSERT INTO " .self::tableName() ;
        $query .= " (";
        foreach($attributes as $key => $attr)
        {
            $query .= "$attr ";
            if($key != count($attributes) -1)
            {
                $query .= ", ";
            }
        }
        $query .= " ) VALUES (";
        foreach($attributes as $key => $attr)
        {
            $query .= "'".$arr[$attr]."'";
            if($key != count($attributes) -1)
            {
                $query .= ", ";
            }
        }
        $query .= " )";

        $result = $db->execute($query);
        $id = $db->insertId();
        return self::find($id);
    }

    public static function update($arr,$id)
    {
        global $db;
        
        $attributes = self::tableCols();
        
        $query = "UPDATE " . self::tableName() . " SET ";
        foreach($attributes as $key => $attr)
        {
            if($attributes != 'id' && $arr[$attr])
            {
                $query .= " $attr = '".$arr[$attr]."' " . ',';
            }
        }
        $query = rtrim($query, ",");
        $query .= " WHERE id=$id";
        return $db->execute($query);
    }

    public static function delete($id)
    {
        global $db;
        $query = "DELETE FROM " . self::tableName() . " WHERE id=$id";
        return $db->execute($query);
    }
}