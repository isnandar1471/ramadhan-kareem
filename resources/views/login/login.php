<!DOCTYPE html>
<html lang="id">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<meta http-equiv="content-type" content="text/html; charset=UTF-8" />

	<title>My first BootstrapVue app</title>

	<!-- Required Stylesheets -->
	<link type="text/css" rel="stylesheet" href="https://unpkg.com/bootstrap@5.0.1/dist/css/bootstrap.min.css" />
	<link type="text/css" rel="stylesheet" href="https://unpkg.com/bootstrap-vue@2.21.2/dist/bootstrap-vue.css" />

	<!-- Load polyfills to support older browsers -->
	<script src="https://polyfill.io/v3/polyfill.min.js?features=es2015%2CIntersectionObserver"></script>

	<!-- Required scripts -->
	<script src="https://unpkg.com/vue@latest/dist/vue.js"></script>
	<script src="https://unpkg.com/bootstrap-vue@latest/dist/bootstrap-vue.js"></script>

	<script src="//unpkg.com/axios@latest/dist/axios.min.js"></script>
	<link rel="stylesheet" href="<?=URL::asset('assets/css/login/login.css');?>">
</head>

<body>
	<div id="app">
		<div class="card me-auto ms-auto mt-5 border" style="width: 18rem;">
			<img src="https://image.shutterstock.com/image-vector/lettering-ramadhan-600w-730762852.jpg"
				class="card-img-top" alt="...">
			<div class="card-body">
				<div class="h5 card-title d-flex justify-content-center">Log In</div>
				<div>
					<b-form @submit="onSubmit" @reset="onReset" v-if="show">
						<b-form-group id="input-group-1" label="Username" label-for="input-1">
							<b-form-input id="input-1" v-model="form.username" type="text"
								placeholder="Enter Your Username In Here" required>
							</b-form-input>
						</b-form-group>
						<b-form-group class="mb-2" id="input-group-2" label="Password" label-for="input-2">
							<b-form-input id="input-2" v-model="form.password" type="password"
								placeholder="Enter Your Password In Here" required>
							</b-form-input>
						</b-form-group>
						<div class="d-flex justify-content-between">
							<b-button type="reset" variant="outline-danger">Reset</b-button>
							<b-button type="submit" variant="outline-success">Submit</b-button>
						</div>
					</b-form>
					<b-alert 
						:show="showAlert"
						variant="danger"
					>
						Username atau password tidak ditemukan
					</b-alert>
				</div>
			</div>
		</div>

	</div>


	<!-- UNPKG JQuery Latest -->
	<script src="//unpkg.com/jquery@latest/dist/jquery.min.js"></script>

	<script src="<?=URL::asset('assets/js/login/login-vue.js');?>"></script>
	<script src="<?=URL::asset('assets/js/login/login-jquery.js');?>"></script>

</body>

</html>