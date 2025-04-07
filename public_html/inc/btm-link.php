    <section class="bottom-link<?php if(!isset($no_btm_spacer)) echo ' top-spacer'; ?>">
        <ul class="btm-link">
<?php if ($btm_link=="onlyCareer" || $btm_link=="all"): ?>
            <li class="btm-link-career">
                <a href="/recruit/">
                    <p class="subttl">Career</p>
                    <h3 class="headttl">採用情報</h3>
                    <p class="btm-link-desc">自由な社風の中でスピード感を持って挑戦し、共に成長していけるメンバーを求めています。</p>
                    <p class="link-view">View Detail</p>
                </a>
            </li>
<?php endif; ?>
<?php if ($btm_link=="onlyContact" || $btm_link=="all"): ?>
            <li class="btm-link-contact">
                <a href="/contact/form/">
                    <p class="subttl">Contact</p>
                    <h3 class="headttl">お問合せ</h3>
                    <p class="btm-link-desc">FleGrowthの製品やサービスに関するお問合せやご意見などは、こちらのフォームからお問合せ下さい。</p>
                    <p class="link-view">View Detail</p>
                </a>
            </li>
<?php endif; ?>
        </ul>
    </section>
