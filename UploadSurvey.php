<?php
    require '/home/u848932438/domains/countries-capitals.com/public_html/connections.php';

    $var=false;
    if ($_POST['checkbox1'] == 'value1')
    {
        $var=true;
    }

    $S4=0;

    $ISO=$_POST['filter3'];

    $survey1=$_POST['AA2'];
    $survey2=$_POST['AA3'];
    $survey3=$_POST['AA4'];
    $survey4=$_POST['AA5'];
    $survey5=$_POST['AA6'];

    $surveyName1=$_POST['AA7'];
    $surveyName2=$_POST['AA8'];
    $surveyName3=$_POST['AA9'];
    $surveyName4=$_POST['AA10'];
    $surveyName5=$_POST['AA11'];
    
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } echo "Connected successfully"; 

    if($var==1)
    {
        if($survey1!="")
        {
            $sql = "INSERT INTO Survey (ISO_3166, Survey, SurveyName, Mode, AllCountries) VALUES ('Visos', '$survey1', '$surveyName1', 'Aktyvi', 'Taip');";
            if ($conn->multi_query($sql) === TRUE) {
                echo "New records created successfully";
                $created=true;
            } else {
                header("Location : administrator?survey?quiz=fail");
                echo "Error: " . $sql . "<br>" . $conn->error;
                $created=false;
            }
        }
        if($survey2!="")
        {
            $sql = "INSERT INTO Survey (ISO_3166, Survey, SurveyName, Mode, AllCountries) VALUES ('Visos', '$survey2', '$surveyName2', 'Aktyvi', 'Taip');";
            if ($conn->multi_query($sql) === TRUE) {
                echo "New records created successfully";
                $created=true;
            } else {
                header("Location : administrator?survey?quiz=fail");
                echo "Error: " . $sql . "<br>" . $conn->error;
                $created=false;
            }
        }
        if($survey3!="")
        {
            $sql = "INSERT INTO Survey (ISO_3166, Survey, SurveyName, Mode, AllCountries) VALUES ('Visos', '$survey3', '$surveyName3', 'Aktyvi', 'Taip');";
            if ($conn->multi_query($sql) === TRUE) {
                echo "New records created successfully";
                $created=true;
            } else {
                header("Location : administrator?survey?quiz=fail");
                echo "Error: " . $sql . "<br>" . $conn->error;
                $created=false;
            }
        }
        if($survey4!="")
        {
            $sql = "INSERT INTO Survey (ISO_3166, Survey, SurveyName, Mode, AllCountries) VALUES ('Visos', '$survey4', '$surveyName4', 'Aktyvi', 'Taip');";
            if ($conn->multi_query($sql) === TRUE) {
                echo "New records created successfully";
                $created=true;
            } else {
                header("Location : administrator?survey?quiz=fail");
                echo "Error: " . $sql . "<br>" . $conn->error;
                $created=false;
            }
        }
        if($survey5!="")
        {
            $sql = "INSERT INTO Survey (ISO_3166, Survey, SurveyName, Mode, AllCountries) VALUES ('Visos', '$survey5', '$surveyName5', 'Aktyvi', 'Taip');";
            if ($conn->multi_query($sql) === TRUE) {
                echo "New records created successfully";
                $created=true;
            } else {
                header("Location : administrator?survey?quiz=fail");
                echo "Error: " . $sql . "<br>" . $conn->error;
                $created=false;
            }
        }
        header("Location : administrator?survey?quiz=success");

    }
    else if($var=="")
    {
        if($survey1!="" && $ISO!='Pasirinkite šalį (ISO)')
        {
            $sql = "INSERT INTO Survey (ISO_3166, Survey, SurveyName, Mode, AllCountries) VALUES ('$ISO', '$survey1', '$surveyName1', 'Aktyvi', 'Ne');";
            if ($conn->multi_query($sql) === TRUE) {
                echo "New records created successfully";
                $created=true;
            } else {
                header("Location : administrator?survey?quiz=fail");
                echo "Error: " . $sql . "<br>" . $conn->error;
                $created=false;
            }
        }

        if($survey2!="" && $ISO!='Pasirinkite šalį (ISO)')
        {
            $sql = "INSERT INTO Survey (ISO_3166, Survey, SurveyName, Mode, AllCountries) VALUES ('$ISO', '$survey2', '$surveyName2', 'Aktyvi', 'Ne');";
            if ($conn->multi_query($sql) === TRUE) {
                echo "New records created successfully";
                $created=true;
            } else {
                header("Location : administrator?survey?quiz=fail");
                echo "Error: " . $sql . "<br>" . $conn->error;
                $created=false;
            }
        }
        if($survey3!="" && $ISO!='Pasirinkite šalį (ISO)')
        {
            $sql = "INSERT INTO Survey (ISO_3166, Survey, SurveyName, Mode, AllCountries) VALUES ('$ISO', '$survey3', '$surveyName3', 'Aktyvi', 'Ne');";
            if ($conn->multi_query($sql) === TRUE) {
                echo "New records created successfully";
                $created=true;
            } else {
                header("Location : administrator?survey?quiz=fail");
                echo "Error: " . $sql . "<br>" . $conn->error;
                $created=false;
            }
        }
        if($survey4!="" && $ISO!='Pasirinkite šalį (ISO)')
        {
            $sql = "INSERT INTO Survey (ISO_3166, Survey, SurveyName, Mode, AllCountries) VALUES ('$ISO', '$survey4', '$surveyName4', 'Aktyvi', 'Ne');";
            if ($conn->multi_query($sql) === TRUE) {
                echo "New records created successfully";
                $created=true;
            } else {
                header("Location : administrator?survey?quiz=fail");
                echo "Error: " . $sql . "<br>" . $conn->error;
                $created=false;
            }
        }
        if($survey5!="" && $ISO!='Pasirinkite šalį (ISO)')
        {
            $sql = "INSERT INTO Survey (ISO_3166, Survey, SurveyName, Mode, AllCountries) VALUES ('$ISO', '$survey5', '$surveyName5', 'Aktyvi', 'Ne');";
            if ($conn->multi_query($sql) === TRUE) {
                echo "New records created successfully";
                $created=true;
            } else {
                header("Location : administrator?survey?quiz=fail");
                echo "Error: " . $sql . "<br>" . $conn->error;
                $created=false;
            }
        }
        header("Location : administrator?survey?quiz=success");
    }
    else{
        header("Location : administrator?survey?quiz=fail");
    }

?>