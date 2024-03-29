<!DOCTYPE html>
<html lang="id">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Admin</title>

	<!--! Bootstrap CSS -->
	<link type="text/css" rel="stylesheet" href="//unpkg.com/bootstrap@5.0.1/dist/css/bootstrap.min.css" />
	<!--! BootstrapVue CSS -->
	<link type="text/css" rel="stylesheet" href="//unpkg.com/bootstrap-vue@2.21.2/dist/bootstrap-vue.min.css" />
	<!--! polyfills to support older browsers -->
	<script src="//polyfill.io/v3/polyfill.min.js?features=es2015%2CIntersectionObserver"
		crossorigin="anonymous"></script>
	<!--! Vue Js -->
	<script src="//unpkg.com/vue@latest/dist/vue.min.js"></script>
	<!--! BootstrapVue Js -->
	<script src="//unpkg.com/bootstrap-vue@latest/dist/bootstrap-vue.min.js"></script>
	<!--! BootstrapVueIcons Js -->
	<script src="//unpkg.com/bootstrap-vue@latest/dist/bootstrap-vue-icons.min.js"></script>
	<!--! Axios Js -->
	<script src="https://unpkg.com/axios/dist/axios.min.js"></script>

	<link rel="stylesheet" href="<?=URL::asset('assets/css/admin/admin.css');?>">

</head>

