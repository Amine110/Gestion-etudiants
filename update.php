<?php
include 'dbconnexion.php' ;
 $firstname=$_POST['firstname'];
 $lastname=$_POST['lastname'];
 $email=$_POST['email'];
 $phone=$_POST['phone'];
 $id=$_POST['id'];
 
$reponse=$cnx->prepare('UPDATE students SET firstname=:param_firstname,lastname=:param_lastname,email=:param_email,phone=:param_phone where id=:param_id');
$reponse->bindParam(':param_firstname',$firstname);
$reponse->bindParam(':param_lastname',$lastname);
$reponse->bindParam(':param_email',$email);
$reponse->bindParam(':param_phone',$phone);
$reponse->bindParam(':param_phone',$phone);
$reponse->bindParam(':param_id',$id);
$reponse->execute(); 
 header("location:index.php");