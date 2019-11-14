<?php
/**
 * Export to PHP Array plugin for PHPMyAdmin
 * @version 4.8.4
 */

/**
 * Database `auditors`
 */

/* `auditors`.`abbr` */
$abbr = array(
  array('no' => '6','abbri' => 'act_desc','name' => 'Activity Description'),
  array('no' => '3','abbri' => 'area','name' => 'Area'),
  array('no' => '1','abbri' => 'buss_act','name' => 'Business Activity'),
  array('no' => '5','abbri' => 'crtl_obj','name' => 'Control Objective'),
  array('no' => '7','abbri' => 'max_mark','name' => 'Maximum Marks'),
  array('no' => '8','abbri' => 'obt_mark','name' => 'Marks Obtained'),
  array('no' => '4','abbri' => 'pts_check','name' => 'Points To Be Checked'),
  array('no' => '9','abbri' => 'remark','name' => 'Remarks'),
  array('no' => '2','abbri' => 'sub_act','name' => 'Sub Activity')
);
echo '<pre>';
print_r($abbr);
echo '</pre>';
/* `auditors`.`admin` */
$admin = array(
  array('name' => 'Admin','emailId' => 'admin@gmail.com','password' => '123','contact' => '1234567890')
);

/* `auditors`.`filename` */
$filename = array(
  array('filename' => 'Vipin_Varanasi2_07102019','created_by' => 'vipin@gmail.com','date' => '7','month' => '10','year' => '2019','location' => 'Varanasi2'),
  array('filename' => 'Vipin_Varanasi2_08102019','created_by' => 'vipin@gmail.com','date' => '8','month' => '10','year' => '2019','location' => 'Varanasi2'),
  array('filename' => 'Vipin_Varanasi3_07102019','created_by' => 'vipin@gmail.com','date' => '7','month' => '10','year' => '2019','location' => 'Varanasi3'),
  array('filename' => 'Vipin_Varanasi3_08102019','created_by' => 'vipin@gmail.com','date' => '8','month' => '10','year' => '2019','location' => 'Varanasi3'),
  array('filename' => 'Vipin_Varanasi_08102019','created_by' => 'vipin@gmail.com','date' => '8','month' => '10','year' => '2019','location' => 'Varanasi')
);

/* `auditors`.`location` */
$location = array(
  array('pincode' => '221007','location' => 'Varanasi'),
  array('pincode' => '221008','location' => 'Varanasi1'),
  array('pincode' => '221009','location' => 'Varanasi2'),
  array('pincode' => '221010','location' => 'Varanasi3')
);

/* `auditors`.`projector_room` */
$projector_room = array(
  array('filename' => 'Vipin_Varanasi2_08102019','sno' => '1','buss_act' => 'Fire and Safety','sub_act' => 'Projection Room','area' => 'Process','pts_check' => 'Is phone in working condition?','crtl_obj' => 'B Extn. 15, VDA Colony,Phase 1
Baralalpur, Chandm','act_desc' => 'Yes','max_marks' => '3','marks_obt' => '1','remark' => ''),
  array('filename' => 'Vipin_Varanasi2_08102019','sno' => '2','buss_act' => 'Fire and Safety','sub_act' => 'Projection Room','area' => 'Process','pts_check' => 'Co2 fire extinguisher provided in Projection Area?','crtl_obj' => '','act_desc' => 'Yes','max_marks' => '3','marks_obt' => '0','remark' => ''),
  array('filename' => 'Vipin_Varanasi2_08102019','sno' => '3','buss_act' => 'Operations','sub_act' => 'Operation','area' => 'Process','pts_check' => 'First Aid & Artificial Respiration method chart (In Hindi & English) available in Projection room','crtl_obj' => '','act_desc' => 'Yes','max_marks' => '3','marks_obt' => '1','remark' => ''),
  array('filename' => 'Vipin_Varanasi2_08102019','sno' => '4','buss_act' => 'Fire and Safety','sub_act' => 'Projection Room','area' => 'Process','pts_check' => 'Is Fire Blankets in ok condition?','crtl_obj' => '','act_desc' => 'Yes','max_marks' => '9','marks_obt' => '3','remark' => ''),
  array('filename' => 'Vipin_Varanasi3_07102019','sno' => '1','buss_act' => 'Fire and Safety','sub_act' => 'Operation','area' => 'Process','pts_check' => 'Is Fire Blankets in ok condition?','crtl_obj' => '','act_desc' => 'Yes','max_marks' => '2','marks_obt' => '1','remark' => '')
);

/* `auditors`.`user` */
$user = array(
  array('name' => 'Vipin','emailId' => 'vipin@gmail.com','password' => '123','contact' => '1234567890')
);
