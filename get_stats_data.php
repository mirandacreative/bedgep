<?php
    /**
    *
    * Script to get fresh stats data from buyers edge insidetrack
    * and update wordpress front page custom fields with the new data
    *
    **/




    // Load Wordpress context
    require('wp-load.php');



    // Set $post_id to front page's ID
    $post_id = 5;

    
    $url = get_field("json_file", $post_id);

    // Request new data from server
    // $data = file_get_contents($url);
    $ch =  curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_SSLVERSION, 3);
    $data = curl_exec($ch);

    echo '<pre>';
    var_dump(curl_error($ch));
    echo '</pre>';
    

    // Check if request worked
    if ($data !== false){

        // Decode data
        $obj = json_decode($data);

        // get data from object
        $invoicesStart =    ( empty($obj->invoicesStart) )  ? -1 : $obj->invoicesStart;
        $invoicesEnd =      ( empty($obj->invoicesEnd) )    ? -1 : $obj->invoicesEnd;
        $purchasesStart =   ( empty($obj->purchasesStart) ) ? -1 : $obj->purchasesStart;
        $purchasesEnd =     ( empty($obj->purchasesEnd) )   ? -1 : $obj->purchasesEnd;




        // // echo '<pre>';
        // // var_dump($obj);
        // // echo '</pre>'
        // // 
        // echo getcwd();
        // echo $data;
        // echo '<br /><hr><br />';
        // echo $invoicesStart;
        // echo '<br />';
        // echo $invoicesEnd;
        // echo '<br /><hr><br />';
        // echo $purchasesStart;
        // echo '<br />';
        // echo $purchasesEnd;





        $changesMade = false;
        // Update invoicesStart
        if($invoicesStart >= 0){
            $field_key = "invoicesStart";
            $value = $invoicesStart;
            update_post_meta($post_id, $field_key, $value);
            $changesMade = true;
        }
        
        // Update invoicesEnd
        if($invoicesEnd >= 0){
            $field_key = "invoicesEnd";
            $value = $invoicesEnd;
            update_post_meta($post_id, $field_key, $value);
            $changesMade = true;
        }

        // Update purchasesStart
        if($purchasesStart >= 0){
            $field_key = "purchasesStart";
            $value = $purchasesStart;
            update_post_meta($post_id, $field_key, $value);
            $changesMade = true;
        }

        // Update purchasesEnd
        if($purchasesEnd >= 0){
            $field_key = "purchasesEnd";
            $value = $purchasesEnd;
            update_post_meta($post_id, $field_key, $value);
            $changesMade = true;
        }

        // Update statsLastUpdated
        if($changesMade){
            $field_key = "statsLastUpdated";
            $value = time();
            update_post_meta($post_id, $field_key, $value);
        }

        // $fields = get_fields($post_id);
        $fields = get_post_custom($post_id);
        echo "<pre>";
        var_dump( $fields ); 
        echo "</pre>";

    }else{
        // Server request was not succesfull
        echo 'Error getting data';
    }
    
?>