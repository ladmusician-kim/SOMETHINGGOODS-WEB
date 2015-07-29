    </div>
    <footer class="footer">
        <div class="container">
            <p class="sg-footer-title">© SOMETHING GOODS</p>
            <div class="row sg-footer-category">
                <div class="col-md-3">
                    <p><a href="<?php echo base_url()?>about/info">Company info.</a></p>
                </div>
                <div class="col-md-3">
                    <p><a href="<?php echo base_url()?>about/agree">User Agreement</a></p>
                </div>
                <div class="col-md-3">
                    <p><a href="<?php echo base_url()?>about/policy">Privacy Policy</a></p>
                </div>
                <div class="col-md-3">
                    <p><a href="<?php echo base_url()?>about/service">Customer Service</a></p>
                </div>
            </div>
            <p>상호명: Something Goods(썸띵굿즈) | 대구광역시 동구 동대구로 457 | 전화 053-2222-2222</p>
            <p>대표이사: 김수빈 | 사업자등록번호 123-45-67890 | 통신판매 신고번호: 2015-대구달서-3333호</p>
            <p>Copyright (C) 2015 Something Goods All right reserved</p>
        </div>
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="<?php echo base_url()?>static/js/common.js"></script>
    <script src="<?php echo base_url()?>static/lib/bootstrap/js/bootstrap.min.js"></script>

    <?php
        $total_url = $_SERVER['PHP_SELF'];
        $arr_splitted_url = explode('/', $total_url);

        if ($arr_splitted_url[count($arr_splitted_url) - 1] === "") {
            unset($arr_splitted_url[count($arr_splitted_url) - 1]);
        }

        $ctrl_name = $arr_splitted_url[count($arr_splitted_url) - 2];
        $view_name = $arr_splitted_url[count($arr_splitted_url) - 1];
        $filename = "";

        if ($ctrl_name == 'index.php') {
            $filename = 'static/js/'.strtolower($view_name).'/index.js';
        } else {
            $filename = 'static/js/'.strtolower($ctrl_name).'/'.strtolower($view_name).'.js';
        }

        if(file_exists($filename)) {
            ?>
            <script src="/SOMETHINGGOODS/<?php echo $filename; ?>"></script>
            <?php
        }
        if(strpos($filename, 'home')) {
            ?>
            <!-- slider -->
            <script src="<?php echo base_url()?>static/lib/slider/js/jquery.bxslider.js"></script>
            <?php
        }
            ?>



    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="<?php echo base_url()?>static/lib/bootstrap/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>