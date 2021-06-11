## Setup
```bash
composer install
```

サービスアカウントの`credentials.json`をProjectRootにおいてください。

### Note
`google/apiclient`のみインストール

```bash
composer require google/apiclient:^2.0
```

## Execute
```bash
php main.php 
```

## Document
- [googleapis/google-api-php-client](https://github.com/googleapis/google-api-php-client)
- [Authentication with Service Accounts](https://github.com/googleapis/google-api-php-client#authentication-with-service-accounts)
- [PHP Quickstart](https://developers.google.com/calendar/quickstart/php)
- [Events: insert](https://developers.google.com/calendar/v3/reference/events/insert)

## 手順
1.GCPのプロジェクトの作成

2.サービスアカウントの作成 → 権限を委任にチェックし、クライアントIDをコピー(手順4で使う)

3.サービスアカウントの`secrets.json`をダウンロード(このプロジェクトは、`credentials.json`に変更している)

4.Google Workspaceの管理者側で「[ドメイン全体の権限をサービスアカウントに委任する](https://developers.google.com/identity/protocols/oauth2/service-account#delegatingauthority)」を設定する。

5.OK!
