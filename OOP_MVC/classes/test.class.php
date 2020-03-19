<?php

    class Test extends Dbh {

        public function getUsers() {
            $sql = "SELECT * FROM users";
            $stmt = $this->connect()->query($sql);
            while($row = $stmt->fetch()) {
                echo $row['firstname'] . '<br>';
            }
        }

        public function getUsersStmt($firstname, $lastname) {
            $sql = "SELECT * FROM users WHERE firstname = ? AND lastname = ?";
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute([$firstname, $lastname]);
            $names = $stmt->fetchAll();

            foreach($names as $name) {
                echo $name['dateofbirth'] . '<br>';
            }
        }

        public function setUsersStmt($firstname, $lastname, $dateofbirth) {
            $sql = "INSERT INTO users(firstname, lastname, dateofbirth) VALUES (?, ?, ?)";
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute([$firstname, $lastname, $dateofbirth]);
        }
    }