<!doctype html>
<head>
<meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
  <title>Percentage Calculator</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<style>
body {
  color: #999;
  background: #f5f5f5;
  font-family: 'Roboto', sans-serif;
}
.center-div{
  height: 100vh;
  display: flex;
  justify-content: center;
  align-items: center;
}
.form-control, .form-control:focus, .input-group-addon {
  border-color: #e1e1e1;
      border-radius: 0;
}
.signup-form {
  width: 390px;
  margin: 0 auto;
  padding: 30px 0;
}
.signup-form h2 {
  color: #636363;
      margin: 0 0 15px;
  text-align: center;
  }
  .signup-form .lead {
      font-size: 14px;
  margin-bottom: 30px;
  text-align: center;
}
  .signup-form form {		
  border-radius: 1px;
    margin-bottom: 15px;
      background: #fff;
  border: 1px solid #f3f3f3;
      box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
      padding: 30px;
  }
.signup-form .form-group {
  margin-bottom: 20px;
}
.signup-form label {
  font-weight: normal;
  font-size: 13px;
}
.signup-form .form-control {
  min-height: 38px;
  box-shadow: none !important;
  border-width: 0 0 1px 0;
}	
.signup-form .input-group-addon {
  max-width: 42px;
  text-align: center;
  background: none;
  border-width: 0 0 1px 0;
  padding-left: 5px;
}
  .signup-form .btn {        
      font-size: 16px;
      font-weight: bold;
  background: #19aa8d;
      border-radius: 3px;
  border: none;
  min-width: 140px;
      outline: none !important;
  }
.signup-form .btn:hover, .signup-form .btn:focus {
  background: #179b81;
}
.signup-form a {
  color: #19aa8d;
  text-decoration: none;
}	
.signup-form a:hover {
  text-decoration: underline;
}
.signup-form .fa {
  font-size: 21px;
}
.signup-form .fa-paper-plane {
  font-size: 17px;
}
.signup-form .fa-check {
  color: #fff;
  left: 9px;
  top: 18px;
  font-size: 7px;
  position: absolute;
}

</style>
<body>


<div class="center-div">
    <div class="signup-form">
      <form action="next.php" method="post">
        <h2>Percentage Calculator</h2>
        <div class="form-group">
          <div class="input-group">
            <b>Registration number: </b>
            <input type="number" class="form-control" name="reg"  placeholder="Enter Registration no." min="1000000" max="99999999" required="required"/>
          </div>
        </div>
        <div class="form-group">
          <div class="input-group">
        <b>  Open Source: </b>
            <input type="number" class="form-control" name="c1" min="0" max="100" required="required">
          </div>
        </div>


        <div class="form-group">
          <div class="input-group">
         <b> Data Analysis:</b>
            <input type="number" class="form-control" name="c2" min="0" max="100" required="required">
          </div>
        </div>

        <div class="form-group">
          <div class="input-group">
        <b>  Database Managment: </b>
            <input type="number" class="form-control" name="c3" min="0" max="100" required="required">
          </div>
        </div>

        <div class="form-group">
          <div class="input-group">
          <b> Storage Management </b>
            <input type="number" class="form-control" name="c4" min="0" max="100" required="required">
          </div>
        </div>

        <!-- <div class="form-group"> -->
          <input type="submit" value="Calculate" name="sub" class="btn btn-primary btn-block btn-lg" />
        <!-- </div> -->
      </form>
    </div>
  </div>
</body>