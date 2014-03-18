<?php (defined('BASEPATH')) OR exit('No direct script access allowed');

class BaseController extends MX_Controller
{
	private $output_formats = array(
		'json' 	=> 'application/json'
    );
	
	public function __construct()
	{
		parent::__construct();
	}
	/**
	 * @params array $data
	 * @params int $status_code
	 */
	public function jsonResponse($data, $status_code = 200)
	{
		foreach($data as $k=>$v)
		{
			switch($k)
			{
				case 'code':
				$output_data['code'] = $v;
				break;

				case 'message':
				$output_data['message'] = $v;
				break;

				case 'total':
				$output_data['total'] = $v;
				break;

				case 'results':
				$output_data['results'] = $v;
				break;

				case 'errors':
				$output_data['errors'] = $v;
				break;

				default:
				$output_data[$k] = $v;
			}
		}
		
		if (isset($output_data))
		{
            // set http response header
			$this->output->set_status_header($status_code);
			$output = json_encode($output_data);
		}
		else
		{
            // set http response header
			$this->output->set_status_header(500);
			$output = json_encode(array('Internal server error: Try again later.'));
		}
		
		// set output content type
		$this->output->set_header('Content-Type: '.$this->output_formats['json'].'; charset=utf-8');        
		
		// log the request
		//$this->logger($output);
		
		// send output
		$this->output->set_output($output);
	}

	public function input_require($key)
    {
        if (is_array($key)) {
            if (isset($key['or'])) {
                $exists = false;
                foreach ($key['or'] as $key1 => $value) {
                    if (($this->input->get($value) && $this->input->get($value)!=='0') || ($this->input->post($value) && $this->input->post($value)!=='0')) {
                        $exists = true;
                        break;
                    }
                }
                
                if (!$exists) {
                    $keys = implode(',', $key['or']);
                    $this->jsonResponse ( array (
                            'message' => "错误: $keys 至少要有一个输入." 
                            ),400 );
                    echo $this->output->get_output();
                    exit;
                }

            } else {
                foreach ($key as $key1 => $value) {
                    if (! $this->input->get($value) && ! $this->input->post($value) && $this->input->get($value)!=='0' && $this->input->post($value)!=='0') {    
                        $this->jsonResponse ( array (
                            'message' => "错误: $value 为必需参数." 
                            ),400 );
                        echo $this->output->get_output();
                        exit;
                    }
                }
            }      
        } else {
            
            if (! $this->input->get($key) && ! $this->input->post($key) && $this->input->get($key)!=='0' && $this->input->post($key)!=='0') {    
                $this->jsonResponse ( array (
                    'message' => "错误: $key 为必需参数." 
                    ),400 );
                echo $this->output->get_output();
                exit;
            }
        }
    }


}

