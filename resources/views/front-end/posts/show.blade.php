<div class="modal fade" id="showleModal{{ $post->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog show">
        <div class="modal-content ">
            <section>
                <div class="leftColumn">
                    <img alt="gallery-post" src="/storage/{{ $post['image'] }}" />
                </div>
                <div class="rightColumn">
                    {{-- <img alt="profile-logo" src="/storage/{{ $post->user->profile->avatar ?? '' }}" /> --}}
                    <h5>{{ $user->name }} <i class="bi bi-patch-check-fill"></i> <i
                            class="bi bi-brightness-low-fill"></i>
                        <a href="">Following</a>
                    </h5>
                    <hr>
                    <span class="">{{ $post->caption }} </span>
                    <div class="show-coment">
                        <div class="post-content">
                            <div class="reaction-wrapper">
                                <img src="{{ asset('assets/images/like.png') }}" class="icon" alt="">
                                <img src="{{ asset('assets/images/comment.png') }}" class="icon" alt="">
                                <img src="{{ asset('assets/images/send.png') }}" class="icon" alt="">
                                <img src="{{ asset('assets/images/save.png') }}" class="save icon" alt="">
                            </div>
                            <p class="likes">1,012 likes</p>
                            <p class="description"><span>username </span> Lorem ipsum dolor sit amet consectetur,
                                adipisicing elit. Pariatur tenetur veritatis placeat, molestiae impedit aut provident
                                eum quo natus molestias?</p>
                            <p class="post-time">2 minutes ago</p>
                            <div class="comment-wrapper">
                                <img src="{{ asset('assets/images/smile.png') }}" class="icon" alt="">
                                <input type="text" class="comment-box" placeholder="Add a comment">
                                <button class="comment-btn">post</button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>

</div>