<body>

	<div class="d-flex" id="wrapper">

		<!-- Sidebar -->
		<div class="bg-light border" id="sidebar-wrapper">
			<div class="sidebar-heading">Ramadhan Kareem </div>
			<div class="list-group list-group-flush">
				<button class="list-group-item list-group-item-action btn-outline-success active">Dashboard</button>
				<button class="list-group-item list-group-item-action btn-outline-success">Artikel</button>
				<button class="list-group-item list-group-item-action btn-outline-success">Kegiatan</button>
				<button class="list-group-item list-group-item-action btn-outline-success">Kuliner</button>
			</div>
		</div>
		<!-- /#sidebar-wrapper -->

		<!-- Page Content -->
		<div id="page-content-wrapper">

			<!-- <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
				<button class="btn btn-outline-success active" id="menu-toggle">Menu</button>
				<a class="navbar-brand ml-lg-3" href="#">Ramadhan Kareem</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse"
					data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
					aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse me-2" id="navbarSupportedContent">
					<ul class="navbar-nav me-2 ml-auto mt-2 mt-lg-0">
						<li class="nav-item">
							<a class="nav-link" href="#">Log Out</a>
						</li>
					</ul>
				</div>
			</nav> -->
			<nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
				<div class="container-fluid">
					<button class="btn btn-outline-success active mx-2" id="menu-toggle">Menu</button>
					<a class="navbar-brand" href="#">Navbar</a>
					<!-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button> -->
					<button class="navbar-toggler" type="button" data-toggle="collapse"
						data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
						aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="navbarTogglerDemo02">
						<ul class="me-auto">
							<!-- <li class="nav-item">
								<a class="nav-link active" aria-current="page" href="#">Home</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#">Link</a>
							</li>
							<li class="nav-item">
								<a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
							</li> -->
						</ul>
						<ul class="d-flex navbar-nav">
							<li class="nav-item">
								<!-- <a class="nav-link" href="#">Link</a> -->
								<button v-on:click="logout()" class="btn btn-outline-secondary" type="button">Log Out</button>
							</li>
							<!-- <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"> -->
						</ul>
					</div>
				</div>
			</nav>

			<div class="container-fluid m-4">
				<div class="fs-5">
					<b-alert dismissible v-model="Alert.post" variant="primary">
						<p>Data Berhasil Diinput</p>
					</b-alert>
					<b-alert dismissible v-model="Alert.patch" variant="success">
						<p>Data Berhasil Diedit</p>
					</b-alert>
					<b-alert dismissible v-model="Alert.delete" variant="warning">
						<p>Data Berhasil Dihapus</p>
					</b-alert>
				</div>
				<div>
					<section id="Dashboard">
						<h1 class="my-4">Dashboard</h1>
						<div class="row">
							<div class="col-xl-4 col-md-5 col-xs-10 card mx-auto" style="max-width: 540px;">
								<div class="row bg-light text-dark">
									<div class="col-md-4 text-center align-self-center">
										<b-icon icon="newspaper" font-scale="6"></b-icon>
									</div>
									<div class="col-md-8">
										<div class="card-body">
											<h5 class="card-title">ARTIKEL</h5>
											<b class="card-text">{{data.artikel.length}} Items</b>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-4 col-md-5 col-xs-10 card mx-auto" style="max-width: 540px;">
								<div class="row bg-light text-dark">
									<div class="col-md-4 text-center align-self-center">
										<b-icon icon="calendar3" font-scale="6"></b-icon>
									</div>
									<div class="col-md-8">
										<div class="card-body">
											<h5 class="card-title">KEGIATAN</h5>
											<b class="card-text">{{data.kegiatan.length}} Items</b>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-4 col-md-5 col-xs-10 card mx-auto" style="max-width: 540px;">
								<div class="row bg-light text-dark">
									<div class="col-md-4 text-center align-self-center">
										<b-icon icon="cart-check" font-scale="6">
											</b-icon-newspaper>
									</div>
									<div class="col-md-8">
										<div class="card-body">
											<h5 class="card-title">KULINER</h5>
											<b class="card-text">{{data.kuliner.length}} Items</b>
										</div>
									</div>
								</div>
							</div>
						</div>
					</section>
					<section id="Artikel" class="d-none">
						<h1 class="my-4">Daftar Artikel</h1>
						<button v-on:click="emptyInputModal()" type="button" class="btn btn-success btn-insert-artikel"
							data-toggle="modal" data-target="#modal-artikel">Insert Artikel</button>
						<div class="table-responsive">
							<table class="table table-striped table-borderless">
								<thead class="thead-dark">
									<tr>
										<th scope="col">#</th>
										<th scope="col">Judul</th>
										<th scope="col">Penulis</th>
										<th scope="col">Isi</th>
										<th scope="col">Url</th>
										<th scope="col" class='text-center'>Aksi</th>
									</tr>
								</thead>
								<tbody>
									<tr v-for="(artikel, item) in data.artikel">
										<th scope="row">{{ item + 1 }}</th>
										<td>{{ artikel.judul }}</td>
										<td>{{ artikel.penulis}}</td>
										<td>{{ artikel.isi}}</td>
										<td>{{ artikel.url}}</td>
										<td class='text-center align-middle'>
											<button v-on:click="getByCollectionAndItem('artikel', item)" type="button"
												class="btn btn-warning btn-edit-artikel" data-toggle="modal"
												data-target="#modal-artikel">Edit</button>
											<button v-on:click="getByCollectionAndItem('artikel', item)" type="button"
												class="btn btn-danger btn-delete-artikel" data-toggle="modal"
												data-target="#modal-artikel">Delete</button>
										</td>
									</tr>
								</tbody>
							</table>
						</div>
					</section>
					<section id="Kegiatan" class="d-none">
						<h1 class="my-4">Datar Kegiatan</h1>
						<button v-on:click="emptyInputModal()" type="button" class="btn btn-success btn-insert-kegiatan"
							data-toggle="modal" data-target="#modal-kegiatan">Insert Kegiatan</button>
						<div class="table-responsive">
							<table class="table table-striped table-borderless">
								<thead class="thead-dark">
									<tr>
										<th scope="col">#</th>
										<th scope="col">Judul</th>
										<th scope="col">Url Foto</th>
										<th scope="col">Alternatif Url Foto</th>
										<th scope="col">Isi</th>
										<th scope="col">Url</th>
										<th scope="col" class='text-center'>Aksi</th>
									</tr>
								</thead>
								<tbody>
									<tr v-for="(kegiatan, item) in data.kegiatan">
										<th scope="row">{{ item + 1 }}</th>
										<td>{{ kegiatan.judul }}</td>
										<td>{{ kegiatan.urlFoto }}</td>
										<td>{{ kegiatan.urlFotoAlt }}</td>
										<td>{{ kegiatan.isi }}</td>
										<td>{{ kegiatan.url }}</td>
										<td class='text-center align-middle'>
											<button v-on:click="getByCollectionAndItem('kegiatan', item)" type="button"
												class="btn btn-warning btn-edit-kegiatan" data-toggle="modal"
												data-target="#modal-kegiatan">Edit</button>
											<button v-on:click="getByCollectionAndItem('kegiatan', item)" type="button"
												class="btn btn-danger btn-delete-kegiatan" data-toggle="modal"
												data-target="#modal-kegiatan">Delete</button>
										</td>
									</tr>
								</tbody>
							</table>
						</div>
					</section>
					<section id="Kuliner" class="d-none">
						<h1 class="my-4">Daftar Kuliner</h1>
						<button v-on:click="emptyInputModal()" type="button" class="btn btn-success btn-insert-kuliner"
							data-toggle="modal" data-target="#modal-kuliner">Insert Kuliner</button>
						<div class="table-responsive">
							<table class="table table-striped table-borderless">
								<thead class="thead-dark">
									<tr>
										<th scope="col">#</th>
										<th scope="col">Nama</th>
										<th scope="col">Url Foto</th>
										<th scope="col">Alternatif Url Foto</th>
										<th scope="col">Isi</th>
										<th scope="col">Url</th>
										<th scope="col" class='text-center'>Aksi</th>
									</tr>
								</thead>
								<tbody>
									<tr v-for="(kuliner, item) in data.kuliner">
										<th scope="row">{{ item + 1 }}</th>
										<td>{{ kuliner.nama }}</td>
										<td>{{ kuliner.urlFoto }}</td>
										<td>{{ kuliner.urlFotoAlt }}</td>
										<td>{{ kuliner.isi }}</td>
										<td>{{ kuliner.url }}</td>
										<td class='text-center align-middle'>
											<button v-on:click="getByCollectionAndItem('kuliner', item)" type="button"
												class="btn btn-warning btn-edit-kuliner" data-toggle="modal"
												data-target="#modal-kuliner">Edit</button>
											<button v-on:click="getByCollectionAndItem('kuliner', item)" type="button"
												class="btn btn-danger btn-delete-kuliner" data-toggle="modal"
												data-target="#modal-kuliner">Delete</button>
										</td>
									</tr>
								</tbody>
							</table>
						</div>
					</section>
				</div>
				<div id="tempatModal">
					<div class="modal fade" id="modal-artikel" tabindex="-1">
						<div class="modal-dialog">
							<form class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title" id="modal-artikel-title"></h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
											aria-hidden="true">&times;</span></button>
								</div>
								<div class="modal-body">
									<div class="form-group">
										<label for="input-artikel-judul">Judul</label>
										<input v-model="temp.judul" type="text" class="form-control input-artikel"
											id="input-artikel-judul">
									</div>
									<div class="form-group">
										<label for="input-artikel-penulis">Penulis</label>
										<input v-model="temp.penulis" type="text" class="form-control input-artikel"
											id="input-artikel-penulis">
									</div>
									<div class="form-group">
										<label for="input-artikel-isi">Isi</label>
										<input v-model="temp.isi" type="text" class="form-control input-artikel"
											id="input-artikel-isi">
									</div>
									<div class="form-group">
										<label for="input-artikel-url">URL</label>
										<input v-model="temp.url" type="text" class="form-control input-artikel"
											id="input-artikel-url">
									</div>
								</div>
								<div class="modal-footer">
									<button v-on:click="postByCollection('artikel')" type="button"
										id="btn-modal-artikel-insert" class="btn btn-success">Insert</button>
									<button v-on:click="patchByCollectionAndId('artikel', temp.id)" type="button"
										id="btn-modal-artikel-edit" class="btn btn-warning">Edit</button>
									<button v-on:click="deleteByCollectionAndId('artikel', temp.id)" type="button"
										id="btn-modal-artikel-delete" class="btn btn-danger">Delete</button>
								</div>
							</form>
						</div>
					</div>
					<div class="modal fade" id="modal-kegiatan" tabindex="-1">
						<div class="modal-dialog">
							<form class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title" id="modal-kegiatan-title"></h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
											aria-hidden="true">&times;</span></button>
								</div>
								<div class="modal-body">
									<div class="form-group">
										<label for="input-kegiatan-judul">Judul</label>
										<input v-model="temp.judul" type="text" class="form-control input-kegiatan"
											id="input-kegiatan-judul">
									</div>
									<div class="form-group">
										<label for="input-kegiatan-urlFoto">URL Foto</label>
										<input v-model="temp.urlFoto" type="text" class="form-control input-kegiatan"
											id="input-kegiatan-urlFoto">
									</div>
									<div class="form-group">
										<label for="input-kegiatan-urlFotoAlt">Alternatif Foto</label>
										<input v-model="temp.urlFotoAlt" type="text" class="form-control input-kegiatan"
											id="input-kegiatan-urlFotoAlt">
									</div>
									<div class="form-group">
										<label for="input-kegiatan-isi">Isi</label>
										<input v-model="temp.isi" type="text" class="form-control input-kegiatan"
											id="input-kegiatan-isi">
									</div>
									<div class="form-group">
										<label for="input-kegiatan-url">URL</label>
										<input v-model="temp.url" type="text" class="form-control input-kegiatan"
											id="input-kegiatan-url">
									</div>
								</div>
								<div class="modal-footer">
									<button v-on:click="postByCollection('kegiatan')" type="button"
										id="btn-modal-kegiatan-insert" class="btn btn-success">Insert</button>
									<button v-on:click="patchByCollectionAndId('kegiatan', temp.id)" type="button"
										id="btn-modal-kegiatan-edit" class="btn btn-warning">Edit</button>
									<button v-on:click="deleteByCollectionAndId('kegiatan', temp.id)" type="button"
										id="btn-modal-kegiatan-delete" class="btn btn-danger">Delete</button>
								</div>
							</form>
						</div>
					</div>
					<div class="modal fade" id="modal-kuliner" tabindex="-1">
						<div class="modal-dialog">
							<form class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title" id="modal-kuliner-title"></h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
											aria-hidden="true">&times;</span></button>
								</div>
								<div class="modal-body">
									<div class="form-group">
										<label for="input-kuliner-nama">Nama</label>
										<input v-model="temp.nama" type="text" class="form-control input-kuliner"
											id="input-kuliner-nama">
									</div>
									<div class="form-group">
										<label for="input-kuliner-urlFoto">URL Foto</label>
										<input v-model="temp.urlFoto" type="text" class="form-control input-kuliner"
											id="input-kuliner-urlFoto">
									</div>
									<div class="form-group">
										<label for="input-kuliner-urlFotoAlt">Alternatif Foto</label>
										<input v-model="temp.urlFotoAlt" type="text" class="form-control input-kuliner"
											id="input-kuliner-urlFotoAlt">
									</div>
									<div class="form-group">
										<label for="input-kuliner-isi">Isi</label>
										<input v-model="temp.isi" type="text" class="form-control input-kuliner"
											id="input-kuliner-isi">
									</div>
									<div class="form-group">
										<label for="input-kuliner-url">URL</label>
										<input v-model="temp.url" type="text" class="form-control input-kuliner"
											id="input-kuliner-url">
									</div>
								</div>
								<div class="modal-footer">
									<button v-on:click="postByCollection('kuliner')" type="button"
										id="btn-modal-kuliner-insert" class="btn btn-success">Insert</button>
									<button v-on:click="patchByCollectionAndId('kuliner', temp.id)" type="button"
										id="btn-modal-kuliner-edit" class="btn btn-warning">Edit</button>
									<button v-on:click="deleteByCollectionAndId('kuliner', temp.id)" type="button"
										id="btn-modal-kuliner-delete" class="btn btn-danger">Delete</button>
								</div>
							</form>
						</div>
					</div>

				</div>
			</div>

		</div>
		<!-- /#page-content-wrapper -->
	</div>
	<!-- /#wrapper -->

	<!--! JQuery Js -->
	<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
	<!--! Bootstrap Js -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns"
		crossorigin="anonymous"></script>
	<script src="<?=URL::asset('assets/js/admin/admin-vue.js');?>"></script>
	<script src="<?=URL::asset('assets/js/admin/admin-jquery.js');?>"></script>

</body>

</html>