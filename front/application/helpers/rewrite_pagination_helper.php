<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Pagination Helper
 *
 * @author		Choy Peng Kong (pengkong@gmail.com)
 */

// ------------------------------------------------------------------------

/**
 * Generate pagination
 *
 * @access	public
 * @return	array
 */
if ( ! function_exists('pagination'))
{
	function pagination($total_results, $page, $results, $url, $num_of_page_links = 3) 
	{
		// Get results, check lower and upper limit
		$results = $results ? $results : 20;
		if ( ! is_numeric($results) || $results < 10) $results = 10;
		if ($results > 100) $results = 100;
		
		// Determine total_pages
		$total_pages = ceil($total_results/$results);
		
		// Get page number, check lower and upper limit
		$page = $page ? $page : 1;
		if ( ! is_numeric($page) || $page < 1) $page = 1;
		if ($page > $total_pages) $page = $total_pages;
		
		// Determine start_row and end_row
		$row_start = (($page - 1) * $results) + 1;
		$row_end = $page * $results;
		if ($row_end > $total_results) $row_end = $total_results;
		
		
		//if(isset($url['page'])) unset($url['page']);
		
		// Generate pagination display
		$pagination = '';
		
		if ($total_pages > 1)
		{
			// Twitter's bootstrap pagination markup
			$pagination .= '<div class="pagination"><ul>';
			
			// Generate prev link
			if ($page != 1)
			{
				$new_page = $page-1;
				$pagination .= '<li class="prev"><a href="'.$url.'/page/'.$new_page.'">&larr; 上一页</a></li>';
			}
			else
			{
				$new_page = $page;
				$pagination .= '<li class="prev disabled"><a href="'.$url.'/page/'.$new_page.'" onclick="return false;">&larr; 上一页</a></li>';
			}
			
			// Generate prefix page links
			$first_prefix = $page - $num_of_page_links;
			if ($first_prefix > 1)
			{
				$new_page = 1;
				$pagination .= '<li><a href="'.$url.'/page/'.$new_page.'">'.$new_page.'</a></li>';
			}
			if ($first_prefix > 2)
			{
				$new_page = $page;
				$pagination .= '<li class="disabled"><a href="'.$url.'/page/'.$new_page.'" onclick="return false;">…</a></li>';
			}
			for ($i=$first_prefix; $i<$page; $i++) if ($i > 0)
			{
				$new_page = $i;
				$pagination .= '<li><a href="'.$url.'/page/'.$new_page.'">'.$new_page.'</a></li>';
			}
			
			// Current page
			$new_page = $page;
			$pagination .= '<li class="disabled"><a href="'.$url.'/page/'.$new_page.'" onclick="return false;">'.$new_page.'</a></li>';
			
			// Generate postfix page links
			$last_postfix = $page + $num_of_page_links;
			$first_prefix = $page - $num_of_page_links;
			for ($i=$page; $i<$last_postfix; $i++) if ($i < $total_pages)
			{
				$new_page = $i+1;
				$pagination .= '<li><a href="'.$url.'/page/'.$new_page.'">'.$new_page.'</a></li>';
			}
			if ($last_postfix < $total_pages - 1)
			{
				$new_page = $page;
				$pagination .= '<li class="disabled"><a href="'.$url.'/page/'.$new_page.'" onclick="return false;">…</a></li>';
			}
			if ($last_postfix < $total_pages)
			{
				$new_page = $total_pages;
				$pagination .= '<li><a href="'.$url.'/page/'.$new_page.'">'.$new_page.'</a></li>';
			}
			
			// Generate next link
			if ($page != $total_pages)
			{
				$new_page = $page+1;
				$pagination .= '<li class="prev"><a href="'.$url.'/page/'.$new_page.'">下一页 &rarr;</a></li>';
			}
			else
			{
				$new_page = $page;
				$pagination .= '<li class="prev disabled"><a href="'.$url.'/page/'.$new_page.'" onclick="return false;">下一页 &rarr;</a></li>';
			}
			
			$pagination .= '</ul></div>';
		}
		
		return array(
			'html' => $pagination,
			'page' => $page,
			'limit' => $results,
			'offset' => $page * $results - $results,
			'row_start' => $row_start,
			'row_end' => $row_end,
			'total_results' => $total_results,
			'total_pages' => $total_pages
		);
	}
}


/* End of file pagination_helper.php */
/* Location: ./system/application/helpers/pagination_helper.php */
