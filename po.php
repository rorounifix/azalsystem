<?php
include("conn.php");
	
$query = "SELECT * FROM `purchase order` ORDER BY `id` DESC LIMIT 20";
$result = mysqli_query($conn , $query);

?>
<!--<link rel="stylesheet" style="css/text" href="style.css">-->
<!--<div id="header">-->
	<table class="table table-hover" >
		<thead >
			<tr>
				<th ><a>Order No.</a></th>
				<th><a>Date Receive</a></th>
				<th><a>Line Item</a></th>
				<th><a>Quantity</a></th>
				<th><a>Location</a></th>
				<th><a>Required Date</a></th>
				<th><a>Status</a></th>
				<th><a>Sign By</a></th>
			</tr>
		</thead>
		<tbody class="table-responsive table" >
	
<!--</div>-->

<!--<div id="result">-->

		<?php
					
			while($row = mysqli_fetch_array($result)){
				$po = $row["Purchased Order"];
				$id = $row["id"];
				$poDateReceive = $row["PO Date Receive"];
				$lineItem = $row["Line Item"];
				$quantity = $row["Quantity"];
				$location = $row["Location"];
				$etaDate = $row["ETA Date"];
				$status = $row["STATUS"];
				$sign = $row["Sign By"];
				
				echo "	";
				echo "		<tr>";
				echo "		<td>" . $po . "</td>  ";
				echo "		<td>" . $poDateReceive . "</td>";
				echo "		<td>" . $lineItem . "</td>";
				echo "		<td>" . $quantity . "</td>";
				echo "		<td>" . $location . "</td>";
				echo "		<td>". $etaDate ."</td>";
				echo "		<td>" .  $status  . "</td>";
				echo "		<td>" . $sign . "</td>";
				echo "		</tr>";
				
					
			}	
		echo "	</tbody>";
		echo "</table>";		
				
		?>
	
		
