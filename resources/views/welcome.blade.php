@include('partials.header')

<main class="main">

    <div class="site-hero site-hero-centered home-intro-one">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="hero-intro-content">
                        <h1 class="intro-title text-center heading-large">
                            Hello 👋, we are Porto, exploring <span>fashion</span>, <span>lifestyle</span> and
                            <span>health</span>.
                        </h1>
                        <div class="intro-description text-center">
                            Introducing a modern and sleek theme for Ghost. Perfect for <b>magazine, newsletter,
                                professional and personal blog</b> publishing.
                        </div>
                        <div class="cta-wrapper flex justify-center">
                            <a href="signup/index.html" class="btn btn-xl">Join now - it&#x27;s free!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="featured-posts two-column">
        <div class="container">
            <div>
                <h2 class="section-title">Featured posts</h2>
            </div>
            <div class="row">
                <div class="col-lg-7 post-large-wrap">
                    <article class="post-card js-card flex post-card-large">
                        <a href="{{ route('singlepost', $latestPost[0]['slug']) }}" class="post-img-wrap">
                            <img loading="lazy"
                                srcset="https://images.unsplash.com/photo-1500917293891-ef795e70e1f6?crop&#x3D;entropy&amp;cs&#x3D;tinysrgb&amp;fit&#x3D;max&amp;fm&#x3D;webp&amp;ixid&#x3D;M3wxMTc3M3wwfDF8c2VhcmNofDI4fHxmYXNoaW9uJTIwYmVhdXR5fGVufDB8fHx8MTY5MjQ0NTA2MHww&amp;ixlib&#x3D;rb-4.0.3&amp;q&#x3D;80&amp;w&#x3D;2000 250w,
                                    https://images.unsplash.com/photo-1500917293891-ef795e70e1f6?crop&#x3D;entropy&amp;cs&#x3D;tinysrgb&amp;fit&#x3D;max&amp;fm&#x3D;webp&amp;ixid&#x3D;M3wxMTc3M3wwfDF8c2VhcmNofDI4fHxmYXNoaW9uJTIwYmVhdXR5fGVufDB8fHx8MTY5MjQ0NTA2MHww&amp;ixlib&#x3D;rb-4.0.3&amp;q&#x3D;80&amp;w&#x3D;2000 400w,
                                    https://images.unsplash.com/photo-1500917293891-ef795e70e1f6?crop&#x3D;entropy&amp;cs&#x3D;tinysrgb&amp;fit&#x3D;max&amp;fm&#x3D;webp&amp;ixid&#x3D;M3wxMTc3M3wwfDF8c2VhcmNofDI4fHxmYXNoaW9uJTIwYmVhdXR5fGVufDB8fHx8MTY5MjQ0NTA2MHww&amp;ixlib&#x3D;rb-4.0.3&amp;q&#x3D;80&amp;w&#x3D;2000 600w, 
                                    https://images.unsplash.com/photo-1500917293891-ef795e70e1f6?crop&#x3D;entropy&amp;cs&#x3D;tinysrgb&amp;fit&#x3D;max&amp;fm&#x3D;webp&amp;ixid&#x3D;M3wxMTc3M3wwfDF8c2VhcmNofDI4fHxmYXNoaW9uJTIwYmVhdXR5fGVufDB8fHx8MTY5MjQ0NTA2MHww&amp;ixlib&#x3D;rb-4.0.3&amp;q&#x3D;80&amp;w&#x3D;2000 1000w"
                                sizes="(max-width:432px) 400px, (max-width:696px) 600px, (max-width:767px) 671px, 400px"
                                src="https://images.unsplash.com/photo-1500917293891-ef795e70e1f6?crop=entropy&amp;cs=tinysrgb&amp;fit=max&amp;fm=jpg&amp;ixid=M3wxMTc3M3wwfDF8c2VhcmNofDI4fHxmYXNoaW9uJTIwYmVhdXR5fGVufDB8fHx8MTY5MjQ0NTA2MHww&amp;ixlib=rb-4.0.3&amp;q=80&amp;w=2000"
                                alt="Never let your memories be greater than your dreams">
                        </a>

                        <div class="post-info-wrap">
                            <div class="tag-list flex">
                                <a href="tag/travel/index.html" style="--tag-color:#E10689">Travel</a>
                            </div>
                            <h2 class="h4 post-title">
                                <a href="{{ route('singlepost', $latestPost[0]['slug']) }}">{!! $latestPost[0]['title'] !!}</a>
                            </h2>
                            <div class="post-excerpt">
                                {!! $latestPost[0]['description'] !!}
                            </div>
                            <div class="post-meta text-s flex">
                                <div class="author-avatars flex" data-authors="2">
                                    <a href="author/apurba/index.html" class="author-image-wrap">
                                        <img src="content/images/2023/08/Apurba.jpg" alt="Apurba Talukdar">
                                    </a>
                                    <a href="author/ishan/index.html" class="author-image-wrap">
                                        <img src="content/images/2023/08/ishan.jpg" alt="Ishan Sharma">
                                    </a>
                                </div>
                                <span class="read-time">
                                    <svg>
                                        <use xlink:href="#i-clock"></use>
                                    </svg>3 min read
                                </span>
                            </div>
                        </div>


                    </article>
                </div>
                <div class="col-lg-5">
                    <div class="small-posts-wrap">
                        @foreach ($oldestPost as $oldestPost)
                            <article class="post-card js-card flex post-card-small">
                                <a href="{{ route('singlepost', $oldestPost['slug']) }}" class="post-img-wrap">
                                    <img loading="lazy"
                                        srcset="https://images.unsplash.com/photo-1492633423870-43d1cd2775eb?crop&#x3D;entropy&amp;cs&#x3D;tinysrgb&amp;fit&#x3D;max&amp;fm&#x3D;webp&amp;ixid&#x3D;M3wxMTc3M3wwfDF8c2VhcmNofDIzfHxmYXNoaW9uJTIwJTIwZmxvd2VyJTIwbGlmZXN0eWxlfGVufDB8fHx8MTY5MjQ0NTI1N3ww&amp;ixlib&#x3D;rb-4.0.3&amp;q&#x3D;80&amp;w&#x3D;2000 250w,
                                        https://images.unsplash.com/photo-1492633423870-43d1cd2775eb?crop&#x3D;entropy&amp;cs&#x3D;tinysrgb&amp;fit&#x3D;max&amp;fm&#x3D;webp&amp;ixid&#x3D;M3wxMTc3M3wwfDF8c2VhcmNofDIzfHxmYXNoaW9uJTIwJTIwZmxvd2VyJTIwbGlmZXN0eWxlfGVufDB8fHx8MTY5MjQ0NTI1N3ww&amp;ixlib&#x3D;rb-4.0.3&amp;q&#x3D;80&amp;w&#x3D;2000 400w,
                                         https://images.unsplash.com/photo-1492633423870-43d1cd2775eb?crop&#x3D;entropy&amp;cs&#x3D;tinysrgb&amp;fit&#x3D;max&amp;fm&#x3D;webp&amp;ixid&#x3D;M3wxMTc3M3wwfDF8c2VhcmNofDIzfHxmYXNoaW9uJTIwJTIwZmxvd2VyJTIwbGlmZXN0eWxlfGVufDB8fHx8MTY5MjQ0NTI1N3ww&amp;ixlib&#x3D;rb-4.0.3&amp;q&#x3D;80&amp;w&#x3D;2000 600w, 
                                        https://images.unsplash.com/photo-1492633423870-43d1cd2775eb?crop&#x3D;entropy&amp;cs&#x3D;tinysrgb&amp;fit&#x3D;max&amp;fm&#x3D;webp&amp;ixid&#x3D;M3wxMTc3M3wwfDF8c2VhcmNofDIzfHxmYXNoaW9uJTIwJTIwZmxvd2VyJTIwbGlmZXN0eWxlfGVufDB8fHx8MTY5MjQ0NTI1N3ww&amp;ixlib&#x3D;rb-4.0.3&amp;q&#x3D;80&amp;w&#x3D;2000 1000w"
                                        sizes="(max-width:432px) 400px, (max-width:696px) 600px, (max-width:767px) 671px, 400px"
                                        src="https://images.unsplash.com/photo-1492633423870-43d1cd2775eb?crop=entropy&amp;cs=tinysrgb&amp;fit=max&amp;fm=jpg&amp;ixid=M3wxMTc3M3wwfDF8c2VhcmNofDIzfHxmYXNoaW9uJTIwJTIwZmxvd2VyJTIwbGlmZXN0eWxlfGVufDB8fHx8MTY5MjQ0NTI1N3ww&amp;ixlib=rb-4.0.3&amp;q=80&amp;w=2000"
                                        alt="Self-observation is the first step of inner unfolding">
                                </a>
                                <div class="post-info-wrap">
                                    <div class="tag-list flex">
                                        <a href="tag/lifestyle/index.html" style="--tag-color:#4d61ff">Lifestyle</a>
                                    </div>
                                    <h2 class="h4 post-title">
                                        <a
                                            href="{{ route('singlepost', $oldestPost['slug']) }}">{{ $oldestPost['title'] }}</a>
                                    </h2>
                                </div>
                            </article>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="popular-tags">
        <div class="container">
            <h2 class="section-title">Popular Tags</h2>
            <div class="popular-tags-wrap flex">
                <div class="tag-item flex">
                    <div class="tag-image">
                        <img src="https://images.unsplash.com/photo-1526566762798-8fac9c07aa98?crop=entropy&amp;cs=tinysrgb&amp;fit=max&amp;fm=webp&amp;ixid=M3wxMTc3M3wwfDF8c2VhcmNofDEyfHxsaWZlc3R5bGV8ZW58MHx8fHwxNjkyMzYzMzYwfDA&amp;ixlib=rb-4.0.3&amp;q=80&amp;w=2000"
                            loading="lazy" alt="Inspiration">
                    </div>
                    <div class="tag-info">
                        <a href="{{route('tags')}}" class="tag-name">Inspiration</a>
                        <div class="post-count">7 posts</div>
                    </div>
                </div>
                <div class="tag-item flex">
                    <div class="tag-image">
                        <img src="https://images.unsplash.com/photo-1496571330383-9b977f4a021d?crop=entropy&amp;cs=tinysrgb&amp;fit=max&amp;fm=webp&amp;ixid=M3wxMTc3M3wwfDF8c2VhcmNofDM3fHxuYXR1cmUlMjBmbG93ZXJ8ZW58MHx8fHwxNjkyNDQ2NDMxfDA&amp;ixlib=rb-4.0.3&amp;q=80&amp;w=2000"
                            loading="lazy" alt="Nature">
                    </div>
                    <div class="tag-info">
                        <a href="tag/nature/index.html" class="tag-name">Nature</a>
                        <div class="post-count">6 posts</div>
                    </div>
                </div>
                <div class="tag-item flex">
                    <div class="tag-image">
                        <img src="https://images.unsplash.com/photo-1608110417822-1d586b76de1a?crop=entropy&amp;cs=tinysrgb&amp;fit=max&amp;fm=webp&amp;ixid=M3wxMTc3M3wwfDF8c2VhcmNofDE1MHx8bGlmZXN0eWxlJTIwYmVhdXR5fGVufDB8fHx8MTY5MjQ0NjU0MHww&amp;ixlib=rb-4.0.3&amp;q=80&amp;w=2000"
                            loading="lazy" alt="Lifestyle">
                    </div>
                    <div class="tag-info">
                        <a href="tag/lifestyle/index.html" class="tag-name">Lifestyle</a>
                        <div class="post-count">6 posts</div>
                    </div>
                </div>
                <div class="tag-item flex">
                    <div class="tag-image">
                        <img src="https://images.unsplash.com/photo-1453487021979-5b739b2849f4?crop=entropy&amp;cs=tinysrgb&amp;fit=max&amp;fm=webp&amp;ixid=M3wxMTc3M3wwfDF8c2VhcmNofDd8fGxpZmVzdHlsZSUyMGhlYWx0aHxlbnwwfHx8fDE2OTI0NDY2NjZ8MA&amp;ixlib=rb-4.0.3&amp;q=80&amp;w=2000"
                            loading="lazy" alt="Health">
                    </div>
                    <div class="tag-info">
                        <a href="tag/health/index.html" class="tag-name">Health</a>
                        <div class="post-count">5 posts</div>
                    </div>
                </div>
                <div class="tag-item flex">
                    <div class="tag-image">
                        <img src="https://images.unsplash.com/photo-1526857240824-92be52581d9b?crop=entropy&amp;cs=tinysrgb&amp;fit=max&amp;fm=webp&amp;ixid=M3wxMTc3M3wwfDF8c2VhcmNofDF8fGZhc2hpb24lMjB0cmF2ZWx8ZW58MHx8fHwxNjkyNDQ2MjIzfDA&amp;ixlib=rb-4.0.3&amp;q=80&amp;w=2000"
                            loading="lazy" alt="Travel">
                    </div>
                    <div class="tag-info">
                        <a href="tag/travel/index.html" class="tag-name">Travel</a>
                        <div class="post-count">5 posts</div>
                    </div>
                </div>
                <div class="tag-item flex">
                    <div class="tag-image">
                        <img src="https://images.unsplash.com/photo-1528216142275-f64d7a59d8d5?crop=entropy&amp;cs=tinysrgb&amp;fit=max&amp;fm=webp&amp;ixid=M3wxMTc3M3wwfDF8c2VhcmNofDQ1fHxsaWZlc3R5bGUlMjBmb29kfGVufDB8fHx8MTY5MjQ0NjcwOXww&amp;ixlib=rb-4.0.3&amp;q=80&amp;w=2000"
                            loading="lazy" alt="Food">
                    </div>
                    <div class="tag-info">
                        <a href="tag/food/index.html" class="tag-name">Food</a>
                        <div class="post-count">5 posts</div>
                    </div>
                </div>
                <div class="tag-item flex">
                    <div class="tag-image">
                        <img src="https://images.unsplash.com/photo-1522682178063-73ad4736e440?crop=entropy&amp;cs=tinysrgb&amp;fit=max&amp;fm=webp&amp;ixid=M3wxMTc3M3wwfDF8c2VhcmNofDJ8fGZhc2hpb24lMjB0ZWNobm9sb2d5JTIwY2FtZXJhfGVufDB8fHx8MTY5MjQ0NjMwOXww&amp;ixlib=rb-4.0.3&amp;q=80&amp;w=2000"
                            loading="lazy" alt="Technology">
                    </div>
                    <div class="tag-info">
                        <a href="tag/technology/index.html" class="tag-name">Technology</a>
                        <div class="post-count">3 posts</div>
                    </div>
                </div>
                <div class="all-tags flex">
                    <a href="{{route('tags')}}" class="all-tags-link"><span>See all tags</span><svg
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                            <path
                                d="M16.1716 10.9999L10.8076 5.63589L12.2218 4.22168L20 11.9999L12.2218 19.778L10.8076 18.3638L16.1716 12.9999H4V10.9999H16.1716Z">
                            </path>
                        </svg></a>
                </div>
            </div>
        </div>
    </div>

    <div class="post-loop">
        <div class="container">
            <div class="post-cards-wrap
        three-column-vertical
