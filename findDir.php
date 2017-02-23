<?php


function file_search($id, $file){
	
	$dir = glob("measurement/$id/file/*$file*");
	// $file = $_GET['search'];
	// $file = "20";
	$x = 0;
	foreach ($dir as $filename) {
		// echo $filename."<br />";
		$xfile = pathinfo($filename,PATHINFO_BASENAME);
		// echo $x . "<br />";
		
		echo '
				
				<div class="col-xs-1" style="background:#fff;">
							<div class="">
								<!-- Trigger the modal with a button -->
								<div  data-toggle="modal" data-target="#myModal'.$x.'"  >
									<i class=" fa fa-file-pdf-o fa-5x pdf"></i><br>
										<a style="word-wrap:break-word;">
										'.$xfile.'
										</a>
								</div>
								
							</div>
						</div>
												
						<!-- Modal -->
						<div id="myModal'.$x.'" class="modal fade" role="dialog" >
						  <div class="modal-dialog">

							<!-- Modal content-->
							<div class="modal-content">
							  <div class="modal-header">
								<button type="button" class="close" data-dismiss="modal">&times;</button>
								<!---- NAME OF THE FILE ---->
								<h4 class="modal-title">'.$xfile.'</h4>
							  </div>
							  <div class="modal-body" style="">
								<iframe src="'.$filename.'" class="img" height="500px;" width="580px"></iframe>
							  </div>
							  <div class="modal-footer">
								<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							  </div>
							</div>

						  </div>
						</div>
				
				
				
				' ;
	
	$x++;
	
	}

}

$id = $_GET["id"];
$file = strtoupper($_GET["file"]);

file_search($id, $file);



?>
