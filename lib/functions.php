<?php

include('config.php');

// global class objects with method explaination
/*
  $mxSecurity global variable you can use for security like cookies not store of admin account

  // if you want set sucure cookies use below method this method set secure cookies
  $mxSecurity->cookies_validate()
  \=============================================================================================/

  //if you want set ideal time for admin you can use below method with require parameters

  Param first is session registered variable where you use uniquely (like username or user id)
  Param second is session registered variable for ideal time
  Param third is ideal time, how much time you want to give admin (Pass time in microseconds)
  Return false if session registered variable uniquely not define else return new ideal time

  $mxSecurity->set_ideal_login($args_session,$args_ideal_time,$ideal_time)
  \=============================================================================================/

  // if you want regenerate your session for security nobody hack you session

  Param first is session registered variable where you use uniquely (like username or user id)
  Param second is session registered variable for ideal time
  Return false if not generate session again else return new generate session id (PHPSESSID)

  $mxSecurity->regenerate_session($args_session,$args_fingerprint)
  \=============================================================================================/


  $mxDb global variable you can use for insert record into database, update record into database, delete record into database, fetch record into database

  // if you want get information from database you can you below method

  Param first table name
  Param second is fields that values you want get
  Param third is condition by which you want to get record
  Param fourth is optional you want ot single record or multi reocrd (all according condition) default return multi row
  Param fivth is which format you want to get record. default use array format
  Return single or multi array

  $mxDb->get_information($table, $fields, $condition, $single, $record_format)
  \=============================================================================================/

  // if you want get information of single field from database you can you below method

  Param first table name
  Param second is fields that values you want get
  Param third is condition by which you want to get record
  Param fourth is optional argument which format you want to get record. default use array format
  Param fivth is optional argument you want show that field value or get field value. Default return field value

  $mxDb->get_field_information($table, $fields, $condition, $record_format, $echo)
  \=============================================================================================/

  // if you want insert record into databse you can use below method

  Param first table name
  Param second is array of insert values and fields (put field name as key in array and value inti value of that field as value)
  for example : array('name'=>Amit,'age'=>25)

  $mxDb->insert_record($table, $insert_array)
  \=============================================================================================/


  // if you want update record into databse you can use below method

  Param first table name
  Param second is array of insert values and fields (put field name as key in array and value inti value of that field as value)
  for example : array('name'=>Amit,'age'=>25)
  Param third is condition by which you want to update record

  $mxDb->update_record($table, $update_array,$condition)
  \=============================================================================================/

  // if you want insert record into databse you can use below method

  Param first table name
  Param second is condition by which you want to delete record

  $mxDb->update_record($table, $update_array,$condition)
  \=============================================================================================/

  // if you want remove mysql injection flaws from form fields if user entered

  This method check mysql injections
  Param first is value check mysql injection flaws before insert record
  Return value remove if any injection flaws in this value

  $mxDb->check_mysql_injection_flaws($value)
  \=============================================================================================/

  // if you want remove xss injection flaws from form fields if user entered

  This method check xss injections
  Param first is value check mysql injection flaws before insert record
  Return value remove if any injection flaws in this value

  $mxDb->check_xss_injection_flaws($value)
  \=============================================================================================/

  // if you want check image validate you can use below method (restrict malicious files)

  Param first is file name
  Param second is file path
  return boolen value if valid return true else return false

  $mxDb->image_validation($filename,$filepath)
  \=============================================================================================/

  // if you want check file validate you can use below method(restrict malicious files)

  Param first is file path
  return boolen value if valid return true else return false

  $mxDb->file_validation($filepath)
  \=============================================================================================/
 */

/**
 * dd
 * @param
 * @return array
 * @since 0.1
 * @author Sandeep Kumar
 */
function dd($data, $flag = false) {
    if (isset($flag) && !empty($flag)) {
        echo '<pre>';
        print_r($data);
        die;
    } else {
        echo '<pre>';
        print_r($data);
    }
}

/**
 * get_error
 * @param
 * @return error
 * @since 0.1
 * @author Sandeep Kumar
 */
function errorEnableAndDisable($flag = false) {
    if (isset($flag) && !empty($flag)) {
        error_reporting(0);
    } else {
        ini_set('display_errors', 1);
        ini_set('display_startup_errors', 1);
        error_reporting(E_ALL);
    }
}

/**
 * getAccomodationListing
 * @param
 * @return array
 * @since 0.1
 * @author Sandeep Kumar
 */
function getAccomodationListing() {
    global $mxDb;

    $limit = 9;
    if (isset($_GET["page"])) {
        $page = $_GET["page"];
    } else {
        $page = 1;
    };
    $start_from = ($page - 1) * $limit;
    $sql = "SELECT COUNT(id) FROM accommodation_detail";
    $rs_result = mysql_query($sql);
    $row = mysql_fetch_row($rs_result);
    $total_records = $row[0];
    $total_pages = ceil($total_records / $limit);

    $qr = mysql_query("select * from accommodation_detail LIMIT $start_from, $limit") or die(mysql_error());
    $alldata = [];
    while ($row = mysql_fetch_object($qr)) {
        $alldata[] = $row;
    }
    $data1 = [];
    $data = (!empty($alldata) && is_array($alldata) ? $alldata : '');
    $data1['record'] = $data;
    $data1['total'] = $total_pages;
    return $data1;
}

/**
 * getAccomodationListing
 * @param
 * @return array
 * @since 0.1
 * @author Sandeep Kumar
 */
function getAccomodationById($id) {
    global $mxDb;

    $qr = mysql_query("select * from accommodation_detail LIMIT $id") or die(mysql_error());
    $alldata = [];
    while ($row = mysql_fetch_object($qr)) {
        $alldata[] = $row;
    }
    $data1 = [];
    $data = (!empty($alldata) && is_array($alldata) ? $alldata : '');
    $data1['record'] = $data;
    $data1['total'] = $total_pages;
    return $data1;
}

/**
 * getAccomodationPrice
 * @param
 * @return string
 * @since 0.1
 * @author Sandeep Kumar
 */
function getAccomodationPrice($id) {

    $qr = mysql_query("select price from room_data where acco_id='" . $id . "'") or die(mysql_error());
    $row = mysql_fetch_object($qr);
    $data = (!empty($row) && is_object($row) ? $row->price : '');
    return $data;
}

?>