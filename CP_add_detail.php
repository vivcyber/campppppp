<?php require __DIR__ . '/part/connect_db.php';
$pageName = 'CP_add';
$title = '新增商品細節';

$sid = isset($_GET['sid']) ? intval($_GET['sid']) : 0;

$sql2 = sprintf("SELECT *
    FROM `customize_product` cp
    WHERE cp.sid = $sid ");

$row = $pdo->query($sql2)->fetch();

?>

<?php include __DIR__ . '/part/html-head.php' ?>
<?php include __DIR__ . '/part/navbar.php' ?>

<div class="container">
    <div class="row">
        <div class="col-md-6 mx-auto">
            <div class="card">
                <div class="card-body">

                    <h5 class=" text-lg-center">新增 <?= $row['name'] ?> 細項</h5>

                    <form name="form1" onsubmit="sendData();return false;">


                        <div class="color mb-3">
                            <h5 class=" my-3 ">顏色</h5>
                            <div class="color_box ">
                                <div class="color1">
                                    <label for="productcolor" class="form-label">商品顏色</label>
                                    <input type="text" class="form-control" id="color" name="color" placeholder="產品顏色" required>
                                    <div class="form-text text-danger fw-bold mb-1"></div>
                                </div>
                                <div class="color1">
                                    <label for="productcolor" class="form-label">顏色代碼</label>
                                    <input type="text" class="form-control" id="color_code" name="color_code" maxlength="7" placeholder="#000000" required>
                                    <div class="form-text text-danger fw-bold mb-1"></div>
                                </div>
                                <div class="mb-3">
                                    <label for="c_code" class="form-label">商品編號</label>
                                    <input type="text" class="form-control" id="c_code" name="c_code" maxlength="6" placeholder="六個數字" required>
                                    <div class="form-text text-danger fw-bold mb-1"></div>
                                </div>
                            </div>
                            <div class="f_pic_box d-flex">
                                <div class="mb-3" style="width: 100%;">
                                    <!-- <label for="d_frame_pic" class="form-label">商品封面</label> -->
                                    <!-- <input type="text" class="form-control" id="d_frame_pic" name="d_frame_pic">
                                    <div class="form-text red"></div> -->
                                    <input type="file" name="d_frame_pic1" accept="image/*" style="display: none;" />
                                    <button class="btn btn-outline-primary rounded-pill" type="button" id="btn" onclick="uploadFramepic()">上傳商品首圖</button>
                                    <br />
                                    <img class="my-3 rounded-circle d-block" id="myimg" src="" alt="" style="display:none;" />
                                </div>
                            </div>
                            <div class="pic_box d-flex">
                                <div class="mb-3" style="width: 33%;">
                                    <!-- <label for="pic_name1" class="form-label">商品圖片1</label>
                                    <input type="text" class="form-control" id="pic_name1" name="pic_name1">
                                    <div class="form-text red"></div> -->
                                    <input type="file" name="pic_name1" accept="image/*" style="display: none;" />
                                    <button class="btn btn-outline-primary rounded-pill" type="button" id="btn1" onclick="uploadPic1()">上傳商品圖1</button>
                                    <br />
                                    <img class="my-3 mx-1 rounded-circle d-block" id="pic1" src="" alt="" style="display:none;" />
                                </div>
                                <div class="mb-3" style="width: 33%;">
                                    <!-- <label for="pic_name2" class="form-label">商品圖片2</label>
                                    <input type="text" class="form-control" id="pic_name2" name="pic_name2">
                                    <div class="form-text red"></div> -->
                                    <input type="file" name="pic_name2" accept="image/*" style="display: none;" />
                                    <button class="btn btn-outline-primary rounded-pill" type="button" id="btn2" onclick="uploadPic2()">上傳商品圖2</button>
                                    <br />
                                    <img class="my-3 mx-1 rounded-circle d-block" id="pic2" src="" alt="" style="display:none;" />
                                </div>
                                <div class="mb-3" style="width: 33%;">
                                    <!-- <label for="pic_name3" class="form-label">商品圖片3</label>
                                    <input type="text" class="form-control" id="pic_name3" name="pic_name3">
                                    <div class="form-text red"></div> -->
                                    <input type="file" name="pic_name3" accept="image/*" style="display: none;" />
                                    <button class="btn btn-outline-primary rounded-pill" type="button" id="btn3" onclick="uploadPic3()">上傳商品圖3</button>
                                    <br />
                                    <img class="my-3  mx-1 rounded-circle d-block" id="pic3" src="" alt="" style="display:none;" />
                                </div>
                            </div>
                            <div class="stock mb-3">
                                <label for="stock" class="form-label">庫存</label>
                                <input type="text" class="form-control" id="stock" name="stock">
                                <div class="form-text text-danger fw-bold mb-1"></div>
                            </div>


                        </div>


                        <div class="font mb-3">
                            <h5 class=" my-3">字體</h5>
                            <div class="font_box d-flex">
                                <div class="font1" style="width: 50%;">
                                    <label for="font_style1" class="form-label">字型</label>
                                    <select name="font_style1" id="font_style1" class="form-control font_style1">
                                        <option value="">--字型--</option>
                                        <option value="Lora">Lora</option>
                                        <option value="Roboto Condensed">Roboto Condensed</option>
                                        <option value="Spline Sans Mono">Spline Sans Mono</option>
                                    </select>

                                </div>
                                <div class="font1" style="width: 50%;">
                                    <label for="font_type1" class="form-label">類型</label>
                                    <select name="font_type1" id="font_type1" class="form-control" readonly>
                                        <option value=""></option>
                                        <option value="serif" class="serif1">serif</option>
                                        <option value="sans-serif" class="sans-serif1">sans-serif</option>
                                        <option value="monospace" class="monospace1">monospace</option>
                                    </select>

                                </div>
                            </div>

                            <div class="font_box d-flex">
                                <div class="font1" style="width: 50%;">
                                    <label for="font_style2" class="form-label">字型</label>
                                    <select name="font_style2" id="font_style2" class="form-control font_style2">
                                        <option value="">--字型--</option>
                                        <option value="Lora">Lora</option>
                                        <option value="Roboto Condensed">Roboto Condensed</option>
                                        <option value="Spline Sans Mono">Spline Sans Mono</option>
                                    </select>

                                </div>
                                <div class="font1" style="width: 50%;">
                                    <label for="font_type2" class="form-label">類型</label>
                                    <select name="font_type2" id="font_type2" class="form-control" readonly>
                                        <option value=""></option>
                                        <option value="serif" class="serif2">serif</option>
                                        <option value="sans-serif" class="sans-serif2">sans-serif</option>
                                        <option value="monospace" class="monospace2">monospace</option>
                                    </select>

                                </div>
                            </div>

                            <div class="font_box d-flex">
                                <div class="font1" style="width: 50%;">
                                    <label for="font_style3" class="form-label">字型</label>
                                    <select name="font_style3" id="font_style3" class="form-control font_style3">
                                        <option value="">--字型--</option>
                                        <option value="Lora">Lora</option>
                                        <option value="Roboto Condensed">Roboto Condensed</option>
                                        <option value="Spline Sans Mono">Spline Sans Mono</option>
                                    </select>

                                </div>
                                <div class="font1" style="width: 50%;">
                                    <label for="font_type3" class="form-label">類型</label>
                                    <select name="font_type3" id="font_type3" class="form-control" readonly>
                                        <option value=""></option>
                                        <option value="serif" class="serif3">serif</option>
                                        <option value="sans-serif" class="sans-serif3">sans-serif</option>
                                        <option value="monospace" class="monospace3">monospace</option>
                                    </select>

                                </div>
                            </div>
                            <div>
                                <label for="font_price" class="form-label fw-bold ">字型價格</label>
                                <input type="text" class="form-control" id="font_price" name="font_price" readonly>
                            </div>

                        </div>
                        <div class="ink mb-3">
                            <h5 class=" my-3">圖案</h5>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="tent" id="ink1" name="ink1">
                                <label class="form-check-label" for="ink1">
                                    tent
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="caravan" id="ink2" name="ink2">
                                <label class="form-check-label" for="ink2">
                                    caravan
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="mountain-sun" id="ink3" name="ink3">
                                <label class="form-check-label" for="ink3">
                                    mountain-sun
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="campground" id="ink4" name="ink4">
                                <label class="form-check-label" for="ink4">
                                    campground
                                </label>
                            </div>
                            <label for="ink_price" class="form-label fw-bold">圖案價格</label>
                            <input type="text" class="form-control" id="ink_price" name="ink_price" readonly>

                        </div>

                        <button type="submit" class="btn btn-primary text-white">新增</button>

                    </form>
                    <div id="info-bar" class="alert alert-success p-2" role="alert" style="display:none;">
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<?php include __DIR__ . '/part/scripts.php' ?>
<script>
    // 判斷是否有該客製化內容
    const ink = document.querySelector('.ink');
    const font = document.querySelector('.font');
    const c2 = <?= json_encode($row['customize2'], JSON_UNESCAPED_UNICODE); ?>;
    const c3 = <?= json_encode($row['customize3'], JSON_UNESCAPED_UNICODE); ?>;
    // 如果沒有就不要顯示
    if (c2 == "") {
        ink.style.display = 'none';
    }
    if (c3 == "") {
        font.style.display = 'none';
    }
    //自動生成文字類型和價格
    const font1 = document.querySelector('.font_style1');
    const font2 = document.querySelector('.font_style2');
    const font3 = document.querySelector('.font_style3');
    const font_price = document.querySelector('#font_price');
    font_price.value = 0;

    font1.addEventListener('change', (event) => {
        const serif = document.querySelector('.serif1');
        const sans_serif = document.querySelector('.sans-serif1');
        const monospace = document.querySelector('.monospace1');


        if (event.target.value == "Lora") {
            serif.selected = true;
            sans_serif.selected = false;
            monospace.selected = false;


        } else if (event.target.value == "Roboto Condensed") {
            serif.selected = false;
            sans_serif.selected = true;
            monospace.selected = false;


        } else if (event.target.value == "Spline Sans Mono") {
            serif.selected = false;
            sans_serif.selected = false;
            monospace.selected = true;
        }
        font_price.value = 500;
    });
    font2.addEventListener('change', (event) => {
        const serif = document.querySelector('.serif2');
        const sans_serif = document.querySelector('.sans-serif2');
        const monospace = document.querySelector('.monospace2');

        if (event.target.value == "Lora") {
            serif.selected = true;
            sans_serif.selected = false;
            monospace.selected = false;

        } else if (event.target.value == "Roboto Condensed") {
            serif.selected = false;
            sans_serif.selected = true;
            monospace.selected = false;

        } else if (event.target.value == "Spline Sans Mono") {
            serif.selected = false;
            sans_serif.selected = false;
            monospace.selected = true;

        }
        font_price.value = 500;
    });
    font3.addEventListener('change', (event) => {
        const serif = document.querySelector('.serif3');
        const sans_serif = document.querySelector('.sans-serif3');
        const monospace = document.querySelector('.monospace3');

        if (event.target.value == "Lora") {
            serif.selected = true;
            sans_serif.selected = false;
            monospace.selected = false;

        } else if (event.target.value == "Roboto Condensed") {
            serif.selected = false;
            sans_serif.selected = true;
            monospace.selected = false;

        } else if (event.target.value == "Spline Sans Mono") {
            serif.selected = false;
            sans_serif.selected = false;
            monospace.selected = true;
        }
        font_price.value = 500;
    });

    //自動生成圖案價格
    const ink1 = document.querySelector('#ink1');
    const ink2 = document.querySelector('#ink2');
    const ink3 = document.querySelector('#ink3');
    const ink4 = document.querySelector('#ink4');
    const ink_price = document.querySelector('#ink_price');
    const arrayInk = [ink1, ink2, ink3, ink4];
    ink_price.value = 0;
    arrayInk.forEach((r) => {
        r.addEventListener('change', (event) => {
            ink_price.value = 200;
        });
    })

    //前端驗證

    const color_code_re = /^#[a-fA-F0-9]{6}$/;
    const c_code_re = /^\d{6}$/;
    const stock_re = /^\d*$/;

    const info_bar = document.querySelector('#info-bar');
    const color_codef = document.form1.color_code;
    const c_codef = document.form1.c_code;
    const stockf = document.form1.stock;

    const fields = [c_codef, color_codef, stockf];
    const fieldText = [];
    for (let f of fields) {
        fieldText.push(f.nextElementSibling);
    }

    async function sendData() {
        // TODO: 欄位檢查, 前端的檢查
        //讓欄位外觀回復原來狀態
        for (let i in fields) {
            fields[i].classList.remove('text-danger');
            fieldText[i].innerText = '';
        }

        // info_bar.style.display = 'none'; //隱藏訊息列

        //欄位檢查，前端的檢查

        let isPass = true; //預設通過檢查

        // 商品編號
        if (!c_code_re.test(c_codef.value)) {
            fieldText[0].innerText = '請輸入六個阿拉伯數字';
            isPass = false;
        }
        // 顏色代碼

        if (!color_code_re.test(color_codef.value)) {
            fieldText[1].innerText = '請輸入正確的顏色代碼';
            isPass = false;
        }
        //庫存

        if (!stock_re.test(stockf.value)) {
            fieldText[2].innerText = '請輸入阿拉伯數字';
            isPass = false;

        }

        //若驗證不通過

        if (!isPass) {
            return; //結束sendData();
        }
        const fd = new FormData(document.form1);
        const r = await fetch('CP_add_detail_api.php?sid=<?= $sid ?>', {
            method: 'POST',
            body: fd,
        });
        const result = await r.json();
        console.log(result);

        const info_bar = document.querySelector('#info-bar');

        info_bar.style.display = 'block'; //顯示訊息列
        if (result.success) {
            // 如果成功
            info_bar.classList.remove('alert-danger');
            info_bar.classList.add('alert-success');
            info_bar.innerText = "資料新增成功";
            setTimeout(() => {
                location.href = 'CP_product_detail.php?sid=<?= $sid ?>';
            }, 1000);
            // 設定1秒後跳轉

        } else {
            // 如果失敗 
            info_bar.classList.add('alert-danger');
            info_bar.classList.remove('alert-success');
            info_bar.innerText = "資料新增失敗";
            info_bar.innerText = result.error || '資料無法新增';

        }
    }

    const btn = document.querySelector("#btn");
    const btn1 = document.querySelector("#btn1");
    const btn2 = document.querySelector("#btn2");
    const btn3 = document.querySelector("#btn3");
    const myimg = document.querySelector("#myimg");
    const pic1 = document.querySelector("#pic1");
    const pic2 = document.querySelector("#pic2");
    const pic3 = document.querySelector("#pic3");
    const d_frame_pic1 = document.form1.d_frame_pic1;
    const pic_name1 = document.form1.pic_name1;
    const pic_name2 = document.form1.pic_name2;
    const pic_name3 = document.form1.pic_name3;


    d_frame_pic1.addEventListener("change", async function() {
        // 上傳表單
        const file = this.files[0];
        console.log(file);
        const reader = new FileReader();

        // 資料載入後 (讀取完成後)
        reader.onload = function() {
            console.log(reader.result);
            myimg.src = reader.result;
            myimg.style = "width:150px;height:150px;object-fit:cover;"

        };
        reader.readAsDataURL(file);
    });


    function uploadFramepic() {
        d_frame_pic1.click(); // 模擬點擊
    }

    pic_name1.addEventListener("change", async function() {
        // 上傳表單
        const file = this.files[0];
        console.log(file);
        const reader = new FileReader();

        // 資料載入後 (讀取完成後)
        reader.onload = function() {
            console.log(reader.result);
            pic1.src = reader.result;
            pic1.style = "width:150px;height:150px;object-fit:cover;"

        };
        reader.readAsDataURL(file);
    });


    function uploadPic1() {
        pic_name1.click(); // 模擬點擊
    }
    pic_name2.addEventListener("change", async function() {
        // 上傳表單
        const file = this.files[0];
        console.log(file);
        const reader = new FileReader();

        // 資料載入後 (讀取完成後)
        reader.onload = function() {
            console.log(reader.result);
            pic2.src = reader.result;
            pic2.style = "width:150px;height:150px;object-fit:cover;"

        };
        reader.readAsDataURL(file);
    });


    function uploadPic2() {
        pic_name2.click(); // 模擬點擊
    }
    pic_name3.addEventListener("change", async function() {
        // 上傳表單
        const file = this.files[0];
        console.log(file);
        const reader = new FileReader();

        // 資料載入後 (讀取完成後)
        reader.onload = function() {
            console.log(reader.result);
            pic3.src = reader.result;
            pic3.style = "width:150px;height:150px;object-fit:cover;"

        };
        reader.readAsDataURL(file);
    });


    function uploadPic3() {
        pic_name3.click(); // 模擬點擊
    }
</script>
<?php include __DIR__ . '/part/html-foot.php' ?>