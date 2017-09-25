<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML>
<HEAD>

<script type="text/javascript">
var okToPrint=false;

function isIE()
{
return (navigator.appName.toUpperCase() == 'MICROSOFT INTERNET EXPLORER');
}

function doPrint()

//{ window.printFrame.location.href="http://www.mysite.com/somepage.html";
{ window.printFrame.location.href="somepage.html";
okToPrint=true;
}

function printIt()
{if (okToPrint)
{ if ( isIE() )
{ document.printFrame.focus();
document.printFrame.print();
}
else
{ window.frames['printFrame'].focus();
window.frames['printFrame'].print();
}
}
}

</script>
</HEAD>

<body>
Press print button
<button onclick="doPrint(); blur(this);">Print</button>

<iframe width="0" height="0" name ="printFrame" id="printFrame" onload="printIt()"></iframe>

</BODY>
</HTML>