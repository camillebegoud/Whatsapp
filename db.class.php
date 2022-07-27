<?php


class Db
{
    public $host;
    public $dbname;
    public $username;
    public $password;
    public $dbco;


    public function connect($set_host, $set_username, $set_password, $set_database)
    {
        $this->host = $set_host;
        $this->username = $set_username;
        $this->password = $set_password;
        $this->dbname = $set_database;
        try {
            $this->dbco = new PDO("mysql:host=$this->host;dbname=$this->dbname;charset=utf8", "$this->username", "$this->password");
            $this->dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            echo "Vous êtes connecté";
        } catch (PDOException $e) {
            echo "Erreur : " . $e->getMessage();
        }
    }



    public function create($table, $fields = array(), $values = array())
    {
        try {

            $str_fields = implode(",", $fields);

            $tableau_values = [];

            foreach ($fields as $field) {

                array_push($tableau_values, ":" . $field);
            }

            $str_fields2 = implode(",", $tableau_values);

            $keys_values = array_combine($tableau_values, $values);

            $prep = $this->dbco->prepare("
                                        INSERT INTO
                                        $table($str_fields)
                                            VALUES ( $str_fields2)
                                        ");

            $prep->execute($keys_values);
            print_r($prep);
        } catch (PDOException $e) {
            echo "Erreur : " . $e->getMessage();
        }
    }


    public function select_one($table, $field, $id)
    {

        // return $this->requete("SELECT * FROM  $table WHERE $field = $id")->fetch();




        try {
            $sth = $this->dbco->prepare("SELECT * FROM  $table WHERE $field = $id");

            $sth->execute();
            $resultat = $sth->fetchAll(PDO::FETCH_ASSOC);
            print_r($resultat[0]);
            return $resultat[0];
        } catch (PDOException $e) {
            echo "Erreur : " . $e->getMessage();
        }
    }


    public function select_all($table, $field, $value)
    {
        try {
            $sth = $this->dbco->prepare("SELECT * FROM  $table WHERE $field = $value");
            $sth->execute();
            $resultat = $sth->fetchAll(PDO::FETCH_ASSOC);
            echo "<pre>";
            print_r($resultat);
            echo "</pre>";
            return $resultat;
        } catch (PDOException $e) {
            echo "Erreur : " . $e->getMessage();
        }
    }



    public function delete($table, $field, $id)
    {
        //delete('users', 'pseudo', 'test');
        try {
            $sql = "DELETE FROM  $table WHERE $field ='$id'";
            echo "<pre>";
            print_r($sql);
            echo "</pre>";
            $sth = $this->dbco->prepare($sql);

            var_dump($sth);
            $sth->execute();
        } catch (PDOException $e) {
            echo "Erreur : " . $e->getMessage();
        }
    }

    public function update($table, $fields = array(), $values = array(), $id, $field_id)
    {

        try {
            //$sth = $this->dbco->prepare("UPDATE $table SET $field = '$val' WHERE $field_id=$id");



            echo "<br>";

            echo "<br>";
            echo "<br>";
            print_r($values[0]);
            echo "<br>";
            echo "<br>";
            // print_r($keys_values[$fields]);
            echo "<br>";
            print_r($fields[0]);
            foreach ($fields as $field) {
                //$col1 = $fields[0];

                $sql = "UPDATE $table SET $field= 'values[$field]', WHERE $field_id=$id";

                $prep = $this->dbco->prepare($sql);

                echo "<pre>";
                print_r($sql);
                echo "</pre>";
                // $prep->execute($keys_values);
                echo "<pre>";
                print_r($prep);
                echo "</pre>";
            }
            echo "update reussis";
        } catch (PDOException $e) {
            echo "Erreur : " . $e->getMessage();
        }
    }
    // UPDATE table
    // SET colonne_1 = 'valeur 1', colonne_2 = 'valeur 2', colonne_3 = 'valeur 3'
    // WHERE condition
}  
//UPDATE $table SET $str_fields[0] = '$keys_values[0]', $str_fields[1] = '$keys_values[1]' WHERE 
// "ALTER TABLE UsersADD DateInscription TIMESTAMP";
//("UPDATE UsersSET pseudo='coquille'WHERE id=2");