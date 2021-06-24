window.app = new Vue({
	el: '#app',
	data: {
		form: {
			username: '',
			password: '',
		},
		show: true,
		showAlert: false
	},
	methods: {
		onSubmit(event) {
			event.preventDefault()
			// axios.post('http://127.0.0.1:8000/api/auth/login', {
			axios.post('/api/auth/login', {
				username: this.form.username,
				password: this.form.password
			}).then(function (response) {
				localStorage.setItem("token_app", response.data.token);
				localStorage.setItem("username", response.data.username);
				// window.location = 'http://127.0.0.1:8000/admin';
				window.location = '/admin';
			}).catch((error) => {
				this.showAlert = false;
				console.log(error);
			}
			);
		},
		onReset(event) {
			// event.preventDefault()
			showAlert = false;
			this.form.username = ''
			this.form.password = ''
		}
	},
	mounted() {

	}
})