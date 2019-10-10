<div><?php
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
