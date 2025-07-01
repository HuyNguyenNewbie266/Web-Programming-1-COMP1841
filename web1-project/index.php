<?php
$title = 'GrenovateHub';
try{
    include 'includes/DatabaseConnection.php';
    $sql = 'SELECT
    p.PostID         AS id,
    p.Title          AS title,
    p.Content        AS text,
    p.Image          AS image,
    p.DateCreated    AS date,
    u.Username       AS username,
    m.ModuleName     AS module
FROM
    posts p
    -- join to author
    JOIN users u
      ON p.AuthorID = u.UserID

    -- ensure the author has the Admin role
    JOIN user_roles ur
      ON u.UserID = ur.UserID
    JOIN roles r
      ON ur.RoleID = r.RoleID
       AND r.Name = \'Admin\'
    LEFT JOIN post_modules pm
      ON p.PostID = pm.PostID
    LEFT JOIN modules m
      ON pm.ModuleID = m.ModuleID
ORDER BY
    p.PostID ASC
LIMIT 3;';


$admin_questions = $pdo->query($sql);


$sql2 = 'SELECT
    p.PostID         AS id,
    p.Title          AS title,
    p.Content        AS text,
    p.Image          AS image,
    p.DateCreated    AS date,
    u.Username       AS username,
    m.ModuleName     AS module
FROM
    posts p
LEFT JOIN
    users u ON p.AuthorID = u.UserID
LEFT JOIN
    post_modules pm ON p.PostID = pm.PostID
LEFT JOIN
    modules m ON pm.ModuleID = m.ModuleID
ORDER BY
    p.PostID ASC;
    ';

$questions = $pdo->query($sql2);

ob_start();
include 'templates/home.html.php';
$output = ob_get_clean();

} catch (PDOException $e) {
    $title = 'An error has occurred';
    $output = "Database error: " . $e->getMessage();
}


include 'templates/layout.html.php';
?>
