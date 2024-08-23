<?php
include('header.php');
?>

<section id="about_banner">
</section>

<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-12 mb-4 text-center one">
                <h2>About US</h2>
            </div>
            <div class="col-md-12">
                <div class="row align-items-center justify-content-center">
                    <div class="col-md-6">
                        <div class="abouts_img">
                            <img src="assets/img/about_img_us.png" alt="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <h3>Few Line about Ourself</h3>
                        <p>Might be the journey of changing your name can be diificult task as its includes legalities and paperwork to get this
                            done. This is where our team of expert name change consultants comes into play, offering unparalleled guidance and
                            support to simplify this complex process of name change and gazette notification. Our professional team have legal
                            skills and dedicated practice in this and making them expert of this domain. Our name change consultans helps from
                            the initial consultation to the final notification in the Gazette, we manage every step, ensuring that all
                            documentation is accurately prepared and submitted within the required timelines. Our service is not merely
                            transactional; we offer a personalized approach, recognizing the uniqueness of each individual's situation
                            and tailoring our services to meet those specific needs. <span id="dots">...</span><span id="more">On the other hand,
                                our team is commitment to providing a seamless name change experience extends beyond the paperwork. Our team
                                understand the emotional and psychological importance of a name change and are committed to supporting our each
                                clients through this proceess till there work not completed. By using our expertise of this domain of many years
                                we help our clients and get there name change in there legal documents by providing gazette notification.
                                Our goal is to help and empower our clients, providing them with the confidence and peace of mind that their
                                name change is being handled by experts who care. With our consultancy, you can rest assured that your
                                name change journey will be smooth, efficient, and tailored to reflect your true identity. Trust in our
                                expertise and dedication to transform this daunting process into a straightforward and fulfilling experience
                            </span></p><button class="bn54" onclick="myFunction()" id="myBtn">Read more</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="bg-image">
    <div class="container">
        <div class="row text-white">
            <div class="col-md-12 mb-4 text-center">
                <h2>Best <span>Name Change</span> Consultant</h2>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-md-7">
                <div class="about-area-3">
                    <div class="video-tut">
                        <img src="assets/img/about-us-img.png" alt="">
                        <a class="play-btn" data-fancybox="" href="https://www.youtube.com/embed/6Jyf_c40QHg?si=-F3NA8I4Mmr5X_yi" tabindex="0">
                            <i class="fas fa-play"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <div class="formmm">
                    <form>
                        <div class="row">
                            <div class="col-md-12">
                                <label for="lname">YOUR NAME:</label><br>
                                <input type="name" value="" placeholder="Name"><br><br>
                            </div>
                            <div class="col-md-12">
                                <label for="lname">EMAIL ADDRESS</label><br>
                                <input type="name" value="" placeholder="Name"><br><br>
                            </div>
                            <div class="col-md-12">
                                <label for="lname"> PHONE NUMBER</label><br>
                                <input type="number" value="" placeholder="Number"><br><br>
                            </div>
                            <div class="col-md-12">
                                <label for="c"> MESSAGE</label><br>
                                <textarea id="address" name="address"></textarea>
                            </div>
                            <div class="col-md-12 mt-2">
                                <button class="bn54">
                                    <span class="bn54span">Button</span>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    #more {
        display: none;
    }

</style>

<script>
    function myFunction() {
        var dots = document.getElementById("dots");
        var moreText = document.getElementById("more");
        var btnText = document.getElementById("myBtn");

        if (dots.style.display === "none") {
            dots.style.display = "inline";
            btnText.innerHTML = "Read more";
            moreText.style.display = "none";
        } else {
            dots.style.display = "none";
            btnText.innerHTML = "Read less";
            moreText.style.display = "inline";
        }
    }
</script>

<?php
include('footer.php');
?>