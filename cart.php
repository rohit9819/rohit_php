
<?php
$selected_courses = $_POST['courses'];
$total = 0;

$course_details = [
    1 => ["name" => "MLOps Course", "price" => 150],
    2 => ["name" => "AIOps Course", "price" => 200],
    3 => ["name" => "Multi-Cloud Course", "price" => 250]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cart</title>
    <style>
        .container { width: 80%; margin: 20px auto; text-align: center; }
        .course { padding: 10px; margin: 10px; border-bottom: 1px solid #ddd; }
        .total { font-weight: bold; }
        .pay-button { background-color: #4CAF50; color: white; padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer; }
    </style>
</head>
<body>
<div class="container">
    <h1>Your Cart</h1>
    <?php foreach ($selected_courses as $course_id): ?>
        <div class="course">
            <?= $course_details[$course_id]["name"] ?> - ₹<?= $course_details[$course_id]["price"] ?>
            <?php $total += $course_details[$course_id]["price"]; ?>
        </div>
    <?php endforeach; ?>
    <div class="total">Total: ₹<?= $total ?></div>
    <button class="pay-button" onclick="window.location.href='https://pay.upilink.in/pay/raiviteja@axl?am=<?= $total ?>'">Pay Now</button>
</div>
</body>
</html>
