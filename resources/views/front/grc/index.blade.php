@extends('front.parent')
@section('content')
<section class="blog_area">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="blog_left_sidebar">

                  @forelse ($items as $item )
                  <article class="row blog_item">
                    <div class="col-md-3">

                    </div>
                     <div class="col-md-9">
                         <div class="blog_post">
                            <a href=""> <iframe width="550" height="400" src=" {{ $item->video }}" frameborder="0" allowfullscreen>
                            </iframe>
                        </a>
                             <div class="blog_details">
                                 <a href="single-blog.html"><h2>{{ $item->title }}</h2></a>
                                 <p>{{ $item->description }}.</p>
                                 <a href="./Blog_details.html" class="primary_btn"><span>View More</span></a>
                             </div>
                         </div>
                     </div>
                 </article>
                    @empty
                    <h3 style="text-align: center">No Data Found</h3>
                @endforelse

                    <nav class="blog-pagination justify-content-center d-flex">
                        <ul class="pagination">
                            <li class="page-item">


                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="col-lg-4">

            </div>
        </div>
    </div>
</section>
@endsection
