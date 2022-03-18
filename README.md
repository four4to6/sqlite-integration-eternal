# sqlite-integration-eternal
 === SQLite Integration ===  
Contributors: kjmtsh  
Plugin Name: SQLite Integration  
Plugin URI: [https://wordpress.org/plugins/sqlite-integration/](https://wordpress.org/plugins/sqlite-integration/)  
Tags: database, SQLite, PDO  
Author: Kojima Toshiyasu  
Author URI: [http://dogwood.skr.jp/](http://dogwood.skr.jp/)  
Requires at least: 3.3  
Tested up to: 4.1.1  
Stable tag: 1.8.1  
License: GPLv2  
License URI: [http://www.gnu.org/licenses/gpl-2.0.html](http://www.gnu.org/licenses/gpl-2.0.html)  

SQLite Integration is the plugin that enables WordPress to use SQLite. If you want to build a WordPress website with it, this plugin is for you.  
The official readme will be "readme-en.txt" and "readme-ja.txt".  

# Description

このプラグインは上記、SQLite Integrationをカスタマイズ及び  
機能を制限したものです。  

「wp-sqlite-db ※」と「sqlite-integration」を両方使う事で、
<br>
「sqlite-integration」を次世代に引き継いでいくことが趣旨です。

「※ wp-sqlite-db ([https://github.com/aaemnnosttv/wp-sqlite-db/](https://github.com/aaemnnosttv/wp-sqlite-db/))」  
はWordPressでSQLiteデータベースを使用するためのsingle file drop-in。

オリジナルの「SQLite Integration」pluginに基づいています。 

「wp-sqlite-db」を使えば、  
「sqlite-integration」をデータベースとして使わなくてもよくなります。  

MySQLが無くてもWordPressが動く、使えないと思っていた  
WordPressを使えるという「希望」をあたえてくれる秀逸なプラグイン  
「sqlite-integration」が   
このまま「埋もれて」しまうのは惜しいと思いました。 

こんな素敵なプラグインに恩返しができないかな？

データベースに   
「wp-sqlite-db ([https://github.com/aaemnnosttv/wp-sqlite-db/](https://github.com/aaemnnosttv/wp-sqlite-db/))」  
を使い、「utility」なプラグインとして「sqlite-integration」を使って  
「sqlite-integration」を残していこうよって事です。

# 注意事項

## 前提として

- **ご使用にあたり「全ては自己責任で行う」これが前提です。当方は一切の責任を負いかねます。**

- データベースに「wp-sqlite-db」を使っているのを前提としています。  
「sqlite-integration」本来のデータベースとしての機能はありませんのでご注意ください。

- わたしの環境(PHP 8.0.12)でのエラーは修正しましたが、その全てではありません。

## functions.phpに関して

 > SQLite Integrationにもっとさくさんの関数を実行させたいときには、 
 > sqlite-integration/functions.php(functions-5-2.phpはPHP5.2以前用です)に定義を追加することができます。

<span style="font-size: 60%; color: red;">(※ functions-5-2.phpは削除しました。)</span>  

上記の機能を残すためにいくつかの変更があります。 

「sqlite-integration」の不具合を解消する関数が  
書いてありますので必要なければコメントアウトか消してください。  
もちろん、ご自身にて関数を書くこともできます。

- Rewrite「$ value = null;」to「$ value = 0;」
- Remove Site Health Dashboard Widget
- Remove Site Health Sub Menu Item

また、パスも「sqlite-integration/functions/functions.php」となります。 

この「sqlite-integration」をプラグインとして使用しなく(削除・停止)なると  
functions.phpに書かれた関数も無効になります。 

上記(削除・停止)の場合、機能を有効にするには、  
シンプルな専用プラグインを配置するか、  
テーマのfunctions.phpファイルに記述します。 

## ご理解・納得した上でダウンロード

ご使用に際しまして  
フォルダを「__sqlite-integration-eternal__」から  
「__sqlite-integration__」に __リネーム__ してください。 

# 参考文献 (reference)

- [https://github.com/aaemnnosttv/wp-sqlite-db/issues](https://github.com/aaemnnosttv/wp-sqlite-db/issues)

- [Basic writing and formatting syntax](https://docs.github.com/ja/get-started/writing-on-github/getting-started-with-writing-and-formatting-on-github/basic-writing-and-formatting-syntax)

