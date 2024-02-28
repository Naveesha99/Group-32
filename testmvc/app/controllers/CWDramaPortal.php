<?php

/**
 *  cw drama portal
 */
class CWDramaPortal
{
	use Controller;

	public function index()
	{
		if (empty($_SESSION['USER'])) {
			// Redirect or handle the case when the user is not logged in
			// For example, you might want to redirect them to the login page
			redirect('cwLogin');
			exit();
		}

		// Fetch articles based on category if provided in the URL
		$category = isset($_GET['category']) ? $_GET['category'] : null;
		$searchQuery = isset($_GET['search']) ? $_GET['search'] : null;

		// Fetch articles based on the selected category and search query
		$article = new Article;
		if ($category && $category !== "All categories") {
			if ($searchQuery) {
				$result = $article->findPublishArticlesByCategoryAndSearch($category, $searchQuery); // Assuming you have a method to fetch articles by category and search query
			} else {
				$result = $article->findPublishArticlesByCategory($category); // Assuming you have a method to fetch articles by category
			}
		} else {
			$result = $article->findPublishArticles(); // Fetch all articles if no category is selected
		}

		$data = $result;

		$this->view('contentwriter/cwDramaPortal', $data);

		// $data['username'] = empty($_SESSION['USER']) ? 'User':$_SESSION['USER']->email;

		// $article = new article;
		// $result = $article->findPublishArticles();
		// $data = $result;


		// $this->view('contentwriter/cwDramaPortal', $data);
	}
}
