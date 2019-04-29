## 跟你朋友介紹 Git

## 什麼是 Git？

在了解 Git 之前，我們先來聊聊「版本控制」。

舉個例子，成長過程中總會有幾個深感懊悔的經驗：

* 8 歲，沒好好學英文
* 18 歲，學測忘記填答案卡
* 28 歲，與威力彩頭獎擦肩而過

而版本控制就是 **把所有時刻都保存起來**，讓我們回到那個 moment 力挽狂瀾！ 

而 Git，就是一個 **幫你做版本控制的程式**。

--------------------------------------------------------------------------------

## 環境設置

Windows 系統可安裝 [Cmder](https://cmder.net)，接著可輸入 `git --version` 來確認是否安裝成功。

MacOs 可直接打開 Terminal，接著輸入 `git --version`。

--------------------------------------------------------------------------------

## Git 的基本指令

先建立一個專案，以下指令皆在指定專案內進行：

* Step 1：`mkdir git-test`
* Step 2：`cd git-test`  

1. `git init`：**版本控制初始化**

* 在輸入 `git init` 後，會出現一個 **.git** 的資料夾。

2. `git status`：**檢視版本控制的狀態**

* 檔案會被分為兩個區塊，分別是 Stage（有版控）、Untracked（無版控）。

3. `git add 檔案名稱`：**將檔案加入版本控制**

4. `git commit -m '版本名稱'`：**建立一個新的版本**

5. `git log`：**查看歷史紀錄**

* 內有「版本號碼」、「提交者」、「提交時間」。

6. `git checkout 版本號碼`：**回到某個版本**

7. `.gitignore`：**要忽略的檔案**

* Step 1：`touch .gitignore`，並輸入 `vim .gitignore` 開啟文字編輯器。
* Step 2：將要忽略的檔案名稱編輯至`.gitignore`。

--------------------------------------------------------------------------------

## Git 的平行時空：branch

由上述的例子來說，人生若是時常走歪路，就必須不斷地回到過去改寫歷史（建立新的 Commit ），而 branch 可以理解成 **建立一個新的平行時空！**，在新的宇宙中繼續往正確的道路前進，而舊宇宙則依舊進行修改，最後再將所有宇宙合併，去蕪存菁。

與 branch 相關的指令：

1. `git branch <branch名稱>`：**建立一個新的 branch**

2. `git branch -v`：**查看當前所在的 branch**

3. `git branch -d _branch名稱_`：**刪除 branch**

4. `git checkout <branch名稱>`：**切換 branch**

5. `git merge <branch名稱>`：**把 <branch名稱> 合併進來**

* 在 branch-A 中輸入 `git merge branch-Ｂ`就是將 branch-B 合併進 branch-A。

--------------------------------------------------------------------------------

## GitHub

全球最大的工程師交友平台，提供「存放 Git Repository 的服務」 以 GUI 呈現，可以清楚了解專案 Commit 的紀錄等。 

與 GitHub 相關的指令：

1. `git push origin _branch名稱_`：**同步 branch 至 GitHub 平台**

2. `git pull origin _branch名稱_`：**同步 GitHub 至本地**

3. `git clone _SSH網址_`：**從 repository 上複製一份至本地**

* 修改過的檔案只能自己存放，無法 push 回 GitHub。
