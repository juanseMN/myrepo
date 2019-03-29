<?php
echo "<table border=1>";
echo "<b> lista de los primeros numeros</b>";
echo "<tr><td>"."1</br>"."</tr></td>";
echo "<tr><td>"."2</br>"."</tr></td>";
echo "<tr><td>"."3</br>"."</tr></td>";
echo "<tr><td>"."4</br>"."</tr></td>";
echo "<tr><td>"."5</br>"."</tr></td>";
echo "<tr><td>"."6</br>"."</tr></td>";
echo "<tr><td>"."7</br>"."</tr></td>";
echo "<tr><td>"."8</br>"."</tr></td>";
echo "<tr><td>"."9</br>"."</tr></td>";
echo "<tr><td>"."10</br>"."</tr></td>";
echo "</table>";
//*--------------------------------------------
echo "<b> lista de numero con while</b>";
echo "<table border=1>";
$i=1;
while ($i <= 10)
{
 echo "<tr><td bgcolor='green'>".$i."</tr></td>";
 $i++;
}
echo "</table>";
//-----------------------------------------------
echo "numeros horizontales</br>";
$i=1;
while ($i <= 10){
if ($i%2==0) {
 echo "<tr><td bgcolor='green'>".$i."es par"."</tr></td>";
} else {
 echo "<tr><td bgcolor='green'>".$i."es impar"."</tr></td>";
}

 echo "<tr><td bgcolor='green'>".$i."</tr></td>";
 $i++;
}


?>
