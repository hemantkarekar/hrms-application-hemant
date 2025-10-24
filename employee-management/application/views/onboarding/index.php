

<div class="page-content">

    <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
        <div>
            <h4 class="mb-3 mb-md-0">Welcome to Dashboard</h4>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Horizontal wizard</h4>
                    <p class="text-muted mb-3">Read the <a href="http://www.jquery-steps.com/GettingStarted" target="_blank"> Official jQuery Steps Documentation </a>for a full list of instructions and other options.</p>
                    <div id="wizard" role="application" class="wizard clearfix">
                        <div class="steps clearfix">
                            <ul role="tablist">
                                <li role="tab" class="first current" aria-disabled="false" aria-selected="true"><a id="wizard-t-0" href="#wizard-h-0" aria-controls="wizard-p-0"><span class="current-info audible">current step: </span><span class="number">1.</span> First Step</a></li>
                                <li role="tab" class="disabled" aria-disabled="true"><a id="wizard-t-1" href="#wizard-h-1" aria-controls="wizard-p-1"><span class="number">2.</span> Second Step</a></li>
                                <li role="tab" class="disabled" aria-disabled="true"><a id="wizard-t-2" href="#wizard-h-2" aria-controls="wizard-p-2"><span class="number">3.</span> Third Step</a></li>
                                <li role="tab" class="disabled last" aria-disabled="true"><a id="wizard-t-3" href="#wizard-h-3" aria-controls="wizard-p-3"><span class="number">4.</span> Fourth Step</a></li>
                            </ul>
                        </div>
                        <div class="content clearfix">
                            <h2 id="wizard-h-0" tabindex="-1" class="title current">First Step</h2>
                            <section id="wizard-p-0" role="tabpanel" aria-labelledby="wizard-h-0" class="body current" aria-hidden="false">
                                <h4>First Step</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ut nulla nunc. Maecenas arcu sem, hendrerit a tempor quis,
                                    sagittis accumsan tellus. In hac habitasse platea dictumst. Donec a semper dui. Nunc eget quam libero. Nam at felis metus.
                                    Nam tellus dolor, tristique ac tempus nec, iaculis quis nisi.</p>
                            </section>

                            <h2 id="wizard-h-1" tabindex="-1" class="title">Second Step</h2>
                            <section id="wizard-p-1" role="tabpanel" aria-labelledby="wizard-h-1" class="body" aria-hidden="true" style="display: none;">
                                <h4>Second Step</h4>
                                <p>Donec mi sapien, hendrerit nec egestas a, rutrum vitae dolor. Nullam venenatis diam ac ligula elementum pellentesque.
                                    In lobortis sollicitudin felis non eleifend. Morbi tristique tellus est, sed tempor elit. Morbi varius, nulla quis condimentum
                                    dictum, nisi elit condimentum magna, nec venenatis urna quam in nisi. Integer hendrerit sapien a diam adipiscing consectetur.
                                    In euismod augue ullamcorper leo dignissim quis elementum arcu porta. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                    Vestibulum leo velit, blandit ac tempor nec, ultrices id diam. Donec metus lacus, rhoncus sagittis iaculis nec, malesuada a diam.
                                    Donec non pulvinar urna. Aliquam id velit lacus.</p>
                            </section>

                            <h2 id="wizard-h-2" tabindex="-1" class="title">Third Step</h2>
                            <section id="wizard-p-2" role="tabpanel" aria-labelledby="wizard-h-2" class="body" aria-hidden="true" style="display: none;">
                                <h4>Third Step</h4>
                                <p>Morbi ornare tellus at elit ultrices id dignissim lorem elementum. Sed eget nisl at justo condimentum dapibus. Fusce eros justo,
                                    pellentesque non euismod ac, rutrum sed quam. Ut non mi tortor. Vestibulum eleifend varius ullamcorper. Aliquam erat volutpat.
                                    Donec diam massa, porta vel dictum sit amet, iaculis ac massa. Sed elementum dui commodo lectus sollicitudin in auctor mauris
                                    venenatis.</p>
                            </section>

                            <h2 id="wizard-h-3" tabindex="-1" class="title">Fourth Step</h2>
                            <section id="wizard-p-3" role="tabpanel" aria-labelledby="wizard-h-3" class="body" aria-hidden="true" style="display: none;">
                                <h4>Fourth Step</h4>
                                <p>Quisque at sem turpis, id sagittis diam. Suspendisse malesuada eros posuere mauris vehicula vulputate. Aliquam sed sem tortor.
                                    Quisque sed felis ut mauris feugiat iaculis nec ac lectus. Sed consequat vestibulum purus, imperdiet varius est pellentesque vitae.
                                    Suspendisse consequat cursus eros, vitae tempus enim euismod non. Nullam ut commodo tortor.</p>
                            </section>
                        </div>
                        <div class="actions clearfix">
                            <ul role="menu" aria-label="Pagination">
                                <li class="disabled" aria-disabled="true"><a href="#previous" role="menuitem">Previous</a></li>
                                <li aria-hidden="false" aria-disabled="false"><a href="#next" role="menuitem">Next</a></li>
                                <li aria-hidden="true" style="display: none;"><a href="#finish" role="menuitem">Finish</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        $("#wizard").steps({
            headerTag: "h2",
            bodyTag: "section",
            transitionEffect: "slideLeft",
            autoFocus: true,
            onFinished: function (event, currentIndex) {
                alert("Wizard Completed!");
            }
        });
    });
</script>