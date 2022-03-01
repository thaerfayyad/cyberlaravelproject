@extends('front.parent')
@section('content')
<section class="blog_area single-post-area section_gap" style="margin-top: 10%;">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 posts-list">
                <div class="single-post row">


                    <div class="col-lg-9 col-md-9 blog_details">
                        {{-- <h2>{{ $item->title }}</h2> --}}
                        <p class="excert">
                            {{-- {{ $item->description }} --}}
                        </p>
                        @foreach ($items as $item)  
                            <h3>{{ $item->question }}</h3>

                            @foreach ($item->answers as $answers)
                                <p class="{{ $answers->answer_question_id == 1 ? 'text-success ' : '' }}">{{ $answers->answer }}</p>    
                            @endforeach

                        @endforeach
                    </div>

                </div>
                <hr>





            </div>
            <div class="col-lg-4">
                <div class="blog_right_sidebar">


                    <aside class="single_sidebar_widget popular_post_widget div-scroll-news" style="word-wrap: break-word;">
                        <h3 class="">Comments</h3>

                        <div class="br"></div>

                    </aside>
                    <div class="comment-form">
                        <h4>Leave a Comments</h4>
                        <form action="{{ route('addComment') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <textarea class="form-control mb-10" rows="5" name="comment" placeholder="Comment" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Messege'" required=""></textarea>
                            </div>

                            <input type="hidden" name="user_id" value="{{@ Auth::user()->id }}">
                            {{--  <input type="hidden" name="grc_id" value="{{ $item->id }}">  --}}
                            <input type="hidden" name="cybersecurity_id" value="{{ $item->id }}">
                            <button  class="primary-btn primary_btn mycomment_button" ><span>Post Comment</span></button>

                        </form>
                    </div>


                </div>

                </div>
            </div>
        </div>
    </div>
</section>
@endsection
