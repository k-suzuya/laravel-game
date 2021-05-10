<template>
    <div class="main-img-center-slider">
        <swiper :options="swiperOption">
            <swiper-slide>
                <a href="#">
                    <img
                        :src="'images/top/menu/slider/slider_1.webp'"
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
            </swiper-slide>

            <swiper-slide>
                <a href="#">
                    <img
                        :src="'images/top/menu/slider/slider_2.webp'"
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
            </swiper-slide>

            <swiper-slide>
                <a href="#">
                    <img
                        :src="'images/top/menu/slider/slider_3.webp'"
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
            </swiper-slide>
        </swiper>
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            swiperOption: {
                // スクロール幅の調整（レスポンシブが適用されなくなる点に注意）
                width: 288,
                // 画像を選択してのスクロール
                allowTouchMove: false,
                navigation: {
                    prevEl: ".swiper-button-prev",
                    nextEl: ".swiper-button-next",
                    // 前、次ページがなかった場合、非表示のクラスを付与
                    disabledClass: "swiper-button-disabled"
                }
            }
        };
    }
};
</script>
<style>
#app .swiper-container {
    width: 100%;
    height: 100%;
    z-index: 0;
}

#app .swiper-slide {
    font-size: 18px;
    /* Center slide text vertically */
    display: -webkit-box;
    display: -ms-flexbox;
    display: -webkit-flex;
    display: flex;
    -webkit-box-pack: start;
    -ms-flex-pack: start;
    -webkit-justify-content: start;
    justify-content: flex-start;
    -webkit-box-align: flex-start;
    -ms-flex-align: flex-start;
    -webkit-align-items: flex-start;
    align-items: align-items;
}

.swiper-slide img {
    width: 280px;
    height: 160px;
    border-radius: 3px;
}

/* 前、次ページボタンのスタイル上書き */
.swiper-button-prev:after,
.swiper-button-next:after {
    font-size: var(--swiper-navigation-size);
    text-transform: none !important;
    letter-spacing: 0;
    text-transform: none;
    font-variant: initial;
}

/* 前、次ページボタンのスタイル上書き */
.swiper-button-prev:after,
.swiper-container-rtl .swiper-button-next:after {
    content: "";
}

/* 前、次ページボタンのスタイル上書き */
.swiper-button-next:after,
.swiper-container-rtl .swiper-button-prev:after {
    content: "";
}

/* 前ページボタンのスタイル */
.swiper-button-prev {
    position: absolute;
    display: inline-block;
    width: 28px;
    height: 57px;
    top: 40%;
    left: 0px;
    border-radius: 0 100px 100px 0;
    cursor: pointer;
    z-index: 1;
    background-color: rgba(0, 0, 0, 0.3);
    background-image: url("../../../public/images/top/menu/slider/prev.png");
    background-size: 10px 15px; /* 背景画像としてのサイズ（＝表示したい画像サイズ） */
    background-position: center;
    background-repeat: no-repeat;
}

/* 次ページボタンのスタイル */
.swiper-button-next {
    position: absolute;
    display: inline-block;
    width: 28px;
    height: 57px;
    top: 40%;
    right: 0px;
    border-radius: 100px 0 0 100px;
    cursor: pointer;
    z-index: 1;
    background-color: rgba(0, 0, 0, 0.3);
    background-image: url("../../../public/images/top/menu/slider/next.png");
    background-size: 10px 15px; /* 背景画像としてのサイズ（＝表示したい画像サイズ） */
    background-position: center;
    background-repeat: no-repeat;
}

/* 前、次ページがなかった場合、カーソル非表示 */
.swiper-button-disabled {
    display: none;
}
</style>
