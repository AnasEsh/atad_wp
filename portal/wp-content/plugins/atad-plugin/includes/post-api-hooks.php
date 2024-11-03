<?php

add_action("flutter_create_product_request","add_acf_fields_from_request",10,3);



define('ATAD_ACF_GROUP_ID','group_6725b114d8a6f');
function add_acf_fields_from_request($product_id,$request) {
    $fields = acf_get_fields(ATAD_ACF_GROUP_ID);
    $fieldNames=array_map(function($field){return $field['name'];},$fields);
    foreach($fieldNames as $fieldName){
        if(isset($request[$fieldName]))
        update_field($fieldName, $request[$fieldName], $product_id);
    }
}