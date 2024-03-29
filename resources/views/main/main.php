<!-- Bootstrap Vue Tamplate https://bootstrap-vue.org/docs/reference/starter-templates -->
<!DOCTYPE html>
<html lang="id">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<meta http-equiv="content-type" content="text/html; charset=UTF-8" />

	<title>UTS | Pemrograman Front End | Semester 4</title>

	<!-- Required Stylesheets -->
	<link type="text/css" rel="stylesheet" href="https://unpkg.com/bootstrap/dist/css/bootstrap.min.css" />
	<link type="text/css" rel="stylesheet" href="https://unpkg.com/bootstrap-vue@latest/dist/bootstrap-vue.css" />

	<!-- Load polyfills to support older browsers -->
	<script src="https://polyfill.io/v3/polyfill.min.js?features=es2015%2CIntersectionObserver"></script>

	<!-- Required scripts -->
	<script src="https://unpkg.com/vue@latest/dist/vue.js"></script>
	<script src="https://unpkg.com/bootstrap-vue@latest/dist/bootstrap-vue.js"></script>


	<!-- AXIOS -->
	<script src="https://unpkg.com/axios/dist/axios.min.js"></script>

	<link type="text/css" rel="stylesheet" href="<?=URL::asset('assets/css/main/main.css');?>" />

	<!-- GOOGLE FONT -->
	<link rel="preconnect" href="https://fonts.gstatic.com">

	<!-- font-family: 'Tangerine', cursive; -->
	<link href="https://fonts.googleapis.com/css2?family=Tangerine:wght@400;700&display=swap" rel="stylesheet">

</head>

<body>
	<b-container id="app" class="bg-light mt-1">
		<b-row align-h="center" align-v="center">
			<b-col xl="12" lg="12" md="12" sm="12" xs="12">
				<b-carousel id="carousel-1" :interval="4000" controls indicators background="#ababab"
					style="text-shadow: 1px 1px 2px #333;">
					<b-carousel-slide class="superFoto" v-for="urlFoto in data.urlFotoGabungan" :img-src="urlFoto">
						<h1 class="superTitle">Ramadhan Kareem</h1>
						<p>Meriahkan Bulan Suci Bersama Kami</p>
					</b-carousel-slide>
				</b-carousel>
			</b-col>
		</b-row>
		<b-row class="mx-auto">
			<b-col xl="8" lg="8" class="border-transparent">
				<b-card class="text-center bg-transparent">
					<b-row align-h="end" class="card-header bg-transparent">
						<ul class="nav nav-tabs card-header-tabs">
							<li class="nav-item">
								<a id="tombolArtikel" class="nav-link">Artikel Ramadhan</a>
							</li>
							<li class="nav-item">
								<a id="tombolKuliner" class="nav-link">Kuliner Ramadhan</a>
							</li>
							<li class="nav-item">
								<a id="tombolKegiatan" class="nav-link">Kegiatan Ramadhan</a>
							</li>
						</ul>
					</b-row>
					<div id="card-body" class="card-body text-left">
						<div id="isiArtikel">
							<b-card v-for="artikel in data.artikel" class="mb-2" :title="artikel.judul"
								:sub-title="artikel.penulis">
								<b-card-text> &emsp;
									{{artikel.isi}}
								</b-card-text>
								<div class="text-right"><a :href="artikel.url" target="_blank"
										class="card-link text-success">
										Baca Selengkapnya
									</a></div>
							</b-card>
						</div>
						<b-row id="isiKuliner">
							<b-card v-for="kuliner in data.kuliner" :title="kuliner.nama" :img-src="kuliner.urlFoto"
								:img-alt="kuliner.urlFotoAlt" img-top tag="article" style="max-width: 18rem;"
								class="my-2 mx-auto kuliner">
								<b-card-text> &emsp;
									{{kuliner.isi}}
								</b-card-text>
								<div class="text-right"><a :href="kuliner.url" target="_blank"
										class="card-link text-success">
										Baca Selengkapnya
									</a></div>
							</b-card>
						</b-row>
						<div id="isiKegiatan">
							<b-card v-for="kegiatan in data.kegiatan" :img-src="kegiatan.urlFoto"
								:img-alt="kegiatan.utlFotoAlt" img-left class="mb-3 kegiatan">
								<b-card-text style="height: 13em;">
									<h3>{{kegiatan.judul}}</h3> &emsp;
									{{kegiatan.isi}}
								</b-card-text>
								<div class="text-right"><a :href="kegiatan.url" target="_blank"
										class="card-link text-success">
										Baca Selengkapnya
									</a></div>
							</b-card>
						</div>
					</div>
				</b-card>
			</b-col>
			<b-col xl="4" lg="4" class="mt-4">
				<b-row align-h="center">
					<iframe id="googleCalender"
						src="https://calendar.google.com/calendar/embed?height=600&amp;wkst=1&amp;bgcolor=%23ffffff&amp;ctz=Asia%2FJakarta&amp;src=aXNuYW5kYXJfZl9wQHN0dWRlbnQudWIuYWMuaWQ&amp;src=YWRkcmVzc2Jvb2sjY29udGFjdHNAZ3JvdXAudi5jYWxlbmRhci5nb29nbGUuY29t&amp;src=Y19jbGFzc3Jvb202ZjU5ZGJmZUBncm91cC5jYWxlbmRhci5nb29nbGUuY29t&amp;src=aWQuaW5kb25lc2lhbiNob2xpZGF5QGdyb3VwLnYuY2FsZW5kYXIuZ29vZ2xlLmNvbQ&amp;src=Y19jbGFzc3Jvb21kYjkxNmRkMUBncm91cC5jYWxlbmRhci5nb29nbGUuY29t&amp;src=dWIuYWMuaWRfY2xhc3Nyb29tZGYzOTNmMTFAZ3JvdXAuY2FsZW5kYXIuZ29vZ2xlLmNvbQ&amp;color=%23039BE5&amp;color=%2333B679&amp;color=%230047a8&amp;color=%230B8043&amp;color=%23202124&amp;color=%230047a8"
						height="600" width="350" frameborder="0" scrolling="no"></iframe>
				</b-row>
			</b-col>
		</b-row>
		<b-row>
			<b-col class="mt-5 text-center">
				<footer>
					<p>&copy; <a href="mailto:isnandar_f_p@student.ub.ac.id" class="text-success">Isnandar Fajar
							Pangestu</a></p>
				</footer>
			</b-col>
		</b-row>
	</b-container>

	<script src="https://code.jquery.com/jquery-3.6.0.min.js" crossorigin="anonymous"></script>
	<script src="<?=URL::asset('assets/js/main/main-jquery.js')?>"></script>
	<script src="<?=URL::asset('assets/js/main/main-vue.js')?>"></script>

</body>

</html>