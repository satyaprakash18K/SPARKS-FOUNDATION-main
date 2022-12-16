<?php  
include ("connection.php");
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <title>All Customers</title>

    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css"
    />

    <link rel="stylesheet" href="customers-style.css" />
    <script>
      $(window)
  .on("load resize ", function () {
    var scrollWidth =
      $(".tbl-content").width() - $(".tbl-content table").width();
    $(".tbl-header").css({ "padding-right": scrollWidth });
  })
  .resize();
    </script>
  </head>

  <body>
    <section>
      <h1>All CUSTOMERS DETAILS</h1>
      <div class="tbl-header">
        <table cellpadding="0" cellspacing="0" border="0">
          <thead>
            <tr>
              
              <th>NAME</th>
              <th>ACCOUNT NO</th>
            </tr>
          </thead>
        </table>
      </div>
      <div class="tbl-content">
        <table cellpadding="0" cellspacing="0" border="0">
          <tbody> 
          <?php
include("connection.php");
$query = "SELECT  * FROM TRANSFER";
$data=mysqli_query($conn,$query);
$total =mysqli_num_rows($data);


if($total !=0){
 
  while($result=mysqli_fetch_assoc($data))
{
  echo"
  <tr>
  <td>".$result['NAME']."</td>
  <td>".$result['ACCOUNT NO']."</td>
  
  </tr>";
}
}
else{
  echo"no records found";
}
?>
          </tbody>
        </table>
      </div>
    </section>

    <!-- follow me template -->
    <div class="made-with-love">
      <a target="" href="INDEX.php">HOME PAGE</a>
    </div>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

   
  </body>
</html>
