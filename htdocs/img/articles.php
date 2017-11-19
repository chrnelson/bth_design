<?php
$title = "Begravningsmuseum Online";
include("incl/config.php");
include("incl/header.php");
include('incl/db_functions.php');

// Connect to the database
$db = databaseConnect(DSN);

?>

<main>

<?php

$id = isset($_GET['id'])
    ? $_GET['id']
    : null;

if ($id != null) {

    $article = getArticle($id);
    if (empty($article)) {
        die("Ogiltigt id");
    }

    echo "<article>";
    echo "<header>";

    echo "<h2 class='articleTitle'>" . $article['title'] . "</h2>";

    if (getLoggedInUser() !== false) {
        if ($article['category'] != "article") {
            echo "<a href='article_edit.php?id=$id'><img src='img/db_update.png' alt='Uppdatera'></a><br><br>";
        } else {
            echo "<a href='article_edit.php?id=$id'><img src='img/db_update.png' alt='Uppdatera'></a><a href='article_delete.php?id=$id'><img src='img/db_delete.png' alt='Radera'></a><br><br>";
        }
    }

    echo "<p class='articleMetadata'>" . $article['author'] . " " . $article['pubdate'] . "</p>";
    echo "</header>";
    echo $article['content'];
    echo "</article>";
    echo "<article>";

    $imageCategory = null;

    switch ($article['title']) {
        case "Begravningskonfekt":
            $imageCategory = "Begravningskonfekt";
            break;
        case "Minnestavlor":
            $imageCategory = "Minnestavla";
            break;
        case "Pärlkransar":
            $imageCategory = "Pärlkrans";
            break;
        case "Begravningsfest och gravöl - ett stort kalas":
            $imageCategory = "Begravningsfest";
            break;
    }

    if ($imageCategory != null) {
        $sql = "SELECT * FROM Object WHERE category LIKE ?";
        $stmt = $db->prepare($sql);
        // Execute the SQL statement using parameters to replace the ?
        $params = [$imageCategory];
        $stmt->execute($params);
        // Get the results as an array with column names as array keys
        $res = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $imgSize = '80x80';

        $rows = null;

        foreach ($res as $row) {
            $id = htmlentities($row['id']);
            $title = htmlentities($row['title']);
            //$category = htmlentities($row['category']);
            $text = htmlentities($row['text']);
            $image = htmlentities($row['image']);
            $imageURL = str_replace('bmo', $imgSize, $image);
            $owner = htmlentities($row['owner']);
            $rows .= "<tr>";
            $rows .= "<td><a href='objects.php?id=$id'><img src='$imageURL' alt='$title'></a></td>";
            //$rows .= "<td>$id</td>";
            //$rows .= "<td>$title</td>";
            //$rows .= "<td>$category</td>";
            $rows .= "<td>$text</td>";
            //$rows .= "<td>$owner</td>";
            $rows .= "</tr>\n";
        }

        // Print out the result as a HTML table using PHP heredoc
        echo <<<EOD
<h3>Föremål i muséets samlingar</h3>
<p>Klicka på bilden för att bekanta dig med föremålet.</p>
<table>
$rows
</table>
<br>

EOD;

    }

} else {

    // Prepare the SQL statement
    $sql = "SELECT id, category, title, author, pubdate FROM Article WHERE category LIKE ?";
    $stmt = $db->prepare($sql);

    // Execute the SQL statement using parameters to replace the ?
    if (getLoggedInUser() !== false) {
        $params = ['%'];
        $stmt->execute($params);
    } else {
        $params = ['article'];
        $stmt->execute($params);
    }

    // Get the results as an array with column names as array keys
    $res = $stmt->fetchAll(PDO::FETCH_ASSOC);

    $rows = null;

    foreach ($res as $row) {
        $id = htmlentities($row['id']);
        $category = htmlentities($row['category']);
        $title = htmlentities($row['title']);
        $author = htmlentities($row['author']);
        $pubdate = htmlentities($row['pubdate']);
        $rows .= "<tr>";
        if (getLoggedInUser() !== false) {
            if ($category != "article") {
                $rows .= "<td>$id</td><td>$category</td><td class='nowrap'><a href='article_edit.php?id=$id'><img src='img/db_update.png' alt='Uppdatera'></a></td>";
            } else {
                $rows .= "<td>$id</td><td>$category</td><td class='nowrap'><a href='article_edit.php?id=$id'><img src='img/db_update.png' alt='Uppdatera'></a><a href='article_delete.php?id=$id'><img src='img/db_delete.png' alt='Radera'></a></td>";
            }

        }
        $rows .= "<td><a href='articles.php?id=$id'>$title</a></td>";
        $rows .= "<td>$author</td>";
        $rows .= "<td>$pubdate</td>";
        $rows .= "</tr>\n";
    }

    echo <<<EOD
    <article>
        <header>
            <h2 class="articleTitle">Artiklar</h2>
        </header>
EOD;

    if (getLoggedInUser() !== false) {
        echo "<a href='article_add.php'>Lägg till artikel</a>";
    }

    echo <<<EOD
        <table>
            <tr>
EOD;
    if (getLoggedInUser() !== false) {
        echo "<th>id</th><th>kategori</th><th></th>";
    }
    echo <<<EOD
<th>titel</th>
<th>författare</th>
<th>publiceringsdag</th>
</tr>
$rows
</table>
EOD;
}

?>

    </article>
</main>

<?php include("incl/footer.php"); ?>
