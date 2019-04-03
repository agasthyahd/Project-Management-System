$(document).ready(function(){
    $('#modalContactForm').on('click', '.btn-info', function(e){
    var vfname = $('#name').val();
    var vdomain = $('#domain').val();
    var vlang1 = $('#lang1').val();
    var vlang2 = $('#lang2').val();
    var vtool = $('#tool').val();
   
    
           $.post("proj.php", 
              { 
                 name:vfname,
                 domain:vdomain,
                 lang1:vlang1,
                 lang2:vlang2,
                 tool:vtool
              }
         // function(response,status){ 
        //    $("#result").html(response);
            
      //   }
      );
   // alert("The 'Save' button was pressed.");
         $('#modalContactForm').modal('hide');
  });
  });
 