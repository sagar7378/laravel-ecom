<h1>Hello {{ session('user_name') }}</h1>
<a href="{{ route('admin/logout') }}">Logout</a>