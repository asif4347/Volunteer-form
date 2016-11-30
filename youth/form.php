<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Registration New Form</title>
		<script>
			var camera = document.getElementById('camera');
			var frame = document.getElementById('frame');

			camera.addEventListener('change', function(e) {
				var file = e.target.files[0];
				// Do something with the image file.
				frame.src = URL.createObjectURL(file);
			});
		</script>
<!--		<script>-->
<!--	function myFunction() {-->
<!--		var x = document.getElementById("myCheck").required;-->
<!--		document.getElementById("demo").innerHTML = x;-->
<!--	}-->
<!--	</script>-->

	 <style type="text/css">
        body {
		background-image:url(img/bg1.jpg);
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            -o-user-select: none;
            user-select: none;
            outline: none;
        }

        .modal-backdrop.in {
            -ms-opacity: 0.95;
            opacity: 0.95;
        }

        .glyphicon-spin {
            -webkit-animation: spin 1000ms infinite linear;
            -moz-animation: spin 1000ms infinite linear;
            -ms-animation: spin 1000ms infinite linear;
            -o-animation: spin 1000ms infinite linear;
            animation: spin 1000ms infinite linear;
        }

        @-webkit-keyframes spin {
            0% {
                -webkit-transform: rotate(0deg);
                transform: rotate(0deg);
            }

            100% {
                -webkit-transform: rotate(359deg);
                transform: rotate(359deg);
            }
        }

        @keyframes spin {
            0% {
                -webkit-transform: rotate(0deg);
                transform: rotate(0deg);
            }

            100% {
                -webkit-transform: rotate(359deg);
                transform: rotate(359deg);
            }
        }

        .checkbox, .radio {
            position: relative;
            display: inline !important;
            margin-right: 65px;
            margin-top: 10px;
            margin-bottom: 10px;
        }

        .margin-bottom-7 {
            margin-bottom: 7px;
        }
    </style>


    <style>
        .margin-top {
            margin-top: 70px;
        }

        .padding-top-bottom-25 {
            padding-top: 25px;
            padding-bottom: 25px;
        }

        textarea {
            -moz-resize: none;
            -ms-resize: none;
            -o-resize: none;
            resize: none;
        }

        .margin-bottom {
            margin-bottom: 20px;
        }

        .hideOthers {
            display: none;
        }

        .hideOthersDesc {
            visibility: hidden;
        }

        .btn-primary.active, .btn-primary:active {
            color: #000 !important;
            background-color: rgba(249, 194, 2, 0.71) !important;
            border-color: #204D74;
        }
    </style>
	<meta charset="utf-8" /><meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<title>
		User - Pakistan Red Crescent Society
	</title>
	<link href="Content/bootstrap.min.css" rel="stylesheet" />
	<link href="Content/bootstrap-dialog.min.css" rel="stylesheet" />
	<link href="Content/bootstrap-datetimepicker.min.css" rel="stylesheet" />
	<link href="css/multiple-select.css" rel="stylesheet">
	<link href="Content/main.css" rel="stylesheet" />
	<script src="js/jquery-1.7.1.min.js"></script>
	<script src="js/multiple-select.js"></script>
    <script src="Scripts/bootstrap.min.js"></script>
    <script src="Scripts/bootstrap-dialog.min.js"></script>
    <script src="Scripts/moment.min.js"></script>
    <script src="Scripts/bootstrap-datetimepicker.min.js"></script>
    <script src="Scripts/bs.pagination.js"></script>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/respond.js"></script>
    <link href="css/style.css" rel="stylesheet" type="text/css" />
</head>

