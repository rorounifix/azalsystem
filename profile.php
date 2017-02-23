<?php
include("scandir.php");

$id = $_GET["id"];


$xml = simplexml_load_file("measurement/".$id."/profile.xml");
$id = $xml->reference;
$name = $xml->name;
$contact_1 = $xml->contact_1;
$contact_2 = $xml->contact_2;
$fax = $xml->fax;
$email = $xml->email;
$house = $xml->house;
$address = $xml->address;
$remarks = $xml->remarks;

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Edited by Rorounifix@gmail.com -->
  <!-- Credits to http://www.w3schools.com/ -->
  
  <title>Azal System</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <link rel="icon" href="http://i1060.photobucket.com/albums/t441/rorounifix/AZAL%20SITE/azallogo_zpswswcoya3.png">
  
  
  <!-- CSS Area -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="css/style.css" rel="stylesheet" type="text/css">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet">
  <link href="css/font-awesome.min.css" rel="stylesheet">
  <link href="css/fileinput.min.css" rel="stylesheet">
  
  
  <!-- JS Area -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/fileinput.min.js"></script>
  <script src="js/fa.js"></script>
  
  <script src="js/ajax.js"></script>
  <script src="js/java.js"></script>
  <script src="js/script.js"></script>
  
</head>

<body >

	<div class="navbar navbar-default">
		<div class="col-xd-2">
			
					
			<div class="">
				<form class="navbar-form" action="#">
					
					<i class="fa fa-close fa-2x close pull-left" id="close"></i>
					<div class="input-group pull-right">
						<input type="text" id="fileSeach" class="form-control" placeholder="File search..." autofocus>
						<span class="input-group-addon btn btn-default" id="fileSearchSubmit" style="width:10%;">
						<i class="fa fa-search"></i></span>
					</div>
				</form>
			</div>
					  
		</div>
					
	</div>



	<div  class="container-fluid" >
