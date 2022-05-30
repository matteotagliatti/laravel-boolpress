@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        {{-- If user is logged --}}
                        @if (Auth::check())
                            Welcome {{ Auth::user()->name }}!
                        @else
                            Welcome Guest!
                        @endif

                    </div>
                    @if (Auth::check())
                        <div class=" card-footer">
                            <a href="{{ route('posts.index') }}" class="btn btn-dark">Show posts</a>
                        </div>
                    @endif
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <h1>Upload Img Form</h1>
                <form action="{{ route('form.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input class="form-control" type="file" name="img">
                    <input type="submit" value="Upload" class="btn btn-primary">
                </form>
            </div>
        </div>
        <div class="row">
            <div id="root"></div>
        </div>
    </div>
@endsection

@section('script')
    <script src="{{ asset('js/front.js') }}"></script>
@endsection
