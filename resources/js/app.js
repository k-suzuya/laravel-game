import './bootstrap'
import Vue from 'vue'
// swiperインポート
import VueAwesomeSwiper from 'vue-awesome-swiper'
// import style
import 'swiper/css/swiper.css'
Vue.use(VueAwesomeSwiper, /* { default options with global component } */)

// vueコンポーネント
import SliderMenuComponent from './components/SliderMenuComponent.vue'


const app = new Vue({
    el: '#app',
    components: {
      SliderMenuComponent,
      VueAwesomeSwiper,
    }
});
