
function validateForm (){
              let a = document.getElementById("date").value;
              let b = document.getElementById("month").value;
              let c = document.getElementById("year").value;
             
              
              if(a=="" && b=="" && c==""){

                document.getElementById("bro").innerHTML = "Please fill up all the option" ;
                return false;
              }else{
                  document.getElementById("bro").innerHTML = "submitted" ;
                return true;
              }
          
          }
         