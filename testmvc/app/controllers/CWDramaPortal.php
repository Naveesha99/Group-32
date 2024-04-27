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


		$cwId =$_SESSION['USER']->id;


		$article = new Article;
		if ($cwId) {
			$arr1['cw_id'] = $cwId;
			$articleData = $article->where($arr1);
			if ($articleData) {

				$result = array_filter($articleData, function ($article) {
					return $article->status == 1 && $article->progress == 'accepted';
				});


            } else {
                echo "Article not found.";
                exit();
            }
		}
		
		// $data['result'] = $result;

		// Check if a category filter is applied
		$selectedCategory = isset($_GET['category']) ? $_GET['category'] : 'All categories';
		if ($selectedCategory !== 'All categories') {

			// Filter articles based on the selected category
			$filteredArticles = array_filter($result, function ($article) use ($selectedCategory,$cwId) {
				return $article->category === $selectedCategory && $article->cw_id == $cwId;
			});

			$data['articles'] = $filteredArticles;
		} else {
			$data['articles'] = $result;
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
