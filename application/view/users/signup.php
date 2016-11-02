<div class="container">
    <h2>Sign Up Test</h2>
    <div class="box">
        <h3>Sign Up</h3> <!-- This takes you to the addNewUser function in the user.php controller file -->
        <form action="<?php echo URL; ?>user/addNewUser" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="username" class="control-label">Username</label>
                        <input name="username" type="text" id="username"
                               autocomplete="off" class="form-control" required>
            </div>
            <div class="form-group">
                        <label for="email" class="control-label">Email</label>
                        <input name="email" type="email" id="email"
                               autocomplete="off" class="form-control" required>
            </div>
            <div class="form-group">
                        <label for="password" class="control-label">Password</label>
                        <input name="password" type="password" id="password"
                               autocomplete="off" class="form-control" required>
            </div>
             <!-- sign up -->
            <div class="shape-group">
                        <button name="submit_add_user" type="submit" class="btn btn-warning btn-block" >
                            Create your account</button>
            </div>
            
        </form>
    </div>
    <p></p>
    
    
</div>
