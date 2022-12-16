
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <title>transaction history</title>

    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css"
    />
    
   
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script>
      $(window).on("load resize ", function() {
  var scrollWidth = $('.tbl-content').width() - $('.tbl-content table').width();
  $('.tbl-header').css({'padding-right':scrollWidth});
}).resize();
    </script> 
    <style>
      h1 {
  font-size: 30px;
  color: #fff;
  text-transform: uppercase;
  font-weight: 300;
  text-align: center;
  margin-bottom: 15px;
}
table {
  width: 100%;
  table-layout: fixed;
}
.tbl-header {
  background-color: rgba(255, 255, 255, 0.3);
  padding-right: 100px;
}
.tbl-content {
  height: 300px;
  overflow-x: auto;
  margin-top: 0px;
  border: 1px solid rgba(255, 255, 255, 0.3);
}
th {
  padding: 20px 15px;
  text-align: left;
  font-weight: 500;
  font-size: 12px;
  color: #fff;
  text-transform: uppercase;
}
td {
  padding: 15px;
  text-align: left;
  vertical-align: middle;
  font-weight: 300;
  font-size: 12px;
  color: #fff;
  border-bottom: solid 1px rgba(255, 255, 255, 0.1);
}

/* demo styles */

@import url(https://fonts.googleapis.com/css?family=Roboto:400,500,300,700);
body {
  background: -webkit-linear-gradient(left, #25c481, #25b7c4);
  background: linear-gradient(to right, #25c481, #25b7c4);
  font-family: "Roboto", sans-serif;
}
section {
  margin: 50px;
}

/* follow me template */
.made-with-love {
  margin-top: 40px;
  padding: 10px;
  clear: left;
  text-align: center;
  font-size: 20px;
  font-family: arial;
  color: #fff;
}
.made-with-love i {
  font-style: normal;
  color: #f50057;
  font-size: 14px;
  position: relative;
  top: 2px;
}
.made-with-love a {
  color: #fff;
  text-decoration: none;
}
.made-with-love a:hover {
  text-decoration: underline;
}

/* for custom scrollbar for webkit browser*/

::-webkit-scrollbar {
  width: 6px;
}
::-webkit-scrollbar-track {
  -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
}
::-webkit-scrollbar-thumb {
  -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
}

    </style>
     
   
  </head>

  <body>
    <section>
      <h1>All TRANSACTION HISTORY</h1>
      <div class="tbl-header">
      <table cellpadding="0" cellspacing="0" border="0">
          <thead>
            <tr>
              
              <th>NAME</th>
              <th>ACCOUNT NO</th>
              <th>Amount</th>
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
  <td>".$result['AMOUNT']."</td>
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
 
  <div class="made-with-love">
      <a target="" href="INDEX.php">HOME PAGE</a>
    </div>

  </body>
</html>
