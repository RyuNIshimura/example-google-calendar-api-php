## Setup
```bash
composer install
```

Put the service account `key.json` in the Project root. (This project has been changed to `credentials.json`)

### Note
Install only `google / apiclient`

```bash
composer require google/apiclient:^2.9
```

## Execute
```bash
php main.php 
```

## Steps
Step1.Creating a GCP project

Step2.Create a service account → Check Delegation for permissions and copy the client ID (used in step 4)

Step3.Download the service account `key.json` (this project has changed to` credentials.json`)

Step4. Set client ID([ドメイン全体の権限をサービスアカウントに委任する](https://developers.google.com/identity/protocols/oauth2/service-account#delegatingauthority)) on the Google Workspace administrator side.

Step5.OK!

## Document
- [googleapis/google-api-php-client](https://github.com/googleapis/google-api-php-client)
- [Authentication with Service Accounts](https://github.com/googleapis/google-api-php-client#authentication-with-service-accounts)
- [PHP Quickstart](https://developers.google.com/calendar/quickstart/php)
- [Events: insert](https://developers.google.com/calendar/v3/reference/events/insert)
