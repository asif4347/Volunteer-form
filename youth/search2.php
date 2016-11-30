<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<?php
session_start();
	if(isset($_SESSION['inloggedin']) && $_SESSION['inloggedin'] == 'true'){

	}
	else{
		header("Location: login.php");

	}
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />


    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link href="css/custom.css" rel="stylesheet" />
	<link href="css/check.css" rel="stylesheet" />
    <script src="js/respond.js"></script>
<style type="text/css">
    #space td{
        padding: 10px;
    }
    #kkk th{
        padding: 10px;
    }
</style>

    <title>Search Records</title>
    <?php
	include ('process_config.php');
    $count=0;
    $resultrows=0;
    if(isset($_POST['submit']))
    {
	$gender = "";
    $first_name = "";
	
	
    $sql = "select * from record";
	$edu = $_POST['edu'];
	$province = $_POST['province'];
	$university = $_POST['university'];
	$special = $_POST['special'];
    $blood_group =$_POST['blood_group'];
	$interest = $_POST['interest'];
	if(isset($_POST['gender']))
    {
    $gender =$_POST['gender'];
    }
	
	$selection = array();
	$q_b = array(" where "," and ", " and "," and "," and ");
	$counter=0;

	
    if($blood_group!=""){
	$selection[$counter] =" blood_group = '$blood_group' ";
	$counter++;
    //echo "blood_group Filter";
    }

    if($special!=""){
        $selection[$counter] =" special = '$special' ";
        $counter++;
        //echo "blood_group Filter";
    }

	if($edu!=""){
	$selection[$counter] =" edu = '$edu' ";
	$counter++;
    //echo "edu Filter";
    }
	if($university!=""){
	$selection[$counter] = " university = '$university' ";
	$counter++;
   // echo "University Filter";
    }
	if($province!=""){
	$selection[$counter] = " province = '$province'";
	$counter++;
    //echo "Province Filter";
    }
	if($interest!=""){
	$selection[$counter] =" interest like '%$interest%' ";
	$counter++;
    //echo "Interest Filter";
    }
	if($gender!=""){
	$selection[$counter] =" gender = '$gender' ";
	$counter++;
    //echo "Gender Filter";
    }
	
	
	if($counter>0){
		
		 for($c=0;$c<$counter;$c++){
			 $sql ="$sql"."$q_b[$c]"."$selection[$c]";
		 }
		
	}
    $db_handle = mysqli_connect($server,$username,$password,$database);

    $result = mysqli_query($db_handle,$sql);

	
    $resultrows = mysqli_num_rows($result);
    if ($resultrows>0){
    while($db_field = mysqli_fetch_assoc($result)){
	$id[]=$db_field['id'];
    $first_name[]=$db_field['first_name'];
    $last_name[]=$db_field['last_name'];
    $address[]=$db_field['address'];
    $phone[]=$db_field['phone'];
    $cnic[]=$db_field['cnic'];
    $comp_pro[]=$db_field['comp_pro'];
    $comm_skill[]=$db_field['comm_skill'];
    $first_aid[]=$db_field['first_aid'];
    $other[]=$db_field['other'];
    $other_text[]=$db_field['other_text'];
    $subject[]=$db_field['subject'];
    $urdu[]=$db_field['urdu'];
    $pashto[]=$db_field['pashto'];
    $punjabi[]=$db_field['punjabi'];
    $sindhi[]=$db_field['sindhi'];
    $balochi[]=$db_field['balochi'];
    $english[]=$db_field['english'];
    $crisis[]=$db_field['crisis'];
    $comp_sc[]=$db_field['comp_sc'];
    $month_know[]=$db_field['month_know'];
    $year_know[]=$db_field['year_know'];
    $university_know[]=$db_field['university_know'];
    $options[]=$db_field['options'];
    $experience[]=$db_field['experience'];
    $days_work[]=$db_field['days_work'];
    $contact[]=$db_field['contact'];
    $terms[]=$db_field['terms'];
    $dob[]=$db_field['dob'];
	$email[]=$db_field['email'];
    $genderData[]=$db_field['gender'];
    $interestData[]=$db_field['interest'];
    $universityData[]=$db_field['university'];
	$eduData[]=$db_field['edu'];
    $provinceData[]=$db_field['province'];
    $specialData[]=$db_field['special'];
    $blood_groupData[]=$db_field['blood_group'];
	$image1[]=$db_field['image1'];
    }
    }
    $count=count($first_name);
    mysqli_close($db_handle);
    }
    ?>
