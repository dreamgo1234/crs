<?php
include '../../../../includes/config.php';
error_reporting(0);

if(isset($_GET['id'])){
//$searchid =$_GET['searchid'];
$searchid = mysqli_real_escape_string($conn,$_GET['id']);
$ecode = mysqli_real_escape_string($conn,$_GET['ecode']);

mysqli_set_charset($conn,"utf8");
$a = mysqli_query($conn,"SELECT * FROM birthmanual Where id='".$searchid."'");
$b = mysqli_fetch_array($a);
$hsptl = $b['hospital'];
mysqli_set_charset($conn,"utf8");
$c = mysqli_query($conn,"SELECT * FROM portal Where hospital='".$hsptl."'");
$f = mysqli_fetch_array($c);
}
$ww = mysqli_query($conn,"SELECT * FROM website Where 1");
$w = mysqli_fetch_array($ww);
$wurl = $w['url'];

?>

<html>

<head>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <title>Civil Registration System</title>
    <style>
        body
    {
padding: 0.5em;
    }
        p{
            font-size: 11px;
        }
    </style>
    </head>
    <body>
        <style type = "text/css">
  @media print {
    body{
        width: 21cm;
        height: 29.7cm;
        margin-bottom: 0mm;
        /* change the margins as you want them to be. */
   } 
}
wrapper{
  min-height: 50vh;
  display: flex;
  flex-direction: column;
}
.header, .footer{
  height: 50px;
  color: #fff;
}
.content {
  display: flex;
  flex: 1;
  color: #000; 
}
.columns{
  display: flex;
  flex:1;
}
.main{
    padding-left:40px;
  flex: 1;
  order: 2;
}
.sidebar-first{
  padding-left:50px;
  width: 20%;
  order: 1;
}
.sidebar-second{ 
    text-align:right;
    padding-right:50px;
    margin-top:-20px;
  width: 20%;
  order: 3;
}
</style>
<style>
    
    
</style>
</head>
<body>
        
        <div style="border:1px solid black; padding:2px;">
            <div style="border:2px solid black;">
              
       <center>  <img src="2.PNG"/ width="80px;" style="padding-top: 5px;"></center> 
       <div class="wrapper">
  <section class="content">
    <div class="columns">
      <main class="main"><b style="color:#0d0d57; text-align: center; font-weight: bold"><p> <b>   <?php echo strtoupper($f['govtlocal'])?> </b><br/>  
             <?php echo strtoupper($f['govten'])?>
    </p>
    <p style="margin-top:-10px">

              
       <?php echo strtoupper($f['deptlocal'])?> <br/> 
<?php echo strtoupper($f['dept'])?>
     </p>    
     <p style="margin-top:-5px">
   <?php echo strtoupper($f['hospitalnamelocal'])?> <br/> 
       <?php echo strtoupper($f['hospitalname'])?><br/> 
         </p>
    
        <p> <b style="color:#076a07;font-size: 13px;margin-top:3px;" > 
       
        <?php echo strtoupper($f['birthlanglocal'])?> <br/> 
      BIRTH CERTIFICATE  <br>
    <br>
    </b>
     </p>
            </b>
        </main>
      <aside class="sidebar-first" >
       
         <b style="font-size: 12px;padding:47px;font-weight: lighter;" >
           <?php echo $f['topleftlocal'] ; ?> </b>
           <br>
            <b style="font-size: 12px;padding:46px;font-weight: lighter;" >
          No. 1 </b>
         <br/>
        
          <img src="data:<?php echo $f['topleftimagetype'] ;?>;base64,<?php echo base64_encode($f['topleftimage']) ?>"/ style="float: left; padding: 20px;margin-top:-15px" height="70px" width="70px;"> 
           
          </aside>
          
      <aside class="sidebar-second" style="padding:20px;padding-right:80px;">
       <b style="font-size: 12px;padding:-10px;font-weight: lighter;text-align: right;" >
           <?php echo $f['toprightlocal'] ; ?> </b>
           <br>
            <b style="font-size: 12px;padding:-10px;font-weight: lighter;" >
           FORM-5</b>
         <br/> 
     
               
           <img src="data:<?php echo $f['toprightimagetype'] ;?>;base64,<?php echo base64_encode($f['toprightimage']) ?>"/ style="float: right;" height="70px" width="70px;"></aside>
    </div>
  </section>
</div>
     
   

        <div style="font-size:11px; margin-left: 10px;">
        
      
             <p><?php echo strtoupper($f['line1local'])?><br/>
        <?php echo strtoupper($f['line1'])?>
 
