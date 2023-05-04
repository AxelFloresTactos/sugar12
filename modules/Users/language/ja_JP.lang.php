<?php
/*
 * Your installation or use of this SugarCRM file is subject to the applicable
 * terms available at
 * http://support.sugarcrm.com/Resources/Master_Subscription_Agreements/.
 * If you do not agree to all of the applicable terms or do not have the
 * authority to bind the entity as an authorized representative, then do not
 * install or use this SugarCRM file.
 *
 * Copyright (C) SugarCRM Inc. All rights reserved.
 */
/*********************************************************************************

 * Description:	Defines the English language pack for the base application.
 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc.
 * All Rights Reserved.
 * Contributor(s): ______________________________________..
 ********************************************************************************/

$mod_strings = array (
	'LBL_ASSIGN_PRIVATE_TEAM'			=> '(保存時のプライベートチーム)',
	'LBL_ASSIGN_TEAM'					=> 'チームにアサイン',
	'LBL_DEFAULT_TEAM_TEXT'				=> 'レコードにデフォルトで表示されるチームは自分が所属しているチームです。',
	'LBL_DEFAULT_TEAM'					=> 'デフォルトチーム',
	'LBL_LIST_DESCRIPTION'				=> '詳細',
	'LBL_MY_TEAMS'						=> '私のチーム',
	'LBL_PRIVATE_TEAM_FOR'				=> 'プライベートチーム',
	'LNK_EDIT_TABS'						=> 'タブ編集',
	'NTC_REMOVE_TEAM_MEMBER_CONFIRMATION'	=> '本当にこの従業員をメンバーからはずしてよいですか？',
	'LBL_TEAMS'							=> 'チーム',
	'LBL_TEAM_UPLINE'					=> 'メンバーの上司',
	'LBL_TEAM_UPLINE_EXPLICIT'			=> 'メンバー',
    'LBL_TEAM_MEMBERSHIP'               => 'チームメンバーシップ',
    'LBL_TEAM_SET'                      => 'チームセット',
    'LBL_DELETE_USER_CONFIRM'           => 'ユーザが削除されると従業員レコードも削除されます。また、そのユーザを使用したワークフロやレポートを更新する必要があります。<br/><br/>ユーザの削除は元に戻せません。'.
                                                'Deleting a User record cannot be undone.',
	'LBL_DELETE_GROUP_CONFIRM'          => '本当にこのグループユーザを削除してよいですか？ OKをクリックするとユーザレコードを削除します。OKをクリック後、レコードを別のグループユーザに再アサインする権利が与えられます。',
	'LBL_DELETE_PORTAL_CONFIRM'         => '本当にこのポータルAPIユーザを削除してよいですか？ OKをクリックするとポータルユーザレコードを削除します。',

	'LNK_IMPORT_USERS'                 => 'ユーザのインポート',
	'ERR_DELETE_RECORD'					=> '取引先を削除するにはレコード番号を指定する必要があります。',
	'ERR_EMAIL_INCORRECT'				=> '生成されたパスワードを送信するために正しいEメールアドレスを指定してください。',
	'ERR_EMAIL_NO_OPTS'					=> 'インバウンドEメール用の最適設定が見つかりませんでした。',
	'ERR_ENTER_CONFIRMATION_PASSWORD'	=> '確認のため再度パスワードを入力してください。',
	'ERR_ENTER_NEW_PASSWORD'			=> '新しいパスワードを入力してください。',
	'ERR_ENTER_OLD_PASSWORD'			=> '古いパスワードを入力してください。',
	'ERR_IE_FAILURE1'					=> '[クリックで戻る]',
	'ERR_IE_FAILURE2'					=> 'Eメールアカウントでの接続に問題がありました。設定を確認して再度実施してください。',
	'ERR_IE_MISSING_REQUIRED'			=> "インバウンドEメール設定に必要な情報が不足しています。<br />設定を確認して再実行してください。<br /><br />インバウンドEメールを設定していない場合は、このセクションのすべてのフィールドをクリアしてください。",
	'ERR_INVALID_PASSWORD'				=> '正しいユーザ名とパスワードを指定してください。',
	'ERR_NO_LOGIN_MOBILE'				=> 'このアプリケーションの最初のログインはモバイルではないブラウザかノーマルモードで完了しなければいけません。フルブラウザでアクセスしなおすか以下のノーマルリンクをクリックしてください。ご不便をおかけして申し訳ありません。',
	'ERR_LAST_ADMIN_1'					=> 'ユーザ名「',
	'ERR_LAST_ADMIN_2'					=> '」は最後の管理者ユーザです。少なくとも１人は管理者である必要があります。',
	'ERR_PASSWORD_CHANGE_FAILED_1'		=> 'ユーザパスワードの変更ができませんでした:',
	'ERR_PASSWORD_CHANGE_FAILED_2'		=> '失敗しました。新しいパスワードを設定してください。',
	'ERR_PASSWORD_CHANGE_FAILED_3'		=> '新しいパスワードが正しくありません。',
	'ERR_PASSWORD_INCORRECT_OLD_1'		=> '次のユーザの旧パスワードが正しくありません:',
	'ERR_PASSWORD_INCORRECT_OLD_2'		=> 'パスワードを再入力してください。',
	'ERR_PASSWORD_MISMATCH'				=> 'パスワードがマッチしません。',
	'ERR_PASSWORD_USERNAME_MISSMATCH'   => '正しいユーザ名とEメールアドレスを指定してください。',
	'ERR_PASSWORD_LINK_EXPIRED'         => 'リンクの期限が切れました。新しいリンクを生成してください。',
	'ERR_REENTER_PASSWORDS'				=> '新しいパスワードと確認パスワードが一致しません。',
	'ERR_REPORT_LOOP'					=> 'システムは報告ルートがループしていることを検出しました。ユーザは自身を上司にすることはできません。また、上司がユーザを報告先にすることもできません。',
	'ERR_RULES_NOT_MET'                 => '指定されたパスワードは必要条件に合いません。再度試みてください。',
	'ERR_USER_INFO_NOT_FOUND'			=> 'ユーザ情報が見つかりません',
    'ERR_USER_NAME_EXISTS'              => 'ユーザー名 {0} は既に存在します。重複するユーザー名は使用できません。一意のユーザー名に変更してください。',
    'ERR_USER_MISSING_LICENSE_TYPE'     => '「Sugar Hint」ライセンスは、互換性のある追加のライセンスタイプで保存する必要があります',
	'ERR_USER_IS_LOCKED_OUT'			=> 'ユーザはロックアウトされていますので、既存のパスワードを用いてログインすることはできません。',
    'LBL_EXTERNAL_USER_CANT_LOGIN'      => '外部認証のみユーザは、Sugar認証情報を使ってログインすることは許可されません。',

	'LBL_PASSWORD_SENT'                => 'パスワードが更新されました',
	'LBL_CANNOT_SEND_PASSWORD'         => 'パスワードを送信できません',
	'ERR_EMAIL_NOT_SENT_ADMIN'			=> 'システムは処理を続けることができません。確認してください:',
	'ERR_SMTP_URL_SMTP_PORT'			=> 'SMTPサーバのURLとポート',
	'ERR_SMTP_USERNAME_SMTP_PASSWORD'	=> 'SMTPのユーザ名とパスワード',
	'ERR_RECIPIENT_EMAIL'				=> '受信者のEメールアドレス',
	'ERR_SERVER_STATUS'					=> 'サーバの状態',
	'ERR_SERVER_SMTP_EMPTY'				=> 'システムはユーザにEメールを送信することができません。<a href="index.php?module=EmailMan&amp;amp;action=config">Eメールの設定</a>で送信用の設定を確認してください。',
    'ERR_CREATE_USER_FOR_IDM_MODE'      => '新規ユーザーは<a href="{0}" target="_blank">SugarCloud設定</a>内で作成しなければなりません。',

    'LBL_EMAIL_ADDRESS'                 => 'Eメールアドレス',

	'LBL_ADDRESS_CITY'					=> '住所 市区町村',
	'LBL_ADDRESS_COUNTRY'				=> '住所 国',
	'LBL_ADDRESS_INFORMATION'			=> '住所情報',
	'LBL_ADDRESS_POSTALCODE'			=> '住所 郵便番号',
	'LBL_ADDRESS_STATE'					=> '住所 都道府県',
	'LBL_ADDRESS_STREET'				=> '住所 番地',
	'LBL_ADDRESS_STREET_2'				=> '住所２',
	'LBL_ADDRESS_STREET_3'				=> '住所３',
	'LBL_ADDRESS'						=> '住所',
	'LBL_ADMIN_USER'					=> 'システム管理者ユーザ',

	'LBL_ADMIN_DESC'					=> 'ユーザはチーム権限の設定に関わらずシステム管理のページとすべてのレコードにアクセスできます。',
	'LBL_REGULAR_DESC'					=> 'ユーザはチーム権限と役割の設定に応じてモジュールやレコードにアクセスできます。',
	'LBL_ADMIN'							=> '管理者',
	'LBL_ADVANCED'                     => '詳細設定',
    'LBL_ANY_ADDRESS'                  => '住所:',
	'LBL_ANY_EMAIL'						=> 'Eメール',
	'LBL_ANY_PHONE'						=> '電話番号',
	'LBL_BUTTON_CREATE'					=> '作成',
	'LBL_BUTTON_EDIT'					=> '編集',
	'LBL_CALENDAR_OPTIONS'				=> 'カレンダーオプション',
	'LBL_CHANGE_PASSWORD'               => 'パスワード変更',
	'LBL_CHANGE_SYSTEM_PASSWORD'		=> '新しいパスワードを指定してください。',
	'LBL_CHANGE_PASSWORD_TITLE'         => 'パスワードの変更',
    'LBL_CHOOSE_A_KEY'					=> '許可なしにカレンダーが公開されないようにキーを選択します。',
    'LBL_NO_KEY'                        => 'キーは設定しません。発行するにキーを設定する必要があります。',
	'LBL_CHOOSE_WHICH'					=> 'ナビゲーションバーからアクセス可能なモジュールを選択してください。モジュールの表示順も設定することができます。',
	'LBL_CITY'							=> '市区町村',

	'LBL_CLEAR_BUTTON_TITLE'			=> 'クリア',


	'LBL_CONFIRM_PASSWORD'				=> 'パスワードの確認',
	'LBL_CONFIRM_REGULAR_USER'			=> 'ユーザのタイプをシステム管理者から一般ユーザに変更しました。変更を保存すると、ユーザはシステム管理者としての権限を失います。\n\n「OK」をクリックして処理を進めるか\n「キャンセル」をクリックしてレコードに戻ってください。',
	'LBL_COUNTRY'						=> '国',
	'LBL_CURRENCY_TEXT'					=> '新しいレコードを作成する際にデフォルトで表示される通貨を選択してください。この通貨は商談一覧で金額カラムに表示される通貨となります。',
	'LBL_CURRENCY'						=> '通貨',
	'LBL_CURRENCY_EXAMPLE'				=> '通貨表示のサンプル',
	'LBL_SYSTEM_SIG_DIGITS'				=> 'システムの重要な数字',
	'LBL_SYSTEM_SIG_DIGITS_DESC' 		=> '小数点以下の桁数は、レポートの通貨と平均など、システム全体の小数などのために表示します。',
    'LBL_CURRENCY_SHOW_PREFERRED'       => 'ユーザー指定通貨の表示',
    'LBL_CURRENCY_SHOW_PREFERRED_TEXT'  => 'リストおよびレコードビューで基本通貨をユーザーが指定した通貨に変換します。',
    'LBL_CURRENCY_CREATE_IN_PREFERRED' => '設定された通貨の単位で商談品目を作成します',
    'LBL_CURRENCY_CREATE_IN_PREFERRED_TEXT' => '商品カタログで使用されている通貨とユーザーが設定した通貨が異なる場合、商品カタログから商談に追加された商談品目は、ユーザーが設定した通貨に換算されます。',
	'LBL_NUMBER_GROUPING_SEP'			=> '千単位の桁区切り',
	'LBL_NUMBER_GROUPING_SEP_TEXT'		=> '千単位の桁区切り文字を指定してください。',
	'LBL_DECIMAL_SEP'					=> '小数点シンボル',
	'LBL_DECIMAL_SEP_TEXT'				=> '小数点の区切り文字です。',
	'LBL_FDOW'					=> '週の最初の日',
	'LBL_FDOW_TEXT'				=> '週単位、月単位、年単位のビューで表示される最初の日です。',
	'LBL_DATE_FORMAT_TEXT'				=> '日付スタンプ用のフォーマットを設定してください。',
	'LBL_DATE_FORMAT'					=> '日付フォーマット',
	'LBL_DEFAULT_SUBPANEL_TITLE'		=> 'ユーザ',
	'LBL_DEPARTMENT'					=> '部署',
	'LBL_DESCRIPTION'					=> '詳細',
	'LBL_DISPLAY_TABS'					=> '表示タブ',
	'LBL_DOWNLOADS'                    => 'ダウンロード',
	'LBL_DST_INSTRUCTIONS'				=> '(+DST) は、夏時間が設定されていることを示しています',
	'LBL_EDIT_TABS'						=> 'ナビゲーションバーのモジュールを選択',
	'LBL_EDIT'							=> '編集',
	'LBL_USER_HASH'						=> 'パスワード',
	'LBL_AUTHENTICATE_ID'				=> '認証ID',
	'LBL_ACCOUNT_NAME'					=> 'アカウント名',
	'LBL_USER_PREFERENCES'				=> 'ユーザ設定',
	'LBL_EXT_AUTHENTICATE'				=> '外部認証',
	'LBL_EMAIL_OTHER'					=> 'Eメール2',
	'LBL_EMAIL'							=> 'Eメールアドレス',
	'LBL_EMAIL_CHARSET'					=> '送信メールの文字コード',
	'LBL_EMAIL_EDITOR_OPTION'			=> '作成フォーマット',
	'LBL_EMAIL_GMAIL_DEFAULTS'			=> 'Gmail &#153; のデフォルト設定を埋め込む',
	'LBL_EMAIL_LINK_TYPE'				=> 'Eメールクライアント',

    'LBL_EMAIL_LINK_TYPE_HELP'			=> '<b>SugarEメールクライアント: </b>SugarCRMのEメールクライアントからEメールを送信します。<br><b>外部Eメールクライアント: </b>Microsoft Outlookなど、SugarCRM以外のEメールクライアントを用いてEメールを送信します。',

    'LBL_EMAIL_NOT_SENT'                => 'システムは処理を継続することができません。システム管理者に連絡してください。',
    'LBL_EMAIL_PROVIDER'               => 'Eメールプロバイダ',
	'LBL_EMAIL_SHOW_COUNTS'				=> 'Eメール件数を表示？',
	'LBL_EMAIL_SIGNATURE_ERROR1'		=> 'この署名には名前が必要です。',
    'LBL_EMAIL_SMTP_SSL'				=> 'SMTP over SSLを有効',
    'LBL_EMAIL_TEMPLATE_MISSING'            => 'パスワードをユーザに送信するためのテンプレートが選択されていません。パスワード管理ページでテンプレートを選択してください。',
    'LBL_EMPLOYEE_STATUS'				=> '従業員のステータス',
    'LBL_EMPLOYEE_INFORMATION'         => '従業員情報',
	'LBL_ERROR'							=> 'エラー',
	'LBL_EXPORT_CHARSET'				=> 'エクスポート時の文字コード',
	'LBL_EXPORT_CHARSET_DESC'			=> '適切な文字コードを選択してください（vCardもしくはcsvエクスポート）。',
	'LBL_EXPORT_DELIMITER'				=> 'エクスポート時の区切り文字',
	'LBL_EXPORT_DELIMITER_DESC'			=> 'エクスポートデータの区切り文字を指定します。',
	'LBL_FAX_PHONE'						=> 'ファックス',
	'LBL_FAX'							=> 'ファックス',
	'LBL_FIRST_NAME'					=> '名',
    'LBL_GENERATE_PASSWORD_BUTTON_KEY'  => 'G',
    'LBL_SYSTEM_GENERATED_PASSWORD'     =>'システムが生成したパスワード',
    'LBL_GENERATE_PASSWORD_BUTTON_LABEL'   => 'パスワードのリセット',
    'LBL_GENERATE_PASSWORD_BUTTON_TITLE'   => 'パスワードのリセット [Alt+G]',
    'LBL_GENERATE_PASSWORD'             => 'パスワードのリセット',
	'LBL_GROUP_DESC'					=> 'グループユーザとして振る舞います。このユーザはSugarのWeb画面からログインすることができません。このユーザはインバウンドEメールをグループにアサインするためだけに利用されます。',
	'LBL_GROUP_USER_STATUS'				=> 'グループユーザ',
	'LBL_GROUP_USER'					=> 'グループユーザ',
	'LBL_HIDE_TABS'						=> '非表示タブ',
	'LBL_HOME_PHONE'					=> '電話 (自宅):',
	'LBL_INBOUND_TITLE'					=> '取引先情報',
	'LBL_IS_ADMIN'						=> '管理者',
	'LBL_LANGUAGE'						=> '言語',
	'LBL_LAST_NAME'						=> '姓',
    'LBL_LAST_NAME_SLASH_NAME'			=> '姓/名',
    'LBL_LAYOUT_OPTIONS'                => 'レイアウトオプション',
	'LBL_LDAP'							=> 'LDAP',
	'LBL_LDAP_AUTHENTICATION'			=> 'LDAP認証',
	'LBL_LIST_ACCEPT_STATUS'			=> '出欠確認',
	'LBL_LIST_ADMIN'					=> '管理',
	'LBL_LIST_DEPARTMENT'				=> '部署',
	'LBL_LIST_EMAIL'					=> 'Eメール',
	'LBL_LIST_FORM_TITLE'				=> 'ユーザ',
	'LBL_LIST_GROUP'					=> 'グループ',
	'LBL_LIST_LAST_NAME'				=> '姓',
	'LBL_LIST_MEMBERSHIP'				=> 'メンバーシップ',
	'LBL_LIST_NAME'						=> '名前',
	'LBL_LIST_PRIMARY_PHONE'			=> '電話',
	'LBL_LIST_PASSWORD'					=> 'パスワード',
	'LBL_LIST_STATUS'					=> 'ステータス',
	'LBL_LIST_TITLE'					=> '職位',
	'LBL_LIST_USER_NAME'				=> 'ユーザ名',
	'LBL_LOCALE_DEFAULT_NAME_FORMAT'	=> '名前の表記フォーマット',
	'LBL_LOCALE_DESC_FIRST'				=> '[名]',
	'LBL_LOCALE_DESC_LAST'				=> '[姓]',
	'LBL_LOCALE_DESC_SALUTATION'		=> '[敬称]',
	'LBL_LOCALE_DESC_TITLE'				=> '[タイトル]',
	'LBL_PICTURE_FILE'					=> '写真',
	'LBL_LOCALE_EXAMPLE_NAME_FORMAT'	=> '例',
	'LBL_LOCALE_NAME_FORMAT_DESC'		=> '氏名を表示する形式を指定してください。',
	'LBL_LOCALE_NAME_FORMAT_DESC_2'	=> '<i>"s" 敬称<br>"f" 名<br>"l" 姓</i>',
    'LBL_SAVED_SEARCH'                  => 'レイアウトオプション',
	// LOGIN PAGE STRINGS
	'LBL_LOGIN_BUTTON_KEY'				=> 'L',
	'LBL_LOGIN_BUTTON_LABEL'			=> 'ログイン',
	'LBL_LOGIN_BUTTON_TITLE'			=> 'ログイン [Alt+L]',
	'LBL_LOGIN_WELCOME_TO'				=> 'ようこそ',
	'LBL_LOGIN_OPTIONS'					=> 'オプション',
    'LBL_LOGIN_FORGOT_PASSWORD'         => 'パスワードをお忘れですか？',
    'LBL_LOGIN_SUBMIT'      		    => '送信',
    'LBL_LOGIN_ATTEMPTS_OVERRUN'        => 'ログインの失敗が最大値を超えました。',
    'LBL_LOGIN_LOGIN_TIME_ALLOWED'      => '再度ログインできるのは',
    'LBL_LOGIN_LOGIN_TIME_DAYS'     	=> '日後です。',
    'LBL_LOGIN_LOGIN_TIME_HOURS'    	=> '時間後です。',
    'LBL_LOGIN_LOGIN_TIME_MINUTES'      => '分後です。',
   	'LBL_LOGIN_LOGIN_TIME_SECONDS'      => '秒後です。',
    'LBL_LOGIN_ADMIN_CALL'              => 'システム管理者に連絡してください。',
    'ERR_FOR_IDM_MODE_GMP_REQUIRED'     =>
        'IDMモードのOpenID Connect (OIDC)を使用した認証の場合は、GMP PHPエクステンションをインストールしてください。',
	// END LOGIN PAGE STRINGS
    'LBL_LOGGED_OUT_1' => 'ログアウトされました。再ログインするにはクリックしてください。',
    'LBL_LOGGED_OUT_2' => 'ここ',
    'LBL_LOGGED_OUT_3' => '.',
	'LBL_MAIL_FROMADDRESS'				=> '返信先(Reply-To)のアドレス',
	'LBL_MAIL_FROMNAME'					=> '返信先(Reply-To)の名前',
	'LBL_MAIL_OPTIONS_TITLE'			=> 'Eメール設定',
	'LBL_MAIL_SENDTYPE'					=> 'メール送信エージェント',
	'LBL_MAILMERGE_TEXT'				=> 'メールマージを有効にします。メールマージを使用するには管理者がシステム設定で有効にする必要があります。',
	'LBL_MAILMERGE'						=> 'メールマージ',
	'LBL_MAX_TAB'						=> 'タブの数',
    'LBL_MAX_TAB_DESCRIPTION'           => 'オーバーフローメニュー直前まで上部に表示されるタブ数を指定します。',
    'LBL_MAX_SUBTAB'                    => 'サブタブの数',
    'LBL_MAX_SUBTAB_DESCRIPTION'        => 'オーバーフローメニュー直前までに表示されるタブあたりのサブタブ数を指定します。',
	'LBL_MESSENGER_ID'					=> 'IM名',
	'LBL_MESSENGER_TYPE'				=> 'IMタイプ',
	'LBL_MOBILE_PHONE'					=> 'モバイル',
	'LBL_MODIFIED_BY'                  =>'更新者',
	'LBL_CREATED_BY_NAME' => '作成者', //bug 48978
    'LBL_MODIFIED_BY_ID'               =>'更新者ID',
    'LBL_MODULE_NAME'					=> 'ユーザ',
    'LBL_MODULE_NAME_SINGULAR'				=> 'ユーザ',
	'LBL_MODULE_TITLE'					=> 'ユーザ: ホーム',
    'LBL_NAME'							=> '名前',
    'LBL_SIGNATURE_NAME'                                        =>  '名前',
    'LBL_NAVIGATION_PARADIGM'           => 'ナビゲーション',
    'LBL_USE_GROUP_TABS'                => 'モジュールメニューフィルタ',
	'LBL_NEW_FORM_TITLE'				=> 'ユーザ作成',
	'LBL_NEW_PASSWORD'					=> '新パスワード',
	'LBL_NEW_PASSWORD1'					=> 'パスワード',
	'LBL_NEW_PASSWORD2'					=> 'パスワードの確認',
    'LBL_NEW_USER_PASSWORD_1' => 'パスワードは正常に変更されました。',
	'LBL_NEW_USER_PASSWORD_2'			=> 'システムが生成したパスワードがEメールで送信されました。',
    'LBL_NEW_USER_PASSWORD_3' => 'パスワードは正常に生成されました。',
	'LBL_NEW_USER_BUTTON_KEY'			=> 'N',
	'LBL_NEW_USER_BUTTON_LABEL'			=> 'ユーザ作成',
	'LBL_NEW_USER_BUTTON_TITLE'			=> 'ユーザ作成 [Alt+N]',
	'LBL_NORMAL_LOGIN'					=> 'ノーマルビューへ切り替え',
	'LBL_NOTES'							=> 'メモ',
	'LBL_OFFICE_PHONE'					=> '会社電話',
	'LBL_OLD_PASSWORD'					=> '旧パスワード',
	'LBL_OTHER_EMAIL'					=> '他のEメールアドレス',
	'LBL_OTHER_PHONE'					=> '他の電話番号',
	'LBL_OTHER'							=> 'その他',
	'LBL_PASSWORD'						=> 'パスワード',
    'LBL_PASSWORD_GENERATED'            => '新しいパスワードが生成されました。',
    'LBL_PASSWORD_EXPIRATION_LOGIN'     => 'パスワードの期限が切れました。新しいパスワードを指定してください。',
    'LBL_PASSWORD_EXPIRATION_GENERATED' => 'パスワードはシステムが生成しました。',
    'LBL_PASSWORD_EXPIRATION_TIME'      => 'パスワードの期限が切れました。新しいパスワードを指定してください。',

	'LBL_PSW_MODIFIED'                  => 'パスワードの最終変更日時',
    'LBL_PHONE'							=> '電話',
	'LBL_PICK_TZ_WELCOME'				=> 'Sugarへようこそ。',
	'LBL_PICK_TZ_DESCRIPTION'           => '継続する前に、タイムゾーンを確認してください。以下から適切なタイムゾーンを選択して保存をクリックしてください。タイムゾーンは後でユーザ設定から変更できます。',
	'LBL_PORTAL_ONLY_DESC'				=> 'ポータルAPI用。このタイプのユーザはSugarCRMのWebインターフェースからログインできません。',
	'LBL_PORTAL_ONLY_USER'					=> 'ポータルAPIユーザ',
	'LBL_POSTAL_CODE'					=> '郵便番号',
	'LBL_PRIMARY_ADDRESS'				=> '主となる住所',
	'LBL_PROMPT_TIMEZONE_TEXT'			=> 'ユーザが初めてログインする際にユーザウィザードをプロンプトします。',
	'LBL_PROMPT_TIMEZONE'				=> 'ユーザウィザードプロンプト',
	'LBL_PROVIDE_USERNAME_AND_EMAIL' 	=> 'ユーザ名とEメールアドレスの両方を指定してください。',
    'LBL_FORGOTPASSORD_NOT_ENABLED' 	=> 'これは現在使用不可です。管理者に連絡してください。',
	'LBL_PUBLISH_KEY'					=> 'パブリッシュキー',
    'LBL_SITE_USER_ID' => 'site_url および user_id のハッシュ',
    'LBL_COOKIE_CONSENT' => 'Cookieへの同意',
    'LBL_COOKIE_CONSENT_RECEIVED_ON' => 'Cookieへの同意の受信日',
    'LBL_QUOTAS'                        => 'ノルマ',
    'LBL_FORECASTS'                     => '売上予測',
    'LBL_WORKSHEETS'                    => 'ワークシート',
	'LBL_CALENDARS'                     => 'カレンダー',
    'LBL_SHIFTS'                        => 'シフト',
    'LBL_SHIFT_EXCEPTIONS'              => 'シフトの例外',

    'LBL_RECEIVE_NOTIFICATIONS_TEXT'    => 'レコードがアサインされた場合にEメールで通知されます。',
    'LBL_RECEIVE_NOTIFICATIONS'         => 'アサイン時のEメール',
    'LBL_SEND_EMAIL_ON_MENTION_TEXT'    => 'コメントログ項目で誰かがあなたについて言及したときにメール通知を受信します。',
    'LBL_SEND_EMAIL_ON_MENTION'         => '言及時にEメール通知',
    'LBL_FIELD_NAME_PLACEMENT_TEXT'     => 'レコードビューへのフィールド名の表示方法を指定します。「フィールド値の横」を選択すると、レコードビューがコンパクトに表示されます。',
    'LBL_FIELD_NAME_PLACEMENT'          => 'フィールド名の配置',
    'LBL_ABOVE_FIELD_VALUE'             => 'フィールド値の上',
    'LBL_BESIDE_FIELD_VALUE'            => 'フィールド値の横',
	'LBL_REGISTER'                      => '新規ユーザですか？登録してください。',
	'LBL_REGULAR_USER'                  => '一般ユーザ',
    'LBL_LICENSE_TYPE'                  => 'ライセンスの種類',
    'LBL_LICENSE_SUGAR_SERVE'           => 'Sugar Serve',
    'LBL_LICENSE_SUGAR_SELL'            => 'Sugar Sell',
    'LBL_LICENSE_SUGAR_HINT'            => 'Sugar Hint',
	'LBL_REMINDER_TEXT'					=> '電話・会議のリマインド時間を設定します。',
	'LBL_REMINDER'						=> 'リマインダを表示',
	'LBL_REMINDER_POPUP' => 'ポップアップ',
	'LBL_REMINDER_EMAIL' => 'Eメール',
    'LBL_REMINDER_EMAIL_ALL_INVITEES'   => 'すべての招待者にEメール',
	'LBL_REMOVED_TABS'					=> '管理者がはずしたタブ',
	'LBL_REPORTS_TO_NAME'				=> '上司',
	'LBL_REPORTS_TO'					=> '上司',
    'LBL_REPORTS_TO_ID'                => '報告先上司:',
	'LBL_REQUEST_SUBMIT'				=> '依頼が送信されました。',
	'LBL_RESET_TO_DEFAULT'				=> 'デフォルトに戻す',
	'LBL_RESET_PREFERENCES'				=> 'ユーザ設定をリセット',
    'LBL_RESET_PREFERENCES_WARNING'     => '本当にユーザの設定をすべてリセットしてよいですか？警告: アプリケーションからログアウトになります。',
    'LBL_RESET_PREFERENCES_WARNING_USER' => '本当にこのユーザの設定をすべてリセットしてよいですか？',
    'LBL_RESET_DASHBOARD'               => 'ダッシュボード',
	'LBL_SALUTATION'                    => '敬称',
    'LBL_ROLES_SUBPANEL_TITLE'			=> '役割',
	'LBL_SEARCH_FORM_TITLE'				=> 'ユーザ検索',
	'LBL_SEARCH_URL'					=> '検索場所',
	'LBL_SELECT_CHECKED_BUTTON_LABEL'	=> 'チェックしたユーザを選択',
	'LBL_SELECT_CHECKED_BUTTON_TITLE'	=> 'チェックしたユーザを選択',
	'LBL_SETTINGS_URL_DESC'				=> 'この URL を使用して Microsoft&reg; Outlook&reg; および Microsoft&reg; Word&reg; 向け Sugar プラグインのログイン設定を行います。',
	'LBL_SETTINGS_URL'					=> 'URL',
	'LBL_SIGNATURE'						=> '署名',
	'LBL_SIGNATURE_HTML'				=> 'HTML 署名',
	'LBL_SIGNATURE_DEFAULT'				=> '署名の使用:',
	'LBL_SIGNATURE_PREPEND'				=> '署名を返信引用文の前に挿入?',
	'LBL_SIGNATURES'					=> '署名',
	'LBL_STATE'							=> '都道府県',
	'LBL_STATUS'						=> 'ステータス',
    'LBL_SUBPANEL_LINKS'                => 'サブパネルリンク',
    'LBL_SUBPANEL_LINKS_DESCRIPTION'    => '詳細画面において、サブパネルがグループタブに設定されていない場合、サブパネルへのショートカットリンクを下部に表示します。',
    'LBL_SUGAR_LOGIN'					=> 'Sugarユーザ',
    'LBL_SUPPORTED_THEME_ONLY'          => 'このオプションをサポートするテーマのみに影響',
    'LBL_SWAP_LAST_VIEWED_DESCRIPTION'  => 'チェックすると参照履歴バーをサイドに表示します。チェックしない場合、上部に表示されます。',
    'LBL_SWAP_SHORTCUT_DESCRIPTION'     => 'チェックするとショートカットバーを上部に表示します。チェックしない場合、サイドに表示されます。',
    'LBL_SWAP_LAST_VIEWED_POSITION'     => '参照履歴をサイドに表示',
    'LBL_SWAP_SHORTCUT_POSITION'        => 'ショートカットを上部に表示',
	'LBL_TAB_TITLE_EMAIL'				=> 'Eメール設定',
	'LBL_TAB_TITLE_USER'				=> 'ユーザ設定',
	'LBL_THEME'							=> 'テーマ',
	'LBL_THEME_COLOR'					=> 'カラー',
	'LBL_THEME_FONT'					=> 'フォント',
	'LBL_TIME_FORMAT_TEXT'				=> 'タイムスタンプ用のフォーマットを設定します。',
	'LBL_TIME_FORMAT'					=> '時間フォーマット',
	'LBL_TIMEZONE_DST_TEXT'				=> '夏時間を設定します。',
	'LBL_TIMEZONE_DST'					=> '夏時間',
	'LBL_TIMEZONE_TEXT'					=> 'タイムゾーンを設定します。',
	'LBL_TIMEZONE'						=> 'タイムゾーン',
	'LBL_TITLE'							=> '職位',
	'LBL_USE_REAL_NAMES'				=> 'フルネームの表示',
	'LBL_USE_REAL_NAMES_DESC'			=> 'ユーザのログイン名ではなくフルネームを表示します。',
	'LBL_USER_INFORMATION'				=> 'ユーザ情報',
	'LBL_USER_LOCALE'					=> 'ロケール設定',
	'LBL_USER_NAME'						=> 'ユーザ名',
	'LBL_USER_SETTINGS'					=> 'ユーザ設定',
	'LBL_USER_TYPE'		   			    => 'ユーザタイプ',
	'LBL_USER_ACCESS'                  => 'アクセス権',
	'LBL_USER'							=> 'ユーザ',
	'LBL_WORK_PHONE'					=> '電話 (勤務先)',
	'LBL_YOUR_PUBLISH_URL'				=> '私の場所に公開',
    'LBL_ICAL_PUB_URL'                  => 'iCalインテグレーションURL',
    'LBL_ICAL_PUB_URL_HELP'             => 'この URL を使用して iCal がサポートするアプリケーション内に Sugar のカレンダーを' .
                                           'サブスクライブします。Sugar のカレンダーイベントは外部のカレンダーアプリケーションでは' .
                                           '読み取り専用で、イベントに変更を加えるには、Sugar から' .
                                           '実行する必要があります (例: 会議、電話など)。',
	'LBL_YOUR_QUERY_URL'				=> 'クエリURL',
	'LNK_NEW_USER'						=> 'ユーザ作成',
	'LNK_NEW_PORTAL_USER'				=> 'ポータルAPIユーザ',
	'LNK_NEW_GROUP_USER'				=> 'グループユーザ作成',
	'LNK_USER_LIST'						=> 'ユーザ一覧',
	'LNK_REASSIGN_RECORDS'				=> 'レコードを再アサイン',
    'LBL_PROSPECT_LIST'                 => 'ターゲットリスト',
    'LBL_EMAILS'                        => 'Eメール',
    'LBL_PROCESSING'                    => '実行中',
    'LBL_UPDATE_FINISH'                 => '更新完了',
    'LBL_AFFECTED'                      => '件更新',

    'LBL_USER_NAME_FOR_ROLE'            =>'ユーザ/チーム/役割',
    'LBL_SESSION_EXPIRED'               => 'セッションが切れたため、ログアウトしました。',

    'LBL_TOO_MANY_CONCURRENT'           => '同一ユーザ名で別のセッションがスタートしたため、このセッションを終了します。',
// MASS REASSIGNMENT SCRIPT STRINGS
	'LBL_REASS_SCRIPT_TITLE'			=> 'レコードを再アサイン',
    'LBL_REASS_DESC_PART1'              => 'ユーザにアサインされたすべてのレコードを選択されたモジュールの中で探し、それらを別のユーザーに再アサインすることができます。',
        'LBL_REASS_DESC_PART2'=>                    '再アサインの際に、ワークフローが動作しアサイン通知が送信され、監査が発生するモジュールを選択してください。次へをクリックしてレコードの再アサインを継続してください。再開ボタンをクリックすると最初からやり直します。',
	'LBL_REASS_STEP2_TITLE'				=> 'チームを再アサイン',
	'LBL_REASS_STEP2_DESC'				=> '下に表示されたチームは「チームから」で利用可能ですが、「チームへ」で利用することはできません。「チームから」にあるすべてのレコードはチームが対応付けられていなければ「ユーザへ」で見ることができません。',
	'LBL_REASS_USER_FROM_TEAM'			=> 'チームから:',
	'LBL_REASS_USER_TO_TEAM'			=> 'チームへ:',
	'LBL_REASS_USER_FROM'				=> 'ユーザから:',
	'LBL_REASS_USER_TO'					=> 'ユーザへ:',
	'LBL_REASS_TEAM_TO'					=> 'チーム:',
	'LBL_REASS_TEAMS_GOOD_MSG'			=> '「ユーザへ」は「チームから」のすべてにアクセス権を持っています。対応付ける必要はありません。5秒後に次のページへ遷移します。',
	'LBL_REASS_TEAM_NO_CHANGE'			=> '-- 変更しない --',
	'LBL_REASS_NOT_PROCESSED' 			=> '実行されませんでした:',
	'LBL_REASS_MOD_REASSIGN' 			=> '再アサイン対象モジュール:',
	'LBL_REASS_FILTERS'					=> 'フィルタ',
	'LBL_REASS_NOTES_TITLE'				=> '備考:',
	'LBL_REASS_NOTES_THREE'				=> '自分自身に対するアサインはアサイン通知が行われません。',
	'LBL_REASS_NOTES_ONE'				=> 'ワークフローを実行すると再アサインの処理が遅くなる場合があります。',
	'LBL_REASS_NOTES_TWO'				=> '監査を含まなくても、更新日および更新者は保存されます。',
	'LBL_REASS_VERBOSE_OUTPUT'			=> '冗長な出力(ワークフローを含む再アサインのときのみ)',
        'LBL_REASS_VERBOSE_HELP'                     =>  'ワークフローを含むタスクの再アサインの詳細情報を閲覧するにはこのオプションを選択してください。',
	'LBL_REASS_ASSESSING'				=> '監査対象の',
	'LBL_REASS_RECORDS_FROM'			=> 'からのレコード',
	'LBL_REASS_WILL_BE_UPDATED'			=> '更新されます。',
	'LBL_REASS_WORK_NOTIF_AUDIT' => 'ワークフロー/通知/監査を含む(非常に遅い)',
	'LBL_REASS_SUCCESS_ASSIGN'			=> 'アサインに成功',
	'LBL_REASS_FROM'					=> 'from',
	'LBL_REASS_TO'						=> 'から',
	'LBL_REASS_TEAM_SET_TO'				=> 'に設定されました',
	'LBL_REASS_FAILED_SAVE'				=> '保存に失敗',
	'LBL_REASS_THE_FOLLOWING'			=> '次の',
	'LBL_REASS_HAVE_BEEN_UPDATED'		=> '更新されました:',
    'LBL_REASS_CANNOT_PROCESS'		    => '更新できませんでした:',
	'LBL_REASS_NONE'					=> 'なし',
	'LBL_REASS_UPDATE_COMPLETE'			=> '更新が完了',
	'LBL_REASS_SUCCESSFUL'				=> '成功',
	'LBL_REASS_FAILED'					=> '失敗',
	'LBL_REASS_BUTTON_SUBMIT' 			=> '送信',
	'LBL_REASS_BUTTON_CLEAR' 			=> 'クリア',
	'LBL_REASS_BUTTON_CONTINUE'			=> '次へ >',
    'LBL_REASS_BUTTON_REASSIGN'         => '再アサイン',
	'LBL_REASS_BUTTON_GO_BACK' 			=> '< 戻る',
	'LBL_REASS_BUTTON_RESTART' 			=> '再開する',
	'LBL_REASS_BUTTON_RETURN' 			=> '返り値',
	// js
	'LBL_REASS_CONFIRM_REASSIGN'		=> 'このユーザのレコードすべてを再アサインしますか?',
  'LBL_REASS_CONFIRM_REASSIGN_YES' => 'はい',
  'LBL_REASS_CONFIRM_REASSIGN_NO'    => 'いいえ',
  'LBL_REASS_CONFIRM_REASSIGN_TITLE'    => '再アサイン',
	// end js
	'ERR_REASS_SELECT_MODULE'			=> '前の画面に戻り、少なくとも１つのモジュールを選択してください。',
	'ERR_REASS_DIFF_USERS'				=> 'アサイン先に別のユーザを指定してください。',
// END MASS REASSIGNMENT SCRIPT STRINGS

// INBOUND EMAIL STRINGS
	'LBL_APPLY_OPTIMUMS'				=> '最適設定を実行',
	'LBL_ASSIGN_TO_USER'				=> 'ユーザにアサイン',
	'LBL_BASIC'							=> 'インバウンド設定',
	'LBL_CERT_DESC'						=> 'メールサーバのセキュリティ証明書の認証を強制します。自己署名の場合は使用しないでください。',
	'LBL_CERT'							=> '認証',
	'LBL_FIND_OPTIMUM_KEY'				=> 'f',
	'LBL_FIND_OPTIMUM_MSG'				=> '最適な接続の設定を検出',
	'LBL_FIND_OPTIMUM_TITLE'			=> '最適な設定を検出',
	'LBL_FORCE'							=> 'ネガティブを強制',
	'LBL_FORCE_DESC'					=> 'いくつかのIMAP/POP3サーバは特別なスイッチを必要とします。チェックを入れると接続時にネガティブスイッチを強制します。（例: /notls）',
	'LBL_FOUND_OPTIMUM_MSG'				=> '最適な設定を検出しました。ボタンをクリックすると適用されます。',
	'LBL_EMAIL_INBOUND_TITLE'			=> 'インバウンドEメール設定',
	'LBL_EMAIL_OUTBOUND_TITLE'			=> '送信Eメール設定',
	'LBL_LOGIN'							=> 'ユーザ名',
	'LBL_MAILBOX_DEFAULT'				=> '受信箱',
	'LBL_MAILBOX_SSL_DESC'				=> '接続時にSSLを利用します。これが機能しない場合、PHPが"--with-imap-ssl"オプションでコンパイルされているかどうか確認してください。',
	'LBL_MAILBOX'						=> '監視フォルダ',
	'LBL_MAILBOX_TYPE'					=> '可能なアクション',
	'LBL_MARK_READ_NO'					=> '受信後に削除フラグを立てる',
	'LBL_MARK_READ_YES'					=> '受信後にサーバにEメールを保存',
	'LBL_MARK_READ_DESC'				=> 'メールのインポート後に既読フラグをたて、削除はしない',
	'LBL_MARK_READ'						=> 'メッセージをサーバ上に残す',
	'LBL_ONLY_SINCE_NO'					=> 'いいえ　EメールサーバのすべてのEメールをチェック',
	'LBL_ONLY_SINCE_YES'				=> 'はい',
	'LBL_ONLY_SINCE_DESC'				=> 'POP3を用いる場合、PHPは新規メールと未読メールを区分できません。IMAPをサポートしていない場合、このフラグを設定することにより、最後に受信箱をチェックした時間以降のメッセージのみをチェックできるため、性能を著しく向上させることが可能です。',
	'LBL_ONLY_SINCE'					=> '最後にチェックしたメールから',
	'LBL_PORT'							=> 'メールサーバポート',
	'LBL_SERVER_OPTIONS'				=> 'メールサーバオプション',
	'LBL_SERVER_TYPE'					=> 'メールサーバプロトコル',
	'LBL_SERVER_URL'					=> 'メールサーバアドレス',
	'LBL_SSL'							=> 'SSL利用',
	'LBL_SSL_DESC'						=> 'メールサーバに接続する際にSSLを利用',
	'LBL_TEST_BUTTON_KEY'				=> 't',
	'LBL_TEST_BUTTON_TITLE'				=> 'テスト',
	'LBL_TEST_SETTINGS'					=> '設定のテスト',
	'LBL_TEST_SUCCESSFUL'				=> '接続に成功しました。',
	'LBL_TLS_DESC'						=> 'メールサーバへの接続時にTLS（Transport Layer Security）を利用します。メールサーバがこのプロトコルをサポートしている時のみ利用してください。',
	'LBL_TLS'							=> 'TLS利用',
	'LBL_TOGGLE_ADV'					=> '拡張機能を表示',
    'LBL_OWN_OPPS'                      => '商談なし',
	'LBL_EXTERNAL_AUTH_ONLY'			=> '外部ユーザ認証',
	'LBL_ONLY'							=> 'のみ',
    'LBL_OWN_OPPS_DESC'                 => 'このユーザが商談にアサインされない場合はチェックしてください。ユーザがマネージャでもなく営業活動にも関与しない場合は無視してください。売上予測モジュールで使用されます。',
// END INBOUND EMAIL STRINGS
	'LBL_LDAP_ERROR' => 'LDAPエラー: システム管理者に連絡してください。',
	'LBL_LDAP_EXTENSION_ERROR' => 'LDAPエラー: Extensionsの読み込みに失敗しました。',

// PROJECT RESOURCES STRINGS
	'LBL_USER_HOLIDAY_SUBPANEL_TITLE' => 'ユーザの休日',
	'LBL_RESOURCE_NAME' => '名前',
	'LBL_RESOURCE_TYPE' => 'タイプ',

	'LBL_PDF_SETTINGS'  =>  'PDF設定',
	'LBL_PDF_PAGE_FORMAT'  =>  'ページフォーマット',
	'LBL_PDF_PAGE_FORMAT_TEXT'  =>  'ページのフォーマットです。',
	'LBL_PDF_PAGE_ORIENTATION'  =>  'ページの向き',
	'LBL_PDF_PAGE_ORIENTATION_TEXT'  =>  '',
	'LBL_PDF_PAGE_ORIENTATION_P'  =>  '縦',
	'LBL_PDF_PAGE_ORIENTATION_L'  =>  '横',
	'LBL_PDF_MARGIN_HEADER'  =>  'ヘッダ余白',
	'LBL_PDF_MARGIN_HEADER_TEXT'  =>  '',
	'LBL_PDF_MARGIN_FOOTER'  =>  'フッタ余白',
	'LBL_PDF_MARGIN_FOOTER_TEXT'  =>  '',
	'LBL_PDF_MARGIN_TOP'  =>  '上部余白',
	'LBL_PDF_MARGIN_TOP_TEXT'  =>  '',
	'LBL_PDF_MARGIN_BOTTOM'  =>  '下部余白',
	'LBL_PDF_MARGIN_BOTTOM_TEXT'  =>  '',
	'LBL_PDF_MARGIN_LEFT'  =>  '左側余白',
	'LBL_PDF_MARGIN_LEFT_TEXT'  =>  '',
	'LBL_PDF_MARGIN_RIGHT'  =>  '右側余白',
	'LBL_PDF_MARGIN_RIGHT_TEXT'  =>  '',
	'LBL_PDF_FONT_NAME_MAIN'  =>  'ヘッダと本文のフォント',
	'LBL_PDF_FONT_NAME_MAIN_TEXT'  =>  '選択されたフォントはヘッダと本文のテキストに使用されます。',
	'LBL_PDF_FONT_SIZE_MAIN'  =>  'メインフォントサイズ',
	'LBL_PDF_FONT_SIZE_MAIN_TEXT'  =>  '',
	'LBL_PDF_FONT_NAME_DATA'  =>  'フッタ用フォント',
	'LBL_PDF_FONT_NAME_DATA_TEXT'  =>  '選択されたフォントはフッタのテキストに使用されます。',
	'LBL_PDF_FONT_SIZE_DATA'  =>  'データフォントサイズ',
	'LBL_PDF_FONT_SIZE_DATA_TEXT'  =>  '',
	'LBL_LAST_ADMIN_NOTICE' => '自身を選択しています。自身のユーザタイプやステータスを変更することはできません。',
	'LBL_SMTP_SERVER_HELP' => 'SMTPメールサーバは送信用に利用されます。メールサービスを利用するためにユーザ名とパスワードを指定してください。',
    'LBL_MISSING_DEFAULT_OUTBOUND_SMTP_SETTINGS' => 'システム管理者はデフォルトの送信サーバ情報を設定していません。テストeメールを送信することができません。',
    'LBL_MAIL_SMTPAUTH_REQ'				=> 'SMTP認証を使用？',
	'LBL_MAIL_SMTPPASS'					=> 'SMTPパスワード:',
	'LBL_MAIL_SMTPPORT'					=> 'SMTPポート:',
	'LBL_MAIL_SMTPSERVER'				=> 'SMTPサーバ:',
	'LBL_MAIL_SMTPUSER'					=> 'SMTPユーザ名:',
	'LBL_MAIL_SMTPTYPE'                => 'SMTPサーバタイプ:',
	'LBL_MAIL_SMTP_SETTINGS'           => 'SMTPサーバ仕様',
	'LBL_CHOOSE_EMAIL_PROVIDER'        => 'Eメールプロバイダを選択:',
	'LBL_YAHOOMAIL_SMTPPASS'					=> 'Yahoo!メールパスワード:',
	'LBL_YAHOOMAIL_SMTPUSER'					=> 'Yahoo!メールID:',
	'LBL_GMAIL_SMTPPASS'					=> 'Gmailパスワード:',
	'LBL_GMAIL_SMTPUSER'					=> 'Gmail Eメールアドレス:',
	'LBL_EXCHANGE_SMTPPASS'					=> 'Exchangeパスワード:',
	'LBL_EXCHANGE_SMTPUSER'					=> 'Exchangeユーザ名:',
	'LBL_EXCHANGE_SMTPPORT'					=> 'Exchangeサーバポート:',
	'LBL_EXCHANGE_SMTPSERVER'				=> 'Exchangeサーバ:',
        'LBL_OK'   =>'OK',
        'LBL_CANCEL'    => 'キャンセル',
        'LBL_DELETE_USER' => 'ユーザの削除',
	// Wizard
	'LBL_WIZARD_TITLE' => 'ユーザウィザード',
    'LBL_WIZARD_WELCOME_TAB' => 'ようこそ',
    'LBL_WIZARD_WELCOME_TITLE' => 'SugarCRMへようこそ！',
    'LBL_WIZARD_WELCOME' => '<b>次へ</b>をクリックしてSugarCRMを利用するための基本的な設定を開始してください。',
    'LBL_WIZARD_WELCOME_NOSMTP' => '<b>次へ</b>をクリックしてSugarCRMを利用するための基本的な設定を開始してください。',
    'LBL_WIZARD_NEXT_BUTTON' => '次へ >',
    'LBL_WIZARD_BACK_BUTTON' => '< 戻る',
    'LBL_WIZARD_SKIP_BUTTON' => 'スキップ',
    'LBL_WIZARD_FINISH_BUTTON' => '完了',
    'LBL_WIZARD_FINISH_TAB' => '完了',
    'LBL_WIZARD_FINISH_TITLE' => 'SugarCRMを利用する準備ができました。',

    'LBL_WIZARD_FINISH' => '下部の<b>完了</b>をクリックして設定情報を保存し、SugarCRMの利用を開始してください。',

    'LBL_WIZARD_FINISH1' => '次に何を実施しますか？',
    'LBL_WIZARD_FINISH2' => 'Sugarの利用を開始',
    'LBL_WIZARD_FINISH3' => 'データのインポート',
    'LBL_WIZARD_FINISH4' => 'アプリケーションに外部のソースからデータをインポート',
    'LBL_WIZARD_FINISH5' => 'ユーザ作成',
    'LBL_WIZARD_FINISH6' => 'アプリケーションにアクセスするユーザアカウントを新規作成',
    'LBL_WIZARD_FINISH7' => 'アプリケーション設定を閲覧・設定',
    'LBL_WIZARD_FINISH8' => 'デフォルトのアプリケーション設定を含む詳細設定',
    'LBL_WIZARD_FINISH9' => 'アプリケーション設定',
    'LBL_WIZARD_FINISH10' => 'アプリケーションのフィールドやレイアウトを作成・設定するためにスタジオを使用',
    'LBL_WIZARD_FINISH11' => 'Sugar Universityを開く',
    'LBL_WIZARD_FINISH12' => 'アプリケーションのシステム管理者やエンドユーザとして利用を開始するのに役立つトレーニング資料やクラスを探す',
    'LBL_WIZARD_FINISH14' => 'ドキュメント',
    'LBL_WIZARD_FINISH15' => '製品ガイドとリリースノート',
    'LBL_WIZARD_FINISH16' => 'ナレッジベース',
    'LBL_WIZARD_FINISH17' => 'SugarCRMサポートによる一般的なSugarのタスクやプロセスの実行に伴うティップス',
    'LBL_WIZARD_FINISH18' => 'フォーラム',
    'LBL_WIZARD_FINISH19' => '興味あるトピックを他のユーザやSugarCRMの開発者と話し合うためにSugar Communityに貢献するフォーラム',
    'LBL_WIZARD_FINISH2DESC' => 'アプリケーションホームページを開く',
    'LBL_WIZARD_PERSONALINFO' => 'あなたの情報',
    'LBL_WIZARD_LOCALE' => 'ロケール',
    'LBL_WIZARD_SMTP' => 'Eメールアカウント',
    'LBL_WIZARD_PERSONALINFO_DESC' => 'あなたの情報を提供してください。この情報は他のユーザからも閲覧されます。<br /><span class="required">*</span>マークのフィールドは必須です。',
    'LBL_WIZARD_LOCALE_DESC' => 'タイムゾーンを指定し、日付、通貨、姓名の表記方法を指定してください。',
    'LBL_WIZARD_SMTP_DESC' => 'デフォルトの送信Eメールサーバのユーザ名とパスワードを入力してください。',
	'LBL_EAPM_SUBPANEL_TITLE' => '外部アカウント',

	'LBL_EDITLAYOUT' => 'レイアウト編集' /*for 508 compliance fix*/,
	'LBL_HELP' => 'ヘルプ' /*for 508 compliance fix*/,
	'LBL_CHECKMARK' => 'チェックマーク' /*for 508 compliance fix*/,
	'LBL_THEMEPREVIEW' => 'プレビュー' /*for 508 compliance fix*/,

    'LBL_OAUTH_TOKENS' => 'OAuthトークン',
    'LBL_OAUTH_TOKENS_SUBPANEL_TITLE' => "OAuth接続トークン",

    //For export labels
    'LBL_MODIFIED_USER_ID' => '更新者',
    'LBL_PHONE_HOME' => '電話 (自宅):',
    'LBL_PHONE_MOBILE' => 'モバイル',
    'LBL_PHONE_WORK' => '会社電話',
    'LBL_PHONE_OTHER' => 'その他の電話',
    'LBL_PHONE_FAX' => 'ファックス',
    'LBL_PORTAL_ONLY' => 'ポータルのみのユーザ',
    'LBL_SHOW_ON_EMPLOYEES' => '従業員レコードを表示',
    'LBL_IS_GROUP' => 'グループ',
    'LBL_EXPORT_CREATED_BY' => '作成者ID',

    'LBL_DATE_MODIFIED' => '更新日',
    'LBL_DATE_ENTERED' => '作成日',
    'LBL_DELETED' => '削除済み',
    'LBL_HIDEOPTIONS' => 'オプション非表示',
    'LBL_SHOWOPTIONS' => 'オプション表示',

    'LBL_FILTER_USERS_REPORTS' => 'ユーザーズレポート',
    'LBL_CONTACTS_SYNC' => '取引先担当者',
    'LBL_DETAIL' => 'ユーザプロフィール',

    'LBL_IDM_MODE_NON_EDITABLE_FIELDS_FOR_ADMIN_USER' =>
        '読み取り専用フィールドに変更を加えるには、<a href="%s" target="_blank">SugarCloud 設定</a> にアクセスしてください。
アクセスしたください。',
    'LBL_IDM_MODE_NON_EDITABLE_FIELDS_FOR_REGULAR_USER' =>
        '読み取り専用フィールドを変更したい場合は、Sugar管理者に問い合わせてください。',
    'LBL_IDM_MODE_NON_EDITABLE_FIELDS_FOR_EMPLOYEE_ONLY' =>
        'このユーザは従業員として作成されています。変更するには従業員モジュールに移動してください。',

    'LBL_SYNC_KEY' => '統合同期 ID',

    'LBL_APPEARANCE' => '外観',
    'LBL_APPEARANCE_DESC' => 'Sugarの外観を選択できます。お使いのデバイスの設定に従うか、常にライトモードまたはダークモードを使用するように選択してください。',

    // START USER UTILS STRINGS
    'LNK_COPY_CONTENT' => '内容をコピー',
    'LNK_COPY_USER_SETTINGS' => 'ユーザー設定をコピー',
    'LBL_CONFIG_TITLE_COPY_CONTENT' => '初期設定と内容をコピー',
    'LBL_CLEAR' => 'クリア',
    'LBL_COPY' => 'コピー',
    'LBL_COPY_ITEM' => 'コピー項目：',
    'LBL_USER_PREFENRECES' => 'ユーザー設定',
    'LBL_FILTERS' => 'フィルター',
    'LBL_DASHBOARDS_UTILS' => 'ダッシュボード',
    'LBL_DEFAULT_TEAMS' => 'デフォルトチーム',
    'LBL_FAVORITE_REPORTS' => 'お気に入りレポート',
    'LBL_NAVBAR_SELECTION' => 'ナビゲーションバーのモジュール選択',
    'LBL_NOTIFY_ON_ASSIGNMENT' => 'アサインの通知',
    'LBL_REMINDER_OPTIONS' => 'リマインダーオプション',
    'LBL_SCHEDULED_REPORTING' => 'スケジュールされているレポート作成',
    'LBL_SUGAR_EMAIL_CLIENT' => 'Sugar メールクライアント',
    'LBL_EXISTING_DASHBOARD' => '既存のダッシュボード',
    'LBL_FROM_MODULES' => 'モジュールから',
    'LBL_SELECT_MODULES' => 'モジュールを選択',
    'LBL_USER_UTILS_DATA_ERROR' => 'データを検索できませんでした',
    'LBL_FROM_USERS' => 'ユーザーから',
    'LBL_SELECT_DASHBOARDS' => 'ダッシュボードを選択',
    'LBL_SELECT_FILTERS' => 'フィルターを選択',
    'LBL_EXISTING_FILTERS' => '既存のフィルター',
    'LBL_SELECT_DESTINATION_USERS' => '目的ユーザーを選択',
    'LBL_SELECT_DESTINATION_ROLES' => '目的の役割を選択',
    'LBL_SELECT_DESTINATION_TEAMS' => '目的チームを選択',
    'LBL_ITEMS_TO_REASSIGN' => '再アサインする項目',
    'LBL_PROMPT_TIMEZONE_ON' => 'オン',
    'LBL_PROMPT_TIMEZONE_OFF' => 'オフ',
    'LBL_CONFIG_TITLE_COPY_USER_SETTINGS' => 'ロケール設定の更新',
    'LBL_TO_TEAMS' => 'チームへ',
    'LBL_TO_USERS' => 'ユーザーへ',
    'LBL_TO_ROLES' => '役割へ',
    'LBL_IN_PROGRESS' => '進行中...',
    'LBL_COPY_CONTENT_SUCCESS' => ' - <b>{{commands}}</b>が{{destinationList}}に再アサインされました。',
    'LBL_COPY_CONTENT_COUNT_SUCCESS' => ' - <b>{{commands}}（{{count}}）</b>が{{destinationList}}に再アサインされました。',
    'LBL_COPY_CONTENT_CLONE_MODULES_SUCCESS' =>
        ' - <b>{{commands}}</b>がモジュールで複製されました：{{moduleList}}から{{destinationList}}へ。',
    'LBL_NO_DESTINATION' => 'アサインするユーザー、チーム、役割を選択してください。',
    'LBL_NO_DASHBOARD' => 'アサインするダッシュボードを選択してください。',
    'LBL_NO_MODULES' => '複製するモジュールを選択してください。',
    'LBL_NO_FILTERS' => 'アサインするフィルターを選択してください。',
    'LBL_NO_USER_PREFERENCES' => 'アサインするユーザー基本設定を選択してください。',
    'LBL_NO_USER_SETTINGS' => 'アサインするユーザー設定を選択してください。',
    'LBL_DATA_NOT_RETRIEVED' => 'データが取得されていません',
    'LBL_UTILS_USER_TEAMS_ROLES' => 'ユーザ/チーム/ロール',
    'LBL_LOADING_ITEMS' => 'データ読み込み中...',
    // END USER UTILS STRINGS
); // END STRINGS DEFS
