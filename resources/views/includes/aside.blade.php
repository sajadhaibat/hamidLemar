

<aside class="right_menu" >

    <div id="leftsidebar" class="sidebar" style="background-color: #313740;margin: 0px;padding-left: 0px">
        <div class="menu">
            <ul class="list">
                <li>
                    <div class="user-info m-b-20">
                        <div class="image">
                            <a href="#"><img src="{{asset('assets/images/profile_av.jpg')}}" alt="User"></a>
                        </div>
                        <div class="detail">
                            <h6 style="color: white">{{ auth('admin')->user()->name }}</h6>
                        </div>
                    </div>
                </li>

                <li class="active open"> <a href="{{url('/')}}"><i class="zmdi zmdi-home"></i><span>Dashboard</span></a></li>
                <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-accounts" style="color: white"></i><span>Customers</span>
                        </a>
                    <ul class="ml-menu">
{{--                        <li><a href="{{route('customers.create')}}">Add Customer</a></li>--}}
                        <li><a href="{{route('customers.index')}}">Customers List</a></li>
                        <li><a href="widgets-chart.html">Customers Payment</a></li>
                    </ul>
                </li>
                <li> <a href="{{route('items.index')}}"><i class="zmdi zmdi-collection-add"></i><span>Items</span></a></li>
                <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-storage"></i><span>Stock</span>
                    </a>
                    <ul class="ml-menu">
                        <li><a href="{{route('stock.index')}}">Available in Stock</a></li>
                        <li><a href="{{route('stock.create')}}">Add to Stock </a></li>
{{--                        <li><a href="widgets-chart.html">Customers Payment</a></li>--}}
                    </ul>
                </li>
                <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-file-plus"></i><span>Invoices</span>
                    </a>
                    <ul class="ml-menu">
                        <li><a href="{{route('recevied_orders.create')}}">Add New Order</a></li>
                        <li><a href="{{route('recevied_orders.index')}}">Invoices</a></li>
                        <li><a href="{{route('stock.create')}}">Cash Invoices </a></li>
                        <li><a href="{{route('stock.create')}}">Credit Invoices </a></li>
                    </ul>
                </li>
                <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-delicious"></i><span>Expenses</span>
                    </a>
                    <ul class="ml-menu">
                        <li><a href="{{route('expenses.index')}}">Daily Expenses</a></li>
                    </ul>
                </li>
                <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-accounts"></i><span>Users</span>
                    </a>
                    <ul class="ml-menu">
                        <li><a href="{{route('admin.register')}}">Register New User</a></li>

                        <li><a href="{{route('admin.password.change')}}">Change Password</a></li>
                        <li><a href="{{route('staff.index')}}">Staffs</a></li>
                    </ul>
                </li>


                <li><a href="/admin/logout" class="menu-toggle" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="zmdi zmdi-sign-in"></i><span>Logout</span>
                    </a>
                    <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li>


            </ul>
        </div>
    </div>
</aside>
