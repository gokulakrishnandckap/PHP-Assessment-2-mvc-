<?php

require "connection.php";

class UserModel extends Database{
   

    public function create($data) {

        // $name = $data['DBname'];
        // $con = new PDO
        // (
        //     'mysql:host=127.0.0.1',
        //     'admin',
        //     'welcome'
        // );
        // var_dump($con);
        // $query = "CREATE DATABASE '$name'";

        // $sql = "CREATE DATABASE IF $name";
        // // $sql = "USE $name";
        // $statement = $this->db->query($sql);
        // if($statement){
        //   echo "he";
        // }
        // else{
        //   echo "him";
        // }
        // $this->db->close();
        // if ($this->db->query($sql) === True) {
        //   echo "Database created successfully";
        // } else {
        //   echo "Error creating database";
        // }
    //  $this->db->query("CREATE DATABASE $name");
        // $statement->execute();

    }

    public function showing() {
        $sql = "SHOW DATABASES";
        $val = $this->db->query($sql);
        $all=$val->fetchAll();
        return $all;
  
  }
    public function insertcolumns($name) {

      $dbname = $name['db'];
      // $sql;
        $tablename = $name['tablename'];
              $con = new PDO
        (
            'mysql:host=127.0.0.1;dbname='.$dbname,
            'admin',
            'welcome'
        );
        // unset($name['db']);
        // unset($name['tablename']);
      var_dump($name);
      //   $keys;
      //   $values;
      // foreach($name as $key=>$value)
      // {
      //   // echo $key;
      //   if($key % 2 == 0)
      //   {
      //     // array_push($keys,$value);
      //     // $keys[]=$value;

      //  }
      //  else
      //  {
      //   // $values[] = $value;
      //   // echo $value;

      //  }

      // }

      // var_dump($keys);
      // var_dump($values);
        // foreach($name as $vale){
        //   echo $vale;
        // }



      //   $key = array_values($name);

      //  $val =  implode(', ', $key);
// var_dump($val);
        // $sql = "INSERT INTO $table (" . implode(', ', $key) . ") "
        // . "VALUES ('" . implode("', '", $val) . "')";
    //     $sql = "CREATE TABLE $tablename (
    //        for($i=0; $i<$n ;$i=$i+1)
    //         {
    //         echo "$col_names[$i]" . " " . "$col_types[$i]" . "(10)"
    //         }

    //  )";
          // $con->query($sql);

    }
    public function edit($id) {
        $statement = $this->db->prepare("SELECT *  from products where id =".$id);
        $statement->execute();
        $SingleData=$statement->fetchAll();
        return $SingleData;
        
    }

    public function update($id,$data,$file) {
        $name = $data["product_name"];
        $sku = $data["SKU"];
        $price = $data["price"];
        $brand = $data["brand"];


      if($file['image']['name'] == ""){
        $statement = $this->db->prepare("UPDATE products SET name ='$name',sku='$sku',price='$price',brand='$brand' where id =".$id);
        $statement->execute();
        header("location:/list");

      }
      else
      {
        // $statement = $this->db->prepare("SELECT image  from items where id =".$id);
        // $statement->execute();
        // $SingleDatas=$statement->fetchAll();
        // unlink($SingleDatas[0]['image']);



        $fileName = $_FILES['image']['name'];
         
        $fileTmpName = $_FILES['image']['tmp_name'];
        $folder = "images/".$fileName;
        move_uploaded_file($fileTmpName,$folder);

        $statement = $this->db->prepare("UPDATE products SET name ='$name',image='$folder',sku='$sku',price='$price',brand='$brand',available_stock='$Available_stocks' where id =".$id);
        $statement->execute();
        header("location:/list");

      }

    }

    public function delete($id) {
        // $statement = $this->db->prepare("SELECT image  from items where id =".$id);
        // $statement->execute();
        // $SingleDatas=$statement->fetchAll();
        // unlink($SingleDatas[0]['image']);
        $statement = $this->db->prepare("DELETE from products where id =".$id);
        $statement->execute();
        header("location:/list");
        // Perform database delete operation based on $id
    }

}