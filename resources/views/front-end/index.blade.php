@extends('front-end.master')
@section('content')
<section class="main">
    <div class="wrapper">
        <div class="left-col">
            <div class="status-wrapper">
                <div class="status-card">
                    <div class="profile-pic"><img src="{{ asset('assets/images/cover 1.png') }}" alt=""></div>
                    <p class="username">user_name_1</p>
                </div>
                <div class="status-card">
                    <div class="profile-pic"><img src="{{ asset('assets/images/cover 2.png') }}" alt=""></div>
                    <p class="username">user_name_2</p>
                </div>
                <div class="status-card">
                    <div class="profile-pic"><img src="{{ asset('assets/images/cover 3.png') }}" alt=""></div>
                    <p class="username">user_name_3</p>
                </div>

        </div>
        <div class="post">
            <div class="info">
                <div class="user">
                    <div class="profile-pic"><img src="{{ asset('assets/images/cover 1.png') }}" alt=""></div>
                    <p class="username">modern_web</p>
                </div>
                <img src="{{ asset('assets/images/option.png') }}" class="options" alt="">
            </div>
            <img src="{{ asset('assets/images/cover 1.png') }}" class="post-image" alt="">
            <div class="post-content">
                <div class="reaction-wrapper">
                    <img src="{{ asset('assets/images/like.png') }}" class="icon" alt="">
                    <img src="{{ asset('assets/images/comment.png') }}" class="icon" alt="">
                    <img src="{{ asset('assets/images/send.png') }}" class="icon" alt="">
                    <img src="{{ asset('assets/images/save.png') }}" class="save icon" alt="">
                </div>
                <p class="likes">1,012 likes</p>
                <p class="description"><span>username </span> Lorem ipsum dolor sit amet consectetur, adipisicing elit. Pariatur tenetur veritatis placeat, molestiae impedit aut provident eum quo natus molestias?</p>
                <p class="post-time">2 minutes ago</p>
            </div>
            <div class="comment-wrapper">
                <img src="{{ asset('assets/images/smile.png') }}" class="icon" alt="">
                <input type="text" class="comment-box" placeholder="Add a comment">
                <button class="comment-btn">post</button>
            </div>
        </div>
        <div class="post">
            <div class="info">
                <div class="user">
                    <div class="profile-pic"><img src="{{ asset('assets/images/cover 2.png') }}" alt=""></div>
                    <p class="username">modern_web</p>
                </div>
                <img src="{{ asset('assets/images/option.png') }}" class="options" alt="">
            </div>
            <img src="{{ asset('assets/images/cover 2.png') }}" class="post-image" alt="">
            <div class="post-content">
                <div class="reaction-wrapper">
                    <img src="{{ asset('assets/images/like.png') }}" class="icon" alt="">
                    <img src="{{ asset('assets/images/comment.png') }}" class="icon" alt="">
                    <img src="{{ asset('assets/images/send.png') }}" class="icon" alt="">
                    <img src="{{ asset('assets/images/save.png') }}" class="save icon" alt="">
                </div>
                <p class="likes">1,012 likes</p>
                <p class="description"><span>username </span> Lorem ipsum dolor sit amet consectetur, adipisicing elit. Pariatur tenetur veritatis placeat, molestiae impedit aut provident eum quo natus molestias?</p>
                <p class="post-time">2 minutes ago</p>
            </div>
            <div class="comment-wrapper">
                <img src="{{ asset('assets/images/smile.png') }}" class="icon" alt="">
                <input type="text" class="comment-box" placeholder="Add a comment">
                <button class="comment-btn">post</button>
            </div>
        </div>

    </div>
    <div class="right-col">
        <div class="profile-card">
            <div class="profile-pic">
                <img src="{{ asset('assets/images/profile-pic.png') }}" alt="">
            </div>
            <div>
                <p class="username">{{ Auth::user()->name }}</p>
                <p class="sub-text">kunaal kumar</p>
            </div>
            <button class="action-btn">switch</button>
        </div>
        <div class="profile-card">
            <p class="suggestion-text">Suggestions for you</p>
            <button class="action-btn">Watch all</button>
        </div>

        <div class="profile-card">
            <div class="profile-pic">
                <img src="{{ asset('assets/images/cover 9.png') }}" alt="">
            </div>
            <div>
                <p class="username">modern_web_channel</p>
                <p class="sub-text">followed bu user</p>
            </div>
            <button class="action-btn">follow</button>
        </div>
        <div class="profile-card">
            <div class="profile-pic">
                <img src="{{ asset('assets/images/cover 9.png') }}" alt="">
            </div>
            <div>
                <p class="username">modern_web_channel</p>
                <p class="sub-text">followed bu user</p>
            </div>
            <button class="action-btn">follow</button>
        </div>
        <div class="profile-card">
            <div class="profile-pic">
                <img src="{{ asset('assets/images/cover 9.png') }}" alt="">
            </div>
            <div>
                <p class="username">modern_web_channel</p>
                <p class="sub-text">followed bu user</p>
            </div>
            <button class="action-btn">follow</button>
        </div>
        <div class="profile-card">
            <div class="profile-pic">
                <img src="{{ asset('assets/images/cover 9.png') }}" alt="">
            </div>
            <div>
                <p class="username">modern_web_channel</p>
                <p class="sub-text">followed bu user</p>
            </div>
            <button class="action-btn">follow</button>
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


    </div>
</section>

@endsection
