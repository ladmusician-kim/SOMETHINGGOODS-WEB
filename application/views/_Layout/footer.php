
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <link href="<?php echo base_url()?>static/lib/bootstrap/js/bootstrap.min.js" rel="stylesheet">


    <?php
        $total_url = $_SERVER['PHP_SELF'];
        $arr_splitted_url = explode('/', $total_url);

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
        if(strpos($filename, 'create')) {
    ?>
            <script src="/SOMETHINGGOODS/static/package/smarteditor/js/HuskyEZCreator.js"></script>
    <?php
        }
    ?>
  </body>
</html>