<!--- Profile --->
		<div class="row">
			<div id="" class="col-md-4">
			
				<div class="panel-heading text-center" style="background:#A3C3FF;color:white;">
					<span class="fa fa-user fa-3x"></span>&nbsp&nbsp&nbsp&nbsp&nbsp<strong class="" style="font-size:30px;">Profile</strong>
					
					
					<!---EDIT MODAL--->
					<!-- Trigger the edit modal with a button -->
						<span  data-toggle="modal" data-target="#editModal"  >
							<i class="fa fa-pencil-square-o fa-2x pull-right edit" id="edit"></i>
						</span>
						
						<!-- Modal -->
						<div id="editModal" class="modal fade" role="dialog" >
						  <div class="modal-dialog">

							<!-- Modal content-->
							<div class="modal-content" >
							  <div class="modal-header" style="background:#A3C3FF;border-radius:5px 5px 0 0" >
								<button type="button" class="close" data-dismiss="modal">&times;</button>
								<!---- NAME OF THE FILE ---->
								<h4 class="modal-title" >Edit Profile</h4>
							  </div>
							  <div class="modal-body" style="color:red">
									
								<form >
									<div class="form-group">
										<input type="text" id="name" class="form-control" placeholder="Name" value="<?php echo $name ?>">
									</div>
									<div class="form-group">
										<input type="text" id="contact_1" class="form-control" placeholder="Contact 1" value="<?php echo $contact_1 ?>">
									</div>
									<div class="form-group">
										<input type="text" id="contact_2" class="form-control" placeholder="Contact 2" value="<?php echo $contact_2 ?>">
									</div>
									<div class="form-group">
										<input type="text" id="fax" class="form-control" placeholder="Fax" value="<?php echo $fax ?>">
									</div>
									<div class="form-group">
										<input type="email" id="email" class="form-control" placeholder="Email" value="<?php echo $email ?>">
									</div>
									<div class="form-group">
										<input type="text" id="house" class="form-control" placeholder="House" value="<?php echo $house ?>">
									</div>
									<div class="form-group">
										<input type="text" id="address" class="form-control" placeholder="Address" value="<?php echo $address ?>">
									</div>
									<div class="form-group">
										<input type="text" id="remarks" class="form-control" placeholder="Remarks" value="<?php echo $remarks ?>">
									</div>
									<div class="form-group ">
										<input type="button" id="updateProfile" class="btn btn-primary" value="Update">
										<input type="reset" class="btn btn-danger" value="Reset">
									</div>
									
													
								
								</form>
								
								
								
								
							  </div>
							  <div class="modal-footer">
								<button type="button" class="btn btn-default close" data-dismiss="modal">Close</button>
							  </div>
							</div>

						  </div>
						</div>
					
				</div>
						
				<div class="well" style="background:#;">
		
						<div class="thumbnail jumbotron">
							<span>
								<h5 color="">Reference : &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <strong><?php echo $id ?></strong></h5>
							</span>
							<span>
								<h5>Name : &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <strong><?php echo $name ?></strong></h5>
							</span>
							
							<span>
								<h5>Contact :&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <strong><?php echo $contact_1 ?></strong></h5>
							</span>
							<span>
								<h5>Contact :&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <strong><?php echo $contact_2 ?></strong></h5>
							</span>
							<span>
								<h5>Fax :&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <strong><?php echo $fax ?></strong></h5>
							</span>
							<span>
								<h5>Email :&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <strong><a href="mailto:<?php echo $email ?>"><?php echo $email ?></strong></a></h5>
							</span>
							<span>
								<h5>House :&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <strong><?php echo $house ?></strong></h5>
							</span>
							<span>
								<h5>Address :&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <strong><?php echo $address ?></strong></h5>
							</span>
							<span>
								<h5>Remarks :&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <strong><?php echo $remarks ?></strong></h5>
							</span>
						</div>
				</div>
				
				
				
				<div class="panel-heading" style="background:#A3C3FF;color:white;">
						<span class="fa fa-comment fa-lg"><strong>Note... </strong></span> 
							<span id="noteSearchInput" class="input-group">
								<input type="text" id="noteSearch" class="form-control" placeholder="Note search...">
								<span class="input-group-addon btn btn-primary" id="noteSearchSubmit">
								<i class="fa fa-search" id="noteSearchSubmit"></i></span>
							</span>		
									
							
				</div>
				
				<div class="well">
				
		<!--- REMARKS --->		
					<div class="">
						<div class="panel panel-default"  >
							
							
				<!--- BODY NOTE ---->
							<div class="panel-body"  style="background:#E1EBFF;max-height:200px;overflow-y:auto;overflow-x:hidden;" >
								<ul id="note" class="chat" style="word-wrap: break-word;" >
									<?php
									    if(file_exists("measurement/$id/remarks.txt")){
											include("measurement/$id/remarks.txt"); 
											}
									?>
								</ul>
							</div>
							
							
							<div class="panel-footer" style="background:#A3C3FF;color:white;">
								<div class="input-group">
									<input id="btn-input" type="text" class="form-control input-lg" placeholder="Type your message here..." />
									<input type="hidden" id="id" value="<?php echo $id ?>">
									<span class="input-group-btn">
										<button type="button" class="btn btn-primary btn-lg"  id="btn-chats">Send</button>
									</span>
								</div>
												
							</div>
						</div>
					</div>
				</div>
				
			<!---Remarks Footer---->
				
				
			</div>
			
			
			<!--- FILE SECTION --->			
			<div class="col-md-8 well">
				<div id="file-box" class="">
					<div class="thumbnail" id="file"  style="max-height:500px;min-height:500px;overflow-y:auto;">
						<?php file_list($id) ?>
					</div>			
				</div>
				
				<div id="upload-box" class="">
					<form action="fileUpload.php" method="post" enctype="multipart/form-data">
						<input type="hidden" name="id" value="<?php echo $id ?>">
						<label class="control-label">Select File</label>
						<input id="input-1a" name="file" type="file" class="file" data-show-preview="false" multiple>						
					</form>	
				</div>
				
				
				
			</div>


			
		</div>
		
		
		
	
	</div>
</body>
</html>