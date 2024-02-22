<html>
<head>
	<script language="javascript">

		function fu1()
		{
			var a=f1.d1.value;
			if(a=="")
				alert("please enter DOB")
		}
	</script>
	<style type="text/css">
		#head{
background:white;
height:20%;
}
#img{
float:left;
background:pink;
width:18%;
height:20%;
}
#title{
float:right;
background:pink;
width:82%;
height:40%;
}
		body {
        font-family: Times New Roman,sans-serif;
    }
		
		.dob {
		display: inline-block;
        text-align: center;
    }

    label {
        display: block;
    }
    	form {
        text-align: center;
        border: 1px solid #ccc;
        width: 50%;
        padding: 50px;
        margin: 0 auto; 
        box-shadow: 0 0 50px pink;
        border-radius: 10px;
    	}
		
		input[type=date]
			{
		width:32%;
		padding:12px 20px;
		margin:10px 178px;
		display:inline-block;
		border:2px solid red;
		border-color: black;
		box-sizing:border-box;
		}

		input[type=submit]
		{

		width:32%;
		padding:12px 20px;
		margin:10px 178px;
		color:white;
		border:none;
		background-color:#689 ;
		cursor: pointer;
	}
		input[type=submit]:hover
	{
		background-color: #7989;
	}



	</style>
</head>
<body>
	<div id="head"><div id="img"><img id="a" src="numerology.jpg" width="243" height="150"> </img></div>
	<div id="title"><center style="font-size:30px";>NUMEROLOGY CALCULATOR</center></div>
	</div><br>
<form name="f1" method="post" action="">
	<div class="dob">
	<lable for="d1" style="font-size:22px">Enter your DOB:</lable>
	<input type="date" name="d1">
</div>
	<input type="submit" value="Calculate" onfocusin="fu1()">
</form>
<br>
<p style="font-family:Times New Roman;font-size:25px; font-color: black;"><?php
if($_POST)
{
$date=$_POST['d1'];
$ttl=0;
$ttl1=0;
while($date>0)
{
	$s=(int)$date%10;
	$ttl=$ttl+$s;
	$date=(int)$date/10;
}
if($ttl>=10)
{
    while($ttl>0)
	{
		$r=(int)$ttl%10;
		$ttl1=$ttl1+$r;
		$ttl=(int)$ttl/10;
	}
}
if ($ttl=="1"||$ttl1=="1")
	echo "Numerology Number 1 is ruled by planet Sun, making people with this life path number very powerful, hardworking, and self-dependent. They are also natural leaders who have good controlling abilities and are very creative. However, they can be egoistic, dominating, and stubborn at times.";
else if($ttl=="2"||$ttl1=="2")
	echo "Numerology Number 2, related to the Moon planet, signifies intuition and emotional imbalance. Though blessed with sensitivity, kindness, and harmonious nature, these people often suffer from mood swings and can go into depression, having a deep impact on their lives.";
else if($ttl=="3"||$ttl1=="3")
	echo "Those born under Sun Number 3 are known as problem solvers. They are innovative in their thought process and come up with solutions quickly. They think outside the box and have a unique approach to day-to-day life issues. They are optimistic and have a childish side to them that makes them endearing yet annoying.";
else if($ttl=="4"||$ttl1=="4")
	echo "Numerology Number 4 is associated with planet Rahu and indicates energetic, knowledgeable, clever, and confident individuals with leadership skills. They are good at keeping secrets, love creativity, and have a sharp memory. However, they can be rebellious and overconfident sometimes, leading to negative traits.";
else if($ttl=="5"||$ttl1=="5")
	echo "Number 5 is considered to be a good number, which brings a good luck in life. The people, who belong to these numbers are good planners, thinkers and decision makers. They are intelligent, witty and have a good communication skills. They are adventurous and courageous.";
else if($ttl=="6"||$ttl1=="6")
	echo "People, who are associated with Number 6 are the lucky ones. They have a good personality and are very caring for their children. They are very gentle, soft spoken, very loving, beautiful and the one, who loves to have all the luxuries. They are very romantic kind of people.";
else if($ttl=="7"||$ttl1=="7")
	echo "Number 7 is regarded as mysterious and spiritual, ruled by the planet Ketu, and is associated with creativity and intuition. It is also an unfortunate number, indicating moodiness and anxiety issues. These people can be great healers, teachers, and spiritual gurus and are advised to wear brown or green.";
else if($ttl=="8"||$ttl1=="8")
	echo "Number 8 represents the balance in the materialistic world and spiritual world. They are religious one's, who always believe in God. They have a good will power and serious nature and their determination makes them very strong to face any challenges in life. ";
else if($ttl=="9"||$ttl1=="9")
	echo "Number 9 represents the ruling planet Mars and people possess its qualities of ambition, confidence, stamina, and energy. They are down-to-earth and disciplined, but can also be aggressive, stubborn, and speak harshly.";
}
?></p>
</body>
</html>