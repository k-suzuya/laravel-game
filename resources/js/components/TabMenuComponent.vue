<template>
  <div class="tab-rapper">
    <h2>人気ランキング</h2>
    <div class="tab-container">
      <a href="javascript:void(0)" v-for="(tab, index) in tabs"
              :key="tab.id"
              :class="{ active: currentTab === index }"
              @click="currentTab = index">{{ tab.tabName }}
      </a>
    </div>
    <div class="tab-content">
      <div v-show="currentTab === 0">
        <h3><a href="#tab">ゲームタイトル　PS4</a></h3>
        <p>ゲーム詳細　PS4</p>
      </div>
      <div v-show="currentTab === 1">
        <h3><a href="#tab">ゲームタイトル　Switch</a></h3>
        <p>ゲーム詳細　Switch</p>
      </div>
      <div v-show="currentTab === 2">
        <h3><a href="#tab">ゲームタイトル　アプリ</a></h3>
        <p>ゲーム詳細　アプリ</p>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: 'tabs',
  data () {
    return {
      currentTab: 0,
      id: 0,
      tabName: "",
      tabs: [
        {id: 1, tabName: 'PS4'},
        {id: 2, tabName: 'Switch'},
        {id: 3, tabName: 'アプリ'}
      ],
    }
  }
}  
</script>
<style>
#tab .tab-rapper {
  /* 全体を左に寄せる */
  padding: 0 10px;
}

#tab .tab-rapper h2 {
  padding-top: 15px;
  padding-bottom: 7px;
  font-size: 16px;
  font-weight: bold;
  color: #333;
}

#tab .tab-container {
  margin-bottom: 18px;
  display : -webkit-box;     /* old Android */
  display : -webkit-flex;    /* Safari etc. */
  display : -ms-flexbox;     /* IE10        */
  display : flex;
  justify-content: center;
  border: solid 1px #34B792;
  border-radius: 2px;
  height: 32px;
}
#tab .tab-container a {
  /* テキスト中央揃えするため */
  display : -webkit-box;     /* old Android */
  display : -webkit-flex;    /* Safari etc. */
  display : -ms-flexbox;     /* IE10        */
  display: flex;
  /* テキスト中央揃えするため */
  justify-content: center;
  align-items: center;
  /* ボタン幅を統一 */
  flex: 1;
  color: #34B792;
  border-right: solid 1px #34B792;
}

#tab .tab-container a:last-child {
  /* 最後のリンクデザインに縦棒をつけない */
   border-right: 0;
}
#tab .tab-container a.active {
  background: #34B792;
  color: #ffffff;
}

#tab .tab-content h3 {
  margin: 0;
  padding-top: 12px;
  padding-bottom: 12px;
  font-size: 16px;
  color: #333;
}

.tab-content div {
  padding: 0;
  background: #ffffff;
  width: 100%;
  margin: 0 auto;
}
</style>