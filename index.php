<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Jxnge Stats</title>
</head>
<body>
    <header>
        <a href="index.php">Jxnge Stats</a>
    </header>
    <main>
        <h1>Below there is some data. If you want to see visualisation of particular data (like map, chart, etc.) click on the name of that data.</h1>
        <h2>If you want do download catalog containing data, visualisation and source in <span style = "color:red">.zip</span> format click on the download button next to the name.</h1></h2>
        <ul>
        <?php
            $catalogs = glob('Data/*', GLOB_ONLYDIR);
            foreach($catalogs as $catalog) {
                $catalogName = basename($catalog);
                $svgFiles = glob("$catalog/*.svg");
                $zipFiles = glob("$catalog/*.zip");

                foreach($svgFiles as $svgFile) {
                    $svgFileName = $svgFile;
                }

                foreach($zipFiles as $zipFile) {
                    $zipFileName = $zipFile;
                }
                
                echo "<li><a href='$svgFileName'>$catalogName</a>   <a href='$zipFileName' id='download' download>Download</a></li>";
            }
        ?>
        </ul>
    </main>
    <footer>
        <p>© 2024 Jxnge Stats</p>
    </footer>
</body>
</html>