@extends('admin.layouts.default')

@section('csss')
  @parent
<!-- //use custom css here -->
@stop

@section('javascript')
  @parent
  <!-- //use custom js / javascript here -->
@stop

<!-- title website -->
@section('title', 'Dashboard')

<!-- set menu sidebar active -->
@section('menu', 'adminDashboard')

<!-- //pageheader content -->
@section('pageheader', 'Dashboard')
<!-- //subpageheader contente -->
@section('subpageheader', 'Sub Dashboard')
<!-- //breadcrumb -->
@section('breadcrumb')
  @parent

@stop
<!-- //main content -->
@section('content')
    i am the home page
@stop
