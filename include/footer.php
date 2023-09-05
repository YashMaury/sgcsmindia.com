<footer class="page-footer font-small indigo" style="
  background: url(uploads/static/images/footer-bg.jpg) #404040 no-repeat;
  background-size: 100%;
  background-size: cover;
  background-blend-mode: multiply;
  ">
    <div class="container content">

        <div class="container text-center text-md-left">
            <div class="row">

                <div class="col-md-4 mx-auto">
                    <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Quick Link</h5>

                    <ul class="list-unstyled">
                        <li><a href="studentlogin.php">Admit Card</a></li>
                        <li><a href="online-result.php">Result</a></li>
                        <li><a href="news-events.php">News &amp; Event</a></li>
                        <li><a href="rules-regulation.php">Rules &amp; Regulations</a></li>
                        <li><a href="social-activity.php">Social Activity</a></li>
                        <li><a href="contact.php">Contact Us</a></li>
                    </ul>

                </div>

                <hr class="clearfix w-100 d-md-none">

                <div class="col-md-4 mx-auto">
                    <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Useful Links</h5>

                    <ul class="list-unstyled">
                        <li><a href="how-to-get-affiliaction.php">Registration Process</a></li>
                        <li><a href="director-message.php">Director Message</a></li>
                        <li><a href="linkage-affiliation.php">affiliation &amp; Authority</a></li>
                        <li><a href="Career.php">Career</a></li>
                        <li><a href="bank-details.php">Payment Mode</a></li>
                        <li><a href="jobs.php">Jobs</a></li>
                    </ul>

                </div>

                <hr class="clearfix w-100 d-md-none">

                <div class="col-md-4 mx-auto">
                    <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Get In Touch</h5>

                    <ul class="list-unstyled">
                        <li><a href="exams.php">Examinations</a></li>
                        <li><a href="how-to-get-affiliaction.php">How To Get affiliation</a></li>
                        <li><a href="online_exam_registration.php">Online Exam Registration</a></li>
                        <li><a href="about.php">About SGCSM</a></li>
                    </ul>

                </div>
                <hr class="clearfix w-100 d-md-none">
            </div>
        </div>

        <!-- Footer Links -->
        <div class="footer-copyright text-center py-3">
            <div class="social-links">
                <div class="container">

                    <hr style="border-bottom: #fff solid 1px;">

                    <p>
                        E-199 A, Street No.-70, Mahavir Enclave Part-III Main Beer Bazar Road, New Delhi - 110059
                    </p>
                    <p>
                        <i class="bi bi-phone-fill"></i> +91-8920206335
                        <i class="bi bi-envelope-fill"></i> info@sgcsmindia.org |
                        <i class="bi bi-envelope-fill"></i> sgcsmindia@gmail.com |
                        <i class="bi bi-globe"></i> www.sgcsmindia.org |
                        <i class="bi bi-phone-fill"></i> +91-8010819359
                    </p>

                    <hr style="border-bottom: #fff solid 1px;">
                    
                    <div class="socials-footer">
                        <div class="d-grid place-items-center visitor">

                            <div class="counterd">
                                <span>0</span>
                                <span>0</span>
                                <span>0</span>
                                <span>6</span>
                                <span>3</span>
                                <span>3</span>
                                <span>1</span>
                                <span>8</span>
                                <span>1</span>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
            Copyright ©2022 sgcsmindia.org. All Rights Reserved
        </div>

        <style>
            .counterd {
                text-align: center;
                /*width: 50%;*/
                width: 55%;
                margin: 20px auto;
                font-size: 22px;
            }

            .counterd span {
                display: inline-block;
                padding: 6px 6px 4px;
                border-radius: 3px;
                background: #396231;
                margin-right: 3px;
                border: #fff solid 2px;
                border-radius: 20px;
            }
        </style>

    </div>

</footer>

</body>
</html>

<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script type="text/javascript" src="templates/assets/css/engine1/wowslider.js"></script>
<script type="text/javascript" src="templates/assets/css/engine1/script.js"></script> -->

<script>

    (function ($) {

        $.fn.countTo = function (options) {

            options = options || {};

            return $(this).each(function () {

                // set options for current element

                var settings = $.extend({}, $.fn.countTo.defaults, {

                    from: $(this).data('from'),

                    to: $(this).data('to'),

                    speed: $(this).data('speed'),

                    refreshInterval: $(this).data('refresh-interval'),

                    decimals: $(this).data('decimals')

                }, options);

                // how many times to update the value, and how much to increment the value on each update

                var loops = Math.ceil(settings.speed / settings.refreshInterval),

                    increment = (settings.to - settings.from) / loops;

                // references & variables that will change with each update
                var self = this,
                    $self = $(this),
                    loopCount = 0,
                    value = settings.from,
                    data = $self.data('countTo') || {};
                $self.data('countTo', data);

                // if an existing interval can be found, clear it first
                if (data.interval) {
                    clearInterval(data.interval);
                }
                data.interval = setInterval(updateTimer, settings.refreshInterval);

                // initialize the element with the starting value
                render(value);

                function updateTimer() {
                    value += increment;
                    loopCount++;

                    render(value);
                    if (typeof (settings.onUpdate) == 'function') {
                        settings.onUpdate.call(self, value);
                    }

                    if (loopCount >= loops) {
                        // remove the interval
                        $self.removeData('countTo');
                        clearInterval(data.interval);
                        value = settings.to;

                        if (typeof (settings.onComplete) == 'function') {
                            settings.onComplete.call(self, value);
                        }
                    }
                }

                function render(value) {
                    var formattedValue = settings.formatter.call(self, value, settings);
                    $self.html(formattedValue);
                }
            });
        };

        $.fn.countTo.defaults = {
            from: 0, // the number the element should start at
            to: 0, // the number the element should end at
            speed: 1000, // how long it should take to count between the target numbers
            refreshInterval: 100, // how often the element should be updated
            decimals: 0, // the number of decimal places to show
            formatter: formatter, // handler for formatting the value before rendering
            onUpdate: null, // callback method for every time the element is updated
            onComplete: null // callback method for when the element finishes updating
        };

        function formatter(value, settings) {
            return value.toFixed(settings.decimals);
        }
    }(jQuery));

    jQuery(function ($) {
        // custom formatting example
        $('.count-number').data('countToOptions', {
            formatter: function (value, options) {
                return value.toFixed(options.decimals).replace(/\B(?=(?:\d{3})+(?!\d))/g, ',');
            }
        });

        // start all the timers
        $('.timer').each(count);

        function count(options) {
            var $this = $(this);
            options = $.extend({}, options || {}, $this.data('countToOptions') || {});
            $this.countTo(options);
        }
    });
</script>

<style>
    .scrollToTop {
        background: #000;
        bottom: 112px;
        display: none;
        height: 58px;
        padding: 0px;
        position: fixed;
        right: 28px;
        text-align: center;
        text-decoration: none;
        width: 50px;
        z-index: 9999999999;
    }

    .scrollToTop i {
        color: #fff;
        font-size: 42px;
    }

    .scrollToTop:hover {
        background: rgba(0, 0, 0, 0.6);
        text-decoration: none;
    }
</style>

<a class="scrollToTop" onclick='window.scrollTo({top: 0, behavior: "smooth"});' href="JavaScript:void(0);"
    style="display: inline;">
    <i class="bi bi-arrow-up-short"></i>
</a>