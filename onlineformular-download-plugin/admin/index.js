var app = new Vue({
  el: '#app',
  data: {
    message: 'Wird geladen',
    posts: JSON.parse(document.getElementById('php_data').innerHTML)
  }
})