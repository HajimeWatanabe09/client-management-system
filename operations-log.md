# 作業記録・補足メモ

## ✅ 構築環境

| 項目 | 内容 |
|------|------|
| ホストOS | Windows 11 Pro（Hyper-V有効） |
| ゲストOS | Windows Server 2022 |
| ミドルウェア | XAMPP（Apache, PHP, MySQL） |
| 管理方法 | Active Directory（AD DS） + PowerShell（ユーザー/GPO構成） |

---

## 🧭 作業ログ

- 2025/05/23：XAMPP起動成功（Apache/MySQL）
- 2025/05/24：PHPフォーム（register, list）動作確認済
- 2025/05/25：仮想PCからGitHub用ファイルの分類完了
- 2025/05/25：リモートリポジトリ作成

---

## 🛠️ トラブルと対応

### [1] 仮想PCからホストへのファイル共有ができない
- 原因：Hyper-Vの仮想スイッチがプライベート設定
- 対応：外部ネットワークに切り替え + ファイル共有許可で解決

### [2] Apacheがポート競合で起動しない
- SkypeやIISとの競合が原因 → `httpd.conf` の `Listen 8080` に変更

---

## ✏️ 今後の改善案

- `login.php` の追加によるセキュリティ強化
- DBバリデーション処理の追加
- AD連携によるアカウント同期
