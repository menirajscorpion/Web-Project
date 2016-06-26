     <nav class="navbar navbar-default" role="navigation">

          <div class="container">

               <ul class="nav navbar-nav">

                   <?php

                   $q="SELECT * FROM pages";
                   $r=mysqli_query($dbc,$q);

                   while($nav=mysqli_fetch_assoc($r)) {

                         //echo '<li><a href=">?page='.$nav['id'].'">'.$nav['title'].'</a></li>';
                         ?>

                         <li<?php if($pageid==$nav['id']) { echo ' class="active"'; } ?>><a href="?page=<?php echo $nav['id']; ?>"><?php echo $nav['lable']; ?></a></li>


                   <?php } ?>

                   <!-- <li<?php if($pageid==1) { echo ' class="active"'; } ?>><a href='?page=1'>Home</a></li>          -->
                   <!-- <li<?php if($pageid==2) { echo ' class="active"'; } ?>><a href='?page=2'>About Us</a></li>      -->


                   <li> <a href='#'>FAQs</a></li>
                   <li> <a href='#'>Contact</a></li>
               </ul>
          </div>
     </nav> <!-- End of Main Navigation -->
