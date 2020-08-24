@extends('frontendtemplate')
@section('content')
<!DOCTYPE HTML>
<!--
	Caminar by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
<head>
	<title>Caminar by TEMPLATED</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="stylesheet" href="{{asset('backend/css/main.css')}}" />
</head>
<body style="background-image: url({{asset('backend/img/l1.jpg')}});">

	<!-- Header -->
	

	<!-- Main -->
	<section id="main">
		<div class="inner">

			<!-- One -->
			<section id="one" class="wrapper style1">

				<div class="image fit flush">
					<img src="{{asset('backend/img/l5.png')}}" alt="" />
				</div>
				<header class="special">
					<h2>KNOWLEDGE IS POWER!</h2>
					
				</header>
				<div class="content">
					<p>Library management is a sub-discipline of institutional management that focuses on specific issues faced by libraries and library management professionals. Library management encompasses normal managerial tasks, as well as intellectual freedom and fundraising responsibilities. Issues faced in library management frequently overlap with those faced in managing non-profit organizations.</p>
					<p>The basic functions of library management include, but are not limited to: planning and negotiating the acquisition of materials, Interlibrary Loan (ILL) requests, stacks maintenance, overseeing fee collection, event planning, fundraising, and human resources.</p>
				</div>
			</section>

			<!-- Two -->
			<section id="two" class="wrapper style2">
				<header>
					<h2>Books Gallery</h2>
					<p></p>
				</header>
				<div class="content">
					<div class="gallery">
						<div>
							<div class="image fit flush">
								<a href="images/pic03.jpg"><img src="{{asset('backend/img/l2.jpg')}}" alt="" /></a>
							</div>
						</div>
						<div>
							<div class="image fit flush">
								<a href="images/pic01.jpg"><img src="{{asset('backend/img/l3.jpg')}}" alt="" /></a>
							</div>
						</div>
						<div>
							<div class="image fit flush">
								<a href="images/pic04.jpg"><img src="{{asset('backend/img/ll.jpeg')}}" alt="" /></a>
							</div>
						</div>
						<div>
							<div class="image fit flush">
								<a href="images/pic05.jpg"><img src="{{asset('backend/img/l2.jpg')}}" alt="" /></a>
							</div>
						</div>
					</div>
				</div>
			</section>

			<!-- Three -->
			<section id="three" class="wrapper">
				<div class="spotlight">
					<div class="image flush"><img src="{{asset('backend/img/li.jpeg')}}" alt="" /></div>
					<div class="inner">
						<h3>Common library Construct</h3>
						<p>Most of the libraries that store physical media like books, periodicals, film, and other objects adhere to some derivative of the Dewey Decimal System as their method for tagging, storing, and retrieving materials based on unique identifiers. The use of such systems have caused librarians to develop and leverage common constructs that act as tools for both library professionals and library users alike. These constructs include master catalogs, domain catalogs, indexes, unique identifiers, unique identifier tokens, and artifacts .</p>
					</div>
				</div>
				<div class="spotlight alt">
					<div class="image flush"><img src="{{asset('backend/img/lli.jpg')}}" alt="" /></div>
					<div  class="inner">
						<h3>Planning and Manintaing Library</h3>
						<p>An important aspect of library management is planning and maintaining library facilities. Successful planning is defined as "active planning that ensures an organization will have the right people in the right place at the right time for right job" Planning the construction of new libraries or remodeling those that exist is integral since user needs are often changing. To supplement their operating budget, managers often secure funding through donor gifts and fundraising. Many facilities have begun including cafes, Friends of the Library spaces, and even exhibits to help generate additional revenue.These areas should be taken into account when planning for building expansions.

						</p>
					</div>
				</div>
				<div class="spotlight">
					<div class="image flush"><img src="{{asset('backend/img/l5.png')}}" alt="" /></div>
					<div class="inner">
						<h3>Planning and Manintaing Library</h3>
						<p>The site for new construction must be found, then the building must be designed, constructed, and eventually evaluated. Once established, it is important that the building is regularly maintained. This may be completed by delegating tasks to maintenance personnel or by hiring an outside company through bids.

						Disaster planning must be taken into account in the library context as well: not only the impact of a disaster on the library, but the library's potential role as a support service just after a disaster.</p>
					</div>
				</div>
			</section>

		</div>
	</section>

	
			 <!-- <script src="assets/js/jquery.min.js"></script>
			// <script src="assets/js/jquery.poptrox.min.js"></script>
			// <script src="assets/js/skel.min.js"></script>
			// <script src="assets/js/util.js"></script>
			// <script src="assets/js/main.js"></script> -->

		</body>
		</html>
		@endsection