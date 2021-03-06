<?php require __DIR__ . '/part/connect_db.php';

?>


<?php include __DIR__ . '/c_part/c_head.php' ?>
<?php include __DIR__ . '/c_part/c_nav.php' ?>

<div class="Full-Container">
    <div class="">
        <div class="opt d-flex justify-content-end align-items-center position-relative" id="sec1">
            <div class="position-absolute slider ">
                <ul class="runslide position-absolute d-flex">
                    <li class="r-first"></li>
                    <li></li>
                    <li></li>

                </ul>
                <ul class="slider-dots-area position-absolute">
                    <li></li>
                    <li></li>
                </ul>
            </div>
            <div id="calender-wrapper" class="calender-wrapper">
                <div class="calender-bx">
                    <div id="calender-title" class="disable-select flex center-v around">
                        <div id="left" class="flex  center-vh">
                            <span>< </span>
                        </div>
                        <p class="flex row center-vh"></p>
                        <div id="right" class="flex  center-vh">
                            <span> ></span>
                        </div>
                    </div>
                    <div class="flex row center-vh colorRed disable-select" id="days">
                        <p>星期一</p>
                        <p>星期二</p>
                        <p>星期三</p>
                        <p>星期四</p>
                        <p>星期五</p>
                        <p>星期六</p>
                        <p>星期天</p>
                    </div>
                    <div class="flex row wrap disable-select" id="calender-content"></div>
                    <div class="flex row center-v end" id="calender-panel">
                        <div class="flex column center-vh bgColorDarkRed" id="info">
                            <!-- <div class="flex row center-vh" id="info-titles">
                                <p class="flex column center-vh">Start Date</p>
                                <p class="flex column center-vh">End Date</p>
                            </div> -->
                            <!-- <div class="flex row center-vh bgColorRed">
                                <p class="flex column center-vh" id="startdate"></p>
                                <p class="flex colum center-vh" id="enddate"></p>
                            </div> -->
                        </div>
                        <div class="flex column center-vh bgColorDarkRed" id="clear">
                            <p>CLEAR SELECTION</p>
                        </div>
                    </div>
                    <div id="calender-buttons" class="flex row center-vh wrap">
                        <div id="make-booking" class="flex column center-vh width-half">
                            <p>MARK AVAILABLE</p>
                        </div>
                        <!-- <div id="remove-booking" class="flex column center-vh width-half">
                            <p>MARK UNAVAILABLE</p>
                        </div> -->
                    </div>
                </div>
            </div>

        </div>
        <div class="opt d-flex justify-content-end align-items-center" id="sec2">
            <div class="optbox d-flex align-items-end justify-content-center">
                <a href="#" class="go btn btn-primary">click me</a>
            </div>
        </div>
        <div class="opt d-flex justify-content-end align-items-center" id="sec3">
            <div class="optbox d-flex align-items-end justify-content-center">
                <a href="#" class="go btn btn-primary">click me</a>
            </div>
        </div>
        <div class="opt d-flex justify-content-end align-items-center" id="sec4">
            <div class="optbox d-flex align-items-end justify-content-center">
                <a href="#" class="go btn btn-primary">click me</a>
                <a href="#" class="btn btn-primary">加購區</a>
            </div>
        </div>
        <div class="opt d-flex justify-content-end align-items-center" id="sec5">
            <div class="optbox d-flex align-items-end justify-content-center">
                <a href="#" class="btn btn-primary">結帳</a></a>
            </div>
        </div>
    </div>
</div>

