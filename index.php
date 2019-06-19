<!DOCTYPE html>
<html>
<head>
  <?php 
    include('header.php'); 
  ?>
</head>
<body>

<div class="container">
 
  <div class="row">
    <?php 
      if(isset($_GET['menu'])){
        switch ($_GET['menu']) {
          
          default:
            include('pages/raffle.php');
            break;
          case 1:
            include('pages/attendance.php');
            break;
          case 2:
            include('pages/counters.php');
            break;
        }
      }else{
            include('pages/raffle.php');
      }
    ?>
  </div>

</div>
</body>
</html>