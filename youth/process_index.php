<?php
include ('process_config.php');

error_reporting(0);
if (isset($_POST['save'])) {
    $fname      = $_POST['fname'];
    $lname      = $_POST['lname'];
    $cnic       = $_POST['cnic'];
    $gender     = $_POST['gender'];
    $day 		= $_POST['day'];
    $month 		= $_POST['month'];
    $year 		= $_POST['year'];
    $dob 		= "$year/"."$month/"."$day";
    $blood_group= $_POST['blood_group'];
    $email      = $_POST['email'];
    $pswd       = $_POST['pswd'];
    $phone      = $_POST['phone'];
    $address    = $_POST['address'];
    $province   = $_POST['province'];
    $comp_pro   = $_POST['comp_pro'];
    $comm_skill = $_POST['comm_skill'];
    $first_aid  = $_POST['first_aid'];
    $other      = $_POST['other'];
    $other_text = $_POST['other_text'];
    $edu        = $_POST['edu'];
    $subject    = $_POST['subject'];
    $university = $_POST['university'];
    $interest   = json_encode($_POST['interest']);
    $urdu       = $_POST['urdu'];
    $pashto     = $_POST['pashto'];
    $punjabi    = $_POST['punjabi'];
    $sindhi     = $_POST['sindhi'];
    $balochi    = $_POST['balochi'];
    $english    = $_POST['english'];
    $crisis     = $_POST['crisis'];
    $comp_sc    = $_POST['comp_sc'];
    $month_know = $_POST['month_know'];
    $year_know  = $_POST['year_know'];
    $university_know = $_POST['university_know'];
    $options    = $_POST['options'];
    $experience = $_POST['experience'];
    $days_work  = $_POST['days_work'];
    $contact    = $_POST['contact'];
    $special    = $_POST['special'];
    $terms      = $_POST['terms'];
    if(isset($_POST['image1'])) {
        $ImagePath1 = $_POST['image1'];
    }else{
        $ImagePath1 = "";
    }

    if (!empty($_FILES["uploadedimage1"]["name"])) {
        $imagename1 = $_FILES["uploadedimage1"]["name"];
        $target_path1 = "http://localhost/youth/image/" . $imagename1;
    }
    $result = mysqli_query($conn, "INSERT INTO `prcs_reg`. `record`(first_name,last_name,cnic,gender,dob,blood_group,email,pswd,phone,address,province,comp_pro,comm_skill,first_aid,other,other_text,edu,subject,university,interest,urdu,pashto,punjabi,sindhi,balochi,english,crisis,comp_sc,month_know,year_know,university_know,options,experience,days_work,contact,special,terms,`image1`)
      Values('$fname','$lname','$cnic','$gender','$dob','$blood_group','$email','$pswd','$phone','$address','$province','$comp_pro','$comm_skill','$first_aid','$other','$other_text','$edu','$subject','$university','$interest','$urdu','$pashto','$punjabi','$sindhi','$balochi','$english','$crisis','$comp_sc','$month_know','$year_know','$university_know','$options','$experience','$days_work','$contact','$special','$terms','" . $target_path1 . "')");
    if (!$result) {
        die('<span style="color:red; font-size: 25px; margin-left: 38%;">Email Duplicate please choose another.</span>');
    }
    $upload_dir = "image";
    $file_name = $_FILES['uploadedimage1']['name'];
    $file_tmp_name = $_FILES['uploadedimage1']['tmp_name'];
    $file_type = $_FILES['uploadedimage1']['type'];
    if (is_uploaded_file(($_FILES['uploadedimage1']['tmp_name']))) {
        if (!move_uploaded_file($file_tmp_name, "$upload_dir/$file_name")) {
            die("Cannot copy $file_name");
        }
    } else {
        die("Possible file upload attack");
    }
	
	
	
	
	
	
$send_email_to = $email;
function send_email($fname,$email,$email_subject,$email_message)
{
	global $send_email_to;  

	$headers = "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";
	$headers .= "From: ".$email. "\r\n";
	$message = "<strong>Email = </strong>".$email."<br>";
	$message .= "<strong>Name = </strong>".$fname."<br>";
	$message .= "<strong>Message = </strong>".$email_message."<br>";
	@mail($send_email_to, $email_subject, $message,$headers);
	return true;
}

function validate($fname,$email,$message,$subject)
{
	$return_array = array();
	$return_array['success'] = '1';
	$return_array['fname_msg'] = '';
	$return_array['email_msg'] = '';
	$return_array['message_msg'] = '';
	$return_array['subject'] = '';

	if($email == '')
	{
		$return_array['success'] = '0';
		$return_array['email_msg'] = 'email is required';
	}
	else
	{
		$email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
		if(!preg_match($email_exp,$email))
		{
			$return_array['success'] = '0';
			$return_array['email_msg'] = 'enter valid email.';  
		}
	}

	if($fname == '')
	{
		$return_array['success'] = '0';
		$return_array['fname_msg'] = 'First Name is required';
	}
	else
	{
		$string_exp = "/^[A-Za-z .'-]+$/";
		if (!preg_match($string_exp, $fname)) 
		{
			$return_array['success'] = '0';
			$return_array['fname_msg'] = 'enter valid First Name.';
		}
	}

	if($subject == '')
	{
		$return_array['success'] = '0';
		$return_array['subject_msg'] = 'Subject is required';
	}
  
	if($message == '')
	{
		$return_array['success'] = '0';
		$return_array['message_msg'] = 'Message is required';
	}
	else
	{
		if (strlen($message) < 2) {
		$return_array['success'] = '0';
		$return_array['message_msg'] = 'Enter valid Message.';
		}
	}
	return $return_array;
}

$fname = "PRCS Punjab";
$message = "Thank you very much for your inhation.You have been consequently registered as a volunteer of Pakistan Red Crescent Punjab.We look forward to your active participation in our motivational training programs and humanitrain activities conducted around the year.We will keep you informed about our on going activities through a weekly advertisment on our website you may feel free for any querry to ensure your participation in any program of your interest.";
$subject = "PRCS Punjab";

$return_array = validate($fname,$email,$message,$subject);
if($return_array['success'] == '1')
{
	send_email($fname,$email,$subject,$message);
	echo "<script>alert('Your message has been sent.')</script>";
	include 'index.php';
}
else
{
	echo "Server could not read your mail";
}
}






mysqli_close($conn);
header('Location: thanks.php');
?>