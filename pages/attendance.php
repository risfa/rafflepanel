<?php 
  include('conn.php');
  $nama_table = "users";
  $datanya = "";
  if(isset($_POST['rfid_code'])){
    $query  = "SELECT * FROM $nama_table WHERE Rfid = '$_POST[rfid_code]'";
    $result = $sql->query($query);
    $datanya = $result->fetch_row();

    $queryupdate = "UPDATE $nama_table SET attendance = 'Y' WHERE Rfid = '$_POST[rfid_code]'";
    // echo $queryupdate;
    $result = $sql->query($queryupdate);

    // if(empty($datanya[0])){
    //   echo "<script>alert('KOSONG')</script>";
    // }else{
    //   echo "<script>alert('ADA')</script>";
    // }
  }
?>

<br>
<br>
<br>
<br>
<br>
<br>
<div class="container-fluid">
<div class="col-md-12">

  <div style=" width: 96%; height: 200px; position: absolute; z-index: 9999999;" id="StartScreen"><br>
    <form method="post">
      <center><br><br>
        <input type="text" name="rfid_code"  autofocus="" style="height: 60px; font-size: 40px; text-align: center; padding: 10px; background:none; color: gold; border: 1px gold solid; border-radius: 5px;"><br>
        <br>
        <div style="color: gold; font-size: 50px;">
          <?php 
            if(!empty($datanya[0])){
              echo "Welcome ".$datanya[1]." - ".$datanya[2];
            }else if(empty($datanya[0])){
              echo "Sorry, your card is not registered. Please contact the support";
            }
          ?>
        </div>
      </center>
    </form>

  </div>

    





<style type="text/css">
  #PanelShuffleResult{
    background-image: url('images/assets/winnergif.gif');
    color:gold;
    background-repeat: no-repeat;
    background-size: 100%;
  }
  .goldButton{
    transition: 0.9s;
    background:none; color:gold; border: 1px solid gold;
  }
  .goldButton:hover{
    background:gold; color:black; border: 1px solid gold;
  }
  .goldButton2{
    transition: 0.9s;
    background:gold; color:black; border: 1px solid gold;
  }
  .goldButton2:hover{
    background:none; color:gold; border: 1px solid gold;
  }
</style>