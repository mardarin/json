<?php

/**
* 
*/
class ArrayValue implements JsonSerializable
{	
	public function __construct(array $array)
	{
		$this->array = $array;
	}

	public function jsonSerialize()
	{
		return $this->array;
	}
}

$products = array(
	array(
		"title" => "Phone",
		"price"=> "300p",
		"img" => "http://demo.opencart.com/image/cache/catalog/demo/palm_treo_pro_1-228x228.jpg"
	),
	array(
		"title" => "iPhone",
		"price"=> "300p",
		"img" => "http://demo.opencart.com/image/cache/catalog/demo/iphone_1-228x228.jpg"
	),
	array(
		"title" => "Android",
		"price"=> "300p",
		"img" => "http://demo.opencart.com/image/cache/catalog/demo/htc_touch_hd_1-228x228.jpg"
	),
	array(
		"title" => "Phone",
		"price"=> "300p",
		"img" => "http://demo.opencart.com/image/cache/catalog/demo/palm_treo_pro_1-228x228.jpg"
	),
	array(
		"title" => "iPhone",
		"price"=> "300p",
		"img" => "http://demo.opencart.com/image/cache/catalog/demo/iphone_1-228x228.jpg"
	),
	array(
		"title" => "Android",
		"price"=> "300p",
		"img" => "http://demo.opencart.com/image/cache/catalog/demo/htc_touch_hd_1-228x228.jpg"
	),
	array(
		"title" => "Phone",
		"price"=> "300p",
		"img" => "http://demo.opencart.com/image/cache/catalog/demo/palm_treo_pro_1-228x228.jpg"
	),
	array(
		"title" => "iPhone",
		"price"=> "300p",
		"img" => "http://demo.opencart.com/image/cache/catalog/demo/iphone_1-228x228.jpg"
	),
	array(
		"title" => "Android",
		"price"=> "300p",
		"img" => "http://demo.opencart.com/image/cache/catalog/demo/htc_touch_hd_1-228x228.jpg"
	),
);

echo json_encode(new ArrayValue($products),JSON_UNESCAPED_SLASHES);



