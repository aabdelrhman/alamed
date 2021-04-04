<?php

              $conn = new mysqli("sql300.eb2a.com","eb2a_26538785","QAZxsw550","eb2a_26538785_ALameed") or die(mysqli_error());
                if(isset($_POST['submit'])){
                  $name = $_POST['name'];
                  $email = $_POST['email'];
                  $subject = $_POST['subject'];
                  $message = $_POST['message'];
                  $sql = "INSERT INTO clients (client_name , client_email , client_subject , client_message) VALUE ('$name' , '$email' , '$subject' , '$message')";
                  $res = mysqli_query($conn , $sql);
                  if(!$res){
                    session_start();
                    header('location:contact.php?error=error');
                  }else{
                    header('location:contact.php?good=good');
                  }
                }
              ?>