<?php

include_once("../../globals.php");
include_once("$srcdir/api.inc");
include_once("$srcdir/forms.inc");
foreach ($_POST as $k => $var) {
$_POST[$k] = mysql_escape_string($var);
echo "$var\n";
}
if ($encounter == "")
$encounter = date("Ymd");
if ($_GET["mode"] == "new"){
$newid = formSubmit("form_mh_therapy_progress", $_POST, $_GET["id"], $userauthorized);

addForm($encounter, "Therapy Progress Note", $newid, "mh_therapy_progress", $pid, $userauthorized);
}elseif ($_GET["mode"] == "update") {
sqlInsert("update form_mh_therapy_progress set pid = {$_SESSION["pid"]},groupname='".$_SESSION["authProvider"]."',user='".$_SESSION["authUser"]."',authorized=$userauthorized,activity=1, date = NOW(), 
time_in ='".$_POST["time_in"]."',
time_out ='".$_POST["time_out"]."',
meeting_scheduled ='".$_POST["meeting_scheduled"]."',
meeting_emergency='".$_POST["meeting_emergency"]."', 
others_present='".$_POST["others_present"]."', 
meeting_lasted='".$_POST["meeting_lasted"]."', 
number_of_units='".$_POST["number_of_units"]."', 
icd9='".$_POST["icd9"]."', 
client_ontime='".$_POST["client_ontime"]."', 
client_late='".$_POST["client_late"]."', 
was_late_by='".$_POST["was_late_by"]."', 
did_not_show='".$_POST["did_not_show"]."', 
cancelled='".$_POST["cancelled"]."', 
next_meeting='".$_POST["next_meeting"]."', 
location_office='".$_POST["location_office"]."', 
location_detention='".$_POST["location_detention"]."', 
location_home='".$_POST["location_home"]."', 
location_school='".$_POST["location_school"]."', 
location_hosp='".$_POST["location_hosp"]."', 
location_other='".$_POST["location_other"]."', 
location_other_block='".$_POST["location_other_block"]."', 
location_facility_code='".$_POST["location_facility_code"]."', 
treatment_individual_therapy='".$_POST["treatment_individual_therapy"]."', 
treatment_family='".$_POST["treatment_family"]."', 
treatment_group='".$_POST["treatment_group"]."', 
treatment_couple='".$_POST["treatment_couple"]."', 
treatment_assessment='".$_POST["treatment_assessment"]."', 
treatment_service_code='".$_POST["treatment_service_code"]."', 
paysource_medicaid ='".$_POST["paysource_medicaid"]."',
paysource_dfs ='".$_POST["paysource_dfs"]."',
paysource_private ='".$_POST["paysource_private"]."',
paysource_other ='".$_POST["paysource_other"]."',
paysource_other_block ='".$_POST["paysource_other_block"]."',
paysource_county ='".$_POST["paysource_county"]."',
topics_of_discussion ='".$_POST["topics_of_discussion"]."',
progress_towards_goals='".$_POST["progress_towards_goals"]."',
medications ='".$_POST["medications"]."',
functioning_since_session ='".$_POST["functioning_since_session"]."',
mood_normal ='".$_POST["mood_normal"]."',
mood_anxious ='".$_POST["mood_anxious"]."',
mood_depressed ='".$_POST["mood_depressed"]."',
mood_angry ='".$_POST["mood_angry"]."',
mood_euphoric ='".$_POST["mood_euphoric"]."',
affect_normal ='".$_POST["affect_normal"]."',
affect_intense ='".$_POST["affect_intense"]."',
affect_blunted ='".$_POST["affect_blunted"]."',
affect_inappropriate ='".$_POST["affect_inappropriate"]."',
affect_labile ='".$_POST["affect_labile"]."',
mentalstatus_normal ='".$_POST["mentalstatus_normal"]."',
mentalstatus_lessened_awareness ='".$_POST["mentalstatus_lessened_awareness"]."',
mentalstatus_memory_deficiencies ='".$_POST["mentalstatus_memory_deficiencies"]."',
mentalstatus_disorientated ='".$_POST["mentalstatus_disorientated"]."',
mentalstatus_disorganized ='".$_POST["mentalstatus_disorganized"]."',
mentalstatus_vigilant ='".$_POST["mentalstatus_vigilant"]."',
mentalstatus_delusional ='".$_POST["mentalstatus_delusional"]."',
mentalstatus_hallucinating ='".$_POST["mentalstatus_hallucinating"]."',
mentalstatus_other ='".$_POST["mentalstatus_other"]."',
mentalstatus_other_block ='".$_POST["mentalstatus_other_block"]."',
suicide_violance_risk_none  ='".$_POST["suicide_violance_risk_none"]."',
suicide_violance_risk_ideation_only  ='".$_POST["suicide_violance_risk_ideation_only"]."',
suicide_violance_risk_threat  ='".$_POST["suicide_violance_risk_threat"]."',
suicide_violance_risk_gesture  ='".$_POST["suicide_violance_risk_gesture"]."',
suicide_violance_risk_rehearsal='".$_POST["suicide_violance_risk_rehearsal"]."',  
suicide_violance_risk_attempt='".$_POST["suicide_violance_risk_attempt"]."',  
sleep_quality_normal='".$_POST["sleep_quality_normal"]."',  
sleep_quality_restless='".$_POST["sleep_quality_restless"]."',  
sleep_quality_insomnia='".$_POST["sleep_quality_insomnia"]."',  
sleep_quality_nightmares='".$_POST["sleep_quality_nightmares"]."',  
sleep_quality_oversleeps='".$_POST["sleep_quality_oversleeps"]."',  
participation_level_active='".$_POST["participation_level_active"]."',  
participation_level_variable='".$_POST["participation_level_variable"]."',  
participation_level_only_responsive='".$_POST["participation_level_only_responsive"]."',  
participation_level_minimal='".$_POST["participation_level_minimal"]."',  
participation_level_none='".$_POST["participation_level_none"]."',  
participation_level_resistant='".$_POST["participation_level_resistant"]."',  
treatment_compliance_full='".$_POST["treatment_compliance_full"]."',  
treatment_compliance_partial='".$_POST["treatment_compliance_partial"]."',  
treatment_compliance_low='".$_POST["treatment_compliance_low"]."',  
response_to_treatment_as_expected='".$_POST["response_to_treatment_as_expected"]."',  
response_to_treatment_better='".$_POST["response_to_treatment_better"]."',  
response_to_treatment_much='".$_POST["response_to_treatment_much"]."',  
response_to_treatment_poorer='".$_POST["response_to_treatment_poorer"]."',  
response_to_treatment_very_poor='".$_POST["response_to_treatment_very_poor"]."',  
gaf='".$_POST["gaf"]."',  
other_observations ='".$_POST["other_observations"]."',
diagnosis_changes_none='".$_POST["diagnosis_changes_none"]."',  
diagnosis_changes='".$_POST["diagnosis_changes"]."', 
followups_next='".$_POST["followups_next"]."',  
followups_next_date='".$_POST["followups_next_date"]."',  
followups_next_week='".$_POST["followups_next_week"]."',  
followups_next_month='".$_POST["followups_next_month"]."',  
followups_next_2_months='".$_POST["followups_next_2_months"]."', 
followups_next_3_months='".$_POST["followups_next_3_months"]."',  
followups_next_as_needed='".$_POST["followups_next_as_needed"]."',  
followups_referral='".$_POST["followups_referral"]."',  
followups_referral_to='".$_POST["followups_referral_to"]."',  
followups_referral_for='".$_POST["followups_referral_for"]."',  
followups_call='".$_POST["followups_call"]."',  
followups_call_to='".$_POST["followups_call_to"]."', 
followups_call_for='".$_POST["followups_call_for"]."' where id=$id");
}
$_SESSION["encounter"] = $encounter;
formHeader("Redirecting....");
formJump();
formFooter();
?>
