<div id="sidebar-primary" class="sidebar">
    <!-- check  to see if the sidebar is active; if it is,
         grab the content. If not, just make an empty block with
       some useless placeholder text. -->
    <?php if ( is_active_sidebar( 'primary' ) ) : ?>

	<?php dynamic_sidebar( 'primary' ); ?>

    <?php else : ?>

	<div id="sidebar">
            <h2 class="sidebartitle">Other Resources</h2>
            <h3> UNESCO </h3>
            <link> http://whc.unesco.org/en/list/1513 </link>
            <h3> FACEBOOK </h3>
            <link> https://www.facebook.com/pages/Khangchendzonga-National-Park/103776976328344 </link>
            <h3> TRIP ADVISOR </h3>
            <link> https://www.tripadvisor.ca/ShowUserReviews-g659796-d1764036-r344922996-Khangchendzonga_Biosphere_Reserve-Gangtok_East_Sikkim_Sikkim.html </link>
        </div>

    <?php endif; ?>

</div>
