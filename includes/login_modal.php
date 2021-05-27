

<!--INTERNSHALA WEB DEVELOPMENT TRAINING
FINAL PROJECT
BY:ANAND VUNNAM
FILE : login_modal.php-->

<div id="login_modal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <p>Don't you have an account?<a href="signup.php" class="blue">Register</a></p>
                <h4 class="modal-title text-uppercase">Login</h4>
            </div>
            <div class="modal-body">
                <div class="text-warning">Login to make purchase</div><br>
                <form method="post" action="login_script.php">
                          <div class="form-group">
                          <input type="email" name="email" class="form-control" placeholder="Email" required>
                          </div>
                          <div class="form-group">
                          <input type="password" name="password" class="form-control" placeholder="password" required>
                          </div>
                          <?php if(isset($_GET['login_error'])){?>
                              <script>alert('Please enter valid details')</script>
                        <?php  }?>
                          <button type="submit" class="btn btn-primary" >Login</button>
                      </form>
                </div>
                <div class="modal-footer">
                    <a href="forgot.php" class="blue">Forgot password?</a>
                </div>
        </div>
    </div>
</div>
