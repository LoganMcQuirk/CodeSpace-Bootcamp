<?php

    $width = 10;
    $height = 5;
    $area = $width * $height;

    print '<h1>Challenges</h1>';
    print "<ul><strong>First</strong>
            <li>The rectangle has a width of $width meters, a height of $height meters, and an area of $area square meters</li>
            </ul> ";
?>

<?php
    $add = $width + $height;
    $subtract = $width - $height;
    $multiply = $width * $height; 
    $divide = $width / $height;
    $concatenate = $width . $height;

    print "<ul><strong>Second</strong>
                <li> addition of $width and $height is $add </li>
                <li> subtraction of $width and $height is $subtract </li>
                <li> multiplication of $width and $height is $multiply </li>
                <li> division of $width and $height is $divide </li>
                <li> concatenation of $width and $height is $concatenate </li>
                
            </ul>";
?>

<?php
    $age = 25;
    $days = $age * 365;
    $hours = $days * 24;
    $minutes = $hours * 60;

    print 'Welcome to the Age Calculator!' . "<br>";
    print 'Your age: ' . $age . "<br>";
    print 'You have been alive for at least:' . "<br>";
    print $days . ' days' . "<br>";
    print $hours . ' hours' . "<br>";
    print $minutes . ' minutes' . "<br>";
?>

<?php
    $weekdays = array('Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday');

    echo "<ul>";
        foreach ($weekdays as $value) {
            echo "<li>" . $value . "</li>";
        }
    echo "</ul> <br>";

    $months  = array("July-Aug" => array("High" => "19 ℃" , "Low" => "11 ℃"),
                    "Jan-Feb" => array("High" => "7 ℃", "Low" => "1 ℃") 
                );
    
    echo "<table>
            <tr>
                <td>Month</td> <td>High</td> <td>Low</td>
            </tr>
            <tr>
                <td>July-Aug</td> <td>" . $months['July-Aug']['High'] . "</td> <td>" . $months['July-Aug']['Low'] . "</td>
            </tr>
            <tr>
                <td>Jan-Feb</td> <td>" . $months['Jan-Feb']['High'] . "</td> <td>" . $months['Jan-Feb']['Low'] . "</td>
            </tr>
        </table> <br>";
?>
<?php
    
    $students = array(
                    "Aarron" => array("Physics" => 74, "English" =>  69, "Maths" => 70),
                    "Jamie" => array("Physics" => 64, "English" => 79, "Maths" => 73),
                    "Harry" => array("Physics" => 68, "English" =>  54, "Maths" => 66)
                );
    echo "Student Results <br> <br>";
    echo "Physics result for Aaron : " . $students["Aarron"]["Physics"] . "<br>";
    echo "English result for Jamie : " . $students["Jamie"]["Physics"] . "<br>";
    echo "Maths result for Harry : " . $students["Harry"]["Physics"] . "<br>";
?>