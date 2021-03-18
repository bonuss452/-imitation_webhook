<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("test");

use Bitrix\Main\Web\HttpClient,
Bitrix\Main\Web\Json;

$url = 'https://appsaratov.ru/bitrix/services/design2u.syncms/webhook_product.php?requestId=111111111111111';

$put_json = array(
	'events' => array(
		0 => array(
			'meta' => array(
				'type' => 'product',
				'href' => 'https://online.moysklad.ru/api/remap/1.2/entity/product/45cbde7e-c697-11ea-0a80-019d00179a4c'
			)
		)
	) 
);

$httpClient = new HttpClient();
$httpClient->setHeader('Content-Type', 'application/json', true);
$httpClient->post($url, Json::encode($put_json) );

echo 'send Request';


require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>