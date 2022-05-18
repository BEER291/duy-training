<?php
/* 
 * Project: Nathan MVC
 * File: /models/home.php
 * Purpose: model for the home controller.
 * Author: Nathan Davison
 */

class HomeModel extends BaseModel
{
    //data passed to the home index view
    public function index()
    {   
        $this->viewModel->set("pageTitle","MVC");
        $products = $this->find_all($table = 'products', $orderby = 'id', $where = '', $cols = '*', $limit = '10');
		$this->viewModel->set("products",$products);
		$categories = $this->find_all($table = 'categories', $orderby = 'id', $where = '', $cols = '*', $limit = '10');
		$this->viewModel->set("categories",$categories);
        return $this->viewModel;
    }
}

?>
