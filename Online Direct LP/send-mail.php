<?
$CompanyName=$_POST['Company Name'];
$FirstName=$_POST['First Name'];
$LastName=$_POST['Last Name'];
$EmailAddress=$_POST['Email Address'];
$PhoneNumber=$_POST['Phone Number'];
$body .= "Company Name: " . $CompanyName . "\n";
$body .= "First Name: " . $FirstName . "\n";
$body .= "Last Name: " . $LastName . "\n";
$body .= "Email Address: " . $EmailAddress . "\n";
$body .= "Phone Number: " . $PhoneNumber . "\n";
//replace with your email
mail("peter@azlyncreative.co.za","From Landing-Page Site",$body);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script>alert("Your email has been sent. Thank You!");</script>
<meta HTTP-EQUIV="REFRESH" content="0; url=index.html">
</head>
