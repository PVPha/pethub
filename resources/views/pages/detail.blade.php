@extends('layouts.main')
@section('content')
    <div class="page-head">
        <div class="container">
            {{-- <h3>Single</h3> --}}
        </div>
    </div>
    <!-- //banner -->
    <!-- single -->

    <div class="single">
        <div class="container">
            <div class="col-md-6 single-right-left animated wow slideInUp animated" data-wow-delay=".5s"
                style="visibility: visible; animation-delay: 0.5s; animation-name: slideInUp;">
                <div class="grid images_3_of_2">
                    <div class="flexslider">
                        <!-- FlexSlider -->
                        <script>
                            // Can also be used with $(document).ready()
                            $(window).load(function() {
                                $('.flexslider').flexslider({
                                    animation: "slide",
                                    controlNav: "thumbnails"
                                });
                            });
                        </script>
                        <!-- //FlexSlider-->
                        <ul class="slides">

                            <li style="list-style: none;" data-thumb="images/d2.jpg">
                                <div class="thumb-image"> <img src="{{ url('images') . '/' . $detail[0]->img }}"
                                        style="height: 30rem;width: 30rem;" data-imagezoom="true" class="img-responsive">
                                </div>
                            </li>
                            {{-- <li data-thumb="images/d1.jpg">
							<div class="thumb-image"> <img src="images/d1.jpg" data-imagezoom="true" class="img-responsive"> </div>
						</li>
						<li data-thumb="images/d3.jpg">
							<div class="thumb-image"> <img src="images/d3.jpg" data-imagezoom="true" class="img-responsive"> </div>
						</li>
						<li data-thumb="images/d4.jpg">
							<div class="thumb-image"> <img src="images/d4.jpg" data-imagezoom="true" class="img-responsive"> </div>
						</li> --}}
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 single-right-left simpleCart_shelfItem animated wow slideInRight animated"
                data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: slideInRight;">
                <h3>{{ $detail[0]->name }}</h3>

                <p style="font-size: 1.15rem"><span>Giá: {{ $detail[0]->price }}VNĐ</span></p>
                <p style="font-size: 1.15rem">Giới tính: {{ $detail[0]->sex }}</p>
                <p style="font-size: 1.15rem">Tuổi: {{ $detail[0]->age }}</p>
                <p style="font-size: 1.15rem">Loại: thuần chủng</p>
                {{-- <div class="rating1">
						<span class="starRating">
							<input id="rating5" type="radio" name="rating" value="5">
							<label for="rating5">5</label>
							<input id="rating4" type="radio" name="rating" value="4">
							<label for="rating4">4</label>
							<input id="rating3" type="radio" name="rating" value="3" checked="">
							<label for="rating3">3</label>
							<input id="rating2" type="radio" name="rating" value="2">
							<label for="rating2">2</label>
							<input id="rating1" type="radio" name="rating" value="1">
							<label for="rating1">1</label>
						</span>
					</div> --}}
                <div class="description">
                    <h5>Bạn cần tư vấn thêm vui lòng cho chúng tôi biết thông tin liện hệ của bạn</h5>
                    <input type="text" value="Email" onfocus="this.value = '';"
                        onblur="if (this.value == '') {this.value = 'Email';}" required="">
                    <input type="submit" value="Tư vấn">
                </div>
                {{-- <div class="color-quality">
						<div class="color-quality-right">
							<h5>Quality :</h5>
							<select id="country1" onchange="change_country(this.value)" class="frm-field required sect">
								<option value="null">5 Qty</option>
								<option value="null">6 Qty</option>
								<option value="null">7 Qty</option>
								<option value="null">10 Qty</option>
							</select>
						</div>
					</div>
					<div class="occasional">
						<h5>Types :</h5>
						<div class="colr ert">
							<label class="radio"><input type="radio" name="radio" checked=""><i></i>Casual Shoes</label>
						</div>
						<div class="colr">
							<label class="radio"><input type="radio" name="radio"><i></i>Sports Shoes</label>
						</div>
						<div class="colr">
							<label class="radio"><input type="radio" name="radio"><i></i>Formal Shoes</label>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="occasion-cart">
						<a href="#" class="item_add hvr-outline-out button2">Add to cart</a>
					</div> --}}

            </div>
            <div class="clearfix"> </div>

            <div class="bootstrap-tab animated wow slideInUp animated" data-wow-delay=".5s"
                style="visibility: visible; animation-delay: 0.5s; animation-name: slideInUp;">
                <div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
                    <ul id="myTab" class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#home" id="home-tab" role="tab"
                                data-toggle="tab" aria-controls="home" aria-expanded="true">Địa chỉ mua hàng</a></li>
                        {{-- <li role="presentation"><a href="#profile" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile">Reviews(1)</a></li>
							<li role="presentation" class="dropdown">
								<a href="#" id="myTabDrop1" class="dropdown-toggle" data-toggle="dropdown" aria-controls="myTabDrop1-contents">Information <span class="caret"></span></a>
								<ul class="dropdown-menu" role="menu" aria-labelledby="myTabDrop1" id="myTabDrop1-contents">
									<li><a href="#dropdown1" tabindex="-1" role="tab" id="dropdown1-tab" data-toggle="tab" aria-controls="dropdown1">cleanse</a></li>
									<li><a href="#dropdown2" tabindex="-1" role="tab" id="dropdown2-tab" data-toggle="tab" aria-controls="dropdown2">fanny</a></li>
								</ul>
							</li> --}}
                    </ul>
                    <div id="myTabContent" class="tab-content">
                        <div role="tabpanel" class="tab-pane fade in active bootstrap-tab-text" id="home"
                            aria-labelledby="home-tab">
                            <h5>PetHub tại Thành Phố Hồ Chí Minh</h5>
                            <ul>
                                <li>Địa chỉ: 606/121 đường Ba Tháng Hai, phường 14, quận 10, thành phố Hồ Chí Minh</li>
                                <li>Địa chỉ: 171 Quang Trung, phường 10, quận Gò Vấp, thành phố Hồ Chí Minh.</li>
                                <li>Địa chỉ: 391 Đường Cộng Hoà, phường 13, quận Tân Bình, thành phố Hồ Chí Minh</li>
                            </ul>
                        </div>
                        {{-- <div role="tabpanel" class="tab-pane fade bootstrap-tab-text" id="profile"
                            aria-labelledby="profile-tab">
                            <div class="bootstrap-tab-text-grids">
                                <div class="bootstrap-tab-text-grid">
                                    <div class="bootstrap-tab-text-grid-left">
                                        <img src="images/men3.jpg" alt=" " class="img-responsive">
                                    </div>
                                    <div class="bootstrap-tab-text-grid-right">
                                        <ul>
                                            <li><a href="#">Admin</a></li>
                                            <li><a href="#"><span class="glyphicon glyphicon-share"
                                                        aria-hidden="true"></span>Reply</a></li>
                                        </ul>
                                        <p>Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis
                                            suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem
                                            vel eum iure reprehenderit.</p>
                                    </div>
                                    <div class="clearfix"> </div>
                                </div>

                                <div class="add-review">
                                    <h4>add a review</h4>
                                    <form>
                                        <input type="text" value="Name" onfocus="this.value = '';"
                                            onblur="if (this.value == '') {this.value = 'Name';}" required="">
                                        <input type="email" value="Email" onfocus="this.value = '';"
                                            onblur="if (this.value == '') {this.value = 'Email';}" required="">

                                        <textarea type="text" onfocus="this.value = '';"
                                            onblur="if (this.value == '') {this.value = 'Message...';}"
                                            required="">Message...</textarea>
                                        <input type="submit" value="SEND">
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade bootstrap-tab-text" id="dropdown1"
                            aria-labelledby="dropdown1-tab">
                            <p>Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic
                                lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork
                                tattooed craft beer, iphone skateboard locavore carles etsy salvia banksy hoodie helvetica.
                                DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg banh
                                mi whatever gluten-free, carles pitchfork biodiesel fixie etsy retro mlkshk vice blog.
                                Scenester cred you probably haven't heard of them, vinyl craft beer blog stumptown.
                                Pitchfork sustainable tofu synth chambray yr.</p>
                        </div>
                        <div role="tabpanel" class="tab-pane fade bootstrap-tab-text" id="dropdown2"
                            aria-labelledby="dropdown2-tab">
                            <p>Trust fund seitan letterpress, keytar raw denim keffiyeh etsy art party before they sold out
                                master cleanse gluten-free squid scenester freegan cosby sweater. Fanny pack portland seitan
                                DIY, art party locavore wolf cliche high life echo park Austin. Cred vinyl keffiyeh DIY
                                salvia PBR, banh mi before they sold out farm-to-table VHS viral locavore cosby sweater.
                                Lomo wolf viral, mustache readymade thundercats keffiyeh craft beer marfa ethical. Wolf
                                salvia freegan, sartorial keffiyeh echo park vegan.</p>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
