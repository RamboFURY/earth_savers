
 <?php require 'common.php'; ?>

        <div class="container">
            <div class="row">
                <div class="col-xs-4 col-xs-offset-4">
<br><br><br>
                    <div class="panel panel-primary">
                        <div class="panel-heading"><h3>REGISTER</h3></div>
                        <div class="panel-body">
                          <form method="POST" action="#">
                          <div class="form-group">

                                  <label for="uname">User Name</label>
                                  <input type="text" class="form-control" id="uname" required="required" name="uname" placeholder="Create Your Unique Username.">
                              </div>

                    <div class="form-group">

                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" required="required" name="name" placeholder="Enter Your Full Name.">
                        </div>
                        <div class="form-group">

                                <label for="mob">Mobile</label>
                                <input type="tel" class="form-control" id="mob" required="required" name="mob"  placeholder="Enter Your Ten Digit Mobile Number.">
                            </div>

                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password" name="password" pattern=".{6,}" placeholder="Create A Strong Password." required="required">
                        </div>
                        <div class="form-group">

                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" required="required" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" placeholder="Enter Your Email To Get Registered With.">
                            </div>
                        <button type="submit" class="btn btn-primary btn-block" value="registration_submit">Submit</button><br>

                      </form>
                    </div>
                        <div class="panel-footer">
                        <p>Already a member? <a href="login.php"><b>LOGIN</b></a></p>
                        </div>
                    </div> </div>
                </div>
            </div>
        </div>
    </div>
