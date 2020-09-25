<?php
   $mysqli=false;

   function connectDB(){
      global $mysqli;
      $mysqli=new mysqli("localhost","root","","DB_my_works");
      $mysqli->query("SET NAMES 'utf-8'");
   }

   function closeDB(){
      global $mysqli;
      $mysqli->close();
   }

   function getWorks($limit){
   global $mysqli;
   connectDB();
   $result=$mysqli->query("SELECT * FROM `works` ORDER BY  `id` DESC LIMIT $limit");
   closeDB();
   return resultToArray($result);
   
}
   function resultToArray($result){
   $array=array();
   while(($row = $result->fetch_assoc())!=false)
   $array[]=$row;
   return $array;
}
?>