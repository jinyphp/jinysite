<x-theme>

</x-theme>


        <meta charset="utf-8" />
        <title>Editors | Hyper - Responsive Bootstrap 5 Admin Dashboard</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />

        <!-- App favicon -->


        <!-- SimpleMDE css -->
        <link href="assets/vendor/simplemde/simplemde.min.css" rel="stylesheet" type="text/css" />

        <!-- Quill css -->
        <link href="assets/vendor/quill/quill.core.css" rel="stylesheet" type="text/css" />
        <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet" type="text/css" />
        <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet" type="text/css" />

        <!-- Theme Config Js -->


        <!-- App css -->




        <!-- Begin page -->
        <div class="wrapper">


            <!-- ========== Topbar Start ========== -->
            @theme("_partials/topbar")
            <!-- ========== Topbar End ========== -->

            <!-- ========== Left Sidebar Start ========== -->
            @theme("_sidebar/sidebar")
            <!-- ========== Left Sidebar End ========== -->

            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="content-page">
                <div class="content">

                    <!-- Start Content-->
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Hyper</a></li>
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Forms</a></li>
                                            <li class="breadcrumb-item active">Editors</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Editors</h4>
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">
                                            <div class="mb-2">
                                                <h4 class="header-title mt-2">Quill Editor</h4>
                                                <p class="text-muted font-14">Snow is a clean, flat toolbar theme.</p>

                                                <ul class="nav nav-tabs nav-bordered mb-3">
                                                    <li class="nav-item">
                                                        <a href="#hint-emoji-preview" data-bs-toggle="tab" aria-expanded="false" class="nav-link active">
                                                            Preview
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="#hint-emoji-code" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
                                                            Code
                                                        </a>
                                                    </li>
                                                </ul> <!-- end nav-->
                                                <div class="tab-content">
                                                    <div class="tab-pane show active" id="hint-emoji-preview">
                                                        <div id="snow-editor" style="height: 300px;">
                                                            <h3><span class="ql-size-large">Hello World!</span></h3>
                                                            <p><br></p>
                                                            <h3>This is an simple editable area.</h3>
                                                            <p><br></p>
                                                            <ul>
                                                                <li>
                                                                    Select a text to reveal the toolbar.
                                                                </li>
                                                                <li>
                                                                    Edit rich document on-the-fly, so elastic!
                                                                </li>
                                                            </ul>
                                                            <p><br></p>
                                                            <p>
                                                                End of simple area
                                                            </p>
                                                        </div><!-- end Snow-editor-->
                                                    </div> <!-- end preview-->

                                                    <div class="tab-pane" id="hint-emoji-code">
                                                        <p>Please include following css file at <code>head</code> element</p>
                                                        <pre>
                                                            <span class="html escape">
                                                                &lt;!-- Quill css --&gt;
                                                                &lt;link href=&quot;assets/vendor/quill/quill.core.css&quot; rel=&quot;stylesheet&quot; type=&quot;text/css&quot; /&gt;
                                                                &lt;link href=&quot;assets/vendor/quill/quill.snow.css&quot; rel=&quot;stylesheet&quot; type=&quot;text/css&quot; /&gt;
                                                            </span>
                                                        </pre> <!-- end highlight-->

                                                        <p>Make sure to include following js files at end of <code>body</code> element</p>

                                                        <pre class="mb-0">
                                                            <span class="html escape">
                                                                &lt;!-- quill js --&gt;
                                                                &lt;script src=&quot;assets/vendor/quill/quill.min.js&quot;&gt;&lt;/script&gt;
                                                                &lt;!-- quill Init js--&gt;
                                                                &lt;script src=&quot;assets/js/pages/demo.quilljs.js&quot;&gt;&lt;/script&gt;
                                                            </span>
                                                        </pre> <!-- end highlight-->
                                                        <pre class="mb-0">
                                                            <span class="html escape">
                                                                &lt;!-- HTML --&gt;
                                                                &lt;div id=&quot;snow-editor&quot; style=&quot;height: 300px;&quot;&gt;
                                                                    &lt;h3&gt;&lt;span class=&quot;ql-size-large&quot;&gt;Hello World!&lt;/span&gt;&lt;/h3&gt;
                                                                    &lt;p&gt;&lt;br&gt;&lt;/p&gt;
                                                                    &lt;h3&gt;This is an simple editable area.&lt;/h3&gt;
                                                                    &lt;p&gt;&lt;br&gt;&lt;/p&gt;
                                                                    &lt;ul&gt;
                                                                        &lt;li&gt;
                                                                            Select a text to reveal the toolbar.
                                                                        &lt;/li&gt;
                                                                        &lt;li&gt;
                                                                            Edit rich document on-the-fly, so elastic!
                                                                        &lt;/li&gt;
                                                                    &lt;/ul&gt;
                                                                    &lt;p&gt;&lt;br&gt;&lt;/p&gt;
                                                                    &lt;p&gt;
                                                                        End of simple area
                                                                    &lt;/p&gt;
                                                                &lt;/div&gt;
                                                            </span>
                                                        </pre> <!-- end highlight-->
                                                    </div> <!-- end preview code-->
                                                </div> <!-- end tab-content-->

                                            </div>
                                        </li>

                                        <li class="list-group-item">
                                            <div class="mb-2">
                                                <h5 class="mb-1">Bubble Editor</h5>
                                                <p class="text-muted font-14">Bubble is a simple tooltip based theme.</p>

                                                <ul class="nav nav-tabs nav-bordered mb-3">
                                                    <li class="nav-item">
                                                        <a href="#hint-mentions-preview" data-bs-toggle="tab" aria-expanded="false" class="nav-link active">
                                                            Preview
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="#hint-mentions-code" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
                                                            Code
                                                        </a>
                                                    </li>
                                                </ul> <!-- end nav-->
                                                <div class="tab-content">
                                                    <div class="tab-pane show active" id="hint-mentions-preview">
                                                        <div id="bubble-editor" style="height: 300px;">
                                                            <h3><span class="ql-size-large">Hello World!</span></h3>
                                                            <p><br></p>
                                                            <h3>This is an simple editable area.</h3>
                                                            <p><br></p>
                                                            <ul>
                                                                <li>
                                                                    Select a text to reveal the toolbar.
                                                                </li>
                                                                <li>
                                                                    Edit rich document on-the-fly, so elastic!
                                                                </li>
                                                            </ul>
                                                            <p><br></p>
                                                            <p>
                                                                End of simple area
                                                            </p>
                                                        </div> <!-- end Snow-editor-->
                                                    </div> <!-- end preview-->

                                                    <div class="tab-pane" id="hint-mentions-code">
                                                        <p>Please include following css file at <code>head</code> element</p>
                                                        <pre>
                                                            <span class="html escape">
                                                                &lt;!-- Quill css --&gt;
                                                                &lt;link href=&quot;assets/vendor/quill/quill.bubble.css&quot; rel=&quot;stylesheet&quot; type=&quot;text/css&quot; /&gt;
                                                            </span>
                                                        </pre> <!-- end highlight-->

                                                        <pre class="mb-0">
                                                            <span class="html escape">
                                                                &lt;div id=&quot;bubble-editor&quot; style=&quot;height: 300px;&quot;&gt;
                                                                    &lt;h3&gt;&lt;span class=&quot;ql-size-large&quot;&gt;Hello World!&lt;/span&gt;&lt;/h3&gt;
                                                                    &lt;p&gt;&lt;br&gt;&lt;/p&gt;
                                                                    &lt;h3&gt;This is an simple editable area.&lt;/h3&gt;
                                                                    &lt;p&gt;&lt;br&gt;&lt;/p&gt;
                                                                    &lt;ul&gt;
                                                                        &lt;li&gt;
                                                                            Select a text to reveal the toolbar.
                                                                        &lt;/li&gt;
                                                                        &lt;li&gt;
                                                                            Edit rich document on-the-fly, so elastic!
                                                                        &lt;/li&gt;
                                                                    &lt;/ul&gt;
                                                                    &lt;p&gt;&lt;br&gt;&lt;/p&gt;
                                                                    &lt;p&gt;
                                                                        End of simple area
                                                                    &lt;/p&gt;
                                                                &lt;/div&gt;
                                                            </span>
                                                        </pre> <!-- end highlight-->
                                                    </div> <!-- end preview code-->
                                                </div> <!-- end tab-content-->

                                            </div>
                                        </li>
                                    </ul> <!-- end list-->
                                </div> <!-- end card-->
                            </div> <!-- end col-->
                        </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">SimpleMDE</h4>
                                        <p class="text-muted font-14">SimpleMDE is a light-weight, simple, embeddable, and beautiful JS markdown editor</p>

                                        <ul class="nav nav-tabs nav-bordered mb-3">
                                            <li class="nav-item">
                                                <a href="#simplemde-preview" data-bs-toggle="tab" aria-expanded="false" class="nav-link active">
                                                    Preview
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#simplemde-code" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
                                                    Code
                                                </a>
                                            </li>
                                        </ul> <!-- end nav-->
                                        <div class="tab-content">
                                            <div class="tab-pane show active" id="simplemde-preview">
                                                <textarea id="simplemde1"></textarea>
                                            </div> <!-- end preview-->

                                            <div class="tab-pane" id="simplemde-code">
                                                <p>Please include following css file at <code>head</code> element</p>
                                                <pre>
                                                    <span class="html escape">
                                                        &lt;!-- SimpleMDE css --&gt;
                                                        &lt;link href=&quot;assets/vendor/simplemde/simplemde.min.css&quot; rel=&quot;stylesheet&quot; type=&quot;text/css&quot; /&gt;
                                                    </span>
                                                </pre> <!-- end highlight-->

                                                <p>Make sure to include following js files at end of <code>body</code> element</p>

                                                <pre class="mb-0">
                                                    <span class="html escape">
                                                        &lt;!-- SimpleMDE js --&gt;
                                                        &lt;script src=&quot;assets/vendor/simplemde/simplemde.min.js&quot;&gt;&lt;/script&gt;
                                                        &lt;!-- SimpleMDE demo --&gt;
                                                        &lt;script src=&quot;assets/js/pages/demo.simplemde.js&quot;&gt;&lt;/script&gt;
                                                    </span>
                                                </pre> <!-- end highlight-->

                                                <pre class="mb-0">
                                                    <span class="html escape">
                                                        &lt;!-- HTML --&gt;
                                                        &lt;textarea id=&quot;simplemde1&quot;&gt;&lt;/textarea&gt;
                                                    </span>
                                                </pre> <!-- end highlight-->
                                            </div> <!-- end preview code-->
                                        </div> <!-- end tab-content-->

                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div> <!-- end col-->
                        </div>
                        <!-- end row -->

                    </div> <!-- container -->

                </div> <!-- content -->

                <!-- Footer Start -->
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6">
                                <script>document.write(new Date().getFullYear())</script> © Hyper - Coderthemes.com
                            </div>
                            <div class="col-md-6">
                                <div class="text-md-end footer-links d-none d-md-block">
                                    <a href="javascript: void(0);">About</a>
                                    <a href="javascript: void(0);">Support</a>
                                    <a href="javascript: void(0);">Contact Us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
                <!-- end Footer -->

            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->

        </div>
        <!-- END wrapper -->

        <!-- Theme Settings -->
        @theme("_partials/theme-setting")

        <!-- Vendor js -->


        <!-- Code Highlight js -->
        <script src="assets/vendor/highlightjs/highlight.pack.min.js"></script>
        <script src="assets/js/hyper-syntax.js"></script>

        <!-- Quill Editor js -->
        <script src="assets/vendor/quill/quill.min.js"></script>

        <!-- Quill Demo js -->
        <script src="assets/js/pages/demo.quilljs.js"></script>

        <!-- Simplemde Editor js -->
        <script src="assets/vendor/simplemde/simplemde.min.js"></script>

        <!-- Simplemde Demo js -->
        <script src="assets/js/pages/demo.simplemde.js"></script>

        <!-- App js -->


