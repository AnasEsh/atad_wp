<?php

function add_acf_fields_to_array($post_id, $a)
{
    // Fetch ACF fields for this product
    $acf_data = get_fields($post_id);
    foreach ($acf_data as $fieldName => $fieldValue) {
        $a[$fieldName] = $fieldValue;
    }
}
// function add_acf_fields_to_product_data($product){
//     return add_acf_fields_to_array($product->get_id(),$product->get_data());
// }