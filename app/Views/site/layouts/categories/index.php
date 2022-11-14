<?php view("site.partials.header")?>
    <div class="main-content clear" style="margin-top: 40px">
        <!-- boxtrai -->
        <div class="boxtrai mr">
            <div class=" clear">
                    <div class="box1 menu2">
                        <h2 style="margin-bottom: 8px">DANH SÁCH BÀI ĐĂNG</h2>
                        <ul>
                            <span style="font-size: 1.4rem">Sắp xếp:</span>
                            <li><a href="#">Mặc định</a></li>
                            <li><a href="#">Mới nhất</a></li>
                            <li><a href="#">Nhiều lượt xem nhất</a></li>
                        </ul>
                    </div>
            </div>
            <!-- Bai viet -->
            <div class="boxcontent2 stt">
                <?php foreach($news as $new): ?>
                        <a href="#" class='content-img'>
                        <img src="../public/image/img1.png" alt="" class='content-img_link'>
                        </a>
                    <div>
                        <a href="#" class="content-title"><?=$new['title']?></a>
                        <div class="content-body">
                            <div class="content-price"><?=$new['price']?></div>
                            <div class="content-area"><?=$new['view']?>m²</div>
                            <div class="content-address"><?=$new['address']?></div>
                        </div>
                        <div class="content-description short-title">
                        <?=$new['description']?>
                        </div>
                        <div class="content-user">
                            <div class="content-user_avatar">
                                <img src="../<?= $new['avatar'] ?>" alt="">
                            </div>
                            <p class="content-user_name">
                            <?= $new['fullname'] ?>
                            </p>
                        </div>
                    </div>
                <?php endforeach ?>
            </div>
        </div>
        <!-- box phai -->
        <div class="boxphai">
            <!-- box p1 -->
            <div class="clear boxtrai-item">
                <div class="boxtitle">DANH MỤC CHO THUÊ</div>
                <div class="boxcontent menudoc">
                    <?php foreach($categories as $category): ?>
                        <ul>
                            <li>
                                <a href="http://localhost/poly_tro/site/category?id=<?= $category['id']?>">
                                    > <?= $category['name'] ?>
                                </a>
                            </li>
                        </ul>
                    <?php endforeach ?>
                </div> 
            </div>
            <!-- box p2  -->
            <div class=" clear  boxtrai-item">
                <div class="boxtitle">XEM THEO GIÁ</div>
                <div class="boxcontent menudoc">
                    <ul>
                        <li>
                            <a href="#">> Dưới 1tr</a>
                        </li>
                        <li>
                            <a href="#">> Từ 1 - 2 triệu</a>
                        </li>
                        <li>
                            <a href="#">> Từ 2 - 3 triệu</a>
                        </li>
                        <li>
                            <a href="#">> Từ 2 - 3 triệu</a>
                        </li>
                        <li>
                            <a href="#">> Từ 3 - 4 triệu</a>
                        </li>
                        <li>
                            <a href="#">> Từ 4 - 5 triệu</a>
                        </li>
                        <li>
                            <a href="#">> Trên 5 triệu</a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- box p3 -->
            <div class=" clear boxtrai-item">
                <div class="boxtitle">XEM THEO DIỆN TÍCH</div>
                <div class="boxcontent menudoc">
                    <ul>
                        <li>
                            <a href="#">> Dưới 20m²</a>
                        </li>
                        <li>
                            <a href="#">> Từ 20 - 30m²</a>
                        </li>
                        <li>
                            <a href="#">> Từ 30 - 40m²</a>
                        </li>
                        <li>
                            <a href="#">> Từ 40 - 50m²</a>
                        </li>
                        <li>
                            <a href="#">> Trên 50m²</a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- box p4 -->
            <div class=" clear boxtrai-item">
                <div class="boxtitle">TIN MỚI ĐĂNG</div>
                <div class="  boxcontent">
                    <a href="" class=" clear10 newstt">
                        <div class="newstt-img">
                            <img src="./public/image/img1.png" alt="">
                        </div>
                        <div class="newstt-body">
                            <p class="newstt-title">CĂN HỘ ĐỐI DIỆN KS 5 SAO TÂN SƠN NHẤT MỚI XÂY RẤT ĐẸP - GẦN CÔNG VIÊN HOÀNG VĂN THỤ</p>
                            <span class="newstt-price">5 triệu/tháng</span>
                        </div>
                    </a>
                    <a href="" class=" clear10 newstt">
                        <div class="newstt-img">
                            <img src="./public/image/img1.png" alt="">
                        </div>
                        <div class="newstt-body">
                            <p class="newstt-title">CĂN HỘ ĐỐI DIỆN KS 5 SAO TÂN SƠN NHẤT MỚI XÂY RẤT ĐẸP - GẦN CÔNG VIÊN HOÀNG VĂN THỤ</p>
                            <span class="newstt-price">5 triệu/tháng</span>
                        </div>
                    </a>
                    <a href="" class=" clear10 newstt">
                        <div class="newstt-img">
                            <img src="./public/image/img1.png" alt="">
                        </div>
                        <div class="newstt-body">
                            <p class="newstt-title">CĂN HỘ ĐỐI DIỆN KS 5 SAO TÂN SƠN NHẤT MỚI XÂY RẤT ĐẸP - GẦN CÔNG VIÊN HOÀNG VĂN THỤ</p>
                            <span class="newstt-price">5 triệu/tháng</span>
                        </div>
                    </a>
                    <a href="" class=" clear10 newstt">
                        <div class="newstt-img">
                            <img src="./public/image/img1.png" alt="">
                        </div>
                        <div class="newstt-body">
                            <p class="newstt-title">CĂN HỘ ĐỐI DIỆN KS 5 SAO TÂN SƠN NHẤT MỚI XÂY RẤT ĐẸP - GẦN CÔNG VIÊN HOÀNG VĂN THỤ</p>
                            <span class="newstt-price">5 triệu/tháng</span>
                        </div>
                    </a>
                    <a href="" class=" clear10 newstt">
                        <div class="newstt-img">
                            <img src="./public/image/img1.png" alt="">
                        </div>
                        <div class="newstt-body">
                            <p class="newstt-title">CĂN HỘ ĐỐI DIỆN KS 5 SAO TÂN SƠN NHẤT MỚI XÂY RẤT ĐẸP - GẦN CÔNG VIÊN HOÀNG VĂN THỤ</p>
                            <span class="newstt-price">5 triệu/tháng</span>
                        </div>
                    </a>
                    
                </div>
            </div>
        </div>
    </div>
<?php view("site.partials.footer")?>