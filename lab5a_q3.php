<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab 5a Q3</title>
</head>
<body>
<?php
function multiplication($multiplier) {
    $results = array();
    for ($i = 1; $i <= 12; $i++) {
        $results[] = array('No' => $i, 'Multiplier' => $multiplier, 'Answer' => $i * $multiplier);
    }
    return $results;
}

$multiplier = 2;
$results = multiplication($multiplier);
?>

<table border="1">
    <tr>
        <th>No</th>
        <th>Multiplier</th>
        <th>Answer</th>
    </tr>
    <?php foreach ($results as $result) { ?>
    <tr>
        <td><?php echo $result['No']; ?></td>
        <td><?php echo $result['Multiplier']; ?></td>
        <td><?php echo $result['Answer']; ?></td>
    </tr>
    <?php } ?>
</table>
</body>
</html>