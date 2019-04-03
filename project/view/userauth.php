

 <?php include("header.php");
 //session_start();

 include_once("../controller/projectcontroller.php");
// $controller = new Controller2(); 
 
 //   $controller->userauth();
 if($_SERVER["REQUEST_METHOD"] == "POST") {
  $controller = new ProjectController(); 
  $controller->userauth($_POST["name"],$_POST["password"]); //echo "hello";
  //header("Location:../controller/Controller2.php");
 
}
 
 
 class view
 {
   public function __construct()
   {
 $controller;
 if($_SERVER["REQUEST_METHOD"] == "POST") {
   /* $controller = new Controller2(); 
    $controller->userauth($_POST["name"],$_POST("password"));
    header("Location:../controller/Controller2.php");
    echo "hello";*/
  }
}

}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}



?>


<div class="container">
<div class="col-md-offset-3 col-md-5">
  <h2>Login</h2>
  <form class="form-horizontal" action="userauth.php" method="post">
    <div class="form-group">
      <label class="control-label col-sm-3" for="name">Name:</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" name="name" id="name" placeholder="Enter name">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-3" for="pwd">Password:</label>
      <div class="col-sm-9">          
        <input type="password" class="form-control" name="password"id="pwd" placeholder="Enter password">
      </div>
    </div>
    
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </div>
  </form>
  </div>
</div>

<?php include("footer.php");?>