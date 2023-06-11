<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PhP task 1</title>
</head>

<body>
    <?php echo "this is my first php task"; ?>
    <p>sub of two number</p>
    <h1>
        <?php 
        $a = 10;
        $b = 15;
        $sum = $a + $b;
        echo $sum;
        ?>
    </h1>
    <p>Code a function having static variable.</p>
        <p><?php 
        function increment() {
            static $count = 0;
            $count++;
            echo $count;
        }
        increment(); // Output: 1
        increment(); // Output: 2
        increment(); // Output: 3
        ?></p>

        <p>initialize variables of all PHP data types.</p>
        <?php 
            $integer=-12;
            $string="hi i am string";
            $boolean=true;
            $float=1.524; 
            $arry = array('apple','mango','graps');
            $null = null;
            $null = null;
            echo var_dump($integer)."<br/>";
            echo var_dump($string)."<br/>";
            echo var_dump($boolean)."<br/>";
            echo var_dump($float)."<br/>";
            echo var_dump($null)."<br/>";
            echo var_dump($arry);

        ?>
</body>

</html>