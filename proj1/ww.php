<?php
session_start();
?>

<html>
<head>
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
<style>
html,body,div,span {
  height: 100%;
  width: 100%;
  overflow: hidden;
  padding: 0;
  margin: 0;
  box-sizing: border-box;
}
#p1
{
background-color: white;
}
body {
  background: url("http://shurl.esy.es/y") no-repeat fixed center;
  background-size: cover;
}

.fa-2x {
  font-size: 1.5em;
}

.app {
  position: relative;
  overflow: hidden;
  top: 19px;
  height: calc(100% - 38px);
  margin: auto;
  padding: 0;
  box-shadow: 0 1px 1px 0 rgba(0, 0, 0, .06), 0 2px 5px 0 rgba(0, 0, 0, .2);
}

.app-one {
  background-color: #f7f7f7;
  height: 100%;
  overflow: hidden;
  margin: 0;
  padding: 0;
  box-shadow: 0 1px 1px 0 rgba(0, 0, 0, .06), 0 2px 5px 0 rgba(0, 0, 0, .2);
}

.side {
  padding: 0;
  margin: 0;
  height: 100%;
}
.side-one {
  padding: 0;
  margin: 0;
  height: 100%;
  width: 100%;
  z-index: 1;
  position: relative;
  display: block;
  top: 0;
}

.side-two {
  padding: 0;
  margin: 0;
  height: 100%;
  width: 100%;
  z-index: 2;
  position: relative;
  top: -100%;
  left: -100%;
  -webkit-transition: left 0.3s ease;
  transition: left 0.3s ease;

}


.heading {
  padding: 10px 16px 10px 15px;
  margin: 0;
  height: 60px;
  width: 100%;
  background-color: #eee;
  z-index: 1000;
}

.heading-avatar {
  padding: 0;
  cursor: pointer;

}

.heading-avatar-icon img {
  border-radius: 50%;
  height: 40px;
  width: 40px;
}

.heading-name {
  padding: 0 !important;
  cursor: pointer;
}

.heading-name-meta {
  font-weight: 700;
  font-size: 100%;
  padding: 5px;
  padding-bottom: 0;
  text-align: left;
  text-overflow: ellipsis;
  white-space: nowrap;
  color: #000;
  display: block;
}
.heading-online {
  display: none;
  padding: 0 5px;
  font-size: 12px;
  color: #93918f;
}
.heading-compose {
  padding: 0;
}

.heading-compose i {
  text-align: center;
  padding: 5px;
  color: #93918f;
  cursor: pointer;
}

.heading-dot {
  padding: 0;
  margin-left: 10px;
}

.heading-dot i {
  text-align: right;
  padding: 5px;
  color: #93918f;
  cursor: pointer;
}

.searchBox {
  padding: 0 !important;
  margin: 0 !important;
  height: 60px;
  width: 100%;
}

.searchBox-inner {
  height: 100%;
  width: 100%;
  padding: 10px !important;
  background-color: #fbfbfb;
}


/*#searchBox-inner input {
  box-shadow: none;
}*/

.searchBox-inner input:focus {
  outline: none;
  border: none;
  box-shadow: none;
}

.sideBar {
  padding: 0 !important;
  margin: 0 !important;
  background-color: #fff;
  overflow-y: auto;
  border: 1px solid #f7f7f7;
  height: calc(100% - 120px);
}

.sideBar-body {
  position: relative;
  padding: 10px !important;
  border-bottom: 1px solid #f7f7f7;
  height: 72px;
  margin: 0 !important;
  cursor: pointer;
}

.sideBar-body:hover {
  background-color: #f2f2f2;
}

.sideBar-avatar {
  text-align: center;
  padding: 0 !important;
}

.avatar-icon img {
  border-radius: 50%;
  height: 49px;
  width: 49px;
}

.sideBar-main {
  padding: 0 !important;
}

.sideBar-main .row {
  padding: 0 !important;
  margin: 0 !important;
}

.sideBar-name {
  padding: 10px !important;
}

.name-meta {
  font-size: 100%;
  padding: 1% !important;
  text-align: left;
  text-overflow: ellipsis;
  white-space: nowrap;
  color: #000;
}

