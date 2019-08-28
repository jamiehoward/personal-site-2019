<!doctype html>
<html lang="en" class="text-gray-900 antialiased leading-tight">
<head>
	<title>{{config('app.name')}}</title>
	<link href="/css/main.css" rel="stylesheet" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body class="min-h-screen bg-gray-100">
	<div class="w-full text-center p-6 bg-yellow-300">
    <a href="https://howardadoption.bigcartel.com/product/the-polaris-away" target="_blank">
    	<strong>The Polaris-Away</strong>, an original kids book about the wonder of adoption, is now available for pre-order!</a>
    </div>
	
	<div class="container w-3/4 lg:2/3 mx-auto p-4">
		<div class="text-center lg:text-left">
			<div class="text-4xl inline jamie text-gray-800">Jamie Howard</div>
			<div class="text-md md:text-xl lg:inline lg:px-2 text-gray-600">
				Jesus-follower. Serial generalist.
			</div>
		</div>

		<div class="mb-4 text-center lg:text-left">
			<div class="inline-block text-blue-700 text-center pr-4 py-2">
				<a class="hover:text-blue-600" href="/">about</a>
			</div>

			<div class="inline-block text-blue-700 text-center pr-4 py-2">
				<a class="hover:text-blue-600" href="/blog">blog</a>
			</div>

			<div class="inline-block text-blue-700 text-center pr-4 py-2">
				<a class="hover:text-blue-600" href="/code">code</a>
			</div>

			<div class="inline-block text-blue-700 text-center pr-4 py-2">
				<a class="hover:text-blue-600" href="/design">design</a>
			</div>
		</div>

		@yield('content')

		<footer class="md:flex mt-10 border-t border-solid border-gray-500 w-full pt-4">
			<div class="text-gray-500 text-sm text-center md:text-left md:w-1/2 mb-3">
				Copyright Jamie Howard &copy;{{date('Y')}}
			</div>

			<div class="md:w-1/2 text-center md:text-right">
				<a class=""  href="https://dribbble.com/JamieHoward" target="_blank">
					<svg class="fill-current mr-2 w-5 h-5 inline-block" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
						<path d="M0,10 C0,8.18666 0.44668,6.51334 1.34,4.98 C2.23334,3.44666 3.44668,2.23334 4.98,1.34 C6.51334,0.44666 8.18668,0 10,0 C11.81334,0 13.48668,0.44666 15.02,1.34 C16.55334,2.23334 17.76668,3.44666 18.66,4.98 C19.55334,6.51334 20,8.18666 20,10 C20,11.81334 19.55334,13.48666 18.66,15.02 C17.76668,16.55334 16.55334,17.76666 15.02,18.66 C13.48668,19.55334 11.81334,20 10,20 C8.18668,20 6.51334,19.55334 4.98,18.66 C3.44668,17.76666 2.23334,16.55334 1.34,15.02 C0.44668,13.48666 0,11.81334 0,10 L0,10 Z M1.66,10 C1.66,12.08 2.36,13.91334 3.76,15.5 C4.4,14.24666 5.41334,13.05334 6.8,11.92 C8.18668,10.78666 9.54,10.07334 10.86,9.78 C10.66,9.31334 10.46668,8.89334 10.28,8.52 C7.98668,9.25334 5.50668,9.62 2.84,9.62 C2.32,9.62 1.93334,9.61334 1.68,9.6 C1.68,9.65334 1.67668,9.72 1.67,9.8 C1.66334,9.88 1.66,9.94666 1.66,10 L1.66,10 Z M1.92,7.94 C2.21334,7.96666 2.64668,7.98 3.22,7.98 C5.44668,7.98 7.56,7.68 9.56,7.08 C8.54668,5.28 7.43334,3.78 6.22,2.58 C5.16668,3.11334 4.26334,3.85334 3.51,4.8 C2.75668,5.74666 2.22668,6.79334 1.92,7.94 L1.92,7.94 Z M4.9,16.58 C6.40668,17.75334 8.10668,18.34 10,18.34 C10.98668,18.34 11.96668,18.15334 12.94,17.78 C12.67334,15.5 12.15334,13.29334 11.38,11.16 C10.15334,11.42666 8.91668,12.1 7.67,13.18 C6.42334,14.26 5.5,15.39334 4.9,16.58 L4.9,16.58 Z M7.96,1.94 C9.13334,3.15334 10.22,4.66666 11.22,6.48 C13.03334,5.72 14.4,4.75334 15.32,3.58 C13.77334,2.3 12,1.66 10,1.66 C9.32,1.66 8.64,1.75334 7.96,1.94 L7.96,1.94 Z M11.94,7.9 C12.14,8.32666 12.36668,8.86666 12.62,9.52 C13.60668,9.42666 14.68,9.38 15.84,9.38 C16.66668,9.38 17.48668,9.4 18.3,9.44 C18.19334,7.62666 17.54,6.01334 16.34,4.6 C15.47334,5.89334 14.00668,6.99334 11.94,7.9 L11.94,7.9 Z M13.12,10.92 C13.8,12.89334 14.26,14.92 14.5,17 C15.55334,16.32 16.41334,15.44666 17.08,14.38 C17.74668,13.31334 18.14668,12.16 18.28,10.92 C17.30668,10.85334 16.42,10.82 15.62,10.82 C14.88668,10.82 14.05334,10.85334 13.12,10.92 L13.12,10.92 Z" id="Shape"></path>
					</svg>
				</a>

				<a style="position:relative; top:2px; left:3px" href="https://github.com/jamiehoward" target="_blank">
					<svg class="fill-current mr-2 w-6 h-6 inline-block" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
						<path fill-rule="evenodd" d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.013 8.013 0 0 0 16 8c0-4.42-3.58-8-8-8z"></path>
					</svg>
				</a>

				<a class=""  href="https://instagram.com/jamiehowarddraws" target="_blank">
					<svg class="fill-current mr-2 w-5 h-5 inline-block" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 503.97 504"><title>instagram-logo</title><g id="VYHffa.tif"><path d="M683,616.56H566.88c-2.53-.13-5.06-.35-7.6-.39-18.15-.31-36.3-.69-54.38-2.45a173.93,173.93,0,0,1-38.85-8.22q-44.1-14.85-69-54.15c-11.91-18.85-17.9-39.83-20.76-61.79A333.33,333.33,0,0,1,374,456.3c-.52-17.74-1-35.49-1.07-53.24-.11-30.47.07-60.94.25-91.41.07-12,.35-24,.73-36,.38-11.82.84-23.65,2.31-35.41a166.91,166.91,0,0,1,9.72-40c12.64-32.52,34.73-56.32,66.3-71.16,19.66-9.24,40.64-13.35,62.19-14.56,15.09-.85,30.21-1.12,45.31-1.67a11.68,11.68,0,0,0,1.82-.35H688.32a9,9,0,0,0,1.58.35c8.47.23,17,.34,25.41.67,11.27.45,22.53.85,33.73,2.25a169.46,169.46,0,0,1,38.85,9.25c32.49,12.2,56.46,33.9,71.67,65.06,9.94,20.35,14.16,42.19,15.43,64.64.59,10.37.75,20.77,1.13,31.16a20.33,20.33,0,0,0,.36,2.3V440.88c-.13,1.09-.34,2.17-.39,3.26-.51,11.82-.83,23.65-1.53,35.46a166.2,166.2,0,0,1-5.35,32.84c-4.16,15.63-10.18,30.47-19.53,43.78Q823.3,593.77,779.29,607c-16.89,5.11-34.2,7.33-51.74,8-14.22.56-28.45.82-42.67,1.23A11.62,11.62,0,0,0,683,616.56ZM625,158.24V158c-23.75.18-47.51.24-71.26.58-16,.23-32,.57-47.9,2.5A115.74,115.74,0,0,0,474.61,169q-32.22,13.54-45.51,45.91a112.8,112.8,0,0,0-8,34.18c-1,12.51-1.6,25.06-2,37.61-.41,14.38-.53,28.79-.5,43.18.09,45.75-.86,91.51,1.41,137.24a172,172,0,0,0,3.86,30.41c2.59,11.13,6.38,21.82,12.78,31.36a83.74,83.74,0,0,0,45.11,34,147.75,147.75,0,0,0,38.42,6.56c14.77.7,29.57,1.39,44.36,1.42q67.43.13,134.85-.31a387.74,387.74,0,0,0,44.54-2.4,115.82,115.82,0,0,0,32.39-8.37q30.8-13.37,44-44.28a113.68,113.68,0,0,0,8.54-35.28q1.44-17.21,1.9-34.49c.44-17,.55-34.07.62-51.1.08-23.76,0-47.52,0-71.28,0-22.79-.39-45.58-1.91-68.34a138.14,138.14,0,0,0-4.85-29c-3.16-11-7.61-21.37-14.71-30.48a84.89,84.89,0,0,0-43.2-29.63,149.66,149.66,0,0,0-36.82-6.07c-15-.7-30-1.26-45.07-1.44C664.88,158.06,645,158.24,625,158.24Z" transform="translate(-372.51 -112.56)"/><path d="M561.6,112.56a11.68,11.68,0,0,1-1.82.35c-15.1.55-30.22.82-45.31,1.67-21.55,1.21-42.53,5.32-62.19,14.56C420.71,144,398.62,167.78,386,200.3a166.91,166.91,0,0,0-9.72,40c-1.47,11.76-1.93,23.59-2.31,35.41-.38,12-.66,24-.73,36-.18,30.47-.36,60.94-.25,91.41.06,17.75.55,35.5,1.07,53.24a333.33,333.33,0,0,0,2.29,33.26c2.86,22,8.85,42.94,20.76,61.79q24.8,39.23,69,54.15a173.93,173.93,0,0,0,38.85,8.22c18.08,1.76,36.23,2.14,54.38,2.45,2.54,0,5.07.26,7.6.39H372.51v-504Z" transform="translate(-372.51 -112.56)" style="fill:#fff"/><path d="M683,616.56a11.62,11.62,0,0,1,1.84-.32c14.22-.41,28.45-.67,42.67-1.23,17.54-.69,34.85-2.91,51.74-8q44-13.29,70.39-50.77c9.35-13.31,15.37-28.15,19.53-43.78a166.2,166.2,0,0,0,5.35-32.84c.7-11.81,1-23.64,1.53-35.46,0-1.09.26-2.17.39-3.26V616.56Z" transform="translate(-372.51 -112.56)" style="fill:#fff"/><path d="M876.48,288.24a20.33,20.33,0,0,1-.36-2.3c-.38-10.39-.54-20.79-1.13-31.16-1.27-22.45-5.49-44.29-15.43-64.64-15.21-31.16-39.18-52.86-71.67-65.06A169.46,169.46,0,0,0,749,115.83c-11.2-1.4-22.46-1.8-33.73-2.25-8.46-.33-16.94-.44-25.41-.67a9,9,0,0,1-1.58-.35H876.48Z" transform="translate(-372.51 -112.56)" style="fill:#fff"/><path d="M625,158.24c19.92,0,39.84-.18,59.76.06,15,.18,30.06.74,45.07,1.44a149.66,149.66,0,0,1,36.82,6.07,84.89,84.89,0,0,1,43.2,29.63c7.1,9.11,11.55,19.49,14.71,30.48a138.14,138.14,0,0,1,4.85,29c1.52,22.76,1.9,45.55,1.91,68.34,0,23.76.1,47.52,0,71.28-.07,17-.18,34.07-.62,51.1q-.43,17.26-1.9,34.49a113.68,113.68,0,0,1-8.54,35.28q-13.19,30.88-44,44.28a115.82,115.82,0,0,1-32.39,8.37,387.74,387.74,0,0,1-44.54,2.4q-67.43.4-134.85.31c-14.79,0-29.59-.72-44.36-1.42a147.75,147.75,0,0,1-38.42-6.56,83.74,83.74,0,0,1-45.11-34c-6.4-9.54-10.19-20.23-12.78-31.36A172,172,0,0,1,420,467.1c-2.27-45.73-1.32-91.49-1.41-137.24,0-14.39.09-28.8.5-43.18.37-12.55,1-25.1,2-37.61a112.8,112.8,0,0,1,8-34.18q13.27-32.34,45.51-45.91A115.74,115.74,0,0,1,505.88,161c15.91-1.93,31.91-2.27,47.9-2.5,23.75-.34,47.51-.4,71.26-.58ZM754.32,364.72A129.37,129.37,0,1,0,624.44,493.93,129.34,129.34,0,0,0,754.32,364.72Zm35.32-134.58a30.24,30.24,0,1,0-30.2,30.22A30.11,30.11,0,0,0,789.64,230.14Z" transform="translate(-372.51 -112.56)" style="fill:#fff"/><path d="M754.32,364.72a129.37,129.37,0,1,1-128.6-129.53A129.34,129.34,0,0,1,754.32,364.72Zm-45.4-.2a84,84,0,1,0-84,84A84.09,84.09,0,0,0,708.92,364.52Z" transform="translate(-372.51 -112.56)"/><path d="M789.64,230.14a30.24,30.24,0,1,1-30.13-30.26A30.17,30.17,0,0,1,789.64,230.14Z" transform="translate(-372.51 -112.56)"/><path d="M708.92,364.52A84,84,0,1,1,625.1,280.6,84.09,84.09,0,0,1,708.92,364.52Z" transform="translate(-372.51 -112.56)" style="fill:#fff"/></g></svg>
				</a>

				<a class="ml-1" href="https://twitter.com/JamieHoward" target="_blank">
					<svg class="fill-current mr-2 w-5 h-5 inline-block" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
						<path d="M19.9554745,3.91978102 C19.2212409,4.24540146 18.4321898,4.46547445 17.6040146,4.56445255 C18.4493431,4.05773723 19.0984672,3.25540146 19.4041606,2.29941606 C18.6131387,2.76854015 17.7369343,3.10927007 16.8043796,3.29291971 C16.0575182,2.49722628 14.9935036,2 13.8159854,2 C11.5548905,2 9.72175182,3.83306569 9.72175182,6.0940146 C9.72175182,6.41489051 9.7580292,6.72737226 9.82781022,7.0270073 C6.42518248,6.85627737 3.40846715,5.22635036 1.38919708,2.74941606 C1.03678832,3.35408759 0.834890511,4.05737226 0.834890511,4.80766423 C0.834890511,6.2280292 1.55773723,7.48116788 2.65627737,8.21532847 C1.98510949,8.19408759 1.35386861,8.00992701 0.801824818,7.70328467 C0.801532847,7.72036496 0.801532847,7.73751825 0.801532847,7.75474453 C0.801532847,9.73839416 2.21277372,11.3931387 4.08569343,11.7691971 C3.74211679,11.8627737 3.38043796,11.9127737 3.0070073,11.9127737 C2.74321168,11.9127737 2.48671533,11.8871533 2.23678832,11.8393431 C2.75773723,13.4659124 4.26970803,14.649562 6.06124088,14.6826277 C4.66007299,15.7806569 2.89474453,16.4351825 0.976642336,16.4351825 C0.64620438,16.4351825 0.320291971,16.4158394 0,16.3780292 C1.81182482,17.539635 3.96386861,18.2173723 6.27591241,18.2173723 C13.8064234,18.2173723 17.9243796,11.9789051 17.9243796,6.56875912 C17.9243796,6.39124088 17.920438,6.21467153 17.9125547,6.03912409 C18.7124088,5.46189781 19.4065693,4.74080292 19.9554745,3.91978102" id="Fill-1"></path>
					</svg>
				</a>
			</div>
		</footer>
	</div>
	<script src="/js/app.js"></script>

	@yield('scripts')
</body>
</html>