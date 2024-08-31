<h1>Condition</h1>

<?php
    $age=0;
    if($age >= 18){
        echo "Legal Age";
    } else if($age >= 0 && $age <= 10){
        echo "Something";
    }  else {
        echo "Minor";
    }


    $ageLabel = ($age >= 18) ? '18+' : '17-';
    echo $ageLabel;

    $role='';

    if($role == 'admin'){
        //logic
    }


    $role = "instructor";
    switch($role){
        case 'admin';
        # code
        echo "You have full access";
        break;

        case 'student';
        # code
        echo "You can only access ...";
        break;

        case 'instructor';
        # code
        echo "onti lang";
        break;

    }

?>