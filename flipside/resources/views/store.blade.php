@extends('layouts.main')

        @section('content')
            <?php var_dump($_POST); ?>
        <div class="">
            <div class="content">
                <div class="row">
                    <div class="col-md-3" style="">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <h4>Hat</h4>
                               <img class="img-responsive product-img" src="http://ecx.images-amazon.com/images/I/616PvGr7nJL._UL1500_.jpg" />
                                <form action="" method="POST" style="margin-top:10px;">
                                    <script
                                            src="https://checkout.stripe.com/checkout.js" class="stripe-button"
                                            data-key="pk_test_Yj9qR1C6bIxj2f2XnTZvevPl"
                                            data-amount="2000"
                                            data-name="Demo Site"
                                            data-description="2 widgets ($20.00)"
                                            data-image="/128x128.png"
                                            data-locale="auto">
                                    </script>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3"  style="">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <h4>Shirt</h4>
                                <img class="img-responsive product-img" src="http://www.sunspel.com/media/catalog/product/cache/3/image/9df78eab33525d08d6e5fb8d27136e95/4/0/4001_102_5.jpg" />
                                <form action="" method="POST" style="margin-top:10px;">
                                    <script
                                            src="https://checkout.stripe.com/checkout.js" class="stripe-button"
                                            data-key="pk_test_Yj9qR1C6bIxj2f2XnTZvevPl"
                                            data-amount="2000"
                                            data-name="Demo Site"
                                            data-description="2 widgets ($20.00)"
                                            data-image="http://www.sunspel.com/media/catalog/product/cache/3/image/9df78eab33525d08d6e5fb8d27136e95/4/0/4001_102_5.jpg"
                                            data-locale="auto">
                                    </script>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <h4>Go Pro Hero</h4>
                                <img class="img-responsive product-img" src="https://shop.gopro.com/on/demandware.static/-/Sites-gopro-products/default/dwc295831c/cam-represent/cam-represent-HERO4-black.jpg" />
                                <form action="" method="POST" style="margin-top:10px;">
                                    <script
                                            src="https://checkout.stripe.com/checkout.js" class="stripe-button"
                                            data-key="pk_test_Yj9qR1C6bIxj2f2XnTZvevPl"
                                            data-amount="2000"
                                            data-name="Demo Site"
                                            data-description="2 widgets ($20.00)"
                                            data-image="https://shop.gopro.com/on/demandware.static/-/Sites-gopro-products/default/dwc295831c/cam-represent/cam-represent-HERO4-black.jpg"
                                            data-locale="auto">
                                    </script>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <h4>Go Pro Hero Pack</h4>
                                <img class="img-responsive product-img" src="http://pinoytutorial.com/techtorial/wp-content/uploads/2011/10/GoPro-HD-camera-pack-1.jpg" />
                                <form action="" method="POST" style="margin-top:10px;">
                                    <script
                                            src="https://checkout.stripe.com/checkout.js" class="stripe-button"
                                            data-key="pk_test_Yj9qR1C6bIxj2f2XnTZvevPl"
                                            data-amount="2000"
                                            data-name="Demo Site"
                                            data-description="2 widgets ($20.00)"
                                            data-image="http://pinoytutorial.com/techtorial/wp-content/uploads/2011/10/GoPro-HD-camera-pack-1.jpg"
                                            data-locale="auto">
                                    </script>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="col-md-3">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <h4>Hat</h4>
                                <img class="img-responsive product-img" src="http://ecx.images-amazon.com/images/I/616PvGr7nJL._UL1500_.jpg" />
                                <form action="" method="POST" style="margin-top:10px;">
                                    <script
                                            src="https://checkout.stripe.com/checkout.js" class="stripe-button"
                                            data-key="pk_test_Yj9qR1C6bIxj2f2XnTZvevPl"
                                            data-amount="2000"
                                            data-name="Demo Site"
                                            data-description="2 widgets ($20.00)"
                                            data-image="/128x128.png"
                                            data-locale="auto">
                                    </script>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <h4>Shirt</h4>
                                <img class="img-responsive product-img" src="http://www.sunspel.com/media/catalog/product/cache/3/image/9df78eab33525d08d6e5fb8d27136e95/4/0/4001_102_5.jpg" />
                                <form action="" method="POST" style="margin-top:10px;">
                                    <script
                                            src="https://checkout.stripe.com/checkout.js" class="stripe-button"
                                            data-key="pk_test_Yj9qR1C6bIxj2f2XnTZvevPl"
                                            data-amount="2000"
                                            data-name="Demo Site"
                                            data-description="2 widgets ($20.00)"
                                            data-image="http://www.sunspel.com/media/catalog/product/cache/3/image/9df78eab33525d08d6e5fb8d27136e95/4/0/4001_102_5.jpg"
                                            data-locale="auto">
                                    </script>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <h4>Go Pro Hero</h4>
                                <img class="img-responsive product-img" src="https://shop.gopro.com/on/demandware.static/-/Sites-gopro-products/default/dwc295831c/cam-represent/cam-represent-HERO4-black.jpg" />
                                <form action="" method="POST" style="margin-top:10px;">
                                    <script
                                            src="https://checkout.stripe.com/checkout.js" class="stripe-button"
                                            data-key="pk_test_Yj9qR1C6bIxj2f2XnTZvevPl"
                                            data-amount="2000"
                                            data-name="Demo Site"
                                            data-description="2 widgets ($20.00)"
                                            data-image="https://shop.gopro.com/on/demandware.static/-/Sites-gopro-products/default/dwc295831c/cam-represent/cam-represent-HERO4-black.jpg"
                                            data-locale="auto">
                                    </script>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <h4>Go Pro Hero Pack</h4>
                                <img class="img-responsive product-img" src="http://pinoytutorial.com/techtorial/wp-content/uploads/2011/10/GoPro-HD-camera-pack-1.jpg" />
                                <form action="" method="POST" style="margin-top:10px;">
                                    <script
                                            src="https://checkout.stripe.com/checkout.js" class="stripe-button"
                                            data-key="pk_test_Yj9qR1C6bIxj2f2XnTZvevPl"
                                            data-amount="2000"
                                            data-name="Demo Site"
                                            data-description="2 widgets ($20.00)"
                                            data-image="http://pinoytutorial.com/techtorial/wp-content/uploads/2011/10/GoPro-HD-camera-pack-1.jpg"
                                            data-locale="auto">
                                    </script>
                                </form>
                            </div>
                        </div>
                    </div>                </div>
             </div>
        </div>

@endsection