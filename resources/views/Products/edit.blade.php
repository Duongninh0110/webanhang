@extends('main')

@section('content')



<div id="content">
            <div class="container">

                <div class="col-md-12">

                    <ul class="breadcrumb">
                        <li><a href="#">Home</a>
                        </li>
                        <li>New account / Sign in</li>
                    </ul>

                </div>
			<div class="col-md-6">
    <div class="box">
        <h1>New account</h1>

		<form action="{{url('products/update',[$product->id])}}" method="post" enctype="multipart/form-data">
			@csrf
			<div class="form-group">
				<label for="name">Product Name</label>
				<input type="text" name="name" value="{{$product->name}}" class="form-control">

				
			</div>
			

			<div class="form-group">
				<label for="category">Category</label>
				<select name="category_id" id="">
					<option value="1">Men</option>
					<option value="2">Ladies</option>
					<option value="3">Kids</option>
				</select>

				
			</div>



			<div class="form-group">
				<label for="subcategory_id">Subcategory</label>
				<select name="subcategory_id" id="">
					<option value="1">T-shirts</option>
					<option value="2">Skirts</option>
					<option value="3">Pants</option>
					<option value="4">Accessories</option>
				</select>

				
			</div>

			<div class="form-group">
				<label for="productdetail">Product Detail</label>
				<input type="text" name="productdetail" value="{{$product->productdetail}}" class="form-control">

				
			</div>

			<div class="form-group">
				<label for="materialandcare">Material and Care</label>
				<input type="text" name="materialandcare" value="{{$product->materialandcare}}" class="form-control">

				
			</div>

			<div class="form-group">
				<label for="sizeandfit">Size And Fit</label>
				<input type="text" name="sizeandfit" value="{{$product->sizeandfit}}" class="form-control">

				
			</div>
			
			<div class="form-group">
				<label for="styledescribe">Style Describe</label>
				<input type="text" name="styledescribe" value="{{$product->styledescribe}}" class="form-control">

				
			</div>

			<div class="form-group">
				<label for="price">Price</label>
				<input type="text" name="price" value="{{$product->price}}" class="form-control">

				
			</div>


			<div class="form-group">
				<label for="image_one">Image One</label>
				<img src="{{asset('img/'.$product->image_one)}}" alt="">
				<input type="file" name="image_one"  class="form-control">

				
			</div>

			<div class="form-group">
				<label for="image_two">Image Two</label>
				<img src="{{asset('img/'.$product->image_two)}}" alt="">
				<input type="file" name="image_two"  class="form-control">

				
			</div>

			<div class="form-group">
				<label for="image_three">Image Three</label>

				<img src="{{asset('img/'.$product->image_three)}}" alt="">
				<input type="file" name="image_three"  class="form-control">

				
			</div>



			<div class="form-group">
				
				<input type="submit" name="update_product" class="btn btn-success btn-block" value="UPDATE PRODUCT">

				
			</div>

	  </form>
	 </div>
</div>

            </div>
            <!-- /.container -->
        </div>
        <!-- /#content -->
  

@endsection