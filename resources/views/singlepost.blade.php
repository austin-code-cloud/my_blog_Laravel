@include('partials.header')
<main class="main">

    <div class="container">
        <article class="single-post">
            <div class="post-two-col-header-wrap">
                <div class="post-header">
                    <div class="tag-list flex">
                        <a href="../tag/food/index.html" style="--tag-color:#B43ADF">Food</a>
                    </div>
                    <h1 class="post-title">{{ $BlogPost->title }}</h1>
                    <div class="post-excerpt">
                        {{ $BlogPost->description }}
                    </div>
                    <div class="post-meta flex align-center">
                        <div class="author-avatars flex" data-authors="1">
                            <a href="../author/biswajit/index.html" class="author-image-wrap" title="Biswajit Saha">
                                <img src="https://www.gravatar.com/avatar/021e64775176cc4c7018e5e867f17de2?s=250&amp;r=x&amp;d=mp"
                                    alt="Biswajit Saha">
                            </a>
                        </div>
                        <div class="author-names">

                            <a href="../author/biswajit/index.html">Biswajit Saha</a>
                        </div>
                        <time class="post-date" datetime="2022-04-12">
                            <svg>
                                <use xlink:href="#i-calendar"></use>
                            </svg>Apr 12, 2022
                        </time>
                        <span class="read-time">
                            <svg>
                                <use xlink:href="#i-clock"></use>
                            </svg>4 min read
                        </span>
                    </div>
                </div>
                <figure class="single-post-img-container">
                    <img src="{{ asset('storage/' . $BlogPost->image) }}" alt="I do not stick to rules when cooking. I rely on my imagination">
                    <figcaption>Photo by <a
                            href="https://unsplash.com/@calvinvisuals?utm_source=ghost&amp;utm_medium=referral&amp;utm_campaign=api-credit">Calvin
                            Lupiya</a> / <a
                            href="https://unsplash.com/?utm_source=ghost&amp;utm_medium=referral&amp;utm_campaign=api-credit">Unsplash</a>
                    </figcaption>
                </figure>
            </div>
            <div class="post-content-area flex ">
                <div class="post-content">
                    {!! $BlogPost->content !!}
            </div>
        </article>
        <div class="post-footer flex">
            <div class="post-footer-content">
                <div class="share-wrap">
                    <div class="share-title h4">Share this article:</div>
                    <div class="share-links flex">
                        <a class="twitter social-icon"
                            href="https://twitter.com/share?title=I%20do%20not%20stick%20to%20rules%20when%20cooking.%20I%20rely%20on%20my%20imagination&amp;url=https://porto.gbjsolution.com/i-do-not-stick-to-rules-when-cooking-i-rely-on-my-imagination/"
                            title="Share on Twitter" target="_blank"><svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 24 24">
                                <path
                                    d="M18.2048 2.25H21.5128L14.2858 10.51L22.7878 21.75H16.1308L10.9168 14.933L4.95084 21.75H1.64084L9.37084 12.915L1.21484 2.25H8.04084L12.7538 8.481L18.2048 2.25ZM17.0438 19.77H18.8768L7.04484 4.126H5.07784L17.0438 19.77Z">
                                </path>
                            </svg></a>

                        <a class="facebook social-icon"
                            href="https://www.facebook.com/sharer/sharer.php?u=https://porto.gbjsolution.com/i-do-not-stick-to-rules-when-cooking-i-rely-on-my-imagination/"
                            title="Share on Facebook" target="_blank"><svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 24 24"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                    <path
                                        d="M14 13.5H16.5L17.5 9.5H14V7.5C14 6.47062 14 5.5 16 5.5H17.5V2.1401C17.1743 2.09685 15.943 2 14.6429 2C11.9284 2 10 3.65686 10 6.69971V9.5H7V13.5H10V22H14V13.5Z">
                                    </path>
                                </svg>
                        </a>

                        <a class="pinterest social-icon"
                            href="http://pinterest.com/pin/create/button/?url=https://porto.gbjsolution.com/i-do-not-stick-to-rules-when-cooking-i-rely-on-my-imagination/&amp;media=https://images.unsplash.com/photo-1522512115668-c09775d6f424?crop=entropy&amp;cs=tinysrgb&amp;fit=max&amp;fm=jpg&amp;ixid=M3wxMTc3M3wwfDF8c2VhcmNofDUyfHxmYXNoaW9uJTIwJTIwbGlnaHR8ZW58MHx8fHwxNjkyNDQ1NDA4fDA&amp;ixlib=rb-4.0.3&amp;q=80&amp;w=2000&amp;description=I%20do%20not%20stick%20to%20rules%20when%20cooking.%20I%20rely%20on%20my%20imagination"
                            title="Share on Pinterest" target="_blank"><svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 24 24">
                                <path
                                    d="M13.3717 2.09442C8.42512 1.41268 3.73383 4.48505 2.38064 9.29256C1.02745 14.1001 3.42711 19.1692 8.00271 21.1689C7.94264 20.4008 7.99735 19.628 8.16502 18.8761C8.34964 18.0374 9.46121 13.4132 9.46121 13.4132C9.23971 12.9173 9.12893 12.379 9.13659 11.8359C9.13659 10.3509 9.99353 9.24295 11.0597 9.24295C11.4472 9.23718 11.8181 9.40028 12.0758 9.68981C12.3335 9.97934 12.4526 10.3667 12.402 10.751C12.402 11.6512 11.8236 13.0131 11.5228 14.2903C11.4014 14.7656 11.5131 15.2703 11.8237 15.65C12.1343 16.0296 12.6069 16.2389 13.0967 16.2139C14.9944 16.2139 16.2675 13.7825 16.2675 10.9126C16.2675 8.71205 14.8098 7.0655 12.1243 7.0655C10.826 7.01531 9.56388 7.4996 8.63223 8.40543C7.70057 9.31126 7.18084 10.5595 7.19423 11.859C7.16563 12.5722 7.39566 13.2717 7.84194 13.8287C8.01361 13.9564 8.07985 14.1825 8.00425 14.3827C7.9581 14.5673 7.84194 15.0059 7.79578 15.1675C7.77632 15.278 7.70559 15.3728 7.60516 15.4228C7.50473 15.4729 7.38651 15.4724 7.28654 15.4214C5.9019 14.8674 5.24957 13.3439 5.24957 11.6051C5.24957 8.75822 7.63424 5.3497 12.4036 5.3497C16.1998 5.3497 18.723 8.1273 18.723 11.0972C18.723 15.0059 16.5468 17.9451 13.3298 17.9451C12.3526 17.9761 11.4273 17.5061 10.8759 16.6986C10.8759 16.6986 10.2974 19.0146 10.1835 19.4531C9.95101 20.2099 9.60779 20.9281 9.16505 21.5844C10.0877 21.8643 11.0471 22.0044 12.0113 22C14.6636 22.0017 17.2078 20.9484 19.0829 19.072C20.958 17.1957 22.0099 14.6504 22.0069 11.9975C22.004 7.00306 18.3183 2.77616 13.3717 2.09442Z">
                                </path>
                            </svg></a>

                        <a class="whatsapp social-icon"
                            href="whatsapp://send?text=https://porto.gbjsolution.com/i-do-not-stick-to-rules-when-cooking-i-rely-on-my-imagination/"
                            data-action="share/whatsapp/share" title="Share on Whatsapp" target="_blank"><svg
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path
                                    d="M12.001 2C17.5238 2 22.001 6.47715 22.001 12C22.001 17.5228 17.5238 22 12.001 22C10.1671 22 8.44851 21.5064 6.97086 20.6447L2.00516 22L3.35712 17.0315C2.49494 15.5536 2.00098 13.8345 2.00098 12C2.00098 6.47715 6.47813 2 12.001 2ZM8.59339 7.30019L8.39232 7.30833C8.26293 7.31742 8.13607 7.34902 8.02057 7.40811C7.93392 7.45244 7.85348 7.51651 7.72709 7.63586C7.60774 7.74855 7.53857 7.84697 7.46569 7.94186C7.09599 8.4232 6.89729 9.01405 6.90098 9.62098C6.90299 10.1116 7.03043 10.5884 7.23169 11.0336C7.63982 11.9364 8.31288 12.8908 9.20194 13.7759C9.4155 13.9885 9.62473 14.2034 9.85034 14.402C10.9538 15.3736 12.2688 16.0742 13.6907 16.4482C13.6907 16.4482 14.2507 16.5342 14.2589 16.5347C14.4444 16.5447 14.6296 16.5313 14.8153 16.5218C15.1066 16.5068 15.391 16.428 15.6484 16.2909C15.8139 16.2028 15.8922 16.159 16.0311 16.0714C16.0311 16.0714 16.0737 16.0426 16.1559 15.9814C16.2909 15.8808 16.3743 15.81 16.4866 15.6934C16.5694 15.6074 16.6406 15.5058 16.6956 15.3913C16.7738 15.2281 16.8525 14.9166 16.8838 14.6579C16.9077 14.4603 16.9005 14.3523 16.8979 14.2854C16.8936 14.1778 16.8047 14.0671 16.7073 14.0201L16.1258 13.7587C16.1258 13.7587 15.2563 13.3803 14.7245 13.1377C14.6691 13.1124 14.6085 13.1007 14.5476 13.097C14.4142 13.0888 14.2647 13.1236 14.1696 13.2238C14.1646 13.2218 14.0984 13.279 13.3749 14.1555C13.335 14.2032 13.2415 14.3069 13.0798 14.2972C13.0554 14.2955 13.0311 14.292 13.0074 14.2858C12.9419 14.2685 12.8781 14.2457 12.8157 14.2193C12.692 14.1668 12.6486 14.1469 12.5641 14.1105C11.9868 13.8583 11.457 13.5209 10.9887 13.108C10.8631 12.9974 10.7463 12.8783 10.6259 12.7616C10.2057 12.3543 9.86169 11.9211 9.60577 11.4938C9.5918 11.4705 9.57027 11.4368 9.54708 11.3991C9.50521 11.331 9.45903 11.25 9.44455 11.1944C9.40738 11.0473 9.50599 10.9291 9.50599 10.9291C9.50599 10.9291 9.74939 10.663 9.86248 10.5183C9.97128 10.379 10.0652 10.2428 10.125 10.1457C10.2428 9.95633 10.2801 9.76062 10.2182 9.60963C9.93764 8.92565 9.64818 8.24536 9.34986 7.56894C9.29098 7.43545 9.11585 7.33846 8.95659 7.32007C8.90265 7.31384 8.84875 7.30758 8.79459 7.30402C8.66053 7.29748 8.5262 7.29892 8.39232 7.30833L8.59339 7.30019Z">
                                </path>
                            </svg></a>

                        <a class="linkedin social-icon"
                            href="http://www.linkedin.com/shareArticle?mini=true&amp;url=https://porto.gbjsolution.com/i-do-not-stick-to-rules-when-cooking-i-rely-on-my-imagination/&amp;title=I%20do%20not%20stick%20to%20rules%20when%20cooking.%20I%20rely%20on%20my%20imagination"
                            title="Share on Linkedin"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path
                                    d="M6.94048 4.99993C6.94011 5.81424 6.44608 6.54702 5.69134 6.85273C4.9366 7.15845 4.07187 6.97605 3.5049 6.39155C2.93793 5.80704 2.78195 4.93715 3.1105 4.19207C3.43906 3.44699 4.18654 2.9755 5.00048 2.99993C6.08155 3.03238 6.94097 3.91837 6.94048 4.99993ZM7.00048 8.47993H3.00048V20.9999H7.00048V8.47993ZM13.3205 8.47993H9.34048V20.9999H13.2805V14.4299C13.2805 10.7699 18.0505 10.4299 18.0505 14.4299V20.9999H22.0005V13.0699C22.0005 6.89993 14.9405 7.12993 13.2805 10.1599L13.3205 8.47993Z">
                                </path>
                            </svg></a>

                        <a class="mail social-icon"
                            href="mailto:?subject=I%20do%20not%20stick%20to%20rules%20when%20cooking.%20I%20rely%20on%20my%20imagination&amp;body=https://porto.gbjsolution.com/i-do-not-stick-to-rules-when-cooking-i-rely-on-my-imagination/"
                            title="Send via email" rel="noopener" target="_blank"><svg
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path
                                    d="M3 3H21C21.5523 3 22 3.44772 22 4V20C22 20.5523 21.5523 21 21 21H3C2.44772 21 2 20.5523 2 20V4C2 3.44772 2.44772 3 3 3ZM20 7.23792L12.0718 14.338L4 7.21594V19H20V7.23792ZM4.51146 5L12.0619 11.662L19.501 5H4.51146Z">
                                </path>
                            </svg></a>

                        <a class="link js-copy-link social-icon" href="javascript:" onclick="return false;"
                            data-clipboard-text="https://porto.gbjsolution.com/i-do-not-stick-to-rules-when-cooking-i-rely-on-my-imagination/"
                            title="Copy the permalink" rel="noopener"><svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 24 24">
                                <path
                                    d="M17.6572 14.8282L16.2429 13.414L17.6572 11.9998C19.2193 10.4377 19.2193 7.90506 17.6572 6.34296C16.0951 4.78086 13.5624 4.78086 12.0003 6.34296L10.5861 7.75717L9.17188 6.34296L10.5861 4.92875C12.9292 2.5856 16.7282 2.5856 19.0714 4.92875C21.4145 7.27189 21.4145 11.0709 19.0714 13.414L17.6572 14.8282ZM14.8287 17.6567L13.4145 19.0709C11.0714 21.414 7.27238 21.414 4.92923 19.0709C2.58609 16.7277 2.58609 12.9287 4.92923 10.5856L6.34345 9.17139L7.75766 10.5856L6.34345 11.9998C4.78135 13.5619 4.78135 16.0946 6.34345 17.6567C7.90555 19.2188 10.4382 19.2188 12.0003 17.6567L13.4145 16.2425L14.8287 17.6567ZM14.8287 7.75717L16.2429 9.17139L9.17188 16.2425L7.75766 14.8282L14.8287 7.75717Z">
                                </path>
                            </svg></a>

                    </div>
                    <div class="notification js-notification-copy-link text-center success">
                        <a class="notification-close" href="javascript:;" aria-label="close notification"><span
                                class="close-icon"><svg>
                                    <use xlink:href="#i-close"></use>
                                </svg></span></a>
                        <span>The link has been Copied to clipboard!</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="prev-next-wrap flex justify-space-between">
            <article class="next-post flex">
                <div class="post-img-container">
                    <a href="../bangladesh-has-developed-plastic-alternative-using-jute/index.html"
                        class="post-img-wrap">
                        <img src="https://images.unsplash.com/photo-1559563458-527698bf5295?crop=entropy&amp;cs=tinysrgb&amp;fit=max&amp;fm=jpg&amp;ixid=MnwxMTc3M3wwfDF8c2VhcmNofDI5fHxiYWd8ZW58MHx8fHwxNjcxNDMxNDg0&amp;ixlib=rb-4.0.3&amp;q=80&amp;w=2000"
                            alt="Bangladesh has developed plastic alternative using jute" loading="lazy">
                    </a>
                </div>
                <div class="post-info-wrap">
                    <div class="nav-text">Newer post</div>
                    <h3 class="post-title h5">
                        <a href="../bangladesh-has-developed-plastic-alternative-using-jute/index.html">Bangladesh has
                            developed plastic alternative using jute</a>
                        </h2>
                </div>
            </article>
            <article class="prev-post flex">
                <div class="post-img-container">
                    <a href="../the-mind-and-body-are-not-separate-what-affects-one-affects-the-other/index.html"
                        class="post-img-wrap">
                        <img src="https://images.unsplash.com/photo-1593164842264-854604db2260?crop=entropy&amp;cs=tinysrgb&amp;fit=max&amp;fm=jpg&amp;ixid=MnwxMTc3M3wwfDF8c2VhcmNofDl8fHlvZ2F8ZW58MHx8fHwxNjcxNDMxNTUx&amp;ixlib=rb-4.0.3&amp;q=80&amp;w=2000"
                            alt="The mind and body are not separate. what affects one, affects the other"
                            loading="lazy">
                    </a>
                </div>
                <div class="post-info-wrap">
                    <div class="nav-text">Older post</div>
                    <h3 class="post-title h5">
                        <a href="../the-mind-and-body-are-not-separate-what-affects-one-affects-the-other/index.html">The
                            mind and body are not separate. what affects one, affects the other</a>
                        </h2>
                </div>
            </article>
        </div>
        <div class="comment-wrap">
            <div class="comment-container">

                <script defer src="../../cdn.jsdelivr.net/ghost/comments-ui%40_0.12/umd/comments-ui.min.js"
                    data-ghost-comments="https://porto.gbjsolution.com/" data-api="https://porto.gbjsolution.com/ghost/api/content/"
                    data-admin="https://porto.gbjsolution.com/ghost/" data-key="2452213235c16bcee74a475436"
                    data-styles="https://cdn.jsdelivr.net/ghost/comments-ui@~0.12/umd/main.css" data-title="null" data-count="true"
                    data-post-id="64df10e6a8f0c15c55e4fb91" data-color-scheme="auto" data-avatar-saturation="60"
                    data-accent-color="#215DEE" data-comments-enabled="all" data-publication="Porto" crossorigin="anonymous"></script>

            </div>
        </div>
        <div class="related-post-wrap">
            <div class="row">
                <div class="col-12">
                    <h3 class="section-title h4">You might also like</h3>
                </div>
                <div class="col-md-3 col-sm-6 related-post-card-wrap">
                    <article class="related-post-card ar-4:3">
                        <div class="post-img-container">
                            <a href="../dramatically-improve-your-cooking-using-just-your-imagination/index.html"
                                class="post-img-wrap">
                                <img loading="lazy"
                                    srcset="https://images.unsplash.com/photo-1619735007512-34004ec2f348?crop&#x3D;entropy&amp;cs&#x3D;tinysrgb&amp;fit&#x3D;max&amp;fm&#x3D;jpg&amp;ixid&#x3D;MnwxMTc3M3wwfDF8c2VhcmNofDMyfHxpbWFnaW5hdGlvbnxlbnwwfHx8fDE2NzE0MzA4NDI&amp;ixlib&#x3D;rb-4.0.3&amp;q&#x3D;80&amp;w&#x3D;2000 300w,
                                https://images.unsplash.com/photo-1619735007512-34004ec2f348?crop&#x3D;entropy&amp;cs&#x3D;tinysrgb&amp;fit&#x3D;max&amp;fm&#x3D;jpg&amp;ixid&#x3D;MnwxMTc3M3wwfDF8c2VhcmNofDMyfHxpbWFnaW5hdGlvbnxlbnwwfHx8fDE2NzE0MzA4NDI&amp;ixlib&#x3D;rb-4.0.3&amp;q&#x3D;80&amp;w&#x3D;2000 600w"
                                    sizes="(max-width: 472px) 400px, (max-width: 767px) 600px, (min-width: 768px) 400px, 400px"
                                    src="https://images.unsplash.com/photo-1619735007512-34004ec2f348?crop=entropy&amp;cs=tinysrgb&amp;fit=max&amp;fm=jpg&amp;ixid=MnwxMTc3M3wwfDF8c2VhcmNofDMyfHxpbWFnaW5hdGlvbnxlbnwwfHx8fDE2NzE0MzA4NDI&amp;ixlib=rb-4.0.3&amp;q=80&amp;w=2000"
                                    alt="Dramatically improve your cooking using just your imagination">
                            </a>
                        </div>
                        <div class="post-info-wrap">
                            <h2 class="post-title h5">
                                <a href="../dramatically-improve-your-cooking-using-just-your-imagination/index.html">Dramatically
                                    improve your cooking using just your imagination</a>
                            </h2>
                        </div>
                    </article>
                </div>
                <div class="col-md-3 col-sm-6 related-post-card-wrap">
                    <article class="related-post-card ar-4:3">
                        <div class="post-img-container">
                            <a href="../the-secret-ingredient-in-good-food-is-always-love/index.html"
                                class="post-img-wrap">
                                <img loading="lazy"
                                    srcset="https://images.unsplash.com/photo-1482555670981-4de159d8553b?crop&#x3D;entropy&amp;cs&#x3D;tinysrgb&amp;fit&#x3D;max&amp;fm&#x3D;jpg&amp;ixid&#x3D;M3wxMTc3M3wwfDF8c2VhcmNofDJ8fGZhc2hpb24lMjBzZWElMjBsb3ZlfGVufDB8fHx8MTY5MjQ0NjA3OXww&amp;ixlib&#x3D;rb-4.0.3&amp;q&#x3D;80&amp;w&#x3D;2000 300w,
                                https://images.unsplash.com/photo-1482555670981-4de159d8553b?crop&#x3D;entropy&amp;cs&#x3D;tinysrgb&amp;fit&#x3D;max&amp;fm&#x3D;jpg&amp;ixid&#x3D;M3wxMTc3M3wwfDF8c2VhcmNofDJ8fGZhc2hpb24lMjBzZWElMjBsb3ZlfGVufDB8fHx8MTY5MjQ0NjA3OXww&amp;ixlib&#x3D;rb-4.0.3&amp;q&#x3D;80&amp;w&#x3D;2000 600w"
                                    sizes="(max-width: 472px) 400px, (max-width: 767px) 600px, (min-width: 768px) 400px, 400px"
                                    src="https://images.unsplash.com/photo-1482555670981-4de159d8553b?crop=entropy&amp;cs=tinysrgb&amp;fit=max&amp;fm=jpg&amp;ixid=M3wxMTc3M3wwfDF8c2VhcmNofDJ8fGZhc2hpb24lMjBzZWElMjBsb3ZlfGVufDB8fHx8MTY5MjQ0NjA3OXww&amp;ixlib=rb-4.0.3&amp;q=80&amp;w=2000"
                                    alt="The secret ingredient in good food is always love">
                            </a>
                        </div>
                        <div class="post-info-wrap">
                            <h2 class="post-title h5">
                                <a href="../the-secret-ingredient-in-good-food-is-always-love/index.html">The secret
                                    ingredient in good food is always love</a>
                            </h2>
                        </div>
                    </article>
                </div>
                <div class="col-md-3 col-sm-6 related-post-card-wrap">
                    <article class="related-post-card ar-4:3">
                        <div class="post-img-container">
                            <a href="../i-like-better-than-talking-about-food-is-eating/index.html"
                                class="post-img-wrap">
                                <img loading="lazy"
                                    srcset="https://images.unsplash.com/flagged/photo-1579632993381-847f6a71a3cd?crop&#x3D;entropy&amp;cs&#x3D;tinysrgb&amp;fit&#x3D;max&amp;fm&#x3D;jpg&amp;ixid&#x3D;MnwxMTc3M3wwfDF8c2VhcmNofDV8fGVhdGluZ3xlbnwwfHx8fDE2NzE0MzMxOTU&amp;ixlib&#x3D;rb-4.0.3&amp;q&#x3D;80&amp;w&#x3D;2000 300w,
                                https://images.unsplash.com/flagged/photo-1579632993381-847f6a71a3cd?crop&#x3D;entropy&amp;cs&#x3D;tinysrgb&amp;fit&#x3D;max&amp;fm&#x3D;jpg&amp;ixid&#x3D;MnwxMTc3M3wwfDF8c2VhcmNofDV8fGVhdGluZ3xlbnwwfHx8fDE2NzE0MzMxOTU&amp;ixlib&#x3D;rb-4.0.3&amp;q&#x3D;80&amp;w&#x3D;2000 600w"
                                    sizes="(max-width: 472px) 400px, (max-width: 767px) 600px, (min-width: 768px) 400px, 400px"
                                    src="https://images.unsplash.com/flagged/photo-1579632993381-847f6a71a3cd?crop=entropy&amp;cs=tinysrgb&amp;fit=max&amp;fm=jpg&amp;ixid=MnwxMTc3M3wwfDF8c2VhcmNofDV8fGVhdGluZ3xlbnwwfHx8fDE2NzE0MzMxOTU&amp;ixlib=rb-4.0.3&amp;q=80&amp;w=2000"
                                    alt="I like better than talking about food is eating">
                            </a>
                        </div>
                        <div class="post-info-wrap">
                            <h2 class="post-title h5">
                                <a href="../i-like-better-than-talking-about-food-is-eating/index.html">I like better
                                    than talking about food is eating</a>
                            </h2>
                        </div>
                    </article>
                </div>
                <div class="col-md-3 col-sm-6 related-post-card-wrap">
                    <article class="related-post-card ar-4:3">
                        <div class="post-img-container">
                            <a href="../believe-in-your-cooking-skills-but-never-stop-improving/index.html"
                                class="post-img-wrap">
                                <img loading="lazy"
                                    srcset="https://images.unsplash.com/photo-1567653418876-5bb0e566e1c2?crop&#x3D;entropy&amp;cs&#x3D;tinysrgb&amp;fit&#x3D;max&amp;fm&#x3D;jpg&amp;ixid&#x3D;MnwxMTc3M3wwfDF8c2VhcmNofDV8fHNpbmdsZSUyMGNvbG9yfGVufDB8fHx8MTY3MTQzNDk3Mg&amp;ixlib&#x3D;rb-4.0.3&amp;q&#x3D;80&amp;w&#x3D;2000 300w,
                                https://images.unsplash.com/photo-1567653418876-5bb0e566e1c2?crop&#x3D;entropy&amp;cs&#x3D;tinysrgb&amp;fit&#x3D;max&amp;fm&#x3D;jpg&amp;ixid&#x3D;MnwxMTc3M3wwfDF8c2VhcmNofDV8fHNpbmdsZSUyMGNvbG9yfGVufDB8fHx8MTY3MTQzNDk3Mg&amp;ixlib&#x3D;rb-4.0.3&amp;q&#x3D;80&amp;w&#x3D;2000 600w"
                                    sizes="(max-width: 472px) 400px, (max-width: 767px) 600px, (min-width: 768px) 400px, 400px"
                                    src="https://images.unsplash.com/photo-1567653418876-5bb0e566e1c2?crop=entropy&amp;cs=tinysrgb&amp;fit=max&amp;fm=jpg&amp;ixid=MnwxMTc3M3wwfDF8c2VhcmNofDV8fHNpbmdsZSUyMGNvbG9yfGVufDB8fHx8MTY3MTQzNDk3Mg&amp;ixlib=rb-4.0.3&amp;q=80&amp;w=2000"
                                    alt="Believe in your cooking skills but never stop improving">
                            </a>
                        </div>
                        <div class="post-info-wrap">
                            <h2 class="post-title h5">
                                <a href="../believe-in-your-cooking-skills-but-never-stop-improving/index.html">Believe
                                    in your cooking skills but never stop improving</a>
                            </h2>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="esub-section-wrap flex align-center justify-space-between">
            <div class="esub-content-wrap">
                <h2 class="esub-title">Subscribe to Porto newsletter and stay updated.</h2>
                <div class="esub-subtext">
                    Don&#x27;t miss anything. Get all the latest posts delivered straight to your inbox. It&#x27;s free!
                </div>

            </div>
            <div class="esub-form-wrap">
                <form data-members-form="subscribe">
                    <label for="esub_name" class="sr-only">Name</label>
                    <input data-members-name id="esub_name" class="name" type="text" name="name"
                        placeholder="Your name">
                    <label for="esub_email" class="sr-only">Email</label>
                    <input data-members-email id="esub_email" class="email" type="email" name="email"
                        placeholder="Your email address">
                    <button class="btn btn-block" type="submit"><span>Subscribe</span></button>

                    <div class="message-container">
                        <div class="notification success form-notification">
                            <a class="notification-close" href="javascript:;" aria-label="close notification"><span
                                    class="close-icon"><svg>
                                        <use xlink:href="#i-close"></use>
                                    </svg></span></a>
                            <strong>Great!</strong> Check your inbox and click the link to confirm your subscription.
                        </div>
                        <div class="notification error form-notification">
                            <a class="notification-close" href="javascript:;" aria-label="close notification"><span
                                    class="close-icon"><svg>
                                        <use xlink:href="#i-close"></use>
                                    </svg></span></a>
                            <strong>Error!</strong> Please enter a valid email address!
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

</main>
@include('partials.footer')