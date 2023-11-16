<body class="crm_body_bg">
    <section class="main_content dashboard_part large_header_bg">
        <div class="main_content_iner overly_inner ">
            <div class="container-fluid p-0 ">
                <div class="row">
                    <div class="col-12">
                        <div class="page_title_box d-flex align-items-center justify-content-between">
                            <div class="page_title_left">
                                <h3 class="f_s_30 f_w_700 text_white">Thêm danh mục</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container pt-5 mt-5">
                    <form action="index.php?act=addddm" method="POST">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Id danh mục</label>
                            <input type="text" name="maloai" class="form-control" id="exampleFormControlInput1"disabled>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Tên danh mục</label>
                            <input type="text" name="tenloai" class="form-control" id="exampleFormControlInput1">
                            <span style="color:red;"><?php echo isset($_SESSION['tenloai'])?$_SESSION['tenloai']:''?></span>
                        </div>
                        <div class="mb-3 d-flex justify-content-center">
                            <button type="reset" class="btn btn-secondary mx-2">Nhập lại</button>
                            <!-- <button type="submit" name="submit" class="btn btn-success mx-2">Thêm mới</button> -->
                            <input type="submit" name="submit" class="btn btn-success mx-2" value="Thêm mới">
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="footer_part">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="footer_iner text-center">
                            <p>2023 - Designed by quang<a href="#"> <i class="ti-heart"></i></a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end main  -->
    <script src="../../js/jquery1-3.4.1.min.js"></script>

    <script src="../../js/metisMenu.js"></script>

    <script src="../../js/custom.js"></script>
</body>
