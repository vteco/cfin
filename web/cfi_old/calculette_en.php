<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
<title>Calculez votre-prêt immobiler</title>
<link rel="stylesheet" type="text/css" href="css/style.css"/>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.1/jquery.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<script language="JavaScript" src="js/slider.js"></script>
<script type="text/javascript" src="niftycube.js"></script>
<script type="text/javascript">
window.onload=function(){
Nifty("div#calculator","normal");
Nifty("div#newsletterForm","normal");
}
</script>

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-2348328-19']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</head>
<body>
<SCRIPT LANGUAGE="JavaScript"> 
<!--
function checkForZero(field)
{
    if (field.value == 0 || field.value.length == 0) {
        alert ("This field can't be 0!");
        field.focus(); }
    else
        calculatePayment(field.form);
}
 
function cmdCalc_Click(form)
{
    if (form.price.value == 0 || form.price.value.length == 0) {
        alert ("The Price field can't be 0!");
        form.price.focus(); }
    else if (form.ir.value == 0 || form.ir.value.length == 0) {
        alert ("The Interest Rate field can't be 0!");
        form.ir.focus(); }
    else if (form.term.value == 0 || form.term.value.length == 0) {
        alert ("The Term field can't be 0!");
        form.term.focus(); }
    else
        calculatePayment(form);
}
 
function calculatePayment()
{
    var princ = document.getElementById("sliderValue1").value;	 

    var intRate = (document.getElementById("sliderValue3").value/100) / 12;
    var months = document.getElementById("sliderValue2").value*12;
	var CalcPmt = Math.floor((princ*intRate)/(1-Math.pow(1+intRate,(-1*months)))*100)/100;
    var CalcIntPmt = princ*intRate;
    document.getElementById("pmt").value= CalcPmt.toFixed(2);
    document.getElementById("intpmt").value=CalcIntPmt.toFixed(2);

	
    window.A_SLIDERS[0].f_setValue(document.getElementById("sliderValue1").value);
    window.A_SLIDERS[1].f_setValue(document.getElementById("sliderValue2").value);
    window.A_SLIDERS[2].f_setValue(document.getElementById("sliderValue3").value);
}
function addCommas(nStr)
{
	nStr += '';
	x = nStr.split('.');
	x1 = x[0];
	x2 = x.length > 1 ? '.' + x[1] : '';
	var rgx = /(\d+)(\d{3})/;
	while (rgx.test(x1)) {
		x1 = x1.replace(rgx, '$1' + ',' + '$2');
	}
	return x1 + x2;
}
function delCommas(nStr)
{
	nStr += '';
	x = nStr.split('.');
	x1 = x[0];
	x2 = x.length > 1 ? '.' + x[1] : '';
	var rgx = /(\d+)(\d{3})/;
	while (rgx.test(x1)) {
		x1 = x1.replace(rgx, '$1' + '' + '$2');
	}
	return x1 + x2;
}

//-->
</SCRIPT>
  <div id="content">

  <div class="left">
	  
<div id="calculator">
   <form action="multiple_sliders_demo.html" method="get" name="demoForm">
   <table width="580" border="0" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF" h style="font-family:Georgia, 'Times New Roman', Times, serif; font-size:13px; color:#002C53; margin-bottom:5px; line-height:12px">
  <tr>
    <td width="126" style="padding:0 0 0 5px">Loan amount:</td>
    <td width="344"><div id="float" onMouseMove="calculatePayment()"> 
        <script language="JavaScript">var A_TPL = {
		'b_vertical' : false,
		'b_watch': true,
		'n_controlWidth': 350,
		'n_controlHeight': 18,
		'n_sliderWidth': 63,
		'n_sliderHeight': 18,
		'n_pathLeft' : 0,
		'n_pathTop' : 0,
		'n_pathLength' : 290,
		's_imgControl': 'images/sldr2h_bg.gif',
		's_imgSlider': 'images/sldr3h_sl.gif',
		'n_zIndex': 1
	}

	var A_INIT1 = {
		's_name': 'sliderValue1',
		'n_minValue' : 10000,
		'n_maxValue' : 2000000,
		'n_value' : 200000,
		'n_step' : 10000
	}
	new slider(A_INIT1, A_TPL);

    </script>    </div></td>
    <td width="102px" style="border-left:5px solid #8C7C63; padding-left:5px"> 
      <input style="border:none; font-family:Georgia, 'Times New Roman', Times, serif; font-size:15px; color:#002c53; width:100%" name="sliderValue" type="Text" id="sliderValue1" OnChange=calculatePayment() value="200000" size="10"></td>
  </tr>
