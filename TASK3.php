<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- ARRYS -->
    <table border="2">
        <tr>
            <th>NUMERIC ARRY =></th>
            <?php $numericArry = [1, 2, 'stringg', true, 'saif', 13.44];
            foreach ($numericArry as $value) {
            ?>
                <td>
                    <?php echo $value; ?>
                </td>
            <?php } ?>
        </tr>
        <tr>
            <th>ASSOCIATIVE ARRY=></th>
            <?php
            $associativeArry = [
                "Person1" => ['abid', "abid@gmail.com", "03315524826"], "Person2" => ['abdullah', "abdullah@gmail.com", '03483524826'], "Person3" => ['zaid', "zaid@gmail.com", '03845524826']
            ];
            foreach ($associativeArry as $dataw) {
                foreach ($dataw as  $valuew) { ?>
                    <td><?php echo $valuew; ?></td>
            <?php }
            } ?>

        </tr>



        <table border="2">
            <tr>
                <th>Multidimensional array </th>
            </tr>

            <?php
            $people = [
                ["name" => "John", "age" => 25],
                ["name" => "Alice", "age" => 30],
                ["name" => "Mark", "age" => 20],
                ["name" => "Emily", "age" => 35],
                ["name" => "David", "age" => 28]
            ];

            usort($people, function ($a, $b) {
                return $a['age'] - $b['age'];
            });
            // print_r($people);
            foreach ($people as $person) {


            ?>

                <tr>
                    <td><?php echo $person['name']; ?></td>
                    <td><?php echo $person['age']; ?></td>
                </tr>
            <?php } ?>
        </table>

        <!-- multi associative -->
        <table border="2">
            <tr>
                <th>Multidimensional associative array </th>
            </tr>

            <?php
            $multiassoci = [
                'person1' => ["name" => "John", "email" => 'John@gmail.com', 'PhNumber' => "02251187542"],
                'person2' => ["name" => "Alice", "email" => 'Alice@gmail.com', 'PhNumber' => "02251187542"],
                'person3' => ["name" => "Mark", "email" => 'Mark@gmail.com', 'PhNumber' => "02251187542"],
                'person4' => ["name" => "Emily", "email" => 'Emily@gmail.com', 'PhNumber' => "02251187542"],
                'person5' => ["name" => "David", "email" => 'David@gmail.com', 'PhNumber' => "02251187542"]
            ];

            usort($multiassoci, function ($a, $b) {
                return strcmp($a['name'], $b['name']);
                //the comparison logic is performed using the strcmp() function, which compares two strings. The strcmp() function returns a negative value if $a['name'] comes before $b['name'], a positive value if $a['name'] comes after $b['name'], and 0 if they are equal.  
            });
            foreach ($multiassoci as $MS1) { ?>

                <tr>
                    <?php foreach ($MS1 as $val) { ?>
                        <td><?php echo $val; ?></td>
                    <?php } ?>
                </tr>
            <?php } ?>
        </table>


        <table border="2">
            <tr>
                <th>Multidimensional associative array </th>
            </tr>
            
            <?php
          $courses = [
    [
        "title" => "Mathematics",
        "description" => "Introductory mathematics course",
        "prerequisites" => ["Algebra 1", "Geometry"]
    ],
    [
        "title" => "Computer Science",
        "description" => "Introduction to computer science and programming",
        "prerequisites" => ["Algorithms", "Logic"]
    ],
    [
        "title" => "Physics",
        "description" => "Fundamentals of physics",
        "prerequisites" => ["Mathematics", "Chemistry"]
    ],
    // Add more courses as needed
          ];?>
     
          
          <?php
            foreach ($courses as $cource) { ?>
            
                <tr>
                    <?php foreach ($cource as $key=> $vala) { ?>
                        
                        <td><?php 
                            if (gettype($vala)!='array') {
                                echo $vala;
                            }else{
                                foreach ($vala as $innerrval ) {
                                    echo $innerrval;
                                };
                            };
                                 ?>
                            </td>
                    <?php } ?>
                </tr>
            <?php } ?>
        </table>

    </table>
</body>

</html>