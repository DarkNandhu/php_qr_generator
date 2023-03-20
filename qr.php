<table>
<tr>
<?php $i=0;
$con=0;
while($i<1000){
if($con<6)
{
$j="temp/UDE".str_pad($i,4,"0",STR_PAD_LEFT).'.png';
?><td>
<img src="<?php echo $j; ?>" height="120" width="120"></td>
<?php $con++; } 
else{
$con=0;
echo "</tr><tr>";
}$i++; }?>
</tr>