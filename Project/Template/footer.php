         <footer class="footer">
              <div class="container" >
                  <p> Footer</p>

                  <?php
                  $filename = 'count.txt';
                  $handle = fopen ($filename,'r');
                  $current = fread($handle,filesize($filename) );
                  fclose($handle);

                  $current_inc=$current + 1;
                  $handle = fopen ($filename,'w');
                  fwrite($handle,$current_inc);
                  fclose($handle);

                  echo 'This pages has been visited ';
                  echo $current_inc;
                  echo ' times';
                  ?>

             </div>

         </footer>