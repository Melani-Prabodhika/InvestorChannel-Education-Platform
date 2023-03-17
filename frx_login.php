<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Investor Channel</title>

<!-- Bootstrap -->
<link rel="stylesheet" type="text/css"  href="css/bootstrap.css">

<!-- Responsive -->
<link rel="stylesheet" type="text/css"  href="css/responsive.css">

</head>

<style>
    video{
        position: fixed;
        z-index: -1;
        right: 0;
        bottom: 0;
        top: 25px;
    }

    .container {
        position: fixed;
        width: 100%;
        height: 732.5px;
        margin-top: 24px;
        left: 0;
        background-color: rgba(0, 0, 0, 0.068);
    }

    .header h1{
        color: rgb(197, 223, 215);
        font-size: 50px;
        margin-bottom: 55px;
        text-align: center;
        padding-top: 60px;
        letter-spacing: 4px;
        font-weight: 800;
        font-family: sans-serif;
    }

    .main {
        text-align: center;
    }

    .main input {
        width: 700px;
        height: 50px;
        border-radius: 25px;
        background-color: rgba(0, 0, 0, 0.387);
        border: none;
        outline: none;
        padding-left: 38px;
        margin-top: 30px;
        box-sizing: border-box;
        color: #fff;
        font-size: 17px;
        margin-bottom: 20px;
    }

    .main input:hover{
        box-shadow: 2px 2px 5px #fff;
        border-radius: 25px;
        font-size: 16.5px;
    }

    .main button {
        padding-left: 0;
        width: 700px;
        height: 58px;
        margin-top: 100px;
        border-color: rgb(79, 78, 78);
        background-color: rgba(0, 0, 0, 0.578);
        letter-spacing: 1.5px;
        font-weight: 700;
        font-size: 25px;
        outline: none;
        border-radius: 10px;
        color: rgb(23, 182, 132);
    }

   .main button:hover{
        box-shadow: 2px 2px 5px #fff;
        border-radius: 10px;
        background-color: rgba(0, 0, 0, 0.898);
        font-size: 25.5px;
    }

    .main span{
        position: relative;
    }

    .main i {
        position: absolute;
        left: 15px;
        color: #fff;
        font-size: 16px;
        top: 2px;
    }

    .col{
        color: #fff;
    }
    .main label {
        font: 20px sans-serif;
        font-weight: bolder;
        color: rgb(225, 241, 236);
        padding-right: 350px;
        padding-bottom: 10px;
    }

    .main label:hover{
        color: rgb(97, 216, 178);
        font-size: 20.5px;
    }
     
    .header {
    padding-top: 0.3rem;
    }

    .header span {
        font: 1em sans-serif;
        color: #fff;
        padding-left: 20px;
        padding-top: 0.5rem;
    }

    .header span:hover {
        color: rgb(80, 245, 151);
    }
</style>

<header>
<div class="header" style="width: 100%; height: 25px; background-color: rgb(9, 37, 23); position: fixed; top: 0; left: 0;" >
    <a href="home.html"><span>Home</span></a>
</div>
</header>

<body>
  <div class="col-12">
    <div class="container">
      <div class="header">
        <h1> FRX-ACADEMY</h1>
      </div>
      <div class="main">
        <form action="login_1.php" method="post">
          <?php if (isset($_GET['error'])){ ?>
            <p class="error"><?php echo $_GET['error']; ?></p>
          <?php
          } ?>
          <span>
            <input type="text" placeholder="Username" name="uname" required>
          </span><br>
          <span>
            <input type="password" placeholder="Password" name="password" required>
          </span><br>
          <a href="forgot_password.php"><label>Forgot username or password?</label></a><br>
          <button class="col" type="button">LOGIN</button>
        </form>
      </div>
    </div>
      <video autoplay muted loop>
        <source src="video/abstract-plexsus-background-vol-2-3TMHTFT.mp4" type="Video/mp4">
      </video>
  </div>
</body>
</html>


