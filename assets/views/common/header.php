<header>
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">

            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/"><span style="color: #ffffff; font-size: 28px; font-weight: bolder">Hackazon Webscantest</span></a>
                <?php include($common_path."sidebar.php") ?>
            </div>

            <?php include($common_path."search.php") ?>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="/about">About Us</a>
                    </li>
                    <li><a href="/contact">Contact Us</a>
                    </li>
                    <?php if (!is_null($this->pixie->auth->user())): ?>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Your account <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="portfolio-1-col.html">1 Column Portfolio</a>
                            </li>
                            <li><a href="portfolio-2-col.html">2 Column Portfolio</a>
                            </li>
                            <li><a href="portfolio-3-col.html">3 Column Portfolio</a>
                            </li>
                            <li><a href="portfolio-4-col.html">4 Column Portfolio</a>
                            </li>
                            <li><a href="portfolio-item.html">Single Portfolio Item</a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Wish List <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="full-width.html">Full Width Page</a>
                            </li>
                            <li><a href="sidebar.html">Sidebar Page</a>
                            </li>
                            <li><a href="/faq">FAQ</a>
                            </li>
                            <li><a href="404.html">404</a>
                            </li>
                            <li><a href="pricing.html">Pricing Table</a>
                            </li>
                        </ul>
                    </li>
                    <li><a href="/blog">Curt</a>
                    <?php endif ?>
                </ul>

            </div>
            <!-- /.navbar-collapse -->
            <div id="logincontrol">
                <div id="loginuser">
                    <?php if (!is_null($this->pixie->auth->user())): ?>
                        <a href="/user/logout" class="login-window" style="color:white">Logout</a>
                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAIAAAHDVQljAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAA7NJREFUeNpiXHHi/o/ffxnAgAnI+vvvv5mSMJDBBBT4/fcfRIZFgItNTYIXyLJTFwMIIMYFh+8wwABID1CDGB8HVA8Q3H/9BUgyXn/2/v9/EP/7778AAQTSAzHdUVMcKHTu4bsvP/6A9EO0cLExQxi6MgJQgyHU119Qx1189B7CYLz5/APQHAYMABBAKO6CAxaI95w0xf/8+8/CxLjv+kuE6X/BDvwDM40JTS/E+VDRe6++AklmJkZGRpgoUF5WmBPIABoAMQSL44B2MmG6F6gcIICgYQIXAioCBqOsMNev3/8uP/kAtAnFGGQOGwuTpYoIxHkMHAzAMH3x8cetF58Q0YJi19//UEfjACiqf//79/vPP0SoMjK8+vQDp2pmRsYjt17D3fr47bf3336huxvoM252Fn1ZQS52ZiAbHhoyQlxA7wKNuPv6y91XX0Bhe+v5hz/YIhcrAAgg7DGOFXCwMrMgBzbYZ4wqYjy8nKwP33wFehFfeIvwsuvICPwDO0xbmh+YSPddf8GEFKZMyGlGXYLvH5IfgOb+/487vP8zoHv3P87YYWT4hRQ1EKWMuFT///+fnZUZWQ7oKGDKwa4a6JvbLz4jJxNg7v+NahuK1mcfvrMgBdm1px+ZUEMQPZ28/vITymZifPf1J840+AeUWpgFudjg2cJGTQwoiByILP/BEspiPMqiPMBcjCLHxOiqLfHt598Lj99/+wkqZBjP3n/Dy8GCP2EBvQ4Mg+vPPrFwsjETTINAC4HWaknxMTEQDYBGAgRotcpyGoaBaLxlaVrSQgCpSCyH4Lochj8ugJBAiB9AVC2kVbpkdZ8TBFVSW61UK/KP7fF43jIhd/fPDQjbm0AeqSqmcqqJ1OBmewBWTvUaR6mGA+869Ds2J9Udsqo4ZhjHZ7T8nqe6KxCWG5K9vTkJOmJT1Ypo1Xzac4Z992WktM014beXDwXwBINblFIaEOCU7upqm89BP1qkBbFMNV2k+d6hkaxv867DpT7rQlpXIcyQ6rbos05z1WL1TABJkqyAanU8oAYYYeJv4zlnW44Cusf36OF1YiCYCQfGyCROslyS1puiZTaaJYLtD+NvxUsZeAJZyxYSfU9cDLy8MGmNN84of2Qk7DrngXfUEYLSrT8auTKe3mXozxbZ13Q5jpO0kLSyj//QNXOPffsscMOuC92VpfVHZwOvsQSzHPg2PkQExdNcjuPVaLqCSrFKnj5+0LuKndvkLgPkAWvpwePW5oOwnCmxltahB8KuAf+pyQJVxN7hAAAAAElFTkSuQmCC" id="loginusericon" class="userpic small">
                    <?php else: ?>
                        <a href="#login-box" class="login-window" style="color:white">Login / Sign In</a>
                    <?php endif ?>
                </div>
            </div>

        </div>
        <!-- /.container -->
    </nav>
</header>