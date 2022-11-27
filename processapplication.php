<!DOCTYPE html>
<html lang="en">

<head>
    <title>Driver's Permit Renewal Form</title>
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/fonts.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <?php
    define(MYSQLI_REPORT_OFF, 1);
    $conn = mysqli_connect("localhost", "root", "", "renewalapplication");

    if ($conn === false) {
        die("Connection Failed" . mysqli_connect_error());
    }

    $transaction = $_POST["transaction"];
    $classification = $_POST["classification"];
    $vehicleUse = $_POST["vehicleUse"];
    $surname = $_POST["surname"];
    $firstName = $_POST["firstName"];
    $middleName = $_POST["middleName"];
    $maidenName = $_POST["maidenName"];
    $sex = $_POST["sex"];
    $birthplace = $_POST["birthplace"];
    $birthdate = $_POST["birthdate"];
    $nationality = $_POST["nationality"];
    $street = $_POST["altStreet"];
    $city = $_POST["city"];
    $email = $_POST["email"];
    $countryCode = $_POST["countryCode"];
    $areaCode = $_POST["areaCode"];
    $suffix = $_POST["suffix"];
    $altStreet = $_POST["altStreet"];
    $altCity = $_POST["altCity"];
    $altEmail = $_POST["altEmail"];
    $altCountryCode = $_POST["altCountryCode"];
    $altAreaCode = $_POST["altAreaCode"];
    $altSuffix = $_POST["altSuffix"];
    $dpHolderPresent = $_POST["dpHolderPresent"];
    $dpHolderPrevious = $_POST["dpHolderPrevious"];
    $dpNumber = $_POST["dpNumber"];
    $issueDate = $_POST["issueDate"];
    $vehicleClass = $_POST["vehicleClass"];
    $foreignDP = $_POST["foreignDP"];
    $particulars = $_POST["particulars"];
    $disqualifiedStatus = $_POST["disqualifiedStatus"];
    $disqualificationParticulars = $_POST["disqualificationParticulars"];
    $physique = $_POST["physique"];
    $fullName = $_POST["fullName"];


    $sql = "INSERT INTO applicant ( `transaction`, `use`,`classification`,
                                    `surname`,`firstName`, `middleName`, `maidenName`
                                    ,sex
                                    ,birthplace
                                    ,birthdate
                                    ,nationality
                                    ,street, city, email,countryCode,areaCode,suffix
                                    ,altStreet,altCity,altEmail,altCountryCode,altAreaCode,altSuffix
                                    ,dpHolderPresent,dpHolderPrevious,dpNumber,issueDate,vehicleClass
                                    ,foreignDP,particulars
                                    ,disqualifiedStatus,disqualificationParticulars
                                    ,physique
                                    ,fullName
                                    ) 
            VALUES (                '$transaction','$vehicleUse','$classification' ,
                                    '$surname','$firstName','$middleName','$maidenName'
                                    ,'$sex'
                                    ,'$birthplace'
                                    ,'$birthdate'
                                    ,'$nationality'
                                    ,'$street', '$city', '$email','$countryCode','$areaCode','$suffix'
                                    ,'$altStreet','$altCity','$altEmail','$altCountryCode','$altAreaCode','$altSuffix'
                                    ,'$dpHolderPresent','$dpHolderPrevious','$dpNumber','$issueDate','$vehicleClass'
                                    ,'$foreignDP','$particulars'
                                    ,'$disqualifiedStatus','$disqualificationParticulars'
                                    ,'$physique'
                                    ,'$fullName'
                    )";



    if (mysqli_query($conn, $sql)) {

    } else {
        echo "ERROR $sql." . mysqli_error($conn);
    }
    mysqli_close($conn);
    ?>

    <div class="page-container">
        <div class="header-container">
            <div class="header-text">
                <h2>
                    Motor Vehicles and Road Traffic Act, Chap. 48:50 Regulation 18
                </h2>
                <h3>Application for Driving Permit(s)/Endorsement(s)</h3>
            </div>
        </div>
        <div class="body-container">
            <div class="inline-text" id="intro-text">
                <h2>Summary Report</h2><br>
                <p>The form was successfully submitted. Review your information below.</p>
                <div class="section">
                    <p>
                        <u><b>Transaction:</b></u><br>
                        <?php echo $transaction; ?><br><br>
                        <u><b>Classification:</b></u><br>
                        <?php echo $classification; ?><br><br>
                        <u><b>Use:</b></u><br>
                        <?php echo $vehicleUse; ?><br><br>
                    </p>
                </div>
                <div class="section">
                    <p>
                        <u><b>Full Name:</b></u><br>
                        <?php echo $firstName; ?>
                        <?php echo $middleName; ?>
                        <?php echo $surname; ?><br><br>
                        <u><b>Maiden Name:</b></u><br>
                        <?php
                        if ($maidenName == null) {
                            echo "N/A";
                        } else {
                            echo $maidenName;
                        } ?>
                    </p>
                </div>
                <div class="section">
                    <p>
                        <u><b>Sex:</b></u><br>
                        <?php echo $sex; ?>
                    </p>
                </div>
                <div class="section">
                    <p>
                        <u><b>Place of Birth:</b></u><br>
                        <?php echo $birthplace; ?>
                    </p>
                </div>
                <div class="section">
                    <p>
                        <u><b>Date of Birth:</b></u><br>
                        <?php
                        echo $birthdate;
                        ?>
                    </p>
                </div>
                <div class="section">
                    <p>
                        <u><b>Nationality:</b></u><br>
                        <?php echo $nationality; ?>
                    </p>
                </div>
                <div class="section">
                    <p>
                        <u><b>Residential Address in Trinidad and Tobago:</b></u><br>
                        <?php echo $street, nl2br("\n"), $city; ?><br>
                        <br>
                        <u><b>E-mail:</b></u><br>
                        <?php echo $email; ?><br>
                        <br>
                        <u><b>Phone Number:</b></u><br>
                        <?php echo $countryCode, "-", $areaCode, "-", $suffix; ?>
                    </p>
                </div>
                <div class="section">
                    <p>
                        <u><b>Residential Address (Foreign):</b></u><br>
                        <?php
                        if (($altStreet || $altCity) == null) {
                            echo "N/A";
                        } else {
                            echo $altStreet, nl2br("\n"), $altCity;
                        }
                        ?><br>
                        <br>
                        <u><b>E-mail (Foreign):</b></u><br>
                        <?php
                        if ($altEmail == null) {
                            echo "N/A";
                        } else {
                            echo $altEmail;
                        }
                        ?><br>
                        <br>
                        <u><b>Phone Number (Foreign):</b></u><br>
                        <?php
                        if (
                            ($altCountryCode ||
                                $altAreaCode ||
                                $altSuffix) == null
                        ) {
                            echo "N/A";
                        } else {
                            echo $altCountryCode,
                                "-",
                                $altAreaCode,
                                "-",
                                $altSuffix;
                        } ?>
                    </p>
                </div>
                <div class="section">
                    <p>
                        <?php
                        if ($dpHolderPresent == "yes") {
                            echo "I <b><u>am</u></b> presently the holder of 
                            a Driving Permit issued in Trinidad and Tobago.";
                        } else {
                            echo "I <b><u>am not</u></b> presently the holder of 
                            a Driving Permit issued in Trinidad and Tobago.";
                        }
                        ?><br><br>
                    </p>
                    <p>
                        <?php
                        if ($dpHolderPrevious == "yes") {
                            echo "I <b><u>have</u></b> previously been the holder of
                            a Driving Permit issued in Trinidad and Tobago.";
                        } else {
                            echo "I <b><u>have not</u></b> previously been the holder of
                            a Driving Permit issued in Trinidad and Tobago.";
                        }
                        ?><br>
                        <br>
                    </p>
                    <p>
                        <u><b>Driver's Permit Number:</b></u>
                        <br>
                        <?php
                        if ($dpNumber == null) {
                            echo "N/A";
                        } else {
                            echo $dpNumber;
                        }
                        ?>
                    </p>
                    <p>
                        <u><b>Issue Data:</b></u>
                        <br>
                        <?php
                        if ($issueDate == null) {
                            echo "N/A";
                        } else {
                            echo $issueDate;
                        }
                        ?>
                    </p>
                    <p>
                        <u><b>Class of vehicle authorised to drive:</b></u>
                        <br>
                        <?php
                        if ($vehicleClass == null) {
                            echo "N/A";
                        } else {
                            echo $vehicleClass;
                        }
                        ?>
                    </p>
                </div>
                <div class="section">
                    <p>
                        <?php
                        if ($foreignDP == "yes") {
                            echo "I <b><u>am</u></b> the holder of 
                            a Driving Permit/License held elsewhere than in 
                            Trinidad and Tobago.";
                        } else {
                            echo "I <b><u>am not</u></b> the holder of 
                            a Driving Permit held elsewhere than in 
                            Trinidad and Tobago.";
                        }
                        ?><br><br>
                    </p>
                    <p>
                        <u><b>Endorsement Details:</b></u>
                        <br>
                        <?php
                        if ($particulars == null) {
                            echo "N/A";
                        } else {
                            echo $particulars;
                        }
                        ?>
                    </p>
                </div>
                <div class="section">
                    <p>
                        <?php
                        if ($disqualifiedStatus == "yes") {
                            echo "I <b><u>have</u></b> previously been disqualified from
                            obtaining a driver's permit.";
                        } else {
                            echo "I <b><u>have not</u></b> previously been disqualified from
                            obtaining a driver's permit.";
                        }
                        ?>
                    </p><br>
                    <p>
                        <b><u>Disqualification Details:</u></b><br>
                        <?php
                        if ($disqualificationParticulars == null) {
                            echo "N/A";
                        } else {
                            echo $disqualificationParticulars;
                        }
                        ?>
                    </p>
                </div>
                <div class="section">
                    <p>
                        <?php
                        if ($physique == "yes") {
                            echo "My physique, hearing and bodily and mental fitness <b><u>are</u></b> 
                        such to qualify me for the issue of a driving permit.";
                        } else {
                            echo "My physique, hearing and bodily and mental fitness <b><u>are not</u></b> 
                        such to qualify me for the issue of a driving permit.";
                        }
                        ?>
                    </p>
                </div>
                <div class="section">
                    <p>
                        I,
                        <u>
                            <b>
                                <?php echo $fullName
                                    ?>
                            </b></u>, declare that the information provided
                        above is true and correct.
                    </p>
                </div>
            </div>
        </div>
    </div>
    </div>
    <script src="js/app.js"></script>
</body>

</html>