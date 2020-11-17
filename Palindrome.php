<?php  
function palindrome($n){  
$num = $n;  
$sum = 0;  
while(floor($num)) {  
$rem = $num % 10;  
$sum = $sum * 10 + $rem;  
$num = $num/10;  
}  
return $sum;  
}  
$input = 1235321;  
$num = palindrome($input);  
if($input==$num){  
echo "$input is a Palindrome number";  
} else {  
echo "$input is not a Palindrome";  
}  
?>
