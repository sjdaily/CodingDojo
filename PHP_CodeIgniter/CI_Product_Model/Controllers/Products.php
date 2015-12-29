<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Products extends CI_Controller {

	public function index()
	{
		// display all product info
		$this->load->view('product_page');
	}
	public function add() 
	{
		// display a form that allows the user to create a new product
		$this->load->view('add_product');
	}
	public function edit($product_id)
	{
		// display a form that allows the user to update a product info
		$this->load->model("Product");
        $product = $this->Product->get_product_by_id($product_id);  
        $this->session->set_userdata('product', $product);
		$this->load->view('edit_product');
	}
	public function show($id)
	{
		// display a particular product info
        $this->load->model("Product");
        $product = $this->Product->get_product_by_id($id);  
        $this->session->set_userdata('product', $product);
		$this->load->view('show_product');
	}
	public function create()
	{
		// process the form submitted from /products/new
		// have this process the POST data and redirect to '/products'
		$this->load->model("Product");  
			// create array and retrieve info from form 
		$products = array();
		$products['name'] = $this->input->post('name');
		$products['description'] = $this->input->post('description');
		$products['price'] = $this->input->post('price');
		if($products['name'] && $products['price']) // should add validation to check if price is numeric 
		{
			$add_product = $this->Product->add_product($products);
				// set var and call model function to return array of products from db
			$get_all_products = $this->Product->get_all_products();
				// set returned array of products into session, pass array var
			$this->session->set_userdata('get_all_products', $get_all_products);
			$this->load->view("product_page");
		}
		else 
		{
			redirect('/');
		}
	}
	public function destroy($product_id)
	{
		// process the form submitted from 'index method' to remove a particular product
		// have this process the POST data and redirect back to '/products']
		$this->load->model("Product");
        $product = $this->Product->get_product_by_id($product_id);  
        $this->session->set_userdata('product', $product);
        $destroy_product = $this->Product->delete_product($product_id);
		if($destroy_product === TRUE)
		{
			$get_all_products = $this->Product->get_all_products();
			$this->session->set_userdata('get_all_products', $get_all_products);
			redirect('/');
		}
	}
	public function update($product_id)
	{
		// process the form submitted from /products/edit/[id] to update that particular product name
		$this->load->model("Product");
        $product = $this->Product->get_product_by_id($product_id);
        $product['name'] = $this->input->post('name');
		$product['description'] = $this->input->post('description');
		$product['price'] = $this->input->post('price');

        $update_product = $this->Product->update_product($product);
         if($update_product === TRUE)
         {
         	$get_all_products = $this->Product->get_all_products();
         	// var_dump($get_all_products);
         	$this->session->set_userdata('get_all_products', $get_all_products);
			redirect('/');
         }
	}
}

?>