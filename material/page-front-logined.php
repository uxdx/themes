<?php get_header(); ?>
<div class="fixed-action-btn">
    <a class="btn-floating btn-large red">
        <i class="large material-icons">mode_edit</i>
    </a>
    <ul>
        <li><a class="btn-floating red"><i class="material-icons">insert_chart</i></a></li>
        <li><a class="btn-floating yellow darken-1"><i class="material-icons">format_quote</i></a></li>
        <li><a class="btn-floating green"><i class="material-icons">publish</i></a></li>
        <li><a class="btn-floating blue"><i class="material-icons">attach_file</i></a></li>
    </ul>
</div>
<div class="section">
    <div class="row notice blue-grey lighten-4 mdc-elevation--z3">
        <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
            <path d="M0 0h24v24H0V0z" fill="none" />
            <path d="M11 7h2v2h-2zm0 4h2v6h-2zm1-9C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8z" /></svg>
        <span class="notice__message">코로나 조심해용</span>
    </div>
</div>
<div class="divider"></div>
<div class="section">
    <div class="container" id="dash-board">
        <h2 class="center light-green-text">Dash Board</h2>
        <br></br>
        <div class="row">
            <div class="col s12 l5">
                <div class="card grey lighten-5">
                    <div class="card-content blue-text text-darken-2">
                        <span class="card-title">Card Title</span>
                        <p>I am a very simple card. I am good at containing small bits of information.
                            I am convenient because I require little markup to use effectively.</p>
                    </div>
                    <div class="card-action">
                        <a href="#">This is a link</a>
                        <a href="#">This is a link</a>
                    </div>
                </div>
            </div>
            <div class="col s12 l4">
                <div class="card grey lighten-5">
                    <div class="card-content blue-text text-darken-2">
                        <span class="card-title">Card Title</span>
                        <p>I am a very simple card. I am good at containing small bits of information.
                            I am convenient because I require little markup to use effectively.</p>
                    </div>
                    <div class="card-action">
                        <a href="#">This is a link</a>
                        <a href="#">This is a link</a>
                    </div>
                </div>
            </div>
            <div class="col s12 l3">
                <div class="card grey lighten-5">
                    <div class="card-content blue-text text-darken-2">
                        <span class="card-title">Card Title</span>
                        <p>I am a very simple card. I am good at containing small bits of information.
                            I am convenient because I require little markup to use effectively.</p>
                    </div>
                    <div class="card-action">
                        <a href="#">This is a link</a>
                        <a href="#">This is a link</a>
                    </div>
                </div>
            </div>

        </div>
        <!-- End Row -->
        <div>
            <!-- Linear progress -->
            <section class="component-section linear-progress-section">
                <div class="section-header">
                    <a href="#" class="mdc-typography--button" target="_blank">
                        달려 달려~
                        <i class="material-icons">open_in_new</i>
                    </a>
                </div>
                <div class="component-wrapper linear-progress-component-wrapper">
                    <div role="progressbar" class="mdc-linear-progress mdc-linear-progress--indeterminate">
                        <div class="mdc-linear-progress__buffering-dots"></div>
                        <div class="mdc-linear-progress__buffer"></div>
                        <div class="mdc-linear-progress__bar mdc-linear-progress__primary-bar">
                            <span class="mdc-linear-progress__bar-inner"></span>
                        </div>
                        <div class="mdc-linear-progress__bar mdc-linear-progress__secondary-bar">
                            <span class="mdc-linear-progress__bar-inner"></span>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>
<?php get_footer(); ?>