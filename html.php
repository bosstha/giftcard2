
<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8" />
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <title>Gift Card Code</title>
   <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
   <div align="center" style="margin-top: 20%;">
       <div>
           <?php
               if(isset($_SESSION['errorMessage'])){?>
                   <div style="background:pink;color:red;font-weight:bold">
                       <?= $_SESSION['errorMessage'] ?>
                   </div>
               <?php
               unset($_SESSION['errorMessage']);
           }
           ?>
       </div>
       <form action="server.php" method="POST">
               <div>
                   <label for="giftCode">Gift Code</label>
                   <input type="text" name="giftCode" id="giftCode" placeholder="Enter Gift Code" required/>
               </div>
               <div>
                   <label for="password">Password</label>
                   <input type="text" name="password" id="password" placeholder="Enter Gift Code" required/>
               </div>
               <button type="submit" name="pay_with_code">Submit</button>
       </form>
   </div>
</body>
</html>
