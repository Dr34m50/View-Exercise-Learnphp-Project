<?php
namespace App\Models;

use App\DB;

class Model {
    public $id;
    public static $table;
    public static function all(){
        $db = new DB();
        return $db->all(static::$table, static::class);
    }
    public static function find($id){
        $db = new DB();
        return $db->find(static::$table, static::class, $id);
    }
    public static function where($field, $value){
        $db = new DB();
        return $db->where(static::$table, static::class, $field, $value);
    }

    public function save(){
        $db = new DB();
        $fields = get_object_vars($this);
        unset($fields['id']);
        if($this->id === null){
            $db->insert(static::$table, $fields);
        } else {
            $db->update(static::$table, $fields, $this->id);
        }
    }
    public function delete(){
        $db = new DB();
        $db->delete(static::$table, $this->id);
    }
}