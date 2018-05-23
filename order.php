<?php include "common/header.php";?>
		<!-- Main -->
			<section id="main" class="wrapper">
				<div class="inner">
					<header class="align-center">
						<h1>通过3个简单的步骤获取您的物品</h1>
					</header>
                    <div class="align-center">
                        <div class="tabs">
                            <ul class="tab-links">
                                <li class="active"><a href="#tab1"><input type="button" value="告诉我们您的物品"></a></li>
                                <li><a href="#tab2"><input type="button" value="告诉我们它在哪里"></a></li>
                                <li><a href="#tab3"><input type="button" value="结帐和交付"></a></li>
                        </ul>
                    <div class="tab-content">
                        <div id="tab1" class="tab active">
                            <h3>告诉我们您的物品</h3>
                            <p>如果您的商品在线可用，请粘贴下面的购买链接。</p>
                            <form method="post" action="#">
                                <div class="row uniform">
                                    <div class="6u 12u$(xsmall)">
                                        <input type="text" name="name" id="name" value="" placeholder="Paste a&nbsp;link">
                                    </div>
                                    <div class="6u$ 12u$(xsmall)">
                                        <input type="button" value="创建">
                                    </div>
                                </div>
                            </form>
                            <div class="tabs">
                                <ul class="tab-links">
                                    <li class="12u$"><a style="margin: auto;background-color: #FFF;border-color:none;" href="#tab4"><input style="margin:auto;background-color: #7FB5DA;border-color:none;text-decoration-color: #7FB5DA" type="button" value="手动添加细节"></a></li>

                                </ul>
                            </div>

                        </div>
                        <div id="tab2" class="tab">
                            <p>Tab #2 content goes here!</p>
                            <p>Donec pulvinar neque sed semper lacinia. Curabitur lacinia ullamcorper nibh; quis imperdiet velit eleifend ac. Donec blandit mauris eget aliquet lacinia! Donec pulvinar massa interdum risus ornare mollis. In hac habitasse platea dictumst. Ut euismod tempus hendrerit. Morbi ut adipiscing nisi. Etiam rutrum sodales gravida! Aliquam tellus orci, iaculis vel.</p>
                        </div>
                        <div id="tab3" class="tab">
                            <p>Tab #3 content goes here!</p>
                            <p>Donec pulvinar neque sed semper lacinia. Curabitur lacinia ullamcorper nibh; quis imperdiet velit eleifend ac. Donec blandit mauris eget aliquet lacinia! Donec pulvinar massa interdum ri.</p>
                        </div>
                        <div id="tab4" class="tab">
                            <h3>告诉我们您的物品</h3>

                                <button class="button special fit">上传图片</button>
                                <br/>
                                <label class="label">项目名</label>
                                <input type="text" placeholder="输入项目名称">
                                <br/>
                                <label>描述</label>
                                <input type="text" placeholder="描述你的物品（例如颜色，尺寸）">
                                <br/>
                                <label>商品网址</label>
                                <input type="text" placeholder="网站链接到该项目（可选">
                                <br/>
                                <label>项目价格</label>
                                <input type="text" placeholder="输入项目价格">
                                <br/>
                                <script>
                                    function setQuantity(upordown) {
                                        var quantity = document.getElementById('quantity');

                                        if (quantity.value > 1) {
                                            if (upordown == 'up'){++document.getElementById('quantity').value;}
                                            else if (upordown == 'down'){--document.getElementById('quantity').value;}}
                                        else if (quantity.value == 1) {
                                            if (upordown == 'up'){++document.getElementById('quantity').value;}}
                                        else
                                        {document.getElementById('quantity').value=1;}
                                    }
                                </script>
                                <div  >
                                    <label>数量：</label>
                                    <span class="row uniform"  id="quantity-field" >
                                        <<div  class="4u 12u$(xsmall)">
                                        <button  id="down" onclick="setQuantity('down');">-</button>
                                        </div>
                                        <div class="4u 12u$(xsmall)">
                                        <input  type="text" id="quantity" value="1">
                                        </div>
                                        <div class="4u 12u$(xsmall)">
                                        <button  id="up" onclick="setQuantity('up');">+</button>
                                        </div>
                                    </span>
                                </div>
                            <br/>
                             <button id="Next" >下一个</button>
                        </div>
                    </div>
                        </div>
                    </div>
                </div>


			</section>
    <div class="popup-overlay" >

    <div  class="popup-content">
        <div class="px20 py30"><div class="w100p" style="opacity: 1;">
                <h2 class="fz-l SM_fz-xl ta-c">
                    <span><span>Sign Up</span></span>
                </h2><button class="button pos-r d-ib va-t btn btn--fb fxs0 px30 mt30 h50 bdr5 w100p">
                    <div class="button__content"><span><span>Connect with Facebook</span></span>
                    </div>
                </button><div class="pt20 fz-s c-g44 ta-c w100p tt-u">
                    <span><span>Or&nbsp;sign up&nbsp;with email</span></span>
                </div><form class="mt10 ta-l">
                    <input type="email" autocomplete="on" autocorrect="off" autocapitalize="off" class="input input--g my10 bdr5" placeholder="Email" value="">
                    <br/>
                    <input type="password" autocomplete="on" class="input input--g my10 bdr5" placeholder="Password" value="">
                    <br/>
                    <input type="text" autocomplete="on" autocorrect="off" class="input input--g my10 bdr5" placeholder="First name" value="">
                    <br/>
                    <input type="text" autocomplete="on" autocorrect="off" class="input input--g my10 bdr5" placeholder="Last Name" value="">
                    <br/>
                    <button class="button pos-r d-ib va-t btn btn--bb fxs0 mt20 h50 bdr5 w100p">
                        <div class="button__content">
                            <span><span>Sign Up</span></span></div></button></form>
                <!--div class="markdown pt15 fz-s c-g44 ta-c">
                    <div class="markdown"><p>By&nbsp;using Grabr, I&nbsp;agree to&nbsp;Grabr’s <a href="/terms">Terms of&nbsp;Service</a>
                            and <a href="/privacy">Privacy Policy</a>.</p></div></div><div class="ta-c c-g44 mt20">
                    <span><span>Already registered?</span></span>
                    <a class="link link--bb link--hf" href="/login.php">
                        <span><span>Log in&nbsp;here</span></span></a>
                </div-->
            </div>
        </div>
    </div>
        <!-- Footer -->
<?php include "common/footer.php";?>