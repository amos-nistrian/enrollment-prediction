<!DOCTYPE html>
<html>
	
	<?php
	$array= $_POST['choces]'];
	echo $array;
	?>

	
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=9" >
<!-- InstanceBeginEditable name="doctitle" -->
<title>Course Prediction | Western Washington University</title>
<!-- InstanceEndEditable -->

<link rel="stylesheet" href="custom.css">
<link rel="stylesheet" href="customcsscolor.css">

<link rel="stylesheet" type="text/css" href="https://www.wwu.edu/wwucommon/template/wwustyles.css" />
<link rel="stylesheet" type="text/css" href="western_template/resources/rsv/layout.css" />
<link rel="stylesheet" type="text/css" href="western_template/resources/rsv/menu-style.css" />
<link rel="stylesheet" type="text/css" href="western_template/resources/custom.css" />
<script type="text/javascript" src="https://www.wwu.edu/wwucommon/template/jquery.js"></script>
<script type="text/javascript" src="https://www.wwu.edu/wwucommon/template/navSliding.js"></script>
<script type="text/javascript" src="https://www.wwu.edu/wwucommon/template/jquery.corner.js"></script>
<link rel="shortcut icon" href="https://www.wwu.edu/wwucommon/favicon.ico" type="image/vnd.microsoft.icon" />

<?php include'western_template/includes/analytics.html'; ?>

</head>

<body>
<div id="wrap">	
	<!-- University header -->
	<?php include 'western_template/resources/rsv/wwuheader.html'; ?>
  <div id="content-wrap">
  <div id="content" style="margin-left:auto">
<br>
<br>
<br>
<br>


<div class="w3-container">

	<div class="col-sm-3"></div>
	<div class="col-sm-8">

			<div class="w3-third w3-container">
				<div class="w3-dropdown-hover">
				<button id='classesBtn' class="w3-btn w3-theme w3-large">Majors <i class="fa fa-caret-down"></i></button>
				<div class="w3-dropdown-content w3-light-grey w3-grey w3-left-align" style="width:300px">
					
				<input id="major2" class="w3-check" type="checkbox" checked="checked">
				<label class="w3-validate">Chemistry</label>
				<br>	
				<!--
				<input id="major1" class="w3-check" type="checkbox">
				<label class="w3-validate">Math</label>
				<br>
				<input id="major2" class="w3-check" type="checkbox">
				<label class="w3-validate">Computer Science</label>
				<br>
				<input id="major2" class="w3-check" type="checkbox">
				<label class="w3-validate">Journalism</label>
				<br>
				<input id="major2" class="w3-check" type="checkbox">
				<label class="w3-validate">Engineering</label>
				<br>
				-->
			
				<br>
				</div>
				</div>
			</div>

			<div class="w3-third w3-container">
			<div class="w3-dropdown-hover">
			<button class="w3-btn w3-theme w3-large">Classes <i class="fa fa-caret-down"></i></button>
			<div id='classesdropdown' class="w3-dropdown-content w3-light-grey w3-grey w3-left-align" style="width:415px">
			
			<!-- when the page is loaded retrieve classes from php file and store then in a JSON object then call JavaScript loadClasses() to display them on the page
			-->
			<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
		       <script type="text/javascript">
				$.getJSON('retrieveClasses.php', function(records) {
		            	loadClasses(records.map(function(record) {
		      	        return record['course_no'];
		      	      }));
		            });
			 </script>
			
			</div>
			</div>
			</div>

			<div class="w3-third w3-container">
				<input id="major1" class="w3-check" type="checkbox" name="terms">
				<label class="w3-validate">Fall</label>
				<br>
				<input id="major2" class="w3-check" type="checkbox" name="terms">
				<label class="w3-validate">Winter</label>
				<br>
				<input id="major2" class="w3-check" type="checkbox" name="terms">
				<label class="w3-validate">Spring</label>
				<br>
				<br>
			</div>

	</div>
</div> <!-- w3-container -->

<br>
<br>
<br>
<br>
<br>
<br>


<div class="w3-container">
	<div class="col-sm-3"></div>
	<div class="col-sm-8">
	<div class="w3-third w3-container">
	<button class="w3-btn w3-theme" onclick="loadArray()" id="testsubmit">Submit </button>
	</div>
	</div>
</div>
<br>
<br>
<br>
<br>
<br>
<br>


<div class="w3-container">
	<div class="w3-responsive w3-card-4">
		<table class="w3-table w3-striped w3-bordered">
			<thead>
				<tr class="w3-theme">
					<th style="font-family: verdana">Class</th>
					<th>Term</th>
					<th>Score</th>
				</tr>
			</thead>
			<tbody id="datatable"></tbody>
		</table>
	</div>
