<?php

namespace Chungu\Core\Database;


/**
 * @package QueryBuilder
 * 
 * Class that interacts with the db
 * @return Object Model returns an instance of Model class
 * 
 * @todo Implement App::get('database')->select('users')->where(['email', $email]);
 */

class QueryBuilder {

  protected $pdo;

  public function __construct($pdo) {

    $this->pdo = $pdo;
  }


  public function runQuery($sql, $table) {

    $model = singularize(ucwords($table));

    try {
      $statement = $this->pdo->prepare($sql);
      $statement->execute();
    } catch (\Exception $e) {

      logger("Error", "Wrong Query: { $sql }  " . $e->getMessage());
      throw new \Exception("Wrong query { $sql }!" . $e->getCode());
    }


    $results = $statement->fetchAll(\PDO::FETCH_CLASS,  "Chungu\\Models\\{$model}");

    if (is_null($results) || empty($results)) {
      logger("Warning","Empty results for: {$sql}");
      //   throw new \Exception("There is no results for your query!", 404);
    }
    return  $results;
  }
  /**
   * selectAll
   * 
   * This selects everything from a given table
   * @param String $table table from which to selct the data
   * 
   * @return Model returns an instance of Model with the same table name
   */
  public function selectAll(String $table) {

    $sql = "select * from {$table} ORDER BY `created_at` DESC;";

    return $this->runQuery($sql, $table);
  }
  /**
   * Select
   * Selects given values 
   * 
   * @param String $table Table from which to select
   * @param Array $values The columns in the db to select from
   * 
   * @return Model returns an instance of Model with the same table name
   */
  public function select(string $table, array $values) {

    $values =  implode(',', $values);
    $sql = "select {$values}  from {$table}";
    return $this->runQuery($sql, $table);
  }

  public function selectAllWhereID(string $table, $value) {

    //To do Implement Dynamic Primary key row
    $sql = "select * from {$table} where `id` = \"$value\" ORDER BY `created_at` DESC;";

    return $this->runQuery($sql, $table);
  }

  public function selectAllWhere(string $table, $column, $value, $condition ) {

    $sql = "select * from {$table} where `{$column}` $condition \"$value\" ORDER BY `created_at` DESC;";

    return $this->runQuery($sql, $table);
  }


  /**
   * SelectWhere
   * 
   * Selects given column names given a certain condition
   * 
   * @param String $table Table from which to select
   * @param Array $values The columns in the db to select from
   * @param Array $condition The condition to be fulfiled by the where clause
   * 
   * @example 
   *  selectWhere('table_name", ['email', 'pass'], ['email','test@test.com']);
   */

  public function selectWhere(string $table, array $values, array $condition) {

    $values =  implode(',', $values);

    //pure madness
    $condition[1] = sprintf("%s$condition[1]%s", '"', '"');

    $condition =  implode(' = ', $condition);

    $sql = "select {$values}  from {$table} where {$condition}";

    return $this->runQuery($sql, $table);
  }
  public function update(string $table, $dataToUpdate, $where, $isValue) {
    $sql = "UPDATE {$table} SET $dataToUpdate WHERE `$where` = \"$isValue\"";

    $entity = singularize($table);
    logger("Info","{$entity} with an '{$where}' of '{$isValue}' has been updated by ". auth()->username);

    return $this->runQuery($sql, $table);
  }
  //DELETE FROM table_name WHERE condition;
  public function delete(string $table, $where, $isValue) {

    $sql = "DELETE FROM {$table} WHERE `$where` = \"$isValue\"";

    $entity = singularize($table);
    logger("Info","{$entity} with an '{$where}' of '{$isValue}' has been deleted ". auth()->username);

    return $this->runQuery($sql, $table);
  }
  public function insert(string $table, array $parameters) {

    $sql = sprintf(
      'insert into %s (%s) values (%s)',

      $table,

      implode(', ', array_keys($parameters)),

      ':' . implode(', :', array_keys($parameters))
    );

    try {

      $statement = $this->pdo->prepare($sql);
      $statement->execute($parameters);
      logger("Info", auth()->username ."Inserted " . implode(', ', array_keys($parameters)). " to {$table} {$table} ");
    } catch (\Exception $e) {
      logger("Error"," Wrong Query $sql, " . $e->getMessage());
      throw new \Exception(' Wrong Insert!' . $e->getCode());
      die();
    }

  }
  //Albtatry Query FROM table_name WHERE condition;
  public function query(string $sql) {
    try {

      $statement = $this->pdo->prepare($sql);
      $statement->execute();

      return $statement->fetchAll(\PDO::FETCH_ASSOC);
    } catch (\Exception $e) {

      logger("Error"," Wrong Query $sql, " . $e->getMessage());

      throw new \Exception('Wrong Query!' . $e->getCode());
      die();
    }
  }

  //DELETE FROM table_name WHERE condition;
  public function join(string $table1, string $table2, $fk, $pk) {


    /*
       * SELECT * FROM table1 JOIN table2 ON table1.id1=table2.id2
       */
    $sql = "SELECT * FROM `{$table1}` INNER JOIN `{$table2}` ON {$table1}.{$fk}={$table2}.{$pk} ";


    $statement = $this->pdo->prepare($sql);
    $statement->execute();

    return $statement->fetchAll(\PDO::FETCH_ASSOC);
    return $this->runQuery($sql, $table1);
  }

  public function count(string $table, array $condition) {
    //SELECT COUNT(*) FROM $table WHERE $condition[0] = $condition[2];
    list($column, $value) = $condition;
    $sql = "SELECT COUNT(*) AS count FROM $table WHERE $column = \"$value\"";

    return $this->runQuery($sql, $table);
  }
}
