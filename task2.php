<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task_2 </title>
</head>

<body>
    <p>initialize variables of all PHP data types.</p>
    <h4>
        <?php
        $integer = -12;
        $string = "hi i am string";
        $boolean = true;
        $float = 1.524;
        $arry = array('apple', 'mango', 'graps');
        $null = null;
        $null = null;
        echo var_dump($integer) . "<br/>";
        echo var_dump($string) . "<br/>";
        echo var_dump($boolean) . "<br/>";
        echo var_dump($float) . "<br/>";
        echo var_dump($null) . "<br/>";
        echo var_dump($arry);

        ?>
    </h4>
    <p>Write a PHP program to perform arithmetic operations
        (addition, subtraction, multiplication, division, and modulus) on two integer variables</p>

    <h3>
        <?php
        $a = 5;
        $b = 8;
        echo 'addition : ' . $a + $b . "<br/>";

        echo 'subtraction : ' . $a - $b . "<br/>";

        echo 'multiplication : ' . $a * $b . "<br/>";

        echo 'division : ' . $a / $b;

        ?>
    </h3>
    <p>Write a PHP program to calculate the square root of a given number using the built-in math function.</p>
    <h2>
        <?php
        $a = 144;
        echo sqrt($a);
        ?>

    </h2>
    <p>Write a PHP program to calculate the power of a given number using the built-in math function.</p>
    <h1>
        <?php
        $base = 100251;
        $power = 2;
        echo pow($base, $power)
        ?>
    </h1>
    <p>Write a PHP program to concatenate two strings and convert the result to uppercase.</p>
    <h3><?php
        $str1 = "hii i am str1    ";
        $str2 = "hii i am str2";
        echo strtoupper($str1 . $str2) . "<br>";
        echo strtolower($str1 . $str2);


        ?></h3>
    <!-- Conversation of Data Types:
Write a PHP program to convert a string to an integer.
Write a PHP program to convert a float to an integer.
Write a PHP program to convert a string to a float.
Write a PHP program to convert a string to a boolean. -->
    <h4>
        <?php
        $strt_f = "0";
        $num = "1105.884";
        $floatnum = 1154.8824;
        $integernum = 12345;
        $convt = (int)$num;
        echo var_dump((int)$num) . "<br>";
        echo var_dump((float)$num) . "<br>";
        echo var_dump((int)$floatnum) . "<br>";
        echo var_dump((float)$integernum) . "<br>";
        echo var_dump((bool)$strt_f) . "<br>";
        echo var_dump($convt) . "<br>";

        ?>
    </h4>


    <p>Write a PHP program to check whether a given variable is of a certain data type (integer, float, string, boolean).</p>

    <h1>
        <?php
        $typeofvar =" 1.88888888888888888888888888888888888888888888888888888";

        if ($typeofvar != null) {

            echo "your variable type is " . gettype($typeofvar);

        }

            /*ACCORDING TO CHAT GPT TYPE OF FLOAT AND DOUBLE ARE SAME;

In PHP, the gettype() function returns a string representing the data type of a variable. The data types in PHP include integer, float, double, string, boolean, array, object, resource, and NULL.

In PHP, double and float are synonyms, meaning they refer to the same data type. So when you pass a value 1.8 to the gettype() function, it returns double, which is the same as float in PHP.

Therefore, if you pass 1.8 to the gettype() function, it will return double because double and float are the same data type in PHP.*/

        ?>
    </h1>




    <!-- Static Variable:
   
    Write a PHP program to declare two functions that use static variables. Call each function twice and print the value of the static variable after each call. -->
    
<P>
1)Write a PHP function to declare a static variable and increment it every time the function is called. <br>
2)call it 3 times
</P>

<H3>
    <?php  
     function increment() {
        static $count = 0;
        $count++;
        echo $count."<br>";
    }
    increment(); // Output: 1
    increment(); // Output: 2
    increment(); // Output: 3
    ?>

</H3>
<h3>
    double function program
    <?php  
            function opt1(){
                static $count1 = 0;
            $count1++;
            echo $count1."<br>";
            }
            function opt2(){
                static $count2 = 0;
            $count2++;
            echo $count2."<br>";
            }
        function double_increment() {
           echo opt1() ."<br>".opt2();
        }
    double_increment();
    double_increment();
    double_increment();
    double_increment();
    double_increment();
    double_increment();
    ?>
</h3>
</body>

</html>