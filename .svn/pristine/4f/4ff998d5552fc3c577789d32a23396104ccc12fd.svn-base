<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Lib_chart {
	public $CI;
	public function __construct() {
		$this->CI =& get_instance();
	}
		
	function printGraph()
	{
		$days = array();
		$xOffset = 0;
		$xIncrement = 40; // width of bars
		$graphHeight = 500; // target height of graph
		$maxResult = 1;
		$scale = 1;
		
		// Database Connection Information
		
		// Connect to and select the database
		
		// Get the data and find max values
		$result = mysql_query($query);
		if (!$result) die("no results available!");
		
		while($row = mysql_fetch_assoc($result)) {
			$days[$row['date']] = array( "P1" => $row['priority1']
				, "P2" => $row['priority2']
				, "P3" => $row['priority3']);
		
			//Check if this column is the largest
			$total = $row['total'];
			if($maxResult < $total) $maxResult = $total;
		}
		mysql_free_result($result);
		
		// Set the scale
		$scale = $graphHeight / $maxResult;
		
		echo '<ul class="TGraph">';
		
		foreach($days as $date => $values){
			// Reverse sort the array
			arsort($values);
			
			foreach($values as $priority => $num){ 
				// Scale the height to fit in the graph
				$height = ($num*$scale);
				
				// Print the Bar
				echo "<li class='$priority' style='height: ".$height."px; left: ".$xOffset."px;' title='$date'>$num<br />$priority</li>";
			}
			// Move on to the next column
			$xOffset = $xOffset + $xIncrement;
		}
		echo '</ul>';
	}
}