<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Random Neko</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Random Neko</h1>
        <div class="image-container">
            <?php
            $apiUrl = "https://api.waifu.pics/sfw/neko";
            for ($i = 0; $i < 5; $i++) {
                $response = file_get_contents($apiUrl);
                $data = json_decode($response, true);
                $imageUrl = $data['url'];
                echo "<img src=\"$imageUrl\" alt=\"Neko Image\">";
            }
            ?>
        </div>
        <a href="index.html" class="back-button">Back</a>
    </div>
</body>
</html>
