<?php
/**
 * Created by PhpStorm.
 * User: kola
 * Date: 14-4-9
 * Time: 上午12:56
 */

if (! defined ( 'BASEPATH' ))
    exit ( 'No direct script access allowed' );

class Iint_model extends BaseModel {
    function __construct() {
        parent::__construct();
        $this->db = $this->load->database ( 'default', TRUE );
    }
} 