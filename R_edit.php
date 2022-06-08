<?php include __DIR__ . '/part/connect_db.php';
$pageName = 'Room_edit';
$title = '房間類型編輯';


//基本上，這裡做修改頁面的邏輯是跳到修改頁面的方式去呈現。
//所以會跟ab-add.php 的格式一樣，所以就拿來做修改。
//這裡我們先取得sid的值。然後再去判斷如果沒有sid的值，那我們就不變。直接不處理。
$sid = isset($_GET['RoomType']) ? strval($_GET['RoomType']) : '';
if (empty($sid)) {
    // 
    header('Location: R_room_back.php');

    exit;
}
//因為上面取得到sid的值所以才會接下來到這裡。
//設定row 就是 sql的語法。如果sql抓到空值，我們也不幹了。就直接保持原來就好。

$row = $pdo->query("SELECT * FROM room_list,room_order WHERE Room_Type='" . $sid . "'")->fetch();
// 關於 Room_Type 本身就是title 
$row2 = $pdo->query("SELECT * FROM room_list")->fetchAll(PDO::FETCH_ASSOC);
$R_Spec = $row['Room_Spec'];
$r_spec = explode(",", $R_Spec);
$str = "checked";
$check = true;
if (empty($row)) {
    header('Location: R_room_back.php');
    exit;
}


?>
<?php include __DIR__ . '/part/html-head.php' ?>
<?php include __DIR__ . '/part/navbar.php' ?>

<style>
    .form-control .border-danger {
        border: 1px solid #f77885;
    }

    .form-text .red {
        color: var(--bs-red);
    }
