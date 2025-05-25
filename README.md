# クライアント管理システム構築（Windows Server + Apache + PHP/MySQL + AD DS）

## 📌 概要
このリポジトリは、仮想環境上に構築したクライアント管理システムの技術デモです。  
Active Directory、Apache + PHP、MySQL を組み合わせて、社内ユーザー管理業務の一部を再現しています。

## ⚙️ 構成
- Windows Server 2022（AD DS 構築済）
- PHP: 8.2.12 (XAMPP)
- MariaDB: 10.4.32 (MySQL互換)
- Apache: 2.4.58

## 📁 ディレクトリ構成

| ディレクトリ | 内容 |
|--------------|------|
| `user-portal/` | ユーザー登録フォーム（register, submit, list） |
| `server-config/` | Apache, PHP, MySQL 設定ファイル |
| `ad-config/` | PowerShellによるユーザー/GPO構成 |
| `docs/` | スクリーンショット・構成図など |
| `operations-log.md` | 作業記録・補足メモ |
| `.gitignore` | バージョン管理除外ファイル設定 |

## ✅ 確認済み内容
- Apache上での `phpinfo()` 動作確認
- フォームからDBへのユーザー登録・表示の確認
- ドメイン参加済みクライアントPCでのログオン確認

## 📎 備考
本構成はローカル環境（Hyper-V仮想マシン）上で構築されています。
