    <!-- Header -->
	<header class="header1">
		<!-- Header desktop -->
		<!-- login -->
		<div id="1" class="login">
			<div class="panda">
			<div class="ear"></div>
			<div class="face">
				<div class="eye-shade"></div>
				<div class="eye-white">
				<div class="eye-ball"></div>
				</div>
				<div class="eye-shade rgt"></div>
				<div class="eye-white rgt">
				<div class="eye-ball"></div>
				</div>
				<div class="nose"></div>
				<div class="mouth"></div>
			</div>
			<div class="body"> </div>

			<div class="toggle">
				<div class="foot">
					<div class="finger"><button class="btn-1">Đăng nhập </button></div>
				</div>
				<div class="foot rgt">
					<div class="finger"><button id="3" class="btn-2">Đăng Ký </button></div>
				</div>
			</div>
			</div>

			<form class="Dangnhap form-footer">
			<div class="hand"></div>
			<div class="hand rgt"></div>
			<h1 class="font-text">Đăng nhập</h1>
			<div class="form-group">
				<input required="required" class="form-control"/>
				<label class="form-label">Username    </label>
			</div>
			<div class="form-group">
				<input id="password" type="password" required="required" class="form-control"/>
				<label class="form-label">Password</label>
				<p class="alert">Invalid Credentials..!!</p>
				
			</div>
		</div>
		<div id="2" class="login">
			<div class="panda">
			<div class="ear"></div>
			<div class="face">
				<div class="eye-shade"></div>
				<div class="eye-white">
					<div class="eye-ball"></div>
				</div>
				<div class="eye-shade rgt"></div>
				<div class="eye-white rgt">
					<div class="eye-ball"></div>
				</div>
				<div class="nose"></div>
				<div class="mouth"></div>
			</div>
			<div class="body"> </div>

			<div class="toggle">
				<div class="foot pad-top">
					<div class="finger"><button id="4" class="btn-1">Đăng nhập </button></div>
				</div>
				<div class="foot rgt pad-top">
					<div class="finger"><button class="btn-2">Đăng Ký </button></div>
				</div>
			</div>
			</div>
			</form>
			<!-- đăng kỳ -->
			<form class="DangKy form-footer">
			<div class="hand"></div>
			<div class="hand rgt"></div>
			<h1 class="font-text">Đăng ký</h1>
				<div class="form-group">
				<input required="required" class="form-control"/>
				<label class="form-label">Username    </label>
				</div>
				<div class="form-group">
				<input id="password" type="password" required="required" class="form-control"/>
				<label class="form-label">Password</label>
				<p class="alert">Invalid Credentials..!!</p>
				</div>
				<div class="form-group">
				<input id="email" type="email" required="required" class="form-control"/>
				<label class="form-label">email</label>
				</div>
			</form>
		</div>
		<!--  -->
		<div class="container-menu-header">
			<div class="wrap_header">
				<!-- Logo -->
				<a href="{{ route('guest.home')}}" class="logo">
					<img src="images/icons/logo.png" alt="IMG-LOGO">
				</a>

				<!-- Menu -->
				<div class="wrap_menu">
					<nav class="menu">
						<ul class="main_menu">
							<li>
								<a href="{{ route('guest.home')}}">Home</a>
							</li>

							<li>
								<a href="">Categories</a>
								
								<ul class="sub_menu">
									@foreach($categories as $category)
									<li>
										<a href="#">
										{{$category->name}}
										</a>
									</li>@endforeach
									
								</ul>
							</li>

							<li>
								<a href="{{ route('guest.product')}}">Shop</a>
							</li>

							<li>
								<a href="{{ route('guest.blog')}}">Blog</a>
							</li>

							<li>
								<a href="{{ route('guest.about')}}">About</a>
							</li>

							<li>
								<a href="{{ route('guest.contact')}}">Contact</a>
							</li>
						</ul>
					</nav>
				</div>

				<!-- Header Icon -->
				<div class="header-icons">
					
					<!-- <div id="01" class="header-wrapicon1 dis-block">
						<img src="images/icons/icon-header-01.png" class="header-icon1" alt="ICON">
					</div> -->
					<button onclick="document.getElementById('1').style.display='block'" class="header-wrapicon1 dis-block btn-login">Đăng nhập </button>
					<span class="linedivide1"></span>
					<button onclick="document.getElementById('2').style.display='block'" class="header-wrapicon1 dis-block btn-logup">Đăng ký </button>
					<span class="linedivide1"></span>

					<div class="header-wrapicon2">
						
						<a href="{{ route('guest.cart')}}">
								<i class="fas fa-cart-plus cart-font"></i>
						</a> 
						
					</div>
				</div>
			</div>
		</div>

		<!-- Header Mobile -->
		<div class="wrap_header_mobile">
			<!-- Logo moblie -->
			<a href="{{ route('guest.home')}}" class="logo-mobile">
				<img src="images/icons/logo.png" alt="IMG-LOGO">
			</a>

			<!-- Button show menu -->
			<div class="btn-show-menu">
				<!-- Header Icon mobile -->
				<div class="header-icons-mobile">
					<a href="#" class="header-wrapicon1 dis-block">
						<img src="images/icons/icon-header-01.png" class="header-icon1" alt="ICON">
					</a>

					<span class="linedivide2"></span>

					<div class="header-wrapicon2">
						<img src="images/icons/icon-header-02.png" class="header-icon1 js-show-header-dropdown" alt="ICON">
						<span class="header-icons-noti">0</span>

						<!-- Header cart noti -->
						<div class="header-cart header-dropdown">
							<ul class="header-cart-wrapitem">
								<li class="header-cart-item">
									<div class="header-cart-item-img">
										<img src="images/item-cart-01.jpg" alt="IMG">
									</div>

									<div class="header-cart-item-txt">
										<a href="#" class="header-cart-item-name">
											White Shirt With Pleat Detail Back
										</a>

										<span class="header-cart-item-info">
											1 x $19.00
										</span>
									</div>
								</li>

								<li class="header-cart-item">
									<div class="header-cart-item-img">
										<img src="images/item-cart-02.jpg" alt="IMG">
									</div>

									<div class="header-cart-item-txt">
										<a href="#" class="header-cart-item-name">
											Converse All Star Hi Black Canvas
										</a>

										<span class="header-cart-item-info">
											1 x $39.00
										</span>
									</div>
								</li>

								<li class="header-cart-item">
									<div class="header-cart-item-img">
										<img src="images/item-cart-03.jpg" alt="IMG">
									</div>

									<div class="header-cart-item-txt">
										<a href="#" class="header-cart-item-name">
											Nixon Porter Leather Watch In Tan
										</a>

										<span class="header-cart-item-info">
											1 x $17.00
										</span>
									</div>
								</li>
							</ul>

							<div class="header-cart-total">
								Total: $75.00
							</div>

							<div class="header-cart-buttons">
								<div class="header-cart-wrapbtn">
									<!-- Button -->
									<a href="{{ route('guest.cart')}}" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
										View Cart
									</a>
								</div>

								<div class="header-cart-wrapbtn">
									<!-- Button -->
									<a href="#" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
										Check Out
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="btn-show-menu-mobile hamburger hamburger--squeeze">
					<span class="hamburger-box">
						<span class="hamburger-inner"></span>
					</span>
				</div>
			</div>
		</div>

		<!-- Menu Mobile -->
		<div class="wrap-side-menu" >
			<nav class="side-menu">
				<ul class="main-menu">
					<li class="item-topbar-mobile p-l-20 p-t-8 p-b-8">
						<span class="topbar-child1">
							Free shipping for standard order over $100
						</span>
					</li>

					<li class="item-topbar-mobile p-l-20 p-t-8 p-b-8">
						<div class="topbar-child2-mobile">
							<span class="topbar-email">
								fashe@example.com
							</span>

							<div class="topbar-language rs1-select2">
								<select class="selection-1" name="time">
									<option>USD</option>
									<option>EUR</option>
								</select>
							</div>
						</div>
					</li>

					<li class="item-topbar-mobile p-l-10">
						<div class="topbar-social-mobile">
							<a href="#" class="topbar-social-item fa fa-facebook"></a>
							<a href="#" class="topbar-social-item fa fa-instagram"></a>
							<a href="#" class="topbar-social-item fa fa-pinterest-p"></a>
							<a href="#" class="topbar-social-item fa fa-snapchat-ghost"></a>
							<a href="#" class="topbar-social-item fa fa-youtube-play"></a>
						</div>
					</li>

					<li class="item-menu-mobile">
						<a href="{{ route('guest.home')}}">Home</a>
						
						<i class="arrow-main-menu fa fa-angle-right" aria-hidden="true"></i>
					</li>

					<li class="item-menu-mobile">
						<a href="{{ route('guest.product')}}">Shop</a>
					</li>
					<li class="item-menu-mobile">
						<a href="{{ route('guest.cart')}}">Features</a>
					</li>

					<li class="item-menu-mobile">
						<a href="{{ route('guest.blog')}}">Blog</a>
					</li>

					<li class="item-menu-mobile">
						<a href="{{ route('guest.about')}}">About</a>
					</li>

					<li class="item-menu-mobile">
						<a href="{{ route('guest.contact')}}">Contact</a>
					</li>
				</ul>
			</nav>
		</div>
	</header>