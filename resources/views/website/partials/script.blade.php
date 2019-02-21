<!-- JS 
 ===============================================-->
<!-- jquery js -->
<script src="web/js/vendor/jquery-1.11.3.min.js"></script>
<!-- fancybox js -->
<script src="web/js/jquery.fancybox.js"></script>
<!-- bxslider js -->
<script src="web/js/jquery.bxslider.min.js"></script>
<!-- meanmenu js -->
<script src="web/js/jquery.meanmenu.js"></script>
<!-- owl carousel js -->
<script src="web/js/owl.carousel.min.js"></script>
<!-- nivo slider js -->
<script src="web/js/jquery.nivo.slider.js"></script>
<!-- jqueryui js -->
<script src="web/js/jqueryui.js"></script>
<!-- bootstrap js -->
<script src="web/js/bootstrap.min.js"></script>
<!-- wow js -->
<script src="web/js/wow.js"></script>
<script>
    new WOW().init();
</script>
<!-- main js -->
<script src="web/js/main.js"></script>
<script src="admin/lib/jquery/jquery.min.js"></script>
<script src="admin/lib/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="admin/lib/jquery.backstretch.min.js"></script>
<script>
    var login = document.getElementById('login-page');
    var body = document.getElementById('body');
    function show(){
        login.classList.add('show');
        body.style.overflow="hidden";
    }
    function hidden_login(){
        login.classList.remove('show');
        body.style.overflow="visible";
    }
    setTimeout(function(){
        document.getElementById('popup').style.display="none";
    },5000);
    
    //login
    $(document).ready(function(){
        $('#login').click(function(){
            var email = $("input[name=email]").val();
            var password = $("input[name=password]").val();
            var _token = $('input[name="_token"]').val();
            $.ajax({
                type: 'POST',
                url: "{{ route('web.post.login') }}",
                data:{email:email,password:password,_token:_token},
                success:function(data){
                    $('#error_acc').html(data);
                },
            });      
        }); 
    });

    //add cart
    $(document).ready(function(){
        $('.add_cart').click(function(event){
            event.preventDefault();
            var id = $(this).data('id');
            var url = "{{route('web.cart.add')}}";
            var _token = $('input[name="_token"]').val();
            $.ajax({
                url: url,
                method: "post",
                dataType: 'json',
                data: {id:id, _token:_token},
                success: function(data){
                    //console.log(data);
                    var html="";
                    var total= 0;
                    var total_price=0;
                    $.each(data,function(index, value){
                        console.log(value.price);
                        total+=value.qty;
                        total_price+=value.price;
                        html+='<div class="shipping-item"><span class="cross-icon"><a href="" class="delete_cart" data-deltete="'+value.item.id+'"><i class="fa fa-times-circle"></i></a></span>';
						html+='<div class="shipping-item-image"><a href="#"><img style="width:40px;" src="storage/'+value.item.image+'" alt="shopping image" /></a></div>';
						html+='<div class="shipping-item-text"><span>'+value.qty+'<span class="pro-quan-x">x</span>';
						html+='<a href="#" style="text-transform: lowercase;" title="" class="pro-cat">'+value.item.name+'</a></span>';
                        html+='<p>'+value.price+'<sup>đ</sup></p></div></div>';
                    });
                    console.log(total_price);
                    $('.list_prodcut_cart').html(html);
                    $('.ajax-cart-quantity').html(total);
                    $('#total_price').html(total_price.toLocaleString('de-DE'));
                    
                },
            });
        });
    });

    //delete cart
    $('.delete_cart').click(function(event){
        event.preventDefault();
        var id = $(this).data('delete');
       // alert(id);
        var url = "{{route('web.cart.delete')}}";
        var _token = $('input[name="_token"]').val();
        $.ajax({
            url: url,
            method: "post",
            data: {id:id, _token:_token},
            success: function(data){
                console.log(data);
                alert(data);
            },
        });
    });
</script>
@if (session('error'))
    <script>
        show();
    </script>
@endif