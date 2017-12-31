		<div id="header" class="container">
			<div id="logo">
				<h1><a href="#">علی رنجبران</a></h1>
			</div>
			<div id="menu">
				<ul>
                                    <li calss="login" ><a  calss="login"  href="#">
                                    <?php 
                                    if( isset($_SESSION['login'])){
                                    echo $_SESSION['login']."کاربر";
                                    }?>
                                </a></li>
                                    	<li><a href="login.php">ورود</a></li>
					<li><a href="contentUs.php">تماس با ما</a></li>
					<li><a href="aboutUs.php">درباره ما</a></li>
					<li><a href="#">محصولات</a></li>
					<li class="current_page_item"><a href="index.php">صفحه اصلی</a></li>
				</ul>
			</div>
		</div>