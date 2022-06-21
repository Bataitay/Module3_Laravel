<nav class="navbar">
    <div class="nav-wrapper">
        <a href="{{ route('interface') }}"> <img src="{{ asset('assets/images/logo.PNG') }}" class="brand-img" alt=""></a>
        <input type="text" class="search-box" placeholder="Tìm kiếm">
        <div class="nav-items">
            <a href="{{ route('interface') }}" class="icon_home"><img src="{{ asset('assets/images/home.PNG') }}" class="icon"
                    alt=""></a>
            <a href="#" class=""><img src="{{ asset('assets/images/messenger.PNG') }}" class="icon"
                    alt=""></a>
                    <a  data-toggle="modal" data-target="#exampleModal">
                        <img src="{{ asset('assets/images/add.PNG') }}" class="icon" alt="">
                    </a>
            <a href="#" class=""><img src="{{ asset('assets/images/explore.PNG') }}" class="icon"
                    alt=""></a>
            <a href="#" class=""><img src="{{ asset('assets/images/like.PNG') }}" class="icon"
                    alt=""></a>
            <a href="#" class="">
                <div class="dropdown">
                    <a class=" dropdown-toggle" data-toggle="dropdown"><i class="bi bi-person-circle"></i></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{ route('profile', $userId) }}}"><i class="bi bi-person-circle"></i>personnal page</a></li>
                        <li><a href="#"><i class="bi bi-bookmark"></i>Saved</a></li>
                        <li><a href="#"><i class="bi bi-gear-wide"></i>Setting</a></li>
                        <li><a href="#"><i class="bi bi-arrow-repeat"></i>Account transfer</a></li>
                        <hr>
                        <li>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <x-responsive-nav-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                            this.closest('form').submit();">
                                    {{ __('Log Out') }}
                                </x-responsive-nav-link>
                            </form>
                        </li>
                    </ul>
                </div>
        </div>
    </div>
</nav>
            @include('front-end.posts.add')
