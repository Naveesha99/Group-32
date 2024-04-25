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
			redirect('login');
			exit();
		}


		$data['username'] = empty($_SESSION['USER']) ? 'User' : $_SESSION['USER']->email;

		$article = new Article;
		$result = $article->findPublishArticles();
		$data['articles'] = $result;

		// Check if a category filter is applied
		$selectedCategory = isset($_GET['category']) ? $_GET['category'] : 'All categories';
		if ($selectedCategory !== 'All categories') {

			// Filter articles based on the selected category
			$filteredArticles = array_filter($result, function ($article) use ($selectedCategory) {
				return $article->category === $selectedCategory;
			});

			$data['articles'] = $filteredArticles;
		} else {
			$data['articles'] = $article->findPublishArticles();
		}

		$searchQuery = isset($_GET['search']) ? $_GET['search'] : '';
		if (!empty($searchQuery)) {

			// Filter articles based on the search query
			$data['articles'] = array_filter($data['articles'], function ($article) use ($searchQuery) {
				// Perform case-insensitive search in article name and content
				return stripos($article->article_name, $searchQuery) !== false ||
					stripos($article->article_content, $searchQuery) !== false;
			});
			// show($data['articles']);
		}

		// $data['articles'] = $result;
		// show($data);
		$data['select_categoery'] = $selectedCategory;
		$this->view('contentwriter/cwDramaPortal', $data);
	}
}