.sideBar-time {
  padding: 10px !important;
}

.time-meta {
  text-align: right;
  font-size: 12px;
  padding: 1% !important;
  color: rgba(0, 0, 0, .4);
  vertical-align: baseline;
}

/*New Message*/

.newMessage {
  padding: 0 !important;
  margin: 0 !important;
  height: 100%;
  position: relative;
  left: -100%;
}
.newMessage-heading {
  padding: 10px 16px 10px 15px !important;
  margin: 0 !important;
  height: 100px;
  width: 100%;
  background-color: #00bfa5;
  z-index: 1001;
}

.newMessage-main {
  padding: 10px 16px 0 15px !important;
  margin: 0 !important;
  height: 60px;
  margin-top: 30px !important;
  width: 100%;
  z-index: 1001;
  color: #fff;
}

.newMessage-title {
  font-size: 18px;
  font-weight: 700;
  padding: 10px 5px !important;
}
.newMessage-back {
  text-align: center;
  vertical-align: baseline;
  padding: 12px 5px !important;
  display: block;
  cursor: pointer;
}
.newMessage-back i {
  margin: auto !important;
}

.composeBox {
  padding: 0 !important;
  margin: 0 !important;
  height: 60px;
  width: 100%;
}

.composeBox-inner {
  height: 100%;
  width: 100%;
  padding: 10px !important;
  background-color: #fbfbfb;
}

.composeBox-inner input:focus {
  outline: none;
  border: none;
  box-shadow: none;
}

.compose-sideBar {
  padding: 0 !important;
  margin: 0 !important;
  background-color: #fff;
  overflow-y: auto;
  border: 1px solid #f7f7f7;
  height: calc(100% - 160px);
}

/*Conversation*/

.conversation {
  padding: 0 !important;
  margin: 0 !important;
  height: 100%;
  /*width: 100%;*/
  border-left: 1px solid rgba(0, 0, 0, .08);
  /*overflow-y: auto;*/
}

.message {
  padding: 0 !important;
  margin: 0 !important;
  background: url("w.jpg") no-repeat fixed center;
  background-size: cover;
  overflow-y: auto;
  border: 1px solid #f7f7f7;
  height: calc(100% - 120px);
}
.message-previous {
  margin : 0 !important;
  padding: 0 !important;
  height: auto;
  width: 100%;
}
.previous {
  font-size: 15px;
  text-align: center;
  padding: 10px !important;
  cursor: pointer;
}

.previous a {
  text-decoration: none;
  font-weight: 700;
}

.message-body {
  margin: 0 !important;
  padding: 0 !important;
  width: auto;
  height: auto;
}

.message-main-receiver {
  /*padding: 10px 20px;*/
  max-width: 60%;
}

.message-main-sender {
  padding: 3px 20px !important;
  margin-left: 40% !important;
  max-width: 60%;
}

.message-text {
  margin: 0 !important;
  padding: 5px !important;
  word-wrap:break-word;
  font-weight: 200;
  font-size: 14px;
  padding-bottom: 0 !important;
}

.message-time {
  margin: 0 !important;
  margin-left: 50px !important;
  font-size: 12px;
  text-align: right;
  color: #9a9a9a;

}

.receiver {
  width: auto !important;
  padding: 4px 10px 7px !important;
  border-radius: 10px 10px 10px 0;
  background: #ffffff;
  font-size: 12px;
  text-shadow: 0 1px 1px rgba(0, 0, 0, .2);
  word-wrap: break-word;
  display: inline-block;
}

.sender {
  float: right;
  width: auto !important;
  background: #dcf8c6;
  border-radius: 10px 10px 0 10px;
  padding: 4px 10px 7px !important;
  font-size: 12px;
  text-shadow: 0 1px 1px rgba(0, 0, 0, .2);
  display: inline-block;
  word-wrap: break-word;
}


/*Reply*/

.reply {
  height: 60px;
  width: 100%;
  background-color: #f5f1ee;
  padding: 10px 5px 10px 5px !important;
  margin: 0 !important;
  z-index: 1000;
}

