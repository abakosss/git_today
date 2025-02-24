<?php
$menupont =1;

if(isset($_GET['m']))
{
    $menupont=$_GET['m'];
}

$menu=array(
    array("id" => 1,"nev" => "elso","title" =>"Első"),
    array("id" => 2,"nev" => "masodik","title" =>"Második"),
    array("id" => 3,"nev" => "harmadik","title" =>"Harmadik")
);

$tartalom = array(
    array("menu_id" => 1, "cim" => "Első első", "tartalom" => "tartalom első"),
    array("menu_id" => 1, "cim" => "Első második", "tartalom" => "tartalom második"),
    array("menu_id" => 2, "cim" => "Második első", "tartalom" => "tartalom első"),
    array("menu_id" => 2, "cim" => "Második második", "tartalom" => "tartalom második"),
    array("menu_id" => 3, "cim" => "Harmadik első", "tartalom" => "tartalom első"),
    array("menu_id" => 1, "cim" => "Első harmadik", "tartalom" => "tartalom harmadik"),

);
?>