<?php
    print '<h1>Challenges 2</h1>';
    print "<h3>First</h3> ";

    
    
    function replaceVowelsWithX($str) {
        $vowels = ["a", "e", "i", "o", "u"];
        
        foreach ($vowels as $letter) {
            $str = str_replace($letter, "x", $str);
        }

        return $str;
    }



    $inputstr = $_GET['stringinput'];
    $outputstr = replaceVowelsWithX($inputstr);
    


    echo "<form>
            Input String: <input type='text' name='stringinput'><br>
            Output: " . $outputstr . "

          </form>";




    print "<h3>Second</h3>";

    $num1 = $_GET['numinput1'];
    $operator = $_GET['operator'];
    $num2 = $_GET['numinput2'];

    function calculation($num1, $operator, $num2) {
        $output = null;

        if ($operator === 'add') {
            $output = $num1 + $num2;
        } else if ($operator === 'subtract') {
            $output = $num1 - $num2;
        } else if ($operator === 'multiply') {
            $output = $num1 * $num2;
        } else if ($operator === 'divide' && $num2 != 0) {
            $output = $num1 / $num2;
        } else if ($operator === 'divide' && $num2 == 0) {
            $output = 'Error, cannot divide by 0';
        } else if ($operator === 'exponent') {
            $expnum = $num1;
            for ($i = 1; $i < $num2; $i++) { 
                $expnum *= $num1;
                }
                $output = $expnum;
        } else {
            $output = null;
        }

        return $output;

    }

    echo "<form>
            Input: <input type='number' name='numinput1'> 
            <select name='operator'> 
                <option value='add'>+</option> 
                <option value='subtract'>-</option> 
                <option value='multiply'>x</option> 
                <option value='divide'>÷</option>
                <option value='exponent'>^</option>
                </select> 
            <input type='number' name='numinput2'><br> 
            Output: = " . calculation($num1, $operator, $num2) . " <br>
            <input type='submit' value='Submit'>

          </form>" ;

    
    print "<h3>Third</h3>";

    $ttinput = $_GET['timestable'];

    function timesTable($num) {
        for($i = 1; $i < 10; $i++) echo $num * $i . "<br>";
    }

    echo "<form>
            <input type='number' name='timestable'> <br>
            " . timesTable($ttinput) . " <input type='submit' value='Submit'> 
        </form>";


    $ageinput = $_GET['age'];
    function ageify($age) {
        if ($age < 13) {
            return "You are a child.";
        } else if ($age >= 13 && $age < 18 ) {
            return "You are a teenager.";
        } else if ($age >= 18 && $age < 65) {
            return  "You are an adult.";
        } else if ($age >= 65 && $age < 131) {
            return  "You are a senior citizen.";
        } else  {
            return  "You are alive???";
        }
        return null;
    }

    echo "<form> Ageify
            <input type='number' name='age'> <br>
            " . ageify($ageinput) . " <input type='submit' value='Submit'>   
        </form>";
?>