.reply-emojis {
  padding: 5px !important;
}

.reply-emojis i {
  text-align: center;
  padding: 5px 5px 5px 5px !important;
  color: #93918f;
  cursor: pointer;
}

.reply-recording {
  padding: 5px !important;
}

.reply-recording i {
  text-align: center;
  padding: 5px !important;
  color: #93918f;
  cursor: pointer;
}

.reply-send {
  padding: 5px !important;
}

.reply-send i {
  text-align: center;
  padding: 5px !important;
  color: #93918f;
  cursor: pointer;
}

.reply-main {
  padding: 2px 5px !important;
}

.reply-main textarea {
  width: 100%;
  resize: none;
  overflow: hidden;
  padding: 5px !important;
  outline: none;
  border: none;
  text-indent: 5px;
  box-shadow: none;
  height: 100%;
  font-size: 16px;
}

.reply-main textarea:focus {
  outline: none;
  border: none;
  text-indent: 5px;
  box-shadow: none;
}

@media screen and (max-width: 700px) {
  .app {
    top: 0;
    height: 100%;
  }
  .heading {
    height: 70px;
    background-color: #009688;
  }
  .fa-2x {
    font-size: 2.3em !important;
  }
  .heading-avatar {
    padding: 0 !important;
  }
  .heading-avatar-icon img {
    height: 50px;
    width: 50px;
  }
  .heading-compose {
    padding: 5px !important;
  }
  .heading-compose i {
    color: #fff;
    cursor: pointer;
  }
  .heading-dot {
    padding: 5px !important;
    margin-left: 10px !important;
  }
  .heading-dot i {
    color: #fff;
    cursor: pointer;
  }
  .sideBar {
    height: calc(100% - 130px);
  }
  .sideBar-body {
    height: 80px;
  }
  .sideBar-avatar {
    text-align: left;
    padding: 0 8px !important;
  }
  .avatar-icon img {
    height: 55px;
    width: 55px;
  }
  .sideBar-main {
    padding: 0 !important;
  }
  .sideBar-main .row {
    padding: 0 !important;
    margin: 0 !important;
  }
  .sideBar-name {
    padding: 10px 5px !important;
  }
  .name-meta {
    font-size: 16px;
    padding: 5% !important;
  }
  .sideBar-time {
    padding: 10px !important;
  }
  .time-meta {
    text-align: right;
    font-size: 14px;
    padding: 4% !important;
    color: rgba(0, 0, 0, .4);
    vertical-align: baseline;
  }
  /*Conversation*/
  .conversation {
    padding: 0 !important;
    margin: 0 !important;
    height: 100%;
    /*width: 100%;*/
    border-left: 1px solid rgba(0, 0, 0, .08);
    /*overflow-y: auto;*/
  }
  .message {
    height: calc(100% - 140px);
  }
  .reply {
    height: 70px;
  }
  .reply-emojis {
    padding: 5px 0 !important;
  }
  .reply-emojis i {
    padding: 5px 2px !important;
    font-size: 1.8em !important;
  }
  .reply-main {
    padding: 2px 8px !important;
  }
  .reply-main textarea {
    padding: 8px !important;
    font-size: 18px;
  }
  .reply-recording {
    padding: 5px 0 !important;
  }
  .reply-recording i {
    padding: 5px 0 !important;
    font-size: 1.8em !important;
  }
  .reply-send {
    padding: 5px 0 !important;
  }
  .reply-send i {
    padding: 5px 2px 5px 0 !important;
    font-size: 1.8em !important;
  }
}
</style>
</head>
<body>
<div class="container app">
  <div class="row app-one">
    <div class="col-sm-4 side">
      <div class="side-one">
        <div class="row heading">
          <div class="col-sm-3 col-xs-3 heading-avatar">
            <div class="heading-avatar-icon">
              <img src="https://bootdey.com/img/Content/avatar/avatar3.png">
            </div>
          </div>
         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <div class="col-sm-2 col-xs-2 heading-compose  pull-right" align="right">
            <i class="fa fa-comments fa-2x  pull-right" aria-hidden="true"></i>
          </div>
        </div>

        <div class="row searchBox">
          <div class="col-sm-12 searchBox-inner">
            <div class="form-group has-feedback">
              <input id="searchText" type="text" class="form-control" name="searchText" placeholder="Search">
              <span class="glyphicon glyphicon-search form-control-feedback"></span>
            </div>
          </div>
        </div>

        <?php

