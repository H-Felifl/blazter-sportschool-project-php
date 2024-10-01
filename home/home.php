<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap Cards with PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container my-5">
    <div class="row">

        <?php
        // Sample array of data
        $categories = [
            [
                "title" => "Card 1",
                "description" => "This is the first card's description.",
                "image" => "https://via.placeholder.com/150"
            ],
            [
                "title" => "Card 2",
                "description" => "This is the second card's description.",
                "image" => "https://via.placeholder.com/150"
            ],
            [
                "title" => "Card 3",
                "description" => "This is the third card's description.",
                "image" => "https://via.placeholder.com/150"
            ]
        ];

        // Loop through the array to generate cards
        foreach ($categories as $category) {
            echo '
        <div class="col-md-4">
            <div class="card">
                <img src="' . $category["image"] . '" class="card-img-top" alt="' . $category["title"] . '">
                <div class="card-body">
                    <h5 class="card-title">' . $category["title"] . '</h5>
                    <p class="card-text">' . $category["description"] . '</p>
                </div>
            </div>
        </div>';
        }
        ?>

    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
