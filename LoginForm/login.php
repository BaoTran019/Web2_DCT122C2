<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>LogIn</title>
</head>

<body>
    
    <div class="wrapper">
        
        <form action="../index.php">
            <h1>Login</h1>
            
            <div class="input_box">
                <input type="text" placeholder="username" required>
                <i class='bx bxs-user'></i>
            </div>
            <div class="input_box">
                <input type="password" placeholder="password" required>
                <i class='bx bxs-lock-alt' ></i>
            </div>

            <div class="remember_forgot">
                <label> <input type="checkbox"> Remember me </label>
                <a href="#">Forgot password?</a>
            </div>
            
            <button type="submit" class="button">Login</button>
            <div class="register_link">
                <p>Don't have an account? <a href="#">Register</a></p>
            </div>
        </form>   

    </div>

</body>

</html>