<body>
	<div class="container" >
		<form action="process_index.php" class="form-group" method="POST" enctype="multipart/form-data" id="contactform">
			<div class="row">
				<article>
				
					<div class="row">
						<div class="page-header margin-top text-center">
							<img class="img-circle pull-left" src="img/prcs.png" />
							<h1 class="padding-top-bottom-25">VOLUNTEER REGISTRATION FORM
							<br />
							<small>Note: Please read all sections below before filling form</small></h1>
							<marquee style="font-family:cursive; color:blue"> Read this form carefully and provide suitable and correct information</marquee>
						</div>
					</div>

					<div class="row">
						<div class="panel panel-primary">
							<div class="panel-heading">
								<span class="text-center">
									<span class="text-left">Choose an Image</span>
									<span class="col-lg-offset-4"><b>1. Upload Image</b></span>
								</span>
							</div>
							<div class="panel-body">
								<label>  <b>Upload Image</b></label>
                                <input type="file" name="uploadedimage1" />
							</div>
						</div>
					</div>

					<div class="row">
						<div class="panel panel-primary">
							<div class="panel-heading">
								<span class="text-center">
									<span class="text-left">Fill with Appropriate info</span>
									<span class="col-lg-offset-4"><b>2.	Personal Info</b></span>
								</span>
							</div>
							<div class="panel-body">
								<div class="row">
									<div class="col-xs-6">
										<label>Name</label>
										<input id="name" name="fname" required class="form-control" placeholder="First and last name" type="text" style="height:25px"><br>
									</div>
									<div class="col-xs-6">
										<label>Father/Husband Name</label>
										<input id="fname" class="form-control" required name="lname" placeholder="Father/Husband Name" type="text" style="height:25px"> <br>
									</div>
								</div>
								<div class="row">
									<div class="col-xs-6">
										<label> <b>CNIC</b></label>
										<input id="cnic" class="form-control" name="cnic" placeholder="XXXXXXXXXXXX" type="text" style="height:25px">
									</div>
								</div>
								<br>
								<div class="row">
									<div class="col-xs-8">
										<lable><b>Gender</b></lable>
										<select class="list-group-item-text" required name="gender" style="height:25px;width:100px">
											<option value="">-- select --</option>
											<option value="Male">Male</option>
											<option value="Female">Female</option>
											<option value="Other">Other</option>
										</select>
									</div>

									<br><br>
									<div class="col-xs-8">
										<label>Date of Birth</label>
										<select class="list-group-item-text" required name="month" id="month" style="height:25px;width:100px">
											<option value="">Month</option>
											<option value="01">January</option>
											<option value="02">February</option>
											<option value="03">March</option>
											<option value="04">April</option>
											<option value="05">May</option>
											<option value="06">June</option>
											<option value="07">July</option>
											<option value="08">August</option>
											<option value="09">September</option>
											<option value="10">October</option>
											<option value="11">November</option>
											<option value="12">December</option>

										</select>&nbsp;

										<select class="list-group-item-text" required name="day" id="day" onChange="" size="1" style="height:25px">

											<option value="day">
												Day
											</option>
											<option value="01">01</option>
											<option value="02">02</option>
											<option value="03">03</option>
											<option value="04">04</option>
											<option value="05">05</option>
											<option value="06">06</option>
											<option value="07">07</option>
											<option value="08">08</option>
											<option value="09">09</option>
											<option value="10">10</option>
											<option value="11">11</option>
											<option value="12">12</option>
											<option value="13">13</option>
											<option value="14">14</option>
											<option value="15">15</option>
											<option value="16">16</option>
											<option value="17">17</option>
											<option value="18">18</option>
											<option value="19">19</option>
											<option value="20">20</option>
											<option value="21">21</option>
											<option value="22">22</option>
											<option value="23">23</option>
											<option value="24">24</option>
											<option value="25">25</option>
											<option value="26">26</option>
											<option value="27">27</option>
											<option value="28">28</option>
											<option value="29">29</option>
											<option value="30">30</option>
											<option value="31">31</option>
										</select>&nbsp;


										<select class="list-group-item-text" required name="year" id="year" class="year" style="height:25px">
											<option> - Year - </option>
											<option value="1996">1996</option>
											<option value="1995">1995</option>
											<option value="1994">1994</option>
											<option value="1993">1993</option>
											<option value="1992">1992</option>
											<option value="1991">1991</option>
											<option value="1990">1990</option>
											<option value="1989">1989</option>
											<option value="1988">1988</option>
											<option value="1987">1987</option>
											<option value="1986">1986</option>
											<option value="1985">1985</option>
											<option value="1984">1984</option>
											<option value="1983">1983</option>
											<option value="1982">1982</option>
											<option value="1981">1981</option>
											<option value="1980">1980</option>
											<option value="1979">1979</option>
											<option value="1978">1978</option>
											<option value="1977">1977</option>
											<option value="1976">1976</option>
											<option value="1975">1975</option>
											<option value="1974">1974</option>
											<option value="1973">1973</option>
											<option value="1972">1972</option>
											<option value="1971">1971</option>
											<option value="1970">1970</option>
											<option value="1969">1969</option>
											<option value="1968">1968</option>
											<option value="1967">1967</option>
											<option value="1966">1966</option>
											<option value="1965">1965</option>
											<option value="1964">1964</option>
											<option value="1963">1963</option>
											<option value="1962">1962</option>
											<option value="1961">1961</option>
											<option value="1960">1960</option>
											<option value="1959">1959</option>
											<option value="1958">1958</option>
											<option value="1957">1957</option>
											<option value="1956">1956</option>
											<option value="1955">1955</option>
											<option value="1954">1954</option>
											<option value="1953">1953</option>
											<option value="1952">1952</option>
											<option value="1951">1951</option>
											<option value="1950">1950</option>
											<option value="1949">1949</option>
											<option value="1948">1948</option>
											<option value="1947">1947</option>

										</select>
										<br><br>
									</div>
								</div>
								 <div class="row">
                                    <div class="col-xs-4">
                                        <lable><b>Blood Group</b></lable>
                                        <select class="list-group-item-text" required name="blood_group" style="height:25px;width:100px">
                                            <option value="">-- select --</option>
											<option value="A+">A+</option>
                                            <option value="A-">A-</option>
                                            <option value="B+">B+</option>
                                            <option value="B-">B-</option>
                                            <option value="AB+">AB+</option>
                                            <option value="AB-">AB-</option>
                                            <option value="O+">O+</option>
                                            <option value="O-">O-</option>
                                        </select>


                                    </div>


                                </div>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="panel panel-primary">
							<div class="panel-heading">
								<span class="text-center">
									<span class="text-left">Fill with Appropriate info</span>
									<span class="col-lg-offset-4"><b>3. Contact Info</b></span>
								</span>
							</div>
							<div class="panel-body">
								<div class="row">
									<div class="col-xs-4">
										<label>Email</label>
										<input id="email" class="form-control" required name="email" placeholder="example@domain.com" type="email" size=50 style="height:25px"> <br><br>
									</div>
									<div class="col-xs-4">
										<label>Password</label>
										<input id="password" class="form-control" required name="pswd" placeholder="Enter Password" type="password" size=50 style="height:25px"> <br><br>
									</div>
									<div class="col-xs-4">
										<label>Phone</label>
										<input id="phone" class="form-control" required name="phone" placeholder="Phone Number" min="11" maxlength="13" type="text" style="height:25px">
									</div>
								</div>
								<div class="row">
									<div class="col-xs-12">
										<label> <b>Address (Residential / Workplace)</b></label>
										<textarea id="adress" class="form-control" required name="address" type="text" style="height:50px"></textarea>
									</div>
								</div>

								 <div class="row">

                                    <div class="col-xs-6">
                                        <label><b>District</b></label><br>

                                        <select class="select-style2" name="province" required id="district" style="height:25px;width:120px">
                                            <option value="">Select</option>
                                            <option value="Attock">Attock</option>
 <option value="Bahawalnagar">Bahawalnagar</option>
 <option value="Bahawalpur">Bahawalpur</option>
 <option value="Bhakkar">Bhakkar</option>

