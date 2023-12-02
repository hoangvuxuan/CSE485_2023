<main class="container-fluid mt-5">
    <h3 class="text-center text-uppercase mb-3 text-primary">TOP bài hát yêu thích</h3>
    <div class="row">
        <div class="col-sm-3">
            <div class="card mb-2" style="width: 100%;">
                <img src="images/songs/cay-la-va-gio.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-title text-center">
                        <a href="./detail.php" onclick="printID(this.id)" class="text-decoration-none" id="Cây và gió">Cây, lá và gió</a>
                    </p>
                </div>
            </div>
        </div>

        <div class="col-sm-3">
            <div class="card mb-2" style="width: 100%;">
                <img src="images/songs/cuoc-song-men-thuong.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-title text-center">
                        <a href="./detail1.php" class="text-decoration-none" id="Cuộc sống mến thương" onclick="printID(this.id)">Cuộc sống mến thương</a>
                    </p>
                </div>
            </div>
        </div>

        <div class="col-sm-3">
            <div class="card mb-2" style="width: 100%;">
                <img src="images/songs//long-me.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-title text-center">
                        <a href="./detail2.php" onclick="printID(this.id)" class="text-decoration-none" id="Lòng mẹ">Lòng mẹ</a>
                    </p>
                </div>
            </div>
        </div>

        <div class="col-sm-3">
            <div class="card mb-2" style="width: 100%;">
                <img src="images/songs/phoi-phai.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-title text-center">
                        <a href="./detail3.php" class="text-decoration-none" id="Phôi pha" onclick="printID(this.id)">Phôi pha</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</main>
<script>
    function printID(id) {
        var xhr = new XMLHttpRequest();
        xhr.open('GET', 'your_php_script.php?id=' + id, true);
        xhr.send();
    }
</script>
<?php
include "config.php";
if (isset($_GET['id'])) {
    $idValue = $_GET['id'];
    $GLOBALS = $idValue;
}
?>