
<?php
session_start();
include_once("../model/loginmodel.php"); 
include_once("../model/projectmodel.php"); 


 //echo "hello";
class ProjectController
{
    public $model;
    public $name;
    public $password;
   public $view1;
   public $model2;
    
    public function ProjectController()
    {
        //echo "hello";
       
        //$name=$_POST["name"];

     //   $password=$_POST["password"];
       //  die('test');
     //  $model2=new model2;
    }

    public function userauth($name1,$password1)
    {//echo "hello";
    // $model->userauthi($name,$password);
        //   session_start();
        $flag=0;
        $model=new LoginModel;
        $name=$name1;
        $model2=new ProjectModel;
       // $view1 = new proj;
        $password=$password1;
       // echo "$name";echo "hello";
       if(empty($name1)||empty($password1))
        {   echo "Name or password is not entered please enter again";
            $flag=1;
        }
        $result=$model->userauthi($name,$password);
        if($result!=NULL&&$flag==0)
        {   
            echo "$result";
        
        }
        else if($flag==0)
        {   
            $_SESSION["username"]=$name;
            $_SESSION["password"]=$passworduserinput;
            //$query2=$model2->sqli($name);userinput
            
           //$_SESSION["query2"]=$query2;
            //print_r($_SESSION["query2"]);userinput
            //include("../view/project.php");
            //$view1->vw($query2);
            header("Location:../view/proj.php");
        }
    }
    public function userinput($name,$emailid,$qualification,$age,$password)
    {
        $model=new LoginModel;
        if(empty($name)||empty($emailid)||empty($qualification)||empty($age)||empty($password))
         {
            echo "Any one of the values is empty, please enter all the values";
         }
         else
        $model->sqlinp($name,$emailid,$qualification,$age,$password);


    }
    public function projdetails()
    {   $model2=new ProjectModel;
        $query2=$model2->projdtl($_SESSION["username"]);
        return $query2;

    }
    public function gvcntlr($name,$domain,$lang1,$lang2,$tool)
    {

            
        //  $result="One of the values entered is null, please enter the project form again";
         // echo "$result";     
         header("Refresh:0");
         if(empty($name)||empty($domain)||empty($lang1)||empty($lang2)||empty($tool))
          {
            //include("Location:../view/proj.php");
          //  header("Location:../view/proj.php");
          ;
            echo "One of the values entered is null, please enter the project form again";
            alert ("One of the values entered is null, please enter the project form again");
            // exit();
          }
          
          else
          {
            $projmdl=new ProjectModel;
            $projmdl->intpjf($name,$domain,$lang1,$lang2,$tool);

   
             
             
          
          }
    }
}
   


?>