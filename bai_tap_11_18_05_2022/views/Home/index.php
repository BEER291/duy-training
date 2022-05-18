<?php
$products = $viewModel->get('products');
$categories = $viewModel->get('categories');		
?>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="title">
				<h2 class="text-center">Products</h2>
			</div>
			<div class="action-create">
				<a class="btn btn-primary btn-xs btn-edit" href="<?php echo BASE_URL.'edit/create'?>">Create <span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
			</div>
			<div class="table-responsive">
			  <table class="table">
			   		<thead>
			   			<tr>
			   				<th>ID</th>
			   				<th>SKU</th>
			   				<th>NAME</th>
			   				<th>IMAGE</th>
			   				<th>CREATE DATE</th>
							<th>CATEGORIES</th>
			   			</tr>
			   		</thead>
			   		<tbody>
			   			<?php if(!empty($products)):?>
				   			<?php foreach ($products as $product):?>
				   				<tr>
					   				<td><?php echo $product->id ?></td>
					   				<td><?php echo $product->sku ?></td>
					   				<td><?php echo $product->name ?></td>
									<td><img width="200rem" src="<?php echo $product->image ?>"></td>
									<td><?php echo $product->create_date ?></td>
					   				<td><?php 
									   $array=array_map('intval', explode(',', $product->category_ids)); 
									   foreach ($categories as $category) {
										   foreach ($array as $value) {
											   if ($category->id == $value) {
												   echo $category->name . "<br>";
											   }
										   }
									   }
									   ?></td>
					   				<td>
					   					<a class="btn btn-primary btn-xs btn-edit" href="<?php echo BASE_URL.'edit/'.$product->id?>">Edit <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
					   					<a class="btn btn-danger btn-xs btn-delete" href="<?php echo BASE_URL.'delete/'.$product->id?>">Remove <span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
					   				</td>
					   			</tr>
				   			<?php endforeach;?>	
				   		<?php else:?>
				   			<tr>
				   				<td colspan="5">Not Fould Result!</td>
				   			</tr>
			   			<?php endif;?>
			   			
			   		</tbody>
			  </table>
			</div>			
		</div>
	</div>
</div>