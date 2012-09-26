<html>
<head>
<script type="text/javascript">

function getCookie(value)
{
var i,x,y,ARRcookies=document.cookie.split(";");
for (i=0;i<ARRcookies.length;i++)
  {
  x=ARRcookies[i].substr(0,ARRcookies[i].indexOf("="));
  y=ARRcookies[i].substr(ARRcookies[i].indexOf("=")+1);
  x=x.replace(/^\s+|\s+$/g,"");
  if (x==value)
    {
    return unescape(y);
    }
  }
}

function setCookie(c_name,value,exdays)
{
var exdate=new Date();
exdate.setDate(exdate.getDate() + exdays);
var c_value=escape(value) + ((exdays==null) ? "" : "; expires="+exdate.toUTCString());
document.cookie=c_name + "=" + c_value;
}

function checkCookie()
{
	var customer_id=getCookie("customer_id");
	if (customer_id!=null && customer_id!="")
	  {
	  var element=document.getElementById("id");
	  element.innerHTML = 'Welcome back ' + customer_id;
	  }
	else 
	{
	var script = document.createElement('script');
	script.src="http://worldhealthclub.calltrackingfox.com/createNumber.php?callback=storeNumber&url=" + document.location.host;
	document.getElementsByTagName('head')[0].appendChild(script);
	}
}
	
function storeNumber(customer_id) {
		if (customer_id!=null && customer_id!="")
				    {	setCookie("customer_id",customer_id,365);
				    }
		document.getElementById("id").innerHTML = 'Welcome ' + customer_id;
}

</script>
</head>
<body onload="checkCookie()">
	<span id="id"></span>
</body>
</html>