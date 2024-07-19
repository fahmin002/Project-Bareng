<?= $this->extend('layout/page_layout'); ?>
<?= $this->section('content'); ?>

                <!-- <div class="breadcrumb dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle" role="button" href="#"
                        id="trail-dropdown-toggle">Browsing by Title&nbsp;<b class="caret"></b></a>
                    <ul aria-labelledby="trail-dropdown-toggle" role="menu" class="dropdown-menu">
                        <li role="presentation">
                            <a role="menuitem" href="/"><i aria-hidden="true"
                                    class="glyphicon glyphicon-home"></i>&nbsp;
                                IPB Repository</a>
                        </li>
                        <li role="presentation" class="disabled">
                            <a href="#" role="menuitem">Browsing by Title</a>
                        </li>
                    </ul>
                </div>
                <ul class="breadcrumb">
                    <li>
                        <i aria-hidden="true" class="glyphicon glyphicon-home"></i>&nbsp;
                        <a href="/">IPB Repository</a>
                    </li>
                    <li class="active">Browsing by Title</li>
                </ul>
            </div>
            <div class="hidden" id="no-js-warning-wrapper">
                <div id="no-js-warning">
                    <div class="notice failure">JavaScript is disabled for your browser. Some features of this site
                        may not work without it.</div>
                </div>
            </div> -->
                <h2 class="ds-div-head page-header first-page-header">Browsing by Title </h2>
                <form id="aspect_artifactbrowser_ConfigurableBrowse_div_browse-navigation" class="ds-interactive-div secondary navigation" action="browse" method="post" onsubmit="javascript:tSubmit(this);">
                    <select class="ds-select-field form-control alphabet-select" name="alphabet">
                        <option value="browse?rpp=20&amp;sort_by=1&amp;type=title&amp;etal=-1&amp;starts_with=0&amp;order=ASC">
                            Cari Berdasarkan Huruf</option>
                        <option value="browse?rpp=20&amp;sort_by=1&amp;type=title&amp;etal=-1&amp;starts_with=A&amp;order=ASC">
                            A</option>
                        <option value="browse?rpp=20&amp;sort_by=1&amp;type=title&amp;etal=-1&amp;starts_with=B&amp;order=ASC">
                            B</option>
                        <option value="browse?rpp=20&amp;sort_by=1&amp;type=title&amp;etal=-1&amp;starts_with=C&amp;order=ASC">
                            C</option>
                        <option value="browse?rpp=20&amp;sort_by=1&amp;type=title&amp;etal=-1&amp;starts_with=D&amp;order=ASC">
                            D</option>
                        <option value="browse?rpp=20&amp;sort_by=1&amp;type=title&amp;etal=-1&amp;starts_with=E&amp;order=ASC">
                            E</option>
                        <option value="browse?rpp=20&amp;sort_by=1&amp;type=title&amp;etal=-1&amp;starts_with=F&amp;order=ASC">
                            F</option>
                        <option value="browse?rpp=20&amp;sort_by=1&amp;type=title&amp;etal=-1&amp;starts_with=G&amp;order=ASC">
                            G</option>
                        <option value="browse?rpp=20&amp;sort_by=1&amp;type=title&amp;etal=-1&amp;starts_with=H&amp;order=ASC">
                            H</option>
                        <option value="browse?rpp=20&amp;sort_by=1&amp;type=title&amp;etal=-1&amp;starts_with=I&amp;order=ASC">
                            I</option>
                        <option value="browse?rpp=20&amp;sort_by=1&amp;type=title&amp;etal=-1&amp;starts_with=J&amp;order=ASC">
                            J</option>
                        <option value="browse?rpp=20&amp;sort_by=1&amp;type=title&amp;etal=-1&amp;starts_with=K&amp;order=ASC">
                            K</option>
                        <option value="browse?rpp=20&amp;sort_by=1&amp;type=title&amp;etal=-1&amp;starts_with=L&amp;order=ASC">
                            L</option>
                        <option value="browse?rpp=20&amp;sort_by=1&amp;type=title&amp;etal=-1&amp;starts_with=M&amp;order=ASC">
                            M</option>
                        <option value="browse?rpp=20&amp;sort_by=1&amp;type=title&amp;etal=-1&amp;starts_with=N&amp;order=ASC">
                            N</option>
                        <option value="browse?rpp=20&amp;sort_by=1&amp;type=title&amp;etal=-1&amp;starts_with=O&amp;order=ASC">
                            O</option>
                        <option value="browse?rpp=20&amp;sort_by=1&amp;type=title&amp;etal=-1&amp;starts_with=P&amp;order=ASC">
                            P</option>
                        <option value="browse?rpp=20&amp;sort_by=1&amp;type=title&amp;etal=-1&amp;starts_with=Q&amp;order=ASC">
                            Q</option>
                        <option value="browse?rpp=20&amp;sort_by=1&amp;type=title&amp;etal=-1&amp;starts_with=R&amp;order=ASC">
                            R</option>
                        <option value="browse?rpp=20&amp;sort_by=1&amp;type=title&amp;etal=-1&amp;starts_with=S&amp;order=ASC">
                            S</option>
                        <option value="browse?rpp=20&amp;sort_by=1&amp;type=title&amp;etal=-1&amp;starts_with=T&amp;order=ASC">
                            T</option>
                        <option value="browse?rpp=20&amp;sort_by=1&amp;type=title&amp;etal=-1&amp;starts_with=U&amp;order=ASC">
                            U</option>
                        <option value="browse?rpp=20&amp;sort_by=1&amp;type=title&amp;etal=-1&amp;starts_with=V&amp;order=ASC">
                            V</option>
                        <option value="browse?rpp=20&amp;sort_by=1&amp;type=title&amp;etal=-1&amp;starts_with=W&amp;order=ASC">
                            W</option>
                        <option value="browse?rpp=20&amp;sort_by=1&amp;type=title&amp;etal=-1&amp;starts_with=X&amp;order=ASC">
                            X</option>
                        <option value="browse?rpp=20&amp;sort_by=1&amp;type=title&amp;etal=-1&amp;starts_with=Y&amp;order=ASC">
                            Y</option>
                        <option value="browse?rpp=20&amp;sort_by=1&amp;type=title&amp;etal=-1&amp;starts_with=Z&amp;order=ASC">
                            Z</option>
                    </select>
                </form>
                <div class="mb-4">
                    <!-- <a href="#!"><img class="card-img-top" src="https://dummyimage.com/850x350/dee2e6/6c757d.jpg" alt="..." /></a> -->
                    <div class="card-body">
                        <div class="small text-muted">January 1, 2023</div>
                        <h2 class="card-title">Featured Post Title</h2>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing
                            elit. Reiciendis
                            aliquid atque, nulla? Quos cum ex quis soluta, a laboriosam. Dicta
                            expedita corporis animi
                            vero voluptate voluptatibus possimus, veniam magni quis!</p>
                        <!-- <a class="btn btn-primary" href="#!">Read more →</a> -->
                    </div>
                </div>
                <div class="mb-4">
                    <!-- <a href="#!"><img class="card-img-top" src="https://dummyimage.com/850x350/dee2e6/6c757d.jpg" alt="..." /></a> -->
                    <div class="card-body">
                        <div class="small text-muted">January 1, 2023</div>
                        <h2 class="card-title">Featured Post Title</h2>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing
                            elit. Reiciendis
                            aliquid atque, nulla? Quos cum ex quis soluta, a laboriosam. Dicta
                            expedita corporis animi
                            vero voluptate voluptatibus possimus, veniam magni quis!</p>
                        <!-- <a class="btn btn-primary" href="#!">Read more →</a> -->
                    </div>
                </div>
                <div class="mb-4">
                    <!-- <a href="#!"><img class="card-img-top" src="https://dummyimage.com/850x350/dee2e6/6c757d.jpg" alt="..." /></a> -->
                    <div class="card-body">
                        <div class="small text-muted">January 1, 2023</div>
                        <h2 class="card-title">Featured Post Title</h2>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing
                            elit. Reiciendis
                            aliquid atque, nulla? Quos cum ex quis soluta, a laboriosam. Dicta
                            expedita corporis animi
                            vero voluptate voluptatibus possimus, veniam magni quis!</p>
                        <!-- <a class="btn btn-primary" href="#!">Read more →</a> -->
                    </div>
                </div>


                <!-- Nested row for non-featured blog posts-->

                <!-- Pagination-->
                <!-- <nav aria-label="Pagination">
                    <hr class="my-0" />
                    <ul class="pagination justify-content-center my-4">
                        <li class="page-item disabled"><a class="page-link" href="#" tabindex="-1"
                                aria-disabled="true">Newer</a></li>
                        <li class="page-item active" aria-current="page"><a class="page-link" href="#!">1</a></li>
                        <li class="page-item"><a class="page-link" href="#!">2</a></li>
                        <li class="page-item"><a class="page-link" href="#!">3</a></li>
                        <li class="page-item disabled"><a class="page-link" href="#!">...</a></li>
                        <li class="page-item"><a class="page-link" href="#!">15</a></li>
                        <li class="page-item"><a class="page-link" href="#!">Older</a></li>
                    </ul>
                </nav> -->
            
<?= $this->endSection(); ?>


