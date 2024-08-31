<?php

    $table = array(
        "header" => array(
            "StudentID",
            "Firstname",
            "Middlename",
            "Lastname",
            "Section",
            "Course",
            "Yearlevel"
        ),
        "body" => array(
                  array(
                    "firstname"=>"Firstname",
                    "middlename"=>"Middlename",
                    "lastname"=>"Lastnamte",
                    "section"=>"Section",
                    "course"=>"Course",
                    "yearlevel"=>"Yearlevel"
                  ),
                  array(
                    "firstname"=>"Firstname",
                    "middlename"=>"Middlename",
                    "lastname"=>"Lastnamte",
                    "section"=>"Section",
                    "course"=>"Course",
                    "yearlevel"=>"Yearlevel"
                  ),
                  array(
                    "firstname"=>"Firstname",
                    "middlename"=>"Middlename",
                    "lastname"=>"Lastnamte",
                    "section"=>"Section",
                    "course"=>"Course",
                    "yearlevel"=>"Yearlevel"
                  ),
                  array(
                    "firstname"=>"Firstname",
                    "middlename"=>"Middlename",
                    "lastname"=>"Lastnamte",
                    "section"=>"Section",
                    "course"=>"Course",
                    "yearlevel"=>"Yearlevel"
                  ),
                  array(
                    "firstname"=>"Firstname",
                    "middlename"=>"Middlename",
                    "lastname"=>"Lastnamte",
                    "section"=>"Section",
                    "course"=>"Course",
                    "yearlevel"=>"Yearlevel"
                  ),
                  array(
                    "firstname"=>"Firstname",
                    "middlename"=>"Middlename",
                    "lastname"=>"Lastnamte",
                    "section"=>"Section",
                    "course"=>"Course",
                    "yearlevel"=>"Yearlevel"
                  ),
                  array(
                    "firstname"=>"Firstname",
                    "middlename"=>"Middlename",
                    "lastname"=>"Lastnamte",
                    "section"=>"Section",
                    "course"=>"Course",
                    "yearlevel"=>"Yearlevel"
                  ),
                  array(
                    "firstname"=>"Firstname",
                    "middlename"=>"Middlename",
                    "lastname"=>"Lastnamte",
                    "section"=>"Section",
                    "course"=>"Course",
                    "yearlevel"=>"Yearlevel"
                  ),
                  array(
                    "firstname"=>"Firstname",
                    "middlename"=>"Middlename",
                    "lastname"=>"Lastnamte",
                    "section"=>"Section",
                    "course"=>"Course",
                    "yearlevel"=>"Yearlevel"
                  ),
                  array(
                    "firstname"=>"Firstname",
                    "middlename"=>"Middlename",
                    "lastname"=>"Lastnamte",
                    "section"=>"Section",
                    "course"=>"Course",
                    "yearlevel"=>"Yearlevel"
                  )
        )
    )



?>

<table border="1">
    <thead>
        <?php
        $i = 0;
            while( $i <= count($table["header"]) -1){
                echo "<th>".$table["header"][$i]."</th>";
                $i++;
            }
        ?>
    </thead>
    <tbody>
        <?php
        $i = 0;
            while($i <= count($table["body"]) -1){
                echo "<tr>";
                echo "<td>".$i. "</td>";
                echo "<td>".$table["body"][$i]["firstname"]. "</td>";
                echo "<td>".$table["body"][$i]["middlename"]. "</td>";
                echo "<td>".$table["body"][$i]["lastname"]. "</td>";
                echo "<td>".$table["body"][$i]["section"]. "</td>";
                echo "<td>".$table["body"][$i]["course"]. "</td>";
                echo "<td>".$table["body"][$i]["yearlevel"]. "</td>";
                echo "<tr>";
                $i++;
            }
        ?>    
    <tbody>
<table>
        
