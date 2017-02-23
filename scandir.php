<?php

function file_list($id){
	
	$dir = "measurement/".$id."/file";
	if(!file_exists($dir)){
		mkdir($dir);
	};
	
	
	if ($handle = opendir($dir)) {
		$x = 0;
		while (false !== ($entry = readdir($handle))) {
			
			
			
			
			if ($entry != "." && $entry != "..") {
				// echo "$entry<br >";
				
				echo '
				
				<div class="col-xs-1" style="">
							<div class="">
								<!-- Trigger the modal with a button -->
								<div  data-toggle="modal" data-target="#myModal'.$x.'"  >
									<i class=" fa fa-file-pdf-o fa-5x pdf"></i><br>
										<a style="word-wrap:break-word;">
										'.$entry.'
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
								<h4 class="modal-title">'.$entry.'</h4>
							  </div>
							  <div class="modal-body" style="">
								<iframe src="measurement/'.$id.'/file/'.$entry.'" class="img" height="500px;" width="580px"></iframe>
							  </div>
							  <div class="modal-footer">
								<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							  </div>
							</div>

						  </div>
						</div>
				
				
				
				';
			$x++;	
				
			}
			
		}
		closedir($handle);
	}
}



						

?>