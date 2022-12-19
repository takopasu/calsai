## アプリケーション名

「サイゼリヤn[kcal]ガチャ」

## アプリケーション概要

サイゼリヤのメニューから設定値に応じてランダムにメニューを選定するアプリケーションです。

### 製作背景

Twitterでmarusho_summers様が開発したサイゼリヤ1000円ガチャを知り,実際に利用してみたときにメニューが更新されていないことやいくつかあれば便利だと思う機能を思いついたためアプリケーションを作成しました。

## URL

### テスト用アカウント
メールアドレス:dummy@gmail.com
パスワード:test1219

### 利用方法
入力box内に数値を入力してガチャを回すボタンを押すと設定値を上限としてメニューがランダムに選定されます。
その際、アルコールを含むメニューの切り替えや選択したメニューは必ず結果に含むオプションなどが利用できます。

## 開発環境
Windows 11
AWS(cloud9)
Laravel 9.38.0
libedit 3.1

### 環境構築手順
1.cloud9でプロジェクトを作成する。<br>
2.Composerのインストーラーをインターネットから取得＆インストーラー実行<br>
    $ curl -sS https://getcomposer.org/installer | php<br>
3.インストーラー実行により作成されたComposer本体をコマンドとして認識されるように特定ディレクトリに移動<br>
    $ sudo mv composer.phar /usr/local/bin/composer<br>
4.composerのインストール対象パッケージにlaravelインストーラーを追加<br>
    $ composer global require laravel/installer<br>
5.Composerコマンドにて任意のディレクトリ名にLaravelプロジェクト作成<br>
    $ composer create-project laravel/laravel --prefer-dist ディレクトリの名前 "9.*"<br>

# インストーラー実行により作成されたComposer本体をコマンドとして認識されるように特定ディレクトリに移動
$ sudo mv composer.phar /usr/local/bin/composer
##  要件定義と優先度
優先度(3:高 2:中 1:低) | 機能 | 目的 | 詳細 
-|-|-|-
3|DB設計|
