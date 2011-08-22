<?php

//------------------------------------------------------------------------------
//
//  eTraxis - Records tracking web-based system
//  Copyright (C) 2009-2010  Artem Rodygin
//
//  This program is free software: you can redistribute it and/or modify
//  it under the terms of the GNU General Public License as published by
//  the Free Software Foundation, either version 3 of the License, or
//  (at your option) any later version.
//
//  This program is distributed in the hope that it will be useful,
//  but WITHOUT ANY WARRANTY; without even the implied warranty of
//  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
//  GNU General Public License for more details.
//
//  You should have received a copy of the GNU General Public License
//  along with this program.  If not, see <http://www.gnu.org/licenses/>.
//
//------------------------------------------------------------------------------

/**
 * Localization
 *
 * This module contains prompts translated in Japanese.
 *
 * @package Engine
 * @subpackage Localization
 * @author Masayoshi Ootsuka
 */

$resource_japanese = array
(
    RES_SECTION_ALERTS =>
    /* 200 */
    '必須と書かれている項目は全て記入してください。',
    'デフォルトの値は %1 から %2 の範囲で指定できます。',
    'アカウントは無効化されています。',
    'アカウントはロックアウトされています。',
    '無効なユーザー名です。',
    '入力されたユーザーの名前は既に存在しています。',
    '無効なEメールアドレスです。',
    'パスワードが一致しません。',
    'パスワードは最低 %1 文字以上である必要があります。',
    '入力されたプロジェクトの名前は既に存在しています。',
    /* 210 */
    '入力されたグループの名前は既に存在しています。',
    '入力されたテンプレートの名前、または接頭辞は既に存在しています。',
    '入力されたステータスの名前、または略称は既に存在しています。',
    '入力されたフィールドの名前は既に存在しています。',
    '無効な数値です。',
    '数値の範囲は %1 から %2 の間で指定できます。',
    '値 %1 は、 %2 から %3 の範囲で指定できます。',
    '最大値は最小値よりも大きい必要があります。',
    'アップロードするファイルの容量が、"php.ini"内の"upload_max_filesize"ディレクティブの指定を超えています。',
    'ファイルサイズが %1 キロバイト以上のファイルはアップロードできません。',
    /* 220 */
    'アップロードされたファイルは、部分的にのみアップロードされています。',
    'アップロードされているファイルはありません。',
    '一時使用フォルダが見つかりません。',
    '入力された添付ファイル名は既に存在しています。',
    'レコードがみつかりません。',
    '入力されたフィルタの名前は既に存在しています。',
    '無効な日付の値です。',
    '日付の値は %1 から %2 の範囲で指定できます。',
    '無効な時間の値です。',
    '時間の値は %1 から %2 の範囲で指定できます。',
    /* 230 */
    '入力された購読の名前は既に存在しています。',
    '入力されたリマインダの名前は既に存在しています。',
    'リマインダの送信に成功しました。',
    '入力されたビューの名前は既に存在しています。',
    NULL,
    'ディスクへのファイルの書き込みに失敗しました。',
    'ファイルのアップロードは拡張子の制限で停止されました。',
    'JavaScriptを有効にする必要があります。',
    'これは自動生成されたメッセージです。このメールには返信しないでください。',
    NULL,
    /* 240 */
    NULL,
    'ビューは少なくとも %1 個以上ある必要があります。',
    '値 "%1" はフォーマット検査に失敗しました。',
    'ユーザーは認証されていません。',
    '不明なユーザー名または誤ったパスワードです。',
    '不明なエラー。',
    'XML パーサ エラー。',

    RES_SECTION_CONFIRMS =>
    /* 300 */
    '選択された全てのビューを削除してよろしいですか？',
    'アカウントを削除してよろしいですか？',
    'プロジェクトを削除してよろしいですか？',
    'グループを削除してよろしいですか？',
    'テンプレートを削除してよろしいですか？',
    'ステータスを削除してよろしいですか？',
    'フィールドを削除してよろしいですか？',
    NULL,
    'このレコードを再開してよろしいですか？',
    'このレコードにアサインしてよろしですか？',
    /* 310 */
    '選択された全てのフィルタを削除してよろしいですか？',
    '選択された全ての購読を削除してよろしいですか？',
    'このリマインダを送信してよろしいですか？',
    'リマインダを削除してよろしですか？',
    '終了してログアウトしますか？',
    'レコードを削除してよろしいですか？',

    RES_SECTION_PROMPTS =>
    /* 1000 */
    '日本語',
    'ログイン',
    'OK',
    'キャンセル',
    '保存',
    '戻る',
    '次へ',
    '作成',
    '変更',
    '削除',
    /* 1010 */
    'レコード',
    'アカウント',
    'プロジェクト',
    'パスワードの変更',
    'ステータス "%1" のフィールド',
    'なし',
    '合計:',
    'テーマ',
    'アカウント情報',
    'ユーザー名',
    /* 1020 */
    'フルネーム',
    'Eメール',
    'デフォルト',
    '管理者',
    'ユーザー',
    '詳細',
    'パスワード',
    '確認',
    '無効',
    'ロック済み',
    /* 1030 */
    '新規アカウント',
    'アカウント "%1"',
    'プロジェクト情報',
    'プロジェクト名',
    '開始日',
    '保留中',
    '新規プロジェクト',
    'プロジェクト "%1"',
    'グループ',
    'グループ情報',
    /* 1040 */
    'グループ名',
    '新規グループ',
    'グループ "%1"',
    'メンバー',
    'その他',
    'メンバー',
    'テンプレート',
    'テンプレート情報',
    'テンプレート名',
    '接頭辞',
    /* 1050 */
    '新規テンプレート',
    'テンプレート "%1"',
    'ステータス',
    'ステータス情報',
    'ステータス名',
    '略称',
    'ステータス形式',
    '初期状態',
    '中間状態',
    '最終状態',
    /* 1060 */
    '対応者',
    '変更しない',
    'アサイン',
    '除去',
    '新規ステータス',
    'ステータス "%1"',
    '中間状態を作成',
    '最終状態を作成',
    '遷移',
    '権限',
    /* 1070 */
    '初期状態にする',
    '許可',
    'フィールド',
    'フィールド情報',
    '順序',
    'フィールド名',
    'フィールド形式',
    '数値',
    '文字列',
    '複数行テキスト',
    /* 1080 */
    '必須？',
    'はい',
    'いいえ',
    '最小値',
    '最大値',
    '最大文字長',
    '必須',
    '新規フィールド (ステップ %1/%2)',
    'フィールド "%1"',
    '読み取り権限',
    /* 1090 */
    '書き込み権限',
    '一般情報',
    'ID',
    'プロジェクト',
    'テンプレート',
    '状態',
    '必須対応日数',
    '新規レコード',
    'レコード "%1"',
    'マイ レコード',
    /* 1100 */
    '履歴',
    '対応延期',
    '対応再開',
    'アサイン',
    '状態変更',
    'タイムスタンプ',
    '実施者',
    'レコードは "%1" のステータスで作成されました。',
    'レコードは %1 にアサインされました。',
    'レコードが変更されました。',
    /* 1110 */
    'スタータスは "%1" に変更されました。',
    'レコードは %1 まで中断されます。',
    'レコードが再開されました。',
    'ファイル "%1" が添付されました。',
    'ファイル "%1" が削除されました。',
    'レコードの作成',
    'レコードの変更',
    'レコードの対応延期',
    'レコードの対応再開',
    'アサイン済みレコードの再アサイン',
    /* 1120 */
    'アサイン済みレコードのステータス変更',
    'ファイルの添付',
    '添付ファイルの削除',
    '言語',
    'コメントの追加',
    'コメントが追加されました。',
    'コメントの追加',
    'コメント',
    'ファイルの添付',
    '添付ファイルの削除',
    /* 1130 */
    '添付ファイル',
    '添付ファイル名',
    '添付するファイル',
    '添付ファイル',
    'フィールド無し',
    '必須対応日数',
    'クローズ後編集凍結日数',
    '変更点',
    '古い値',
    '新しい値',
    /* 1140 */
    'チェックボックス',
    'レコード',
    'リスト',
    'リストのアイテム',
    '%1 Kb',
    'フィルタ',
    'フィルタ名',
    '全てのプロジェクト',
    '全てのテンプレート',
    '全てのステータス',
    /* 1150 */
    'レコードの表示',
    '次の作成者のみを表示',
    '次の担当者のみを表示',
    '非クローズのみ表示',
    'タイトル',
    '検索',
    '検索パラメータ',
    '検索結果',
    'Text to be searched',
    'フィールド内の検索',
    /* 1160 */
    'コメント内の検索',
    '状態',
    'アクティブ',
    'レコードの購読',
    'レコードが作成された時に通知する',
    'レコードがアサインされた時に通知する',
    'レコードが変更された時に通知する',
    'ステータスが変更された時に通知する',
    'レコードが対応延期された時に通知する',
    'レコードが対応再開された時に通知する',
    /* 1170 */
    'コメントが追加された時に通知する',
    'ファイルが添付された時に通知する',
    '添付ファイルが除去されたときに通知する',
    '必須',
    '対応中断',
    '締切日',
    'デフォルトの値',
    'オン',
    'オフ',
    '統計',
    /* 1180 */
    'オープンされたレコード',
    '作成数 対 クローズ数',
    '週',
    '件数',
    'コピー(転送)',
    'レコードは "%1" からコピーされました。',
    '終了',
    'レコードが複製された時に通知する',
    '設定',
    '1ページ辺りの最大行数',
    /* 1190 */
    '1ページ辺りのブックマーク表示数',
    'ロック(編集モード)',
    'ロック解除',
    'グループ形式',
    'グローバル',
    'ローカル',
    '構成',
    NULL,
    'Web ルート パス',
    'セキュリティ',
    /* 1200 */
    'パスワードの最小桁数',
    '最大同時ログイン数',
    'ロック タイムアウト時間 (分)',
    'データベース',
    'データベース形式',
    'Oracle',
    'MySQL',
    'Microsoft SQL Server',
    'データベース サーバー名',
    'データベース名',
    /* 1210 */
    'データベース接続ユーザー',
    'Active Directory',
    'LDAPサーバー',
    'ポート番号',
    '検索アカウント',
    'ベースDN',
    '管理者',
    'メール通知',
    '最大サイズ',
    'デバッグ',
    /* 1220 */
    'デバッグ モード',
    '有効 (個人情報を除く)',
    '有効 (全てのデータ)',
    'デバッグ ログ',
    '有効',
    '無効',
    NULL,
    'レコードの読み取りのみ',
    '全て選択',
    '起票者',
    /* 1230 */
    '日付',
    '期間',
    '中断状態のみ表示',
    '購読名',
    'イベント',
    'バージョン %1',
    'ロール',
    '購読する',
    '購読解除',
    'リマインダ',
    /* 1240 */
    'リマインダ名',
    'リマインダのタイトル',
    'リマインダへの添付',
    '新規リマインダ',
    'リマインダ "%1"',
    'リマインダの送信',
    '送信',
    '新規フィルタ',
    'フィルタ "%1"',
    '新規購読',
    /* 1250 */
    '購読 "%1"',
    NULL,
    '"rec#"+番号の形式で指定することで、他のレコードへのリンクを挿入することが可能です (例： "rec#305")。',
    '次のステータスに遷移したもののみ表示',
    'Share with ...',
    'エクスポート',
    '他の人に購読させる',
    '購読済み',
    '%1 のレコードを購読しました。',
    '%1 の購読は解除されました。',
    /* 1260 */
    'CC（同報先）',
    '格納場所',
    'LDAP属性',
    'ビューの一覧',
    NULL,
    'ビュー名',
    '新規ビュー',
    'ビュー "%1"',
    'ビュー設定無し',
    'セット',
    /* 1270 */
    '列の選択',
    NULL,
    NULL,
    NULL,
    NULL,
    '属性',
    '左',
    '中心',
    '右',
    'このサービスは %1 から %2 まで (%3) 使用できません',
    /* 1280 */
    '自分にアサインされた全て',
    '自分で作成した全て',
    NULL,
    NULL,
    'テキスト出力',
    'サブレコード',
    'サブレコードの作成',
    'サブレコードの添付',
    'サブレコードの削除',
    NULL,
    /* 1290 */
    'サブレコード "%1" が追加されました。',
    'サブレコード "%1" が削除されました。',
    'サブレコードの追加権限',
    'サブレコードの除去権限',
    'サブレコードが追加された時に通知する',
    'サブレコードが削除された時に通知する',
    '作成されたレコード',
    'クローズ済みのレコード',
    '機密',
    '機密コメントの追加',
    /* 1300 */
    '機密コメントの追加/削除',
    '機密コメントが追加されました。',
    '親レコード ID',
    '依存関係',
    NULL,
    '下に区切り線を追加する',
    'CSV区切り文字',
    'CSV出力時のエンコード',
    'CSV改行コード',
    NULL,
    /* 1310 */
    'フィルタの有効化',
    'フィルタの無効化',
    NULL,
    NULL,
    NULL,
    NULL,
    NULL,
    NULL,
    NULL,
    '全て展開',
    /* 1320 */
    '全て省略',
    NULL,
    '最終対応',
    'perl互換正規表現でフィールドの値をチェックする',
    '変換するフィールドの値を検索する際のperl互換正規表現',
    'フィールドの値を変換する際のperl互換正規表現',
    'デフォルトの「次の状態」',
    '中断状態',
    '全て表示',
    'アクティブのみ表示',
    /* 1330 */
    'イベント',
    NULL,
    'ゲストとしてアクセス',
    'ありません。',
    'グローバル グループ',
    'ゲスト',
    'インポート',
    'レコードの削除権限',
    NULL,
    'デフォルトの言語',
    /* 1340 */
    'パスワードの有効期限 (日)',
    'セッション有効期限 (分)',
    'LDAPの一覧出力',
    'PostgreSQL',
    'インデックスのリスト',
    '値のリスト',
    '起票日',
    '全て既読にする',
    '登録済み',
    'TLS',
    /* 1350 */
    '圧縮',
    '最終状態',
    'コメント',
    'サイズ',
    '外観',
    'CSV',
    '有効',
    '無効',
    'プレビュー',
    '所有者',
    /* 1360 */
    '全員',
    '既読にマーク',
    '親レコード',
);

?>
