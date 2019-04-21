## 教你朋友 CLI

h0w 哥：「欸！能不能教我 command line 到底是什麼，然後怎麼用啊？我想用 command line 建立一個叫做 wifi 的資料夾，並且在裡面建立一個叫 afu.js 的檔案。就交給你了，教學寫好記得傳給我，ㄅㄅ」

--------------------------------------------------------------------------------

## Command Line 是什麼？

簡單來說 Command Line 就是一種操作電腦的方法！

一般我們習慣直接使用滑鼠來點擊桌面上的資料夾、檔案等，這種操作的方式稱為：
	
	** 圖形化介面（Graphical User Interface）**

而命令行介面（Command Line Interface）則是透過 **文字視窗** 來對電腦執行令。

--------------------------------------------------------------------------------

## 環境建置

Windows 系統可安裝 [Cmder](https://cmder.net)。

MacOs 可直接在 Spotlight 上輸入 Terminal.app，或是安裝 [ITerm2](https://www.iterm2.com)。

--------------------------------------------------------------------------------

## 如何在 Command Line 建立一個叫做 wifi 的資料夾，並在裡面建立一個叫 afu.js 的檔案？ 

首先我們必須先了解 Command Line 的一些基本指令：

1. `pwd`：**印出目前所在位置（Print Working Directory）**

2. `ls`：**列出當前資料夾底下的所有檔案（List Segment）**

3. `mkdir 資料夾名稱`：**新增一個資料夾（Make Directory）**

* 範例：新增一個名為 wifi 的資料夾：

	`mkdir wifi`

4. `cd 資料夾名稱`：**切換至當前的資料夾（Change Directory）**

* 範例：切煥至名為 wifi 的資料夾：

	`cd wifi`，
	
* 完成後再輸入 `pwd` 來確認是否在 wifi 資料夾裡。

5. `touch 檔案名稱`：**新增檔案 or 修改檔案的時間**

* 若是輸入的檔案已存在，則會修改檔案時間

* 範例：新增一個名為 afu.js 的檔案：

	`touch afu.js`，完成後再輸入 `ls` 來確認是否建立成功。
