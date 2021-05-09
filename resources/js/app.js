import './bootstrap'
import Vue from 'vue'
// swiperインポート
import VueAwesomeSwiper from 'vue-awesome-swiper'
// import style
import 'swiper/css/swiper.css'
Vue.use(VueAwesomeSwiper, /* { default options with global component } */)

// vueコンポーネント
import ExampleComponent from './components/ExampleComponent.vue'


const app = new Vue({
    el: '#app',
    components: {
      ExampleComponent,
      VueAwesomeSwiper,
    }
});
