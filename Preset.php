<?php
include_once "header.php";

if(!logged_in()) {
    redirect("Login.php");
}

//echo var_dump("<p>password:</p>".$_SESSION['hashedpassword'])."<br>"; 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Preset | The Nexus Planner</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans:400,800&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto&amp;display=swap">
    <link rel="stylesheet" href="assets/css/aos.min.css">
    <link rel="stylesheet" href="assets/css/Account-setting-or-edit-profile.css">
    <link rel="stylesheet" href="assets/css/Footer-Dark-Multi-Column-icons.css">
</head>

<body>
    <div class="container" data-aos="zoom-out" data-aos-duration="750">

      <?php display_message(); ?>

      <div class="container d-flex flex-column">
            <h1 class="text-center" style="font-family: 'Nunito Sans', sans-serif;">Preset</h1>
            
            <div>
                <h3 style="font-weight: bold;">Date and Time</h3>
                <div class="d-flex flex-row justify-content-start align-items-center align-content-center align-self-center flex-wrap">
                    <h4>Timezone&nbsp;</h4><?php
                    $timezoneTable = array(
                            "-12" => "(GMT -12:00) Eniwetok, Kwajalein",
                            "-11" => "(GMT -11:00) Midway Island, Samoa",
                            "-10" => "(GMT -10:00) Hawaii",
                            "-9" => "(GMT -9:00) Alaska",
                            "-8" => "(GMT -8:00) Pacific Time (US &amp; Canada)",
                            "-7" => "(GMT -7:00) Mountain Time (US &amp; Canada)",
                            "-6" => "(GMT -6:00) Central Time (US &amp; Canada), Mexico City",
                            "-5" => "(GMT -5:00) Eastern Time (US &amp; Canada), Bogota, Lima",
                            "-4" => "(GMT -4:00) Atlantic Time (Canada), Caracas, La Paz",
                            "-3.5" => "(GMT -3:30) Newfoundland",
                            "-3" => "(GMT -3:00) Brazil, Buenos Aires, Georgetown",
                            "-2" => "(GMT -2:00) Mid-Atlantic",
                            "-1" => "(GMT -1:00) Azores, Cape Verde Islands",
                            "0" => "(GMT) Western Europe Time, London, Lisbon, Casablanca",
                            "1" => "(GMT +1:00) Brussels, Copenhagen, Madrid, Paris",
                            "2" => "(GMT +2:00) Kaliningrad, South Africa",
                            "3" => "(GMT +3:00) Baghdad, Riyadh, Moscow, St. Petersburg",
                            "3.5" => "(GMT +3:30) Tehran",
                            "4" => "(GMT +4:00) Abu Dhabi, Muscat, Baku, Tbilisi",
                            "4.5" => "(GMT +4:30) Kabul",
                            "5" => "(GMT +5:00) Ekaterinburg, Islamabad, Karachi, Tashkent",
                            "5.5" => "(GMT +5:30) Bombay, Calcutta, Madras, New Delhi",
                            "6" => "(GMT +6:00) Almaty, Dhaka, Colombo",
                            "7" => "(GMT +7:00) Bangkok, Hanoi, Jakarta",
                            "8" => "(GMT +8:00) Beijing, Perth, Singapore, Hong Kong",
                            "9" => "(GMT +9:00) Tokyo, Seoul, Osaka, Sapporo, Yakutsk",
                            "9.5" => "(GMT +9:30) Adelaide, Darwin",
                            "10" => "(GMT +10:00) Eastern Australia, Guam, Vladivostok",
                            "11" => "(GMT +11:00) Magadan, Solomon Islands, New Caledonia",
                            "12" => "(GMT +12:00) Auckland, Wellington, Fiji, Kamchatka"
                        );
                        
                        echo "<select>";
                        foreach ($timezoneTable as $k => $v){
                            $sel = ($k==-5)?" selected":"";
                            echo "<option value='".$k."'".$sel.">".$v."</option>";
                        }
                        echo "</select>" 
                    ?>
                </div>
            </div>
            <div>
                <h3 style="font-weight: bold;"></h3>
                <div class="d-flex flex-row justify-content-start align-items-center align-content-center align-self-center flex-wrap">
                    <h4>Date type:&nbsp;</h4><select>
                        <option value="11">MM/DD/YY</option>
                        <option value="12">DD/MM/YY</option>
                        <option value="13">YY/MM/DD</option>
                        <option value="14">YY/DD/MM</option>
                    </select>
                </div>
            </div><button class="btn btn-primary" type="button" style="background: #43bc43;">Save</button>
        </div>
    </div>
    
	<?php
		include_once "footer.php";
	?>
	
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/aos.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
</body>

</html>

