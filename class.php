<?php
$Doanhso=200;
$HoaHong;

if($Doanhso<=100){
    echo "Doanh thu la". $Doanhso*0.05;
  }  else if($Doanhso<=300){
echo "Doanh thu la". $Doanhso*0.1;
}else{
  echo "Doanh thu la". $Doanhso*0.2;
}
echo "<br>" ;
//bai 2
$kygiua=10;
$cuoiky=8;
$trungbinh=($kygiua + $cuoiky)/2;
if($trungbinh>=9){
    echo "hạng A";
}else if($trungbinh>=7 && $trungbinh<9){
    echo "hạng B";
}else if($trungbinh>=5 && $trungbinh<7){
    echo "hạng C";

}else{
    echo "hạng D";
}
?>

