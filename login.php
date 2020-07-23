<?php 

	if(isset($_POST["submit"])){  
  
		

  		    $user=$_POST['username'];  
    		$pass=$_POST['password'];

    		$con=new mysqli('localhost','root','','login'); 
  			$qu="SELECT * FROM user WHERE username='$user'";
    		$result=$con->query($qu);
    		
    			while($row=$result->fetch_assoc())  
    			{  
    				$dbusername=$row['username'];  
    				$dbpassword=$row['password'];
    
    				if($user == $dbusername && md5($pass) == $dbpassword)  
    				{   
    					header("Location: main.html"); 
    				}  
    				else 
    				{  
    					echo "Invalid username or password!";  
    				}  
  				}
			
		
	}
	
 ?>