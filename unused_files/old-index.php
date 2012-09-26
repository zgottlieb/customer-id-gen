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

// function functionname (par1) {
// //PUT COOKIES + CID TO SERVER
// 		var sUrl = document.location.protocol+"//worldhealthclub.calltrackingfox.com/variables.php?CID=" + customer_id;
// 		
// 		alert("URL VALUE" + sUrl );
// 		var oImg = new Image();
// 		oImg.src = sUrl;
// 	};

function checkCookie()
{
var customer_id=getCookie("customer_id");
if (customer_id!=null && customer_id!="")
  {
  var element=document.getElementById("id");
  element.innerHTML = customer_id;
  // alert("Welcome back " + customer_id);
  }
else 
  {
	customer_id=Math.floor((Math.random()*1000)+1);
  if (customer_id!=null && customer_id!="")
    {
    setCookie("customer_id",customer_id,365);
    }
	var element=document.getElementById("id");
	  element.innerHTML = customer_id;
  // alert("Welcome " + customer_id);
var sUrl = document.location.protocol+"//worldhealthclub.calltrackingfox.com/store-data.php?CID=" + customer_id;	
//alert("URL VALUE" + sUrl );
var oImg = new Image();
oImg.src = sUrl;
  }


}


</script>
</head>
<body onload="checkCookie()">
	<span id="id"></span>
</body>
</html>

