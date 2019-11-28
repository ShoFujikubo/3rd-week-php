<?php

if (isset($_POST['id'],$_POST['name'],$_POST['lastname'],$_POST['email'],$_POST['phone'],$_POST['country']))
{
    $id=$_POST['id'];
    $name=$_POST['name'];
    $lastname=$_POST['lastname'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $country=$_POST['country'];

}

?>

<form method="post">
  
   <input type="number" name="id" placeholder="ID"><br><br>
   <input type="text" name="name" placeholder="Name"><br><br>
   <input type="text" name="lastname" placeholder="Lastname"><br><br>
   <input type="text" name="email" placeholder="Email"><br><br>
   <input type="number" name="phone" placeholder="Phone"><br><br>
   <input type="text" name="country" placeholder="Country"><br><br>


   <input type="submit">

</form>
