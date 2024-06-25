<?php 

//create a recursion function 
function Factorial_of_number($number){ 
    //check if the number is positive 
	if($number <= 1){ 
		return 1;
	} 
    //if the number is positive the method recursive its self to calculate the factorial number 
	else{ 
		return $number * Factorial_of_number($number - 1); 
	} 
} 

//this is the driever code to calculate the factorial number of the input number 


$number = 9;
//declare $fact and call the recursive method 
$fact = Factorial_of_number($number);
//if the input nember is non-positive number the statment please enter a positive number ! will be shown 
if($fact<=1){
    echo "please enter a positive number !";


}

//diplay the factorial method to calculate the positive givin number 
else{
    echo "Factorial nember of $number = $fact"; 


}

