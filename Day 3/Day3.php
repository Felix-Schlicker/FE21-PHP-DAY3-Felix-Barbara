<!DOCTYPE html>
<html lang="en">
   <head>
       <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <title></title>
   </head>
   <body>
       <?php
    
    /* Create a for loop which will print your name 50 times on
     the screen. Do the same with while and do while loop
    First Exercise FOR LOOP */
    
    $name="Barbara";
	
for ($i=0; $i<=49; $i++)
	
{
	
echo "My Name is: ".$name."<br/>";
	
} 



 // First Exercise WHILE LOOP
 $name1 = "OTTOVORDEMGENTSCHENFELDE";

 $i=0;
	
while($i<=50)
	  
{
	  
echo "My Name is: ".$name1."<br/>";
	  
$i++;
	  
}
  
// First Exercise DO WHILE LOOP

$name2 = "Felix";

$i=1;
	
do
	 
 {
	  
echo "My Name is: ".$name2."<br/>";
	 
 $i++;
	  
}
	
while ($i<=50);


//Exercise 2 Define a numeric array with 10 elements. Use a foreach loop to output the value of every array's element.

$numericArray = array (1,75,60,41,55,76,74,86,97,170);


  



foreach ($numericArray as $v) {
    echo "Value from $numericArray: $v.\n" ."<br/>";
}








/* Exercise 3

Create a function that will have a parameter. The argument given to that parameter should be an array. 
The function should return the highest value from the array. 
Try to create an array with at least 10 numbers created randomly. 
You may want to take a look at the rand() function from PHP. */


function random(){
    $random_number_array = range(0, 100);
shuffle ($random_number_array );
$random_number_array = array_slice ($random_number_array ,0,10);

echo ($random_number_array)."<br/>";
//return max ($random_number_array);
}

random (); 




/*Exercise 4

Create a PHP program that iterates the integers from 1 to 100. 
For multiples of three print "Back-End" instead of the number and for the multiples of five print "Front-End". 
For numbers that are multiples of both three and five print "Full-Stack". */


for ($i = 1; $i <= 100; $i++)
{
  if ( $i%3 == 0 && $i%5 == 0 )
   {
     echo " Full-Stack"."\n" ;
   }
  else if ( $i%3 == 0 ) 
   {
     echo " Back-End"."\n";
   }
     else if ( $i%5 == 0 ) 
   {
     echo " Front-End"."\n";
   }
     else
   {
     echo $i."\n";
   }
 }






 /*We will create a Restaurant Database (you can create it directly in php MyAdmin).

The database should contain one table called dishes with columns dishID, image(URL link), name, price and meal description. If there are any columns that you think could compliment your project feel free to expand. 

You should be able to:

Display all meals

Add a meal

Delete a meal */

       ?>
   </body>
</html>