<!DOCTYPE html>

 <html lang="en" class="no-js">
    <head>
        <meta charset="UTF-8" />
       
        <title>Login</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <link rel="shortcut icon" href="../favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="css1/demo.css" />
        <link rel="stylesheet" type="text/css" href="css1/style3.css" />
		<link rel="stylesheet" type="text/css" href="css1/animate-custom.css" />
    </head>
	<?php 
							
							
// Start session
session_start(); 

// Username and password
$ID = "admin";
$pass = "prcspunjab786";

$ID2 = "admin2";
$pass2 = "prcspunjab7862";

if (isset($_POST["username"]) && isset($_POST["password"])) { 
    if ($_POST["username"] === $ID && $_POST["password"] === $pass) { 
		$_SESSION["inloggedin"] = true; 
		header("Location: search.php"); 
		exit; 
    }
	if ($_POST["username"] === $ID2 && $_POST["password"] === $pass2) { 
		$_SESSION["inloggedin"] = true; 
		header("Location: search2.php"); 
		exit; 
    }	
        // Wrong login - message
    else {
		$wrong = "WRONG  ID OR password, the system could not log you in";
		echo $wrong;
	} 
		
}
?>
    <body>
        <div class="container">
            
            
            <header>
                <h1> <span>Get Registered</span></h1>
				
            </header>
            <section>				
                <div id="container_demo" >
                    
                    <a class="hiddenanchor" id="toregister"></a>
                    <a class="hiddenanchor" id="tologin"></a>
                    <div id="wrapper">
                        <div id="login" class="animate form">
                            <form  action="login.php" method="post"> 
                                <h1>Log in</h1> 
                                <p> 
                                    <label for="username" class="uname" data-icon="u" > Your email or username </label>
                                    <input id="username" name="username" required="required" type="text" placeholder="myusername or mymail@mail.com"/>
                                </p>
                                <p> 
                                    <label for="password" class="youpasswd" data-icon="p"> Your password </label>
                                    <input id="password" name="password" required="required" type="password" placeholder="eg. X8df!90EO" /> 
                                </p>
                                <p class="keeplogin"> 
									<input type="checkbox" name="loginkeeping" id="loginkeeping" value="loginkeeping" /> 
									<label for="loginkeeping">Keep me logged in</label>
								</p>
                                <p class="login button"> 
                                    <input type="submit" value="Login" /> 
								</p>
                                
                            </form>

                        </div>

                        
						
                    </div>
                </div>  
            </section>
        </div>
    </body>
</html>