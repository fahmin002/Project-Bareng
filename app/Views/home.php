<?= $this->extend('layout/page_layout'); ?>
<?= $this->section('content'); ?>
<!-- Blog entries-->
<!-- Featured blog post-->
<div class="col-xs-12 col-sm-12 col-md-9 main-content">
    <div>
        <h2 class="ds-div-head text-primary page-header">Main Collections</h2>
        <div id="" class="ds-static-div primary">
            <p class="ds-paragraph">Select a main collection to browse its collections.</p>
            <div id=""
                class="">
                <div class="ds-static-div row community-browser-row">
                    <div class="ds-static-div col-xs-10 col-sm-12 col-sm-offset-0 list-mode">
                        <a href="/handle/123456789/9" name="community-browser-link">Dissertations and Theses</a>
                    </div>
                </div>
            </div>
        </div>
        <div id="aspect_discovery_SiteRecentSubmissions_div_site-home" class="ds-static-div primary repository">
            <h2 class="ds-div-head page-header">Recently Added</h2>
            <div id="aspect_discovery_SiteRecentSubmissions_div_site-recent-submission"
                class="ds-static-div secondary recent-submission">
                <ul class="ds-artifact-list list-unstyled">
                    <!-- External Metadata URL: cocoon://metadata/handle/123456789/153264/mets.xml?sections=dmdSec,fileSec&fileGrpTypes=THUMBNAIL-->
                    <li class="ds-artifact-item odd">
                        <div class="artifact-description">
                            <h4 class="artifact-title">
                                <a href="/handle/123456789/153264">Pemberdayaan Umkm Di Era Industri 4.0</a><span
                                    class="Z3988"
                                    title="ctx_ver=Z39.88-2004&amp;rft_val_fmt=info%3Aofi%2Ffmt%3Akev%3Amtx%3Adc&amp;rft_id=http%3A%2F%2Frepository.ipb.ac.id%2Fhandle%2F123456789%2F153264&amp;rfr_id=info%3Asid%2Fdspace.org%3Arepository&amp;">
                                    ﻿
                                </span>
                            </h4>
                            <div class="artifact-info">
                                <span class="author h4"><small><span>Farmayanti, Narni</span></small></span> <span
                                    class="publisher-date h4"><small>(<span class="date">2024</span>)</small></span>
                            </div>
                            <div class="artifact-abstract">Usaha Mikro, Kecil, dan Menengah (UMKM) memiliki peran yang
                                sangat penting dalam perekonomian Indonesia. UMKM menyumbang signifikan terhadap Produk
                                Domestik Bruto (PDB) dan membuka banyak lapangan pekerjaan. Namun, era ...</div>
                        </div>
                    </li>
                    <!-- External Metadata URL: cocoon://metadata/handle/123456789/153263/mets.xml?sections=dmdSec,fileSec&fileGrpTypes=THUMBNAIL-->
                    <!-- External Metadata URL: cocoon://metadata/handle/123456789/153262/mets.xml?sections=dmdSec,fileSec&fileGrpTypes=THUMBNAIL-->
                    <!-- External Metadata URL: cocoon://metadata/handle/123456789/153261/mets.xml?sections=dmdSec,fileSec&fileGrpTypes=THUMBNAIL-->
                    <!-- External Metadata URL: cocoon://metadata/handle/123456789/153260/mets.xml?sections=dmdSec,fileSec&fileGrpTypes=THUMBNAIL-->
                </ul>
                <p id="aspect_discovery_SiteRecentSubmissions_p_recent-submission-view-more"
                    class="ds-paragraph recentSubmissionViewMore">
                    <a href="/recent-submissions">View more</a>
                </p>
            </div>
        </div>
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
<!-- Side widgets-->
<?= $this->endSection(); ?>