<?php
//start session
session_start();
require_once ("./include/header.php");
    require_once ("./php/component.php");
    require_once ("./php/db.php");
    $select_query="select * FROM products";
    $run_select_query=mysqli_query($conn,$select_query);
    $row_select_query=($run_select_query);
?>
<div class="container">
  <div class="row">
    <div class="col-md-3">
      <h1>for filter</h1>
    </div>
    <div class="col-md-9">
      <div class="row">

          <?php 
          if (mysqli_num_rows($row_select_query) > 0) {
              // output data of each row
              while($row = mysqli_fetch_assoc($row_select_query)) {
              component($row["product_title"],$row["product_price"],$row["product_img1"],$row["product_id"]);
          }
          } else {
          echo "0 results";
          }
        ?>  
      </div>
    </div>
  </div>
</div>

</body>
</html>