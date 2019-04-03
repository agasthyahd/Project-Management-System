
<?php
include_once("loginmodel.php");
include_once("connec.php");
class ProjectModel extends Connection
{ 
    public function projdtl($NAME)
    {
   

            /* $q="INSERT INTO PROJECT values('$id','$name','$domain','$lang1','$lang2','$tool','$userid')";
                $check=mysqli_query($conn,$q);
                if(!$check)
                {
                    //header("Location:redirect_fail.html");            
                        echo "Error: " . $sql . "<br>" . mysqli_error($conn);

                }
                $query = mysqli_query($conn,"SELECT * FROM PROJECT");*/
                
                
                
                
                $query2 = mysqli_query($this->conn,"SELECT * FROM PROJECT WHERE USERID IN (SELECT ID from USER where (NAME='$NAME'))");   
                if(mysqli_num_rows($query2)>0)

                {
                        return $query2;
                }
                else
                 return NULL;
    }
    public function nfpjr()
    {
               
                $query = mysqli_query($this->conn,"SELECT * FROM PROJECT");
                $id=mysqli_num_rows($query)+1;
                return $id;


    }
    public function intpjf($name,$domain,$lang1,$lang2,$tool)
    {
               
                $obj=new ProjectModel;
                $lgnmdl=new LoginModel;
                $id=$obj->nfpjr();
                $userid2=$lgnmdl->getid();
        $q="INSERT INTO PROJECT values('$id','$name','$domain','$lang1','$lang2','$tool','$userid2')";
           
        $check=mysqli_query($this->conn,$q);
        if(!$check)
           {
             //header("Location:redirect_fail.html");            
             echo "Error: " . $sql . "<br>" . mysqli_error($this->conn);
                
           }
           
        
           




    }

}
?>