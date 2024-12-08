<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab 5a Q2</title>
</head>
<body>
    <?php
    $students = [
        [
            'name'=> 'Alice',
            'Program' => 'BIP',
            'Age' => 21 
        ],
        [
            'name'=> 'Bob',
            'Program' => 'BIS',
            'Age' => 20 
        ],
        [
            'name'=> 'Raju',
            'Program' => 'BIT',
            'Age' => 22
        ],
    ];
    ?>

    <table border="1">
        <tr>
            <th>name</th>
            <th>Program</th>
            <th>Age</th>
        </tr>
        <?php foreach ($students as $student): ?>
        <tr>
            <td><?php echo $student['name']; ?></td>
            <td><?php echo $student['Program']; ?></td>
            <td><?php echo $student['Age']; ?></td>
        </tr>
        <?php endforeach; ?>
    </table>    
</body>
</html>