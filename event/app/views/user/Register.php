<!DOCTYPE html>
<html>
    <head>
        <title>Register</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <body>        
        <style>
        body{
            background-image: url("13.jpg");
            /*background-color: #9D00ff;    */
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: 100% 100%;
        }
            .container{
                height: 33rem;
                width: 25rem;
                backdrop-filter: blur(0.5px);
                overflow: hidden;
                padding: 20px;
                margin: 0 auto;
                border: groove white 0.5rem;
                position: relative;
                border-radius: 0.8rem;  
                margin-top: 50px;
                
            }
            .form-label {
                color: white;
                font-weight: bold;
                font-size: 30px;
                margin: 10px;

            }
            .form-control{
                height: 50px;
            }
            .btn{
                background-color: white;
            }
            .btn:hover{
                background-color: red;
                color: white;
            }
            
            </style>
        </head>

        <div class="container">
        <form action="UserController/register" method="post">
        <div class="mb-3 mt-3">
                <label for="fullname" class="form-label">Fullname:</label>
                <input type="text" class="form-control" id="fullname" placeholder="Enter fullname" name="fullname">
            </div>
            <div class="mb-3 mt-3">
                <label for="username" class="form-label">Username:</label>
                <input type="text" class="form-control" id="username" placeholder="Enter Username" name="Username">
            </div>
            <div class="mb-3">
                <label for="pwd" class="form-label">Password:</label>
                <input type="password" class="form-control" id="pwd" placeholder="Enter Password" name="Password">
            </div>
            <button type="submt" class="btn" name="submt">Register</button>
              <p>I already have an account<a href="">Login</a></p>

        </form>
        <!-- <form action="loginko.php" method="post">
         <button type="submt" class="btn" name="submt">Register</button>
        </form>
        <br>
        <br>
        <br>
        <form action="loginko.php" method="post">
         <button type="submt" class="btn" name="submt">Back</button>
        </form> -->
    </body>
</html>