<?php

define('DB_NAME', 'fixtures');
define('DB_USER', 'root');
define('DB_PASSWORD', 'password');
define('DB_HOST', 'localhost');

$link=($GLOBALS["___mysqli_ston"] = mysqli_connect(DB_HOST,  DB_USER,  DB_PASSWORD));

if(!$link) {
    die('Could not connect:'. ((is_object($GLOBALS["___mysqli_ston"])) ? mysqli_error($GLOBALS["___mysqli_ston"]) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false)));
}

$db_selected = ((bool)mysqli_query( $link, "USE " . constant('DB_NAME')));

if(!$db_selected){
    die('Can\'t use' . DB_NAME . ':' . ((is_object($GLOBALS["___mysqli_ston"])) ? mysqli_error($GLOBALS["___mysqli_ston"]) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false)));
}

echo 'Go back & refresh to make next entry';

$Width = $_POST['input'];
$Height = $_POST['input1'];
$DEPTH = $_POST['input2'];
$Cutout = $_POST['input3'];
$Stdlen = $_POST['input4'];
$Mounting_Pipe_Diameter = $_POST['input5'];
$holder_type = $_POST['input6'];
$coverage = $_POST['input7'];
$terms_conditions = $_POST['input8'];
$pri_name = $_POST['input9'];
$strtdate = $_POST['input10'];
$enddate= $_POST['input11'];
$fimg= $_POST['input12'];
$thnail= $_POST['input13'];
$design_style= $_POST['input14'];
$vendor= $_POST['input15'];
$Material= $_POST['input16'];
$Finish= $_POST['input17'];
$Body_Color= $_POST['input18'];
$Shape= $_POST['input19'];
$Glass_size= $_POST['input20'];
$Wattage= $_POST['input21'];
$LED_Source= $_POST['input22'];
$Beam_Angle= $_POST['input23'];
$Color_Temperature= $_POST['input24'];
$Lumen_Start= $_POST['input25'];
$Lumen_End= $_POST['input26'];
$IP_Rating= $_POST['input27'];
$Input_Voltage= $_POST['input28'];
$Output_Voltage= $_POST['input29'];
$LED_mtr= $_POST['input30'];
$Manufac_name= $_POST['input31'];
$Manu_URL= $_POST['input32'];
$Manu_POC= $_POST['input33'];
$Location= $_POST['input34'];
$Loc_Ph= $_POST['input35'];
$Loc_addr= $_POST['input36'];
$prod_code= $_POST['input37'];
$prod_name= $_POST['input38'];
$coll_name= $_POST['input39'];
$MRP= $_POST['input40'];
$Currency= $_POST['input41'];
$Quantity= $_POST['input42'];
$Fixture_type= $_POST['input43'];

$query = "INSERT INTO dimension (Width, Height, DEPTH, CUT_OUT, Std_len, Mounting_Pipe_Diameter) VALUES ('$Width','$Height','$DEPTH','$Cutout','$Stdlen','$Mounting_Pipe_Diameter');
INSERT INTO holder_type (Name) VALUES ('$holder_type');
INSERT INTO warranty (Coverage, Terms_conditions) VALUES ('$coverage','$terms_conditions');
INSERT INTO pricebook (Name, Eff_Strt_date, Eff_end_date) VALUES ('$pri_name','$strtdate','$enddate');
INSERT INTO pricebook (Name, Eff_Strt_date, Eff_end_date) VALUES ('$pri_name','$strtdate','$enddate');
INSERT INTO image (Full_Image,Thumbnail) VALUES ('$fimg','$thnail');
INSERT INTO design_style (Name) VALUES ('$design_style'); 
INSERT INTO vendor (Name) VALUES ('$vendor');
INSERT INTO physical_attrib (Material,Finish,Body_Color,Shape,Glass_size) VALUES ('$Material','$Finish','$Body_Color','$Shape','$Glass_size');
INSERT INTO technical_attrib (Wattage,LED_Source,Beam_Angle,Color_Temperature,Lumen_Start,Lumen_End,IP_Rating,Input_Voltage,Output_Voltage,LED_mtr) VALUES ('$Wattage','$LED_Source','$Beam_Angle','$Color_Temperature','$Lumen_Start','$Lumen_End','$IP_Rating','$Input_Voltage','$Output_Voltage','$LED_mtr');
INSERT INTO manufacturer (Name, URL, POC) VALUES ('$Manufac_name','$Manu_URL','$Manu_POC');
INSERT INTO location (Name, Phone_Number, Address) VALUES ('$Location','$Loc_Ph','$Loc_addr');
INSERT INTO product (product_code,Name) VALUES ('$prod_code','$prod_name');
INSERT INTO collection (Name) VALUES ('$coll_name');
INSERT INTO product_price (MRP,Currency) VALUES ('$MRP','$Currency');
INSERT INTO product_stock (quantity) VALUES ('$Quantity');
INSERT INTO fixture_type (Name) VALUES ('$Fixture_type');";

mysqli_multi_query($link, $query);

    
((is_null($___mysqli_res = mysqli_close($GLOBALS["___mysqli_ston"]))) ? false : $___mysqli_res);
?>