<?php
// -------------------------------------------------------------------------------------
// Reverse this number
/**
 * Please create a function that takes an integer input, and reverses the positions of its digits, and then returns that value as an integer. You do not need to reverse floats or negative integers. Do not return a string.
 * 整数を入力し、その桁の位置を反転させて、その値を整数として返す関数を作成してください。浮動小数点や負の整数を反転させる必要はありません。また、文字列を返してはいけません。
 * Example Outputs:
- 1 → 1
- 75 → 57
- 456 → 654
- 1001 → 1001
 */

function reverseNumber() {
    // Fill this function in
}
$number = 75;
echo 57 === reverseNumber($number);
echo "\n";


// -------------------------------------------------------------------------------------
// Build this string
/**
 * Please create a function that takes three inputs: Name, Age, and Job Title, and then uses those inputs to generate a self introduction sentence. All 3 parameters will be strings.
 * 3つの入力を受け取り、それらの入力を使って自己紹介文を生成する関数を作成してください。名前、年齢、役職の3つの入力を受けて、それらの入力を使って自己紹介文を生成する関数を作ってください。3つのパラメータはすべて文字列になります。
 * Example Outputs:
- name: Alex, age: 27, jobtitle: software engineer → "Hi, my name is Alex. I am 27 and my job is a software engineer."
- name: Johnny, age: 18, jobtitle: waiter → "Hi, my name is Johnny. I am 18 and my job is a waiter."
- name: Mary, age: 42, jobtitle: CEO → "Hi, my name is Mary. I am 42 and my job is a CEO."
 */
function stringBuilder() {
    // Fill this function in
}
$name = "ALEX";
$age = "27";
$jobtitle = "software engineer";
echo "Hi, my name is Alex. I am 27 and my job is a software engineer." === stringBuilder($name,$age,$jobtitle);
echo "\n";


// -------------------------------------------------------------------------------------
// Looped String builder
/**
 * Please create a function that takes an array of shops with ids and titles, and then generates a formatted output with how many shops there are, followed by the ID and titles for the shops. Each shop should be on its own line, and there should be a separator between how many shops there are and the list of the shops after.
 * ショップのIDとタイトルの配列を受け取り、ショップの数、ショップのIDとタイトルの順にフォーマットされた出力を生成する関数を作成してください。各ショップは1行で、ショップの数とショップのリストの間にはセパレーターを入れてください。
 */
function loopedStringBuilder() {
    // Fill this function in
}
$array = [
    ["id" => 1, "title" => "Tangle Teezer"],
    ["id" => 2, "title" => "Bubo Japan"],
    ["id" => 3, "title" => "War Paint for Men"],
    ["id" => 4, "title" => "Invisibobble"]
];
$formatted = "Shop Count: 4
-------------
1 | Tangle Teezer
2 | Bubo Japan
3 | War Paint for Men
4 | Invisibobble";
echo $formatted === loopedStringBuilder($array);
echo "\n";


// -------------------------------------------------------------------------------------
// Looped Update, Loop through and sum costs of all items with flag = true
/**
 * Please create a function that takes an array of items with flag and cost, and return the sum total of the cost where flag is set to true. The items might contain not just the flag and cost parameters. There might also be names or other parameters, but the relevant parameters are the flag and cost. The return value should be an integer, and the function should loop through the items in the array and update the return value based on whether the flag is set to true or false.
 * フラグとコストを持つアイテムの配列を受け取り、フラグがtrueに設定された場合のコストの合計を返す関数を作成してください。項目には、フラグとコストのパラメータだけでなく、名前や他のパラメータも含まれるかもしれません。名前や他のパラメータもあるかもしれませんが、関連するパラメータはフラグとコストです。戻り値は整数とし、関数は配列の項目をループして、フラグが真か偽かに基づいて戻り値を更新する必要があります。
 */
function loopedAggregator() {
    // Fill this function in
}
$array = [
    ["flag" => true, "item_name" => "plate", "cost" => 100],
    ["flag" => true, "item_name" => "tshirt-xxl", "cost" => 433],
    ["flag" => false, "item_name" => "ticket", "cost" => 500],
    ["flag" => true, "item_name" => "sticker", "cost" => 10]
];
echo 543 === loopedAggregator($array);
echo "\n";


// -------------------------------------------------------------------------------------
// Validate Input Data, input must be a positive integer, else return false
/**
 * Please create a function that takes an input and returns true if the input is a positive integer, and false if the input is anything else. If the input type is a string of a positive integer, that is still incorrect. Negative numbers and floating point numbers are also incorrect. We only want to return true for positive integers.
 * 入力を受け取って、その入力が正の整数であれば真を、それ以外であれば偽を返す関数を作ってください。入力タイプが正の整数の文字列の場合は、やはり正しくありません。負の数や浮動小数点数も正しくありません。私たちは正の整数に対してのみ真を返したいのです。
 * Example Outputs:
validateInput(4) -> true
validateInput("34") -> false
validateInput(-22) -> false
validateInput(1.897) -> false
 */
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
/**
 * Please create a function that takes an array of inputs and checks each value in the array. If all of the values are positive integers, return true. If any values are not positive integers, return false. This builds off of the previous question. Ideally, the function exits as soon as an incorrect value is detected.
 * 入力の配列を受け取り、配列内の各値をチェックする関数を作成してください。すべての値が正の整数であれば、trueを返します。正の整数でない値があれば、falseを返します。これは、先ほどの質問の延長線上にあります。不正な値が検出されるとすぐにこの関数が終了されると理想的です。
 * Example Outputs:
validateLoop([4, 2, 1, 10]) -> true
validateLoop([5, 6, -1, 8810]) -> false
validateLoop([4, "2", 1, 10]) -> false
validateLoop([4, 2, 1.568, 10]) -> false
 */
function validateLoop() {
    // Fill this function in
}
echo true === validateLoop([4, 2, 1, 10]);
echo "\n";
echo false === validateLoop([5, 6, -1, 8810]);
echo "\n";


// -------------------------------------------------------------------------------------
// Parse JSON input, return the External ID from the json
/**
 * Please create a function that takes a JSON input, parses the input, and then returns the External ID from that input. You’ll need to parse the JSON first, and then return the correct value from the input JSON.
 * 入力されるJSONの値から、External ID を返す関数を作成してください。まずJSONを解析して、入力されたJSONから正しい値を返す必要があります。
 */
function parseJsonSimple() {
    // Fill this function in
}
$json = '{"customer_id":1,"name":"Alex","external_id":123,"created_date":"2021-10-11"}';
echo 123 === parseJsonSimple($json);
echo "\n";


// -------------------------------------------------------------------------------------
// Parse JSON input, return array of items with the Name and Quantity from the order_items
/**
 * Please create a function that takes a JSON input, parses the input, and then returns an array of objects with the name and quantity of each item in the JSON Order Items. You’ll need to parse the JSON first, and then loop through each Order Item. Each loop, you should add a new item to the array with the name and quantity of the current Order Item.
 * 入力されるJSONの値から、Order Itemsの各アイテムの名前と数量を持つオブジェクトの配列を返す関数を作成してください。最初にJSONを解析してから、各注文項目をループさせる必要があります。ループするたびに、現在の注文アイテムの名前と数量を持つ新しいアイテムを配列に追加する必要があります。
 */
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