<html>
   
   <head>
      <title>Paging Using PHP</title>
   </head>
   
   <body>
      <?php
         $dbhost = 'localhost';
         $dbuser = 'root';
         $dbpass = '';
         
         $rec_limit = 3;
         $conn = mysqli_connect($dbhost, $dbuser, $dbpass, 'examples');
         
         if(! $conn ) {
            die('Could not connect: ' . mysql_error());
         }
         //mysql_select_db('examples');
         
         /* Get total number of records */
         $sql = "SELECT count(id) FROM cars ";
         $retval = mysqli_query($conn, $sql );
         
         if(! $retval ) {
            die('Could not get data: ' . mysql_error());
         }
         $row = mysqli_fetch_array($retval);
         $rec_count = $row[0];
         
         if( isset($_GET{'page'} ) ) {
            $page = $_GET{'page'} + 1;
            $offset = $rec_limit * $page ;
         }else {
            $page = 0;
            $offset = 0;
         }
         
         $left_rec = $rec_count - ($page * $rec_limit);
         $sql = "SELECT id, name, year ". 
            "FROM cars ".
            "LIMIT $offset, $rec_limit";
            
         $retval = mysqli_query($conn, $sql);
         
         if(! $retval ) {
            die('Could not get data: ' . mysqli_error($conn));
         }
         
         while($row = mysqli_fetch_array($retval)) {
            echo "ID :{$row['id']}  <br> ".
               "NAME : {$row['name']} <br> ".
               "YEAR : {$row['year']} <br> ".
               "--------------------------------<br>";
         }
         $_PHP_SELF = &$_SERVER['PHP_SELF'];
         if( $page > 0 ) {
            $last = $page - 2;
            echo "<a href = \"$_PHP_SELF?page = $last\">Last 10 Records</a> |";
            echo "<a href = \"$_PHP_SELF?page = $page\">Next 10 Records</a>";
         }else if( $page == 0 ) {
            echo "<a href = \"$_PHP_SELF?page = $page\">Next 10 Records</a>";
         }else if( $left_rec < $rec_limit ) {
            $last = $page - 2;
            echo "<a href = \"$_PHP_SELF?page = $last\">Last 10 Records</a>";
         }
         
         mysqli_close($conn);
      ?>
      
   </body>
</html>