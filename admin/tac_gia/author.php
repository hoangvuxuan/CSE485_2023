<?php 
require_once("../h_and_f/header.php");
require_once("../connect.php");
require_once("../func_php/select_delete.php");
?>

<?php
$tl =get_table("tacgia", $conn);
?>
    <main class="container mt-5 mb-5">
        <!-- <h3 class="text-center text-uppercase mb-3 text-primary">CẢM NHẬN VỀ BÀI HÁT</h3> -->
        <div class="row">
            <div class="col-sm">
                <a href="add_author.php" class="btn btn-success">Thêm mới</a>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Tên thể loại</th>
                            <th>Sửa</th>
                            <th>Xóa</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($tl as $rows){?>
                        <tr>
                            <th scope="row">
                                <?php echo $rows["ma_tgia"] ?>
                            </th>
                            <td>
                                <?php echo $rows["ten_tgia"] ?>
                            </td>
                            <td>
                                <a href="edit_author.php?<?php echo 'id='.$rows["ma_tgia"].'&name='.$rows["ten_tgia"]?>"><i class="fa-solid fa-pen-to-square"></i></a>
                            </td>
                            <td>
                                <a href="delete_author.php?<?php echo 'id='.$rows["ma_tgia"] ?>"><i class="fa-solid fa-trash"></i></a>
                            </td>
                        </tr>
                        <?php } ?>
                        
                       
                    </tbody>
                </table>
            </div>
        </div>
    </main>
<?php require_once("../h_and_f/footer.php") ?>