<nav class="navbar navbar-default navbar-custom">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/" style="font-size: 20px"><strong>ควฝผ-อผม.</strong></a>
        </div>



        <ul class="nav navbar-nav navbar-left">
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><strong>เมนูหลัก </strong><span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="/uploads/Commands/command.pdf" target="_blank"><span class="glyphicon glyphicon-align-justify"></span> คำสั่งแต่งตั้งคณะทำงานและวางแผน</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="/hierarchy"><span class="glyphicon glyphicon-user"></span> โครงสายบังคับบัญชา</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="/uploads/Responsibility/responsibility.pdf" target="_blank"><span class="glyphicon glyphicon-tasks"></span> ภารกิจหน้าที่</a></li>
                    <li role="separator" class="divider"></li>
                    <li class="dropdown-submenu">
                        <a tabindex="-1" href="#"><span class="glyphicon glyphicon-bookmark"></span> ภารกิจหลักและเป้าหมายการดำเนินงาน</a>
                        <ul class="dropdown-menu">
                            <li><a href="/announces"><p>ประกาศนโยบายและแผนการดำเนินงาน</p><p>ของอผม.</p></a></li>
                            <li><a href="/result"><p>ผลความก้าวหน้าของนโยบายและแผน</p><p>การดำเนินงานของ อผม. (ประจำเดือน)</p></a></li>
                        </ul>
                    </li>
                    <li role="separator" class="divider"></li>
                    <li class="dropdown-submenu">
                        <a tabindex="-1" href="#"><span class="glyphicon glyphicon-thumbs-up"></span>  ข้อปฏิบัติการประเมินผลการดำเนินงาน</a>
                        <ul class="dropdown-menu">
                            <li><a href="/performance-agreement"><p>ข้อปฏิบัติการประเมินผลการดำเนินงาน</p><p>ของอผม. (PA อผม.)</p></a></li>
                            <li><a href="/track_pa"><p>ติดตามความก้าวหน้าการประเมินผลการ</p><p>ดำเนินงานของ อผม. เทียบกับเกณฑ์</p></a></li>
                        </ul>
                    </li>
                    <li role="separator" class="divider"></li>
                    <li class="dropdown-submenu">
                        <a tabindex="-1" href="#"><span class="glyphicon glyphicon-calendar"></span> แผนปฏิบัติการ</a>
                        <ul class="dropdown-menu">
                            <li><a href="/plan" target="_blank"><p>แผนปฏิบัติการอผม. (รูปเล่ม)</p></a></li>
                            <li><a href="http://it-fuel.egat.co.th/fuelplan/"><p>รายงานความก้าวหน้าและประเมินผล แผน</p><p>ปฏิบัติการ อผม. (ประจำเดือน)</p></a></li>
                        </ul>
                    </li>
                    <li role="separator" class="divider"></li>
                    <li class="dropdown-submenu">
                        <a tabindex="-1" href="#"><span class="glyphicon glyphicon-stats"></span> การบริหารความเสี่ยงและการควบคุมภายใน</a>
                        <ul class="dropdown-menu">
                            <li><a href="/uploads/Commands/board-command.pdf" target="_blank"><p>คำสั่งคณะกรรมการ</p></a></li>
                            <li><a href="/riskreport/authorize"><p>เอกสารรายงาน</p></a></li>
                            <li><a href="http://intranet.egat.co.th/Risk2548R1/RiskWebPage/RiskWebPageIndex.htm">การบริหารความเสี่ยงและการควบคุมภายในของ
                                    กฟผ.</a></li>
                            <li><a href="http://it-fuel.egat.co.th/index.php/risk-ctrl">การบริหารความเสี่ยงและการควบคุมภายในของ
                                    รวช.</a></li>
                            <li><a href="http://iaudit.egat.co.th/"><p>การบริหารความเสี่ยงและการควบคุมภายในของ</p><p>
                                        สำนักงานตรวจสอบภายใน</p></a></li>
                        </ul>
                    </li>
                    <li role="separator" class="divider"></li>
                    <li><a href="/oprReport"><span class="glyphicon glyphicon-send"></span> รายงานผลการดำเนินงาน อผม. (OPR)</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="/sfu-report"><span class="glyphicon glyphicon-cloud"></span> รายงานการประชุม ควฝผ - อผม.</a></li>
                    <li role="separator" class="divider"></li>
                    <li class="dropdown-submenu">
                        <a tabindex="-1" href="#"><span class="glyphicon glyphicon-calendar"></span> งานอื่นๆที่ได้รับมอบหมาย</a>
                        <ul class="dropdown-menu">
                            <li><a href="/csr-activity" target="_blank"><p>กองจิตอาสา</p></a></li>
                        </ul>
                    </li>
                </ul>
            </li>
        </ul>


        <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
                @if(isset(Auth::user()->email))
                <li> <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <span class="glyphicon glyphicon-user"></span>
                    <i class="icon-user"></i> {{Auth::user()->name}}
                    <span class="caret"></span>
                </a>
                <ul class="dropdown-menu">
                    <li><a href="/admin/management" target="_self"><p>Management</p></a> </li>
                    <li><a href="/logout" target="_self"><p>Log out</p></a></li>
                </ul>
                </li>
                @else
                <li><a href="/admin-login"></span> Admin Sign in</a></li>
                @endif
            </li>
        </ul>
        </li>
    </div>
    <!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>


