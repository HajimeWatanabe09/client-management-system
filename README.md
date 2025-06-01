# クライアント管理システム構築デモ（Windows Server + Apache + PHP/MySQL + AD DS）

このリポジトリは、**Windows Server 環境と Webアプリケーション構成（Apache + PHP + MySQL）を用いたクライアント管理システムの構築デモ**です。  
ITインフラ構築、ユーザーアカウント管理、Webフォームの作成・運用といったスキルを実証することを目的とし、**転職活動用ポートフォリオ**として設計しています。

---

## 📌 概要

- 仮想環境（Hyper-V）上に Windows Server 2022 を構築
- Active Directory によるユーザーアカウントの集中管理とポリシー制御（GPO）
- Apache + PHP + MariaDB による社内向けWebフォームの実装
- GitHub 上で構成・コード・動作確認の履歴を公開

---

## 🖼️ システム構成図

### 🔹① 処理構造の全体像（3層構造）

<<<<<<< HEAD
![システム構成図（3層構造）](docs/system_diagram_3layer.png)
=======
この図は、本システムが「ユーザー層」「アプリケーション層」「データベース層」で役割分担されていることを示しています。処理の流れを明確に把握できるよう、典型的な三層アーキテクチャに基づいて構成しています。
>>>>>>> 226c1e3 (READMEを整理し、構成図を追加)

<img src="docs/system_diagram_3layer.png" width="70%">

---

### 🔹② 実装要素と構成（アイコン形式）

こちらは、実際に構築したシステム内の**構成要素（ADサーバー、Webサーバー、DB、クライアントPCなど）とその関係性**を、視覚的に把握できるようにした図です。  
ITインフラの全体像をイメージしやすいよう、各要素をアイコンで表現しています。

<img src="docs/system-diagram-icons.png" width="70%">

---

## ⚙️ システム構成

| コンポーネント | 内容 |
|----------------|------|
| OS | Windows Server 2022 |
| Webサーバー | Apache 2.4.58（XAMPP） |
| PHP | 8.2.12 |
| DB | MariaDB 10.4.32（MySQL互換） |
| その他 | Active Directory, PowerShell, Git |

---

## 📁 ディレクトリ構成

| ディレクトリ | 内容 |
|--------------|------|
| `user-portal/` | PHPフォーム一式（ユーザー登録・一覧表示） |
| `server-config/` | Apache, PHP, MySQL の初期設定スクリプトなど |
| `ad-config/` | Active Directory用 PowerShellスクリプト（ユーザー登録・GPO適用） |
| `docs/` | スクリーンショット・構成図 |
| `operations-log.md` | 操作ログや動作検証の補足記録 |
| `.gitignore` | Gitで追跡しないファイルを定義 |

---

## 🖥️ スクリーンショット

| 表示内容 | ファイル名 |
|----------|------------|
| ユーザー登録フォーム画面 | `docs/ss_php_register_form_display.jpg` |
| 登録処理画面（編集後） | `docs/ss_php_register_submit_edit.jpg` |
| ユーザー一覧表示画面 | `docs/ss_php_user_list_display.jpg` |

---

## ✅ 動作確認項目

- Apache/PHPの動作確認：`phpinfo()` による確認済み
- フォーム入力 → DB登録処理が正常に完了することを確認
- クライアントPC（ドメイン参加済）からのログオン成功を確認済み

---

## ▶️ 実行手順（任意で再現可能）

1. `register.php` にブラウザでアクセス → ユーザー情報を入力  
2. `register_submit.php` にて登録 → `list.php` にユーザーが一覧表示されることを確認  
3. 登録された情報は `userdb.users` テーブルに格納（初期スキーマは `server-config/mysql-init.sql` を参照）

---

## 📎 備考

- 本システムは、XAMPP 上でのローカル運用を前提とした設計です
- 実務経験の補足資料として、検証しやすい最小限の構成で構築しています

---

## 🗂️ ライセンス・利用

本リポジトリはポートフォリオ提出を目的としており、**複製・再利用・改変は自由**です。
