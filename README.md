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

���̃v���O�C���͏�L�ASQLite Integration���J�X�^�}�C�Y�y��  
�@�\�𐧌��������̂ł��B  

�uwp-sqlite-db ���v�Ɓusqlite-integration�v�𗼕��g�����ŁA
<br>
�usqlite-integration�v��������Ɉ����p���ł������Ƃ���|�ł��B

�u�� wp-sqlite-db ([https://github.com/aaemnnosttv/wp-sqlite-db/](https://github.com/aaemnnosttv/wp-sqlite-db/))�v  
��WordPress��SQLite�f�[�^�x�[�X���g�p���邽�߂�single file drop-in�B

�I���W�i���́uSQLite Integration�vplugin�Ɋ�Â��Ă��܂��B 

�uwp-sqlite-db�v���g���΁A  
�usqlite-integration�v���f�[�^�x�[�X�Ƃ��Ďg��Ȃ��Ă��悭�Ȃ�܂��B  

MySQL�������Ă�WordPress�������A�g���Ȃ��Ǝv���Ă���  
WordPress���g����Ƃ����u��]�v���������Ă����G��ȃv���O�C��  
�usqlite-integration�v��   
���̂܂܁u������āv���܂��̂͐ɂ����Ǝv���܂����B 

����ȑf�G�ȃv���O�C���ɉ��Ԃ����ł��Ȃ����ȁH

�f�[�^�x�[�X��   
�uwp-sqlite-db ([https://github.com/aaemnnosttv/wp-sqlite-db/](https://github.com/aaemnnosttv/wp-sqlite-db/))�v  
���g���A�uutility�v�ȃv���O�C���Ƃ��āusqlite-integration�v���g����  
�usqlite-integration�v���c���Ă���������Ď��ł��B

# ���ӎ���

## �O��Ƃ���

- **���g�p�ɂ�����u�S�Ă͎��ȐӔC�ōs���v���ꂪ�O��ł��B�����͈�؂̐ӔC�𕉂����˂܂��B**

- �f�[�^�x�[�X�Ɂuwp-sqlite-db�v���g���Ă���̂�O��Ƃ��Ă��܂��B  
�usqlite-integration�v�{���̃f�[�^�x�[�X�Ƃ��Ă̋@�\�͂���܂���̂ł����ӂ��������B

- �킽���̊�(PHP 8.0.12)�ł̃G���[�͏C�����܂������A���̑S�Ăł͂���܂���B

## functions.php�Ɋւ���

 > SQLite Integration�ɂ����Ƃ�������̊֐������s���������Ƃ��ɂ́A 
 > sqlite-integration/functions.php(functions-5-2.php��PHP5.2�ȑO�p�ł�)�ɒ�`��ǉ����邱�Ƃ��ł��܂��B

<span style="font-size: 60%; color: red;">(�� functions-5-2.php�͍폜���܂����B)</span>  

��L�̋@�\���c�����߂ɂ������̕ύX������܂��B 

�usqlite-integration�v�̕s�����������֐���  
�����Ă���܂��̂ŕK�v�Ȃ���΃R�����g�A�E�g�������Ă��������B  
�������A�����g�ɂĊ֐����������Ƃ��ł��܂��B

- Rewrite�u$ value = null;�vto�u$ value = 0;�v
- Remove Site Health Dashboard Widget
- Remove Site Health Sub Menu Item

�܂��A�p�X���usqlite-integration/functions/functions.php�v�ƂȂ�܂��B 

���́usqlite-integration�v���v���O�C���Ƃ��Ďg�p���Ȃ�(�폜�E��~)�Ȃ��  
functions.php�ɏ����ꂽ�֐��������ɂȂ�܂��B 

��L(�폜�E��~)�̏ꍇ�A�@�\��L���ɂ���ɂ́A  
�V���v���Ȑ�p�v���O�C����z�u���邩�A  
�e�[�}��functions.php�t�@�C���ɋL�q���܂��B 

## �������E�[��������Ń_�E�����[�h

���g�p�ɍۂ��܂���  
�t�H���_���u__sqlite-integration-eternal__�v����  
�u__sqlite-integration__�v�� __���l�[��__ ���Ă��������B 

# �Q�l���� (reference)

- [https://github.com/aaemnnosttv/wp-sqlite-db/issues](https://github.com/aaemnnosttv/wp-sqlite-db/issues)

- [Basic writing and formatting syntax](https://docs.github.com/ja/get-started/writing-on-github/getting-started-with-writing-and-formatting-on-github/basic-writing-and-formatting-syntax)

