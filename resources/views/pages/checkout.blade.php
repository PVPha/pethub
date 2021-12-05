@extends('layouts.main')
@section('content')
    <div class="page-head">
        <div class="container">
            <h3>Đặt hàng</h3>
        </div>
    </div>
    <!-- //banner -->
    <!-- check out -->
    <div class="checkout">
        <div class="container">
            <h3>Giỏ hàng</h3>
            <div class="table-responsive checkout-right animated wow slideInUp" data-wow-delay=".5s">
                <table class='timetable_sub'>
                    <thead>
                        <tr>
                            <th>Xóa</th>
                            <th>Sản phẩm</th>
                            <th>Số lương</th>
                            <th>Tên sản phẩm</th>
                            <th>giá</th>
                        </tr>
                    </thead>
                    <div id="here"></div>
                    <tr class="loop">
                        <td class="invert-closeb">
                            <div class="rem">
                                <div class="close1"> </div>
                            </div>
                            {{-- <script>
                                document.querySelector('.close1').click(() => {
                                    console.log('run');
                                })
                                $(document).ready(function(c) {
                                    $('.close1').on('click', function(c) {
                                        console.log('run');
                                        $('.loop').fadeOut('slow', function(c) {
                                            $('.loop').remove();
                                        });
                                    });
                                });
                            </script> --}}
                        </td>
                        <td class="invert-image"><a href="single.html"><img
                                    style="height: 10rem;
                                                                                                                                                                                                                                                                                                                                                                                                    width: 10rem;"
                                    src="images/" alt=" " class="img-responsive" /></a>
                        </td>
                        <td class="invert">
                            <div class="quantity">
                                <div class="quantity-select">
                                    <div class="entry value-minus">&nbsp;</div>
                                    <div class="entry value"><span>1</span></div>
                                    <div class="entry value-plus active">&nbsp;</div>
                                </div>
                            </div>
                        </td>
                        <td class="invert">name</td>
                        <td class="invert">price</td>

                    </tr>
                    {{-- <tr class="rem3">
                        <td class="invert-closeb">
                            <div class="rem">
                                <div class="close3"> </div>
                            </div>
                            <script>
                                $(document).ready(function(c) {
                                    $('.close3').on('click', function(c) {
                                        $('.rem3').fadeOut('slow', function(c) {
                                            $('.rem3').remove();
                                        });
                                    });
                                });
                            </script>
                        </td>
                        <td class="invert-image"><a href="single.html"><img src="images/w2.png" alt=" "
                                    class="img-responsive" /></a></td>
                        <td class="invert">
                            <div class="quantity">
                                <div class="quantity-select">
                                    <div class="entry value-minus">&nbsp;</div>
                                    <div class="entry value"><span>1</span></div>
                                    <div class="entry value-plus active">&nbsp;</div>
                                </div>
                            </div>
                        </td>
                        <td class="invert">Sandals</td>
                        <td class="invert">$45.99</td>

                    </tr>
                    <tr class="rem4">
                        <td class="invert-closeb">
                            <div class="rem">
                                <div class="close4"> </div>
                            </div>
                            <script>
                                $(document).ready(function(c) {
                                    $('.close4').on('click', function(c) {
                                        $('.rem4').fadeOut('slow', function(c) {
                                            $('.rem4').remove();
                                        });
                                    });
                                });
                            </script>
                        </td>
                        <td class="invert-image"><a href="single.html"><img src="images/w1.png" alt=" "
                                    class="img-responsive" /></a></td>
                        <td class="invert">
                            <div class="quantity">
                                <div class="quantity-select">
                                    <div class="entry value-minus">&nbsp;</div>
                                    <div class="entry value"><span>1</span></div>
                                    <div class="entry value-plus active">&nbsp;</div>
                                </div>
                            </div>
                        </td>
                        <td class="invert">Wedges</td>
                        <td class="invert">$45.99</td>

                    </tr> --}}

                    <script>
                        (() => {
                            var test = 'test work';
                            let checkout = JSON.parse(window.sessionStorage.getItem('checkout'));
                            console.log(checkout);
                            // document.querySelector('.rem2').outerHTML.replaceAll('rem2', 'test')
                            let i = 1;
                            let html = '';
                            for (i = 0; i < checkout.length; i++) {
                                console.log(checkout[i][1]);
                                // document.querySelector('tbody').innerHTML = document.querySelector('.rem' + i).outerHTML.replaceAll(
                                //     'rem' + i,
                                //     'rem' + i++)
                                let phase1 = document.querySelector('.loop').outerHTML.replaceAll(
                                    'loop',
                                    'rem' + (i + 1));
                                let phase2 = phase1.replaceAll('close1', 'close' + (i + 1));
                                let phase3 = phase2.replaceAll('images/', checkout[i][1])
                                let phase4 = phase3.replaceAll('name', checkout[i][0]);
                                let phase5 = phase4.replaceAll('price', checkout[i][2]);
                                html += phase5;
                                // console.log(document.querySelector('.loop').outerHTML.replaceAll(
                                //     'loop',
                                //     'rem' + (i + 1)));
                            }
                            document.querySelector('tbody').innerHTML = html;
                            console.log(html);
                        })()
                    </script>
                    <!--quantity-->
                    <script>
                        $(document).click(function(event) {
                            var text = $(event.target);
                            text = text.context.className;
                            if (text.substring(0, 5) == 'close') {
                                console.log("'." + text + "'");
                                let position = text.substring(5);
                                $('.' + text).on('click', function(c) {
                                    let checkout = JSON.parse(window.sessionStorage.getItem('checkout'));
                                    checkout.splice((position - 1), 1);
                                    let value = JSON.stringify(checkout)
                                    window.sessionStorage.setItem('checkout', value);
                                    console.log(JSON.parse(window.sessionStorage.getItem('checkout')));
                                    $('.rem' + position).fadeOut('slow', function(c) {
                                        $('.rem' + position).remove();
                                    });
                                });
                            }
                        });
                        $('.value-plus').on('click', function() {
                            var divUpd = $(this).parent().find('.value'),
                                newVal = parseInt(divUpd.text(), 10) + 1;
                            divUpd.text(newVal);
                        });

                        $('.value-minus').on('click', function() {
                            var divUpd = $(this).parent().find('.value'),
                                newVal = parseInt(divUpd.text(), 10) - 1;
                            if (newVal >= 1) divUpd.text(newVal);
                        });
                    </script>
                    <!--quantity-->
                </table>
            </div>
            <div class="checkout-left">

                <div class="checkout-right-basket animated wow slideInRight" data-wow-delay=".5s">
                    <a href="/"><span class="glyphicon glyphicon-menu-left" aria-hidden="true"></span>Tiếp tục mua
                        hàng</a>
                </div>
                <div class="checkout-left-basket animated wow slideInLeft" data-wow-delay=".5s"
                    style="width: 30rem; border:none">
                    <h4>Đặt hàng</h4>
                    <div>
                        <form class="form">
                            <div class="form-group">
                                <label for="name">Tên: </label>
                                <input type="text" name="name" id="" class="form-control" placeholder=""
                                    aria-describedby="helpId">
                            </div>
                            <div class="form-group">
                                <label for="email">Email: </label>
                                <input type="text" name="email" id="" class="form-control" placeholder=""
                                    aria-describedby="helpId">
                            </div>
                            <div class="form-group">
                                <label for="phone">SĐT: </label>
                                <input type="text" name="phone" id="" class="form-control" placeholder=""
                                    aria-describedby="helpId">
                            </div>
                            <button type="submit" class="btn btn-success" style="    background-color: #0ea6b5;
                                                    border-color: #0ea6b5;">Đặt hàng</button>
                        </form>
                    </div>

                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
@endsection
