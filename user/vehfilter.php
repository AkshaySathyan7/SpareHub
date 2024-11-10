<?php
session_start();
$company = $_GET["company"];
$veh_type = $_GET["veh_type"];
$con = mysqli_connect("localhost", "root", "", "sparehub");
$veh_type = str_replace(" ", "", $veh_type);

if ($company == "Honda") {
    header('Location: vehicles/honda.php?company=' . $company . '&veh_type=' . $veh_type);
} elseif ($company == "Bajaj") {
    header('Location: vehicles/bajaj.php?company=' . $company . '&veh_type=' . $veh_type);
} elseif ($company == "TVS") {
    header('Location: vehicles/tvs.php?company=' . $company . '&veh_type=' . $veh_type);
} elseif ($company == "Hero") {
    header('Location: vehicles/hero.php?company=' . $company . '&veh_type=' . $veh_type);
} elseif ($company == "Yamaha") {
    header('Location: vehicles/yamaha.php?company=' . $company . '&veh_type=' . $veh_type);
} elseif ($company == "KTM") {
    header('Location: vehicles/ktm.php?company=' . $company . '&veh_type=' . $veh_type);
} elseif ($company == "RoyalEnfield") {
    header('Location: vehicles/royalenf.php?company=' . $company . '&veh_type=' . $veh_type);
} else {
    echo "Something Went Wrong!!!!!!!!!";
}

mysqli_close($con);
?>
