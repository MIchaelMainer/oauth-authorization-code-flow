# OAuth2 Authorization Code Flow

Quick example of how to connect to Microsoft's services using the authorization code flow.


## Get Started

1. Register a new app with Microsoft at https://apps.dev.microsoft.com
2. Click "Generate new password" to create an application secret (client secret) and copy it to the clipboard
3. Click "Add Platform" and select "Web". Then, enter the redirect URI (in this example, http://localhost:8000/login)
4. Hit "Save"
5. Paste the application secret into the [LoginController](https://github.com/cbales/oauth-authorization-code-flow/blob/master/app/Http/Controllers/LoginController.php)
6. Insert your client ID (application ID)
7. Run ```composer install``` to install PHP packages
8. Run ```php artisan serve``` to start the server!


## Next Steps
The application will provide you with an access token that can be used to grab resources from Microsoft Graph. You can change the scopes of the data that you request from your users by updating the ```SCOPES``` constant.

You can use this token to query against Graph like this:
```php
curl_setopt($curl, CURLOPT_HEADER, array('Authorization: bearer <token>'));
```

To see more uses of grabbing data from Graph, check out this [PHP Connect Sample](https://github.com/microsoftgraph/php-connect-sample)
