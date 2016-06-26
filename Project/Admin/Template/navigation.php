     <nav class="navbar navbar-default" role="navigation">

               <ul class="nav navbar-nav">

                   <?php

                   $q="SELECT * FROM pages";
                   $r=mysqli_query($dbc,$q);

                   while($nav=mysqli_fetch_assoc($r)) {
                         ?>

                         <li<?php if($pageid==$nav['id']) { echo ' class="active"'; } ?>><a href="?page=<?php echo $nav['id']; ?>"><?php echo $nav['lable']; ?></a></li>

                   <?php } ?>

                   <li> <a href='#'>Dashboard</a></li>
                   <li> <a href='#'>Pages</a></li>
                   <li> <a href='#'>Users</a></li>
                   <li> <a href='#'>Settings</a></li>
                   <li> <a href='logout.php'>Logout</a></li>
               </ul>

             <ul class="nav navbar-nav navbar-right">
              <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo $user['first']; ?> <span class="caret"></span></a>
                     <ul class="dropdown-menu">
                         <li><a href="#">Action</a></li>
                         <li><a href="#">Another action</a></li>
                         <li><a href="#">Something else here</a></li>
                         <li role="separator" class="divider"></li>
                         <li><a href="#">Separated link</a></li>
                     </ul>
              </li>
             </ul>
     </nav> <!-- End of Main Navigation -->
