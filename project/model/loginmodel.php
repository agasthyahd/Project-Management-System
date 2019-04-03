
<?php

include("connec.php");

class LoginModel extends Connection
{
    
    
    public function userauthi($name,$password){
    //session_start();
   
   // $_SESSION["username"] = $_POST["name"];
  //  $_SESSION["password"] = ($_POST["password"]);
    $NAME=($name);
    $PASSWORD=($password);
   // print_r ($_SESSION);
//echo"hello";
   $query2 =mysqli_query($this->conn,"SELECT * from USER where NAME= '$NAME' "); 
   $userdetails=mysqli_fetch_assoc($query2);$password=$userdetails["PASSWORD"];
               if(mysqli_num_rows($query2)<=0)
               {
                   return "Username  is invalid";//exit();
   
   }
   else
   {
   
    
    if(password_verify($PASSWORD,$password))
    {
        //header("Location:project.php");
    }
    else
    {
        return "Password is invalid";
        
        //exit();
    }



   }
   
    }
public function sqlinp($name,$emailid,$qualification,$age,$password)
{
   
    $obj=new LoginModel;
//$query = mysqli_query($conn,"SELECT * FROM USER");
    $ID=$obj->numofrws();


    if (!$this->conn) {
       die("Connection failed: " . mysqli_connect_error());
       echo "Error";
 }
    $q="INSERT INTO USER values('$ID','$name','$emailid','$qualification','$age','$password')";
   
    $check=mysqli_query($this->conn,$q);
    if(!$check)
       {
        //header("Location:redirect_fail.html");
        echo "Error: " . $sql . "<br>" . mysqli_error($this->conn);
       }
   /* $query = mysqli_query($conn,"SELECT * FROM USER");


    echo "<h2 class='col-md-offset-3 col-md-5'>Your details are as :</h2>";
       echo "<div class='container'>
       <div class='col-md-offset-3 col-md-5'>
       ID   NAME  QUALIFICATION   AGE<br>";
       while($row = mysqli_fetch_array($query)) {
             echo
                "<tr>
                
                 <td>{$row['ID']}</td>
                 <td>{$row['NAME']}</td>
                    <td>{$row['EMAILID']}</td>
                 <td>{$row['QUALIFICATION']}</td>
                 <td>{$row['AGE']}</td>
                 
                 </tr><br>";


    
   
       }echo "</div></div>";
       if(!$query)
       {
        //header("Location:redirect_fail.html");
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
       }*/
       mysqli_close($this->conn);       





}
    public function numofrws()
    {
       
    $query = mysqli_query($this->conn,"SELECT * FROM USER");
    $ID=mysqli_num_rows($query)+1;

        if (!$this->conn) {
        die("Connection failed: " . mysqli_connect_error());
        echo "Error";
    }

return $ID;

}
    public function getid()
{   session_start();
        
        $username= $_SESSION["username"];
    // print_r($username);
      $result=mysqli_query($this->conn,"SELECT ID FROM USER WHERE NAME='$username'");
     $userid= mysqli_fetch_assoc($result);
     $userid2=$userid["ID"];
      //print_r($userid["AGE"]);
      if(!$userid)
         {
           //header("Location:redirect_fail.html");            
               echo "Error: " . $sql . "<br>" . mysqli_error($this->conn);

         }
         return $userid2;



}
    

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}}
?>