</div>
<br>
<br>
<br>
<br>


<hr>
<div class="w3-center">
<ul class="w3-pagination w3-padding-32">
<li><a class="w3-theme" href="javascript:void(0)">1</a></li>
</ul>
</div>
<br>


</div><!--content  -->
</div><!--content-wrap  -->
<div class="end"></div>
  <!-- Unit Footer -->
  <?php include('western_template/includes/footer.html') ?>
  <!-- University footer  -->
  <?php include('western_template/resources/rsv/wwufooter.html') ?>
  <!-- University Copyright -->

  <div id="copyright">
     Copyright © <?php echo date("Y"); ?>
     Western Washington University  
  </div><!-- copyright -->
</div><!--wrap  --><!--Other scripts can be placed here -->

<!-- This script rounds the corners of anything with class = "rounded", such as the department footer -->

<script type="text/javascript">
$(document).ready( function(){
  $('.rounded').corner();
});</script>


<!-- Script for Tabs, Progress bars  -->
<script>

// Tabs
function openCity(evt, cityName) {
	var i;
	var x = document.getElementsByClassName("city");
	for (i = 0; i < x.length; i++) {
		x[i].style.display = "none";
	}
	var activebtn = document.getElementsByClassName("testbtn");
	for (i = 0; i < x.length; i++) {
		activebtn[i].className = activebtn[i].className.replace(" w3-dark-grey", "");
	}
	document.getElementById(cityName).style.display = "block";
	evt.currentTarget.className += " w3-dark-grey";
}

var mybtn = document.getElementsByClassName("testbtn")[0];
mybtn.click();

function showDivs(n) {
	var slideIndex;
	var x = document.getElementsByClassName("mySlides");
	if (n > x.length) {
		slideIndex = 1;
		
	}
	if (n < 1) {
		slideIndex = x.length;
	}
	for (i = 0; i < x.length; i++) {
		x[i].style.display = "none";
	}
	x[slideIndex-1].style.display = "block";
}

showDivs(1);


// function reads from an array and loads the entries into the clasesdropdown
function loadClasses(classesArray) {
	// #classesfield is the id of the classes dropdown
	for (var i = 0; i < classesArray.length; i++) {
		$("#classesdropdown").append('<input class="w3-check" type="checkbox" name="classes">'); // add checkbox to our dropdown

		$label = $('<label class="w3-validate classes-checkboxs" name="classid"></label>'); // crete element to inject
		$label[0].innerHTML= (classesArray[i]); // give it a class label
		$("#classesdropdown").append($label); // add it to our dropdown
		$("#classesdropdown").append('<br>'); // add new line to the dropdown
	}
}

function loadArray() {

	//Get classes selected
	var choices = [];
	var classes = document.getElementsByName('classes');
	var classid = document.getElementsByName('classid');
	
	for (var i=0;i<classes.length;i++){
	  if (classes[i].checked) {
		choices.push(classid[i].innerHTML);
	  }
	}
	
	//Get quarters selected
	var termsSelected = [];
	var terms = document.getElementsByName('terms');
	
	for (var i = 0; i < terms.length; i++){
	  if (terms[i].checked) {
		termsSelected.push(i + 1);

	  }
	}
	
	//Retrieve data from database , choices was an array that was populated line 246-254
	$.ajax({ type: "POST",
	    url: "retrieveResults.php", 
	    data: { "choices" : choices, "quarters" : termsSelected },
	    dataType: 'json',
	    success: 
		
		//Fill data table on page with the results, "result" is a JSON keyword
		function(result) {
			$("#datatable").html(""); //clear out the table
	      	$.each(result, function(index, value) { // go through each result in the json array "result" is a JSON keyword
				var mytbody = document.getElementById('datatable');
				var row = document.createElement('tr');
				row.className = "w3-white";
				
				var course_cell = document.createElement('td');
				var course_no = document.createTextNode(value.course_no);
				
				var term_cell = document.createElement('td');
				var term = document.createTextNode(getTerm(value.term));
				
				var projection_cell = document.createElement('td');
				var projection = document.createTextNode(value.projection);
				
				course_cell.appendChild(course_no);
				term_cell.appendChild(term);
				projection_cell.appendChild(projection);
				
				row.appendChild(course_cell);
				row.appendChild(term_cell);
				row.appendChild(projection_cell);
				
				mytbody.appendChild(row);
	      	});
		}
	});

}

function getTerm(term) {
	switch(term) {
		case '1': return "Fall"; break;
		case '2': return "Winter"; break;
		case '3': return "Spring"; break;
		case '4': return "Summer"; break;
		default: break;
	}	
}
</script>

</body>
</html>

<?php
ob_end_flush();
?>