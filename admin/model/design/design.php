<?php
global $db;
$design = $db->read("design", "*", "id = 1");

if ($design) {
    $id = $design['id'];
    $front_shop = $design['front_shop'];
    $back_shop = $design['back_shop'];
    $track_order = $design['track_order'];
    $cart = $design['cart'];
    $faq = $design['faq'];
    $intro = $design['intro'];
    $facebook = $design['facebook'];
    $github = $design['github'];
}
?>


<div class="col-sm-12 col-xl-12">
    <div class="bg-light rounded h-100 p-4">
        <h6 class="mb-4">Update Design</h6>
        <div class="card">
            <div class="card-body">
                <form action="index.php?p=design" method="post" enctype="multipart/form-data">
                    <!-- <div class="row mb-3">
                <label for="inputID" class="col-sm-2 col-form-label">ID</label>
                <div class="col-sm-10">
                    <input type="number" value="<?= $id ?>" placeholder="ID" name="ssid" class="form-control" id="inputID">
                </div>
            </div> -->
                    <div class="row mb-3">
                        <label for="frontLogo" class="col-sm-2 col-form-label">Front Logo</label>
                        <div class="col-sm-10">
                            <input type="file" name="big_profile" accept="image/*" class="form-control" id="inputBigImage">
                            <label>Current Image: <img class="m-3" src="./uploads/icons/<?= $front_shop ?>" width="100" alt="Current Image"> </label>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputBackLogoImage" class="col-sm-2 col-form-label">Back profile</label>
                        <div class="col-sm-10">
                            <input type="file" name="small_profile" accept="image/*" class="form-control" id="inputBigImage">
                            <label>Current Image: <img class="m-3" src="./uploads/icons/<?= $back_shop ?>" width="100" alt="Current Image"></label>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputtrackingorder" class="col-sm-2 col-form-label">Tracking Order Link</label>
                        <div class="col-sm-10">
                            <input type="text" placeholder="tracking order" value="<?= $track_order ?>" name="track_order" required class="form-control" id="inputtrackingorder">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputCart" class="col-sm-2 col-form-label">Cart Link</label>
                        <div class="col-sm-10">
                            <input type="text" placeholder="Cart" value="<?= $cart ?>" name="cart" required class="form-control" id="inputCart">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputFAQs" class="col-sm-2 col-form-label">FAQs Link</label>
                        <div class="col-sm-10">
                            <input type="text" placeholder="FAQs" value="<?= $faq ?>" name="faq" class="form-control" id="inputLink">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputIntro" class="col-sm-2 col-form-label">Intro</label>
                        <div class="col-sm-10">
                            <input type="text" placeholder="Intro" value="<?= $intro ?>" name="intro" required class="form-control" id="inputOrder">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputFB" class="col-sm-2 col-form-label">Facebook Link</label>
                        <div class="col-sm-10">
                            <input type="text" placeholder="FB" value="<?= $facebook ?>" name="facebook" required class="form-control" id="inputFB">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputGIT" class="col-sm-2 col-form-label">Github Link</label>
                        <div class="col-sm-10">
                            <input type="text" placeholder="GIT" value="<?= $github ?>" name="github" required class="form-control" id="inputGIT">
                        </div>
                    </div>

                    <button type="submit" name="update" class="btn btn-info">Update</button>
                </form>
            </div>
        </div>
    </div>
</div>