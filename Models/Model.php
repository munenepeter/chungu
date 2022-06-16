<?php

namespace Chungu\Models;

use Chungu\Core\Mantle\App;

class Model {
    public function __get($name) {
        return $name;
    }
    public function __set($name, $value) {
        $this->$name = $value;
    }
    public static function getInstance() {
        $model_name = new static;
        return $model_name;
    }


    private static function tableName() {

        //get table name form the model
        $tableName  = get_class(static::getInstance());
        //convert to lowercase and pluralize it
        $tableName  = plural(strtolower($tableName), 2);
        // remove the namespace
        $tableName = substr($tableName, strrpos($tableName, '\\') + 1);

        return $tableName;
        //users
    }

    public static function create(array $data) {

        App::get('database')->insert(static::tableName(), $data);
        //User::create(['name'=>'peter']);
    }
    public static function update($dataToUpdate, $where, $isValue) {

        App::get('database')->update(static::tableName(), $dataToUpdate, $where, $isValue);
        //User::create(['name'=>'peter']);
    }
    public static function delete($where, $isValue) {

        App::get('database')->delete(static::tableName(), $where, $isValue);
        //User::delete('id', 23]);
    }
    public static function all() {
        //Returns all the records in the db for a certain  model/table

        return App::get('database')->selectAll(static::tableName());
        //User::all();
    }
    public static function select($column, $value) {
        //Returns all the records in the db for a certain  model/table
        return App::get('database')->selectAllWhere(static::tableName(), $column, $value);
        //User::select('id',89);
    }

    /**
     * Model::Where
     * 
     * Selects given column names given a certain condition
     * 
     * @param Array $columns The columns in the db to select from
     * @param Array $condition The condition to be fulfiled by the where clause
     * 
     * @example 
     * Model::where(['id', 'name','slug'], ['id', 90]);
     * 
     * @return Chungu\Models\Model;
     */
    public static function where($columns, $condition) {
        //Returns all the records in the db for a certain  model/table

        return  App::get('database')->selectWhere(static::tableName(), $columns, $condition);
        //User::where(['id', 'name','slug'], ['id', 90]); -> return id, name & slug where the id is 90
    }
    public static function query(string $sql) {
        //Returns all the records in the db for a certain  model/table

        return  App::get('database')->query($sql);
        //User::query(Select ,, form , ); 
    }
    /**
     * Model::find
     * 
     * Selects every where an id matches the one given
     * 
     * @param Int $id the id of the column to be selected
     * 
     * @example 
     * <code>
     *    Model::where(['id', 'name','slug'], ['id', 90]);
     * </code>
     * 
     * 
     * @return Chungu\Models\Model;
     */
    public static function find($id) {

        $item =  App::get('database')->selectAllWhereID(static::tableName(), $id);
        //User::find(1); return a user with the id of 1
        if (empty($item)) {
            throw new \Exception("There is no results for your query!", 404);
            return;
        }
        return $item;
    }
    public function belongsTo($class) {
        // I have no idea to implement relations
        //return a join 
        $table1 = static::tableName();
        $table2 = substr($class, strrpos($class, '\\') + 1);
        $table2 = plural(strtolower($table2), 2);

        return App::get('database')->join($table1, $table2, 'category_id', 'id');
    }
}
