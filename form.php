<!DOCTYPE html>
<html>
<head>
	<title>form</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<br><br>
		<h1 style="color: red">REGISTRATION FORM:</h1>
		
	<form method="post" action="data2.php">
		<div class="form-group">
			<label>Student Name</label>
			<input type="text" name="sname" class="form-control" placeholder="student name" required>
		</div>
		
		<div class="form-group">
			<label for="email">Email:</label>
			<input type="text" name="email" class="form-control" placeholder="email" required>
		</div>
		<div class="form-group">
			<label for="number">Mobile Number:</label>
			<input type="text" name="mno" class="form-control" placeholder="mobile number" required>
		</div>
		<div class="form-group">
			<label>Address:</label>
			<textarea type="text" name="address" class="form-control" placeholder="address" required></textarea> 
		</div>
		<div class="form-group">
			<label>Gender:</label><br>
			 <input type="radio"  id="" name="gender" value="male" required> Male <br>

             <input type="radio"  id="" name="gender" value="female" required> Female
		</div>
		<div class="form-group">
			<label>Collage:</label>
			 <select name="collage" class="form-control" required>
             <option value="0">Select</option>
             <option value="rjit">RJIT</option>
             <option value="shriram college">SHRIRAM COLLEGE OF ENGINEERING AND MANAGEMENT</option>
             <option value="mpct">MPCT</option>
             <option value="mits">MITS</option>
             <option value="itm">ITM</option>
             <option value="others">OTHERS</option>

             </select>
		</div>
		<div class="form-group">
			 <label>Qualifications</label> <br>
              <select name="qualification" class="form-control" required>
              <option value="0">Select</option>
              <option value="btech">B.Tech</option>
              <option value="bca">B.C.A</option>
              <option value="mca">M.C.A</option>
              <option value="bsc">B.S.C</option>
              <option value="other">OTHER</option>
          </select>
                                        
		</div>
		<div class="form-group">
			<label>Branch</label> <br>
            <select name="branch" class="form-control" required>
             <option value="0">Select</option>
             <option value="cse">C.S.E</option>
             <option value="it">I.T</option>
             <option value="ee">E.E</option>
             <option value="ec">E.C</option>
             <option value="mech">MECH.</option>
             <option value="civil">CIVIL</option>
             <option value="automobile">AUTOMOBILE</option>
             <option value="other">OTHER</option>
                                        

             </select>
			
		</div>
		<div class="form-group" >
			 <label>Semester</label> <br>
             <select name="sem" class="form-control" required>
             <option value="0">Select</option>
             <option value="Ist">Ist Semester</option>
             <option value="IInd">IInd Semester</option>
             <option value="IIIrd">IIIrd Semester</option>
             <option value="IVth">IVth Semester</option>
             <option value="Vth">Vth Semester</option>
             <option value="VIth">VIth Semester</option>
             <option value="VIIth">VIIth Semester</option>
             <option value="VIIIth">VIIIth Semester</option>
                                        

            </select>
			
		</div>

		<div class="form-group">
        <label>Internship Course</label> <br>
        <select name="Icourse" class="form-control" required>
        <option value="0">Select</option>
                                         
        <option value="Web Designing">Web Designing Internship Course (45 days)</option>
        <option value="Web Development">Web Development Internship Course (90 days)</option>
        <option value="Laravel">PHP</option>
                           
        <option value="Laravel">Laravel 7</option>
        <option value="Angular">Angular 9</option>
        <option value="Angular">Vue Js</option>
                        
        <option value="React JS">React JS</option>
        <option value="React Native">React Native</option>
        </select>
        </div>



		
		<input type="submit" name="submit" class="btn btn-info" value="submit">
		


	</form>
		
	</div>
</div>

</body>
</html>