$conn= new mysqli("localhost","root","","secure_chat");
$sql = "select email from login";
$result = $conn->query($sql);
if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc() ) {
      if($row['email']!=$_GET['email']){
        echo "<div class='row sideBar-body'>";
            echo "<div class='col-sm-3 col-xs-3 sideBar-avatar'>";
              echo "<div class='avatar-icon' data-icon='default-user'>";
    
              echo "<img src='https://bootdey.com/img/Content/avatar/avatar3.png'>";
              echo "</div>";
              echo "</div>";
            echo "<div class='col-sm-9 col-xs-9 sideBar-main'>";
              echo "<div class='row'>";
                echo "<div class='col-sm-8 col-xs-8 sideBar-name'>";
                  echo "<span class='name-meta' id='contact'>";
                   $src = "/proj1/ww.php?email=".$_GET['email']."&user2=".$row['email']; echo "<a href=".$src.">"; echo $row['email']; echo "</a>";
                echo "</span>";
                echo "</div>";
               
                echo "</div>";
              echo "</div>";
              echo "</div>";
            }
        }}
            ?>
           </div></div>

    <div class="col-sm-8 conversation">
      <div class="row heading">
        <div class="col-sm-2 col-md-1 col-xs-3 heading-avatar">
          <div class="heading-avatar-icon">
            <img src="https://bootdey.com/img/Content/avatar/avatar6.png">
          </div>
        </div>
	
        <div class="col-sm-10 col-xs-7 heading-name">
          <a class="heading-name-meta">
          <?php echo $_GET['user2'];
          $u2 = $_GET['user2']; ?>
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
  $sql = "select file from ".$u2. " where name ='$a'";
  $result = $conn -> query($sql);
  if($result)
  if ($result-> num_rows > 0) {
    while($row = $result -> fetch_assoc()) {
      $_SESSION['c_file']="cover1/".$row['file'];
      // echo $_SESSION['c_file'];
      ?><a href="dec.php"><?php
      echo "<p align='right'>".$row['file']."</p>";
      echo "</a>";     
}
}

$sql = "select file from ".$a. " where name ='$u2'";
  $result = $conn -> query($sql);
  if($result)
  if ($result-> num_rows > 0) {
    while($row = $result -> fetch_assoc()) {
      $_SESSION['c_file']="cover1/".$row['file'];
      // echo $_SESSION['c_file'];
      ?><a href="dec.php"><?php
      echo "<p align='right'>".$row['file']."</p>";
      echo "</a>";     
}
}

