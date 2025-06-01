# クライアント管理システム構築デモ（Windows Server + Apache + PHP/MySQL + AD DS）

このリポジトリは、**Windows Server 環境と LAMP構成を用いたクライアント管理業務の技術デモ**です。  
ITインフラ構築・アカウント管理・Webフォーム運用のスキルを総合的に証明することを目的とし、応募用ポートフォリオとして構成しています。

---

## 📌 概要

- 仮想環境（Hyper-V）上に Windows Server 2022 を構築
- Active Directory によるユーザー管理と GPO 運用
- Apache + PHP + MariaDB による社内向けフォームの実装
- GitHub リポジトリ上で構成・コード・画面の履歴を公開

---

## 🖼️ システム構成図

本システムは以下により構築されています：

![システム構成図（3層構造）](docs/system_diagram_3layer.png)

- **ユーザー層**（UI）：Webブラウザによるフォーム操作
- **アプリケーション層**：PHPスクリプトによる処理
- **データベース層**：MariaDBによるデータ管理

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
| `user-portal/` | PHPフォーム（register, submit, list） |
| `server-config/` | Apache/PHP/MySQLの設定 |
| `ad-config/` | PowerShellスクリプト（ADユーザー、GPO） |
| `docs/` | スクリーンショット・構成図 |
| `operations-log.md` | 作業補足・検証記録 |
| `.gitignore` | 管理対象外ファイル指定 |

---

## 🖥️ スクリーンショット

| 項目 | ファイル名 |
|------|------------|
| 登録フォーム | `docs/ss_php_register_form_display.jpg` |
| 登録処理 | `docs/ss_php_register_submit_edit.jpg` |
| 一覧画面 | `docs/ss_php_user_list_display.jpg` |

---

## ✅ 機能確認済み内容

- `phpinfo()` による Apache/PHP動作確認
- ユーザー登録フォームからDBへの登録処理
- AD配下クライアントPCからのドメインログオン成功

---

## ▶️ 実行・確認方法（任意）

1. `register.php` にアクセス → ユーザー情報を入力  
2. `register_submit.php` にて登録 → `list.php` で確認  
3. DBは `userdb.users` を使用（構成は `server-config/mysql-init.sql` に記載予定）

---

## 📎 備考

- 本構成は XAMPP 環境上でのローカル動作を前提としています
- 応募用のシステムデモとして、実務経験とスキルを伝えるために最小構成で再現しています

---

## 🗂️ ライセンス・利用

本リポジトリはポートフォリオ目的で公開しており、再利用・改変は自由です。
