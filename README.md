## アプリケーション名

「サイゼリヤn[kcal & 円]ガチャ」

## アプリケーション概要

サイゼリヤのメニューから設定値に応じてランダムにメニューを選定するアプリケーションです。

### 製作背景

Twitterでmarusho_summers様が開発したサイゼリヤ1000円ガチャを知り,実際に利用してみたときにメニューが更新されていないことやいくつかあれば便利だと思う機能を思いついたためアプリケーションを作成しました。

## URL
https://calsai.herokuapp.com/

### テスト用アカウント
メールアドレス:dummy1219@gmail.com  
パスワード:test1219

### 利用方法
入力box内に数値を入力してガチャを回すボタンを押すと設定値を上限としてメニューがランダムに選定されます。
その際、アルコールを含むメニューの切り替えや選択したメニューは必ず結果に含むオプションなどが利用できます。

## 開発環境
Laravel 9.38.0  
Laravel/Socialite 5.5  
Laravel/Breeze 1.14  
npm 8.15.0  
libedit 3.1  

## 機能一覧  
### ガチャ機能
カロリーの指定  
料金の指定  
全てのメニューからガチャ  
お酒抜きのメニューからガチャ  
ガチャ結果を表示  
それぞれのメニューのカロリー、塩分、料金の合計を表示  
選択したメニューをガチャ結果に含める機能の追加  
### 保存機能
結果の保存  
結果ごとにタグ付けして日付等で分ける  
結果のお気に入り登録  
お気に入りの結果のみ表示できるようにする  
登録した結果の削除  
ユーザ新規登録機能  
ログイン機能  
Googleアカウントでのログイン機能

## 工夫した機能
### 本家1000円ガチャとの変更点  
kcalでのガチャ
上限値の設定機能  
アルコールのオンオフ  
選択したメニューをガチャ結果に含める機能の追加  
結果の保存機能  
ログイン機能  
ガチャ結果とユーザーの紐づけ  

### 工夫したポイント
モバイルファーストでの開発  
ガチャ結果を保存するために中間テーブルを利用した多対多のリレーションの実装    
ログイン機能にSocialiteを用いてGoogleアカウントでのログインを実現  

## ER図  
![page_layout-ER図 drawio](https://user-images.githubusercontent.com/105765781/208471495-123d8c6b-e400-45ce-bcd0-ea1116c2fba2.png)

## デモ
https://user-images.githubusercontent.com/105765781/210137629-bd599300-bca9-4df4-92fc-2ae8dae57cf8.mp4







