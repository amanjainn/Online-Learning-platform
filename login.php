<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="loginstyle.css">
    <script src="https://kit.fontawesome.com/f3a9b11f28.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="loginstyling.css">
    <link rel="stylesheet" type="text/css" href="stylenew.css">
    <title>Login/Signup</title>
    
</head>
<body>
<ul class="main-nav">
 <li><a href="index.html">Home</a></li>
 <li><a class="active" href="login.php">Discussions</a></li>
<li><a href="articles.html">Articles</a></li>
<li><a href="resources.html">Resources</a></li>
 <li><a href="book-recommendation.html">Book-Recommendations</a></li>
 <li><a href="contact-us.html">Contact us</a></li>
          </ul>
<div class="container">
    <div class="row">
    <div class="col-lg-6">
    <h1>Hello  there, <br></h1>
<h1>welcome back</h1>
<form action="validation.php" method="post">

<div class="form-group">
<label>Username</label>
<input type="text"name="user" class="form-control">
</div>

<div class="form-group">
<label>Password</label>
<input type="password"name="password" class="form-control">
</div>

<button type="submit" class= "btn-btn-primary">Login</button>
<br>
<br>
<div class="item">

<button class="loginBtn loginBtn--facebook">
  Login with Facebook
</button>

<button class="loginBtn loginBtn--google">
  Login with Google
</button>
</div>
</form>
</div>

<div class="col-lg-6">
<h1>Get on Board</h1>
<form action="registration.php" method="post">

<div class="form-group">
<label>Username</label>
<input type="text"name="user" class="form-control">
</div>
<div class="form-group">
<label>Email</label>
<input type="email"name="email" class="form-control">
</div>

<div class="form-group">
<label>Password</label>
<input type="password"name="password" class="form-control">
</div>

<button type="submit" class= "btn-btn-primary">Signin</button>
<br>
<br>
<br>
<div class="item">

<button class="loginBtn loginBtn--facebook">
  Signup with Facebook
</button>

<button class="loginBtn loginBtn--google">
  Signup with Google
</button>
</div>
</form>


</div>

</div>
    
</body>
</html>