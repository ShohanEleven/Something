
            function validateForm (){
                let a = document.getElementById("order_serial").value;
                let b = document.getElementById("delivery_state").value;
                let c = document.getElementById("quantity").value;
                let d = document.getElementById("due_amount").value;
                
                if(a=="" && b=="" && c==""&& d==""){

                  document.getElementById("show").innerHTML = "Please fill up all the option" ;
                  return false;
                }else{
                    document.getElementById("show").innerHTML = "submitted" ;
                  return true;
                }
            
            }
           
            
    
         