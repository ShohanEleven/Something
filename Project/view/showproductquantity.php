<?php
require_once('../model/db.php');
$sql = "SELECT * FROM product";
$result = mysqli_query($conn,$sql);
?>
<body>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="../asset/home.css">
    </head>
</body>
<div class=ssss> 
    <table border="1">
            <thead>
               
                <th> Product Quantity </th>
                
            </thead>
</div>
<tbody>
        
    <?php if(mysqli_num_rows($result)>0): ?>
    
        

        
      <?php while($delivery=mysqli_fetch_assoc($result)): ?>
      <tr>

      <td><?php echo $delivery['quantity']  ?></td>
  
      
     
      
      </td>

      </tr>
      <?php endwhile; ?>
    <?php endif; ?>
  </tbody>
        </table>
    </body>
    </html>
</body>
</html>