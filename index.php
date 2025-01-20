<?php
$password = "Geeks@123";
$pattern = '/^(?=.[A-z])(?=.@#!&)(?=.*\d).{8,}$/';
if (preg_match($pattern, $password)) {
    echo "Valid Password";
} else {
    echo "Invalid Password";
}

?>
<hr>
<br>
<?php
        $data = "Rishav Ranjan";
        if (preg_match("/^[A-z ]+$/", $data)){
            echo "match";
        }
        else{
            echo "No Match";
        }
?>

<hr>
<br>
<?php
        $data = 9765432145;
        if (preg_match("/^[6-9][0-9]{9}$/", $data)){
            echo "match";
        }
        else{
            echo "No Match";
        }
?>

<hr>
<br>
<?php
        $data = "AJQPH3423G";
        if (preg_match("/^[A-Z]{5}[0-9]{4}[A-Z]$/", $data)){
            echo "match";
        }
        else{
            echo "No Match";
        }
?>