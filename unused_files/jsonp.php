<html>
<head><script type="text/javascript">// <![CDATA[
            function callTheJsonp()
            {
                // the url of the script where we send the asynchronous call
                var url = "http://worldhealthclub.calltrackingfox.com/data.php?callback=parseRequest";
                // create a new script element
                var script = document.createElement('script');
                // set the src attribute to that url
                script.setAttribute('src', url);
                // insert the script in out page
                document.getElementsByTagName('head')[0].appendChild(script);
            }
 
            // this function should parse responses.. you can do anything you need..
            // you can make it general so it would parse all the responses the page receives based on a response field
            function parseRequest(response)
            {
                try // try to output this to the javascript console
                {
                    console.log(response);
                }
                catch(an_exception) // alert for the users that don't have a javascript console
                {
                    alert('product id ' + response.item_id + ': quantity = ' + response.quantity + ' & price = ' + response.price);
                }
				document.getElementById('id').innerHTML = new Array(response);
            }
 
// ]]></script>
</head>
<body>
 
 <span onclick="callTheJsonp()">click here to make the jsonp call</span>
 <span id="id" style="display:block"></span>
</body>
</html>