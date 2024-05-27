<x-guest-layout>
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9
        }

        header {
            background-color: #333;
            color: #fff;
            padding: 10px 0;
            text-align: center;
            position: sticky;
            top: 0;
            z-index: 1000
        }

        header .logo h1 {
            margin: 0;
            color: #0095f6;
            font-size: 2.5em
        }

        nav {
            display: flex;
            justify-content: center;
            background-color: #444;
            padding: 10px 0
        }

        nav a {
            color: #fff;
            text-decoration: none;
            margin: 0 15px;
            font-size: 1.1em;
            transition: color .3s ease
        }

        nav a:hover {
            color: #0095f6
        }

        main {
            padding: 20px;
            max-width: 1200px;
            margin: 0 auto
        }

        .stats {
            display: flex;
            justify-content: space-around;
            align-items: center;
            margin: 20px 0;
            flex-wrap: wrap;
            gap: 20px
        }

        .stats div {
            text-align: center;
            padding: 10px 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            flex: 1;
            min-width: 150px
        }

        .stats p {
            margin: 0;
            font-size: 1.5em;
            color: #333
        }

        .section {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
            transition: transform .3s ease
        }

        .section:hover {
            transform: translateY(-10px)
        }

        .section h2 {
            color: #0095f6;
            margin-top: 0;
            font-size: 2em
        }

        .section p {
            color: #333;
            line-height: 1.6;
            font-size: 1.1em
        }

        .media {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: center;
            align-items: center;
            margin-top: 20px
        }

        .media img,
        .media video {
            max-width: 48%;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            transition: transform .3s ease
        }

        .media img:hover,
        .media video:hover {
            transform: scale(1.05)
        }

        @media(max-width:768px) {

            .media img,
            .media video {
                max-width: 100%
            }
        }

        footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 10px 0;
            font-size: .9em
        }
    </style>
    <video width="100%" height="auto" autoplay loop muted playsinline style="margin-top:73px;height:68vh">
        <source src="{{ asset('storage/3191901-uhd_3840_2160_25fps.mp4') }}" type="video/mp4"> Your browser does not
        support the video tag.
    </video>
    <main>
        <div class="text-center">
            <h1 style="font-size:40px;font-weight:700">We Are Trip My Soul</h1>
        </div>
        <div class="stats">
            <div>
                <p><i class="fas fa-map-marker-alt"></i> Activities <span id="nbr1">0</span>+</p>
            </div>
            <div>
                <p><i class="fas fa-globe"></i> Destinations <span id="nbr2">0</span>+</p>
            </div>
            <div>
                <p><i class="fas fa-users"></i> Users/Year <span id="nbr3">0</span>+</p>
            </div>
        </div>
        <section id="about" class="section text-center">
            <div class="container mx-auto px-4">
                <h2 class="text-3xl font-bold mb-8 text-indigo-600">Our Journey <i class="fas fa-globe"></i></h2>
                <p class="mb-6">Changing the world through travel has been our goal since 2015. At Trip My Soul, we
                    believe in creating meaningful experiences and building lasting connections. Over the past 9 years,
                    we've dedicated ourselves to providing exceptional travel solutions in North India.</p>
                <h3 class="text-2xl font-semibold mb-4 text-indigo-600">Why Choose Trip My Soul? <i
                        class="fas fa-check-circle"></i></h3>
                <ul class="list-disc list-inside mb-6">
                    <li class="mb-2">Trusted Experience: With nearly a decade in the taxi rental business, we are a
                        reliable and experienced service provider.</li>
                    <li class="mb-2">Comprehensive Services: We offer both local and outstation travel solutions
                        tailored to your needs.</li>
                    <li class="mb-2">Customer-Centric Approach: Our services ensure a stress-free and enjoyable travel
                        experience.</li>
                    <li class="mb-2">Competitive Rates: We provide affordable rates without compromising on service
                        quality.</li>
                </ul>
                <h3 class="text-2xl font-semibold mb-4 text-indigo-600">Our Commitment to Quality <i
                        class="fas fa-star"></i></h3>
                <p class="mb-6">At Trip My Soul, your safety and comfort are our top priorities. Our fleet and
                    professional drivers guarantee a smooth and pleasant journey.</p>
                <h3 class="text-2xl font-semibold mb-4 text-indigo-600">Our Values <i class="fas fa-heart"></i></h3>
                <ul class="list-disc list-inside mb-6">
                    <li class="mb-2">Customer Satisfaction: We go the extra mile to ensure an excellent travel
                        experience.</li>
                    <li class="mb-2">Reliability: Count on us for dependable and punctual services.</li>
                    <li class="mb-2">Integrity: We operate with honesty and transparency, ensuring fair rates and
                        high-quality services.</li>
                </ul>
                <h3 class="text-2xl font-semibold mb-4 text-indigo-600">Diversity and Inclusion <i
                        class="fas fa-users"></i></h3>
                <p class="mb-6">We promote diversity and inclusion in all aspects of our operations, ensuring an
                    environment where everyone feels valued and respected.</p>
                <h3 class="text-2xl font-semibold mb-4 text-indigo-600">Explore With Us <i class="fas fa-map"></i></h3>
                <p class="mb-6">Whether you're a local resident or a visitor, Trip My Soul offers a range of services
                    designed to enhance your travel experience in North India.</p>
                <h3 class="text-2xl font-semibold mb-4 text-indigo-600">Contact Us <i class="fas fa-phone"></i></h3>
                <p class="mb-2"><strong>Phone:</strong> +91 90685 13438</p>
                <p class="mb-2"><strong>Email:</strong> tripmysoulteam@gmail.com</p>
                <p class="mb-2"><strong>Website:</strong> <a href="https://tripmysoul.co.in/"
                        class="text-indigo-600">tripmysoul.co.in <i class="fas fa-external-link-alt"></i></a></p>
                <div class="mt-8">
                    <p>Join us and become part of our travel community, where your journey is our passion.</p>
                </div>
            </div>
        </section>
        <section id="media" class="section media">
            <div class="container mx-auto px-4"> <img src="{{ Voyager::image(setting('site.footer-img')) }}"
                    alt="Beautiful landscape" class="w-full rounded-lg shadow-lg"> </div>
        </section>
        <section id="certifications" class="section text-center">
            <h2>Certifications</h2>
            <div class="d-flex" style="align-items:center;justify-content:space-around"> <img
                    src="{{ asset('storage/512px-IndianmountaineeringfoundationLogo.webp') }}"
                    alt="Description of your image" style="height:100px"> <img
                    src="{{ asset('storage/uttarakhand-logo-english-300x300.webp') }}" alt="Description of your image"
                    style="height:100px"> <img src="{{ asset('storage/logo.png') }}" alt="Description of your image"
                    style="height:100px;border:none"> </div>
        </section>
        <section id="sponsors" class="section text-center">
            <h2>Sponsors</h2>
            <div class="d-flex" style="align-items:center;justify-content:space-around"> <img
                    src="{{ asset('storage/609-6094516_transparent-startup-india-logo-hd-png-download.webp') }}"
                    alt="Description of your image" style="height:100px;border:none"> <img
                    src="{{ asset('storage/incredible-india-vector-logo.webp') }}" alt="Description of your image"
                    style="height:100px;border:none"> </div>
        </section>
    </main>
    <script>
        /*<![CDATA[*/function increaseNumberAnimation(elementId,endNumber,speed=10){const element=document.getElementById(elementId);if(!element)return;const animationRunning=JSON.parse(element.dataset.animationRunning??false);if(animationRunning)return;element.dataset.animationRunning=true;incNbrRec(0,endNumber,element,speed);}function incNbrRec(currentNumber,endNumber,element,speed){if(currentNumber<=endNumber){element.innerHTML=currentNumber.toLocaleString();setTimeout(function(){incNbrRec(currentNumber+1,endNumber,element,speed);},speed);}else{element.dataset.animationRunning=false;}}window.onload=function(){increaseNumberAnimation('nbr1',300,10);increaseNumberAnimation('nbr2',100,10);increaseNumberAnimation('nbr3',20000,1);}/*]]>*/
    </script>
</x-guest-layout>