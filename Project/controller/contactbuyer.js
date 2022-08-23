
            function validateForm (){
                let a = document.getElementById("contact").value;
      
                if(a=="" ){

                  document.getElementById("el").innerHTML = "Write something" ;
                  return false;
                }else{
                    document.getElementById("el").innerHTML = "submitted" ;
                  return true;
                }
            
            }
          