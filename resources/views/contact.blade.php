@include('partials.header')
<main class="main">


    <div class="container">
        <div class="contact-card">
            <div class="contact-page-content">
                <h1 class="page-title">Contact us</h1>
                <div class="page-content">
                    <p>Hello! Do you have any questions or suggestions about this site, or just want to say Hi? Send a
                        message using the below form. I will get back to you as soon as possible.</p>
                </div>
                <form method="POST" action="https://formspree.io/f/xleyryvy">
                    <label for="name" class="sr-only">Your name</label>
                    <input type="text" name="name" id="name" placeholder="Full name">
                    <label for="email" class="sr-only">Your email address</label>
                    <input type="email" name="email" id="email" placeholder="Email">
                    <label for="subject" class="sr-only">Subject</label>
                    <input type="text" name="subject" id="subject" placeholder="Subject">
                    <label for="message" class="sr-only">Your message</label>
                    <textarea name ="message" id="message" placeholder="Message" rows="6"></textarea>
                    <input class="btn btn-primary" type="submit" value="Send Message" rows="4">
                </form>
            </div>
            <div class="featured-image-wrap contact-page-feature-image">
                <img loading="lazy"
                    srcset="https://images.unsplash.com/photo-1583177107261-b49700558376?crop&#x3D;entropy&amp;cs&#x3D;tinysrgb&amp;fit&#x3D;max&amp;fm&#x3D;webp&amp;ixid&#x3D;M3wxMTc3M3wwfDF8c2VhcmNofDk0fHxjb250YWN0fGVufDB8fHx8MTY5MjI5Mjk1Nnww&amp;ixlib&#x3D;rb-4.0.3&amp;q&#x3D;80&amp;w&#x3D;2000 300w,
                    https://images.unsplash.com/photo-1583177107261-b49700558376?crop&#x3D;entropy&amp;cs&#x3D;tinysrgb&amp;fit&#x3D;max&amp;fm&#x3D;webp&amp;ixid&#x3D;M3wxMTc3M3wwfDF8c2VhcmNofDk0fHxjb250YWN0fGVufDB8fHx8MTY5MjI5Mjk1Nnww&amp;ixlib&#x3D;rb-4.0.3&amp;q&#x3D;80&amp;w&#x3D;2000 600w,
                    https://images.unsplash.com/photo-1583177107261-b49700558376?crop&#x3D;entropy&amp;cs&#x3D;tinysrgb&amp;fit&#x3D;max&amp;fm&#x3D;webp&amp;ixid&#x3D;M3wxMTc3M3wwfDF8c2VhcmNofDk0fHxjb250YWN0fGVufDB8fHx8MTY5MjI5Mjk1Nnww&amp;ixlib&#x3D;rb-4.0.3&amp;q&#x3D;80&amp;w&#x3D;2000 1200w"
                    sizes="(max-width: 472px) 400px, (max-width: 767px) 600px, (min-width: 768px) 1200px"
                    src="https://images.unsplash.com/photo-1583177107261-b49700558376?crop=entropy&amp;cs=tinysrgb&amp;fit=max&amp;fm=jpg&amp;ixid=M3wxMTc3M3wwfDF8c2VhcmNofDk0fHxjb250YWN0fGVufDB8fHx8MTY5MjI5Mjk1Nnww&amp;ixlib=rb-4.0.3&amp;q=80&amp;w=2000"
                    alt="Contact us">
            </div>
        </div>
    </div>

    @include('partials.newsletter')

</main>
@include('partials.footer')
