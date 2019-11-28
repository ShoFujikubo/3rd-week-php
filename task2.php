<?php

if (isset($_GET['id'],$_GET['name'],$_GET['lastname'],$_GET['email'],$_GET['phone'],$_GET['country']))
{
    $id=$_GET['id'];
    $name=$_GET['name'];
    $lastname=$_GET['lastname'];
    $email=$_GET['email'];
    $phone=$_GET['phone'];
    $country=$_GET['country'];
    


    echo "You are {$name} : {$lastname}  and Your email adress is {$email} and You are from {$country}";

}

?>

<form method="get">
  
   <input type="number" name="id" placeholder="ID"><br><br>
   <input type="text" name="name" placeholder="Name"><br><br>
   <input type="text" name="lastname" placeholder="Lastname"><br><br>
   <input type="text" name="email" placeholder="Email"><br><br>
   <input type="number" name="phone" placeholder="Phone"><br><br>
   <input type="text" name="country" placeholder="Country"><br><br>


   <input type="submit">

</form>
