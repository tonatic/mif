
<!DOCTYPE html>
<!-- test git -->

<!-- another test git -->


<html>
<head>
    <meta charset="utf-8" />
    
<TITLE>JavaScript Mortgage Calculator</TITLE>
  <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
  <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
  <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
  <link rel="stylesheet" href="/resources/demos/style.css" />
  <script>
  $(function() {
    $( "#slider" ).slider({
      value:100,
      min: 0,
      max: 5000000,
      step: 500000,
      slide: function( event, ui ) {
        $( "#amount" ).val( ui.value + " €" );
      }
    });
    $( "#amount" ).val($( "#slider" ).slider( "value" ) + " €" );
  });
  
  var one = document.getElementById('amount');
  var fivehertz = slide + 2.225; 
  </script>

</HEAD>

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

function calculatePayment(form)
{
    princ = form.price.value - form.dp.value;
    intRate = (form.ir.value/100) / 12;
    months = form.term.value * 12;
    form.pmt.value = Math.floor((princ*intRate)/(1-Math.pow(1+intRate,(-1*months)))*100)/100;
    form.principle.value = princ;
    form.payments.value = months;
}
//-->
</SCRIPT>

<BODY>
<TABLE>
<TR>
<TD VALIGN=TOP>

<FORM NAME="MortgageMinder">

<TABLE WIDTH=250 BORDER=5 BGCOLOR=SILVER CELLPADDING=2>
<TR>
<TD COLSPAN=2 ALIGN=CENTER>
<B><FONT SIZE=+2 COLOR=BLUE>M<FONT SIZE=+1>ORTGAGE <FONT SIZE=+2>M<FONT SIZE=+1>INDER</FONT></B>
</TD>
</TR>

<TR>
<TD COLSPAN=2 WIDTH=50%> 
<TABLE BORDER=0 CELLPADDING=2>

<TR>
<TD COLSPAN=2><B>Mortgage Data:</B></TD>

<TR>
<TD ALIGN=RIGHT>House Price:</TD>
<TD>
	<br>
	<label for="flying">Flying Skill Level</label>
	<input name="flevel" id="price" type="range" min="0" max="100000" value="0" onchange="checkForZero(this)" onBlur="checkForZero(this)" > 	
	<output for="flying" name=level>0</output>/100
<!--<input type="range" min="0" max="1000000" value="0" step="100000" onchange="checkForZero(this)" onBlur="checkForZero(this)" width="400px">
<!--<input type="price" min="0" max="1000000" value="0" step="100000" onchange="tipCalculate(this.value, 'bill')" width="400px">	
<!--	
	<INPUT 
	    TYPE=TEXT
	    NAME=price
	    VALUE="200000" 
	    SIZE=7
	    onBlur=checkForZero(this)
	    onChange=checkForZero(this)>
   -->
</TD>
</TR>

<TR>
<TD ALIGN=RIGHT>Down Payment:</TD>
<TD>
 <INPUT 
    TYPE=TEXT 
    NAME=dp
    VALUE=0 
    onChange=calculatePayment(this.form) 
    SIZE=7>
</TD>
</TR>

<TR>
<TD ALIGN=RIGHT>Annual Interest Rate:</TD>
<TD>
<INPUT 
    TYPE=TEXT
    NAME=ir
    VALUE="7.5" 
    SIZE=4
    onBlur=checkForZero(this)
    onChange=checkForZero(this)>
%
</TD>
</TR>

<TR>
<TD ALIGN=RIGHT>Term:</TD>
<TD>

<INPUT 
    TYPE=TEXT
    NAME=term
    VALUE="30" 
    SIZE=4
    onBlur=checkForZero(this)
    onChange=checkForZero(this)>
Years
</TD>
</TR>

</TABLE>
</TD></TR>

<TR>
<TD>

<TABLE BORDER=0 CELLPADDING=2>

<TR>
<TD COLSPAN=2><B>Results:</B></TD>
<TR>
<TD ALIGN=RIGHT>Mortgage Principle:</TD>
<TD>

<INPUT 
    TYPE=TEXT
    NAME=principle
    SIZE=7>

</TD>
<TR>
<TD ALIGN=RIGHT>Total Payments:</TD>
<TD>
<INPUT 
    TYPE=TEXT
    NAME=payments
    SIZE=7>
</TD>
</TR>

<TR>
<TD ALIGN=RIGHT>Monthly Payment:</TD>
<TD>
<INPUT 
    TYPE=TEXT
    NAME=pmt
    SIZE=7>
</TD>
</TR>
</TABLE>
</TD>
</TR>

<TR>
<TD ALIGN=CENTER COLSPAN=2>
<INPUT 
    TYPE=BUTTON
    NAME="cmdCalc" 
    VALUE="Calculate"
    onClick=cmdCalc_Click(this.form)>


</TD>
</TR>
</TD></TR>
</TABLE>

</FORM></TD>


</TABLE>

	<br />
	<p>
  <label for="amount">Donation amount ($50 increments):</label>
  <input type="text" id="amount" style="border: 0; color: #f6931f; font-weight: bold;" />
</p>
<table>
	<tr>
		<td width="200px">
			<div id="slider"> </div>
		</td>
	</tr>
</table> 


<br>
<br>
<!--
<form onsubmit="return false" oninput="level.value = flevel.valueAsNumber">
	<label for="flying">Flying Skill Level</label>
	<input name="flevel" id="flying" type="range" min="0" max="100" value="0"> 
	<output for="flying" name=level>0</output>/100
</form>
-->







<script src="https://raw.github.com/fryn/html5slider/master/html5slider.js"></script>
<script>
onload = function() {
  var $ = function(id) { return document.getElementById(id); };
  $('one').oninput = function() { $('uno').innerHTML = this.value; };
  $('one').oninput();
  $('two').oninput = function() { $('dos').innerHTML = this.value; };
  $('two').oninput();
  $('mms').innerHTML =
    ['min: ' + $('two').min,
     'max: ' + $('two').max,
     'step: ' + $('two').step].join(', ');
};
</script>
<br />
<input type="range" id="one" />
<div id="uno">&nbsp;</div>
<br /><br />
<input type="range" value="20" min="0" max="100" step="5" id="two" />
<div id="dos">&nbsp;</div>
<div id="mms">&nbsp;</div>
<br /><br />

<!--               -->











</BODY>
</HTML>
