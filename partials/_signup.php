<!-- Modal -->
<div class="modal fade" id="signup" tabindex="-1" role="dialog" aria-labelledby="signupLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="signupLabel">Sign up into system</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          
      <form action="partials/handle_signup.php" method ="POST">
        enter your username :
        <input type="text" value="" name ="user">
        <br><br>
        enter your password :
        <input type="password" name ="password">
        <br><br>
        enter your email :
        <input type="email" name ="email">
        <br><br>
        <input type="submit" class="btn btn-success"value="Signup">
        <input type="reset" class="btn btn-success"value="Reset">
        
        </form>


      </div>
    
    </div>
  </div>
</div>