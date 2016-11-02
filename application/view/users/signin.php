<div class="container">
    <h2>Sign In Test</h2>
    <div class="box">
        <h3>Sign In</h3>
        <form action="<?php echo URL; ?>user/signInUser" method="POST">
            <div class="form-group">
                <label for="username" class="control-label">Username</label>
                        <input name="username" type="text" id="username"
                               autocomplete="off" class="form-control" required>
            </div>
            
            <div class="form-group">
                        <label for="password" class="control-label">Password</label>
                        <input name="password" type="password" id="password"
                               autocomplete="off" class="form-control" required>
            </div>
             <!-- sign up -->
            <div class="shape-group">
                        <button name="signin" type="submit" class="btn btn-warning btn-block" >
                            Sign In</button>
            </div>
            
        </form>
    </div>
    <p></p>
    
    
</div>


