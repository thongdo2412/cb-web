<?php
  $json = '{
  	"id": 4169236486,
  	"order_id": 9161736198,
  	"created_at": "2017-12-12T19:41:42-05:00",
  	"note": "",
  	"restock": null,
  	"user_id": 110566534,
  	"processed_at": "2017-12-12T19:41:42-05:00",
  	"refund_line_items": [
  		{
  			"id": 5449646086,
  			"quantity": 1,
  			"line_item_id": 17308254214,
  			"subtotal": 35,
  			"total_tax": 0,
  			"line_item": {
  				"id": 17308254214,
  				"variant_id": 44739029702,
  				"title": "City Lips - 1 Tube",
  				"quantity": 1,
  				"price": "35.00",
  				"sku": "CITYADVCLR-FULL-1x",
  				"variant_title": null,
  				"vendor": "City Beauty",
  				"fulfillment_service": "manual",
  				"product_id": null,
  				"requires_shipping": true,
  				"taxable": true,
  				"gift_card": false,
  				"pre_tax_price": "35.00",
  				"name": "City Lips - 1 Tube",
  				"variant_inventory_management": null,
  				"properties": [
  					{
  						"name": "BT_trans_id",
  						"value": "b5j9tvdg"
  					}
  				],
  				"product_exists": false,
  				"fulfillable_quantity": 0,
  				"grams": 454,
  				"total_discount": "0.00",
  				"fulfillment_status": null,
  				"tax_lines": []
  			}
  		}
  	],
  	"transactions": [
  		{
  			"id": 138249535494,
  			"order_id": 9161736198,
  			"amount": "35.00",
  			"kind": "refund",
  			"gateway": "",
  			"status": "success",
  			"message": "Refunded 35.00 from manual gateway",
  			"created_at": "2017-12-12T19:41:42-05:00",
  			"test": false,
  			"authorization": null,
  			"currency": "USD",
  			"location_id": null,
  			"user_id": null,
  			"parent_id": 10035068934,
  			"device_id": null,
  			"receipt": {},
  			"error_code": null,
  			"source_name": "web"
  		}
  	],
  	"order_adjustments": []
  }';

  $results = json_decode($json, true);
  $subs_id = $results['refund_line_items'][0]['line_item']['properties'][0]['value'];
  $amount = $results['transactions'][0]['amount'];
  var_dump($subs_id);
  var_dump($amount);
  // function verify_webhook($data, $hmac_header)
  // {
  //   $calculated_hmac = base64_encode(hash_hmac('sha256', $data, SHOPIFY_APP_SECRET, true));
  //   return hash_equals($hmac_header, $calculated_hmac);
  // }
  //
  // $hmac_header = $_SERVER['HTTP_X_SHOPIFY_HMAC_SHA256'];
  // $data = file_get_contents('php://input');
  // $verified = verify_webhook($data, $hmac_header);
  // error_log('Webhook verified: '.var_export($verified, true)); //check error.log to see the result



 ?>
