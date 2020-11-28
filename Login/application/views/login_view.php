<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Sign In</title>

  </head>
  <body>
 
      <div>
       <div>
         <form action="<?php echo site_url('login/auth');?>" method="post">
           <h2>Please sign in</h2>
           <?php echo $this->session->flashdata('msg');?>
           <label for="username">Username</label>
           <input type="email" name="email" placeholder="Email" required autofocus>
           <label for="password" >Password</label>
           <input type="password" name="password" placeholder="Password" required>
           <div>
             <label>
               <input type="checkbox" value="remember-me"> Remember me
             </label>
           </div>
           <button type="submit">Sign in</button>
         </form>
       </div>
       </div> <!-- /container -->
 
  </body>
</html>
