<!-- Button trigger modal -->
<!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#signup">
  Launch demo modal
</button> -->

<!-- Modal -->
<div class="modal fade" id="login" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="login">Login oNe Flip</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            <form  action="/shopping website/loginhandle.php" method="post">
                  <div class="form-group">
                    <label for="phone">phone number:</label>
                    <br>
                    <input type="tel" id="phone" name="phone" pattern="[0-9]{10}"/>
                    <br>
                    <small>Format: 123-456-7890</small>
                  </div>
                  <div class="form-group">
                    <label for="Password">Password</label>
                    <input type="password" class="form-control" id="Password" name="Password">
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