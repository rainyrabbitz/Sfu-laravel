<div class="span3 bs-docs-sidebar">
    <ul class="nav nav-list bs-docs-sidenav affix" style="background: fixed; background-color: #e3e3e3">
        <li><a href="/"><span class="text-center" style="font-size: 30px;"><strong> ควผฝ - อผม.</strong></span></a></li>
        <li><a href="/uploads/Command/command.pdf" target="_blank"><span class="glyphicon glyphicon-align-justify"></span> คำสั่งแต่งตั้งคณะทำงาน</a></li>
        <li><a href="/hierarchy"><span class="glyphicon glyphicon-user"></span> โครงสายบังคับบัญชา</a></li>
        <li><a href="/uploads/Responsibility/responsibility.pdf" target="_blank"><span class="glyphicon glyphicon-tasks"></span> ภารกิจหน้าที่</a></li>
        <li> <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                <span class="glyphicon glyphicon-bookmark"></span>
                <i class="icon-user"></i> ภารกิจหลักและเป้าหมายการดำเนินงาน
                <span class="caret"></span>
            </a>
            <ul class="dropdown-menu">
                <li><a href="/announces"><p>ประกาศนโยบายและแผนการดำเนินงาน</p><p>ของอผม.</p></a></li>
                <li><a href="/result"><p>ผลความก้าวหน้าของนโยบายและแผน</p><p>การดำเนินงานของ อผม. (ประจำเดือน)</p></a></li>
            </ul>
        </li>
        <li> <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                <span class="glyphicon glyphicon-thumbs-up"></span>
                <i class="icon-user"></i> ข้อปฏิบัติการประเมินผลการดำเนินงาน
                <span class="caret"></span>
            </a>
            <ul class="dropdown-menu">
                <li><a href="/pa"><p>ข้อปฏิบัติการประเมินผลการดำเนินงาน</p><p>ของอผม. (PA อผม.)</p></a></li>
                <li><a href="/track_pa"><p>ติดตามความก้าวหน้าการประเมินผลการ</p><p>ดำเนินงานของ อผม. เทียบกับเกณฑ์</p></a></li>
            </ul>
        </li>
        <li> <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                <span class="glyphicon glyphicon-calendar"></span>
                <i class="icon-user"></i> แผนปฏิบัติการ
                <span class="caret"></span>
            </a>
            <ul class="dropdown-menu">
                <li><a href="pdf/6_1.pdf" target="_blank"><p>แผนปฏิบัติการอผม. (รูปเล่ม)</p></a></li>
                <li><a href="http://it-fuel.egat.co.th/fuelplan/"><p>รายงานความก้าวหน้าและประเมินผล แผน</p><p>ปฏิบัติการ อผม. (ประจำเดือน)</p></a></li>
            </ul>
        </li>
        <li> <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                <span class="glyphicon glyphicon-stats"></span>
                <i class="icon-user"></i> การบริหารความเสี่ยงและการควบคุมภายใน
                <span class="caret"></span>
            </a>
            <ul class="dropdown-menu">
                <li><a href="pdf/command.pdf" target="_blank"><p>คำสั่งคณะกรรมการ</p></a></li>
                <li><a href="/riskreport/authorize"><p>เอกสารรายงาน</p></a></li>
                <li><a href="http://intranet.egat.co.th/Risk2548R1/RiskWebPage/RiskWebPageIndex.htm">การบริหารความเสี่ยงและการควบคุมภายในของ
                        กฟผ.</a></li>
                <li><a href="http://it-fuel.egat.co.th/index.php/risk-ctrl">การบริหารความเสี่ยงและการควบคุมภายในของ
                        รวช.</a></li>
                <li><a href="http://iaudit.egat.co.th/"><p>การบริหารความเสี่ยงและการควบคุมภายในของ</p><p>
                        สำนักงานตรวจสอบภายใน</p></a></li>
            </ul>
        </li>
        <li><a href="/oprReport"><span class="glyphicon glyphicon-send"></span> รายงานผลการดำเนินงาน อผม. (OPR)</a></li>
        <li><a href="/sfuReport"><span class="glyphicon glyphicon-cloud"></span> รายงานการประชุม ควฝผ - อผม.</a></li>
        <li> <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                <span class="glyphicon glyphicon-option-horizontal"></span>
                <i class="icon-user"></i> งานอื่นๆที่ได้รับมอบหมาย
                <span class="caret"></span>
            </a>
            <ul class="dropdown-menu">
                <li><a href="pdf/command.pdf" target="_blank"><p>กองจิตอาสา</p></a></li>
            </ul>
        </li>
        @if(isset(Auth::user()->email))
            <li> <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <span class="glyphicon glyphicon-log-in"></span>
                    <i class="icon-user"></i> {{Auth::user()->name}}
                    <span class="caret"></span>
                </a>
                <ul class="dropdown-menu">
                    <li><a href="/admin/management" target="_self"><p>Management</p></a> </li>
                    <li><a href="/logout" target="_self"><p>Log out</p></a></li>
                </ul>
            </li>
        @else
            <li><a href="/admin-login"><span class="glyphicon glyphicon-log-in"></span> Admin Sign in</a></li>

        @endif
        <li style="margin-bottom: 70px"></li>
    </ul>
</div>