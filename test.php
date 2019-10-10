<form>
<div style="text-align:center;">
<input type="Text" name="a" /> x^2
<input type="Text" name="b" /> x
<input type="Text" name="c" /> =0<br><br>
<input type="submit">
</form>
<div><?php
$a =isset($_GET['a'])? $_GET['a'] : 1;
$b =isset($_GET['b'])? $_GET['b'] : 3;
$c =isset($_GET['c'])? $_GET['c'] : -4;
$d =($b*$b)-4*$a*$c;
if($d>0){
 echo 'Ответ: x1=',$x1=(-$b+sqrt($d))/2*$a,'<br>';	
 echo 'Ответ: x2=',$x2=(-$b-sqrt($d))/2*$a;
}
else if($d==0){
echo 'Ответ: x1,2=',$x1=(-($b))/2*$a,'<br>';	
}
else if($d<0){
echo 'Ответ: Решений нет','<br>';
}
?></div>
