<!DOCTYPE html>
 <head></head>
 <body>

  <?php
  $nam = $password = $newpass = "";
  $namEr = $pasEr = $curpasEr = $repassEr = "";

  if ($_SERVER["REQUEST_METHOD"] == "POST")
  {
    $name = test_input($_POST["name"]);
    if (empty($_POST["name"]))
    {
     $namEr = "Insert your Name";
    }
  else
  {
  $arr = str_split($name );

  if($arr[0] == '.' or $arr[0] == '-' or $arr[0] == '_')
  {
   $namEr= "Must start with a letter";
  }
  else
  {
    $namEr= "You have to give atleast 2 characters";
     
    }
   }
  $a=0;
  $password = $_POST["Pass"];
  if (empty($_POST["Pass"]))
  {
   $pasEr = "Insert your password";
   }

  else
  {
   $arr2 = str_split($password );
   if(strlen($password) >= 8 )
  {
   for ($i=0; $i < strlen($password) ; $i++)
  {
   if( $arr2[$i]=="@" or $arr2[$i]=='#' or $arr2[$i]=='$' or $arr2[$i]=='%')
   {
  
   $a=1;
   break;
   }
  }

  if($a==0)
  {
   $pasEr = "Your password must include special charectar !)(*$@#$^&?/";
   }
  }

  else
   {
    $pasEr= "Your password must contain atleast 8 Charecter";
    }
   }

  }

    function test_input($data)
    {
     $data = trim($data);
     $data = stripslashes($data);
     $data = htmlspecialchars($data);
     return $data;
     }
    ?>

   <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">

   <fieldset>

    <legend><h3>LOGIN</h3></legend>

    <table>
    <tr>
    <td ><label>User Name</label></td>
    <td>: <input type="text" name="name" size="25"><span class="err"><?php echo $namEr;?></span></td>
    </tr>

    <tr>
    <td ><label>Password</label></td>
    <td>: <input type="text" name="Pass" size="25"><span class="err"><?php echo $pasEr;?></span></td>
    </tr>
    </table>

    <table>
    <tr>
    <td>
    <input type="checkbox" name="Remember_Me">
    <label >Remember Me </label>
    </td>
    </tr>
    </table>

    <br>

   
   <input type="submit"> 

  </fieldset>
   <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
     echo "$name";
     echo "<br>";
     echo "$password";
    }
   ?>
  </form>
 </body>
</html>