">
                <article class="post-card js-card flex ar-4:3">
                    <a href="{{ route('singlepost', $latestPost[0]['slug']) }}">
                        <img loading="lazy"
                            srcset="https://images.unsplash.com/photo-1582657233895-0f37a3f150c0?crop&#x3D;entropy&amp;cs&#x3D;tinysrgb&amp;fit&#x3D;max&amp;fm&#x3D;webp&amp;ixid&#x3D;M3wxMTc3M3wwfDF8c2VhcmNofDI2fHxmYXNoaW9uJTIwJTIwZmxvd2VyfGVufDB8fHx8MTY5MjQ0NTE5Mnww&amp;ixlib&#x3D;rb-4.0.3&amp;q&#x3D;80&amp;w&#x3D;2000 250w,
                                https://images.unsplash.com/photo-1582657233895-0f37a3f150c0?crop&#x3D;entropy&amp;cs&#x3D;tinysrgb&amp;fit&#x3D;max&amp;fm&#x3D;webp&amp;ixid&#x3D;M3wxMTc3M3wwfDF8c2VhcmNofDI2fHxmYXNoaW9uJTIwJTIwZmxvd2VyfGVufDB8fHx8MTY5MjQ0NTE5Mnww&amp;ixlib&#x3D;rb-4.0.3&amp;q&#x3D;80&amp;w&#x3D;2000 400w,
                                https://images.unsplash.com/photo-1582657233895-0f37a3f150c0?crop&#x3D;entropy&amp;cs&#x3D;tinysrgb&amp;fit&#x3D;max&amp;fm&#x3D;webp&amp;ixid&#x3D;M3wxMTc3M3wwfDF8c2VhcmNofDI2fHxmYXNoaW9uJTIwJTIwZmxvd2VyfGVufDB8fHx8MTY5MjQ0NTE5Mnww&amp;ixlib&#x3D;rb-4.0.3&amp;q&#x3D;80&amp;w&#x3D;2000 600w, 
                                https://images.unsplash.com/photo-1582657233895-0f37a3f150c0?crop&#x3D;entropy&amp;cs&#x3D;tinysrgb&amp;fit&#x3D;max&amp;fm&#x3D;webp&amp;ixid&#x3D;M3wxMTc3M3wwfDF8c2VhcmNofDI2fHxmYXNoaW9uJTIwJTIwZmxvd2VyfGVufDB8fHx8MTY5MjQ0NTE5Mnww&amp;ixlib&#x3D;rb-4.0.3&amp;q&#x3D;80&amp;w&#x3D;2000 1000w"
                            sizes="(max-width:432px) 400px, (max-width:696px) 600px, (max-width:767px) 671px, 400px"
                            src="https://images.unsplash.com/photo-1582657233895-0f37a3f150c0?crop=entropy&amp;cs=tinysrgb&amp;fit=max&amp;fm=jpg&amp;ixid=M3wxMTc3M3wwfDF8c2VhcmNofDI2fHxmYXNoaW9uJTIwJTIwZmxvd2VyfGVufDB8fHx8MTY5MjQ0NTE5Mnww&amp;ixlib=rb-4.0.3&amp;q=80&amp;w=2000"
                            alt="Autumn is a second spring when every leaf is a flower">
                    </a>
                    <div class="post-info-wrap">
                        <div class="tag-list flex">
                            <a href="tag/nature/index.html" style="--tag-color:#fd94ff">Nature</a>
                        </div>
                        <h2 class="h4 post-title">
                            <a href="autumn-is-a-second-spring-when-every-leaf-is-a-flower/index.html">Autumn
                                is a second spring when every leaf is a flower</a>
                        </h2>
                        <div class="post-excerpt">
                            She then expatiated very warmly upon the advantages I should reap from her plan;
                            talked in a high style of my future grandeur; assured me how heartily I should
                            despise almost every body and every thing I had hitherto seen; predicted my marrying
                            into some family of the
                        </div>
                        <div class="post-meta text-s flex">
                            <div class="author-avatars flex" data-authors="1">
                                <a href="author/harini/index.html" class="author-image-wrap">
                                    <img src="content/images/2023/08/harini.jpg" alt="Harini Banerjee">
                                </a>
                            </div>
                            <span class="read-time">
                                <svg>
                                    <use xlink:href="#i-clock"></use>
                                </svg>4 min read
                            </span>
                        </div>
                    </div>
                </article>
                <article class="post-card js-card flex ar-4:3">
                    <a href="{{ route('singlepost', $latestPost[0]['slug']) }}" class="post-img-wrap">
                        <img loading="lazy"
                            srcset="https://images.unsplash.com/photo-1500917293891-ef795e70e1f6?crop&#x3D;entropy&amp;cs&#x3D;tinysrgb&amp;fit&#x3D;max&amp;fm&#x3D;webp&amp;ixid&#x3D;M3wxMTc3M3wwfDF8c2VhcmNofDI4fHxmYXNoaW9uJTIwYmVhdXR5fGVufDB8fHx8MTY5MjQ0NTA2MHww&amp;ixlib&#x3D;rb-4.0.3&amp;q&#x3D;80&amp;w&#x3D;2000 250w,
                                https://images.unsplash.com/photo-1500917293891-ef795e70e1f6?crop&#x3D;entropy&amp;cs&#x3D;tinysrgb&amp;fit&#x3D;max&amp;fm&#x3D;webp&amp;ixid&#x3D;M3wxMTc3M3wwfDF8c2VhcmNofDI4fHxmYXNoaW9uJTIwYmVhdXR5fGVufDB8fHx8MTY5MjQ0NTA2MHww&amp;ixlib&#x3D;rb-4.0.3&amp;q&#x3D;80&amp;w&#x3D;2000 400w,
                                https://images.unsplash.com/photo-1500917293891-ef795e70e1f6?crop&#x3D;entropy&amp;cs&#x3D;tinysrgb&amp;fit&#x3D;max&amp;fm&#x3D;webp&amp;ixid&#x3D;M3wxMTc3M3wwfDF8c2VhcmNofDI4fHxmYXNoaW9uJTIwYmVhdXR5fGVufDB8fHx8MTY5MjQ0NTA2MHww&amp;ixlib&#x3D;rb-4.0.3&amp;q&#x3D;80&amp;w&#x3D;2000 600w, 
                                https://images.unsplash.com/photo-1500917293891-ef795e70e1f6?crop&#x3D;entropy&amp;cs&#x3D;tinysrgb&amp;fit&#x3D;max&amp;fm&#x3D;webp&amp;ixid&#x3D;M3wxMTc3M3wwfDF8c2VhcmNofDI4fHxmYXNoaW9uJTIwYmVhdXR5fGVufDB8fHx8MTY5MjQ0NTA2MHww&amp;ixlib&#x3D;rb-4.0.3&amp;q&#x3D;80&amp;w&#x3D;2000 1000w"
                            sizes="(max-width:432px) 400px, (max-width:696px) 600px, (max-width:767px) 671px, 400px"
                            src="https://images.unsplash.com/photo-1500917293891-ef795e70e1f6?crop=entropy&amp;cs=tinysrgb&amp;fit=max&amp;fm=jpg&amp;ixid=M3wxMTc3M3wwfDF8c2VhcmNofDI4fHxmYXNoaW9uJTIwYmVhdXR5fGVufDB8fHx8MTY5MjQ0NTA2MHww&amp;ixlib=rb-4.0.3&amp;q=80&amp;w=2000"
                            alt="Never let your memories be greater than your dreams">
                    </a>
                    <div class="post-info-wrap">
                        <div class="tag-list flex">
                            <span class="post-featured" data-tooltip="Featured">
                                <svg>
                                    <use xlink:href="#i-sparkling"></use>
                                </svg>
                            </span>
                            <a href="tag/travel/index.html" style="--tag-color:#E10689">Travel</a>
                        </div>
                        <h2 class="h4 post-title">
                            <a href="{{ route('singlepost', $latestPost[0]['slug']) }}">Never let
                                your memories be greater than your dreams</a>
                        </h2>
                        <div class="post-excerpt">
                            Before long the searchlight discovered some distance away a schooner with all sails
                            set, apparently the same vessel which had been noticed earlier in the evening. The
                            wind had by this time backed to the east, and there was a shudder amongst the
                            watchers on
                        </div>
                        <div class="post-meta text-s flex">
                            <div class="author-avatars flex" data-authors="2">
                                <a href="author/apurba/index.html" class="author-image-wrap">
                                    <img src="content/images/2023/08/Apurba.jpg" alt="Apurba Talukdar">
                                </a>
                                <a href="author/ishan/index.html" class="author-image-wrap">
                                    <img src="content/images/2023/08/ishan.jpg" alt="Ishan Sharma">
                                </a>
                            </div>
                            <span class="read-time">
                                <svg>
                                    <use xlink:href="#i-clock"></use>
                                </svg>3 min read
                            </span>
                        </div>
                    </div>
                </article>
                <article class="post-card js-card flex ar-4:3">
                    <a href="dramatically-improve-your-cooking-using-just-your-imagination/index.html"
                        class="post-img-wrap">
                        <img loading="lazy"
                            srcset="https://images.unsplash.com/photo-1619735007512-34004ec2f348?crop&#x3D;entropy&amp;cs&#x3D;tinysrgb&amp;fit&#x3D;max&amp;fm&#x3D;webp&amp;ixid&#x3D;MnwxMTc3M3wwfDF8c2VhcmNofDMyfHxpbWFnaW5hdGlvbnxlbnwwfHx8fDE2NzE0MzA4NDI&amp;ixlib&#x3D;rb-4.0.3&amp;q&#x3D;80&amp;w&#x3D;2000 250w,
                                https://images.unsplash.com/photo-1619735007512-34004ec2f348?crop&#x3D;entropy&amp;cs&#x3D;tinysrgb&amp;fit&#x3D;max&amp;fm&#x3D;webp&amp;ixid&#x3D;MnwxMTc3M3wwfDF8c2VhcmNofDMyfHxpbWFnaW5hdGlvbnxlbnwwfHx8fDE2NzE0MzA4NDI&amp;ixlib&#x3D;rb-4.0.3&amp;q&#x3D;80&amp;w&#x3D;2000 400w,
                                https://images.unsplash.com/photo-1619735007512-34004ec2f348?crop&#x3D;entropy&amp;cs&#x3D;tinysrgb&amp;fit&#x3D;max&amp;fm&#x3D;webp&amp;ixid&#x3D;MnwxMTc3M3wwfDF8c2VhcmNofDMyfHxpbWFnaW5hdGlvbnxlbnwwfHx8fDE2NzE0MzA4NDI&amp;ixlib&#x3D;rb-4.0.3&amp;q&#x3D;80&amp;w&#x3D;2000 600w, 
                                https://images.unsplash.com/photo-1619735007512-34004ec2f348?crop&#x3D;entropy&amp;cs&#x3D;tinysrgb&amp;fit&#x3D;max&amp;fm&#x3D;webp&amp;ixid&#x3D;MnwxMTc3M3wwfDF8c2VhcmNofDMyfHxpbWFnaW5hdGlvbnxlbnwwfHx8fDE2NzE0MzA4NDI&amp;ixlib&#x3D;rb-4.0.3&amp;q&#x3D;80&amp;w&#x3D;2000 1000w"
                            sizes="(max-width:432px) 400px, (max-width:696px) 600px, (max-width:767px) 671px, 400px"
                            src="https://images.unsplash.com/photo-1619735007512-34004ec2f348?crop=entropy&amp;cs=tinysrgb&amp;fit=max&amp;fm=jpg&amp;ixid=MnwxMTc3M3wwfDF8c2VhcmNofDMyfHxpbWFnaW5hdGlvbnxlbnwwfHx8fDE2NzE0MzA4NDI&amp;ixlib=rb-4.0.3&amp;q=80&amp;w=2000"
                            alt="Dramatically improve your cooking using just your imagination">
                    </a>
                    <div class="post-info-wrap">
                        <div class="tag-list flex">
                            <a href="tag/food/index.html" style="--tag-color:#B43ADF">Food</a>
                        </div>
                        <h2 class="h4 post-title">
                            <a href="dramatically-improve-your-cooking-using-just-your-imagination/index.html">Dramatically
                                improve your cooking using just your imagination</a>
                        </h2>
                        <div class="post-excerpt">
                            You cannot too assiduously attend to Madame Duval herself; but I would wish you to
                            mix as little as possible with her associates, who are not likely to be among those
                            whose acquaintance would reflect credit upon you.
                        </div>
                        <div class="post-meta text-s flex">
                            <div class="author-avatars flex" data-authors="1">
                                <a href="author/harini/index.html" class="author-image-wrap">
                                    <img src="content/images/2023/08/harini.jpg" alt="Harini Banerjee">
                                </a>
                            </div>
                            <span class="read-time">
                                <svg>
                                    <use xlink:href="#i-clock"></use>
                                </svg>4 min read
                            </span>
                        </div>
                    </div>
                </article>
                <article class="post-card js-card flex ar-4:3">
                    <a href="self-observation-is-the-first-step-of-inner-unfolding/index.html" class="post-img-wrap">
                        <img loading="lazy"
                            srcset="https://images.unsplash.com/photo-1492633423870-43d1cd2775eb?crop&#x3D;entropy&amp;cs&#x3D;tinysrgb&amp;fit&#x3D;max&amp;fm&#x3D;webp&amp;ixid&#x3D;M3wxMTc3M3wwfDF8c2VhcmNofDIzfHxmYXNoaW9uJTIwJTIwZmxvd2VyJTIwbGlmZXN0eWxlfGVufDB8fHx8MTY5MjQ0NTI1N3ww&amp;ixlib&#x3D;rb-4.0.3&amp;q&#x3D;80&amp;w&#x3D;2000 250w,
                                https://images.unsplash.com/photo-1492633423870-43d1cd2775eb?crop&#x3D;entropy&amp;cs&#x3D;tinysrgb&amp;fit&#x3D;max&amp;fm&#x3D;webp&amp;ixid&#x3D;M3wxMTc3M3wwfDF8c2VhcmNofDIzfHxmYXNoaW9uJTIwJTIwZmxvd2VyJTIwbGlmZXN0eWxlfGVufDB8fHx8MTY5MjQ0NTI1N3ww&amp;ixlib&#x3D;rb-4.0.3&amp;q&#x3D;80&amp;w&#x3D;2000 400w,
                                https://images.unsplash.com/photo-1492633423870-43d1cd2775eb?crop&#x3D;entropy&amp;cs&#x3D;tinysrgb&amp;fit&#x3D;max&amp;fm&#x3D;webp&amp;ixid&#x3D;M3wxMTc3M3wwfDF8c2VhcmNofDIzfHxmYXNoaW9uJTIwJTIwZmxvd2VyJTIwbGlmZXN0eWxlfGVufDB8fHx8MTY5MjQ0NTI1N3ww&amp;ixlib&#x3D;rb-4.0.3&amp;q&#x3D;80&amp;w&#x3D;2000 600w, 
                                https://images.unsplash.com/photo-1492633423870-43d1cd2775eb?crop&#x3D;entropy&amp;cs&#x3D;tinysrgb&amp;fit&#x3D;max&amp;fm&#x3D;webp&amp;ixid&#x3D;M3wxMTc3M3wwfDF8c2VhcmNofDIzfHxmYXNoaW9uJTIwJTIwZmxvd2VyJTIwbGlmZXN0eWxlfGVufDB8fHx8MTY5MjQ0NTI1N3ww&amp;ixlib&#x3D;rb-4.0.3&amp;q&#x3D;80&amp;w&#x3D;2000 1000w"
                            sizes="(max-width:432px) 400px, (max-width:696px) 600px, (max-width:767px) 671px, 400px"
                            src="https://images.unsplash.com/photo-1492633423870-43d1cd2775eb?crop=entropy&amp;cs=tinysrgb&amp;fit=max&amp;fm=jpg&amp;ixid=M3wxMTc3M3wwfDF8c2VhcmNofDIzfHxmYXNoaW9uJTIwJTIwZmxvd2VyJTIwbGlmZXN0eWxlfGVufDB8fHx8MTY5MjQ0NTI1N3ww&amp;ixlib=rb-4.0.3&amp;q=80&amp;w=2000"
                            alt="Self-observation is the first step of inner unfolding">
                    </a>
                    <div class="post-info-wrap">
                        <div class="tag-list flex">
                            <span class="post-featured" data-tooltip="Featured">
                                <svg>
                                    <use xlink:href="#i-sparkling"></use>
                                </svg>
                            </span>
                            <a href="tag/lifestyle/index.html" style="--tag-color:#4d61ff">Lifestyle</a>
                        </div>
                        <h2 class="h4 post-title">
                            <a href="self-observation-is-the-first-step-of-inner-unfolding/index.html">Self-observation
                                is the first step of inner unfolding</a>
                        </h2>
                        <div class="post-excerpt">
                            Mr. Branghton's house is small and inconvenient; though his shop, which takes in all
                            the ground floor, is large and commodious. I believe I told you before, that he is a
                            silver-smith.
                        </div>
                        <div class="post-meta text-s flex">
                            <div class="author-avatars flex" data-authors="1">
                                <a href="author/biswajit/index.html" class="author-image-wrap">
                                    <img src="https://www.gravatar.com/avatar/021e64775176cc4c7018e5e867f17de2?s=250&amp;r=x&amp;d=mp"
                                        alt="Biswajit Saha">
                                </a>
                            </div>
                            <span class="read-time">
                                <svg>
                                    <use xlink:href="#i-clock"></use>
                                </svg>4 min read
                            </span>
                        </div>
                    </div>
                </article>
                <article class="post-card js-card flex ar-4:3">
                    <a href="it-is-during-our-darkest-moments-that-we-must-focus-to-see-the-light/index.html"
                        class="post-img-wrap">
                        <img loading="lazy"
                            srcset="https://images.unsplash.com/photo-1628174392663-3e7218959b07?crop&#x3D;entropy&amp;cs&#x3D;tinysrgb&amp;fit&#x3D;max&amp;fm&#x3D;webp&amp;ixid&#x3D;M3wxMTc3M3wwfDF8c2VhcmNofDI5fHxmYXNoaW9uJTIwJTIwbGlnaHR8ZW58MHx8fHwxNjkyNDQ1MzkzfDA&amp;ixlib&#x3D;rb-4.0.3&amp;q&#x3D;80&amp;w&#x3D;2000 250w,
                                https://images.unsplash.com/photo-1628174392663-3e7218959b07?crop&#x3D;entropy&amp;cs&#x3D;tinysrgb&amp;fit&#x3D;max&amp;fm&#x3D;webp&amp;ixid&#x3D;M3wxMTc3M3wwfDF8c2VhcmNofDI5fHxmYXNoaW9uJTIwJTIwbGlnaHR8ZW58MHx8fHwxNjkyNDQ1MzkzfDA&amp;ixlib&#x3D;rb-4.0.3&amp;q&#x3D;80&amp;w&#x3D;2000 400w,
                                https://images.unsplash.com/photo-1628174392663-3e7218959b07?crop&#x3D;entropy&amp;cs&#x3D;tinysrgb&amp;fit&#x3D;max&amp;fm&#x3D;webp&amp;ixid&#x3D;M3wxMTc3M3wwfDF8c2VhcmNofDI5fHxmYXNoaW9uJTIwJTIwbGlnaHR8ZW58MHx8fHwxNjkyNDQ1MzkzfDA&amp;ixlib&#x3D;rb-4.0.3&amp;q&#x3D;80&amp;w&#x3D;2000 600w, 
                                https://images.unsplash.com/photo-1628174392663-3e7218959b07?crop&#x3D;entropy&amp;cs&#x3D;tinysrgb&amp;fit&#x3D;max&amp;fm&#x3D;webp&amp;ixid&#x3D;M3wxMTc3M3wwfDF8c2VhcmNofDI5fHxmYXNoaW9uJTIwJTIwbGlnaHR8ZW58MHx8fHwxNjkyNDQ1MzkzfDA&amp;ixlib&#x3D;rb-4.0.3&amp;q&#x3D;80&amp;w&#x3D;2000 1000w"
                            sizes="(max-width:432px) 400px, (max-width:696px) 600px, (max-width:767px) 671px, 400px"
                            src="https://images.unsplash.com/photo-1628174392663-3e7218959b07?crop=entropy&amp;cs=tinysrgb&amp;fit=max&amp;fm=jpg&amp;ixid=M3wxMTc3M3wwfDF8c2VhcmNofDI5fHxmYXNoaW9uJTIwJTIwbGlnaHR8ZW58MHx8fHwxNjkyNDQ1MzkzfDA&amp;ixlib=rb-4.0.3&amp;q=80&amp;w=2000"
                            alt="It is during our darkest moments that we must focus to see the light">
                    </a>
                    <div class="post-info-wrap">
                        <div class="tag-list flex">
                            <a href="tag/inspiration/index.html" style="--tag-color:#04baf6">Inspiration</a>
                        </div>
                        <h2 class="h4 post-title">
                            <a href="it-is-during-our-darkest-moments-that-we-must-focus-to-see-the-light/index.html">It
                                is during our darkest moments that we must focus to see the light</a>
                        </h2>
                        <div class="post-excerpt">
                            Mina took a growing interest in everything and I was rejoiced to see that the
                            exigency of affairs was helping her to forget for a time the terrible experience of
                            the night. She was very, very pale
                        </div>
                        <div class="post-meta text-s flex">
                            <div class="author-avatars flex" data-authors="1">
                                <a href="author/surabhi/index.html" class="author-image-wrap">
                                    <img src="content/images/2023/08/suravi.jpg" alt="Surabhi Gupta">
                                </a>
                            </div>
                            <span class="read-time">
                                <svg>
                                    <use xlink:href="#i-clock"></use>
                                </svg>3 min read
                            </span>
                        </div>
                    </div>
                </article>
                <article class="post-card js-card flex ar-4:3">
                    <a href="bangladesh-has-developed-plastic-alternative-using-jute/index.html"
                        class="post-img-wrap">
                        <img loading="lazy"
                            srcset="https://images.unsplash.com/photo-1559563458-527698bf5295?crop&#x3D;entropy&amp;cs&#x3D;tinysrgb&amp;fit&#x3D;max&amp;fm&#x3D;webp&amp;ixid&#x3D;MnwxMTc3M3wwfDF8c2VhcmNofDI5fHxiYWd8ZW58MHx8fHwxNjcxNDMxNDg0&amp;ixlib&#x3D;rb-4.0.3&amp;q&#x3D;80&amp;w&#x3D;2000 250w,
                                https://images.unsplash.com/photo-1559563458-527698bf5295?crop&#x3D;entropy&amp;cs&#x3D;tinysrgb&amp;fit&#x3D;max&amp;fm&#x3D;webp&amp;ixid&#x3D;MnwxMTc3M3wwfDF8c2VhcmNofDI5fHxiYWd8ZW58MHx8fHwxNjcxNDMxNDg0&amp;ixlib&#x3D;rb-4.0.3&amp;q&#x3D;80&amp;w&#x3D;2000 400w,
                                https://images.unsplash.com/photo-1559563458-527698bf5295?crop&#x3D;entropy&amp;cs&#x3D;tinysrgb&amp;fit&#x3D;max&amp;fm&#x3D;webp&amp;ixid&#x3D;MnwxMTc3M3wwfDF8c2VhcmNofDI5fHxiYWd8ZW58MHx8fHwxNjcxNDMxNDg0&amp;ixlib&#x3D;rb-4.0.3&amp;q&#x3D;80&amp;w&#x3D;2000 600w, 
                                https://images.unsplash.com/photo-1559563458-527698bf5295?crop&#x3D;entropy&amp;cs&#x3D;tinysrgb&amp;fit&#x3D;max&amp;fm&#x3D;webp&amp;ixid&#x3D;MnwxMTc3M3wwfDF8c2VhcmNofDI5fHxiYWd8ZW58MHx8fHwxNjcxNDMxNDg0&amp;ixlib&#x3D;rb-4.0.3&amp;q&#x3D;80&amp;w&#x3D;2000 1000w"
                            sizes="(max-width:432px) 400px, (max-width:696px) 600px, (max-width:767px) 671px, 400px"
                            src="https://images.unsplash.com/photo-1559563458-527698bf5295?crop=entropy&amp;cs=tinysrgb&amp;fit=max&amp;fm=jpg&amp;ixid=MnwxMTc3M3wwfDF8c2VhcmNofDI5fHxiYWd8ZW58MHx8fHwxNjcxNDMxNDg0&amp;ixlib=rb-4.0.3&amp;q=80&amp;w=2000"
                            alt="Bangladesh has developed plastic alternative using jute">
                    </a>
                    <div class="post-info-wrap">
                        <div class="tag-list flex">
                            <span class="post-visibility" data-tooltip="members">
                                <svg>
                                    <use xlink:href="#i-lock"></use>
                                </svg>
                            </span>
                            <a href="tag/technology/index.html" style="--tag-color:#f18509">Technology</a>
                        </div>
                        <h2 class="h4 post-title">
                            <a href="bangladesh-has-developed-plastic-alternative-using-jute/index.html">Bangladesh
                                has developed plastic alternative using jute</a>
                        </h2>
                        <div class="post-excerpt">
                            Dr. Johnson, as usual, spoke contemptuously of Colley Cibber. 'It is wonderful that
                            a man, who for forty years had lived with the great and the witty, should have
                            acquired so ill the talents of conversation: and he had but half to furnish; for one
                            half of what he said was oaths.
                        </div>
                        <div class="post-meta text-s flex">
                            <div class="author-avatars flex" data-authors="1">
                                <a href="author/ishan/index.html" class="author-image-wrap">
                                    <img src="content/images/2023/08/ishan.jpg" alt="Ishan Sharma">
                                </a>
                            </div>
                            <span class="read-time">
                                <svg>
                                    <use xlink:href="#i-clock"></use>
                                </svg>3 min read
                            </span>
                        </div>
                    </div>
                </article>

            </div>
            <div class="pagination-wrap text-center" id="pagination-wrap">
                <button class="btn btn-lg post-load-button" id="load-more"><span>Load more</span></button>
            </div>
        </div>
    </div>
    @include('partials.newsletter')

</main>

@include('partials.footer')
