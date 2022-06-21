@extends('front-end.master')
@section('content')
    <div class="container">

        <div class="form-style-2">
            <form action="{{ route('profile.update',$user->id  )  }}}" enctype="multipart/form-data" method="post">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="title" class="form-label">title</label>
                    <input name="title" type="text" class="form-control" id="title" value="">
                </div>
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input name="name" type="text" class="form-control" id="name" value="{{  Auth::user()->name }}">
                </div>
                <div class="mb-3">
                    <label for="webpage" class="form-label">Web page</label>
                    <input type="text" name="url" class="form-control" id="webpage" placeholder="Web page">
                </div>
                <div class="mb-3">
                    <label for="story" class="form-label">Story</label>
                    <textarea name="story" class="form-control" id="story" rows="3"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">To send</button>
            </form>
        </div>
        </form>
    </div>


    <div class="footer">
        <div class="links">
            <a href="#">About</a>
            <a href="#">Blog</a>
            <a href="#">Jobs</a>
            <a href="#">Help</a>
            <a href="#">API</a>
            <a href="#">Privacy</a>
            <a href="#">Terms</a>
            <a href="#">Top Accounts</a>
            <a href="#">Hashtags</a>
            <a href="#">Locations</a>
            <a href="#" id="darkmode-toggle">Darkmode</a>
        </div>
        <div class="copyright">
            © 2021 Instagram from Facebook
        </div>
    </div>
@endsection
