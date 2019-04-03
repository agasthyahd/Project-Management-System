

      <?php include("header.php");
      include_once("../controller/projectcontroller.php");
    
      
      
      //session_start();
         
        // $query2=$_SESSION["query2"];
        // print_r($query2);
         //header("Location:../view/project.php");
         // define variables and set to empty values
         
         if($_SERVER["REQUEST_METHOD"] == "POST")
         {$name = $id = $domain = $lang1 = $lang2 = $tool="";
            $name = test_input($_POST["name"]);
            $domain = test_input($_POST["domain"]);
            $lang1 = test_input($_POST["lang1"]);
            $lang2 = test_input($_POST["lang2"]);
            $tool = test_input($_POST["tool"]);
            echo "$name";
            $obj=new ProjectController;
            $obj->gvcntlr($name,$domain,$lang1,$lang2,$tool);
            //if($result!=NULL)
          //  {
        //       echo "$result";exit();
         //   }


         }
         function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
         $contr=new ProjectController;
      $query2=$contr->projdetails();
        // include_once("../model/model2.php");  //echo "hello";

        // if ($_SERVER["REQUEST_METHOD"] == "POST") {
            //$id = test_input($_POST["id"]);
           // $NAME = $_SESSION["username"];
          //  $PASSWORD = $_SESSION["password"];//print_r($_SESSION);
         //   $model2=new model2;

          //  $lang1 = test_input($_POST["lang1"]);
	    //$lang2 = test_input($_POST["lang2"]);
	   // $tool = test_input($_POST["tool"]);
	   // $userid = test_input($_POST["userid"]);
          /*  $servername="localhost";
            $username="root";
            $pswrd="root";
            $dbname="mysql";
            $conn=mysqli_connect($servername,$username,$pswrd,$dbname);

            $q="INSERT INTO PROJECT values('$id','$name','$domain','$lang1','$lang2','$tool','$userid')";
            $check=mysqli_query($conn,$q);
            if(!$check)
               {
                 //header("Location:redirect_fail.html");            
                     echo "Error: " . $sql . "<br>" . mysqli_error($conn);

               }
               $query = mysqli_query($conn,"SELECT * FROM PROJECT");
               
            
            
            
               $query2 = mysqli_query($conn,"SELECT * FROM PROJECT WHERE USERID IN (SELECT ID from USER where (NAME='$NAME'))"); 
                 */
              //  $query2=$model2->sqli($NAME);
            if($query2!=NULL)
            {
                if(mysqli_num_rows($query2)>0)
            { //print(mysqli_num_rows($query2));
               echo '<a href="" class="btn btn-success" data-toggle="modal" data-target="#modalContactForm">Launch Project Form</a>';
             
               echo '<div class="modal fade" id="modalContactForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                      
                       <div class="modal-dialog" role="document">
                             <div class="modal-content">
                                      <div class="modal-header text-center">
                                            <h2 class="modal-title font-weight-bold">Project Registration Form</h2>
                                      </div>
                             <div class="modal-body mx-3">
                                   <div class="md-form mb-5">
                                       <i class="fa fa-user prefix grey-text"></i>
                                       <label data-error="wrong" data-success="right" for="name">Full Name:</label>
                                       <input type="text" id="name" class="form-control validate">
                                   </div>
                                  
                                   <div class="md-form mb-5">
                                     
                                       <label data-error="wrong" data-success="right" for="name">Domain</label>
                                       <input type="text" id="domain" class="form-control validate">
                                   </div>
                                   <div class="md-form mb-5">
                                     
                                       <label data-error="wrong" data-success="right" for="lang1">Language1:</label>
                                       <input type="text" id="lang1" class="form-control validate">
                                    </div>
                                    <div class="md-form mb-5">
                                     
                                    <label data-error="wrong" data-success="right" for="lang1">Language2:</label>
                                    <input type="text" id="lang2" class="form-control validate">
                                 </div>
                                 <div class="md-form mb-5">
                                     
                                    <label data-error="wrong" data-success="right" for="lang1">Tool:</label>
                                    <input type="text" id="tool" class="form-control validate">
                                   </div>
                    
                               </div>
                                   <div class="modal-footer d-flex justify-content-center">
                                   <button id="send" class="btn btn-info" onClick="window.location.href=window.location.href">Submit <i class="fa fa-paper-plane-o ml-1"></i></button>
                                   <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                   </div>
                           
                                  
                           </div>
                    </div>
               </div></div>
               ';



            echo "<div class='container'>
            <div class='table-responsive'>";
         //   echo "<div class='col-md-offset-3 col-md-8'";
           
               echo "<table class='table'>";$row="1";
              echo "<thead><tr>Your details are as :</tr></thead>";
               echo "<thead><tr><th>ID</th><th> PROJECT-NAME </th><th>DOMAIN</th>
                 <th>LANGUAGE1 </th><th>LANGUAGE2 </th><th>TOOL</th></tr></thead>";
                 echo "<tbody>";
               while($row) {
                  $row = mysqli_fetch_array($query2);
                     echo
                        "<tr>
                        
                         <td>{$row['ID']}</td>
                         <td>{$row['NAME']}</td>
                         <td>{$row['DOMAIN']}</td>

                         <td>{$row['LANGUAGE1']}</td>
                         <td>{$row['LANGUAGE2']}</td>
                         <td>{$row['TOOL']}</td>
                         </tr>";
			              

            
           
               }
               echo '</tbody></table></div></div>';
              
      
               
            
            
            
            
            }}
               
             /*  echo '<button class="open-button" onclick="openForm()">Open Form</button>

               <div class="form-popup" id="myForm">
               
                 <form action="form_details.php" class="form-container" method="post">

                   <h1>Login</h1>
               
                   <label><b>Project Name</b></label>
                   <input type="text" placeholder="Enter Project Name" name="name" required>
               
                   <label for="psw"><b>Domain</b></label>
                   <input type="text" placeholder="Enter Domain" name="domain" required>
                   <label for="psw"><b>Language-1</b></label>
                   <input type="text" placeholder="Enter Language-1" name="lang1" required>
                   <label for="psw"><b>Language2</b></label>
                   <input type="text" placeholder="Enter Language-2" name="lang2" required>
                   <label><b>Tool</b></label>
                   <input type="text" placeholder="Enter Tool Name" name="tool" required>
               
                   <button type="submit" class="btn">Submit</button>
                   <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
                 </form>
               </div>';
            }*/
               else if($query2==NULL)
               {
                //header("Location:redirect_fail.html");
              //  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                echo "No project found for the current user.";
              //  echo '<button class="open-button" onclick="openForm()">Open Form</button>
              echo '<a href="" class="btn btn-success" data-toggle="modal" data-target="#modalContactForm">Launch Project Form</a>';
             
              echo '<div class="modal fade" id="modalContactForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                     
                      <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                     <div class="modal-header text-center">
                                           <h2 class="modal-title font-weight-bold">Bootstrap Modal Form</h2>
                                     </div>
                            <div class="modal-body mx-3">
                                  <div class="md-form mb-5">
                                      <i class="fa fa-user prefix grey-text"></i>
                                      <label data-error="wrong" data-success="right" for="name">Full Name:</label>
                                      <input type="text" id="name" class="form-control validate">
                                  </div>
                                 
                                  <div class="md-form mb-5">
                                    
                                      <label data-error="wrong" data-success="right" for="name">Domain</label>
                                      <input type="text" id="domain" class="form-control validate">
                                  </div>
                                  <div class="md-form mb-5">
                                    
                                      <label data-error="wrong" data-success="right" for="lang1">Language1:</label>
                                      <input type="text" id="lang1" class="form-control validate">
                                   </div>
                                   <div class="md-form mb-5">
                                    
                                   <label data-error="wrong" data-success="right" for="lang1">Language2:</label>
                                   <input type="text" id="lang2" class="form-control validate">
                                </div>
                                <div class="md-form mb-5">
                                    
                                   <label data-error="wrong" data-success="right" for="lang1">Tool:</label>
                                   <input type="text" id="tool" class="form-control validate">
                                  </div>
                   
                              </div>
                                  <div class="modal-footer d-flex justify-content-center">
                                  <button id="send" class="btn btn-info">Submit <i class="fa fa-paper-plane-o ml-1"></i></button>
                                  <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                  </div>
                          
                                 
                          </div>
                   </div>
              </div>
                      ';
               }


           


           
         //}
            
        /* function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
         }*/
       
        
      ?>

<!--

<h1>PROJECT REGISTRATION</h1>
      
      <form method = "post" action = "project.php">
         <table>
         <tr>
               <td>ID:</td>
               <td><input type = "number" name = "id"></td>
            </tr>
            
            <tr>
               <td>Name:</td> 
               <td><input type = "text" name = "name"></td>
            </tr>
            
            <tr>
               <td>Domain</td>
               <td><input type = "text" name = "domain"></td>
            </tr>
            <tr>
               <td>Language1</td>
               <td><input type = "text" name = "lang1"></td>
            </tr>
		<tr>
               <td>Language2</td>
               <td><input type = "text" name = "lang2"></td>
            </tr>
            <tr>
               <td>TOOL</td>
               <td><input typeinfoxt" name = "tool"></td>
            </tr>
		<tr>
               <td>USERID</td>info
               <td><input type = "name" name = "userid"></td>
            </tr>
            <tr>
               <td>
                  <input type = "submit" name = "submit" value = "Submit"> 
               </td>
            </tr>
         </table>
      </form>
      <
     --> 
    <?php include("footer.php");?> 
  