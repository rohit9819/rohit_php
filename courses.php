
<?php
$courses = [
    ["id" => 1, "name" => "MLOps Course", "price" => 150],
    ["id" => 2, "name" => "AIOps Course", "price" => 200],
    ["id" => 3, "name" => "Multi-Cloud Course", "price" => 250]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Select Courses</title>
    <style>
        .container { width: 80%; margin: 20px auto; text-align: center; }
        .course { border: 1px solid #ddd; padding: 20px; margin: 20px; display: inline-block; width: 200px; border-radius: 8px; }
        .course h2 { color: #4CAF50; }
        .button { background-color: #4CAF50; color: white; padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer; }
    </style>
</head>
<body>
<div class="container">
    <h1>Select Courses</h1>
    <form action="cart.php" method="post">
        <?php foreach ($courses as $course): ?>
            <div class="course">
                <h2><?= $course['name'] ?></h2>
                <p>Price: ₹<?= $course['price'] ?></p>
                <input type="checkbox" name="courses[]" value="<?= $course['id'] ?>"> Select
            </div>
        <?php endforeach; ?>
        <button type="submit" class="button">Add to Cart</button>
    </form>
</div>
</body>
</html>
