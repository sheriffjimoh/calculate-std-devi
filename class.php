<?php



/**

Author name : Jimoh Sherifdeen

 * 
 */
class Main
{
    

    // here is the array 
	 // public  $list = array(9, 2, 5, 4, 12, 7);

	    public function list()
	    {
	    	$collection = array();

			for($i = 1; $i <= 32; $i++){
			 $ukey =  rand(47, 92);
			  if(!in_array($ukey, $collection)){
			    $collection[] =$ukey ;
			  }
			}
			return $collection;
	    }
   





   
   // add all array values
	public function AddArray()
	{

		  $total = 0;

		foreach ($this->list() as $arr) {
		
			$total += $arr ;
                                   }

           return $total;
	}




     public function GetMean()
     {
    	
    	$divide =$this->AddArray() / $this->Arraylenght();
          
           return $divide;
     }
       

       public function Arraylenght()
       {
       	return  count($this->list());   

       }

        public function SubtractIndexfromMean()
     {

     	 $total = 0;
    	
		foreach ($this->list() as $arr) {
		
            $subtrat = $arr - $this->getMean();
         // exponesial
          $squarevalues = $subtrat * $subtrat;              
            

              $total +=$squarevalues;
          }

           return  $total;
     }




	     public function Getvariance()
	     {  
	     	$subtratN = $this->Arraylenght() -1;
	        $divide   = 1/$subtratN;

	        $variance = $divide*$this->SubtractIndexfromMean();
	       
	        return  $variance;
	     }

            


             public function FinnalAnswer()
	     {  
	     	 // square root of the  variance
            
	     	$result = sqrt($this->Getvariance());
              
               $format =number_format($result, 2);

	     	return $format;
	     }





}







?>