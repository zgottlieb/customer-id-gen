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

// function getNumber()
// {
// 	// the url of the script where we send the asynchronous call
// 	var url = "http://worldhealthclub.calltrackingfox.com/rand-num.php?callback=printNumber";	
// 	// create a new script element
// 	var script = document.createElement('script');
// 	// set the src attribute to that url
// 	script.setAttribute('src', url);
// 	// insert the script in out page
// 	document.getElementsByTagName('head')[0].appendChild(script);
// }
// 
// function printNumber(data)
// {
// 	customer_id=data;
// }

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
		// the url of the script where we send the asynchronous call
		// var url = "http://worldhealthclub.calltrackingfox.com/rand-num.php?callback=printNumber";	
		// create a new script element
		var script = document.createElement('script');
		// set the src attribute to that url
		script.src="http://worldhealthclub.calltrackingfox.com/createNumber.php?callback=storeNumber&url=" + document.location.host;
		// insert the script in out page
		document.getElementsByTagName('head')[0].appendChild(script);
	}
}

// function getLocation() {
// 	// var script = document.createElement('script');
// 	// script.src="http://worldhealthclub.calltrackingfox.com/createNumber.php?url=" + document.URL;
// 	// // insert the script in out page
// 	// document.getElementsByTagName('head')[0].appendChild(script);
// 	var sUrl = "http://worldhealthclub.calltrackingfox.com/createNumber.php?url=" + document.URL;	
// 	//alert("URL VALUE" + sUrl );
// 	var oImg = new Image();
// 	oImg.src = sUrl;
// }
	

function storeNumber(customer_id) {
		if (customer_id!=null && customer_id!="")
				    {
				    setCookie("customer_id",customer_id,365);
				    }
		//put customer_id value on page
		
		document.getElementById("id").innerHTML = 'Welcome ' + customer_id;
		
		// // store customer_id value in CID column in mySQL
		// var sUrl = document.location.protocol+"//worldhealthclub.calltrackingfox.com/store-data.php?CID=" + customer_id;	
		// //alert("URL VALUE" + sUrl );
		// var oImg = new Image();
		// oImg.src = sUrl;
}

</script>
</head>
<body onload="checkCookie()">
	<!-- <span onclick="getNumber()">click here to make the jsonp call</span> -->
	<span id="id"></span>
</body>
</html>