<?php
if (isset($_POST['title'])) {
    try {
        include 'includes/DatabaseConnection.php';

        // Combine content and what_tried for the post text
        $text = $_POST['content'] . "\n\n" . $_POST['what_tried'];

        // Prepare and execute the SQL query
        $sql = 'INSERT INTO posts (Title, Content, Image, AuthorID)
                VALUES (:title, :content, :image, :author_id)';
        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(':title', $_POST['title']);
        $stmt->bindValue(':content', $text);
        $stmt->bindValue(':author_id', 1, PDO::PARAM_INT); 
        $stmt->bindValue(':image', $_POST['image_url'] ?? null);
        $stmt->execute();

                // Get the ID of the newly inserted post
                $postId = $pdo->lastInsertId();

  // If a module is selected, insert into post_modules
  if (!empty($_POST['module_id'])) {
    $sqlModule = 'INSERT INTO post_modules (PostID, ModuleID)
                  VALUES (:post_id, :module_id)';
    $stmtModule = $pdo->prepare($sqlModule);
    $stmtModule->bindValue(':post_id', $postId, PDO::PARAM_INT);
    $stmtModule->bindValue(':module_id', $_POST['module_id'], PDO::PARAM_INT);
    $stmtModule->execute();
}
        // Redirect to the homepage after successful submission
        header('Location: index.php');
        exit;

    } catch (Exception $e) {
        $title = 'An error has occurred';
        $output = 'General error: ' . $e->getMessage();
        include 'templates/layout.html.php';
        exit;
    }
} else {
    include 'includes/DatabaseConnection.php';
    $title = 'Ask a Question - GrenovateHub';
   // Fetch module list
   $sql = 'SELECT ModuleID AS id, ModuleName AS name FROM modules';
   $modules = $pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);

    ob_start();
    include 'templates/add_Post.html.php';
    $output = ob_get_clean();
}
include 'templates/layout.html.php';