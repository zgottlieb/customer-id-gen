The following web application is designed to create a random customerID server side and store that in a database, then pull that number into a users web browser and store it in their cookies. As long as the cookie remains, the customerID will be recognized. Also, the random number is always automatically cross-checked with the database before sending the ID client-side to ensure every customer_ID is unique.

index.php would be stored on a client's server, while createNumber.php and the customerID database would be stored on a separate server (hence the use of JSON).

This was the beginnings of a project I was doing at a Dreamit Ventures company this summer (www.revsign.com).