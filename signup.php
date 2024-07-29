<!-- Button trigger modal -->
<!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#signup">
  Launch demo modal
</button> -->

<!-- Modal -->
<div class="modal fade" id="signup" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="signup">Signup for oNe Flip</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            <form  action="/shopping website/signuphandle.php" method="post">
                    <div class="form-group">
                    <label for="phone">phone number:</label>
                    <br>
                    <input type="tel" id="phone" name="phone" pattern="[0-9]{10}"/>
                    <br>
                    <small>Format: 123-456-7890</small>
                   </div>
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name">
                </div>
                    <div class="form-group">
                    <label for="Password">Password</label>
                    <input type="password" class="form-control" id="Password" name="Password">
                </div>
                <div class="form-group">
                    <label for="cpassword">Confirm Password</label>
                    <input type="password" class="form-control" id="cpassword" name="cpassword">
                </div>
               
                <div class="form-group">
                    <label for="loc">Address </label>
                    <textarea  class="form-control" id="loc" name="loc" ></textarea>
                </div>
                    <button type="submit" class="btn btn-primary">Submit</button>

           </form>
       </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
       
      </div>
    </div>
  </div>
</div>