</head>

<body>
    <div class="container">
	<a href="form.php"><button class="btn btn-success">Volunteer Form</button></a>
	<a href="logout.php"><button class="btn btn-danger pull-right">Logout</button></a>
	
	

	
	
    <form name="form1" method="post" action="search2.php">
            <div class="row" >
                <div class="col-xs-10">
                    <div class="thumbnail" style="width: 125%; background-color:#EDF0F5">
                        <div class="thumbnail" style="background-color:#2A60C5;height:40px ; text-align:center">
						<div>
						
                          <h4 style="color:white">Search Records</h4>
							</div>
                        </div>
                    <div style="text-align:center">
                            <label><b>Gender</b></label><br>
                            <input class="radio-inline" type="radio" name="gender" id="gender" value="male" /> Male</input>
                            <input class="radio-inline" type="radio" name="gender" value="female" /> Female</input>
                            <input class="radio-inline" type="radio" name="gender" value="other" /> other</input><br />
</div>
                        <br>
                    <div class="row" style="text-align:center">
                        <label><b>Blood Group</b></label><br />

                        <select class="select-style2" name="blood_group" id="blood_group" style="height:25px;width:180px">
                            <option value="">Select</option>
                            <option value="A+">A+</option>
                            <option value="A-">A-</option>
                            <option value="B+">B+</option>
                            <option value="B-">B-</option>
                            <option value="AB+">AB+</option>
                            <option value="AB-">AB-</option>
                            <option value="O+">O+</option>
                            <option value="O-">O-</option>

                        </select></br>

                        <b>University</b><br />

                        <select class="select-style2" name="university" id="university" style="height:25px;width:180px">
                            <option value="">Select University</option>
							<?php
						require "config.php";
						$sql=" SELECT * FROM record";
						foreach ($dbo->query($sql) as $noticia) {
					?>
					<option value="<?php echo $noticia['university'] ?>"><?php echo $noticia['university']; ?></option>
					<?php } ?>
                        </select></br>


                                <label><b>District</b></label><br />

                                <select class="select-style2" name="province" id="province" style="height:25px;width:180px">
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

                                <br>
                                <label>  <b>Area of interst</b></label><br />

                                <select class="select-style2" name="interest" id="interest" style="height:25px;width:180px">
                                    <option value="">Select</option>
                                     <option value="First Aid">First Aid</option>
                                            <option value="Disaster Management">Disaster Management</option>
                                            <option value="Media of communication">Media & Communication</option>
                                            <option value="blood_group Donation">blood_group Donation</option>
											<option value="blood_group Camps">blood_group Camps</option>
                                            <option value="Restoring family links">Restoring Family links</option>
                                            <option value="health hygiene environment">health hygiene environment</option>
                                            <option value="motivational speakers">motivational speakers</option>

                                </select></br>


								<label>  <b>Education</b></label><br />

                                <select class="select-style2" name="edu" id="interest" style="height:25px;width:180px">
                                    <option value="">Select</option>
                                     <option value="metric">Metric/O-Levels</option>
                                            <option value="fsc">Intermediate/A-Levels</option>
											<option value="B.A/BSC/Bachelors">B.A/BSC/Bachelors</option>
                                            <option value="Masters">Masters</option>
											<option value="MPhil">MPhil</option>
											<option value="Phd">Phd</option>
                                </select></br>


                        <label>  <b>Staff Members</b></label><br />
                        <select class="select-style2" name="special" id="special" style="height:25px;width:180px">
                            <option value="">Select</option>
                            <option value="a">Patrons</option>
									<option value="b">Life Members</option>
									<option value="c">Annual Members</option>
									<option value="d">Associate Members</option>
                        </select></br><br />





                        <p>
                            <input type="submit" name="submit" value="Search from Book" style="font-weight:bold; font-size:15px; font-family:Georgia,'Times New Roman', Times, serif" />
                        </p>
                       <div class="col-xs-12">
                            <div class="container">
                                <div class="table-responsive">
                                    <table border="1" style="text-align:center">

                                        <thead>
                                            <tr id="kkk">
												<th>Sr No.</th>
												<th>ID</th>
                                                <th>First Name</th>
                                                <th>Last Name</th>
                                                <th>CNIC</th>
                                                <th>Gender</th>
												<th>DOB</th>
                                                <th>Blood Group</th>
                                                <th>Email</th>
                                                <th>Phone</th>
                                                <th>Address</th>
                                                <th>District</th>
                                                <th>Computer Proficiency</th>
												<th>Communication Skills</th>
												<th>First Aid Skills</th>
												<th>Other Skills</th>
												<th>Skills Description</th>
												<th>Qualification</th>
												<th>Major Subjects</th>
												<th>University</th>
												<th>Area of Interest</th>
												<th>Language Skills</th>
												<th>Training Acquired Title</th>
												<th>Training Type</th>
												<th>Training Duration</th>
												<th>Training Year</th>
												<th>Training Institute</th>
												<th>Volunteer Experience</th>
												<th>Experience Description</th>
												<th>Work Days</th>
												<th>Emergency Contact</th>
												<th>Staff Members</th>
												<th>Image</th>
                                            </tr>
                                        </thead>
                                        <?php
										$p =1;
                                        if(isset($_POST['submit'])){
                                        if($resultrows>0){
                                        for($i=0;$i
                                        <$count;$i++){
                                            echo "<tbody>
                                                    <tr id='space'>
                                                        <td>".$p++."</td>
                                                        <td>$id[$i]</td>
                                                        <td>$first_name[$i]</td>
                                                        <td>$last_name[$i]</td>
                                                        <td>$cnic[$i]</td>
                                                        <td>$genderData[$i]</td>
                                                        <td>$dob[$i]</td>
                                                        <td>$blood_groupData[$i]</td>
                                                        <td>$email[$i]</td>
                                                        <td>$phone[$i]</td>
                                                        <td>$address[$i]</td>
                                                        <td>$provinceData[$i]</td>
                                                        <td>$comp_pro[$i]</td>
                                                        <td>$comm_skill[$i]</td>
                                                        <td>$first_aid[$i]</td>
                                                        <td>$other[$i]</td>
                                                        <td>$other_text[$i]</td>
                                                        <td>$eduData[$i]</td>
                                                        <td>$subject[$i]</td>
                                                        <td>$universityData[$i]</td>
                                                        <td>$interestData[$i]</td>
                                                        <td>$urdu[$i] $pashto[$i] $punjabi[$i] $sindhi[$i] $balochi[$i] $english[$i]</td>
                                                        <td>$crisis[$i]</td>
                                                        <td>$comp_sc[$i]</td>
                                                        <td>$month_know[$i]</td>
                                                        <td>$year_know[$i]</td>
                                                        <td>$university_know[$i]</td>
                                                        <td>$options[$i]</td>
                                                        <td>$experience[$i]</td>
                                                        <td>$days_work[$i]</td>
                                                        <td>$contact[$i]</td>
                                                        
                                                        <td><a href='".$image1[$i]."' target='_new'>Image</a></td>
                                                    </tr></tbody>";
			}
			echo "$count => Records Found";
			}
			else{
				echo "No Such Record Found";
				}
		}
	?>
                                    </table>
                                </div>
                            </div>
                                </div>
                    </div>
              </div>
                  </div>
            </div>
        </form>
    </div>
    
</body>
</html>


