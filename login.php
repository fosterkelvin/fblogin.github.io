<?php
    include "header.php";
    require "dbconfig.php";

    if(isset($_POST['submit_insert'])){
        $uname = $_POST['uname'];
        $pass = $_POST['pass'];
        $query = "INSERT INTO account(UserName,Pass) VALUES (:UserName, :Pass)";
    
        $stmt = $conn->prepare($query);
        $stmt->execute([':UserName'=>$uname,':Pass'=>$pass]);
    
    }


?>

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#accountModal">
  Create Account
</button>

<!-- Modal -->
<div class="modal fade" id="accountModal" tabindex="-1" aria-labelledby="accountModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="accountModalLabel">Create your Account</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
        <form method="post" action="">
            <div class="modal-body">
                    User Name: <input type="text" name="uname" id="uname" class="form-control">
                    Password: <input type="text" name="pass" id="pass" class="form-control">
            </div>
            <div class="modal-footer">
                <input type="submit" class="btn btn-secondary" data-bs-dismiss="modal" value="Close"/>
                <input type="submit" name="submit_insert" class="btn btn-primary" value="Create"/>
            </div>
        </form>
    </div>
  </div>
</div>