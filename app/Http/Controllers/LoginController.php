<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class LoginController extends Controller 
{
	const CLIENT_ID = 'CLIENT_ID';
	const CLIENT_SECRET = 'CLIENT_SECRET';
	const SCOPES = "openid email offline_access profile User.ReadWrite Files.ReadWrite Mail.ReadWrite Mail.Send";
	const AUTH_URL = "https://login.microsoftonline.com/common/oauth2/v2.0";
	const REDIRECT_URI = 'http://localhost:8000/setLogin';

	public function login()
	{
		$resource = self::AUTH_URL . "/authorize" .
					"?client_id=" . self::CLIENT_ID .
					"&response_type=code" . 
					"&scope=" . self::SCOPES .
					"&redirectUri=" . self::REDIRECT_URI;

		header('Location: ' . $resource);
		die();
	}

	public function setLogin()
	{
		$code = $_GET['code'];
		$body = "grant_type=authorization_code" .
				"&code=" . $code .
				"&scope=" . self::SCOPES .
				"&redirectUri=" . self::REDIRECT_URI .
				"&client_id=" . self::CLIENT_ID .
				"&client_secret=" . self::CLIENT_SECRET;
		
		$curl = curl_init();
		$options = array(CURLOPT_URL => self::AUTH_URL . "/token",
						 CURLOPT_POST => 1,
						 CURLOPT_RETURNTRANSFER => 1,
						 CURLOPT_POSTFIELDS => $body);
		curl_setopt_array($curl, $options);

		$result = json_decode(curl_exec ($curl), true);
		session(['access_token' => $result['access_token']]);

		return redirect()->action('DataController@showUserInfo');
	}
}