<?php
session_start();
$file_path = $_SESSION['file_path'];
// Specify the folders for books and images
$booksFolder = $file_path; // Folder containing book files
$imagesFolder = "assets/images"; // Folder containing cover images

// Supported image extensions
$imageExtensions = ['jpg', 'jpeg', 'png', 'gif'];

// Scan the books folder for files
$bookFiles = array_filter(scandir($booksFolder), function($file) use ($booksFolder) {
    return is_file("$booksFolder/$file");
});

// Start generating the HTML
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="read.css">
    <title>book list</title>
</head>
<body>
    <div class="container">
    <h1>Book List</h1><hr>
    <?php foreach ($bookFiles as $book): ?>
        <?php
        $bookPath = "$booksFolder/$book";
        $bookName = pathinfo($book, PATHINFO_FILENAME);

        // Check for a matching cover image
        $coverImage = null;
        foreach ($imageExtensions as $ext) {
            $imagePath = "$imagesFolder/$bookName.$ext";
            if (file_exists($imagePath)) {
                $coverImage = $imagePath;
                break;
            }
        }
        ?>
        <div class="book row">
            <?php if ($coverImage): ?>
                <a href="<?= htmlspecialchars($bookPath) ?>" target="_blank">
                    <img src="<?= htmlspecialchars($coverImage) ?>" alt="Cover of <?= htmlspecialchars($bookName) ?>">
                </a>
            <?php else: ?>
                <a href="<?= htmlspecialchars($bookPath) ?>" target="_blank" >
                    <img src="placeholder.png" alt="No cover available" style="opacity: 0.5;"> 
                </a>
            <?php endif; ?>
            <div class="book-name" > <?= htmlspecialchars($bookName) ?> </div>
        </div>
    <?php endforeach; ?>
    </div>
</body>
</html>
