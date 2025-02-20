<?php 

//input validation
    $price = isset($_POST['price']) && is_numeric($_POST['price']) ? $_POST['price'] : 0;
    $quantity = isset($_POST['quantity']) && is_numeric($_POST['quantity']) ? $_POST['quantity'] : 0;
    $membership = isset($_POST['membership']) ? $_POST['membership'] : 'regular';
    $date = isset($_POST['purchase_date']) ? date( 'l', strtotime($_POST['purchase_date'])) : date("l"); 


    if ($price <= 0  || $quantity <= 0){
        die($price . " " . $quantity . " " . "Invalid input. Please enter valid numbers for price and quantity");
    }

//descunt percentage as modification for easy modification
    define('BASIC_DICSOUNT', 10);
    define('TIERED_DISCOUNT_100_500', 5);
    define('TIERED_DISCOUNT_500', 10);
    define('BULK_DISCOUNT_5_10', 5);
    define('BULK_DISCOUNT_10', 10);
    define('SPECIAL_DAY_DISCOUNT',15);
    define('VIP_DISCOUNT', 10);
    

//apply basic disount
$final_price = $price - ( BASIC_DICSOUNT/100 ) * $price;

//tiered discount

    if($price > 100 && $price <= 500){
 
        $final_price -= ( TIERED_DISCOUNT_100_500/100 ) * $final_price;

    }elseif($price > 500){

        $final_price -= (TIERED_DISCOUNT_100_500/100) * $final_price ;

    }

//bulk purchase discount
    if($quantity > 5 && $quantity <= 10){

        $final_price -= ( BULK_DISCOUNT_5_10/100 ) * $final_price;

    }elseif( $quantity > 10 ){

        $final_price -= ( BULK_DISCOUNT_10/100 ) * $final_price;

    }

//special day discount(black friday)

if($date == 'Friday'){
    $final_price -= ( SPECIAL_DAY_DISCOUNT/100 ) * $final_price;
}

//vip discount

if( $membership == 'vip'){

    $final_price -= ( VIP_DISCOUNT/100 ) * $final_price;

}

//ensure price is never negative

    $final_price = max(0, $final_price);
    
    require 'discount.view.php';