</p>            
            <p>     <?php echo strtoupper($f['line2local'])?>
            <br>  <?php echo strtoupper($f['line2'])?></p>
        </div>
        
        <table style="padding-top: 1px; width:95%; margin-left: 10px;">
            <td style="width: 55%; padding-top:20px" >
        <p>   <?php echo strtoupper($f['namelocal'])?> / NAME : <?php echo strtoupper($b['name']) ; ?></p>
        <?php if($b['aadharno'] != ""){ ?>
      <p> <?php echo strtoupper($f['aadharlocal'])?> / AADHAR NO. :  <br>
        XXXXXXXX <?php echo substr($b['aadharno'], -4) ; ?></p>
        <?php } ?>
              <p>  <?php echo strtoupper($f['doblocal'])?> | DATE OF BIRTH: 
                 <br>
                  <?php echo $b['dob'] ; ?><br> 
                  <?php if($b['dobwords'] == "") { echo "&nbsp;"; } else {
                  echo strtoupper($b['dobwords']); }?>  </p>
            <p>  <?php echo strtoupper($f['mnamelocal'])?> / NAME OF MOTHER:  <br/> <?php echo strtoupper($b['mname'] ); ?> 
        </p>
             <p><?php echo strtoupper($f['aadharlocal'])?> / MOTHER'S AADHAAR NO :<br/>
             <?php if($b['maadhar'] != "") { ?>
             XXXXXXXX<?php echo substr($b['maadhar'], -4); ?></p>
             <?php } else { ?>
             &nbsp; 
             <?php } ?>
             <p style="height:57px">  <?php echo strtoupper($f['birthaddresslocal'])?> / ADDRESS OF PARENTS AT THE TIME OF BIRTH OF THE CHILD :<br/>  <?php echo strtoupper($b['birthaddress'] ); ?> </p>
           
                <p>  <?php echo strtoupper($f['regnolocal'])?> / REGISTRATION NUMBER:<br> <?php echo strtoupper($b['regno'] ); ?>  </p>
                <p>  <?php echo strtoupper($f['remarkslocal'])?> / REMARKS (IF ANY):  <br>


                ----  </p>

                <p style="margin-top:40px">   <?php echo strtoupper($f['doilocal'])?> / DATE OF ISSUE :<br/> <?php echo strtoupper($b['dateofissue'] ); ?>  
                </p>   
                <br>
                   <p >UPDATED ON :<br/> <?php echo strtoupper($b['updatedate'] ); ?>
 </p>   
                 <img src="http://api.qrserver.com/v1/create-qr-code/?color=000000&amp;bgcolor=FFFFFF&amp;data=<?php echo $wurl ; ?>https://crsprint.online/web%2Findex.php%2Fauth%2FbirthCertificate%2Fview%2FB%2FbWF4VExRZC9GTnhBWkhtZTNrdWhUZz09.php%3Fid%3D<?php echo $_GET['id'];?>%26cont%3DAnjsjdn&amp;qzone=1&amp;margin=0&amp;size=400x400&amp;ecc=L" width="65px;" height="65px" />
             
            </td>
            <td>
                <div style="margin-top: -60px" width="140%"  >
             <p><?php echo strtoupper($f['genderlocal'])?> / SEX :   <?php echo strtoupper($b['gender'] ); ?></p>
          <p></p>
          <?php if($b['aadharno'] != ""){ ?>
      <p> &nbsp;  <br>
        &nbsp; </p>
    <?php } ?>
           <p style="height: 40px"><?php echo strtoupper($f['poblocal'])?> / PLACE OF BIRTH :
            <br>   
          <?php echo  strtoupper($b['placeofbirth']) ; ?> </p>
            <p><?php echo strtoupper($f['fnamelocal'])?> / NAME OF FATHER :<br/>   <?php echo strtoupper($b['fname'] ); ?></p>
           <p><?php echo strtoupper($f['aadharlocal'])?> / FATHER'S AADHAAR NO:<br/>
             <?php if($b['faadhar'] != "") { ?>
             XXXXXXXX<?php echo substr($b['faadhar'], -4); ?></p>
             <?php } else { ?>
             &nbsp; 
             <?php } ?>
           
           </p>
          <p style="height:57px"><?php echo strtoupper($f['permanentaddresslocal'])?> / PERMANENT ADDRESS OF PARENTS: <br> <?php echo strtoupper($b['permanentaddress']) ; ?></p>
              <p ><?php echo strtoupper($f['regdatelocal'])?>  / DATE OF REGISTRATION: <br/> <?php echo strtoupper($b['dateofregister'] ); ?> </p>
          <div style="text-align: center; margin-top:20px;">
                <img src="data:<?php echo $f['signimagetype'] ;?>;base64,<?php echo base64_encode($f['signimage']) ?>" / width="60px; height:50px"><br />
              
            <p style="font-size: 11px;"><?php echo strtoupper($f['ialocal'])?> /  ISSUING AUTHORITY :</p>
        
              <img src="data:<?php echo $f['stampimagetype'] ;?>;base64,<?php echo base64_encode($f['stampimage']) ?>"/ style="float: right;padding-right:30px;" / width="240px;" height="65px" >
             
              </div>
           
          
               </div>
            </td>
        </table>
        <br/>
        <p style="margin:20px;color: #0d0d57 ;text-align: center;">"THIS IS A COMPUTER GENERATED CERTIFICATE WHICH CONTAINS FACSIMILE SIGNATURE OF THE ISSUING AUTHORITY"<br/> " THE GOVT. OF INDIA VIDE CIRCULAR NO. 1/12/2014-VS(CRS) DATED 27-JULY-2015 HAS <br/>APPROVED THIS CERTIFICATE AS A VALID LEGAL DOCUMENT FOR ALL OFFICIAL PURPOSES". </p>
        <b><p style="color: darkgreen; margin-left: 100px;" >"<?php echo strtoupper($f['lastlinelocal'])?>" /   ENSURE REGISTRATION OF EVERY BIRTH AND DEATH "</p></b>
        
        
        <center>
         
            
            <img alt=""
                                                          src="https://www.scandit.com/wp-content/themes/scandit/barcode-generator.php?symbology=code128&value=<?php echo uniqid().rand(00000,999999);?>&size=400&ec=L"
                                                          style="width:300px;height:30px"></center>
      
     <br/>
    </div>
            
    </body>
    
<script>


    window.print();


</script>

</html>