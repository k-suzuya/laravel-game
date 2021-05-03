<template>
    <div class="main-img-center-slider">
      <div class="left-pointer">
        <img :src="'img/main/slider/left_pointer.png'" />
      </div>
      <div class="right-pointer">
        <img :src="'img/main/slider/right_pointer.png'" />
      </div>
        <div class="main-img-center-slider-inner">
            <a href="#">
                <img
                    :src="'img/main/slider/slider_1.webp'"
                    alt="スライダー画像1"
                />
                <div class="main-img-center-slider-label">
                    <div class="collabo-label">
                        <span>コラボ</span>
                    </div>
                    <div class="label-text">
                        <span>ダークRPGでFFコラボ！</span>
                    </div>
                </div>
                <div class="sab-label-box">
                    <span>#アプリ</span>
                    #FFコラボ
                </div>
            </a>
        </div>
        <div class="main-img-center-slider-inner">
            <a href="#">
                <img
                    :src="'img/main/slider/slider_2.webp'"
                    alt="スライダー画像2"
                />
                <div class="main-img-center-slider-label">
                    <div class="news-label">
                        <span>ニュース</span>
                    </div>
                    <div class="label-text">
                        <span>極上の世界観が味わえるRPG！</span>
                    </div>
                </div>
                <div class="sab-label-box">
                    <span>#アプリ</span>
                    #事前登録受付中
                </div>
            </a>
        </div>
        <div class="main-img-center-slider-inner">
            <a href="#">
                <img
                    :src="'img/main/slider/slider_3.webp'"
                    alt="スライダー画像3"
                />
                <div class="main-img-center-slider-label">
                    <div class="news-label">
                        <span>ニュース</span>
                    </div>
                    <div class="label-text">
                        <span>大作戦略ゲームが大型アプデ</span>
                    </div>
                </div>
                <div class="sab-label-box">
                    <span>#アプリ</span>
                    #SSR2枚確定
                </div>
            </a>
        </div>
    </div>
</template>

<script>
export default {
    mounted() {
        console.log("Component mounted.");
    }
};
</script>
