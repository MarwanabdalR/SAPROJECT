<!DOCTYBE html>
<html>
    <head>
        <title> login </title>
        <link rel="stylesheet" type="text/css" href="log_style.css">
        <style>
            
        </style>
    </head>
    <body>
        <div class="container">
            <div class="screen">
                <div class="screen__content">
                    <form class="login" action="login.php" method="post">
                        <?php if(isset($_GET['error'])) { ?>
                            <p class="error"> <?php echo $_GET['error']; ?> </p>
                            <?php } ?>
                            <div class="login__field">
                                <i class="login__icon fas fa-user"></i>
                                <input type="text" class="login__input" name="uname" placeholder="User Name">
                            </div>
                            <div class="login__field">
                                <i class="login__icon fas fa-lock"></i>
                                <input type="password" class="login__input" name="password" placeholder="Password">
                            </div>
                            <button class="button login__submit">
                                <span class="button__text">Log In Now</span>
                                <i class="button__icon fas fa-chevron-right"></i>
                            </button>				
                    </form>
                    
                    <div class="social-login">
                        <img id='company_logo' src="header_img/header.png" alt="Logo" width="150px">
                        <div class="social-icons">
					<a href="#" class="social-login__icon fab fa-instagram"></a>
					<a href="#" class="social-login__icon fab fa-facebook"></a>
					<a href="#" class="social-login__icon fab fa-twitter"></a>
				</div>
			</div>
		</div>
		<div class="screen__background">
			<span class="screen__background__shape screen__background__shape4"></span>
			<span class="screen__background__shape screen__background__shape3"></span>		
			<span class="screen__background__shape screen__background__shape2"></span>
			<span class="screen__background__shape screen__background__shape1"></span>
		</div>		
	</div>
</div>

        <!-- <form action="login.php" method="post">
            <h2>LOGIN</h2>
            <?php //if(isset($_GET['error'])) { ?>
                  <p class="error"> <?php //echo $_GET['error']; ?> </p>
            // } ?>
            <lable>User Name</lable>
            <input type="text" name="uname" placeholder="User Name"><br>
            <lable>Password</lable>
            <input type="password" name="password" placeholder="Password"><br>
            <button tybe="submit">LOGIN</button>
        </form> -->
    </body>
</html>
