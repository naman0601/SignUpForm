<!DOCTYPE html>
<html lang="en">
   <head>
      <title>Registration Form</title>
   </head>
   <body>
      <center>
      <link href = "registration.css" type = "text/css" rel = "stylesheet" />    
        <h2>Sign Up</h2>    
        <form name = "form1" action="modified.php" method = "post" enctype = "multipart/form-data" >    
             
<p>
               <label for="firstName">First Name:</label>
               <input type="text" name="fname" id="fname">
            </p>
 
 <p>
               <label for="MiddleName">Miiddle Name:</label>
               <input type="text" name="mname" id="mname">
            </p>  

<p>
               <label for="lastName">Last Name:</label>
               <input type="text" name="lname" id="lname">
            </p>
 
             
<p>
               <label for="Gender">Gender:</label>
               <input type="text" name="sex" id="sex">
            </p>
 
             
<p>
               <label for="Password">Password:</label>
               <input type="password" name="pwd" id="pwd">
            </p>
 
             
<p>
               <label for="emailAddress">Email Address:</label>
               <input type="text" name="mail" id="mail">
            </p>
 
            <input type="submit" value="Submit">
         </form>
      </center>
   </body>
</html> 
