
<!DOCTYPE html>
<html>
<head>
	<title></title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Montserrat|Open+Sans" rel="stylesheet">
<!-- 
	 font-family: 'Montserrat', sans-serif; 
	font-family: 'Open Sans', sans-serif;
	-->

</head>
<body>

	<div class="container">
		<h1 class="text-center">Feedback Form </h1><br>

		<div class="row">
			
			<div class="col-lg-6">
			<form action="" >
			<?php echo "1)Were the videos helpful?<br>"; ?>					
			<input type="radio" name="q1" value="a1" id="radio_experience">Yes	<br>
			<input type="radio" name="q1" value="b1" id="radio_experience" >No<br>
			<input type="radio" name="q1" value="c1" id="radio_experience">Maybe<br>	</form>
			<form action="">
			<?php echo "<br>2)Does the teacher help students to realise their career goals?<br>"; ?>					
			<input type="radio" name="q1" value="a2" id="a">Yes	<br>
			<input type="radio" name="q1" value="b2" id="b">No<br>
			<input type="radio" name="q1" value="c2" id="c">Maybe<br>	</form>

			<form action=""><?php echo "<br>3)Does the teacher help students to realise their strength and developmental needs?<br>"; ?>					
			<input type="radio" name="q1" value="a3">Yes	<br>
			<input type="radio" name="q1" value="b3">No<br>
			<input type="radio" name="q1" value="c3">Maybe<br> </form>

			
			<form action =""><?php echo "<br>4)Has the teacher completed entire syllabus?<br>"; ?>					
			<input type="radio" name="q1" value="a4">Yes	<br>
			<input type="radio" name="q1" value="b4">No<br>
			<input type="radio" name="q1" value="c4">Maybe<br></form>

			<form action =""><?php echo "<br>5)Has the teacher covered relevant topics beyond syllabus?<br>"; ?>					
			<input type="radio" name="q1" value="a5">Yes	<br>
			<input type="radio" name="q1" value="b5">No<br>
			<input type="radio" name="q1" value="c5">Maybe<br></form>

			<form action =""><?php echo "<br>6)Rate the site<br>"; ?>					
			<input type="radio" name="q1" value="a6">1 &nbsp&nbsp
			<input type="radio" name="q1" value="b6">2  &nbsp&nbsp
			<input type="radio" name="q1" value="c6">4  &nbsp&nbsp
			<input type="radio" name="q1" value="e6">5  &nbsp&nbsp
			<input type="radio" name="q1" value="f6">6  &nbsp&nbsp
			<input type="radio" name="q1" value="g6">7  &nbsp&nbsp
			<input type="radio" name="q1" value="h6">8  &nbsp&nbsp
			<input type="radio" name="q1" value="i7">9  &nbsp&nbsp
			<input type="radio" name="q1" value="j6">10 </form>
			<br>
			<br>
			<button class="btn btn-success d-block m-auto" type="submit" onclick="thank()" > Submit </button>			
			
			</div>

			

				</div>
			</div>
				</div>
			</div>

		</div>

	</div>

	<script src="feedback.js"></script>

</body>
</html>