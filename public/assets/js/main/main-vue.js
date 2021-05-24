
var app = new Vue({
	el: "#app",
	data: {
		baseUrl: "api/",
		data: {
			artikel: [],
			kegiatan: [],
			kuliner: [],
			urlFotoGabungan: []
		},
	},
	methods: {
		getByCollection: function (collection) {
			axios.get(this.baseUrl + collection).then(response => this.data[collection] = response.data)
		},
		// ,shuffle: function(array) {
		// 	var currentIndex = array.length, temporaryValue, randomIndex;

		// 	// While there remain elements to shuffle...
		// 	while (0 !== currentIndex) {

		// 		// Pick a remaining element...
		// 		randomIndex = Math.floor(Math.random() * currentIndex);
		// 		currentIndex -= 1;

		// 		// And swap it with the current element.
		// 		temporaryValue = array[currentIndex];
		// 		array[currentIndex] = array[randomIndex];
		// 		array[randomIndex] = temporaryValue;
		// 	}

		// 	return array;
		// }
	},
	mounted() {

		setInterval(() => {
			this.getByCollection('artikel')
			this.getByCollection('kuliner')
			this.getByCollection('kegiatan')

			this.data['urlFotoGabungan'] = []
			var keg = this.data['kegiatan']
			var kul = this.data['kuliner']
			for (let i = 0; i < keg.length; i++) {
				const el = keg[i];
				this.data['urlFotoGabungan'].push(el.urlFoto)
			}
			for (let i = 0; i < kul.length; i++) {
				const el = kul[i];
				this.data['urlFotoGabungan'].push(el.urlFoto)
			}
		}, 7500)

	}

})