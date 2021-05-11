import './bootstrap'
import Vue from 'vue'
// swiperインポート
import VueAwesomeSwiper from 'vue-awesome-swiper'
// import style
import 'swiper/css/swiper.css'
Vue.use(VueAwesomeSwiper, /* { default options with global component } */)

// vueコンポーネント
import SliderMenuComponent from './components/SliderMenuComponent.vue'
import TabMenuComponent from './components/TabMenuComponent.vue'


const app = new Vue({
    el: '#app',
    components: {
      SliderMenuComponent,
      VueAwesomeSwiper,
    }
})

const tab = new Vue({
  el: '#tab',
  components: {
    TabMenuComponent,
  }
})