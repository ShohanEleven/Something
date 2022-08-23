function validateForm (){
    let a = document.getElementById("msg").value;

    if(a=="" ){

      document.getElementById("max").innerHTML = "Write something" ;
      return false;
      

    }else{
        document.getElementById("max").innerHTML = "submitted" ;
      return true;
       
        
         
    }

  }
