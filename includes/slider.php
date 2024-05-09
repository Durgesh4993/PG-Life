<style>
    /* Reset. */
* {
    box-sizing: border-box;
}

body {
    margin: 0;
    padding: 0;
    font-size: 100%;
    font-family: Arial, Helvetica, sans-serif;
}

/* Panels. */
.splitview {
    position: relative;
    width: 100%;
    min-height: 45vw;
    overflow: hidden;
}

.panel {
    position: absolute;
    width: 100vw;
    min-height: 45vw;
    overflow: hidden;
}

    .panel .content {
        position: absolute;
        width: 100vw;
        min-height: 45vw;
        color: #FFF;
    }

    .panel .description {
        width: 25%;
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        text-align: center;
    }

    .panel img {
        box-shadow: 0 0 20px 20px rgba(0, 0, 0, 0.15);
        width: 35%;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }


.bottom {
    background-color: rgb(44, 44, 44);
    z-index: 1;
}

    .bottom .description {
        right: 5%;
    }

.top {
    background-color: rgb(77, 69, 173);
    z-index: 2;
    width: 50vw;

    /*-webkit-clip-path: polygon(60% 0, 100% 0, 100% 100%, 40% 100%);
    clip-path: polygon(60% 0, 100% 0, 100% 100%, 40% 100%);*/
}

    .top .description {
        left: 5%;
    }

/* Handle. */
.handle {
    height: 100%;
    position: absolute;
    display: block;
    background-color: rgb(253, 171, 0);
    width: 5px;
    top: 0;
    left: 50%;
    z-index: 3;
}

/* Skewed. */
.skewed .handle {
    top: 50%;
    transform: rotate(30deg) translateY(-50%);
    height: 200%;
    -webkit-transform-origin: top;
    -moz-transform-origin: top;
    transform-origin: top;
}

.skewed .top {
    transform: skew(-30deg);
    margin-left: -1000px;
    width: calc(50vw + 1000px);
}

.skewed .top .content {
    transform: skew(30deg);
    margin-left: 1000px;
}

/* Responsive. */
@media (max-width: 900px) {
    body {
        font-size: 75%;
    }
}
</style>
<div class="splitview skewed">
        <div class="panel bottom">
            <div class="content">
                <div class="description">
                    <h1 style="font-family: cursive; ">Just Rent/Buy </br> Lorem ipsum dolor sit.</h1>
                     </div>

                <img height="600px" src="https://hgtvhome.sndimg.com/content/dam/images/hgtv/fullset/2017/5/8/0/HUHH2017-Modern-Masterpieces_Clyde-Hill-WA_1.jpg.rend.hgtvcom.1280.720.suffix/1494266003356.jpeg" alt="Original">
            </div>
        </div>

        <div class="panel top">
            <div class="content">
                <div class="description">
                    <h1 style="font-family: cursive; ">Want a Dream House </br> Lorem ipsum dolor sit.</h1>
                    </div>

                <img height="600px" src="https://hgtvhome.sndimg.com/content/dam/images/hgtv/fullset/2017/5/8/0/HUHH2017-Modern-Masterpieces_Clyde-Hill-WA_1.jpg.rend.hgtvcom.1280.720.suffix/1494266003356.jpeg" alt="Duotone">
            </div>
        </div>

        <div class="handle"></div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
    var parent = document.querySelector('.splitview'),
        topPanel = parent.querySelector('.top'),
        handle = parent.querySelector('.handle'),
        skewHack = 0,
        delta = 0;

    // If the parent has .skewed class, set the skewHack var.
    if (parent.className.indexOf('skewed') != -1) {
        skewHack = 1000;
    }

    parent.addEventListener('mousemove', function(event) {
        // Get the delta between the mouse position and center point.
        delta = (event.clientX - window.innerWidth / 2) * 0.5;

        // Move the handle.
        handle.style.left = event.clientX + delta + 'px';

        // Adjust the top panel width.
        topPanel.style.width = event.clientX + skewHack + delta + 'px';
    });
});
    </script>