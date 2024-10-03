
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login form</title>
    <link rel="stylesheet" href="style.css ">
</head>
<body>
    <div class="box">
    <div class="form">
        <h2> sign in </h2>
        <div class="inputBox">
            <input type="text" required="required">
            <span>Username</span>
            <i></i>
</div>
<div class="inputBox">
    <input type="password" required="required">
    <span>password</span>
    <i></i>
</div>
<div class="links">
    <a href="#">Forgot password </a>
    <a href="#">Forgot Singup </a>
</div>



            <form action="index.php" method="post">
                
                <button id="btn" onclick="login()">Log In</button>
            </form>
        </div>
    </div>
    </div>
</div>
    <script>
        function login()
        {
            let username = document.getElementById('uname').value;
            let password = document.getElementById('password').value;

            if(username == "Hello" && password == "1234")
            {
                alert("LogIn Successfully !!");
            }
            else
            {
                alert("Username or Password Incorrect !!");
                event.preventDefault();
            }
        }

        function show()
        {
            let checkbox = document.getElementById('password');
            if(checkbox.type === "password")
            {
                checkbox.type = "text";
            }
            else
            {
                checkbox.type = "password";
            }
        }
    </script>
</body>
</html>


            
