<div class="panel panel-default sidebar-menu">

    <div class="panel-heading">
        <h3 class="panel-title">Categories</h3>
    </div>

    <div class="panel-body">
        <ul class="nav nav-pills nav-stacked category-menu">

            @foreach($categories as $category)

            <li>
                <a href="category.html">{{$category->name}} <span class="badge pull-right">42</span></a>
                <ul>

                    @foreach($category->subcategories as $subcategory)
                    <li><a href="category.html">{{$subcategory->name}}</a>
                    </li>
                    
                    @endforeach
                </ul>
            </li>

            @endforeach
            
        </ul>

    </div>
</div>
