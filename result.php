<?php
    function calculateTemperature($tempValue, $tempUnit1, $tempUnit2)
    {
        $returnValue = $tempValue;
        switch($tempUnit1)
        {
            case "celsius":
                if($tempUnit2 == "fahrenheit") // fahrenheit
                {
                    $returnValue = $tempValue * 1.8 + 32;
                }
                elseif($tempUnit2 == "kelvin") // kelvin
                {
                    $returnValue = $tempValue + 273.15;
                }
            break;
            case "fahrenheit":
                if($tempUnit2 == "kelvin") // kelvin
                {
                    $returnValue = ($tempValue - 32) / 1.8 + 273.15;
                }
                elseif($tempUnit2 == "celsius") // celsius
                {
                    $returnValue = ($tempValue - 32) / 1.8;
                }
            break;
            case "kelvin":
                if($tempUnit2 == "fahrenheit") // fahrenheit
                {
                    $returnValue = ($tempValue - 273.15) * 1.8 + 32;
                }
                elseif($tempUnit2 == "celsius") //celsius
                {
                    $returnValue = $tempValue - 273.15;
                }
            break;
        }

        return $returnValue;
    }

    include 'includes/head.php';
?>
<p>
    De temperatuur <?=$_POST["tempValue"]?> <?=$_POST["tempUnit1"]?> is omgerekend <?=calculateTemperature($_POST["tempValue"], $_POST["tempUnit1"], $_POST["tempUnit2"])?> <?=$_POST["tempUnit2"]?>
</p>
<p>
    <a href="index.php">Nieuwe berekening</a>
</p>
<?php
    require 'includes/footer.php';
?>