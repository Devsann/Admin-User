@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <form method="post">
                    @foreach($errors->all() as $error)
                        <p class="alert alert-danger">{{$error}}</p>
                        @endforeach
                    @if(session('status'))
                        <p class="alert alert-success">{{session('status')}}</p>
                        @endif
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="form-group">
                        <label for="rolename">Role Name</label>
                        <input type="text" class="form-control" id="rolename" name="rolename" placeholder="Enter RoleName">
                        <small id="rolename" class="form-text text-muted">We'll agree U are Roles.</small>
                    </div>
                    <button type="submit" class="btn btn-primary">Insert</button>
                </form>
                @component('components.who')
                    @endcomponent
            </div>
        </div>
    </div>
@endsection