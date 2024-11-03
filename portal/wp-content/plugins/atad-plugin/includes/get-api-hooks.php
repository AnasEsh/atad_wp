<?php

function add_acf_fields_to_products($response, $object, $request)
{
    // Fetch ACF fields for this product
    $acf_data = get_fields($object->get_id());
    foreach ($acf_data as $fieldName => $fieldValue) {
        $response->data[$fieldName] = $fieldValue;
    }
	return $response;
}

// hook to add acf data to response
add_filter('woocommerce_rest_prepare_product_object', 'add_acf_fields_to_products',10,3);