if(isset($_POST['manya']))
{

  
$file_name = $_FILES['file']['name'];
$file_type = $_FILES['file']['type'];
$file_size = $_FILES['file']['size'];
$file_tem_loc = $_FILES['file']['tmp_name'];


// echo $M;

$allowed = array('txt');
  $ext = pathinfo($file_name, PATHINFO_EXTENSION);
  if (in_array($ext, $allowed)) {



      $p=101;
      echo $p." =p  ";
      echo"<br>";
      $q=103;
      echo $q." =q  ";
      echo"<br>";
      $r=107;
      echo $r." =r  ";
      echo"<br>";
      $s=109;
      echo $s." =s  ";
      echo"<br>";
      $n=$p*$q;
      echo $n." =n  ";
      echo"<br>";
      $z=$r*$s;
      echo $z." =z  ";
      echo"<br>";
      $phin=($p-1)*($q-1);
      echo $phin." =phin ";
      echo"<br>";
      $phiz=($r-1)*($s-1);
      echo $phiz." =phiz  ";
      echo"<br>";
      
      for($i=$phin;$i>0;$i--)
      {
          if(gmp_gcd($i,$phin)==1){
              $e=$i;
              break;
          }
      }
      echo $e."=e<br>";
      for($i=$phiz;$i>0;$i--)
      {
          if(gmp_gcd($i,$phiz)==1){
              $g=$i;
              break;
          }
      }
      echo $g."=g<br>";
      
      $d=gmp_invert($e,$phin);
      echo $d;
      echo"=d<br>";
      $t=gmp_invert($g,$phiz);
      echo $t;
      echo"=t<br>";
      $dp=$d % ($p-1);
      $dq=$d % ($q-1);
      $dr=$d % ($r-1);
      $ds=$d % ($s-1);

      $myfile = fopen($_FILES['file']["tmp_name"], 'r');
      $M=fread($myfile,$file_size);
      
      fclose($myfile);
      $count=strlen($M);
      echo $count."<br>";
      $unpak=unpack("C*",$M);
      for($i=1;$i<($count+1);$i++)
      {   
          echo $unpak[$i];
          echo "<br>";
          //$unpak[$i]=decbin($unpak[$i]);
          //echo"<br>";
      }
      $cipher="";
      $binz=strval(decbin($z));
      $cz=strlen($binz);
      for($i=1;$i<($count+1);$i++)
      {
          $C1=bcpowmod(strval($unpak[$i]),strval($e),strval($n));
          $C=intval(bcpowmod($C1,strval($g),strval($z)));
          $cipher.=str_pad(decbin($C),$cz,"0", STR_PAD_LEFT);
          echo"<br>";
          echo $C."=C<br>";
      }
      echo $cipher;
      //variable M is message in integer form
      //$M=113;
      echo $M." is the messages to be sent.<br> ";
      //$count=strlen($M);
      //encryption
      //$C1= pow($M,$e) % $n;
      //$C= pow($C1,$g) % $z;
      //$C=pow($M,$e)%$n;
      //echo $C." =c ";
      //echo"<br>";
      $prikeyar1=array($t,$z);
      $prikeyar2=array($d,$n);
      $pubkeyar1=array($e,$n);
      $pubkeyar2=array($g,$z);
      $privkey=join($prikeyar1);
      $pubkey=join($pubkeyar1);
      echo" public key1: (".$e.",".$n.")<br>";
      echo" public key2: (".$g.",".$z.")<br>";
      echo" private key1: (".$t.",".$z.")<br>";
      echo" public key2: (".$d.",".$n.")<br>";
      //SHA
      //hash ( 'sha512' , $C [, bool $raw_output = FALSE ] ) : string
      $hashed = hash('sha512', $C);


      $cipher_db=$cipher;
      $cipher_arr= str_split($cipher_db,14);
      echo $cipher_arr[0];



      $dec_m="";
      for($i=0;$i<count($cipher_arr);$i++){
          $C=bindec($cipher_arr[$i]);
          echo"<br>";
          echo $C;
        
          $M1=bcpowmod($C,strval($t),strval($z));
          $M=intval(bcpowmod($M1,strval($d),strval($n)));

          
          
          echo "<br>";
          $char= chr($M);
          echo $char;
          echo "--<br>";
          $dec_m.=$char;
          
      }
      $hashed2=hash('sha512',$C);
      if($hashed==$hashed2)
      {
          echo"Hashes are the same";
          echo"<br>";
      }

      //echo($mp.$mq.$mr.$ms);
      echo $dec_m;






      
      $fp = fopen("cover1/".$file_name,"wb");
      fwrite($fp,$cipher);
      






    //$file_store = "cover1/".$file_name;
    $sql = "insert into ".$_GET['email']."(name, file) values ('$u2','$file_name')";
    $conn -> query($sql);
    // move_uploaded_file($file_tem_loc, $fp);       
  }
  else{
    echo '<script>alert("choose only txt file")</script>';
  }
  


}
?>
<p id="p1" align="right"></p></b>
          </div>
        </div>
      </div>
      <div class="row reply">
<form  action="" method="POST" enctype= "multipart/form-data">
	      <input type = "file" name = "file"/>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="submit" name="manya" value="Upload File"></input> 
    </form>
      </div>
    </div>
  </div>
</div>
</body>
</html>

