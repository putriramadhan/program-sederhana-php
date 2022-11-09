<?php
//bilangan genap naik

echo "Angka genap (1-50): ";
$batas =50;
for ($i=1;$i<=$batas;$i++) //membuat perulangan hingga batas
{
  if($i%2==0) //jika i habis dibagi 2 alias genap akan tampil di output
  {
    echo $i." "; 
  }
}

//bilangan genap menurun

echo "Angka genap (50-1): ";
$batas =50;
for ($i=$batas;$i>=1;$i--) 
{
  if($i%2==0){
   echo $i." "; 
  }
}

//bilangan ganjil naik

echo "Angka genap (1-50): ";
$batas =50;
for ($i=1;$i<=$batas;$i++) 
{
  if($i%2!=0) 
  {
    echo $i." "; 
  }
}

//bilangan ganjil menurun
echo "Angka genap (50-1): ";
$batas =50;
for ($i=$batas;$i>=1;$i--) 
{
  if($i%2!=0){
   echo $i." "; 
  }
}
?>


