var app = new Vue({

	el: "#wrapper",
	data: {
		baseUrl: "api/",
		data: {
			artikel: [],
			kegiatan: [],
			kuliner: []
		},
		temp: [],
		requestResponse: [],
		Alert: {
			post: false,
			patch: false,
			delete: false,
			TIMEOUT: 10000
		},
	},
	methods: {
		emptyInputModal: function () {
			this.temp = []
		},
		getByCollection: function (collection) {
			axios.get(this.baseUrl + collection).then(response => this.data[collection] = response.data)
		},
		getByCollectionAndItem: function (collection, item) {
			this.temp = []
			this.temp = this.data[collection][item]
		},
		postByCollection: function (collection) {
			axios.post(this.baseUrl + collection, {
				// langsung semua key artikel, kegiatan, kuliner digabungkan, karena tidak masalah
				isi: this.temp.isi,
				url: this.temp.url,
				judul: this.temp.judul,
				penulis: this.temp.penulis,
				urlFoto: this.temp.urlFoto,
				urlFotoAlt: this.temp.urlFotoAlt,
				nama: this.temp.nama,
			}).then(response => this.requestResponse = response)
			this.temp = []
			this.alert('post')
		},
		patchByCollectionAndId: function (collection, id) {
			axios.patch(this.baseUrl + collection + '/' + id, {
				// langsung semua key artikel, kegiatan, kuliner digabungkan, karena tidak masalah 
				judul: this.temp.judul,
				penulis: this.temp.penulis,
				isi: this.temp.isi,
				urlFoto: this.temp.urlFoto,
				urlFotoAlt: this.temp.urlFotoAlt,
				url: this.temp.url,
				nama: this.temp.nama,
			}).then(response => this.requestResponse = response)
			this.temp = []
			this.alert('patch')
		},
		deleteByCollectionAndId: function (collection, id) {
			this.requestResponse = [];
			axios.delete(this.baseUrl + collection + '/' + id).then(response => this.requestResponse = response)
			this.alert('delete')
		},
		alert: function (request) {
			this.Alert[request] = true
			setTimeout(() => { this.Alert[request] = false }, this.Alert.TIMEOUT);
		},
		// cek_refreshtoken: function () {
		// 	axios.post(this.baseUrl + 'refresh_token', {
		// 		last_token: localStorage.getItem('token_app'),
		// 		last_username: localStorage.getItem('username')
		// 	}).then(function (response) {
		// 		// simpant token baru ke localstorage
		// 		localStorage.setItem("token_app", response.data.token);
		// 	}).catch(function (error) {
		// 		console.log(error);
		// 	});
		// },
		logout: function () {
			localStorage.setItem("token_app", "");
			localStorage.setItem("username", "");
			window.location.href = 'login';
		}
	},
	mounted() {
		// ====== Cek apakah halaman boleh diakses
		console.log(localStorage.getItem('token_app'));
		if (localStorage.getItem('token_app')) {
			// axios.post('http://127.0.0.1:8000/api/cek_page', {
			axios.post('/api/cek_page', {
				old_token: localStorage.getItem('token_app')
			}).then(function (response) {
				console.log(response.data)
				if (response.data.message != 'ok') {
					// window.location.href = 'http://127.0.0.1:8000/login';
					window.location.href = '/login';
				}
			})
		} else {
			// window.location.href = 'http://127.0.0.1:8000/login';
			window.location.href = '/login';
		}

		this.getByCollection('artikel')
		this.getByCollection('kegiatan')
		this.getByCollection('kuliner')


		setInterval(() => {
			this.getByCollection('artikel')
			this.getByCollection('kegiatan')
			this.getByCollection('kuliner')
		}, 7500)
	}
})