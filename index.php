<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>PHP Practice</title>
	<link rel="stylesheet" href="./src/css/style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">

</head>

<body>

	<nav>
		<div class="logo">Travelinnes <i class="fas fa-fighter-jet"></i></div>
		<ul class="header-links">
			<li><a href="#">home</a></li>
			<li><a href="#">about</a></li>
			<li><a href="#">tourist spots</a></li>
			<li><a href="#">contact</a></li>
		</ul>
		<div class="ctn-form">
			<a href="src/pages/register.php">sign up</a>
			<a href="src/pages/login.php" class="active">log in</a>
		</div>
	</nav>
	<div class="container">
		<div class="bg-image"></div>
		<div class="front-page">
			<h1>It's More Fun in The <span class="ph">Philippines</span></h1>
			<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus incidunt perspiciatis at dolor facilis.
				Hic pariatur dolores sed deserunt quis, magni illo sit. Voluptatem, odio enim. Deserunt atque sunt illum?
			</p>
			<a href="#about-page">Why Philippines?<i class="fas fa-fighter-jet"></i></a>
		</div>
	</div>
	<section class="about-page" id="about-page">
		<h1>Why Philippines?</h1>
		<section class="section-1">
			<h2>1. Summer Weather in the Philippines Almost All-year</h2>
			<p>If you’re craving for the rays of the sun to kiss your skin, the Philippines is your dream paradise. As a tropical country, the Philippines only has two seasons: dry and rainy seasons.</p>
			<p>The dry season covers November to May while the rainy season is usually from June until October. During the rainy months, it’s still sunny and warm so tours in the Philippines are still ongoing with cancellations only necessary when there’s a typhoon.</p>
			<p>The warmest months are during the summer season in the Philippines, covering the months of March, April, and May. Island and beach destinations in the Philippines such as Boracay, Palawan, and Cebu are best enjoyed during the summer season. </p>
			<div class="img-container">
				<img src="src/images/sunset.jpg" alt="">
			</div>
			
		</section>

		<section class="section-2">
			<h2>2. Friendly and Warm Filipinos</h2>
			<p>Aside from the picturesque spots in the Philippines, the warmth and hospitality of the Filipinos is a reason itself for you to visit the country. It continuously tops surveys on friendliness and was even considered as the friendliest country in Asia. The moment your plane lands here, you will be greeted with the genuine and loving smiles of Pinoys. </p>
			<p>Communicating is not a problem too. The majority of Filipinos speak and understand the English language, making it a truly convenient place for foreign visitors.</p>
			<p>You need not worry about getting lost and asking questions on the road because Filipinos will guide you. You will most likely gain a lot of Filipino friends during your trip and they may just be the reason for you to come back. </p>
			<p>Filipinos are very hospitable too. They have strong family ties as part of their culture. If you have Filipino friends who invite you to their home, they will treat you like you’re a part of their family and may even serve you a feast of home-cooked Filipino food.</p>
			<div class="img-container">
				<img src="src/images/filipinos.jpg" alt="">
			</div>
		</section>

		<section class="section-3">
			<h2>3. Friendly and Warm Filipinos</h2>
			<p>Cost is one of the major considerations of a traveler. Good thing, the cost of living and travel expenses in the Philippines is affordable. There are plenty of day tours that are just around PHP1000 (USD20). </p>
			<p>You will find that there’s a lot of accommodation options for you in the Philippines as well: from hostels to cheap bed and breakfast accommodation that are both perfect for backpackers.</p>
			<p>Food in the Philippines is cheap too. For roughly around PHP100-150(USD2-3), you will find yourself a decent breakfast place that offers classic Filipino food with coffee. The same goes for your lunch and dinner. </p>
			<p>Filipinos are very hospitable too. They have strong family ties as part of their culture. If you have Filipino friends who invite you to their home, they will treat you like you’re a part of their family and may even serve you a feast of home-cooked Filipino food.</p>
			<div class="img-container">
				<img src="src/images/budget.jpg" alt="">
			</div>
		</section>
	</section>
	<script src="src/app.js"></script>
</body>

</html>