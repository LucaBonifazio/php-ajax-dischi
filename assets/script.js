new Vue({
	el: '#app',
	data: {
		genres: [],
		albums: [],
		genre: 'all',
		urlAlbums: 'api/albums.php',
		// urlAlbums: location.href + 'api/albums.php',
		urlGenres: 'api/genres.php',
	},
	created() {
		axios.get(this.urlAlbums)
			.then(axiosResponse => this.albums = axiosResponse.data);
		axios.get(this.urlGenres)
			.then(axiosResponse => this.genres = axiosResponse.data);
	},
	methods: {
		getList() {
			axios.get(this.urlAlbums, {
				params: {
				  genre: this.genre
				}
			 })
				.then(axiosResponse => this.albums = axiosResponse.data)
		}
	}
})