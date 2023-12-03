<?php 
require_once("../h_and_f/header.php");
require_once("../connect.php");
require_once("../func_php//select_delete.php");
?>

<?php
$tl = get_table("theloai", $conn);
$tg = get_table("tacgia", $conn);
?>

<?php
$id = $_GET["id"];

$bv = get_rows("baiviet", "ma_bviet", $id, $conn);

$s = "false";
?>
    <main class="container mt-5 mb-5">
        <!-- <h3 class="text-center text-uppercase mb-3 text-primary">CẢM NHẬN VỀ BÀI HÁT</h3> -->
        <div class="row">
            <div class="col-sm">
                <h3 class="text-center text-uppercase fw-bold">Thêm mới bài viết</h3>

                <form action="process_edit_article.php" method="post">
                    <input type="hidden" name = "id" value = <?php echo $id ?>>
                    <div class="input-group mt-3 mb-3">
                        <span class="input-group-text" id="lblCatName">tiêu đề</span>
                        <input type="text" class="form-control" name="title" value="<?php echo $bv["tieude"] ?>" required>
                    </div>

                    <div class="input-group mt-3 mb-3">
                        <span class="input-group-text" id="lblCatName">tên bài hát</span>
                        <input type="text" class="form-control" name="name" value="<?php echo $bv["ten_bhat"] ?>" required>
                    </div>

                    <div class="input-group mt-3 mb-3">
                        <span class="input-group-text" id="lblCatName">tóm tắt</span>
                        <textarea name="tom_tat" class="form-control" cols="30" rows="10">
                            <?php echo $bv["tomtat"] ?>
                        </textarea>
                    </div>

                    <div class="input-group mt-3 mb-3">
                        <span class="input-group-text" id="lblCatName">nội dung</span>
                        <textarea name="noi_dung" class="form-control" cols="30" rows="10">
                            <?php echo $bv["noidung"] ?>
                        </textarea>
                    </div>

                    <div class="input-group mt-3 mb-3">
                        <span class="input-group-text" id="lblCatName"> thể loại</span>
                        <select name="id_the_loai" class="form-control">

                            <?php foreach($tl as $rows) {?>
                                <?php echo $rows["ma_tloai"]."  ".$bv["ma_tloai"] ?>
                                <?php if($rows["ma_tloai"] == $bv["ma_tloai"]) {?>
                                    <option value="<?php echo $rows["ma_tloai"] ?>" selected>
                                        <?php echo $rows["ten_tloai"] ?>
                                    </option>
                                <?php } else {?>
                                    <option value="<?php echo $rows["ma_tloai"] ?>" >
                                        <?php echo $rows["ten_tloai"] ?>
                                    </option>
                                <?php }?>
                            <?php } ?>

                        </select>
                    </div>

                    <div class="input-group mt-3 mb-3">
                        <span class="input-group-text" id="lblCatName">tác giả</span>
                        <select name="id_tac_gia" class="form-control">

                            <?php foreach($tg as $rows) {?>
                                <?php echo $rows["ma_tgia"]."  ".$bv["ma_tgia"] ?>
                                <?php if($rows["ma_tgia"] == $bv["ma_tgia"]) {?>
                                    <option value="<?php echo $rows["ma_tgia"] ?>" selected>
                                        <?php echo $rows["ten_tgia"] ?>
                                    </option>
                                <?php } else {?>
                                    <option value="<?php echo $rows["ma_tgia"] ?>" >
                                        <?php echo $rows["ten_tgia"] ?>
                                    </option>
                                <?php }?>
                            <?php } ?>

                        </select>
                    </div>

                    <div class="form-group  float-end ">
                        <input type="submit" value="Thêm" class="btn btn-success">
                        
                        <a href="article.php" class="btn btn-warning ">Quay lại</a>
                    </div>
                </form>

            </div>
        </div>
    </main>
    <?php require_once("../h_and_f/footer.php") ?>