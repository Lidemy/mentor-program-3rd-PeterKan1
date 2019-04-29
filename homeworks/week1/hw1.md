## 交作業流程

## 寫作業

1. `git branch week` 建立一個寫作業的分支
2. `git checkout week`，在這裡編輯文件檔寫作業，用 vim 或在 GUI 環境下編輯檔案
3. 作業檔案若副檔名為「.md」表示支援 Markdown 語法
4. 邊寫記得`git commit -am XXX`保存版本
5. 隨時使用`git status`查詢檔案狀態 

## 上傳作業

1. `git push origin week` 上傳分支到 GitHub
2. 成功後，在 GitHub 會看到新的分支，點擊綠色的按鈕「Compare & pull request」
3. 輸入標題，在內容部分輸入心得感想或疑問，打完按下綠色按鈕 「Create pull request」
4. 完成後，複製網址列的網址
5. 點擊切換到 [第三期作交作業網址](https://github.com/Lidemy/homeworks-3rd)
6. 點擊分頁標籤「Issues」，進入後點擊綠色按鈕 「New issue」
7. 標題依照規範填寫，內容貼上剛剛複製的網址，下面可以打心得
8. 按下「Submit new issue」
9. 接下來就是老師改作業時間，看是否有要修改的地方
10. 若是看到 issue close了，將遠端上的分支 merge 到 master，表示作業沒有問題
11. 來到 CLI 輸入 `git checkout master`
12. `git pull origin master`，將遠端的 master 下載回到本機
13. `git branch -d week` 將分支刪除，完成作業流程