</style>
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class=" card-body">
                    <h5 class="card-title">編輯資料</h5>
                    <form name="form1" enctype="multipart/form-data" onsubmit="sendData(); return false;" novalidate>
                        <!-- 如果看到data- 的開頭等於是用戶自己設定。基本上是不想把這個刪掉，所以前面加data- 是ok的 -->
                        <!-- return false 的意思是解除預設行為 -->
                        <input type="hidden" name="OrderNum" value="<?= $row['SID'] ?>">

                        <div class="mb-3">
                            <!-- 這裡的sendData 運用的方式是 AJAX的格式 -->
                            <label for="OrderNum" class="form-label">房型編號</label>
                            <input type="text" class="form-control" id="OrderNum" name="OrderNum" readonly="readonly" value="<?= $row['SID'],"  /  ",$row['Room_Type'] ?>">
                            <div class="form-text text-danger"></div>
                        </div>


                        <div class="mb-3">
                            <label for="Room_Type" class="form-label">修改房型</label>
                            <select class="form-control" id="Room_Type" name="Room_Type" onchange="Fetchkey(this.value)">
                                <option><?= $row["Room_Type"]?></option>

                                <?php foreach ($row2 as $r) : ?>
                                    <option value="<?= $r["SID"]; ?>"><?= $r["Room_Type"]; ?></option>
                                <?php endforeach; ?>

                            </select>
                                <div class="form-text text-danger"></div>
                        </div>
                        <label for="Room_Spec" class="form-label mb-1" id="inroom_spec">Room_Spec</label>          
                        <div class="mb-3" id="room_spec">
                            <input type="checkbox" id="Room_Spec" name="Room_spec[]" value="cleaningStaff" 
                            <?php
                           
                                if (in_array("cleaningStaff", $r_spec)) {
                                    echo $str;
                                }
                            ?>>清潔用品
                            <input type="checkbox" id="Room_Spec" name="Room_spec[]" value="Fridge"
                            <?php
                               
                                if (in_array("Fridge", $r_spec)) {
                                    echo $str;
                                }
                            ?>>冰箱
                            <input type="checkbox" id="Room_Spec" name="Room_spec[]" value="Hotpot"
                            <?php
                              
                                if (in_array("Hotpot", $r_spec)) {
                                    echo $str;
                                }
                            ?>
                            >電熱水壺
                            <input type="checkbox" id="Room_Spec" name="Room_spec[]" value="Sheep"
                            <?php
                               
                                    if (in_array("Sheep", $r_spec)) {
                                        echo $str;
                                    }
                            ?>
                            >床單
                            <input type="checkbox" id="Room_Spec" name="Room_spec[]" value="Wardrobe"
                            <?php
                               
                                    if (in_array("Wardrobe", $r_spec)) {
                                        echo $str;
                                    }
                            ?>
                            >衣櫃
                            <input type="checkbox" id="Room_Spec" name="Room_spec[]" value="Toiletpaper"
                            <?php
                               
                                    if (in_array("Toiletpaper", $r_spec)) {
                                        echo $str;
                                    }
                            ?>
                            >衛生紙
                            <input type="checkbox" id="Room_Spec" name="Room_spec[]" value="Toilet"
                            <?php
                               
                                    if (in_array("Toilet", $r_spec)) {
                                        echo $str;
                                    }
                            ?>
                            >廁所
                            <input type="checkbox" id="Room_Spec" name="Room_spec[]" value="Hairdryer"
                            <?php
                               
                                    if (in_array("Hairdryer", $r_spec)) {
                                        echo $str;
                                    }
                            ?>
                            >吹風機
                            <input type="checkbox" id="Room_Spec" name="Room_spec[]" value="Tub"
                            <?php
                               
                                    if (in_array("Tub", $r_spec)) {
                                        echo $str;
                                    }
                            ?>
                            >浴缸 </br>
                            <input type="checkbox" id="Room_Spec" name="Room_spec[]" value="Washroom"
                            <?php
                               
                                    if (in_array("Washroom", $r_spec)) {
                                        echo $str;
                                    }
                            ?>
                            >沐浴間
                            <input type="checkbox" id="Room_Spec" name="Room_spec[]" value="Towel"
                            <?php
                               
                                    if (in_array("Towel", $r_spec)) {
                                        echo $str;
                                    }
                            ?>
                            >毛巾
                            <input type="checkbox" id="Room_Spec" name="Room_spec[]" value="Sliper"
                            <?php
                               
                                    if (in_array("Sliper", $r_spec)) {
                                        echo $str;
                                    }
                            ?>
                            >拖鞋
                            <input type="checkbox" id="Room_Spec" name="Room_spec[]" value="Desk"
                            <?php
                                
                                    if (in_array("Desk", $r_spec)) {
                                        echo $str;
                                    }
                                
                            ?>
                            >書桌
                            <input type="checkbox" id="Room_Spec" name="Room_spec[]" value="Television"
                            <?php
                                
                                    if (in_array("Television", $r_spec)) {
                                        echo $str;
                                    }
                            ?>
                            >平面電視
                            <input type="checkbox" id="Room_Spec" name="Room_spec[]" value="Phone"
                            <?php
                               
                                    if (in_array("Phone", $r_spec)) {
                                        echo $str;
                                    }
                               
                            ?>
                            >電話
                            <input type="checkbox" id="Room_Spec" name="Room_spec[]" value="Channel"
                            <?php
                                    if (in_array("Channel", $r_spec)) {
                                        echo $str;
                                    }
                            ?>
                            >有線頻道

                            <!-- <div class="form-text text-danger"></div> -->
                        </div>

                        <div class="mb-3">
                            <label for="Price" class="form-label" id="pricess">Price</label>
                            <input type="text" class="form-control" id="Price" name="Price" value="<?= $row['Price'] ?>">
                            <!-- html5 的功能 -->
                            <div class="form-text"></div>
                        </div>

                        <button type="submit" class="btn btn-primary">修改資料</button>
                    </form>
                    <div id="info-bar" class="alert alert-success" role="alert" style="display: none;">
                        資料新增成功
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include __DIR__ . '/part/scripts.php' ?>
<script type="text/javascript">
    const row = <?= json_encode($row, JSON_UNESCAPED_UNICODE); ?>; // unicode 是中文

    function Fetchkey(id){
       $check=false;
       $('input[type="checkbox"]').prop('checked',false);
        $('#pricess').html('');
        console.log("yeah1");
        $.ajax({
            type:'post',
            url:'R_runedit_api.php',
            data:{ Roomttype : id },
            success : function(data) {
                // console.log(data);
                console.log(typeof data);

                data.forEach( ( y ) => {
                $("input:checkbox[value='${y}']").prop( 'checked' , true ); 
                });
            }
        });
    }

    async function sendData() {


        const fd = new FormData(document.form1);
        const r = await fetch('R_edit_api.php', {
            method: 'POST',
            body: fd,
        });
        const result = await r.json();
        console.log(result);
        info_bar.style.display = 'block'; //顯示alert
        $come_from = 'R_room_back.php';
        if (!empty($_SERVER['HTTP_REFERER'])) {
            $come_from = $_SERVER['HTTP_REFERER'];
        }

        if (result.success) {
            info_bar.classList.remove('alert-danger');
            info_bar.classList.add('alert-success');
            info_bar.innerText = "修改成功";
            setTimeout(() => {


                header("Location: $come_from");
            }, 2000);
        } else {
            info_bar.classList.remove('alert-success');
            info_bar.classList.add('alert-danger');
            info_bar.innerText = result.error || '資料無法修改';
        }
    }
</script>
<?php include __DIR__ . '/part/html-foot.php' ?>