</table>

<table width="580" border="0" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF" style="font-family:Georgia, 'Times New Roman', Times, serif; font-size:13px; color:#002C53; margin-bottom:5px; line-height:12px">
  <tr>
    <td width="115" style="padding-left:5px">
      Lengh (in years):
        </td>
    <td><div id="float" onMouseMove="calculatePayment()"> 

        <script language="JavaScript">
	var A_INIT2 = {
		's_name': 'sliderValue2',
		'n_minValue' : 1,
		'n_maxValue' : 30,
		'n_value' : 25,
		'n_step' : 1
	}
	new slider(A_INIT2, A_TPL);
    </script></div></td>
    <td width="95" style="border-left:5px solid #8C7C63; padding-left:5px"><input name="sliderValue2" style="border:none; font-family:Georgia, 'Times New Roman', Times, serif; font-size:14px; color:#002c53; width:100%" type="Text" id="sliderValue2" value="25" size="3" onchange=calculatePayment() /></td>
  </tr>
</table>
<table width="580" border="0" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF" style="font-family:Georgia, 'Times New Roman', Times, serif; font-size:15px; color:#002C53; margin-bottom:5px; line-height:12px">
  <tr>
    <td width="115" style="padding-left:5px">
     Interest rate (%):    
           </td>
    <td><div id="float" onMouseMove="calculatePayment()"> 
        <script language="JavaScript">
	var A_INIT3 = {
		's_name': 'sliderValue3',
		'n_minValue' : 0.25,
		'n_maxValue' : 10,
		'n_value' : 5,
		'n_step' : .01
	}

	new slider(A_INIT3, A_TPL);
    </script> </div></td>
    <td width="95" style="border-left:5px solid #8C7C63; padding-left:5px">
      <input name="sliderValue" style="border:none; font-family:Georgia, 'Times New Roman', Times, serif; font-size:15px; color:#002c53; width:100%" type="Text" id="sliderValue3" value="5" size="3" OnChange=calculatePayment()></td>
  </tr>
</table>
  <table width="580" border="0" align="center" cellpadding="0" cellspacing="0" style="font-family:Georgia, 'Times New Roman', Times, serif; font-size:14px; color:#FFFFFF" >
    <tr>
      <td width="468" style="color:#FFF; font-size:15px">
       Instalment (principal + interests):</td>
      <td align="right"><input border="0" style="border:none; font-family:Georgia, 'Times New Roman', Times, serif; font-size:15px; color:#8a221b; width:95px; padding:2px 0 2px 5px; margin:0; font-weight:bold; background:none; border:none"  name="pmt" id="pmt" type="Text" size="10"></td>
    </tr>
    <tr>
      <td style="color:#FFF; font-size:15px">Instalment (interests only):</td>
      <td align="right"><input style="border:none; font-family:Georgia, 'Times New Roman', Times, serif; font-size:15px; color:#8a221b; width:95px; padding:2px 0 2px 5px; font-weight:bold; background:none; border:none" name="intpmt" id="intpmt" type="Text" size="10"></td>
    </tr>
  </table>
</form>
</div>
    
</div>
</div>
    
</body>
</html>