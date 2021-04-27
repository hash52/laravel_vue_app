@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">書き込む</div>
                <div class="card-body">
                    <form action="{{ action('PostController@create') }}" method="post">
                        <textarea name="body" cols="30" rows="10"></textarea>
                        @csrf
                        <input type="submit" value="送信">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
