@extends("layouts.app")

@section("content")

 @if($user->userType == App\Models\User::$isAdmin) 
    @include("page.admin")
 @else
    @include("page.user")
 @endif
@stop
