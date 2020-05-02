<?php get_header(); ?>
<div class="section" id="contact-form--section">
    <div class="container">
        <form class="col s12">
            <div class="row">
                <div class="s4 l4">
                    성함(회사명)
                </div>
                <div class="input-field col s8 l8">
                    <input id="last_name" type="text" class="validate">
                    <label for="last_name">성함</label>
                </div>
            </div>
            <div class="row">
                <div class="s4">
                    <h4>이메일</h4>
                </div>

                <div class="input-field col s12">
                    <input id="email" type="email" class="validate">
                    <label for="email">E-Mail</label>
                </div>
            </div>
        </form>
    </div>
</div>

<?php get_footer();?>