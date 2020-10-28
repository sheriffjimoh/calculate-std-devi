<!DOCTYPE html>
<html>
<head>
	<title>Standard Variation</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
   <?php require 'class.php';


   if (isset($_POST['submit'])) {
   	    $number = $_POST['number'];
   	   $class  = new Main($number);
   	   // print_r($class);
   	   $addvalues = $class->FinnalAnswer();

   	   $length = $class->Arraylenght();

       $mean  = $class->GetMean();
       $Variance =$class->Getvariance();
       $stddeviation = $class->FinnalAnswer();

   }  


   ?>
  

 <!--   From ghrsea09 peterMurphy to Everyone:  03:25 PM
rngAvg avg smpl n = avg + (second - first)
    where first =  (avg /  n)
          second = (smpl / n)   
https://stackoverflow.com/questions/12636613/how-to-calculate-moving-average-without-keeping-the-count-and-data-total

https://leetcode.com/problems/pascals-triangle/
 -->

   

     <div class="container">
     	<h2>PHP to calculate Standard deviation</h2>
     	 <form action="index.php" method="post">
    	<input type="number" name="number">
    	<input type="submit" name="submit" value="Add">
        </form>
    	 <div class="content">
    	 	<?php    if (isset($_POST['submit'])) {?>
    	 	<h4>The Last Push: &nbsp;&nbsp;<?php echo $number ?></h4>
    	 	<h4>All Number List: &nbsp;&nbsp; <?php print_r($class)?> </h4>
    	 	<h4>All List Length: &nbsp;&nbsp;<?php  echo  $length; ?></h4>
    	 	<h4>Mean: &nbsp;&nbsp;<?php echo number_format($mean,2)  ?> </h4>
    	 	<h4>Variance:  &nbsp;&nbsp;<?php echo number_format($Variance,2)  ?></h4>
        <h4>Standard Deviation: &nbsp;&nbsp;<?php echo $stddeviation ?></h4>

    	 <?php } ?>
    	 </div>
    </div>
  

</body>
</html>