<?php
if(isset($_GET["lang"]))
{
    $lang = $_GET["lang"];
}
else
{
    $lang = "NL";
}

switch($lang)
{
    case "EN":
        $translation = ["title" => "Convert temperature",
                        "explanation" => "Use the calculation tool below to quickly convert between the different temperature units (Celsius, Kelvin and Fahrenheit)",
                        "convert" => "Convert"];
    break;
    case "DE":
        $translation = ["title" => "Temperatur umrechnen",
                        "explanation" => "Verwenden Sie das unten stehende Berechnungswerkzeug, um schnell zwischen den verschiedenen Temperatureinheiten (Celsius, Kelvin und Fahrenheit) umzurechnen.",
                        "convert" => "Umrechnen"];
    break;
    case "NL":
    default:
        $translation = ["title" => "Temperatuur omrekenen",
                        "explanation" => "Gebruik onderstaande rekentool om snel om te rekenen tussen de verschillende temperatuureenheden (Celsius, Kelvin en Fahrenheit)",
                        "convert" => "Omrekenen"];
    break;
}