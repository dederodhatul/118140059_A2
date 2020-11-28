<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Welcome</title>
    
  </head>
  <body>
    <div>
      <div>
      <nav>
              <button type="button" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              </button>
             
              <ul>
                <!--akses admin-->
                <?php if($this->session->userdata('level')==='administrator'):?>
                 <nav>
                  <li><a href="#">Dashboard</a></li>
                  <li><a href="#">Posts</a></li>
                  <li><a href="#">Pages</a></li>
                  <li><a href="#">user</a></li> 
                 </nav>
                  
                <!--akses USER-->
                <?php elseif($this->session->userdata('level')==='user 1'):?>
                  <nav>
                  <li><a href="#">Dashboard</a></li>
                  <li><a href="#">Pages</a></li>
                  <li><a href="#">profil</a></li>
                  </nav>
                 

                  <?php elseif($this->session->userdata('level')==='user 2'):?>
                  <nav>
                  <li><a href="#">Dashboard</a></li>
                  <li><a href="#">Pages</a></li>
                  <li><a href="#">profil</a></li>
                  </nav>


                <?php endif;?>
              </ul>
              <ul>
                <li><a href="<?php echo site_url('login/logout');?>">Sign Out</a></li>
              </ul>
            </div>
          </div>
        </nav>
 
        <div>
          <h1>Welcome Back <?php echo $this->session->userdata('username');?></h1>
        </div>
 
      </div>
    </div>
 
  </body>
</html>