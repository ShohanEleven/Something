
            function validateForm (){
                let a = document.getElementById("name").value;
                let b = document.getElementById("phono").value;
                let c = document.getElementById("email").value;
               
                
                if(a=="" && b=="" && c==""){

                  document.getElementById("hey").innerHTML = "Please fill up all the option" ;
                  return false;
                }else{
                    document.getElementById("hey").innerHTML = "submitted" ;
                  return true;
                }
            
            }
           