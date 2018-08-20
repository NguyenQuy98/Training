<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge"> 
	<link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900|RobotoDraft:400,100,300,500,700,900'>
    <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/style-login.css') }}">   
	<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="{{ URL::asset('vendor/bootstrap/css/bootstrap.min.css') }}">
    <!--===============================================================================================-->
		<!-- <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/font-awesome.min.css') }}"> -->
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/themify-icons.css') }}">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/icon-font.min.css')}}">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/style.css') }}">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="{{ URL::asset('vendor/animate/animate.css') }}">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="{{ URL::asset('vendor/css-hamburgers/hamburgers.min.css') }}">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="{{ URL::asset('vendor/animsition/css/animsition.min.css') }}">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="{{ URL::asset('vendor/select2/select2.min.css') }}">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="{{ URL::asset('vendor/daterangepicker/daterangepicker.css') }}">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="{{ URL::asset('vendor/slick/slick.css') }}">
    <!--===============================================================================================-->
        <!-- <link rel="stylesheet" type="text/css" href="{{ URL::asset('vendor/lightbox2/css/lightbox.min.css') }}"> -->
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/util.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/main.css') }}">
    <!--===============================================================================================-->

    <title>Nguyen Van Quy</title>
</head>
<body>
    @include('share.main-header')

    @yield('content')

	@include('share.main-footer')
	
	<!--===============================================================================================-->
<script type="text/javascript" src="{{ URL::asset('vendor/jquery/jquery-3.2.1.min.js') }}"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="{{ URL::asset('vendor/animsition/js/animsition.min.js') }}"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="{{ URL::asset('vendor/bootstrap/js/popper.js') }}"></script>
	<script type="text/javascript" src="{{ URL::asset('vendor/bootstrap/js/bootstrap.min.js') }}"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="{{ URL::asset('vendor/select2/select2.min.js') }}"></script>
	<script type="text/javascript">
		$(".selection-1").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect1')
		});
	</script>
<!--===============================================================================================-->
	<script type="text/javascript" src="{{ URL::asset('vendor/slick/slick.min.js') }}"></script>
	<script type="text/javascript" src="js/slick-custom.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="{{ URL::asset('vendor/countdowntime/countdowntime.js') }}"></script>
<!--===============================================================================================-->
	<!-- <script type="text/javascript" src="{{ URL::asset('vendor/lightbox2/js/lightbox.min.js') }}"></script> -->
<!--===============================================================================================-->
	<script type="text/javascript" src="{{ URL::asset('vendor/sweetalert/sweetalert.min.js') }}"></script>
	<script type="text/javascript">
		$('.block2-btn-addcart').each(function(){
			var nameProduct = $(this).parent().parent().parent().find('.block2-name').html();
			$(this).on('click', function(){
				swal(nameProduct, "Đã thêm vào giỏ hàn thành công !", "success");
			});
		});

		$('.block2-btn-addwishlist').each(function(){
			var nameProduct = $(this).parent().parent().parent().find('.block2-price').html();
			$(this).on('click', function(){
				swal(nameProduct, "Thêm sản phẩm vào ưa thích !", "info");
			});
		});
		$('document').ready(function(){
    
			var modal1 = document.getElementById('1');
			var modal2 = document.getElementById('2');
			var modal3 = document.getElementById('3');
			var modal4 = document.getElementById('4');
			
			//When the user clicks anywhere outside of the modal, close it
			window.onclick = function(event) {
				if (event.target == modal1 ) {
					modal1.style.display = "none";
				}
				if (event.target == modal2) {
					modal2.style.display = "none";
				}
				if (event.target == modal3 ) {
					modal1.style.display = "none";
					modal2.style.display = "block";
				}
				if (event.target == modal4) {
					modal1.style.display = "block";
					modal2.style.display = "none";
				}
			}
		});
		$('.header-wrapicon1').click(function(){
			$('body').addClass('body-overflow-y');
		});
		$('.login').click(function(){
			$('body').removeClass('body-overflow-y');
		});
	</script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

  

<script  src="js/index.js"></script>
<!--===============================================================================================-->
<script src="js/main.js"></script>


</body>
</html>