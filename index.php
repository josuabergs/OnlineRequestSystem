<!-- developed by Daniel Rivera && Josua Berganio -->

<!DOCTYPE html>
<html>
<head>
	<title>Online Request System | PUP-Binan</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css">
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="assets/css/sweetalert.css">
</head>

 <style type="text/css">
  	.modal{
	  background-color: white !important;
	  width: 45%;
	  max-height: 72%;
	  height: 72% !important;
	}
	#log{
		height: 60px;
		width: 63px;
	}
	.asd{
		float: 12 right;
	}
	.siz{
		height: 10px;
	}
	.ref-num {
		font-size: 20px;
	}
  </style>
<body>

	<div class="container">
		<div class="container">
			<div class="container">
			
				<div class="row">
					<div class="col s12 m12">
						<div id="card" class="white z-depth-5">
								<div class="siz"></div>
							<div class="center-align">
								<img id="log" src="assets/img/puplogo.png" class="responsive-img"> <p  class="asd">Polytechnic University Of the Philippines</p>

								<h5>Document Request</h5>
							</div>

							<form id="login-form">
								<div class="input-field">
									<select id="document">
										<option value="No document selected">Please select document</option>
						         		<option value="Identification Card">Identification Card</option>
  										<option value="Library Card">Library Card</option>
  										<option value="Certificate of Enrollment">Certificate of Enrollment</option>
  										<option value="Registration Card">Registration Card</option>
  										<option value="Good Moral">Good Moral</option>
  										<option value="Endorsement Letter">Endorsement Letter</option>
  										<option value="Memorandum of Agreement">Memorandum of Agreement</option>
						            </select>
								</div>
								<div class="input-field">
  										<input type="text" id="student_name" placeholder="Enter student name here"> <br>
  										<input type="text" id="student_no" placeholder="Enter student number here"> <br>
								</div>
								<div class="right-align">
									
									 <!-- Modal Trigger -->
  <a class="waves-effect waves-light btn modal-trigger" id="login-btn" href="#modal1"><i class="material-icons right">done</i>Request</a>

  <!-- Modal Structure -->
  <div id="modal1" class="modal">
    <div class="modal-content">
      <h5 class="center-align">Document Request Ticket</h5>
      	<p id="field1"></p>
		<p id="field2"></p>
		<p id="field3"></p>
		<p>Fees: <span class="red-text">Php150.00</span></p>
		<p>Reference number: <span class="ref-num red-text">ABCD1234</span></p>
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Agree</a>
    </div>
  </div>
  

								</div>
							</form>
						</div>
						<div class="footer">
							Developers: JOSUA BERGANIO &amp; NYEL RIVERA &copy; 2018 
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script>
	<script src="assets/js/script.js"></script>

	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
  <script type="text/javascript">
  	$(document).ready(function() {
  		$('select').material_select();
		$('.modal').modal();
		$('#document').on('change', function() {
			$('#field1').html('Document Requested: '+$(this).val());
		});
		$('#student_name').on('keyup', function() {
			$('#field2').html('Student Name: '+$(this).val());
		});
		$('#student_no').on('keyup', function() {
			$('#field3').html('Student Number: '+$(this).val());
		});
	});
  </script>
	
</body>
</html>