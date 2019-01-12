
<html>
<head>

  <style media="screen">
   body{
    background-image:url(1.jpg); ;
    background-position: center;
    background-attachment: fixed;
    background-size: 100%;
   }
  
    form{
      padding: 25px;
      text-align: center;
      font-size: 30px
    }
    #form{
      width: 500px;
      height: 500px;
      background-color: #f9f5f53d;
      margin: 0 auto;
      padding-top: 20px;
      margin-top: 100px;
      border: 25px solid black;
    }
    #btn{
      margin: 16px 32px;
      font-size: 16px;
      box-shadow: 1px 1px 1px white;
      color: white;
      background-color: black;
      transition: 0.4s;
      border-radius: 10px;
    }
    #btn:hover{
      background-color: #f5f5f5;
      color: black;
    }
    button,
  </style>
</head>
<body>
<div id="form">
     <form action="login.php" method="post">
     <h1>L O G I N</h1>

     <p>
     <label for="nis">    NISS    : </label>
     <input type="text" name="nis" >
     </p>

     <p>
     <label for="password">PASS   : </label>
     <input type="password" name="password" >
     </p>

     </select>
     </p>

     <p>
     <div class="sign">
     <input id="btn" type="submit" value="Login" name="login" >
     </div>
     </p>
     </form>
     </div>
     </body>
     </html>