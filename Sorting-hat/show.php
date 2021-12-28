<?php
require_once("./inlcudes/config.php");
$id = $_GET['id']; 
session_start();

$_SESSION['id'] = $id;

$result = mysqli_query($conn, "SELECT * FROM Person WHERE Person_id=$id");

if($row = mysqli_fetch_array($result))
{
$firstname = $row['Firstname'];
$lastname = $row['Lastname'];
$description = $row['Discription'];
$age = $row['Age'];
$power = $row['Power'];
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Select a house</title>
    <link rel="stylesheet" href="./styles/style.css">

</head>
<body>
  <div>
     <div class="person">
     <h1>Choose a house for <?php echo $firstname;?></h1>

      <p> Lastname:  <?php echo $lastname;?></p>
      <p> Description: <?php echo $description;?></p>
      <p> Age: <?php echo $age?></p>
      <p> Preffered super power: <?php echo $power;?></p>
    </div>
    <div>
      <form action="./controllers/sorting.php" method="POST">
      <input class="submit" type="submit" name="gr" value="Gryffindor" />
      <input class="submit" type="submit" name="ra" value="Ravenclaw" />
      <input class="submit" type="submit" name="hu" value="Huffelpuf" />
      <input class="submit" type="submit" name="sl" value="Slytherin" />
      </form>
    </div>


    <div>
      <?php
      // Next button 
      $next = mysqli_query($conn, "SELECT * FROM Person WHERE Person_id > $id order by Person_id ASC");

      $length = count($array);
      for ($i = 0; $i < $length; $i++) {
        print $array[$i];
      }
      if($row = mysqli_fetch_array($next))
      {

        echo '<a  href="show.php?id='.$row['Person_id'].'"><button class="next" type="button">Go to the next person</button></a>';  
      } 
      ?>
    </div>
  </div>



</body>
</html>