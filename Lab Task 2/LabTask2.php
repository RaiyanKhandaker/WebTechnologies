<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	
	<title>Lab Task 2 PHP Form Validation</title>
</head>
<body>
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
		<label for="Name">Name</label>
		<br>
        <input type="text" id="Name" name="Name">
        <br>
        <?php
	     if ($_SERVER["REQUEST_METHOD"] == "POST") 
	     {
	         $name = $_REQUEST['Name'];
	         if (empty($name)) 
	         {
	            echo "Name is empty";
	         }   

	     else {
	           echo $name;
	          }
	      }
	   ?>

        <br>
        <br>

        <label for="Email">Email</label>
        <br>
        <input type="text" id="Email" name="Email">

        <br>
         <?php
	     if ($_SERVER["REQUEST_METHOD"] == "POST") 
	     {
	         $Email = $_REQUEST['Email'];
	         if (empty($Email)) 
	         {
	            echo "Email is empty";
	         }   

	     else {
	           echo $Email;
	          }
	      }
	   ?>


        <br>
        <br>

        

        <label for="DateofBirth">Date of Birth</label>
        <br>
        dd
        <input type="text" id="DateofBirth" name="DateofBirth">/mm
        <input type="text" id="DateofBirth" name="DateofBirth">/yy
        <input type="text" id="DateofBirth" name="DateofBirth">
        <br>
        
        <?php
	     if ($_SERVER["REQUEST_METHOD"] == "POST") 
	     {
	         $DateofBirth  = $_REQUEST['DateofBirth'];
	         if (empty($DateofBirth)) 
	         {
	            echo "Date of Birth is empty";
	         }   

	     else {
	           echo $DateofBirth;
	          }
	      }
	   ?>

        <p>
        <label for="Gender">Gender</label>
        <input type="radio" name="Gender">Yes
        <input type="radio" name="Gender">No
        </p>

         

        <label for="Degree">Degree</label>
        <p>
        <input type="checkbox" name="Degree">SSC
        <input type="checkbox" name="Degree">HSC
        <input type="checkbox" name="Degree">BSc
        <input type="checkbox" name="Degree">MSc
        </p>

      


        <br>

       <label for="Blood Group">Blood Group</label>
       <select name="Blood Group" >
       <option>
       <option value=1 >A+
       <option value=2 >A-
       <option value=3 >B+
       <option value=4 >B-
       <option value=5 >O+
       <option value=6 >O-
       <option value=7 >AB+
       <option value=8 >AB-
       </select>

       <br>

       <input type="Submit" value="Submit">

	</form>

	

</body>
</html>