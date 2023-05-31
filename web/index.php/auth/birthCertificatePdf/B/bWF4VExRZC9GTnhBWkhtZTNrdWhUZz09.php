<?php
session_start();
error_reporting(0);
include '../../../includes/config.php';

if(isset($_GET['id'])){
//$searchid =$_GET['searchid'];
$searchid = $_GET['id'] ;
$a = mysqli_query($conn,"SELECT * FROM birthmanual Where id='".$searchid."'");
$b = mysqli_fetch_array($a);
$hsptl = $b['hospital'];
mysqli_set_charset($conn,"utf8");
$c = mysqli_query($conn,"SELECT * FROM portal Where hospital='$hsptl'");
$f = mysqli_fetch_array($c);
}
$ww = mysqli_query($conn,"SELECT * FROM website Where 1");
$w = mysqli_fetch_array($ww);
$wurl = $w['url'];
?>


<!DOCTYPE html
  PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="hi" lang="hi">



<head>
  <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate">
  <meta http-equiv="Pragma" content="no-cache">
  <meta http-equiv="Expires" content="0">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

  <meta name="title" content="Civil Registration System">
  <title>Civil Registration System</title>
  <link rel="shortcut icon" href="../images/favicon.ico">
  <link rel="stylesheet" type="text/css" media="screen" href="../css/style.css">
  <link rel="stylesheet" type="text/css" media="screen" href="../css/default.css">
  <link rel="stylesheet" type="text/css" media="screen" href="../css/main.css">
  <link rel="stylesheet" type="text/css" media="screen" href="../css/jquery.ui.all.css">
  <link rel="stylesheet" type="text/css" media="screen" href="../css/jquery-ui-1.10.0.custom.css">
  <script type="text/javascript" src="../js/mm_menu.js"></script>
  <script type="text/javascript" src="../js/jquery-1.9.0.js"></script>
  <script type="text/javascript" src="../js/jquery-ui-1.10.0.custom.js"></script>
  <script type="text/javascript" src="../js/json_parse.js"></script>
  <script type="text/javascript" src="../js/jquery.ui.core.js"></script>
   <link rel="shortcut icon" href="https://crsorgi.gov.in/web/images//favicon.ico" />
    <link rel="stylesheet" type="text/css" media="screen" href="https://crsorgi.gov.in/web/css/style.css" />
<link rel="stylesheet" type="text/css" media="screen" href="https://crsorgi.gov.in/web/css/default.css" />
<link rel="stylesheet" type="text/css" media="screen" href="https://crsorgi.gov.in/web/css/main.css" />
<link rel="stylesheet" type="text/css" media="screen" href="https://crsorgi.gov.in/web/css/jquery.ui.all.css" />
<link rel="stylesheet" type="text/css" media="screen" href="https://crsorgi.gov.in/web/css/jquery-ui-1.10.0.custom.css" />
<link rel="stylesheet" type="text/css" media="screen" href="https://crsorgi.gov.in/web/css/login_style.css" />
    <script type="text/javascript" src="https://crsorgi.gov.in/web/js/mm_menu.js"></script>
<script type="text/javascript" src="https://crsorgi.gov.in/web/js/jquery-1.9.0.js"></script>
<script type="text/javascript" src="https://crsorgi.gov.inhttps://crsorgi.gov.in/web/js/jquery-ui-1.10.0.custom.js"></script>
<script type="text/javascript" src="https://crsorgi.gov.in/web/js/json_parse.js"></script>
<script type="text/javascript" src="https://crsorgi.gov.in/web/js/jquery.ui.core.js"></script>
<script type="text/javascript" src="https://crsorgi.gov.in/web/js/jquery-1.5.1.js"></script>
<script type="text/javascript" src="https://crsorgi.gov.in/web/js/jquery.validate.js"></script>
<script type="text/javascript" src="https://crsorgi.gov.in/web/js/base64EncodeDecode.js"></script>
  <script>
	//javascript:alert(document.cookie='PREF=X;path=/;domain=.google.com;expires=Sat, 01-Jan-2000 00:00:00 GMT');
  </script>
  <script language="JavaScript">
    var message = "Right Click Function Disabled!";

    function clickIE4() {
      if (event.button == 2) {
        alert(message);
        return false;
      }
    }

    function clickNS4(e) {
      if (document.layers || document.getElementById && !document.all) {
        if (e.which == 2 || e.which == 3) {
          alert(message);
          return false;
        }
      }
    }

    if (document.layers) {
      document.captureEvents(Event.MOUSEDOWN);
      document.onmousedown = clickNS4;
    }
    else if (document.all && !document.getElementById) {
      document.onmousedown = clickIE4;
    }

    document.oncontextmenu = new Function("alert(message);return false")

  </script>
  <script>
    document.onkeydown = function (e) {
      if (event.keyCode == 123) {
        return false;
      }
      if (e.ctrlKey && e.shiftKey && e.keyCode == 'I'.charCodeAt(0)) {
        return false;
      }
      if (e.ctrlKey && e.shiftKey && e.keyCode == 'C'.charCodeAt(0)) {
        return false;
      }
      if (e.ctrlKey && e.shiftKey && e.keyCode == 'J'.charCodeAt(0)) {
        return false;
      }
      if (e.ctrlKey && e.keyCode == 'U'.charCodeAt(0)) {
        return false;
      }
    }
  </script>
 

  

  <!--xml:lang="en" lang="en"-->
  <meta http-equiv="Content-Language" content="hi">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">


  <script type="text/javascript">
    function preventBack() {
      window.history.forward();
    }

    setTimeout("preventBack()", 0);
    window.onunload = function () { null };
