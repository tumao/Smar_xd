<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('send_mail'))
{
	function send_mail($to, $subject, $message, $from)
	{
		$CI =& get_instance();
		$CI->load->library('awsphpsdk');
		$ses = new AmazonSES();
		
		try
		{
			$response = $ses->send_email($from, 
				array('ToAddresses' => $to), 
				array(
					'Subject.Data' => $subject,
					'Body.Html.Data' => $message
				)
			);
			return $response->isOK();
		}
		catch(Exception $e)
		{
			return FALSE;
		}
	}	
}
