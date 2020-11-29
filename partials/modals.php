<!-- Login modal -->
<div id="loginModal" class="modal fade" role="dialog">
      <div class="modal-dialog modal-lg" role="content">
        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Login </h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>
          <div class="modal-body">
            <form method="post">
              <div class="form-row">
                <div class="form-group col-sm-4">
                  <label class="sr-only" for="uname">Username </label>
                  <input type="text" class="form-control form-control-sm mr-1" id="uname" name="uname" placeholder="Enter Username">
                </div>
                <div class="form-group col-sm-4">
                  <label class="sr-only" for="pw">Password</label>
                  <input type="password" class="form-control form-control-sm mr-1" id="pw" name="pw" placeholder="Password">
                </div>
                <div class="col-sm-auto">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox">
                    <label class="form-check-label"> Remember me</label>
                  </div>
                </div>
              </div>
              <div class="form-row">
                <button type="button" class="btn btn-secondary btn-sm ml-auto" data-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-primary btn-sm ml-1" id="signin" name="signin">Sign in</button>        
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- Sign Up modal -->
    <div id="SignupModal" class="modal fade" role="dialog">
      <div class="modal-dialog modal-lg" role="content">
        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Sign Up </h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>
          <div class="modal-body">
            <form method="post">
              <div class="form-group row">
                <label for="fullname" class="col-md-2 col-form-label">Full Name</label>
                <div class="col-md-10">
                    <input type="text" class="form-control" id="fullname" name="fullname" placeholder="name">
                </div>
            </div>
            <div class="form-group row">
                <label for="username" class="col-md-2 col-form-label">Username</label>
                <div class="col-md-10">
                    <input type="text" class="form-control" id="username" name="username" placeholder="username">
                </div>
            </div>
            <div class="form-group row">
              <label for="password" class="col-md-2 col-form-label">Password</label>
              <div class="col-md-10">
                  <input type="text" class="form-control" id="password" name="password" placeholder="Password">
              </div>
            </div>
            <div class="form-group row">
                <label for="email" class="col-md-2 col-form-label">Email</label>
                <div class="col-md-10">
                    <input type="email" class="form-control" id="email" name="email" placeholder="Email Id">
                </div>
            </div>
            <div class="form-group row">
              <label for="age" class="col-md-2 col-form-label">Age</label>
              <div class="col-md-10">
                  <input type="number" class="form-control" id="age" name="age" placeholder="Enter Age">
              </div>
            </div>
            <div class="form-group row">
                <label for="telnum" class="col-12 col-md-2 col-form-label">Contact Tel.</label>
                <div class="col-5 col-md-3">
                    <input type="tel" class="form-control" id="areacode" name="areacode" placeholder="Area code">
                </div>
                <div class="col-7 col-md-7">
                    <input type="tel" class="form-control" id="telnum" name="telnum" placeholder="Tel. number">
                </div>
            </div>
              <div class="form-row">
                <button type="button" class="btn btn-secondary btn-sm ml-auto" data-dismiss="modal">Cancel</button>
                <button type="submit" id="register" name="register" class="btn btn-primary btn-sm ml-1">Register</button>        
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

    
        <!-- Modal of Owner Identity Img -->
        <div id="ownerAuth" class="modal fade" role="dialog">
            <div class="modal-dialog modal-lg" role="content">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Owner Identity Verification: </h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <img id="ownerProofImg" src='' width=100% height=auto alt="checking"/>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal of Property paper Img -->
        <div id="propertyPaper" class="modal fade" role="dialog">
            <div class="modal-dialog modal-lg" role="content">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Property Verification: </h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <img id="propertyProofImg" src='' width=100% height=auto alt="checking"/>
                    </div>
                </div>
            </div>
        </div>