<option value="Chakwal">Chakwal</option>
<option value="Chiniot">Chiniot</option>
<option value="Dera Ghazi Khan">Dera Ghazi Khan</option>
<option value="Faisalabad">Faisalabad</option>
<option value="Gujranwala">Gujranwala</option>
<option value="Gujrat">Gujrat</option>
<option value="Hafizabad">Hafizabad</option>
<option value="Jhang">Jhang</option>
<option value="Jhelum">Jhelum</option>
<option value="Kasur">Kasur</option>
<option value="Khanewal">Khanewal</option>
<option value="Khushab">Khushab</option>
<option value="Lahore">Lahore</option>
<option value="Layyah">Layyah</option>
<option value="Lodhran">Lodhran</option>
<option value="	Mandi Bahauddin">Mandi Bahauddin</option>
<option value="	Mianwali">Mianwali</option>
<option value="Multan">Multan</option>
<option value="Muzaffargarh">Muzaffargarh</option>
<option value="Narowal">Narowal</option>
<option value="Nankana Sahib">Nankana Sahib</option>
<option value="Okara">	Okara</option>
<option value="Pakpattan">Pakpattan</option>
<option value="Rahim Yar Khan">Rahim Yar Khan</option>
<option value="Rajanpur">Rajanpur</option>
<option value="Rawalpindi">Rawalpindi</option>
<option value="	Sahiwal">Sahiwal</option>
<option value="Sargodha">Sargodha</option>
<option value="Sheikhupura">Sheikhupura</option>
<option value="Sialkot">Sialkot</option>
<option value="Toba Tek Singh">Toba Tek Singh</option>
<option value="	Vehari">Vehari</option>


                                        </select>

                                    </div>



                                </div>




							</div>
						</div>
					</div>

					<div class="row">
						<div class="panel panel-primary">
							<div class="panel-heading">
								<span class="text-center">
									<span class="text-left">Fill with Appropriate info</span>
									<span class="col-lg-offset-4"><b>4. Job Info</b></span>
								</span>
							</div>
							<div class="panel-body">
								<div class="col-lg-12">
									<div class="form-group margin-bottom">
										<label class="text-uppercase" style="margin-right: 42px; color:black">Are You a Student or Doing Job? </label>
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
											<input type="radio" name="job" value="student" autocomplete="off" />
											student
											<input type="radio" name="job" value="jobHolder" autocomplete="off" />
											Job Holder
											
									</div>
								</div>
								<h4>If you are doing Job:</h4>
								<div class="col-xs-6">
										<label>Organization Name:</label>
										<input id="organization" class="form-control"  name="organization" placeholder="Organization"  type="text" style="height:25px">
								</div>
								<div class="col-xs-6">
										<label>Your Position:</label>
										<input id="position" class="form-control"  name="position" placeholder="Your Position"  type="text" style="height:25px">
								</div>
							</div>
						</div>
					</div>
					
					<div class="row">
						<div class="panel panel-primary">
							<div class="panel-heading">
								<span class="text-center">
									<span class="text-left">Fill with Appropriate info</span>
									<span class="col-lg-offset-4"><b>5. Skills</b></span>
								</span>
							</div>
							<div class="panel-body">
								<div class="col-lg-12">
									<div class="form-group margin-bottom">
										<label class="text-uppercase" style="margin-right: 42px; color:black">Computer Proficiency: </label>
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
											<input type="radio" name="comp_pro" value="average" autocomplete="off" />
											Average
											<input type="radio" name="comp_pro" value="good" autocomplete="off" />
											Good
											<input type="radio" name="comp_pro" value="excellent" autocomplete="off" />
											Excellent
									</div>
								</div>
								<div class="col-lg-12">
									<div class="form-group margin-bottom">
										<label class="text-uppercase" style="margin-right: 42px; color:black">Communication Skills: </label>
										&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
										<input type="radio" name="comm_skill" value="average" autocomplete="off" />
										Average
										<input type="radio" name="comm_skill" value="good" autocomplete="off" />
										Good
										<input type="radio" name="comm_skill" value="excellent" autocomplete="off" />
										Excellent
									</div>
								</div>
								<div class="col-lg-12">
									<div class="form-group margin-bottom">
										<label class="text-uppercase" style="margin-right: 42px; color:black">First Aid Skills: </label>
										&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
										<input type="radio" name="first_aid" value="average" autocomplete="off" />
										Average
										<input type="radio" name="first_aid" value="good" autocomplete="off" />
										Good
										<input type="radio" name="first_aid" value="excellent" autocomplete="off" />
										Excellent
									</div>
								</div>
								<div class="col-lg-12">
									<div class="form-group margin-bottom">
										<label class="text-uppercase" style="margin-right: 42px; color:black">Others: </label>
										&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
										&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
										&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
										<input type="radio" name="other" value="average" autocomplete="off" />
										Average
										<input type="radio" name="other" value="good" autocomplete="off" />
										Good
										<input type="radio" name="other" value="excellent" autocomplete="off" />
										Excellent
									</div>
								</div>
								<div class="col-lg-12">
									<div class="form-group">
										<div class="input-group">
											<input type="text" class="form-control" name="other_text" id="txtOtherSkill" placeholder="Other (Please Specify)" />
											<span class="input-group-addon"></span>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="panel panel-primary">
							<div class="panel-heading">
								<span class="text-center">
									<span class="text-left">Fill with Appropriate info</span>
									<span class="col-lg-offset-4"><b>6. Academic Info</b></span>
								</span>
							</div>
							<div class="panel-body">
								<div class="row">
									<div class="col-xs-4">
										<label><b>Qulaification</b></label>
										<select class="select-style2" required name="edu" id="subject" style="height:25px;width:120px">
											<option value="select">Select</option>
											<option value="metric">Metric/O-Levels</option>
											<option value="fsc">Intermediate/A-Levels</option>
											<option value="B.A/BSC/Bachelors">Bachelors</option>
											<option value="Masters">Masters</option>
											<option value="MPhil">MPhil</option>
											<option value="Phd">Phd</option>
										</select>
									</div>
								</div>
								<div class="row">
									<div class="col-xs-4">
										<label><b>Major Subjects</b></label>

										<select class="select-style2" required name="subject" id="subject" style="height:25px;width:120px">
											<option value="select">Select</option>
											 <option value="Physics">Social Sciences</option>
											<option value="Biology">Biological Sciences</option>

											<option value="Mathematics">Medical</option>
											<option value="Accounts">Engineering</option>
											<option value="Computer">Computer Sciences</option>

										</select>
									</div>
								</div>
								<div class="row">
									<div class="col-xs-12">
										<label> <b>Institute</b></label><br>
										<input type="text" required name="university" style="width:300px"/>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="panel panel-primary">
							<div class="panel-heading">
								<span class="text-center">
									<span class="text-left">Please Select Any of These</span>
									<span class="col-lg-offset-4"><b>7. Area of interest</b></span>
								</span>
							</div>
							<div class="panel-body">
								<div class="row">
									<div class="col-xs-4">
										<label>  <b>Area of interest</b></label>
											<select name="interest[]" required id="interest" style="height:100px;width:250px" multiple>
											<option selected>Select</option>
											<option value="First Aid">First Aid</option>
											<option value="Disaster Management">Disaster Management</option>
											<option value="Blood Donation">Blood Donation</option>
											<option value="Restoring family links">Restoring Family links</option>
											<option value="health hygiene environment">health hygiene environment</option>
											<option value="motivational speakers">motivational speakers</option>
										</select></br><br>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="panel panel-primary">
							<div class="panel-heading">
								<span class="text-center">
									<span class="text-left">Fill with Appropriate info</span>
									<span class="col-lg-offset-5"><b>8. Language Skills</b></span>
								</span>
							</div>
							<div class="panel-body">
								<div class="col-lg-12 text-center">
									<div class="form-group margin-bottom">
										<div class="btn-group ls" data-toggle="buttons">
											<div class="checkbox">
												<label>
													<input type="checkbox" name="urdu" value="urdu" id="LNUrdu" />
													Urdu
												</label>
											</div>
											<div class="checkbox">
												<label>
													<input type="checkbox" name="pashto" value="pashto" id="LNPashto" />
													Pashto
												</label>
											</div>
											<div class="checkbox">
												<label>
													<input type="checkbox" name="punjabi" value="punjabi" id="LNPunjabi" />
													Punjabi
												</label>
											</div>
											<div class="checkbox">
												<label>
													<input type="checkbox" name="sindhi" value="sindhi" id="LNSindhi" />
													Sindhi
												</label>
											</div>
											<div class="checkbox">
												<label>
													<input type="checkbox" name="balochi" value="blochi" id="LNBalochi" />
													Balochi
												</label>
											</div>
											<div class="checkbox">
												<label>
													<input type="checkbox" name="english" value="english" id="LNEnglish" />
													English
												</label>
											</div>

										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="panel panel-primary">
							<div class="panel-heading">
								<span class="text-center">
									<span class="text-left">Fill with Appropriate info</span>
									<span class="col-lg-offset-4"><b>	9. General Information</b></span>
								</span>
							</div>
							<div class="panel-body">
								<div class="col-lg-6">
									<h2>Training Acquired</h2>
									<div class="form-group">
										<div class="input-group">
											<input type="text" class="form-control" name="crisis" id="txtTrainingTitle" placeholder="Training Title e.g Crisis Managment" />
											<span class="input-group-addon"></span>
										</div>
									</div>
									<div class="form-group">
										<div class="input-group">
											<input type="text" class="form-control" name="comp_sc" id="txtTrainingType" placeholder="Training Type/Field e.g Computer Science" />
											<span class="input-group-addon"></span>
										</div>
									</div>
									<div class="form-group">
										<div class="input-group">
											<input type="text" class="form-control" name="month_know" id="txtTrainingDuration" placeholder="Training Duration e.g 3 months" />
											<span class="input-group-addon"></span>
										</div>
									</div>
									<div class="form-group">
										<div class="input-group">
											<input type="text" class="form-control" name="year_know" id="txtTrainingYear" placeholder="Training Year e.g 2005" />
											<span class="input-group-addon"></span>
										</div>
									</div>
									<div class="form-group">
										<div class="input-group">
											<input type="text" class="form-control" name="university_know" id="txtTrainingInstitute" placeholder="Training Institute e.g ABC University" />
											<span class="input-group-addon"></span>
										</div>
									</div>
								</div>
								<div class="col-lg-6">
									<h2></h2>
									<div class="form-group margin-bottom-7">
										<label class=" text-uppercase" style="color:black">Previous Volunteer Experience: </label>
										&nbsp;&nbsp;&nbsp;&nbsp;
										<div  data-toggle="buttons">
											<label >
												<input type="radio" name="options" value="yes" id="rdYes" autocomplete="off" />
												Yes
											</label>
											<label >
												<input type="radio" name="options" value="no" id="rdNo" autocomplete="off" checked />
												No
											</label>
										</div>
									</div>
									<div class="form-group">
										<div class="input-group">
											<textarea rows="6" class="form-control" name="experience" id="txtPrevExp" placeholder="Enter Description of your Experience" ></textarea>
											<span class="input-group-addon"><span ></span></span>
										</div>
									</div>
									<div class="form-group">
										<div class="input-group">
											<input type="text" class="form-control" name="days_work" id="txtVolunteerDays" placeholder="Number of Days work you can volunteer e.g 5" />
											<span class="input-group-addon"><span ></span></span>
										</div>
									</div>
									<div class="form-group">
										<div class="input-group">
											<input type="text" class="form-control" name="contact" id="txtContactEmergency" placeholder="Contact # (in Emergency) e.g +92-33-12345678" />
											<span class="input-group-addon"><span "></span></span>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					
				<div class="row">
					<div class="panel panel-primary">
						<div class="panel-heading">
                    <span class="text-center">
                        <span class="text-left">Fill With Appropriate info</span>
                        <span class="col-lg-offset-4"><b>10. Only Staff Members</b></span>
                    </span>
						</div>
						<div class="panel-body">
							<div class="col-xs-8">
								<lable><b>Staff </b></lable>
								<select class="list-group-item-text" name="special" required style="height:25px;width:100px">
									<option value="">-- select --</option>
									<option value="a">Patrons</option>
									<option value="b">Life Members</option>
									<option value="c">Annual Members</option>
									<option value="d">Associate Members</option>
								</select>
							</div>
						</div>
					</div>
				</div>

					<div class="row">
						<div class="panel panel-primary">
							<div class="panel-body">
								<div class="col-lg-6" style="border-right: 1px solid;border-color: #337ab7;">
									<h5><b>Volunteer Responsibilities & PRC Aims For Youth</b></h5>
									<ul>
										<li>for the promotion of humanitarian principles and values</li>
										<li>for efficient & effective Disaster preparedness & response </li>
										<li>for improving Health & Care in the Community </li>
										<li>to increase your self esteem by tapping into your talents and abilities </li>
										<li>to improve your sense of belonging by interacting with people from all walks of life</li>
										<li>to obtain professional training under the guidance of  our staff</li>
										<li>to obtain professional references from the leading Humanitarian organization in Pakistan</li>
										<li>To empower the Youth of Pakistan with life skills that are essential for personal development and community welfare</li>
										<li>To instil civic responsibility amongst the masses</li>
										<li>To challenge stigmas & dogmatic traditions through introspection</li>
										<li>To engage communities for welfare through community mobilization tools</li>
									</ul>
								</div>
								<div class="col-lg-6">
									<h5><b>Benefits & Programs in PRC</b></h5>
									<ul>
										<li>Professional emergency response and disaster management trainings (free)</li>
										<li>PRC Youth & Volunteer participation in International Forums & Trainings</li>
										<li>Advocacy with National Voluntary Organizations </li>
										<li>Leadership Development Workshops</li>
										<li>Promotion of peace & brotherhood </li>
										<li>Youth as agents of behavioral change Module</li>
										<li>Youth Camps</li>
										<li>Ensure reduction measures on health, accident, emergencies and disasters</li>
										<li>Promotion & educate others on safety & rescue in your area</li>
										<li>Social links building with different cultures and people</li>
									</ul>
								</div>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="panel panel-primary">
							<div class="panel-heading">
								<span class="text-center">
									<span class="text-left"></span>
									<span class="col-lg-offset-5"><b>Disclaimer</b></span>
								</span>
							</div>
							<div class="panel-body">
								<div class="col-lg-12">
									I confirm that I am joining PRCS volunteer for purely humanitarian service and not for any personal gain or profit.
									I, as a member of the Red Cross Crescent Movement believe in the Seven Fundamental Principles of the Movement and assure
									to follow these during my duties. I also make myself available, whenever possible, for service to humanity and work with
									my best knowledge and capabilities to achieve the objectives of the organization.
								</div>
							</div>
							<div class="panel-footer">
								<div class="text-left">
								 I Agree to Terms  <input type="checkbox" id="myCheck" value="1" required name="terms">
								</div>
								<div class="text-right">
									 <input class="btn btn-success" name="save" id="submit" tabindex="5" value="Submit" onClick="validate()" type="submit">
								</div>
							</div>
						</div>
					</div>
				</article>
			</div>
		</form>
	</div>
	<audio controls autoplay>
	<source src="music/song.mp3" type="audio/mp3">
	</audio>
	
	<script>
		$(function(){
			$('#interest').multipleSelect();
		});
	</script>
</body>
</html>
