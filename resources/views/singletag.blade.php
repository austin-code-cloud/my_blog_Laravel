@include('partials.header')
<div class="container">
    <div class="archive-cover">
        <div class="archive-cover-inner cover-tag flex has-image">
            <img class="cover-image lazy" loading="lazy"
                srcset="https://images.unsplash.com/photo-1526566762798-8fac9c07aa98?crop&#x3D;entropy&amp;cs&#x3D;tinysrgb&amp;fit&#x3D;max&amp;fm&#x3D;jpg&amp;ixid&#x3D;M3wxMTc3M3wwfDF8c2VhcmNofDEyfHxsaWZlc3R5bGV8ZW58MHx8fHwxNjkyMzYzMzYwfDA&amp;ixlib&#x3D;rb-4.0.3&amp;q&#x3D;80&amp;w&#x3D;2000 400w,
                    https://images.unsplash.com/photo-1526566762798-8fac9c07aa98?crop&#x3D;entropy&amp;cs&#x3D;tinysrgb&amp;fit&#x3D;max&amp;fm&#x3D;jpg&amp;ixid&#x3D;M3wxMTc3M3wwfDF8c2VhcmNofDEyfHxsaWZlc3R5bGV8ZW58MHx8fHwxNjkyMzYzMzYwfDA&amp;ixlib&#x3D;rb-4.0.3&amp;q&#x3D;80&amp;w&#x3D;2000 600w,
                    https://images.unsplash.com/photo-1526566762798-8fac9c07aa98?crop&#x3D;entropy&amp;cs&#x3D;tinysrgb&amp;fit&#x3D;max&amp;fm&#x3D;jpg&amp;ixid&#x3D;M3wxMTc3M3wwfDF8c2VhcmNofDEyfHxsaWZlc3R5bGV8ZW58MHx8fHwxNjkyMzYzMzYwfDA&amp;ixlib&#x3D;rb-4.0.3&amp;q&#x3D;80&amp;w&#x3D;2000 1000w,
                    https://images.unsplash.com/photo-1526566762798-8fac9c07aa98?crop&#x3D;entropy&amp;cs&#x3D;tinysrgb&amp;fit&#x3D;max&amp;fm&#x3D;jpg&amp;ixid&#x3D;M3wxMTc3M3wwfDF8c2VhcmNofDEyfHxsaWZlc3R5bGV8ZW58MHx8fHwxNjkyMzYzMzYwfDA&amp;ixlib&#x3D;rb-4.0.3&amp;q&#x3D;80&amp;w&#x3D;2000 1200w,
                    https://images.unsplash.com/photo-1526566762798-8fac9c07aa98?crop&#x3D;entropy&amp;cs&#x3D;tinysrgb&amp;fit&#x3D;max&amp;fm&#x3D;jpg&amp;ixid&#x3D;M3wxMTc3M3wwfDF8c2VhcmNofDEyfHxsaWZlc3R5bGV8ZW58MHx8fHwxNjkyMzYzMzYwfDA&amp;ixlib&#x3D;rb-4.0.3&amp;q&#x3D;80&amp;w&#x3D;2000 1400w,"
                sizes="(max-width: 440px) 400px, (max-width: 640px) 600px, (max-width: 1080px) 1000px, (max-width:1280px) 1200px, 1400px"
                src="https://images.unsplash.com/photo-1526566762798-8fac9c07aa98?crop=entropy&amp;cs=tinysrgb&amp;fit=max&amp;fm=jpg&amp;ixid=M3wxMTc3M3wwfDF8c2VhcmNofDEyfHxsaWZlc3R5bGV8ZW58MHx8fHwxNjkyMzYzMzYwfDA&amp;ixlib=rb-4.0.3&amp;q=80&amp;w=2000" alt="Inspiration tag feature image">
            <div class="cover-content-wrapper">
                <div class="tag-info-wrap text-center">
                    <h1 class="tag-name">{{$Tag->name}}</h1>
                    <div class="tag-meta flex align-center justify-center">
                        <span class="post-count"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M20 22H4C3.44772 22 3 21.5523 3 21V3C3 2.44772 3.44772 2 4 2H20C20.5523 2 21 2.44772 21 3V21C21 21.5523 20.5523 22 20 22ZM19 20V4H5V20H19ZM7 6H11V10H7V6ZM7 12H17V14H7V12ZM7 16H17V18H7V16ZM13 7H17V9H13V7Z"></path></svg>{{$Tag->BlogPost->count()}}</span>
                    </div>
                    <div class="tag-description">
                        {{$Tag->description}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="post-loop">
    <div class="container">
        <div class="post-cards-wrap three-column-vertical">

            @foreach ($Tag->Blogpost as $BlogPost)
            
            <article class="post-card js-card flex ar-4:3">
                <a href="../../it-is-during-our-darkest-moments-that-we-must-focus-to-see-the-light/index.html" class="post-img-wrap">
                    <img  src="{{asset('storage/' . $BlogPost->image)}}"></a>
                <div class="post-info-wrap">
                    <div class="tag-list flex">
                        <a href="index.html" style="--tag-color:#04baf6">{{$Tag->name}}</a>
                    </div>
                    <h2 class="h4 post-title">
                        <a href="../../it-is-during-our-darkest-moments-that-we-must-focus-to-see-the-light/index.html">{{$BlogPost->title}}</a>
                    </h2>
                    <div class="post-excerpt">
                        {{$BlogPost->description}}</div>
                    <div class="post-meta text-s flex">
                        <div class="author-avatars flex" data-authors="1">
                            <a href="../../author/surabhi/index.html" class="author-image-wrap">
                                <img src="../../content/images/2023/08/suravi.jpg" alt="Surabhi Gupta">
                            </a>
                        </div>
                        <span class="read-time">
                            <svg><use xlink:href="#i-clock"></use></svg>3 min read
                        </span>
                    </div>
                </div>
            </article>
            @endforeach
            
        </div>
        <div class="pagination-wrap text-center" id="pagination-wrap">
    <button class="btn btn-lg post-load-button" id="load-more"><span>Load more</span></button>
</div>
    </div>
</div>

@include('partials.footer')