<?php view("site.partials.accountManageHeader")?>
    <div class="post-new_content">
        <h1 class="post-new__title">Đăng tin mới</h1>
        <form action="" class="post-new_form" method="POST" enctype="multipart/form-data">
            <h2 class="post-new_form--title">Địa chỉ cho thuê</h2>
            <div class="form-group">
                <label for="" class="form-label">Cơ sở</label>
                <select name="" id="" class="form-control form-control_normal input-normal" >
                    <option value="">--- Chọn cơ sở ---</option>
                    <option value="">Hà Nội</option>
                    <option value="">Thành phố Hồ Chí Minh</option>
                    <option value="">Đà Nẵng</option>
                    <option value="">Tây Nguyên</option>
                    <option value="">Cần Thơ</option>
                    <option value="">Đồng Nai</option>
                    <option value="">Bắc Giang</option>
                    <option value="">Huế</option>
                    <option value="">Hải Phòng</option>
                </select>
            </div>
            <div class="form-group">
                <label for="" class="form-label">Địa chỉ chính xác</label>
                <input type="text" class="form-control form-control_normal">
            </div>
            <h2 class="post-new_form--title">Thông tin mô tả</h2>
            <div class="form-group">
                <label for="" class="form-label">Loại chuyên mục</label>
                <select name="" id="" class="form-control form-control_normal input-normal">
                    <option value="">--- Chọn loại chuyên mục ---</option>
                    <option value="">Phòng trọ</option>
                    <option value="">Nhà trọ</option>
                    <option value="">Căn hộ</option>
                    <option value="">Mặt bằng</option>
                    <option value="">Tìm người ở ghép</option>
                </select>
            </div>
            <div class="form-group">
                <label for="" class="form-label">Tiêu đề</label>
                <input type="text" class="form-control form-control_normal">
            </div>
            <div class="form-group">
                <label for="" class="form-label">Nội dung mô tả</label>
                <textarea name="" id="" rows="15" minlength="100" class="form-control_normal" style="padding: 5px 10px; font-size: 1.6rem" required></textarea>
            </div>
            <div class="form-group">
                <label for="" class="form-label">Thông tin liên hệ</label>
                <input type="text" class="form-control form-control_normal form-control_disabled input-normal" disabled value="Trần Minh Vương">
            </div>
            <div class="form-group">
                <label for="" class="form-label">Số điện thoại</label>
                <input type="text" class="form-control form-control_normal form-control_disabled input-normal" disabled value="0374374470">
            </div>
            <div class="form-group">
                <label for="" class="form-label">Giá cho thuê</label>
                <div class="input-group input-normal">
                    <input type="text" class="form-control form-control_normal" style="border-top-right-radius: 0px; border-bottom-right-radius: 0px;">
                    <div class="input-group_append">
                        <span class="input-group_text">Đồng</span>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="" class="form-label">Diện tích</label>
                <div class="input-group input-normal">
                    <input type="number" class="form-control form-control_normal" style="border-top-right-radius: 0px; border-bottom-right-radius: 0px;">
                    <div class="input-group_append">
                        <span class="input-group_text">m<sup>2</sup></span>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="" class="form-label">Số người </label>
                <div class="input-group input-normal">
                    <input type="number" class="form-control form-control_normal " style="border-top-right-radius: 0px; border-bottom-right-radius: 0px;">
                    <div class="input-group_append">
                        <span class="input-group_text">người</span>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="" class="form-label">Hình ảnh</label>
                <input type="file" id="files" multiple="multiple" accept="image/jpeg, image/png, image/jpg"  name="files[]" style="font-size: 1.6rem; margin-bottom: 20px">
                <output id="images-result">
            </div>
            <button class="btn btn-submit">Đăng tin</button>
        </form>
    </div>
    <script src="http://localhost/poly_tro/public/js/showImageUpload.js"></script>
<?php view("site.partials.accountManageFooter")?>