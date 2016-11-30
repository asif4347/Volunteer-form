<?php
session_start();
if(!$_SESSION['email'] && !$_SESSION['pass']){
    header("Location: index.php");//redirect to login page to secure the welcome page without login access.
}
?>
<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/html">
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
<?php
$conn = mysqli_connect('localhost', 'root', '1234','prcs_reg');
if (!$conn){
    die('Could not connect: ' . mysqli_error());
}
$emails = $_SESSION['email'];
$result = mysqli_query($conn, "SELECT * FROM record WHERE email = '$emails'");
$test = mysqli_fetch_array($result);

?>
<div class="container" >
    <a href="logout2.php"><input type="button" style="float:right; margin-top: 20px;" class="btn btn-danger" value="Logout"></button></a>
    <form action="proces_index.php" class="form-group" method="POST" enctype="multipart/form-data" id="contactform">
        <div class="row">
            <article>
                <div class="row">
                    <div class="page-header margin-top text-center">
                        <img class="img-circle pull-left" src="img/prcs.png" />
                        <h1 class="padding-top-bottom-25">VOLUNTEER EDIT FORM
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
                            <label>  <b>Uploaded Image</b></label>
                            <img style="max-width:150px; float:right;" src="<?php echo $test['image1']; ?>"/>
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
                                    <input id="name" disabled class="form-control" value="<?php echo $test['first_name']; ?>" placeholder="First and last name" type="text" style="height:25px"><br>
                                </div>
                                <div class="col-xs-6">
                                    <label>Father/Husband Name</label>
                                    <input id="fname" class="form-control" disabled value="<?php echo $test['last_name']; ?>" placeholder="Father/Husband Name" type="text" style="height:25px"> <br>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-6">
                                    <label> <b>CNIC</b></label>
                                    <input id="cnic" class="form-control" disabled value="<?php echo $test['cnic']; ?>" placeholder="XXXXXXXXXXXX" type="text" style="height:25px">
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-xs-8">
                                    <lable><b>Gender: </b></lable>
                                    <?php echo $test['gender']; ?>
                                </div>

                                <br><br>
                                <div class="col-xs-8">
                                    <label>Date of Birth: </label>
                                    <?php echo $test['dob']; ?>

                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-4">
                                    <lable><b>Blood Group: </b></lable>
                                    <?php echo $test['blood_group']; ?>
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
                                    <input id="email" class="form-control" name="email" disabled value="<?php echo $test['email']; ?>" placeholder="example@domain.com" type="email" size=50 style="height:25px"> <br><br>
                                </div>
                                <div class="col-xs-4">
                                    <label>Password</label>
                                    <input id="password" class="form-control" required name="pswd" placeholder="Enter Password" type="password" size=50 style="height:25px"> <br><br>
                                </div>
                                <div class="col-xs-4">
                                    <label>Phone</label>
                                    <input id="phone" class="form-control" disabled value="<?php echo $test['phone']; ?>" placeholder="Phone Number" min="11" maxlength="13" type="text" style="height:25px">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12">
                                    <label> <b>Address (Residential / Workplace)</b></label>
                                    <textarea id="adress" class="form-control" disabled type="text" style="height:50px"><?php echo $test['address']; ?></textarea>
                                </div>
                            </div>

                            <div class="row">

                                <div class="col-xs-6">
                                    <label><b>District</b></label><br>
                                    <?php echo $test['province']; ?>
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
									<span class="col-lg-offset-4"><b>4. Skills</b></span>
								</span>
                        </div>
                        <div class="panel-body">
                            <div class="col-lg-12">
                                <div class="form-group margin-bottom">
                                    <label class="text-uppercase" style="margin-right: 42px; color:black">Computer Proficiency: </label>
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <input type="radio" name="comp_pro" <?php if($test['comp_pro']=='average') echo"checked"; ?> value="average" autocomplete="off" />
                                    Average
                                    <input type="radio" name="comp_pro" <?php if($test['comp_pro']=='good') echo"checked"; ?> value="good" autocomplete="off" />
                                    Good
                                    <input type="radio" name="comp_pro" <?php if($test['comp_pro']=='excellent') echo"checked"; ?> value="excellent" autocomplete="off" />
                                    Excellent
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group margin-bottom">
                                    <label class="text-uppercase" style="margin-right: 42px; color:black">Communication Skills: </label>
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <input type="radio" name="comm_skill" <?php if($test['comm_skill']=='average') echo"checked"; ?> value="average" autocomplete="off" />
                                    Average
                                    <input type="radio" name="comm_skill" <?php if($test['comm_skill']=='good') echo"checked"; ?> value="good" autocomplete="off" />
                                    Good
                                    <input type="radio" name="comm_skill" <?php if($test['comm_skill']=='excellent') echo"checked"; ?> value="excellent" autocomplete="off" />
                                    Excellent
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group margin-bottom">
                                    <label class="text-uppercase" style="margin-right: 42px; color:black">First Aid Skills: </label>
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <input type="radio" name="first_aid" <?php if($test['first_aid']=='average') echo"checked"; ?> value="average" autocomplete="off" />
                                    Average
                                    <input type="radio" name="first_aid" <?php if($test['first_aid']=='good') echo"checked"; ?> value="good" autocomplete="off" />
                                    Good
                                    <input type="radio" name="first_aid" <?php if($test['first_aid']=='excellent') echo"checked"; ?> value="excellent" autocomplete="off" />
                                    Excellent
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group margin-bottom">
                                    <label class="text-uppercase" style="margin-right: 42px; color:black">Others: </label>
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <input type="radio" name="other" <?php if($test['other']=='average') echo"checked"; ?> value="average" autocomplete="off" />
                                    Average
                                    <input type="radio" name="other" <?php if($test['other']=='good') echo"checked"; ?> value="good" autocomplete="off" />
                                    Good
                                    <input type="radio" name="other" <?php if($test['other']=='excellent') echo"checked"; ?> value="excellent" autocomplete="off" />
                                    Excellent
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="other_text" id="txtOtherSkill" value="<?php echo $test['other_text']; ?>" placeholder="Other (Please Specify)" />
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
									<span class="col-lg-offset-4"><b>5. Academic Info</b></span>
								</span>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-xs-4">
                                    <label><b>Qulaification: </b></label>
                                    <?php echo $test['edu']; ?>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-4">
                                    <label><b>Major Subjects: </b></label>
                                    <?php echo $test['subject']; ?>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12">
                                    <label> <b>University: </b></label>
                                    <?php echo $test['university']; ?>
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
									<span class="col-lg-offset-4"><b>6. Area of interest</b></span>
								</span>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-xs-6">
                                    <label>  <b>Area of interest: </b></label>
                                        <?php echo $test['interest']; ?>
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
									<span class="col-lg-offset-5"><b>7. Language Skills</b></span>
								</span>
                        </div>
                        <div class="panel-body">
                            <div class="col-lg-12 text-center">
                                <div class="form-group margin-bottom">
                                    <div class="btn-group ls" data-toggle="buttons">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="urdu" <?php if($test['urdu']=='urdu') echo"checked"; ?> value="urdu" id="LNUrdu" />
                                                Urdu
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="pashto" <?php if($test['pashto']=='pashto') echo"checked"; ?> value="pashto" id="LNPashto" />
                                                Pashto
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="punjabi" <?php if($test['punjabi']=='punjabi') echo"checked"; ?> value="punjabi" id="LNPunjabi" />
                                                Punjabi
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="sindhi" <?php if($test['sindhi']=='sindhi') echo"checked"; ?> value="sindhi" id="LNSindhi" />
                                                Sindhi
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="balochi" <?php if($test['balochi']=='balochi') echo"checked"; ?> value="balochi" id="LNBalochi" />
                                                Balochi
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="english" <?php if($test['english']=='english') echo"checked"; ?> value="english" id="LNEnglish" />
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
									<span class="col-lg-offset-4"><b>	8. General Information</b></span>
								</span>
                        </div>
                        <div class="panel-body">
                            <div class="col-lg-6">
                                <h2>Training Acquired</h2>
                                <div class="form-group">
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="crisis" value="<?php echo $test['crisis']; ?>" id="txtTrainingTitle" placeholder="Training Title e.g Crisis Managment" />
                                        <span class="input-group-addon"></span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="comp_sc" value="<?php echo $test['comp_sc']; ?>" id="txtTrainingType" placeholder="Training Type/Field e.g Computer Science" />
                                        <span class="input-group-addon"></span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="month_know" value="<?php echo $test['month_know']; ?>" id="txtTrainingDuration" placeholder="Training Duration e.g 3 months" />
                                        <span class="input-group-addon"></span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="year_know" value="<?php echo $test['year_know']; ?>" id="txtTrainingYear" placeholder="Training Year e.g 2005" />
                                        <span class="input-group-addon"></span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="university_know" value="<?php echo $test['university_know']; ?>" id="txtTrainingInstitute" placeholder="Training Institute e.g ABC University" />
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
                                            <input type="radio" name="options" <?php if($test['options']=='yes') echo"checked"; ?> value="yes" id="rdYes" autocomplete="off" />
                                            Yes
                                        </label>
                                        <label >
                                            <input type="radio" name="options" <?php if($test['options']=='no') echo"checked"; ?> value="no" id="rdNo" autocomplete="off" />
                                            No
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <textarea rows="6" class="form-control" name="experience" id="txtPrevExp" placeholder="Enter Description of your Experience" ><?php echo $test['experience']; ?></textarea>
                                        <span class="input-group-addon"><span ></span></span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="days_work" value="<?php echo $test['days_work']; ?>" id="txtVolunteerDays" placeholder="Number of Days work you can volunteer e.g 5" />
                                        <span class="input-group-addon"><span ></span></span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="contact" value="<?php echo $test['contact']; ?>" id="txtContactEmergency" placeholder="Contact # (in Emergency) e.g +92-33-12345678" />
                                        <span class="input-group-addon"><span "></span></span>
                                    </div>
                                </div>
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
                                <h5><b>Volunteer Benefits & Programs in PRC</b></h5>
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
                                I Agree to Terms  <input type="checkbox" id="myCheck" value="1" required>
                            </div>
                            <div class="text-right">
                                <input type="hidden" name="id" value="<?php echo $test['id']; ?>"/>
                                <input class="btn btn-success" name="save" id="submit" tabindex="5" value="Update" onClick="validate()" type="submit">
                            </div>
                        </div>
                    </div>
                </div>
            </article>
        </div>
    </form>
</div>
<script>
    $(function(){
        $('#interest').multipleSelect();
    });
</script>
</body>
</html>
