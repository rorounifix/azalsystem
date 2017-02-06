<?php

include("conn.php");
	
$query = "SELECT * FROM `measurement` ORDER BY `id` DESC LIMIT 20";
$result = mysqli_query($conn , $query);

?>

		<table class="table table-hover"  >
		<thead >
			<tr>
				<th ><a>Reference No.</a></th>
				<th><a>Name</a></th>
				<th><a>Contact</a></th>
				<th><a>House</a></th>
				<th><a>Remarks</a></th>
				<th><a>Files</a></th>
			</tr>
		</thead>
		<tbody class="table table-responsive" >
	

		<?php
					
			while($row = mysqli_fetch_array($result)){
				$reference = $row["id"];
				$name = $row["name"];
				$contact = $row["contacts"];
				$house = $row["house"];
				$remarks = $row["remarks"];
								
				echo "	";
				echo "	<tr class='' id=".$reference.">";
				echo "		<td >" . $reference . "</td>  ";
				echo "		<td >" . $name . "</td>  ";
				echo "		<td>" . $contact . "</td>";
				echo "		<td>" . $house . "</td>";
				echo "		<td>" . $remarks . "</td>";
				echo "		<td>Files attached</td>";
				echo "	</tr>";
				
			
			
			
				

					
				}	
			echo "	</tbody>";
			echo "</table>";		
			
			$conn->close();

		?>