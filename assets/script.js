new Vue({
    el: '#app',
    data: {
        arrayDisc: [],
    },
    created() {
        axios.get('http://localhost/php-ajax-dischi/api.php')
        .then(response => this.arrayDisc = response.data)
    },
})