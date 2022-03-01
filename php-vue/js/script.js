console.log('Vue ok', Vue);

Vue.config.devtools = true; 

const app = new Vue({
  el: '#root',
  data: {
    disks: [],
  },
  mounted(){
    axios.get('http://localhost:8889/php-ajax-dischi/api/disks').then(res => {
      this.disks = res.data;
    }).catch(err => {console.log(err)})
  }
})