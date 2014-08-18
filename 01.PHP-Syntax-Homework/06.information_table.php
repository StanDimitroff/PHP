<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Table</title>
</head>
<body>
<?php
//Write a PHP script information_table.php which creates a table from given information about a person (name, phone number, age, address). Styling the table is optional. Semantic HTML is required.

function printTable($name, $phone, $age, $address)
{
    echo '<table><tbody>' .
        '<tr><td>Name</td><td>' . $name . '</td></tr>' .
        '<tr><td>Phone number</td><td>' . $phone . '</td></tr>' .
        '<tr><td>Age</td><td>' . $age . '</td></tr>' .
        '<tr><td>Address</td><td>' . $address . '</td></tr>' . '</tbody></table>' . '<style>
    table td{
    border:1px solid black;
    }
    table{
    border-collapse:collapse;
    }
    table td:nth-child(odd){
    background-color:orange;
    }
    table td:nth-child(even){
    text-align:right;
    }
    </style>' . '<br>';
}

printTable('Gosho', '0882-321-423', 24, 'Hadji Dimitar');
printTable('Pesho', '0884-888-888', 67, 'Suhata Reka');
?>
</body>
</html>