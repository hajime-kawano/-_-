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
            <div class="collections">
                <div class="collection">
                    <div class="collection_series">
                        <img src="img/series_nova.jpg" alt="NOVAシリーズの写真">
                        <p class="series_name">NOVAシリーズ</p>
                    </div>
                    <div class="series_content">
                        <p class="series_explanation">存在感のあるロゴがかわいい、コスタ・ノバ一番人気のNOVA。</p>
                        <p class="series_explanation">リラックスした雰囲気でカレーやパスタなど毎日の食卓で大活躍！</p>
                        <p class="series_explanation">ホワイト、ターコイズ、デニム、サンドグレーの4色プラス、日本限定のエコグレス（リサイクル陶土）バージョンも。</p>
                    </div>
                </div>
                <div class="collection">
                    <div class="collection_series">
                        <img src="img/series_riviera.jpg" alt="RIVIERAシリーズの写真">
                        <p class="series_name">RIVIERAシリーズ</p>
                    </div>
                    <div class="series_content">
                        <p class="series_explanation">コスタ・ノバとフラワーアーティストChristian Tortu のコラボレーションで生まれたリヴィエラコレクション。
                        </p>
                        <p class="series_explanation">南仏の明るい自然を再現したような美しい色がテーブルを彩ります。意外に和食器とも相性◎。</p>
                        <p class="series_explanation">お手持ちの器とのコーディネートも楽しんで。</p>
                    </div>
                </div>
                <div class="collection">
                    <div class="collection_series">
                        <img src="img/series_pearl.jpg" alt="PEARLシリーズの写真">
                        <p class="series_name">PEARLシリーズ</p>
                    </div>
                    <div class="series_content">
                        <p class="series_explanation">エッジにパールをあしらったような繊細なデザインですが、コスタ・ノバのストーンウエアなら電子レンジも食洗機もOK！</p>
                        <p class="series_explanation">季節のフルーツやスイーツなど、盛り付けるものの美しさを引き立ててくれるラインです。</p>
                    </div>
                </div>
            </div>



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