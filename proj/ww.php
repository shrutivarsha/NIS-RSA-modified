<html>
<head>
<link rel="stylesheet" href="ww_css.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
 $("#manya").click(function() {
     if($("#comment").val()!="")
	{
        document.getElementById("p1").innerHTML+=$("#comment").val()+"<br>";
	$('#comment').val('');
	}
	if(file.files.length != 0)
	{
 	document.getElementById("p1").innerHTML+="chosen file is sent"+"<br>";
	$('#file').val('');
	}
      });
   $(".heading-compose").click(function() {
      $(".side-two").css({
        "left": "0"
      });
    });
    $(".newMessage-back").click(function() {
      $(".side-two").css({
        "left": "-100%"
      });
    }); 
   
});
</script>

</head>
<body align="center">
    <div  class="col-sm-12 conversation">
      <div class="row heading">
        <div class="col-sm-2 col-md-1 col-xs-3 heading-avatar">
          <div class="heading-avatar-icon">
            <img src="https://bootdey.com/img/Content/avatar/avatar6.png">
          </div>
        </div>
	
        <div class="col-sm-10 col-xs-13 heading-name">
          <a class="heading-name-meta"><?php echo $_GET['user2'];?>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	</a> </div>
      </div>

      <div class="row message" id="conversation">
        <div class="row message-previous">
          <div class="col-sm-12 previous">
            <a onclick="previous(this)" id="ankitjain28" name="20">
            Share Files!<br>
            </a><br>
	    <b>
      <?php
$conn= new mysqli("localhost","root","","secure_chat");
$b = $_GET['email'];
$a= $_GET['email'];
  $u2 = $_GET['user2']; 
  $sql = "select file from ".$u2. " where name ='$a'";
  $result = $conn -> query($sql);
 
if($result){ 
  if ($result->num_rows > 0) {
    while($row = $result -> fetch_assoc()) {
      ?><a href="cover1/<?php echo $row['file'];?>"><?php
      echo "<p align='left'>".$row['file']."</p>";
      echo "</a>";     
    }
  }
}

$sql = "select file from ".$a. " where name ='$u2'";
$result = $conn -> query($sql);

if($result){
if ($result->num_rows > 0) {
  while($row = $result -> fetch_assoc()) {
    ?><a href="cover1/<?php echo $row['file'];?>"><?php
    echo "<p align='right'>".$row['file']."</p>";
    echo "</a>";     
  }
}
}


if(isset($_POST['manya']))
{
  
//   $sql = "select file from ".$a. " where name ='$u2'";
//   $result = $conn -> query($sql);
 
//   if($result){
//   if ($result->num_rows > 0) {
//     while($row = $result -> fetch_assoc()) {
//      <a href="cover1/<?php echo $row['file'];
//       echo "<p align='right'>".$row['file']."</p>";
//       echo "</a>";     
//     }
//   }
// }
    
  
  //encryption algorithm
  //
  //php read and open
  //key
  // it will be done once
  //
  // $private_key= rand();
  // $sql = "insert into private_key values ('$b','$u2','$private_key')";
  // $conn -> query($sql);


  //it will be done once
  //
  // $public_key= rand();
  // $sql = "insert into public_key values ('$b','$public_key')";
  // $conn -> query($sql);
  
  $sql = "select * from private_key where sender ='$b' and receiver='$u2'";
  $result = $conn -> query($sql);
  $p=0;
  if($result){
  if ($result->num_rows > 0){
    while($row = $result -> fetch_assoc()) {
      $private_key=$row['key'];     
      echo($private_key);
      $p=$private_key;
    }
    }
  }
  echo($p);
  $sql = "select * from public_key where user ='$b'";
  $result = $conn -> query($sql);
  
  if($result){
  if ($result->num_rows > 0){
    while($row = $result -> fetch_assoc()) {
      $public_key=$row['key'];     
      echo($public_key);
    }
    }
  }

  

  $file_name = $_FILES['file']['name'];
  $file_type = $_FILES['file']['type'];
  $file_size = $_FILES['file']['size'];
  $file_tem_loc = $_FILES['file']['tmp_name'];
  $file_store = "cover1/".$file_name;
  $sql = "insert into ".$b."(name, file) values ('$u2','$file_name')";
  $conn -> query($sql);
  move_uploaded_file($file_tem_loc, $file_store);
  header("Refresh:0");

  //
  //







//close the connection 
}
// $conn->close;
?>
<p id="p1" align="right"></p></b>
          </div>
        </div>
      </div>
      <div class="row reply">
<form  action="" method="POST" enctype= "multipart/form-data">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        
         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	      <input type = "file" name = "file"/>
         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="submit" name="manya" value="Upload File"></input> 
    </form>
      </div>
    
 
</div>
</body>
</html>

