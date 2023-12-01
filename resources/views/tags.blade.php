@include('partials.header')
<main class="main">

    <div class="container">
        <div class="single-post post-vertical post-header-center archive-post-header">
            <div class="post-header">
                <h1 class="post-title text-center">Tags</h1>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">

            @foreach ($Tag as $Tag)
                <div class="col-xl-3 col-md-4 col-sm-6" data-name="Inspiration" data-index="0">
                    <div class="tag-card js-card">
                        <a href="../tag/inspiration/index.html" class="tag-image-wrap">
                            <img src="https://images.unsplash.com/photo-1526566762798-8fac9c07aa98?crop=entropy&amp;cs=tinysrgb&amp;fit=max&amp;fm=webp&amp;ixid=M3wxMTc3M3wwfDF8c2VhcmNofDEyfHxsaWZlc3R5bGV8ZW58MHx8fHwxNjkyMzYzMzYwfDA&amp;ixlib=rb-4.0.3&amp;q=80&amp;w=2000"
                                loading="lazy" alt="">
                        </a>
                        <div class="tag-info-wrap">
                            <h2 class="tag-name h4"><a href="{{route('tag', $Tag->name)}}">{{$Tag->name}}</a></h2>
                            <div class="post-count">{{$Tag->BlogPost->count()}}</div>
                        </div>
                    </div>
                </div>
            @endforeach


        </div>
    </div>

    @include('partials.newsletter')

</main>
@include('partials.footer')
