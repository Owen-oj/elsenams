<aside>
    <div id="sidebar"  class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
            <li>
                <a class="active" href="{{url('/admin/dashboard')}}">
                    <i class="icon-dashboard"></i>
                    <span>Dashboard</span>
                </a>
            </li>

            <li class="sub-menu">
                <a href="javascript:;" >
                    <i class="icon-laptop"></i>
                    <span>Products</span>
                </a>
                <ul class="sub">
                    <li><a  href="{{route('admin.products.create')}}">Add New</a></li>
                    <li><a  href="{{route('admin.products.index')}}">List All</a></li>
                    <li><a  href="">Language Switch Bar</a></li>
                </ul>
            </li>

            <li class="sub-menu">
                <a href="javascript:;" >
                    <i class="icon-book"></i>
                    <span>Categories</span>
                </a>
                <ul class="sub">
                    <li><a  href="{{route('admin.categories.create')}}">Add New</a></li>
                    <li><a  href="{{route('admin.categories.index')}}">All Categories</a></li>
                    <li><a  href="widget.html">Widget</a></li>
                </ul>
            </li>

            <li class="sub-menu">
                <a href="javascript:;" >
                    <i class="icon-cogs"></i>
                    <span>Orders</span>
                </a>
                <ul class="sub">
                    <li><a  href="{{route('admin.orders.index')}}">All Orders</a></li>
                    <li><a  href="calendar.html">Charts</a></li>
                    <li><a  href="gallery.html">Refunds</a></li>
                    <li><a  href="todo_list.html">Todo List</a></li>
                </ul>
            </li>


        </ul>
        <!-- sidebar menu end-->
    </div>
</aside>