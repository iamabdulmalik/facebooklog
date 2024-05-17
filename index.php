<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>facebook login page</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
   <div class="box">
        <div class="title-box">
             <img src="fc.png" alt="Facebook">
             <p>Facebook help you connect and share with the people in your life.</p>
        </div>
        <div class="form-box">
          <form action="insert.php" method="post">
          <p>
               <label for="email">Email</label>
               <input type="text" name="email" id="email">
            </p>
            <p>
               <label for="password">Password</label>
               <input type="password" name="password" id="password">
            </p>
              <button type="submit">Log in</button>
              <a href="#">forget password</a>
        </form>
        <hr>
        <div class="create-btn">
            <a href="#">Create New Account</a>
        </div>
    </div>
   </div>

</body>
</html>