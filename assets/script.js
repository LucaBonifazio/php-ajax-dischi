new Vue({
	el: '#app',
	data: {
		albums: [],
		urlApi: location.href + 'api.php',
	},
	created() {
		axios.get(this.urlApi)
			.then(axiosResponse => {
				console.log(axiosResponse);
				this.albums = axiosResponse.data
			});
	}
})