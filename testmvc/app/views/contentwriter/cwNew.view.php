class CWDramaLike
{
    use Controller;

    public function index()
    {
        $article = new Article();
        $articleLikes = new ArticleLikes(); // A new model for the `article_likes` table

        $articleId = $_POST['id'];
        $userId = $_SESSION['user_id']; // Assume the user's ID is stored in session

        $articleData = $article->first(['id' => $articleId]);

        if ($articleData) {
            $likeExists = $articleLikes->first(['article_id' => $articleId, 'user_id' => $userId]);

            if ($_POST['likes'] === "true") {
                // If the user is liking the article and hasn't already liked it
                if (!$likeExists) {
                    // Increment the like count
                    $article->update($articleId, ['likes' => $articleData->likes + 1]);

                    // Insert into the `article_likes` table
                    $articleLikes->insert(['article_id' => $articleId, 'user_id' => $userId]);
                }
            } else {
                // If the user is unliking the article
                if ($likeExists) {
                    // Decrement the like count
                    $article->update($articleId, ['likes' => $articleData->likes - 1]);

                    // Remove from the `article_likes` table
                    $articleLikes->delete(['article_id' => $articleId, 'user_id' => $userId]);
                }
            }
        }

        echo json_encode(['success' => true]);
    }
}
