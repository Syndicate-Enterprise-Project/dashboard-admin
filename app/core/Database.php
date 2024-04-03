<?php
class Database
{
    private $stmt, $result;

    public function __construct()
    {
        if (CONN->connect_error) {
            die("Connection failed: " . CONN->connect_error);
        }
    }

    public function query($stmt)
    {
        $this->stmt = CONN->prepare($stmt);
    }

    public function bind(array $values, $type = null)
    {
        if (is_null($type)) {
            foreach ($values as $value) {
                switch (true) {
                    case is_int($value):
                        $type .= 'i';
                        break;
                    case is_bool($value):
                        $value = $value ? 1 : 0;
                        $type .= 'i';
                        break;
                    case is_null($value):
                        $type .= 'b';
                        break;
                    default:
                        $type .= 's';
                }
            }
        }

        $this->stmt->bind_param($type, ...$values);
    }

    public function execute()
    {
        $this->stmt->execute();
    }

    public function executeOneColumn()
    {
        $this->execute();
        $this->result =  $this->stmt->get_result();
        $row = $this->result->fetch_assoc();
        return $row;
    }

    public function resultSet()
    { //jika menggunakan mysqli query YANG MEMBUTUHKAN DATA (?) harus menggunakan method execute()
        $this->execute();
        $this->result =  $this->stmt->get_result();
        $rows = [];
        while ($row = $this->result->fetch_assoc()) {
            $rows[] = $row;
        }
        return $rows;
    }

    public function rowCount()
    {
        return $this->stmt->affected_rows;
    }
}
