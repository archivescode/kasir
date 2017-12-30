<h1>
  @yield('pageheader')
  <small>@yield('subpageheader')</small>
</h1>
<ol class="breadcrumb">
  @section('breadcrumb')
    <li><a href="{{ url('admin') }}"><i class="fa fa-dashboard"></i>Dashboard</a></li>
  @show
</ol>
