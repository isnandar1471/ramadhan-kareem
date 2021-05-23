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
			axios.post('http://localhost:5000/login_auth', {
				username: this.form.username,
				password: this.form.password
			}).then(function (response) {
				localStorage.setItem("token_app", response.data.token);
				localStorage.setItem("username", response.data.username);
				window.location.href = 'http://localhost:5000/admin';
			}).catch(this.showAlert = true);
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