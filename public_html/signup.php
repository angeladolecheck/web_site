<!--Angela Dolecheck-->
<!DOCTYPE html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>Pop Up Games Mini Golf</title>


<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/sandstone/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/stylesheet.css">

<style>
    h2 {
        text-align:center;
        font-size: 35px;
        font-family: Engravers MT;
        border-bottom: solid #078fe8;
        border-top: solid #078fe8;
        padding: 30px 0px 30px 0px;
    }
</style>

</head>



<body>

 <?php include '../resources/navigation.php'; ?>


<div class = "below_menu_container">




<h1 style="text-align:center;font-size: 35px;font-family: Engravers MT;
border-bottom: solid #078fe8;border-top: solid #078fe8;padding: 30px 0px 30px 0px;"> Pop Up Games</h1>

  <img src="img/logo.jpg" alt="Pop Up Games Logo"/>

</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<h1>Sign Up Page</h1>

<p>By creating an account, you will be able to keep updated on upcoming events and new games being added.</p>

<form style = "margin-left:20px; width:25%;">
    <div class="form-group">
        <label for="email">Email address:</label>
        <input type="email" class="form-control" id="email" placeholder = "Email">
    </div>
    <div class="form-group">
        <label for="pwd">Password:</label>
        <input type="password" class="form-control" id="pwd" placeholder = "Password">
    </div>
    <div class="form-group">
        <label for="pwd">Retype Password:</label>
        <input type="password" class="form-control" id="pwdretype" placeholder = "Password">
    </div>
    <div class="checkbox">
        <label><input type="checkbox"> Remember me</label>
    </div>
    <div class="checkbox">
        <label><input type="checkbox"> Receive News and Updates</label>
    </div>
    <button type="submit" class="btn btn-default">Sign Up</button>
</form>
<br>

   <?php include '../resources/footer.php'; ?>