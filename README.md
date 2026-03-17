# Diary App

![Image](https://github.com/user-attachments/assets/955c0eec-83b1-470a-b902-a7283d0ab68e)

Laravel を用いたシンプルな日記アプリです。  
ログインユーザーが日記を投稿・編集・削除でき、公開設定された日記は他ユーザーも閲覧できます。

---

## 概要


## 開発方針

本アプリは **理解重視の段階的開発**で実装しています。

### Phase 1
まず MVC 構成のみで基本機能を実装

- Route
- Controller
- Model
- Blade

### Phase 2
責務分離のためのリファクタリング

- FormRequest によるバリデーション分離
- Policy による認可処理
- 必要に応じて Service 層導入

### Phase 3
コード品質改善

- Laravel Pint / PHP CS Fixer
- PHPStan / Larastan

---

## 機能一覧

### 認証機能
- ユーザー登録
- ログイン
- ログアウト

### 日記機能（ログインユーザー）
- 自分の日記一覧
- 日記作成
- 日記編集
- 日記削除

### 公開機能
- 公開日記一覧
- 公開日記詳細表示

---

## 使用技術

- PHP
- Laravel
- MariaDB
- Nginx
- AWS（EC2 / RDS）※予定

---

## ER図

<img width="200" height="400" alt="ER図" src="https://github.com/user-attachments/assets/c62e7d7b-090d-4598-957f-854a1875b357" />

---

## 画面遷移図

<img width="400" height="200" alt="画面遷移図" src="https://github.com/user-attachments/assets/93f114e9-a535-41bf-bb1d-d2b4b1a3289b" />

---
