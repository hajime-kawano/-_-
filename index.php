<?php include 'header.php'; ?>


<!--メインビジュアル-->
<?php
if ($current_date <= $switch_date) {
    include 'main_visual_before.php';
} else {
    include 'main_visual_after.php';
}
?>

<!--メイン-->
<main>

    <!--クーポン-->
    <?php
    if ($current_date <= $switch_date) {
        include 'coupon_before.php';
    } else {
        include 'coupon_after.php';
    }
    ?>
    <!--COSTA NOVA-->
    <section class="overview_wrapper">
        <h2 class="overview_title">COSTA NOVA</h2>
        <div class="features_wrapper">
            <div class="features">

                <?php
                if ($current_date <= $switch_date) {
                    include 'costanova_before.php';
                } else {
                    include 'costanova_after.php';
                }
                ?>

            </div>
        </div>
    </section>

    <!--COLLECTIONS-->
    <section class="overview_wrapper">
        <h2 class="overview_title">COLLECTIONS</h2>
        <div class="overview_inner">
            <div class="overview_explanation">
                <p class="pc_20px  sp_left">コスタ・ノバの豊富なラインナップからおすすめのコレクションをご紹介します。</p>
                <p class="pc_16px">※コスタ・ノバ全シリーズがキャンペーン対象です。</p>
            </div>

            <!--修正必須768px直前の改行-->
            <?php
                if ($current_date <= $switch_date) {
                    include 'series_before.php';
                } else {
                    include 'series_after.php';
                }
                ?>

            <!--MOREボタン-->
            <div class="more_button">
                <div class="more_button_inner">
                    <a href="#">MORE</a>
                </div>
            </div>
            <div class="collection_cautionary_note">
                注意点：コスタ・ノバの製品は手作業の工程が入ることで一つ一つ表情が異なるのが魅力の商品ですが、製造工程の特性上、<br>
                *一枚ごとに釉薬のかかり方の違い、模様・色味の違い<br>
                *表面の細かい傷・黒点・ピンホールや、裏面の高台の小さな欠け<br>
                が見られることもございます。これらの商品は不良品ではございませんので、予めご了承をいただけますようお願い致します。
            </div>
        </div>
    </section>

</main>

<?php include 'footer.php'; ?>