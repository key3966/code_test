<?php
// -------------------------------------------------------------------------------------
// Reverse this number
function reverseNumber() {
    // Fill this function in
}
$number = 75;
echo 57 === reverseNumber($number);
echo "\n";


// -------------------------------------------------------------------------------------
// Build this string
function stringBuilder() {
    // Fill this function in
}
$string1 = "ALEX";
$string2 = "27";
$string3 = "software engineer";
echo "Hi, my name is Alex. I am 27 and my job is a software engineer." === stringBuilder($string1,$string2,$string3);
echo "\n";


// -------------------------------------------------------------------------------------
// Looped String builder
function loopedStringBuilder() {
    // Fill this function in
}
$array = [
    ["id" => 1, "title" => "Tangle Teezer"],
    ["id" => 2, "title" => "Bubo Japan"],
    ["id" => 3, "title" => "War Paint for Men"],
    ["id" => 4, "title" => "Invisibobble"]
];
$formatted = "Shops:1
-----------
1 | Tangle Teezer
2 | Bubo Japan
3 | War Paint for Men
4 | Invisibobble";
echo $formatted === loopedStringBuilder($array);
echo "\n";


// -------------------------------------------------------------------------------------
// Looped Update, Loop through and sum costs of all items with flag = true
function loopedUpdate() {
    // Fill this function in
}
$array = [
    ["flag" => true, "item_name" => "plate", "cost" => 100],
    ["flag" => true, "item_name" => "tshirt-xxl", "cost" => 433],
    ["flag" => false, "item_name" => "ticket", "cost" => 500],
    ["flag" => true, "item_name" => "sticker", "cost" => 10]
];
echo 543 === loopedUpdate($array);
echo "\n";


// -------------------------------------------------------------------------------------
// Validate Input Data, input must be a positive integer, else return false
function validateInput() {
    // Fill this function in
}
echo true === validateInput(4);
echo "\n";
echo false === validateInput("34");
echo "\n";
echo false === validateInput(-22);
echo "\n";
echo false === validateInput(1.897);
echo "\n";

// -------------------------------------------------------------------------------------
// Validate Input Data by looping, input must be array of positive integers. If any values are invalid, return false
function validateLoop() {
    // Fill this function in
}
echo true === validateInput([4, 2, 1, 10]);
echo "\n";
echo false === validateInput([5, 6, -1, 8810]);
echo "\n";


// -------------------------------------------------------------------------------------
// Parse JSON input, return the External ID from the json
function parseJsonSimple() {
    // Fill this function in
}
$json = '{"customer_id":1,"name":"Alex","external_id":123,"created_date":"2021-10-11"}';
echo 123 === parseJsonSimple($json);
echo "\n";


// -------------------------------------------------------------------------------------
// Parse JSON input, return array of items with the Name and Quantity from the order_items
function parseJsonAndLoop() {
    // Fill this function in
}
$json = '{"order_id":5,"customer_id":1,"order_items":[{"name":"pan","code":"4568123111","price":400,"quantity":1},{"name":"plate","code":"4563219871","price":100,"quantity":4},{"name":"knife","code":"4568984111","price":500,"quantity":1},{"name":"cup","code":"4568123121","price":110,"quantity":3}],"totals":{"subtotal":10000,"tax":1000,"tax_rate":0.1,"total":11000}}';
$output = [
  ["name" => "pan", "quantity" => 1],
  ["name" => "plate", "quantity" => 4],
  ["name" => "knife", "quantity" => 1],
  ["name" => "cup", "quantity" => 3]
];
echo $output === parseJsonAndLoop($json);
echo "\n";