<?php include __DIR__ . '/c_part/c_scripts.php' ?>
<script src="./js/calendar.js"></script>
<script>
    // $("#sec1").css("background-color","red");
    // $("#sec2").css("background-color","blue");
    // $("#sec3").css("background-color","green");
    // $("#sec4").css("background-color","pink");
    // $("#sec5").css("background-color","yellow");

    // let slideDelay = 1.5;
    // let slideDurations = 2;

    // let slides = document.querySelectorAll('.slider');

    // let numSlide = $('.slider').length;
    // for (let i = 0; i < numSlide; i++) {
    //     TweenLite.set(slides[i], {
    //         backgroundColor: Math.random() * 0xffffff,
    //         xPercent: i * 100
    //     });
    // }

    // let wrap = wrapPartial(-100, (numSlide - 1) * 100);
    // let timer = TweenLite.delayedCall(slideDelay, autoPlay);

    // let animation = TweenMax.to($('.slider'), 1, {
    //     xPercent: "+=" + (numSlide * 100),
    //     ease: Linear.easeNone,
    //     paused: true,
    //     repeat: -1,
    //     modifiers: {
    //         xPercent: wrap
    //     }
    // });

    // const proxy = document.createElement("div");
    // TweenLite.set(proxy, {
    //     x: "+=0"
    // });

    // let transform = proxy._gsTransform;
    // let slideAnimation = TweenLite.to({}, 0.1, {});
    // let slideWidth = 0;
    // let wrapWidth = 0;


    // let draggable = new Draggable(proxy, {
    //     trigger: ".slides-container",
    //     throwProps: true,
    //     onPress: updateDraggable,
    //     onDrag: updateProgress,
    //     onThrowUpdate: updateProgress,
    //     snap: {
    //         x: snapX
    //     }
    // });

    // window.addEventListener("resize", resize);

    // function updateDraggable() {
    //     timer.restart(true);
    //     sliderAnimation.kill();
    //     this.update();
    // }


    // function animateSlides(direction) {

    //     timer.restart(true);
    //     slideAnimation.kill();

    //     let x = snapX(transform.x + direction * slideWidth);

    //     slideAnimation = TweenLite.to(proxy, slideDuration, {
    //         x: x,
    //         onUpdate: updateProgress
    //     });
    // }

    // function autoPlay() {

    //     if (draggable.isPressed || draggable.isDragging || draggable.isThrowing) {
    //         timer.restart(true);
    //     } else {
    //         animateSlides(-1);
    //     }
    // }

    // function updateProgress() {
    //     animation.progress(transform.x / wrapWidth);
    // }

    // function snapX(x) {
    //     return Math.round(x / slideWidth) * slideWidth;
    // }

    // function resize() {

    //     var norm = (transform.x / wrapWidth) || 0;

    //     slideWidth = slides[0].offsetWidth;
    //     wrapWidth = slideWidth * numSlides;

    //     TweenLite.set(proxy, {
    //         x: norm * wrapWidth
    //     });

    //     animateSlides(0);
    //     slideAnimation.progress(1);
    // }
    // resize();

    // function wrapPartial(min, max) {
    //     let r = max - min;
    //     return function(value) {
    //         let v = value - min;
    //         return ((r + v % r) % r) + min;
    //     }
    // }

    $imgArr = [

        "campRoom_s02.jpg",
        "campRoom_s03.jpg",
        "campRoom_s04.jpg",
        "campRoom_s05.jpg",
        "campRoom_s06.jpg",
        "campRoom_s01.jpg",
    ];
    $slider = $('.slider');
    $runslide = $('.runslide li');
    // $slider.css("background-image", "url(./imgs/Roomimg/campRoom_s01.jpg)");

    // function car() {

    //     $background = $slider.css("background-image");
    //     $rd = Math.floor(Math.random() * $imgArr.length);

    //     $next = $imgArr[$rd];

    //     if("url('" + $next + "')" == $background){
    //         if($rd != $imgArr.length) {
    //             $rd++;
    //         }else {
    //             $rd--;
    //         }
    //     }

    //     $slider.css("background-image", "url(./imgs/Rooming/'" + $next + "')");
    // }

    // setInterval(car, 1000);

    $runslide.css("background-image", 'url(./imgs/Roomimg/campRoom_s01.jpg)')
        .next().css("background-image", 'url(./imgs/Rooming/campRoom_s02.jpg)')
        .next().css("background-image", 'url(./imgs/Rooming/campRoom_s03.jpg)');



    // $("#sec1").css("background-color", "red")
    //     .next()
    //     .css("background-color", "blue")
    //     .next()
    //     .css("background-color", "green")
    //     .next()
    //     .css("background-color", "pink")
    //     .next()
    //     .css("background-color", "yellow");
</script>

<?php include __DIR__ . '/c_part/c_foot.php' ?>