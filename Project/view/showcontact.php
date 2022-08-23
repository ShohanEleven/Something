<html>
<head>
    <title>Ajax Example</title>
</head>
<body>
    <h1 id="head"> Contact Buyer</h1>
    <form method="POST" action="">
    <table>
       
        <tr>
         <td> 
           
                 Send Message: 
                 <input type="text" id="contact" name="contact" >
                
                 <br><br>
           
         </td>
     
 </tr>
 </table>
        
        <input type="button" id="click" name="submit" value="submit" onclick="ajax()"> 
        <input type="button" id="click" name="submit" value="Click" onclick="alert('test')"> <br><br>
    </form>
    <script>

        function ajax(){
            let rating = document.getElementById('contact').value;
            let xhttp = new XMLHttpRequest();
                //xhttp.open('GET', 'userCheck.php?username='+username, true);
                xhttp.open('POST', '../controller/contact.php', true);
                xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                xhttp.send('contact='+contact);

                //document.getElementById('head').innerHTML = xhttp.responseText;
                xhttp.onreadystatechange = function (){

                    if(this.readyState == 4 && this.status == 200){
                        //alert(this.responseText);
                        document.getElementById('head').innerHTML = this.responseText;
                    }
                } 
        }

    </script>
</body>
</html>