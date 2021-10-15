<?php

// If Statement Section
// What is the return for this function?
function testIfStatement1() {
    $boolean = true;

    if ($boolean) {
        return 1;
    } else {
        return 2;
    }
}

// What is returned value of this function?
function testIfStatement2() {
    $value1 = true;

    if ($value1 === true) {
        $value2 = 20;
    }

    if ($value1 === 20) {
        $value1 = false;
    }

    if ($value1 === false) {
        $value2 = 0;
    }

    if ($value2 === true) {
        $value2 = 1;
    }

    return $value2;
}

// Which of the values is returned from this function?
function testIfStatement3() {
    $bool = false;
    $name = "John Smith";

    if ($name == "John Smith" && $bool) {
        return 1;
    } else if ($name == "John Smith" || $bool) {
        return 2;
    } else if ($name == "John Smith" && !$bool) {
        return 3;
    }

    return 4;
}

// Which Value is returned from this function?
function testIfStatement4() {
    $name1 = "John Smith";
    $name2 = "Jane Doe";
    $bool1 = false;
    $bool2 = true;

    if (($name1 === "John" && $bool1) || ($name2 === "Jane" && ($bool2 || $bool1))) {
        return 1;
    } else if (($name1 === "John Smith" || $bool1) && ($name2 === "Doe" && ($bool2 || $bool1))) {
        return 2;
    } else if (($name1 === "John Smith" && $bool1) || ($name2 === "Jane Doe" && ($bool2 || $bool1))) {
        return 3;
    } else {
        return 4;
    }
}

// What value is returned from this function
function testIfStatement5() {
    $return = [];

    $condition1 = true;
    $condition2 = false;
    $condition3 = "eXamPle";
    $condition4 = 45;
    $condition5 = ["object", "here"];

    if ($condition1 === true) {
        $return[] = 1;
    }

    if ($condition2) {
        $return[] = 2;
    }

    if (strtolower($condition3) === "example") {
        $return[] = 3;
    }

    if ($condition4 >= 55) {
        $return[] = 4;
    }

    if (in_array("ere", $condition5)) {
        $return[] = 5;
    }

    return $return;
}

// What is the value of number at the end of this function?
function testIfStatement6() {
    $number = 10;

    $condition1 = true;
    $condition2 = false;
    $condition3 = "eXamPle";
    $condition4 = 45;
    $condition5 = ["object", "here"];

    if ($condition3 !== "eXamPle") {
        if ($condition1 === true) {
            $number += 20;
        }
    } else {
        $number += 10;

        if ($condition2 === true || $condition4 < 45) {
            $number = 1;
        } elseif (count($condition5) === 2 && in_array("test", $condition5)) {
            $number -= 10;
        } else {
            if ($number > 30) {
                $number += 10;
            } else {
                $number = 0;
            }
        }
    }

    return $number;
}

// Which value is returned from this function?
function testIfStatement7() {
    $condition1 = [1,2,3,4,5];

    return (count($condition1) > 5) ? "Yes" : 15;
}

// What expression would return true from this Function?
// What expression would return false from this Function?
function testIfStatement8() {
    $number1 = 1;
    $number2 = 2;

    if (/* Expression Goes Here */) {
        return true;
    } else {
        return false;
    }
}

// Loop Section
// What is the value of number at the end of this?
function testLoop1() {
    $number = 0;

    for ($i = 0; $i < 5; $i++) {
        $number += $i;
    }

    return $number;
}

// What does the totals array look like?
// How many items does the totals array contain?
function testLoop2() {
    $totals = [];

    $array = [
        [4, 5],
        [2],
        [1, 6, 9]
    ];

    foreach ($array as $item) {
        $temp = 0;

        foreach ($item as $number) {
            $temp = $temp + $number;
        }

        $totals[] = $temp;
    }

    return $totals;
}

// What is the Output of this function?
function testLoop3() {
    $output = "";
    $string = "PhpStorm";
    $length = strlen($string);
    for ($i=($length-1) ; $i >= 0 ; $i--)
    {
        $output .= $string[$i];
    }
    return $output;
}

// What is the Output of this function?
// What is the value of "gender" of the item with the "unique_id" = 3?
function testLoop4() {
    $output = [];

    $emp = array
    (
        array("id" => 1,"name" => "bob","money" => 400000),
        array("id" => 2,"name" => "john","money" => 600000),
        array("id" => 3,"name" => "alice","money" => 500000)
    );

    foreach ($emp as $person) {
        $temp = [];
        foreach ($person as $key => $value) {
            if ($key == "id") {
                $temp["unique_id"] = $value;
            }

            if ($key == "name" && $value == "alice") {
                $temp["gender"] = "female";
            } else {
                $temp["gender"] = "male";
            }

            $temp["cash"] = $person["money"];
        }
        array_push($output,$temp);
    }

    return $output;
}

// What value is returned by this function
function testLoop5() {
    $array = array(3, 2, 5, 7, 9);

    return array_reduce($array, function ($carry, $item) {
        $carry += $item;
        return $carry;
    }, 0);
}

// What value of number returned by this function
function testLoop6() {
    $flag = true;
    $number = 0;

    while ($flag) {
        $number++;

        if ($number > 5) {
            $flag = false;
        }
    }

    return $number;
}

// Misc. Section
// What is the output of this function?
function testAddition1() {
    $var1 = 1;
    $var2 = 2;
    $var3 = "3";

    return $var1 + $var2 + $var3;
}

// Consider this Function
function testDefaultInput1($var1, $var2 = 4) {
    $result = $var1 + $var2;
    return $result;
}
// What is the output of this function
$x = 5; $y = 6;
testDefaultInput1($x,$y);
// What is the output of this function?
testDefaultInput1(2);

// What is the output of this function?
function testSubstring1() {
    $string = "HereIs aLo/ng.String";
    return substr($string, 2, 15);
}

// Please return 554 from this function. What should value be set to in order to return 554?
// Please return "Bursting Red" From this function. What should value be set to in order to return "Bursting Red"?
function testReturnCorrectValue1() {
    $order = [
        "id" => 1,
        "customer_id" => 554,
        "orderitems" => [
            "item1" => [
                "product_id" => 1,
                "variants" => [
                    "blue" => [
                        "name" => "Royale Blue",
                        "price" => 200
                    ],
                    "green" => [
                        "name" => "Royale Green",
                        "price" => 250
                    ]
                ],
                "variant" => "blue",
                "quantity" => 1
            ],
            "item2" => [
                "product_id" => 2,
                "variants" => [
                    "red" => [
                        "name" => "Bursting Red",
                        "price" => 3000
                    ],
                    "yellow" => [
                        "name" => "Sunflower",
                        "price" => 2700
                    ]
                ],
                "variant" => "yellow",
                "quantity" => 5
            ]
        ]
    ];

    $value = ;

    return $value;
}

