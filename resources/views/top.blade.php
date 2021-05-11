<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  {{-- laravel mix読み込み --}}
  <link rel="stylesheet" href="{{ mix('css/app.css') }}" type="text/css">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  {{-- 共通 --}}
  <link rel="stylesheet" href={{ asset('css/common/common.css') }}>
  {{-- heder --}}
  <link rel="stylesheet" href={{ asset('css/header/top_header.css') }}>
  <link rel="stylesheet" href={{ asset('css/header/top_search.css') }}>
  <link rel="stylesheet" href={{ asset('css/header/top_nav.css') }}>
  {{-- main --}}
  <link rel="stylesheet" href={{ asset('css/main/top_background_image.css') }}>
  <link rel="stylesheet" href={{ asset('css/main/top_contents_menu.css') }}>
  <title>laravel-game</title>
</head>

<body>
  {{-- ヘッダー --}}
  <header>
    <div class='header'>
      <div class="header-inner">
        <div class="header-logo">
          <a href="#"><img src="{{ asset('images/header/logo.png') }}"
              alt="LaravelGame - 国内最大級のゲームアプリ情報・攻略サイト"></a>
        </div>
        <div class="header-link">
          <ul>
            <li><a href="#">ホーム</a></li>
            <li><a href="#"><img src="{{ asset('images/header/new_regist.png') }}" alt="新規登録">新規登録</a></li>
            <li><a href="#"><img src="{{ asset('images/header/login.png') }}" alt="ログイン">ログイン</a></li>
          </ul>
        </div>
      </div>
    </div>
    {{-- <hr> --}}
    {{-- TOP検索 --}}
    <div class='header-search'>
      <div class="header-search-inner">
        <div class="header-text">
          <h1>ララベルゲーム(LaravelGame) - 日本最大級のゲームレビュー・攻略サイト</h1>
        </div>
        <div class="header-search-box">
          <form action="/" method="GET">
            <input type="text" name="header_search" placeholder="LaravelGame内から検索">
            <input type="submit" value="検索">
          </form>
        </div>
      </div>
    </div>
    <hr>
    <div class="header-nav">
      <div class="header-nav-inner">
        <nav>
          <li><a href="#">トップ</a></li>
          <li><a href="#">アプリ</a></li>
          <li><a href="#">PS4</a></li>
          <li><a href="#">Switch</a></li>
          <li><a href="#">PS5</a></li>
          <li><a href="#">攻略</a></li>
        </nav>
      </div>
    </div>
  </header>
  {{-- // TOP検索 --}}
  {{-- // ヘッダー --}}

  {{-- mainメニュー --}}
  {{-- 背景画像 中央 --}}
  <div class="main">
    <div class="main-inner">
      <div class="main-img-center">
        <img src="{{ asset('images/top/background/center.png') }}" alt="中央メイン画像">
      </div>
      {{-- 背景画像 左 --}}
      <div class="main-img-left">
      </div>
      {{-- 背景画像 右 --}}
      <div class="main-img-right">
      </div>
    </div>
    <section>
      <div id="main-container">
        <div class="top-left-menu">
          {{-- 左サイドメニュー --}}
          <h2>おすすめゲームアプリ</h2>
          <hr class="boder-solid">
          <ul class="top-left-menu-box">
            <li class="menu-wrap">
              <a href="#">
                <div class="menu-img-box">
                  <img src="{{ asset('images/top/menu/I_rpg_best.png') }}" alt="RPG">
                </div>
                <div class="menu-text-box">
                  <p>RPGのおすすめ</p>
                </div>
              </a>
            </li>
            <hr>
            <li class="menu-wrap">
              <a href="#">
                <div class="menu-img-box">
                  <img src="{{ asset('images/top/menu/I_act_best.png') }}" alt="アクション">
                </div>
                <div class="menu-text-box">
                  <p>アクションのおすすめ</p>
                </div>
              </a>
            </li>
            <hr>
            <li class="menu-wrap">
              <a href="#">
                <div class="menu-img-box">
                  <img src="{{ asset('images/top/menu/I_slg_best.png') }}" alt="シミュレーション">
                </div>
                <div class="menu-text-box">
                  <p>シミュレーションのおすすめ</p>
                </div>
              </a>
            </li>
            <hr>
            <li class="menu-wrap">
              <a href="#">
                <div class="menu-img-box">
                  <img src="{{ asset('images/top/menu/I_rpg_best.png') }}" alt="パズルゲーム">
                </div>
                <div class="menu-text-box">
                  <p>パズルゲームのおすすめ</p>
                </div>
              </a>
            </li>
            <hr>
            <li class="menu-wrap">
              <a href="#">
                <div class="menu-img-box">
                  <img src="{{ asset('images/top/menu/I_rpg_best.png') }}" alt="スポーツ">
                </div>
                <div class="menu-text-box">
                  <p>スポーツのおすすめ</p>
                </div>
              </a>
            </li>
            <hr>
            <li class="menu-wrap">
              <a href="#">
                <div class="menu-img-box">
                  <img src="{{ asset('images/top/menu/I_rpg_best.png') }}" alt="音ゲー">
                </div>
                <div class="menu-text-box">
                  <p>音ゲーのおすすめ</p>
                </div>
              </a>
            </li>
            <hr>
            <li class="menu-wrap">
              <a href="#">
                <div class="menu-img-box">
                  <img src="{{ asset('images/top/menu/I_rpg_best.png') }}" alt="シューティングゲーム">
                </div>
                <div class="menu-text-box">
                  <p>シューティングゲームのおすすめ</p>
                </div>
              </a>
            </li>
            <hr>
            <li class="menu-wrap">
              <a href="#">
                <div class="menu-img-box">
                  <img src="{{ asset('images/top/menu/I_rpg_best.png') }}" alt="カードゲーム">
                </div>
                <div class="menu-text-box">
                  <p>カードゲームのおすすめ</p>
                </div>
              </a>
            </li>
            <hr>
            <li class="menu-wrap">
              <a href="#">
                <div class="menu-img-box">
                  <img src="{{ asset('images/top/menu/I_rpg_best.png') }}" alt="レースゲーム">
                </div>
                <div class="menu-text-box">
                  <p>レースゲーム</p>
                </div>
              </a>
            </li>
            <hr>
            <li class="menu-wrap">
              <a href="#">
                <div class="menu-img-box">
                  <img src="{{ asset('images/top/menu/I_rpg_best.png') }}" alt="脱出ゲーム">
                </div>
                <div class="menu-text-box">
                  <p>脱出ゲームのおすすめ</p>
                </div>
              </a>
            </li>
            <hr>
            <li class="menu-wrap">
              <a href="#">
                <div class="menu-img-box">
                  <img src="{{ asset('images/top/menu/I_rpg_best.png') }}" alt="女性向けゲーム">
                </div>
                <div class="menu-text-box">
                  <p>女性向けゲームのおすすめ</p>
                </div>
              </a>
            </li>
            <hr>
          </ul>
          {{-- //左サイドメニュー --}}
        </div>
        <div class="center-menu">
          {{-- ニュース、コラボ、その他 --}}
          <div id="app">
            <slider-menu-component></slider-menu-component>
          </div>
          {{-- // ニュース、コラボ、その他 --}}
          {{-- mainメニュー --}}
          <div id="tab">
            <tab-menu-component></tab-menu-component>
          </div>
          {{-- ランキングメニュー --}}
          {{-- 非同期切り替え --}}
          Switch
          PS4
          アプリ
          {{-- //非同期切り替え --}}
          {{-- Switch --}}
          1
          スーパーマリオ 3Dワールド ＋ フューリーワールド
          スーパーマリオ 3Dワールド ＋ フューリーワールド
          『マリオ 3Dワールド』がより遊びやすく、さらに新要素がプラスされ登場！
          2
          モンスターハンターライズ
          モンスターハンターライズ
          Switch版モンハン新作が登場！和風の世界を舞台にハンティング！
          3
          Apex Legends（エーペックスレジェンズ）
          Apex Legends（エーペックスレジェンズ）
          3人1組で戦うバトロワFPS！仲間と力を合わせて生き残れ！
          4
          牧場物語 オリーブタウンと希望の大地
          牧場物語 オリーブタウンと希望の大地
          広大な牧場でほのぼの生活！自由気ままなスローライフが楽しめるシミュレーション！
          5
          ブレイブリーデフォルト2
          ブレイブリーデフォルト2
          スクエニの人気RPG『ブレイブリー』シリーズの完全新作！

          6
          ジャックジャンヌ
          ジャックジャンヌ
          『東京喰種』の石田スイ氏が手がける少年歌劇シミュレーション！
          7
          リトルナイトメア2
          リトルナイトメア2
          不気味な雰囲気で話題を呼んだサスペンスADV『リトルナイトメア』の続編！
          8
          帰ってきた 魔界村
          帰ってきた 魔界村
          トライ&エラーでゴールに辿り着け！あの高難易度ゲーが帰ってきた！
          9
          魔界戦記ディスガイア６
          魔界戦記ディスガイア６
          やりこみ要素満載のシミュレーションRPG！シリーズ初の3Dモデルも採用！
          10
          みんなで空気読み。3
          みんなで空気読み。3
          空気を読む力を診断！「空気読み」シリーズ3作目！

          11
          A列車で行こう はじまる観光計画
          A列車で行こう はじまる観光計画
          鉄道を走らせて都市を開発！自分だけの街を作れる鉄道シミュレーション！
          12
          カプコンアーケードスタジアム
          カプコンアーケードスタジアム
          名作アーケードゲームがスイッチに登場！総勢32タイトルが楽しめる！
          13
          MAGLAM LORD／マグラムロード
          MAGLAM LORD／マグラムロード
          絶滅回避のために魔王が"コンカツ"！魔剣を作って戦うアクションRPG！
          14
          バランワンダーワールド
          バランワンダーワールド
          色鮮やかな世界で冒険！ミュージカルがモチーフの3Dアクション！
          15
          英雄伝説 閃の軌跡IV -THE END OF SAGA-
          英雄伝説 閃の軌跡IV -THE END OF SAGA-
          人気ストーリーRPG『閃の軌跡』シリーズ最終章！
          {{-- 同期処理 --}}
          Switchのランキングをもっと見る
          {{-- //Switch --}}

          {{-- PS4 --}}
          1
          リトルナイトメア2
          リトルナイトメア2
          不気味な雰囲気で話題を呼んだサスペンスADV『リトルナイトメア』の続編！
          2
          魔界戦記ディスガイア６
          魔界戦記ディスガイア６
          やりこみ要素満載のシミュレーションRPG！シリーズ初の3Dモデルも採用！
          3
          仁王２ Complete Edition
          仁王２ Complete Edition
          妖の力を駆使して妖怪を討て！和風ダークファンタジー『仁王２』完全版！
          4
          MAGLAM LORD／マグラムロード
          MAGLAM LORD／マグラムロード
          絶滅回避のために魔王が"コンカツ"！魔剣を作って戦うアクションRPG！
          5
          バランワンダーワールド
          バランワンダーワールド
          色鮮やかな世界で冒険！ミュージカルがモチーフの3Dアクション！

          6
          ラブライブ！スクールアイドルフェスティバル ～after school ACTIVITY～ わいわい！Home Meeting!!
          ラブライブ！スクールアイドルフェスティバル ～after school ACTIVITY～ わいわい！Home Meeting!!
          大画面でアイドルが歌って踊る！『ラブライブ！』新作音ゲーがPS4に登場！
          7
          うみねこのなく頃に咲 ～猫箱と夢想の交響曲～
          うみねこのなく頃に咲 ～猫箱と夢想の交響曲～
          竜騎士07氏が手がける人気ノベルアドベンチャー『うみねこのなく頃に』完全版！
          8
          Re:ゼロから始める異世界生活 偽りの王選候補
          Re:ゼロから始める異世界生活 偽りの王選候補
          原作者完全監修！ゲームオリジナルの『リゼロ』の物語が楽しめるアドベンチャー！
          9
          Empire of Sin　エンパイア・オブ・シン
          Empire of Sin　エンパイア・オブ・シン
          悪に手を染め世界の頂点へ！暗黒街を支配するクライムストラテジー
          10
          ゆるキャン△ VIRTUAL CAMP 本栖湖編
          ゆるキャン△ VIRTUAL CAMP 本栖湖編
          アニメ「ゆるキャン△」のキャラたちとキャンプを楽しもう！

          11
          オーバークック 王国のフルコース
          オーバークック 王国のフルコース
          皆で遊べるドタバタ料理アクション！リメイクされた2つの作品が楽しめる！
          12
          五等分の花嫁∬ 〜夏の思い出も五等分〜
          五等分の花嫁∬ 〜夏の思い出も五等分〜
          五つ子と波乱万丈な無人島生活！人気アニメが待望のゲーム化！
          13
          オートチェス
          オートチェス
          駒を強化してライバルを倒せ！ストラテジーバトルロワイアル！
          14
          Ghostrunner（ゴーストランナー）
          Ghostrunner（ゴーストランナー）
          爽快＆一撃必殺なパルクールアクション！サイバーパンクな要塞都市を駆け抜けろ！
          15
          コープスパーティー ブラッドカバー リピーティッドフィアー
          コープスパーティー ブラッドカバー リピーティッドフィアー
          廃校を舞台に恐怖が襲いかかる！完全版になった最恐ホラーアドベンチャー！
          {{-- 同期処理 --}}
          PS4のランキングをもっと見る
          {{-- //PS4 --}}

          {{-- アプリ --}}
          1
          マジック：ザ・ギャザリング アリーナ
          マジック：ザ・ギャザリング アリーナ
          トレーディングカードゲーム
          2
          リネージュ2M
          リネージュ2M
          MMO/MORPG
          3
          ガオロード ワールド
          ガオロード ワールド
          カードコレクション
          4
          トムとジェリー：チェイスチェイス
          トムとジェリー：チェイスチェイス
          2Dアクション
          5
          FINAL FANTASY VIII Remastered
          FINAL FANTASY VIII Remastered
          RPG

          6
          真・三國無双
          真・三國無双
          3Dアクション
          7
          クラッシュ・バンディクー ブッとび！マルチワールド
          クラッシュ・バンディクー ブッとび！マルチワールド
          ランアクション
          8
          RPG アームド&ゴーレム
          RPG アームド&ゴーレム
          RPG
          9
          覇王の業～波乱なる三国志～
          覇王の業～波乱なる三国志～
          リアルタイムストラテジー
          10
          三国志群雄
          三国志群雄
          リアルタイム戦術RPG

          11
          ウマ娘 プリティーダービー
          ウマ娘 プリティーダービー
          その他シミュレーション
          12
          BLAZBLUE ALTERNATIVE DARKWAR
          BLAZBLUE ALTERNATIVE DARKWAR
          コマンドバトルRPG
          13
          NieR Re[in]carnation
          NieR Re[in]carnation
          3DアクションRPG
          14
          咲う(わらう) アルスノトリア
          咲う(わらう) アルスノトリア
          セミオートバトルRPG
          15
          アルカナタクティクス
          アルカナタクティクス
          オートバトルRPG
          {{-- 同期処理 --}}
          アプリのランキングをもっと見る
          {{-- アプリ --}}
          {{-- //ランキングメニュー --}}
        </div>

        <div class="right-menu">
          {{-- 右サイドメニュー --}}
          攻略取り扱い家庭用ゲーム
          モンスターハンターライズ
          モンハンライズ攻略
          エーペックス
          Apex Legends攻略
          オリーブタウン
          牧場物語オリーブタウン攻略
          桃鉄スイッチ
          桃鉄スイッチ攻略
          ライザ2
          ライザのアトリエ2攻略
          デモンズソウルリメイク
          デモンズソウル攻略
          あつまれどうぶつの森
          あつ森攻略
          フォートナイト
          フォートナイト攻略
          ポケモン剣盾
          ポケモン剣盾攻略
          一覧を見る
          攻略取り扱いスマホゲーム
          ウマ娘
          ウマ娘攻略
          リィンカネ
          ニーアリィンカーネーション攻略
          げんしん
          原神攻略
          リネ2M
          リネージュ2M攻略
          オルサガR
          オルサガR攻略
          さんゆう
          三国志群雄攻略
          モンスト
          モンスト攻略
          パズドラ
          パズドラ攻略
          ポケモンGO
          ポケモンGO攻略
          プリンセスコネクト
          プリコネR攻略
          グラブル
          グラブル攻略
          白猫
          白猫攻略
          ツムツム
          ツムツム攻略
          ヴァンガードゼロ
          ヴァンガードZERO攻略
          ドラゴンクエストタクト
          ドラクエタクト攻略
          一覧を見る
          LaravelGame SNSを始めよう
          ゲームの楽しさが広がる LaravelGame SNS
          SNSを体験してみる
          人気のコミュニティ
          ウマ娘 プリティーダービー
          2,126人が参加中

          モンスターストライク
          195,539人が参加中

          パズル＆ドラゴンズ
          51,187人が参加中

          ポケモンGO(Pokémon GO)
          29,035人が参加中

          モンスターハンターライズ
          212人が参加中

          Apex Legends（エーペックスレジェンズ）
          2,417人が参加中

          プリンセスコネクト! Re:Dive
          4,816人が参加中

          グランブルーファンタジー
          17,948人が参加中

          白猫プロジェクト
          25,209人が参加中

          フォートナイト バトルロイヤル for モバイル
          3,404人が参加中
        </div>
      </div>
    </section>
  </div>
  {{-- // 右サイドメニュー --}}
  </div>

  {{-- フッター --}}
  <nav>
    <li>トップ</li>
    <li>ヘルプ</li>
    <li>運営会社</li>
    <li>採用情報</li>
    <li>利用規約</li>
    <li>プライバシーポリシー</li>
    <li>広告のご案内</li>
    <li>お問い合わせ</li>
  </nav>
  LaravelGame(English)LaravelGame(繁體中文版)
  Copyright (C) LaravelGame All Rights Reserved.
  {{-- // フッター --}}
  {{-- scriptの読み込み --}}
  <script src="{{ mix('js/app.js') }}"></script>
  {{-- // scriptの読み込み --}}
</body>

</html>