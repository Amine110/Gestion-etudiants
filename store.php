<?php
 include 'dbconnexion.php' ;
 $firstname=$_POST['firstname'];
 $lastname=$_POST['lastname'] ;
 $email=$_POST['email'];
 $phone=$_POST['phone'];
 $reponse=$cnx -> prepare('INSERT INTO students(firstname, lastname, email , phone) VALUES ( :param_firstname,:param_lastname,:param_email,:param_phone)');
 $reponse->bindParam(':param_firstname',$firstname);
 $reponse->bindParam(':param_lastname',$lastname);
 $reponse->bindParam(':param_email',$email);
 $reponse->bindParam(':param_phone',$phone);
 $reponse->execute();
header("location:index.php");