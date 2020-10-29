<!DOCTYPE html>
<html>
<head>
	<title>Standard Variation</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
   <?php require 'class.php';

      // instantiate the class
   	   $class  = new Main();
   	   // print_r($class);

       // get all the number list
       $list  = $class->list();
       
       // convert it to a string with ','
       $implodelist  = implode(',', $list);
       
      // get array lenght
   	   $length = $class->Arraylenght();
       
       // get mean
       $mean  = $class->GetMean();

       // get variance
       $Variance =$class->Getvariance();

        //  get standard variation
       $stddevariation = $class->FinnalAnswer();

 
?>
<!--  
https://stackoverflow.com/questions/12636613/how-to-calculate-moving-average-without-keeping-the-count-and-data-total

https://leetcode.com/problems/pascals-triangle/
 -->
 -->
   

     <div class="container">
     	<h2>PHP to calculate Standard deviation with auto generate series of numbers</h2>
     
    	 <div class="content">
    	 	<h4>All Number List: &nbsp;&nbsp; <?php echo $implodelist ?> </h4>
    	 	<h4>All List Length: &nbsp;&nbsp;<?php  echo  $length; ?></h4>
    	 	<h4>Mean: &nbsp;&nbsp;<?php echo number_format($mean,2)  ?> </h4>
    	 	<h4>Variance:  &nbsp;&nbsp;<?php echo number_format($Variance,2)  ?></h4>
        <h4>Standard Deviation: &nbsp;&nbsp;<?php echo $stddeviation ?></h4>

    	 </div>
    </div>
  

</body>
</html>