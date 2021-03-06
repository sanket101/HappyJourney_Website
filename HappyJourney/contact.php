
<html>
<head>
<style>
body {
    padding: 0;
    margin: 0;
    font-family: Arial;
    font-size: 17px;
}
#heading
{
	position:fixed;
	font-size:30px;
	margin-top:-1%;
	margin-left:8%;
	color:white;
}
span
{
	color:#ee00ee;
}
#nav {
    background-color: #3F053F;
}
#nav_wrapper {
    width:100%;
    margin: 0 auto;
	text-align:right;
	height:120px;
}
#nav ul {
    list-style-type:none;
    padding: 0;
    margin: 0;
    position: relative;
    min-width: 200px;
	font-size:18px;
	margin-right:30px;
}
#nav ul li {
    display: inline-block;
	margin-top:30px;
}
#nav ul li a:hover {
   color: #ee00e3;
}
#nav ul li a{
	color:#ffffff;
    display: block;
    padding: 20px;
    text-decoration: none;
}
#nav ul li:hover ul {
    display: block;
}
#nav ul ul {
    display: none;
    position: absolute;
    background-color: #3F053F;
    border-top: 0;
    margin-left: -5px;
}
#nav ul ul li {
    display: block;
	text-align:center;
}
#nav ul ul li a:hover {
    color: #ee00e3;
}
#nav ul ul li a
{
	padding:0px;
}
input[type=text],input[type=email], select, textarea {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    margin-top: 6px;
    margin-bottom: 16px;
}

input[type=submit] {
    background-color: #045ACA;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}

.container {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
}
</style>
</head>
<body>
<div id="nav">
	<div id="heading">
	<h1>HappyJourney</h1>
	</div>
    <div id="nav_wrapper">
		<ul>
            <li><a href="happyjourney.html">Home</a>
            </li>
            <li> <a href="flight.html">Flights</a>
            </li>
            <li> <a href="aboutus.html">About Us</a>
            </li>
            <li> <a href="contact.html">Contact Us</a>
        </ul>
    </div>
    <!-- Nav wrapper end -->
</div>
<!-- Nav end -->

<h3>Contact Form</h3>

<div class="container">
  <form action="sendmail.php" method="post">
    <label for="fname">First Name</label>
    <input type="text" id="fname" name="firstname" placeholder="Your name..">

    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="lastname" placeholder="Your last name..">

    <label for="email">E-mail</label>
    <input type="email" id="email" name="email" placeholder="Your e-mail address..">

    <label for="subject">Subject</label>
    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

    <input type="submit" value="Submit" name="submit">
  </form>
</div>

</body>
</html>
