<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

?>

<!DOCTYPE html>
<html>
<head>
	<div style= "color: white"</div><title>LIVE | EVIL</title>
</head>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia&effect=neon|outline|emboss|shadow-multiple">
<style>
	body {
		background: black;
 		background-image: url('h.gif');
 		background-repeat: no-repeat;
  		background-attachment: fixed;
  		background-size: cover;
  		background-blend-mode: lighten; 
}
	
	img {
  		border-radius: 25px;
}
{
  font-family: "Sofia", sans-serif;
  font-size: 30px;
}
	
</style>
<body>

<style type="text/css">
#text{

		height: 25px;
		border-radius: 5px;
		padding: 4px;
		border: solid thin #aaa;
		width: 100%;
	}
#table {
 		border-collapse: collapse;
  		width: 100%;
  		border: 1px solid #ddd;
}
	.center {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 90%;
}

</style>

	<h1>LIVE|EVIL</h1><hr>
	<div style="font-size: 50px;margin: 10px;text-align: center; color: red;">WELCOME!</div><br>

	<img src="life.jpg" class="center" width="350" height="400"/>

	<div style="font-size: 150px;margin: 10px;text-align: center;">...<br></div>
	
<h1 class="font-effect-shadow-multiple">Luke 6:43-45</h1>
	<div style="font-size: 30px;margin: 10px;text-align: center;">"For there is no good tree which produces bad fruit, nor, on the other hand, a bad tree which produces good fruit. "For each tree is known by its own fruit. For men do not gather figs from thorns, nor do they pick grapes from a briar bush.<br></div>

<h1 class="font-effect-shadow-multiple">Lucas 6:45</h1>
	<div style="font-size: 30px;margin: 10px;text-align: center;">Ang mabuting tao ay naglalabas ng mabuti mula sa kanyang pusong sagana sa kabutihan, samantalang ang masamang tao naman ay naglalabas ng masama mula sa kanyang pusong tigib ng kasamaan. Sapagkat kung ano ang nag-uumapaw sa puso ay siyang sinasabi ng labi.<br></div>

<h1 class="font-effect-shadow-multiple">Colossians 3:20</h1>
	<div style="font-size: 30px;margin: 10px;text-align: center;">“Mga anak, magsitalima kayo sa inyong magulang sa lahat ng mga bagay, sapagka’t ito’y totoong nakalulugod sa Panginoon.”<br></div>

<h1 class="font-effect-shadow-multiple">Luke 6:45</h1>
	<div style="font-size: 30px;margin: 10px;text-align: center;">The good man out of the good treasure of his heart brings forth what is good; and the evil man out of the evil treasure brings forth what is evil; for his mouth speaks from that which fills his heart.<br></div>

<h1 class="font-effect-shadow-multiple">John 10:11</h1>
	<div style="font-size: 30px;margin: 10px;text-align: center;">“I am the good shepherd; the good shepherd lays down His life for the sheep."<br></div>

<h1 class="font-effect-shadow-multiple">Romans 5:7</h1>
	<div style="font-size: 30px;margin: 10px;text-align: center;">For one will hardly die for a righteous man; though perhaps for the good man someone would dare even to die.<br></div>

<center>
	<video width="700" controls>
 	<source src="vid.mp4" type="video/mp4">
 	</video>
</center>
<div style="font-size: 15px;margin: 10px;text-align: center;">Credits: Lovely Mae Galan Balucan |<a href="https://m.facebook.com/story.php?story_fbid=4031203176912137&id=100000674824071">Keeping the Faith</a></div><br><br>

<h1 class="font-effect-shadow-multiple">Romans 12:21</h1>
	<div style="font-size: 30px;margin: 10px;text-align: center;">Do not be overcome by evil, but overcome evil with good.<br></div>

<h1 class="font-effect-shadow-multiple">Proverbs 13:6</h1>
	<div style="font-size: 30px;margin: 10px;text-align: center;">Righteousness guards him whose way is blameless, but sin overthrows the wicked.<br></div>

<h1 class="font-effect-shadow-multiple">Matthew 15:19</h1>
	<div style="font-size: 30px;margin: 10px;text-align: center;">For out of the heart come evil thoughts, murder, adultery, sexual immorality, theft, false witness, slander.<br></div>

<h1 class="font-effect-shadow-multiple">John 8:34</h1>
	<div style="font-size: 30px;margin: 10px;text-align: center;">Jesus answered them, “Truly, truly, I say to you, everyone who commits sin is a slave to sin.<br></div>

<h1 class="font-effect-shadow-multiple">Matthew 5:28</h1>
	<div style="font-size: 30px;margin: 10px;text-align: center;">But I say to you that everyone who looks at a woman with lustful intent has already committed adultery with her in his heart.<br></div>

<h1 class="font-effect-shadow-multiple">Matthew 12:35</h1>
	<div style="font-size: 30px;margin: 10px;text-align: center;"> The good man brings out of his good treasure what is good; and the evil man brings out of his evil treasure what is evil.<br></div>

	<div style="font-size: 150px;margin: 10px;text-align: center; color: red;">~<br></div>
	

	<div style="font-size: 30px;margin: 10px;text-align: center;">At Last, we have a message to you...<br></div><br><br>

	<div style="font-size: 25px;margin: 10px;text-align: center;">Hey <?php echo $user_data['user_name']; ?>, Kumusta ka? Are you okay? Laban lang, tiwala lang. Malalampasan mo lahat ng yan. Di niya yan ibibigay sayo kung di mo kaya. Oo mahirap pero kaya natin. Lagi nating kakayanin. Isipin mo nalampasan mo na yung ibang mga pagsubok na dumating, ito pa ba? May kasama ka. Di ka nag-iisa. Lagi lang siyang nandiyan. Tawag ka lang. Lapit ka lang. Yayakapin at tatanggapin ka niya. Just keep on praying. He will be your guide. He will be our light. He will save us. Always. <br></div><br>
	<div style="font-size: 20px;margin: 10px;text-align: right; color: red;">- Allyza B. Ramos -<br></div><br>

	<div style="font-size: 25px;margin: 10px;text-align: center;"> Para sa mga taong makakabasa ng mensahe na ito; sana kahit papaano maliwanagan kayo sa mga problemang pinagdadaan nyo. Kung sa tingin nyo wala nang pag-asang magbago ang inyong buhay mali agad kayo ng inaakala sapagkat lahat tayo ay may kakayanan na baguhin ang takbo ng ating buhay nasa atin na lang kung papaano natin ito sisimulan at papatakbuhin ng maayos dun sa mga taong naliligaw ng landas hindi pa huli ang lahat para itama ang bawat pagkakamali simulan mo sa pagmamahal sa iyong sarili sa iyong pamilya isipin mo palagi na nandyan lang ang panginoon para ikaw ay gabayan, wag mong hahayaan na basta kana lang matalo ng pagsubok. Makakaya mo yan lagpasan.<br></div><br>
	<div style="font-size: 20px;margin: 10px;text-align: right; color: red;">- Luke Jacobe D. Magboo -<br></div><br><hr>
	
	<div style= "color: red;text-align: center;"</div><br>© 2021 LIVE | EVIL <br> All Rights Reserved.<br>
	<a href="logout.php">Logout</a><br><br>
</body>
</html>

