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

                            @for ($i = 0; $i < $item->rating; $i++)
                                <i class="fa fa-star"></i>
                            @endfor

                           <div class="blog_post">

                              <a href=""><img src="{{ asset('/uploads/cover_img/'.$item->cover_img) }}" style="width: 600px"  class="img-thumbnail" alt="">


                          </a>
                               <div class="blog_details">
                                   <a href="single-blog.html"><h2>{{ $item->title }}</h2></a>
                                   <p>{{ $item->description }}.</p>

                                   <a href="{{ route('cyberDetails',$item->id) }}" class="primary_btn"><span>View More</span></a>
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
