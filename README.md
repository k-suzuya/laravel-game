# 作成する目的
 
某ゲーム攻略サイトを模写し、laravel上で動かすアプリケーションを作成することにより、スキルの向上を図っています。  
 
# 進捗状況
 
フロント　→　モック作成中  
バックエンド　→　未着手（環境構築済み）  
 
# 使用した言語、ライブラリ等
 
・laravel → 6.20.19  

・php → 7.4.12  

・mysql → 5.7.32  

・nodebrew → v14.16.1  

・node → 6.14.12  

・vue → 2.5.17  

・vue-template-compiler → 2.6.10  

・swiper → 5.4.5

・vue-awesome-swiper → 4.1.1
# 環境構築方法

1. 以下コマンドでgit clone  
```
git clone https://github.com/k-suzuya/laravel-game.git
```

2. 以下コマンドでconposerライブラリを入れる  
```
composer install
```

3. 以下コマンドで .envファイルを作成  
```
cp .env.example .env
```

4. 「.env」ファイルの中の、APP_KEY値がデフォルトままなので、以下コマンドで値をセット  
```
php artisan key:generate
```

5. 「.env」ファイルの中の、DB項目の設定  
※ローカル環境にDBを作成している前提  
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel_game
DB_USERNAME=root
DB_PASSWORD=root
```

6. 以下コマンドでcomposer.jsonをロードする  
```
composer dump-autoload
```

7. 以下コマンドでlaravel/uiパッケージをインストール（Laravel6系はlaravel/ui2系に対応していないためバージョンを指定する）  
```
composer require laravel/ui "^1.0" --dev
```

8. 以下コマンドでVue.jsのファイル等を生成  
```
php artisan ui vue
```

9. package.jsonのdevDependencies項目にvue等が追記されていることを確認  

10. 以下コマンドでpackage.jsonの内容に依存したパッケージをインストール  
```
npm install
```

11. 以下コマンドでVueコンポーネントの編集/保存を監視しコンパイルを自動化する  
```
npm run watch
```

12. 以下コマンドでサーバー起動  
```
php artisan serve
```
