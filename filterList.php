<?php
echo "Available Filters: <br>";
foreach(filter_list() as $id => $filter) {
    echo $filter . " - ID = " . filter_id($filter) . "<br>";
}

// check if 'name' is present in the GET request
if(filter_has_var(INPUT_GET, 'name')) {
    echo "Name is present: " . $_GET['name'] . "<br>";
} else {
    echo "Name is not present.<br>";
}

if(filter_has_var(INPUT_GET, 'age')) {
    echo "Age is present: " . $_GET['age'] . "<br>";
} else {
    echo "Age is not present.<br>";
}


?>
