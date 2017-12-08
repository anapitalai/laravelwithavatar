@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
        <img src="/uploads/avatars/{{$user->avatar}}" style="width:150px;height:150px;border-radius:50%;margin-right:25px;float:left">
       <h2>{{$user->name}}'s Profile</h2>
       <h3>Update Your Profile</h3>
       <form enctype="multipart/form-data" action="/profile" method="POST">
              <input type="file" name="avatar">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
              <input type="submit" class="pull-right btn btn-sm btn-primary">


        </form>
            
        <div class="jumbotron text-center" style="padding:10px;margin-top:40px;">
           <p><h4>Image size must be less than 2MB</h4></p>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
