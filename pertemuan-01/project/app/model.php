<?php

require_once 'config.php';

class Model {

    protected $connection = null;
    protected $primary = 'id';
    protected $table = 'table';

    public function __construct($connection)
    {
        $this->connection = $connection;
    }

    public function getAll($columns = [])
    {
        $result = [];

        // BUILD SELECT QUERY
        $sql = "SELECT * FROM {$this->table}";
        if (count($columns)) {
            $sql .= " WHERE";
            $index = 1;
            foreach ($columns as $key => $value) {
                $sql .= " {$key} = {$value}";
                if (count($columns) != $index) {
                    $sql .= " AND";
                }
                $index++;
            }
        }

        // EXECUTE QUERY
        $query = $this->connection->query($sql);

        // BUILD RESULT
        if ($query->num_rows) {
            while ($row = $query->fetch_assoc()) {
                array_push($result, $row);
            }
        }

        return $result;
    }

    public function getById($id)
    {
        $sql = "SELECT * FROM {$this->table} WHERE {$this->primary} = $id";

        $query = $this->connection->query($sql);

        $result = $query->fetch_assoc();

        return $result;
    }

    public function insert($columns)
    {
        $sql = "INSERT INTO {$this->table}";
        if (count($columns)) {
            $sql .= " SET";
            $index = 1;
            foreach ($columns as $key => $value) {
                $sql .= " {$key} = '{$value}'";
                if (count($columns) != $index) {
                    $sql .= ", ";
                }
                $index++;
            }
        }

        $query = $this->connection->query($sql);

        return $query;
    }

    public function update($columns, $conditions)
    {
        $sql = "UPDATE {$this->table}";
        if (count($columns)) {
            $sql .= " SET";
            $index = 1;
            foreach ($columns as $key => $value) {
                $sql .= " {$key} = '{$value}'";
                if (count($columns) != $index) {
                    $sql .= ", ";
                }
                $index++;
            }
        }
        if (count($conditions)) {
            $sql .= " WHERE";
            $index = 1;
            foreach ($conditions as $key => $value) {
                $sql .= " {$key} = {$value}";
                if (count($conditions) != $index) {
                    $sql .= " AND";
                }
                $index++;
            }
        }

        $query = $this->connection->query($sql);

        return $query;
    }

    public function deleteById($id)
    {
        $sql = "DELETE FROM {$this->table} WHERE {$this->primary} = $id";

        $query = $this->connection->query($sql);

        return $query;
    }
}


class User extends Model {
    protected $table = 'users';
}

$user = new User($mysql);
