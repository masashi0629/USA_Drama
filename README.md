# AMERICAN DRAMA NAVI
キーワード検索を作品名、俳優、吹き替え声優を指定して検索ができ、
ジャンル、年代、放送局で一覧検索できる　USAドラマ情報アプリケーションです。
※画像は著作権の問題で、作品とは関係ない画像が出ます。url 54.248.188.205

データベース設計 
![FireShot Capture 009 - データベース設計 - Google スプレッドシート - docs google com](https://user-images.githubusercontent.com/121473458/218264455-12ffb6a9-fb66-4974-81c6-1ec475bc99dd.png)
![FireShot Capture 008 - データベース設計 - Google スプレッドシート - docs google com](https://user-images.githubusercontent.com/121473458/218264694-8963464c-c492-4e49-ad03-d38a629cd2f3.png)


##　作成動機

昔よく見た海外ドラマを思い出す時、頭ではイメージがあるが
人名やドラマ名を思い出さないと中々検索できないです。
私自身もそういった場合、wikipediaや海外ドラマ情報ページを使って調べますが、昔のドラマ(90年　00年あたり)は中々たどり着くまで時間がかかります。
では、どういった物があれば便利になるかと考えた時　海外ドラマデータベースのような物を作り、そこで調べたら基本的に解決できる 使いやすいアプリを作りました。
(データベース設計から実装まで約３週間)

## 画面表示構成成

1 TOPページ　2 作品紹介ページ　3 ログイン画面　4 検索結果ページ　5 年代別　ジャンルなどのサブメニュー

## 使い方
1.TOPページに作品が4件ランダム表示されます。画像下あたりをクリックすると作品詳細ページに移ります。
2.キーワードを入力、又はサブメニュー(ジャンル　年代　放送局)で選択肢すれば　検索結果が出ます。
検索結果の作品一覧の画像したあたりをクリックすると　作品詳細ページに移ります。


## 環境

*　Laravel 6
*  Tailwind css v3

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
