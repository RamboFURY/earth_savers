<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <!--jQuery library-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!--Latest compiled and minified JavaScript-->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Panels in Bootstrap</title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-xs-4 col-xs-offset-4">

                    <div class="panel panel-primary">
                        <div class="panel-heading"><h3>LOGIN</h3></div>
                        <div class="panel-body">
                          <form method="POST" action="#">
                          <div class="form-group">

                                  <label for="uname">User Name</label>
                                  <input type="text" class="form-control" id="uname" required="required" name="uname" placeholder="">
                              </div>



                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password" name="password" pattern=".{6,}" placeholder="" required="required">
                        </div>

                        <button type="submit" class="btn btn-primary btn-block" value="registration_submit">Submit</button><br>

                      </form>
                    </div>
                        <div class="panel-footer">
                        <p>Don't have an account? <a href="signup.php"><b>Register</b></a></p>
                        </div>
                    </div> </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
