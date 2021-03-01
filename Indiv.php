<?php

require_once __DIR__ . '/vendor/autoload.php';

$mpdf = new \Mpdf\Mpdf([   'mode' => 'utf-8',
    'format' => [310, 410],'orientation' => 'L']);
$css = file_get_contents('style.css');
$mpdf->WriteHTML($css,1);
$mpdf->SetHTMLHeader('

<table width="100%" class="theader">
    <tr>
        <td><img src="img\rlms.png" class="row"></td>
        <td><img src="img\rlmsL.png" height="28"></td>
        <td width="33%" class="twidth"><img class="img" src="img\rlmsL.png" height="28"><span><b>LEARNER ATTENDENCE REPORT</b></span>
</td>
    </tr>
</table>
</div>
  <table width="100%">
    <tr>
      <td><img src="img\nsf.png" class="nsf1"></td>
        <td width="20%" align="center"><img src="img\rlmsL.png"></td>
		<td  ><img src="img\rlmsL.png" height="28"></td>
        <td width="8%"><img src="img\mtl1.PNG"  class="mtl">
</td>
    </tr>
	<br/>
</table>');


$mpdf->WriteHTML('<br/><br/><br/><br/><br/><br/><br/><br/><div class="back"><h3>REPORT PERIOD - FROM: 01/10/2020, TO: 30/10/2020</h3></div>
  <br/>', \Mpdf\HTMLParserMode::HTML_BODY, true, false);
  
  $mpdf->WriteHTML('<div>
   <div class="c">
 <table class="t" >
 <tr>
 <th class="th">Monday</th>
 <th class="th">Tuesday</th>
 <th class="th">Wednesday</th>
 <th class="th">Thursday</th>
 <th class="th">Friday</th>
 <th class="th">Saturday</th>
 <th class="th">Sunday</th>
 </tr>
  <tr>
  <td class="image1"></td>
  <td class="image1"></td>
  <td class="image1"></td>
    <td class="image1" ><b><img src="img\signiture.png" height="10%"></br><b>Contact Time</b><br/>188:30:09
	  <br/><hr/> 2021-08-18</td>
    <td class="image1"><img src="img\signiture.png" height="10%"></br>  <b>Contact Time</b><br/>188:30:09
	  <br/><hr/> 2021-08-18</td>
	  <td class="image1">2021-08-18</td>
	  <td class="image1">2021-08-18</td>
   
  </tr>
  <tr>
    <td class="image" ><img  src="img\signiture.png" height="10%"></br>  <b>Contact Time</b><br/>188:30:09
	  <br/><hr/> 2021-08-18</td>
    <td class="image" ><img   src="img\signiture.png" height="10%"></br>  <b>Contact Time</b><br/>188:30:09
	  <br/><hr/> 2021-08-18</td>
	   <td class="image" ><img   src="img\signiture.png" height="10%"></br>  <b>Contact Time</b><br/>188:30:09
	  <br/><hr/> 2021-08-18</td>
	   <td class="image" ><img   src="img\signiture.png" height="10%"></br>  <b>Contact Time</b><br/>188:30:09
	  <br/><hr/> 2021-08-18</td>
	   <td class="image" ><img src="img\signiture.png" height="10%"></br>  <b>Contact Time</b><br/>188:30:09
	  <br/><hr/> 2021-08-18</td>
	   <td  class="image"><img  src="img\signiture.png" height="10%"></br>  <b>Contact Time</b><br/>188:30:09
	  <br/><hr/> 2021-08-18</td>
	   <td class="image" ><img   src="img\signiture.png" height="10%"></br>  <b>Contact Time</b><br/>188:30:09
	  <br/><hr/> 2021-08-18</td>
  
  </tr>
  <tr>
      <td class="image" ><img   src="img\signiture.png" height="10%"></br>  <b>Contact Time</b><br/>188:30:09
	  <br/><hr/> 2021-08-18</td>
	   <td class="image" ><img  src="img\signiture.png" height="10%"></br>  <b>Contact Time</b><br/>188:30:09
	  <br/><hr/> 2021-08-18</td>
	   <td class="image" ><img   src="img\signiture.png" height="10%"></br>  <b>Contact Time</b><br/>188:30:09
	  <br/><hr/> 2021-08-18</td>
	   <td class="image" ><img   src="img\signiture.png" height="10%"></br>  <b>Contact Time</b><br/>188:30:09
	  <br/><hr/> 2021-08-18</td>
	   <td class="image" ><img   src="img\signiture.png" height="10%"></br>  <b>Contact Time</b><br/>188:30:09
	  <br/><hr/> 2021-08-18</td>
	  <td class="image">2021-08-18</td>
	  <td class="image">2021-08-18</td>
  
  </tr>
  <tr>
       <td class="image" ><img   src="img\signiture.png" height="10%"></br>  <b>Contact Time</b><br/>188:30:09
	  <br/><hr/> 2021-08-18</td>
	   <td class="image" ><img   src="img\signiture.png" height="10%"></br>  <b>Contact Time</b><br/>188:30:09
	  <br/><hr/> 2021-08-18</td>
	   <td class="image" ><img   src="img\signiture.png" height="10%"></br>  <b>Contact Time</b><br/>188:30:09
	  <br/><hr/> 2021-08-18</td>
	   <td class="image" ><img   src="img\signiture.png" height="10%"></br>  <b>Contact Time</b><br/>188:30:09
	  <br/><hr/> 2021-08-18</td>
	   <td class="image" ><img   src="img\signiture.png" height="10%"></br>  <b>Contact Time</b><br/>188:30:09
	  <br/><hr/> 2021-08-18</td>
	  <td class="image">2021-08-18</td>
	  <td class="image">2021-08-18</td>
  </tr>
</table>

 <table width="800px">
  <tr>
    <td >
      <label>Facilitator Signature:</label><br/>
	<img src="img\f.PNG" height="10%"><br/>
	  2020-11-05 @ 08:41:51
	</td>
    <td>
      <label >SDP Representative Signature:</label><br/>
	  	 <img src="img\sdp.PNG" height="10%"><br/>
	   2020-11-05 @ 08:41:51
</td>
   </table>
	<div>
  </div>
  </div>

', \Mpdf\HTMLParserMode::HTML_BODY, false, false);
$mpdf->WriteHTML('<br/><br/>', \Mpdf\HTMLParserMode::HTML_BODY, true, false);

$mpdf->WriteHTML('  <div class="s">
  <div >
         <li class="list">
		 <div class="name"><h1>NOMPUMELELO MZIMELA</h1></div>
		  <div class="name1"><img src="img\m.png" height="54%"></div>
        </li>
        </div>
		<div>
	<div><h4 id="h3">PROJECT DETAILS</h4></div>
 <table class="t">
  <tr>
    <td class="tdh" ><b>Learning Pathway:</b></td>
    <td class="tdl">Learnership</td>
   
  </tr>
  <tr>
    <td class="tdh"><b>Qualification:</b></td>
    <td class="tdl">National Certificate: Construction Plumbing</td>
  
  </tr>
  <tr>
    <td class="tdh"><b>Province:</b></td>
    <td class="tdl">Mpumalanga</td>
  
  </tr>
  <tr>
    <td class="tdh"><b>Project Name:</b></td>
    <td class="tdl"></td>
   
  </tr>
  <tr>
    <td class="tdh"><b>Project Number:</b></td>
    <td class="tdl">00000</td>
   
  </tr>
</table>
	<h4 id="h3">LEARNERS DETAILS</h4></div>

   <table class="t">
  <tr>
    <td class="tdh" ><b>Learner Name:</b></td>
    <td class="tdl">Nompumelelo</td>
   
  </tr>
  <tr>
    <td class="tdh"><b>Learner Surname:</b></td>
    <td class="tdl">Mzimela</td>
  
  </tr>
  <tr>
    <td class="tdh"><b>Learner ID:</b></td>
    <td class="tdl">8707091097081</td>
  
  </tr>
  <tr>
    <td class="tdh"><b>Gender:</b></td>
    <td class="tdl">Female</td>
   
  </tr>
  <tr>
    <td class="tdh"><b>Learner Contact:</b></td>
    <td class="tdl">0835153533</td>
   
  </tr>
  
    <tr>
    <td class="tdh" ><b>Learner Address:</b></td>
    <td class="tdl">601 Charter House, 75 Cropton Str, Pinetown</td>
   
  </tr>
  <tr>
    <td class="tdh"><b>Expected ClockIns:</b></td>
    <td class="tdl">22</td>
  
  </tr>
  <tr>
    <td class="tdh"><b>Actual Clockins:</b></td>
    <td class="tdl">22</td>
  
  </tr>
  <tr>
    <td class="tdh"><b>Expected Clock Outs:</b></td>
    <td class="tdl">22</td>
   
  </tr>
  <tr>
    <td class="tdh"><b>Actual Clock Outs:</b></td>
    <td class="tdl">21</td>
   
  </tr>
  
    <tr>
    <td class="tdh" ><b>Contact Time:</b></td>
    <td class="tdl">188:30:09</td>
   
  </tr>
  <tr>
    <td class="tdh"><b>Days Absent:</b></td>
    <td class="tdl">1</td>
 
</table>
  <br/>', \Mpdf\HTMLParserMode::HTML_BODY, true, false);

$mpdf->WriteHTML('<div style="text-align: right;color:black; "><b>NSF | Learner Attendance Report | 2020-11-06 @ 08:26:23 | page: 1 of 1</b></div>');
$mpdf->SetHTMLFooter('

 <div class ="h"> <div>
');

$mpdf->Output();
?>