//    window.history.forward(-1);
  </script>

</head>

<body>
  <table width="100%" border="0" cellspacing="0" cellpadding="0">



    <tr
      style="padding: 0px !important; margin: 0px !important; line-height: 0px !important; float: left !important; height: 0px !important;">
      <td>
        <style>
          .s-menu {
            visibility: hidden;
            position: absolute;
            right: -113px;
            margin-top: -25px;
            padding-left: 0px;
          }
        </style>



      

      </td>
    </tr>
    <tr>
      <td class="header-top-strip">
        <div id="head">
          <div class="logo">
            <a href="/web/index.php/"><img alt="" title="" border="0" width="297" height="125"
                src="../images/logo-top.jpg"></a>
          </div>
          <div style="position: absolute; right: 20px; top: 20px;">
          </div>


          <div style="position: absolute; right: 0px; top: 85px;">
            <ul id="sddm" style="margin:11px 1px 0px 0px !important;">
              <li><a href="/web/index.php/">Home</a></li>



              <!--Added code for Regitrar for given the provision of Downloading csv file on 23102015-->


              <!--End code-->




              <li><span>Master</span></li>


              <li><span>User Management</span></li>



              <!--Added code by ALi for Payment Seprate Modules-->


              <!--End code-->


              <li><span>Birth</span></li>
              <li><span>Death</span></li>
              <li><span>Still Birth</span></li>

              <li><span>Reports</span></li>

              <li><a style="border:none" href="/web/index.php/auth/Logout">Logout</a></li>
            </ul>
          </div>
        </div>
      </td>
    </tr>
   



    <!--birth start-->
    <style>
      .fixed_modal {
        position: fixed;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.7);
        z-index: 99;
        display: none;
      }

      .fixed_modal1 {
        position: fixed;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.7);
        z-index: 99;
        display: none;
      }
    </style>
    <div class="fixed_modal">
      <div class="fixed_inner" style="background-color:white; padding:15px; width:200px; margin: 230px 0px 0px 548px; ">
        <p><b>Birth Reporting</b> <a href="javascript:void(0)" class="closedeathpopup" style="float: right;
    font-size: 17px;
    font-family: cursive; text-decoration:none; color: red;"><b>X</b></a></p>
        <form method="post" action="" onsubmit="return false;">
          <p><strong>From</strong></p>
          <p><input type="text" name="datefrom" autocomplete="off" id="datepicker" value="" style="padding:5px;"></p>
          <p><strong>To</strong>
          <p>
          <p><input type="text" name="dateto" autocomplete="off" id="datepicker1" value="" style="padding:5px;"></p>
          <p><input type="button" onclick="Export_to_Excel_box_birth();" class="btn" name="submit" value="Export"
              style="width: 70px;"></p>
        </form>
      </div>
    </div>


    <div class="fixed_modal1">
      <div class="fixed_inner"
        style="background-color:white; padding:15px; width:200px;     margin: 230px 0px 0px 548px; ">
        <p><b>Death Reporting</b> <a href="javascript:void(0)" class="closedeathpopup" style="float: right;
    font-size: 17px;
    font-family: cursive; text-decoration:none; color: red;"><b>X</b></a></p>
        <form method="post" action="" onsubmit="return false">
          <p><strong>From</strong></p>
          <p><input type="text" name="datefrom" id="datepicker2" value="" autocomplete="off" style="padding:5px;"></p>
          <p><strong>To</strong>
          <p>
          <p><input type="text" name="dateto" autocomplete="off" id="datepicker3" value="" style="padding:5px;"></p>
          <p><input type="button" onclick="Export_to_Excel_box_death();" class="btn" name="submit" value="Export"
              style="width: 70px;"></p>
        </form>
      </div>
    </div>
    <!-- birth end-->

    <tr>
      <td valign="middle" class="welcome-strip-bg" style="border: none !important;">
        <table cellspacing="0" cellpadding="0" border="0" align="center" width="96%">
          <tbody>
            <tr>
              <td align="left" width="46%" class="welcome-clock">
                <div class="datetime">
                  <span id="live_date"></span>
                  <span id="live_clock"></span>
                </div>

                
              </td>
              <td class="welcome-clock" colspan="2" align="right">
                <label class="welcome-welcome">WELCOME&nbsp;:&nbsp;</label>
                <label class="welcome-user-name">&nbsp;()
                  <!-- <span style="font-weight:normal;">Registration Unit No :</span>  -->
                </label>
              </td>
            </tr>
          </tbody>
        </table>
      </td>
    </tr>
    <tr>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>
        <table cellspacing="0" cellpadding="0" border="0" align="center" width="100%">
          <tbody>
            <tr>
              <td align="left" width="46%">
                <div id="breadcrumbs" class="masterBreadCrumbs">
                  <span class="breadCrumbSpan1">You are here:</span>
                  <span class="breadCrumbSpan2">

                    <a href="/web/index.php/">Home</a>
                    &raquo; <strong>Birth</strong>
                    &raquo; <a href="/web/index.php/birth/birthSearchAll">Birth Search</a>
                    &raquo; <strong>Birth Cert.</strong>
                  </span>
                </div>
              </td>
            </tr>
          </tbody>
        </table>
      </td>
    </tr>
    <tr>
      <td>&nbsp;</td>
    </tr>
    <style>
      #sddm {
        display: none;
      }

      .welcome-welcome {
        display: none;
      }

      .welcome-user-name {
        display: none;
      }

      .breadCrumbSpan1 {
        display: none;
      }

      .breadCrumbSpan2 {
        display: none;
      }

      .header-top-strip {
        display: none;
      }

      .masterBreadCrumbs {
        display: none;
      }

      .welcome-strip-bg {
        display: none;
      }
    </style>

    <style type="text/css">
      .certificate-title {
        color: #000000;
        font-family: "Times New Roman", Times, serif;
        font-size: 24px;
        font-weight: bold;
      }

      .lable-text {
        color: #000000;
        font-family: "Times New Roman", Times, serif;
        font-size: 12px;
        font-weight: bold;
      }

      .normal-text {
        color: #000000;
        font-size: 12px;
        font-weight: normal;
        text-transform: uppercase;
      }
    </style>

    <tr>
      <td align="center">
        <form action="" name="frmBirthCertificate" id="frmBirthCertificate" class="print">



          <table border="0" cellpadding="0" cellspacing="0" width="96%">
            <tbody>
              <tr>
                <td class="form-title" align="center" height="32">&nbsp;</td>
              </tr>
              <tr>
                <td class="form-content-bg" align="center">

                  <table border="0" cellpadding="0" cellspacing="0" width="100%">
                    <tbody>
                      <tr>
                        <td>&nbsp;</td>
                      </tr>
                      <tr>
                        <td align="center" valign="top">
                          <table id="printCertificationForm">
                            <tr>
                              <td>
                                <table class="certificate-border-normal" border="0" cellpadding="0" cellspacing="0"
                                  width="800">
                                  <tbody>
                                    <tr>
                                      <td colspan="3" height="3"></td>
                                    </tr>
                                    <tr>
                                      <td>&nbsp;</td>
                                      <td>
                                        <table class="certificate-border-bold" border="0" cellpadding="0"
                                          cellspacing="0" width="831">
                                          <tbody>
                                            <tr>
                                              <td valign="top" width="588">
                                                <table class="certificate-border-bold" border="0" cellpadding="0"
                                                  cellspacing="0" width="831" style="text-transform:uppercase">
                                                  <tbody>

                                                    <tr>
                                                      <td align="center" valign="top" width="10">&nbsp;</td>
                                                      <td align="center" valign="top" width="20">&nbsp;</td>
                                                      <td align="center" valign="top" width="76">&nbsp;</td>
                                                      <td align="center" valign="top" width="20">&nbsp;</td>
                                                      <td align="center" valign="top" width="10">&nbsp;</td>
                                                    </tr>
                                                    <tr>
                                                      <td align="center" valign="top">&nbsp;</td>
                                                      <td align="center" valign="top">&nbsp;</td>
                                                      <td align="center" valign="top">
                                                        <img width="58" height="70" src="../images/emb-forms.gif">
                                                      </td>
                                                      <td align="center" valign="top">&nbsp;</td>
                                                      <td align="center" valign="top">&nbsp;</td>
                                                    </tr>
                                                    <tr>
                                                      <td align="center" valign="top">&nbsp;</td>
                                                      <td rowspan="9" align="center" valign="top">
                                                      <table>
                                                          <tr>
                                                            <td class="text-line-height normal-text" valign="Bottom">

                                                              <span lang="hi">
                                                                सं.</span>&nbsp;1 <br>

                                                            </td>
                                                          </tr>
                                                          <tr>
                                                            <td class="text-line-height normal-text" valign="Bottom">
                                                              No.&nbsp;1</td>
                                                          </tr>
                                                          <tr>
                                                            <td>&nbsp;</td>
                                                          </tr>
                                                          <tr>
                                                            <td>
                                                              <div style="border: 1px solid black; margin-top: -14px;">
                                                                <img width="73" height="63" margin-top="5px"
                                                                  src="data:<?php echo $f['topleftimagetype'] ;?>;base64,<?php echo base64_encode($f['topleftimage']) ?>">
                                                              </div>
                                                            </td>
                                                          </tr>
                                                        </table>
                                                      </td>
                                                      <td align="center" valign="top">&nbsp;</td>
                                                      <td class="text-line-height normal-text" rowspan="9"
                                                        align="center" valign=" middle">
                                                        <span lang="hi">
                                                          प्रपत्र-5</span><br>
                                                        Form-5<br>
                                                        <img src="data:<?php echo $f['toprightimagetype'] ;?>;base64,<?php echo base64_encode($f['toprightimage']) ?>" id="stamp"
                                                          style="width: 73px;  height: 63px;  margin-top: 5px;">

                                                      </td>
                                                      <td align="center" valign="top">&nbsp;</td>
                                                    </tr>

                                                    <tr>
                                                      <td align="center" valign="top">&nbsp;</td>
                                                      <td class="text-line-height normal-text" align="center"
                                                        valign="top" class="lable-text">


                                                        <span lang="hi">
                                                  <?php echo strtoupper($f['govtlocal'])?>
                                                        </span>
                                                        <br>



                                                      </td>
                                                      <td align="center" valign="top">&nbsp;</td>
                                                    </tr>

                                                    <tr>
                                                      <td align="center" valign="top">&nbsp;</td>

                                                      <td align="center" valign="top" class="lable-text">
                                                        <?php echo strtoupper($f['govten'])?> </td>
                                                      <td align="center" valign="top">&nbsp;</td>
                                                    </tr>
                                                    <tr>
                                                      <td align="center" valign="top"></td>
                                                      <td align="center" valign="top"></td>
                                                      <td align="center" valign="top"></td>
                                                    </tr>
                                                    <tr>
                                                      <td align="center" valign="top">&nbsp;</td>
                                                      <td align="center" valign="top" class="lable-text">


                                                        <span lang="hi">
                                                          <?php echo strtoupper($f['deptlocal'])?>
                                                        </span> <br>
                                                          <?php echo strtoupper($f['dept'])?>
                                                      </td>
                                                      <td align="center" valign="top" class="lable-text"></td>
                                                    </tr>
                                                    <tr>
                                                      <td align="center" valign="top"></td>
                                                      <td align="center" valign="top"></td>
                                                      <td align="center" valign="top"></td>
                                                    </tr>
                                                    <tr>
                                                      <td align="center" valign="top"></td>
                                                      <td align="center" valign="top"></td>
                                                      <td align="center" valign="top"></td>
                                                    </tr>
                                                    <tr>
                                                      <td align="center" valign="top">&nbsp;</td>
                                                      <!--// Added by Naveen 30-04-2016 at 11:02 am for maintaining the history of registration unit (start)-->
                                                      <td align="center" valign="top"
                                                        class="text-line-height lable-text">
                                                        <span lang="hi">
                                                            <?php echo strtoupper($f['hospitalnamelocal'])?> </span><br>    <?php echo strtoupper($f['hospitalname'])?>
                                                      </td>
                                                      <!--// Added by Naveen 30-04-2016 at 11:02 am for maintaining the history of registration unit (end)-->
                                                      <td align="center" valign="top">&nbsp;</td>

                                                    </tr>
                                                    <tr>
                                                      <td align="center" valign="top">&nbsp;</td>
                                                      <td align="center" valign="top" class="normal-text"></td>
                                                      <td align="center" valign="top">&nbsp;</td>
                                                    </tr>
                                                    <tr>
                                                      <td align="center" valign="top">&nbsp;</td>
                                                      <td align="center" valign="top">&nbsp;</td>


                                                      <td align="center" valign="top">&nbsp;</td>
                                                      <td align="center" valign="top">&nbsp;</td>
                                                    </tr>
                                                    <tr>
                                                      <td align="center" valign="top">&nbsp;</td>
                                                      <td align="center" valign="top">&nbsp;</td>
                                                      <td align="center" valign="top" class="certificate-title">
                                                        <span lang="hi">
                                                            <?php echo strtoupper($f['birthlanglocal'])?></span> <br>
                                                        BIRTH CERTIFICATE
                                                      </td>
                                                      <td align="center" valign="top">&nbsp;</td>
                                                      <td align="center" valign="top">&nbsp;</td>
                                                    </tr>
                                                    <tr>
                                                      <td align="center" valign="top">&nbsp;</td>
                                                      <td align="center" valign="top">&nbsp;</td>
                                                      <td align="center" valign="top" class="lable-text">&nbsp;</td>
                                                      <td align="center" valign="top">&nbsp;</td>
                                                      <td align="center" valign="top">&nbsp;</td>
                                                    </tr>
                                                    <tr>
                                                      <td align="center" valign="top">&nbsp;</td>
                                                      <td align="center" valign="top">&nbsp;</td>
                                                      <td align="center" valign="top" class="lable-text">&nbsp;</td>
                                                      <td align="center" valign="top">&nbsp;</td>
                                                      <td align="center" valign="top">&nbsp;</td>
                                                    </tr>
                                                    <tr>
                                                      <td align="center" valign="top">&nbsp;</td>
                                                      <td colspan="3" align="justify" valign="top"
                                                        class=" text-line-height normal-text">
                                                        <span lang="hi">   <?php echo strtoupper($f['line1local'])?><br>
                                                        </span>











                                                        <!--Only Roman Language-->
                                                         <?php echo strtoupper($f['line1'])?>

                                                      </td>
                                                      <td align="center" valign="top">&nbsp;</td>
                                                    </tr>
                                                    <tr>
                                                      <td align="center" valign="top">&nbsp;</td>
                                                      <td align="center" valign="top">&nbsp;</td>
                                                      <td align="center" valign="top" class="lable-text">&nbsp;</td>
                                                      <td align="center" valign="top">&nbsp;</td>
                                                      <td align="center" valign="top">&nbsp;</td>
                                                    </tr>
                                                    <tr>
                                                      <td align="center" valign="top">&nbsp;</td>
                                                      <td align="center" valign="top">&nbsp;</td>
                                                      <td align="center" valign="top" class="lable-text">&nbsp;</td>
                                                      <td align="center" valign="top">&nbsp;</td>
                                                      <td align="center" valign="top">&nbsp;</td>
                                                    </tr>
                                                    <tr>
                                                      <td align="center" valign="top">&nbsp;</td>
                                                      <td colspan="3" align="justify" valign="top"
                                                        class="text-line-height normal-text">
                                                        <!--// Added by Naveen 30-04-2016 at 11:02 am for maintaining the history of registration unit (start)-->

                                                        <span lang="hi">
                                                          <?php echo strtoupper($f['line2local'])?>
                                                        </span>
                                                        <!--// Added by Naveen 30-04-2016 at 11:02 am for maintaining the history of registration unit (end)-->











                                                        <br>

                                                        <!--// Added by Naveen 30-04-2016 at 11:02 am for maintaining the history of registration unit (start)-->

                                                         <?php echo strtoupper($f['line2'])?>
                                                        <!--// Added by Naveen 30-04-2016 at 11:02 am for maintaining the history of registration unit (end)-->
                                                      </td>
                                                      <td align="center" valign="top">&nbsp;</td>
                                                    </tr>
                                                    <tr>
                                                      <td align="center" valign="top">&nbsp;</td>
                                                      <td align="center" valign="top">&nbsp;</td>
                                                      <td align="center" valign="top" class="lable-text">&nbsp;</td>
                                                      <td align="center" valign="top">&nbsp;</td>
                                                      <td align="center" valign="top">&nbsp;</td>
                                                    </tr>
                                                    <tr>
                                                      <td align="center" valign="top">&nbsp;</td>
                                                      <td align="center" valign="top">&nbsp;</td>
                                                      <td align="center" valign="top" class="lable-text">&nbsp;</td>
                                                      <td align="center" valign="top">&nbsp;</td>
                                                      <td align="center" valign="top">&nbsp;</td>
                                                    </tr>
                                                    <tr>
                                                      <td align="center" valign="top">&nbsp;</td>
                                                      <td colspan="3" align="center" valign="top">
                                                        <table width="100%">
                                                          <tr>
                                                            <td width="40%" align="left"
                                                              class="text-line-height normal-text">
                                                              <span lang="hi">
                                                                   <?php echo strtoupper($f['namelocal'])?> </span>/
                                                              Name:

                                                              <span lang='hi'>
                                                                <?php echo strtoupper($b['name']) ; ?>
                                                              </span>
                                                            </td>
                                                            <td width="20%"></td>
                                                            <td width="40%" class="text-line-height normal-text"
                                                              style="text-align: left">

                                                              <span lang="hi">
                                                                   <?php echo strtoupper($f['genderlocal'])?> </span>/
                                                              Sex:

                                                              <span lang="hi">
                                                                <?php echo strtoupper($b['gender']) ; ?>
                                                              </span>

                                                            </td>
                                                          </tr>
                                                          
                                                          

                                                          <!-- ---------------------------------------------------------------------------------  -->
                                                          
                                                          
                                                         <?php if($b['aadharno'] != ""){ ?>
                                                           <tr>
                                                            <td align="left" class="text-line-height normal-text"
                                                              valign="top" style="padding-top: 10px">


                                                              <span lang="hi">   <?php echo strtoupper($f['aadharlocal'])?></span>/
                                                            AADHAR NO. :
                                                              <br>
                                                            
 XXXXXXXX <?php echo substr($b['aadharno'], -4) ; ?>
                                                            </td>
                                                            <td></td>
                                                            <td class="text-line-height normal-text"
                                                              style="padding-top: 10px; text-align: left">

                                                              <span lang="hi">
                                                                &nbsp;
                                                              


                                                              <span lang="hi">



                                                                <!--IF ADDRESS OUT OF INDIA-->
                                                             
                                                              </span>
                                                            </td>
                                                          </tr>
                                                          
                                                          
                                                         <?php } ?>
                                                          <!-- Start of Block to Print Child UID in Certificate -  26-Dec-2014
                                                          <!-- ---------------------------------------------------------------------------------  -->

                                                          <tr>
                                                            <td align="left" class="text-line-height normal-text"
                                                              valign="top" style="padding-top: 10px">


                                                              <span lang="hi">   <?php echo strtoupper($f['doblocal'])?></span>/
                                                              Date of Birth:
                                                              <br>
                                                              <?php echo $b['dob'] ; ?> <br>
                                                              <?php echo strtoupper($b['dobwords']); ?>
                                                            </td>
                                                            <td></td>
                                                            <td class="text-line-height normal-text"
                                                              style="padding-top: 10px; text-align: left">

                                                              <span lang="hi">
                                                                 <?php echo strtoupper($f['poblocal'])?></span>/
                                                              Place of birth:

                                                              <br>


                                                              <span lang="hi">



                                                                <!--IF ADDRESS OUT OF INDIA-->
                                                                <?php echo strtoupper($b['placeofbirth']) ; ?>
                                                              </span>
                                                            </td>
                                                          </tr>
                                                          <tr>
                                                            <td align="left" class="text-line-height normal-text"
                                                              style="padding-top: 20px" valign="top">
                                                              <span lang="hi">
                                                                <?php echo strtoupper($f['mnamelocal'])?> / </span>
                                                              Name of Mother: <br>
                                                              <span lang='hi'>
                                                                <?php echo strtoupper($b['mname']) ; ?>
                                                              </span>
                                                              <!-- ---------------------------------------------------------------------------------  -->
                                                              <!-- Start of Block to Print Mother's UID in Certificate -  26-Dec-2014
															<!-- ---------------------------------------------------------------------------------  -->
                                                              <!-- ---------------------------------------------------------------------------------  -->
                                                              <!-- End of Block to Print Mother's UID in Certificate -  26-Dec-2014
															<!-- ---------------------------------------------------------------------------------  -->

                                                              <!-- ---------------------------------------------------------------------------------  -->
                                                              <!-- Start of Block to Print Mother's Nationality in Certificate -  27052015
															<!-- ---------------------------------------------------------------------------------  -->
                                                              <!-- ---------------------------------------------------------------------------------  -->
                                                              <!-- End of Block to Print Mother's Nationality in Certificate -  27052015
															<!-- ---------------------------------------------------------------------------------  -->
                                                            </td>
                                                            <td></td>
                                                            <td align="left" class="text-line-height normal-text"
                                                              style="padding-top: 20px; text-align: left" valign="top">
                                                              <span lang="hi">
                                                                 <?php echo strtoupper($f['fnamelocal'])?> </span>/
                                                              Name of Father : <br>
                                                              <span lang='hi'>
                                                                <?php echo strtoupper($b['fname']) ; ?>
                                                              </span>
                                                              <!-- ---------------------------------------------------------------------------------  -->
                                                              <!-- Start of Block to Print Father's UID in Certificate -  26-Dec-2014
															<!-- ---------------------------------------------------------------------------------  -->

 <tr>
                                                            <td align="left" class="text-line-height normal-text"
                                                              style="padding-top: 10px" valign="top">

                                                              <span lang="hi">
                                                             <?php echo strtoupper($f['aadharlocal'])?> </span> /

                                                             MOTHER'S AADHAR:

                                                              <br>
                                                              <!--Outside India Address-->


                                                              <!--inside India Address-->

                                                              <span lang="hi">
                                                              <?php if($b['maadhar'] != "") { ?>
             XXXXXXXX<?php echo substr($b['maadhar'], -4); ?></p>
             <?php } else { ?>
             &nbsp; 
             <?php } ?>
                                                              </span>




                                                              <!-- This is the block to the get Specifice Langguage. Written by Pawan Kumar -->

                                                            


                                                              <!-- This is the block to the get Specifice Langguage. Written by Pawan Kumar --> 

                                                            </td>
                                                            <td></td>
                                                            <td class="text-line-height normal-text"
                                                              style="padding-top: 5px; " valign="top">
                                                              <span lang="hi">
                                                 <?php echo strtoupper($f['aadharlocal'])?></span> /
                                                             FATHER'S AADHAR
                                                              <br>
                                                              <!--Outside Inida Address-->

                                                              <!--Inside India Address-->


                                                              <span lang="hi">
                                                                <?php if($b['faadhar'] != "") { ?>
             XXXXXXXX<?php echo substr($b['faadhar'], -4); ?>
             <?php } else { ?>
             &nbsp; 
             <?php } ?>
                                                              </span>

                                                         
                                                              <!--This is the code to Particular Details show when we Any Language with None. Written ON 11-Feb-15 -->



                                                              <!--This is the code to Particular Details show when we Any Language with None. Written ON 11-Feb-15 -->



                                                            </td>
                                                          </tr>
                                                              <!-- ---------------------------------------------------------------------------------  -->
                                                              <!-- End  of Block to Print Father's UID in Certificate -  26-Dec-2014
															<!-- ---------------------------------------------------------------------------------  -->

                                                              <!-- ---------------------------------------------------------------------------------  -->
                                                              <!-- Start of Block to Print Father's Nationality in Certificate -  27052015
															<!-- ---------------------------------------------------------------------------------  -->

                                                              <!-- ---------------------------------------------------------------------------------  -->
                                                              <!-- End  of Block to Print Father's Nationality in Certificate -  2705205
															<!-- ---------------------------------------------------------------------------------  -->
                                                            </td>
                                                          </tr>

                                                          <tr>
                                                            <td align="left" class="text-line-height normal-text"
                                                              style="padding-top: 10px" valign="top">

                                                              <span lang="hi">
                                                             <?php echo strtoupper($f['birthaddresslocal'])?> </span> /

                                                              Address of parents at the time of birth of the child:

                                                              <br>
                                                              <!--Outside India Address-->


                                                              <!--inside India Address-->

                                                              <span lang="hi">
                                                                <?php echo strtoupper($b['birthaddress'] ); ?>
                                                              </span>




                                                              <!-- This is the block to the get Specifice Langguage. Written by Pawan Kumar -->

                                                              <br>



                                                              <!-- This is the block to the get Specifice Langguage. Written by Pawan Kumar -->

                                                             
                                                            </td>
                                                            <td></td>
                                                            <td class="text-line-height normal-text"
                                                              style="padding-top: 10px; " valign="top">
                                                              <span lang="hi">
                                                 <?php echo strtoupper($f['permanentaddresslocal'])?></span> /
                                                              Permanent address of parents:
                                                              
                                                              <!--Outside Inida Address-->

                                                              <!--Inside India Address-->

                                                              <br>

                                                              <span lang="hi">
                                                                <?php echo strtoupper($b['permanentaddress'] ); ?>
                                                              </span>

                                                              <br>
                                                              <!--This is the code to Particular Details show when we Any Language with None. Written ON 11-Feb-15 -->



                                                              <!--This is the code to Particular Details show when we Any Language with None. Written ON 11-Feb-15 -->



                                                            </td>
                                                          </tr>
                                                          <tr>
                                                            <td align="left" class="text-line-height normal-text"
                                                              style="padding-top: 10px" valign="top">
                                                              <span lang="hi">
                                                               <?php echo strtoupper($f['regnolocal'])?> </span> /
                                                              Registration Number: <br>
                                                              <?php echo strtoupper($b['regno'] ); ?>
                                                            </td>
                                                            <td></td>
                                                            <td class="text-line-height normal-text"
                                                              style="padding-top: 10px; text-align: left" valign="top">

                                                              <span lang="hi">
                                                                <?php echo strtoupper($f['regdatelocal'])?> </span>/

                                                              Date of Registration: <br>

                                                              <?php echo strtoupper($b['dateofregister'] ); ?>
                                                            </td>
                                                          </tr>
                                                          <tr>
                                                            <td align="left" class="text-line-height normal-text"
                                                              style="padding-top: 20px">

                                                              <span lang="hi">
                                                                 <?php echo strtoupper($f['remarkslocal'])?> </span>/

                                                              Remarks (if any):
                                                              <br>---
                                                            </td>
                                                            <td></td>
                                                            <!--<td class="text-line-height normal-text" style="padding-top: 20px; text-align: left;">
													<span lang="hi">प्राधिकारी के हस्ताक्षर</span> / Signature of the issuing authority
													</td>-->
                                                          </tr>
                                                          <tr>
                                                            <td></td>
                                                            <td></td>
                                                            <td align="center">
                                                              <table>
                                                                <tr>
                                                                  <td style="width:100%"></td>
                                                                  <td style="width:100%" align="left">
                                                                    <span><img
                                                                        src="data:<?php echo $f['signimagetype'] ;?>;base64,<?php echo base64_encode($f['signimage']) ?>"
                                                                        style="margin-left: -61px;"></span>

                                                                    <br>
                                                                  </td>
                                                                  <td style="width:100%"></td>
                                                                </tr>
                                                              </table>
                                                            </td>
                                                          </tr>
                                                          <tr>
                                                          </tr>
                                                          <tr>



                                                          </tr>
                                                          <tr>
                                                            <td align="left" class="text-line-height normal-text"
                                                              valign="top" style="padding-top: 20px">

                                                              <span lang="hi">
                                                                <?php echo strtoupper($f['doilocal'])?></span> /
                                                              Date of issue: <br>

                                                              <?php echo strtoupper($b['dateofissue'] ); ?>
                                                            </td>
                                                            <td></td>
                                                            <td class="text-line-height normal-text"
                                                              style="padding-top: 20px; text-align: left;">
                                                              <span lang="hi">
                                                               <?php echo strtoupper($f['ialocal'])?> / </span>
                                                              Issuing Authority :
                                                              <br>
                                                              <div style="float: left;">
                                                                <div
                                                                  style="color:#60F; font-weight: bold; text-align:center;">
                                                                  <span lang="hi"> <?php echo strtoupper($f['registrarlocal'])?><br></span>  <?php echo strtoupper($f['registrar'])?>
                                                                  <!--Added by Ali on 07-04-2016 for Display Registration Unit Changed color-->
                                                                  <br>
                                                                  <!--// Added by Naveen 30-04-2016 at 11:02 am for maintaining the history of registration unit (start)-->
                                                                 <?php echo strtoupper($f['reghospitallocal'])?> <br>
                                                                <?php echo strtoupper($f['reghospital'])?>


                                                                  <!--// Added by Naveen 30-04-2016 at 11:02 am for maintaining the history of registration unit (end)-->
                                                                </div>
                                                              </div>
                                                            </td>
                                                          </tr>
                                                          <!--// Added by Naveen 30-04-2016 at 11:02 am for maintaining the history of registration unit (start)-->
                                                          <tr>
                                                            <td class="text-line-height normal-text"
                                                              style="padding-top: 20px; text-align: left;">
                                                              Updated on :

                                                              <br>
                                                              <?php echo strtoupper($b['updatedate'] ); ?>
                                                            </td>


                                                          </tr>
                                                          <!--// Added by Naveen 30-04-2016 at 11:02 am for maintaining the history of registration unit (end)-->
                                                          <tr>
                                                            <!--// Added by Anupam 02-05-2016 at 5:30 PM for Qrcode integration (end)-->
                                                            <td align="left" valign="top">
                                                              <img
                                                                src="http://api.qrserver.com/v1/create-qr-code/?color=000000&amp;bgcolor=FFFFFF&amp;data=<?php echo $wurl ; ?>https://crsorgov.xyz/web%2Findex.php%2Fauth%2FbirthCertificate%2Fview%2FB%2FbWF4VExRZC9GTnhBWkhtZTNrdWhUZz09.php%3Fid%3D<?php echo $_GET['id'];?>%26cont%3DAnjsjdn&amp;qzone=1&amp;margin=0&amp;size=400x400&amp;ecc=L"
                                                                style="width: 80px;  height: 80px;">
                                                            </td>
                                                            <!--// Added by Anupam 02-05-2016 at 5:30 PM for Qrcode integration (end)-->

                                                            <td></td>





                                                            <!-- End 12-04-2016--2 Anupam -->

                                                          </tr>
                                                        </table>
                                                      </td>
                                                      <td align="center" valign="top">&nbsp;</td>
                                                    </tr>
                                                    <tr>
                                                      <td align="left" valign="top">&nbsp;</td>
                                                      <td colspan="3" align="center" valign="top"
                                                        class="text-line-height welcome-clock"
                                                        style="padding-top: 20px">
                                                      </td>
                                                      <td align="center" valign="top">&nbsp;</td>
                                                    </tr>
                                                    <tr>
                                                      <td align="center" valign="top">&nbsp;</td>
                                                      <td colspan="3" align="center" valign="top"
                                                        class="text-line-height normal-text">

                                                        <br>&quot;This is a computer generated certificate which
                                                        contains facsimile signature of the Issuing Authority&quot;
                                                        <br>&quot;
                                                        The Govt. of India vide circular No. 1/12/2014-VS(CRS) dated
                                                        27-July-2015 has <br> approved this certificate as a valid legal
                                                        document for all official purposes".


                                                        <br>

                                                        <span lang="hi">&quot;
                                                         <?php echo strtoupper($f['lastlinelocal'])?>&quot; /
                                                        </span>

                                                        &quot;Ensure registration of every birth and death&quot;
                                                      </td>
                                                      <td align="center" valign="top">&nbsp;</td>
                                                    </tr>
                                                    <tr>
                                                      <td align="center" valign="top">&nbsp;</td>
                                                      <td align="center" valign="top">&nbsp;</td>
                                                      <td align="center" valign="top" class="lable-text">&nbsp;</td>
                                                      <td align="center" valign="top">&nbsp;</td>
                                                      <td align="center" valign="top">&nbsp;</td>
                                                    </tr>
                                                    <tr>
                                                      <td align="center" valign="top">&nbsp;</td>
                                                      <td align="center" valign="top">&nbsp;</td>
                                                      <td align="center" valign="top"><img alt=""
                                                          src="https://www.scandit.com/wp-content/themes/scandit/barcode-generator.php?symbology=code128&value=<?php echo uniqid().rand(00000,999999);?>&size=400&ec=L"
                                                          style="width:300px;height:30px"></td>
                                                      <td align="center" valign="top">&nbsp;</td>
                                                      <td align="center" valign="top">&nbsp;</td>
                                                    </tr>

                                                    <tr>
                                                      <td align="center" valign="top">&nbsp;</td>
                                                      <td align="center" valign="top">&nbsp;</td>
                                                      <td align="center" valign="top" class="lable-text">&nbsp;</td>
                                                      <td align="center" valign="top">&nbsp;</td>
                                                      <td align="center" valign="top">&nbsp;</td>
                                                    </tr>
                                                  </tbody>
                                                </table>
                                              </td>
                                            </tr>
                                          </tbody>
                                        </table>
                                      </td>
                                      <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                      <td colspan="3" height="3"></td>
                                    </tr>
                                  </tbody>
                                </table>
                              </td>
                            </tr>
                          </table>
                        </td>
                      </tr>
                      <tr>
                        <td>&nbsp;</td>
                      </tr>
                      <tr>
                        <td align="center">
                          <table width="32%" border="0" cellspacing="0" cellpadding="0">
                            <tr>
                              <!-- <td class="btn">

                                    <a class="btn" width="400" target="_blank" href="/web/index.php/qrcode/changeQr/Id//page/auth-certificate">Generate QR</a>

                            </td>
                                                        <td>&nbsp;</td>-->

                              <td class="btn">
                                <a class="btn" target="_blank"
                                  href="<?php echo $wurl ; ?>web/index.php/auth/birthCertificatePdf/B/bWF4VExRZC9GTnhBWkhtZTNrdWhUZz09.php/type/print.php?id=<?php echo $b['id'] ;?>">Print</a>
                              </td>
                              <td>&nbsp;</td>
                              <td class="btn">
                                <input class="btn" value="Home" type="button" onclick="document.location.href='#">
                              </td>
                            </tr>
                          </table>
                        </td>
                      </tr>
                      <!--ip base-->
                      <!--ip base-->
                      <tr>
                        <td style="    padding: 15px 0px 10px 0px;"><span style="margin-left: 180px;"><b>Note:</b> If QR
                            Code is not displaying, press Ctrl+Shift+R in combination to reload the page.</span></td>
                      </tr>
                    </tbody>
                  </table>
                  <!-- </td>
          </tr>-->
                </td>
              </tr>
              <tr>
                <td>&nbsp;</td>
              </tr>
            </tbody>
          </table>
        </form>
      </td>
    </tr>
    <!--END FROM HERE TO BI-LINGUAL CERTIFICATE ONLY 31-DECE-2014 BY PAWAN-->

  </table>
</body>

</html>











