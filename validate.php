<?php
$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $gender = $comment = $website = "";
if ($_server["request_method"] == "post") {
    if (empty($_post["name"])){
        $nameErr = "name is required";
    } else {
        $name = test_input ($_post["name"]);
        if (! preg_match("/^[a-zA-Z ]*S/",$name)){
            $nameErr = "only letters and  white space allowed";
        }
    }
    if (empty($_post["email"])) {
        $emailErr = "email is required";
    }else{
        $email = test_input($_post["email"]);
        if (!filter_var($email,filter_validate_email)) {
            $emailErr = " invalid email formate";
        }
    }
    if (empty($_post["website"])) {
        $website = "";
    } else {
        $website = test_input($_post["website"]);
        if (!preg_match("/\b("))
    }
}