<?php
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
// Function to print primes for e n 
/*$count=0;
$arrayp=array(0,1);
$isit=0;*/
/*
// Driver Code
$nn = $phin; 
for ($i = 2; $i <= $nn; $i++) 
{
    if($nn<=1)
    $isit=0;
    for($i=2;$i<$nn;$i++)
    {
        if($nn%$i==0)
        $isit=1;
    }
    if ($isit==1)
    {
        $arrayp[$count]=$i;
        $count++;
    }
} 
$cc=count($arrayp);
/*for($i=0;$i<$cc;$i++)
{
    echo $arrayp[$i];
    echo("<br>");
}
$vale=0;
for($i=0;$i<$cc;$i++)
{
    if(($arrayp[$i]>1) && ($arrayp[$i]<$n))
    {
        if(gmp_gcd($arrayp[$i],$phin)==1)
        {
            $e=$arrayp[$i];
            echo $e;
            $vale=$e;
        }
    }
}*/
for($i=2;$i<$n;$i++)
{
    if(gmp_gcd($i,$phin)==1)
    $e=$i;
}
echo $e."=e<br>";
for($i=2;$i<$z;$i++)
{
    if(gmp_gcd($i,$phiz)==1)
    $g=$i;
}
echo $g."=g<br>";
//sdsd
//echo $vale;
//echo"<br>";
// Function to print primes for g z
/*$count=0;
$arrayp=array(0,1);
$isit=0;
// Driver Code
$ng = $phiz; 
for ($i = 2; $i <= $ng; $i++) 
{
    if($n<=1)
    $isit=0;
    for($i=2;$i<$ng;$i++)
    {
        if($ng%$i==0)
        $isit=1;
    }
    if ($isit==1)
    {
        $arrayp[$count]=$i;
        $count++;
    }
} 
$cc=count($arrayp);
/*for($i=0;$i<$cc;$i++)
{
    echo $arrayp[$i];
    echo("<br>");
}
for($i=0;$i<$cc;$i++)
{
    if(($arrayp[$i]>1) && ($arrayp[$i]<$z))
    {
        if(gmp_gcd($arrayp[$i],$phiz)==1)
        {
            $g=$arrayp[$i];
        }
    }
}*/
//sdsd
//echo $g;
//echo"<br>";
//$egmp=strval($e);
//$phingmp=strval($phin);
//$ggmp=strval($g);
//$phizgmp=strval($phiz);
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
//public keys: (e,n),(g,z)
//private key:(t,z,dp,dq,dr,ds)
$myfile = fopen("file11.txt", "r") or die("Unable to open file!");
//echo fread($myfile,filesize("file11.txt"));
$redf=fread($myfile,filesize("file11.txt"));
$M=$redf;
fclose($myfile);
$count=strlen($M);
echo $count."<br>";
$unpak=unpack("C*",$M);
for($i=1;$i<($count+1);$i++)
{
    $unpak[$i]=decbin($unpak[$i]);
    //echo"<br>";
}
$estr=strval($e);
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
echo $cpiher;
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
$privkey1=openssl_pkey_get_private("file://C:\Users\HP\Downloads\openssl-toolkit\server.pem");
openssl_sign($C,$signature,$privkey1);
//decryption
$pubkey1=openssl_pkey_get_public("file://C:\Users\HP\Downloads\openssl-toolkit\server.crt");
$ok=openssl_verify($C,$signature,$pubkey1);
if ($ok==1)
{
    echo"Signature is good<br>";
}
elseif($ok==0)
{
    echo"Signature is bad<br>";
}
else
{
    echo"ugly, eroor checking signature<br>";
}
for($i=0;$i<$count;$i++)
{

}
$C1= bcpowmod(strval($C),strval($t),strval($z));
$Cp= $C1 % $p;
$Cq= $C1 % $q;
$Cr= $C1 % $r;
$Cs= $C1 % $s;
$mp= bcpowmod(strval($Cp),($d*$p),$p);
$mq= bcpowmod($Cq,($d*$q),$q);
$mr= bcpowmod($Cr,($d*$r),$r);
$ms= bcpowmod($Cs,($d*$s),$s);
//$message=pow($C,$d)%$n;
//echo $message." mm ";
$hashed2=hash('sha512',$C);
if($hashed==$hashed2)
{
    echo"Hashes are the same";
    echo"<br>";
}
echo $mp." is the message received.";
//echo($mp.$mq.$mr.$ms);
?>
