<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('get_pagination'))
{
	function get_pagination($total_results, $limit, $page)
	{
		// Check for valid and limit
		$page = $page < 1 ? 1 : $page;
		$limit = $limit < 1 ? 1 : $limit;
		
		$total_pages = ceil($total_results/$limit);
		$page = $page > $total_pages ? $total_pages : $page;
		$offset = (($page * $limit) - $limit);
		
		return array(
			'limit'	=> $limit,
			'offset' => $offset < 1 ? 0 : $offset,
			'page'	=> $page
		);
	}
}

if ( ! function_exists('is_valid_date'))
{
	function is_valid_date($date)
	{
		// yyyy-mm-dd 
		if (preg_match("/^(\d{4})-(\d{2})-(\d{2})$/", $date, $matches))
		{
			if (checkdate($matches[2], $matches[3], $matches[1])) return TRUE;
		}
	}
}

if ( ! function_exists('doCurl'))
{
	function doCurl($url, $param = NULL, $method = NULL)
	{
		log_message('debug', 'SNB-curl: Call to '.$url.($method == 'POST' ? ' with '.preg_replace('/\n/', '',print_r($param, TRUE)) : '')); 

		$process= curl_init($url);
		curl_setopt($process, CURLOPT_TIMEOUT, 30);
		if($method == 'POST')
		{
			curl_setopt($process, CURLOPT_POST, TRUE);
			curl_setopt($process, CURLOPT_POSTFIELDS, $param);
			curl_setopt($process, CURLOPT_CUSTOMREQUEST, $method); 
		}
		curl_setopt($process, CURLOPT_RETURNTRANSFER, TRUE);
		$content = array();
		$content['output'] = curl_exec($process);
		$content['http_status_code'] = curl_getinfo($process, CURLINFO_HTTP_CODE);
		
		return $content;
	}
}
