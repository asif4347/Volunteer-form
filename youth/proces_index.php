<?php
include ('process_config.php');

error_reporting(0);
if (isset($_POST['save'])) {
    $id         = $_POST['id'];
    $comp_pro   = $_POST['comp_pro'];
    $comm_skill = $_POST['comm_skill'];
    $first_aid  = $_POST['first_aid'];
    $other      = $_POST['other'];
    $other_text = $_POST['other_text'];
    $pswd       = $_POST['pswd'];
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

    $result = mysqli_query($conn, "UPDATE `record` SET comp_pro='$comp_pro',comm_skill='$comm_skill',first_aid='$first_aid',other='$other',other_text='$other_text',pswd='$pswd',urdu='$urdu',pashto='$pashto',punjabi='$punjabi',sindhi='$sindhi',
              balochi='$balochi',english='$english',crisis='$crisis',comp_sc='$comp_sc',month_know='$month_know',year_know='$year_know',
              university_know='$university_know', options='$options', experience='$experience', days_work='$days_work', contact='$contact' WHERE id='$id'");
}

mysqli_close($conn);
//header('Location: thanks.php');
?>