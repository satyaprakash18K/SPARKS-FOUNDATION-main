<?php  
include ("connection.php");
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="queries.css" />
    
<style>
  .btn--form{
    padding:0px;
    background-color:none;
  }
  
/* follow me template */
.made-with-love {
  margin-bottom: 40px;
  padding: 10px;
  clear: left;
  text-align: center;
  font-size: 20px;
  font-family: arial;
  color:#black;
}
.made-with-love i {
  font-style: normal;
  color: #f50057;
  font-size: 14px;
  position: relative;
  top: 2px;
}
.made-with-love a {
  color: black;
  text-decoration: none;
}
.made-with-love a:hover {
  text-decoration: underline;
}

</style>


     <script defer src="script.js"></script>  
    <title>SEND MONEY</title>
  </head>
  <body>
    <section class="section-cta" id="cta">
        <div class="container ">
         <div class="cta">
      
           <div class="cta-text-box">
            <h2 class="heading-secondary">SEND MONEY! </h2>
            <p class="cta-text">Send money within 10 Seconds!
                <br>Enter Receiver name,receiver account number and amount.
           </p>
           
            <form action ="" method="POST"
            class="cta-form" name="sign-up" netlify>
              <div>
                <label for="full-name">Full Name</label>
                <input id="full-name" type="text" placeholder="John Smith"
                name="fullname" required>
              </div>
      
              <div>
                <label for="email">Account No</label>
                <input id="email" type="number" placeholder="A132425" 
                name="accountno"
                required>
              </div>
      
         <div>
           <label for="email">Amount</label>
                <input id="email" type="number" placeholder="132425" 
                name="amount"
                required>
              </div>
              
              
                
                <button class="btn btn--form submit "><a  target="_self" href="INDEX.php" class="transfer"><input type="submit" id ="button" 
                name="submit">
                </a></button>
             
              </select>
              
              
              
            </form>
      
      
            
          </div>
          <div class="cta-img-box "  >
            <img src="images/bob.jpg"/>
          </div>
        </div>
        </div>
      
      
      </section>
      <div class="made-with-love">
      <a target="" href="INDEX.php">HOME PAGE</a>
    </div>
  </body>
</html>

<?php 
if(isset($_POST['submit'])){
$nm=$_POST['fullname'];
$an=$_POST['accountno'];
$at=$_POST['amount'];

if($nm!="" && $an!=""  && $at!="" )
{
  $query="INSERT INTO TRANSFER VALUES('$nm','$an','$at')";
 
$data=mysqli_query($conn,$query);



if($data){
  echo"data inserted into database";
}
}
else{
  echo"failed to insert data into inserted";
}
}
?>
