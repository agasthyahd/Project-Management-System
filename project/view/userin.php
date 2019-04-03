
   <?php include("header.php");
   
      
     
      
      
     
         include_once("../controller/projectcontroller.php");
// $controller = new Controller2(); 
 
 //   $controller->userauth();

  
 
         // define variables and set to empty values
         $NAME = $ID = $QUALIFICATION = $AGE =$EMAILID=$PASSWORD="";
         
         if ($_SERVER["REQUEST_METHOD"] == "POST") {
            
            $NAME = test_input($_POST["name"]);
	    $EMAILID = test_input($_POST["emailid"]);
            $QUALIFICATION = test_input($_POST["qualif"]);
            $AGE = test_input($_POST["age"]);
            $PASSWORD=password_hash(test_input($_POST["password"]),PASSWORD_BCRYPT);
            $controller = new ProjectController(); 
  $controller->userinput($NAME,$EMAILID,$QUALIFICATION,$AGE,$PASSWORD);
           
	    
                  }
         function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
         }
       

      ?>
   
     
<div class="container">
   <div class="row">
   
      <form class="col-md-offset-3 col-lg-5" method = "post" action = "userin.php">
         <table>
         <h1>USER REGISTRATION</h1>
            
            <tr>
               <td>Name:</td> 
               <td><input type = "text" name = "name"></td>
            </tr>
            <tr>
               <td>Email ID:</td>
               <td><input type = "text" name = "emailid"></td>
            </tr>
            <tr>
               <td>Qualification</td>
               <td><input type = "text" name = "qualif"></td>
            </tr>
            <tr>
               <td>AGE</td>
               <td><input type = "number" name = "age"></td>
            </tr>
            <tr>
               <td>PASSWORD</td>
               <td><input type = "text" name = "password"></td>
            </tr>
            
            <tr>
               <td>
                  <input class="btn btn-primary"type = "submit" name = "submit" value = "Submit" onclick="clearForm(this.form);",100);"> 
               </td>
            </tr>
         </table>
         </form>
        
 </div>
  </div>
      <!--<button type="button" onClick="window.location='project.php'" class="btn btn-info" >NEXT BUTTON</button>
      <a href="#">News <span class="badge">5</span></a><br>-->
     
      <?php include("footer.php");?>
