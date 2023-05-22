<?php
    require("includes/head.php");
?>
<p>
    <?=$translation["explanation"]?>
</p>
<form method="POST" action="result.php">
    <table>
        <tr>
            <td colspan="4">
                <h3>
                    <?=$translation["title"]?>
                </h3>
            </td>
        </tr>
        <tr>
            <td>
                <input type="number" name="tempValue">
            </td>
            <td>
                <select name="tempUnit1">
                    <option value="celsius" selected>Celsius</option>
                    <option value="fahrenheit">Fahrenheit</option>
                    <option value="kelvin">Kelvin</option>
                </select>
            </td>
            <td>
            >>
            </td>
            <td>
                <select name="tempUnit2">
                    <option value="celsius">Celsius</option>
                    <option value="fahrenheit" selected>Fahrenheit</option>
                    <option value="kelvin">Kelvin</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>
                <input type="submit" value="<?=$translation['convert']?>">
            </td>
        </tr>
    </table>
</form>

<?php
    include('includes/footer.php');
?>