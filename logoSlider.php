<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Scrolling Logo Thumbnail Slider - Jssor Slider</title>
</head>
<body>
    
    <!-- #region Jssor Slider Begin -->
    <!-- Generator: Jssor Slider Maker -->
    <!-- Source: https://www.jssor.com -->
    <script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
    <script type="text/javascript" src="js/jssor.slider.min.js"></script>
    <script type="text/javascript">
        jQuery(document).ready(function ($) {

            var jssor_1_options = {
              $AutoPlay: 1,
              $Idle: 0,
              $SlideDuration: 5000,
              $SlideEasing: $Jease$.$Linear,
              $PauseOnHover: 4,
              $SlideWidth: 140,
              $Align: 0
            };

            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

            /*#region responsive code begin*/

            var MAX_WIDTH = 980;

            function ScaleSlider() {
                var containerElement = jssor_1_slider.$Elmt.parentNode;
                var containerWidth = containerElement.clientWidth;

                if (containerWidth) {

                    var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);

                    jssor_1_slider.$ScaleWidth(expectedWidth);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }

            ScaleSlider();

            $(window).bind("load", ScaleSlider);
            $(window).bind("resize", ScaleSlider);
            $(window).bind("orientationchange", ScaleSlider);
            /*#endregion responsive code end*/
        });
    </script>
    <style>
        /* jssor slider loading skin spin css */
        .jssorl-009-spin img {
            animation-name: jssorl-009-spin;
            animation-duration: 1.6s;
            animation-iteration-count: infinite;
            animation-timing-function: linear;
        }

        @keyframes jssorl-009-spin {
            from {
                transform: rotate(0deg);
            }

            to {
                transform: rotate(360deg);
            }
        }

    </style>
    <div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:980px;height:100px;overflow:hidden;visibility:hidden;">
        <!-- Loading Screen -->
        <div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
            <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="../svg/loading/static-svg/spin.svg" />
        </div>
        <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:980px;height:100px;overflow:hidden;">
            <div>
                <img data-u="image" src="images/logo.png" />
            </div>
            <div>
                <img data-u="image" src="../img/gallery/200x150/002.jpg" />
            </div>
            <div>
                <img data-u="image" src="../img/gallery/200x150/003.jpg" />
            </div>
            <div>
                <img data-u="image" src="../img/gallery/200x150/004.jpg" />
            </div>
            <div>
                <img data-u="image" src="../img/gallery/200x150/009.jpg" />
            </div>
            <div>
                <img data-u="image" src="../img/gallery/200x150/010.jpg" />
            </div>
            <div>
                <img data-u="image" src="../img/gallery/200x150/019.jpg" />
            </div>
            <div>
                <img data-u="image" src="../img/gallery/200x150/020.jpg" />
            </div>
            <div>
                <img data-u="image" src="../img/gallery/200x150/021.jpg" />
            </div>
            <div>
                <img data-u="image" src="../img/gallery/200x150/022.jpg" />
            </div>
            <div>
                <img data-u="image" src="../img/gallery/200x150/024.jpg" />
            </div>
            <div style="background-color:#ff7c28;">
                <div style="position:absolute;top:-3px;left:-4px;width:150px;height:62px;z-index:0;font-size:12px;color:#000000;line-height:24px;text-align:left;padding:5px;box-sizing:border-box;">Photos in this slider are to demostrate jssor slider,<br />
                    which are not licensed for any other purpose.
                </div>
            </div>
        </div>
    </div>
    <!-- #endregion Jssor Slider End -->
</body>
</html>