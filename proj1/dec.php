<?php
session_start();

$p=101;
// echo $p." =p  ";
// echo"<br>";
$q=103;
// echo $q." =q  ";
// echo"<br>";
$r=107;
// echo $r." =r  ";
// echo"<br>";
$s=109;
// echo $s." =s  ";
// echo"<br>";
$n=$p*$q;
// echo $n." =n  ";
// echo"<br>";
$z=$r*$s;
// echo $z." =z  ";
// echo"<br>";
$phin=($p-1)*($q-1);
// echo $phin." =phin ";
// echo"<br>";
$phiz=($r-1)*($s-1);
// echo $phiz." =phiz  ";
// echo"<br>";

for($i=$phin;$i>0;$i--)
{
    if(gmp_gcd($i,$phin)==1){
        $e=$i;
        break;
    }
}
// echo $e."=e<br>";
for($i=$phiz;$i>0;$i--)
{
    if(gmp_gcd($i,$phiz)==1){
        $g=$i;
        break;
    }
}
// echo $g."=g<br>";

$d=gmp_invert($e,$phin);
// echo $d;
// echo"=d<br>";
$t=gmp_invert($g,$phiz);
// echo $t;


// echo $_SESSION['c_file'];
$file=$_SESSION['c_file'];
$myfile = fopen($file, 'r');
      $cipher=fread($myfile,filesize($file));
      
      fclose($myfile);

$prikeyar1=array($t,$z);
      $prikeyar2=array($d,$n);
      $pubkeyar1=array($e,$n);
      $pubkeyar2=array($g,$z);
      $privkey=join($prikeyar1);
      $pubkey=join($pubkeyar1);
    //   echo" public key1: (".$e.",".$n.")<br>";
    //   echo" public key2: (".$g.",".$z.")<br>";
    //   echo" private key1: (".$t.",".$z.")<br>";
    //   echo" public key2: (".$d.",".$n.")<br>";
      //SHA
      //hash ( 'sha512' , $C [, bool $raw_output = FALSE ] ) : string
    //   $hashed = hash('sha512', $C);


      $cipher_db=$cipher;
      $cipher_arr= str_split($cipher_db,14);
    //   echo $cipher_arr[0];



      $dec_m="";
      for($i=0;$i<count($cipher_arr);$i++){
          $C=bindec($cipher_arr[$i]);
        //   echo"<br>";
        //   echo $C;
        
          $M1=bcpowmod($C,strval($t),strval($z));
          $M=intval(bcpowmod($M1,strval($d),strval($n)));

          
          
        //   echo "<br>";
          $char= chr($M);
        //   echo $char;
        //   echo "--<br>";
          $dec_m.=$char;
          
      }
    //   $hashed2=hash('sha512',$C);
    //   if($hashed==$hashed2)
    //   {
    //       echo"Hashes are the same";
    //       echo"<br>";
    //   }

      //echo($mp.$mq.$mr.$ms);
      echo $dec_m;
      ?>