<?php include(ROOT . '/views/layouts/header.php');?>
    <!-- pages-title-start -->
    <section class="contact-img-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="con-text">
                        <h2 class="page-title">Contact</h2>
                        <p><a href="#">Home</a> | Contact</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- pages-title-end -->
    <!-- contact content section start -->
    <section class="top-map-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="map-area">
                        <div class="contact-map">
                            <div id="hastech"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="page-title">
                        <h2>Contact Us</h2>
                        <h3>Our Location</h3>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-sm-3">
                                    <strong>http://tt_cendo.com/</strong>
                                    <br>
                                    <address> Address: 123 Main Street, Anytown,CA 12345 USA. </address>
                                </div>
                                <div class="col-sm-3">
                                    <strong>Telephone</strong>
                                    <br>
                                    (800) 0123 456 789
                                    <br>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <h3>Contact Form</h3>
                        </div>
                        <form class="cendo" action="mail.php" method="post">

                            <div class="form-group required">
                                <label class="col-md-2 control-label">Your Name</label>
                                <div class="col-md-10">
                                    <input class="form-control" type="text" value="" name="name">
                                </div>
                            </div>
                            <div class="form-group required">
                                <label class="col-md-2 control-label">E-Mail Address</label>
                                <div class="col-md-10">
                                    <input class="form-control" type="text" value="" name="email">
                                </div>
                            </div>
                            <div class="form-group required">
                                <label class="col-md-2 control-label">Enquiry</label>
                                <div class="col-md-10">
                                    <textarea class="form-control" rows="10" name="message"></textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="buttons">
                                    <div class="pull-right">
                                        <input class="btn btn-primary" type="submit" value="Submit">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- contact content section end -->
<?php include(ROOT . '/views/layouts/footer.php');?>
<script src="http://maps.googleapis.com/maps/api/js"></script>
<script>
    var myCenter=new google.maps.LatLng(23.763523, 90.431098);
    function initialize()
    {
        var mapProp = {
            center:myCenter,
            scrollwheel: false,
            zoom:17,
            mapTypeId:google.maps.MapTypeId.ROADMAP
        };
        var map=new google.maps.Map(document.getElementById("hastech"),mapProp);
        var marker=new google.maps.Marker({
            position:myCenter,
            animation:google.maps.Animation.BOUNCE,
            icon:'img/map-marker.png',
            map: map,
        });

        marker.setMap(map);
    }
    google.maps.event.addDomListener(window, 'load', initialize);
</script>


