<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hostel</title>
    <style>
        body{
    margin: 0;
    padding: 0;
    background: url(assets/img/hms.jpg);
    background-size: cover;
    background-position: fixed;
    font-family: sans-serif;
}
button{
    width : 250px;
    height : 50px;
    position: absolute;
  border:4px solid #888888;
  outline:none;
  background-color:#f4f5f6;
  border-radius: 40px;
  box-shadow:  -6px -20px 35px #ffffff, -6px -10px 15px #ffffff, -20px 0px 30px #ffffff, 6px 20px 25px rgba(0,0,0,0.2);
  transition: .13s ease-in-out;
  cursor:pointer;
  font-size: 20px;
  font-variant: small-caps;
}

.stdlogin{
    margin-top: 28%;
    margin-left:60px;
}

.admlogin{
    margin-top: 20%;
    margin-left:60px;
}
    </style>
</head>
<body>
    <button class = "stdlogin" onclick="window.location.href='stdlogin.php'">Residence Login</button>
    <button class = "admlogin" onclick="window.location.href='admlogin.php'">Admin Login</button>
    
</body>
</html>