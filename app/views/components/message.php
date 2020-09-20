<?php 
        if(isset($_SESSION['message'])) {  ?>
        <div class="alert alert-success" role="alert">
          <?php  
          echo $_SESSION['message']; 
          session_unset(); 
          ?>
        </div>
<?php } ?>