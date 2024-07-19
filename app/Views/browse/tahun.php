<?= $this->extend('layout/page_layout'); ?>
<?= $this->section('content'); ?>
                <div class="year">
                    <div class="col-xs-5 col-sm-3">
                        <select id="aspect_artifactbrowser_ConfigurableBrowse_field_year" class="ds-select-field form-control" name="year">
                            <option value="-1">(Choose year)</option>
                            <option value="2024">2024</option>
                            <option value="2023">2023</option>
                            <option value="2022">2022</option>
                            <option value="2021">2021</option>
                            <option value="2020">2020</option>
                            <option value="2019">2019</option>
                            <option value="2018">2018</option>
                            <option value="2017">2017</option>
                            <option value="2016">2016</option>
                            <option value="2015">2015</option>
                            <option value="2014">2014</option>
                            <option value="2013">2013</option>
                            <option value="2012">2012</option>
                            <option value="2011">2011</option>
                            <option value="2010">2010</option>
                            <option value="2005">2005</option>
                            <option value="2000">2000</option>
                            <option value="1995">1995</option>
                            <option value="1990">1990</option>
                            <option value="1980">1980</option>
                            <option value="1970">1970</option>
                            <option value="1960">1960</option>
                            <option value="1950">1950</option>
                            <option value="1940">1940</option>
                            <option value="1930">1930</option>
                        </select>
                    </div>
                    <div class="col-xs-5 col-sm-5 mt-2">
                        <div class="cari">
                            <div class="rounded input-group">
                                <input id="aspect_artifactbrowser_ConfigurableBrowse_field_starts_with" class="ds-text-field form-control" placeholder="Or type in a year: " name="starts_with" type="text" value="" title="Browse for items that are from the given year."><span class="input-group-btn"><button id="aspect_artifactbrowser_ConfigurableBrowse_field_submit" class="ds-button-field btn btn-default" name="submit" type="submit">Go</button></span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Featured blog post-->
                <div class="mb-4">
                    <!-- <a href="#!"><img class="card-img-top" src="https://dummyimage.com/850x350/dee2e6/6c757d.jpg" alt="..." /></a> -->
                    <div class="card-body">

                        <h2 class="card-title">Featured Post Title</h2>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis
                            aliquid atque, nulla? Quos cum ex quis soluta, a laboriosam. Dicta expedita corporis
                            animi
                            vero voluptate voluptatibus possimus, veniam magni quis!</p>
                        <!-- <a class="btn btn-primary" href="#!">Read more →</a> -->
                    </div>
                </div>
                <div class="mb-4">
                    <!-- <a href="#!"><img class="card-img-top" src="https://dummyimage.com/850x350/dee2e6/6c757d.jpg" alt="..." /></a> -->
                    <div class="card-body">
                        <div class="small text-muted">January 1, 2023</div>
                        <h2 class="card-title">Featured Post Title</h2>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis
                            aliquid atque, nulla? Quos cum ex quis soluta, a laboriosam. Dicta expedita corporis animi
                            vero voluptate voluptatibus possimus, veniam magni quis!</p>
                        <!-- <a class="btn btn-primary" href="#!">Read more →</a> -->
                    </div>
                </div>
                <div class="mb-4">
                    <!-- <a href="#!"><img class="card-img-top" src="https://dummyimage.com/850x350/dee2e6/6c757d.jpg" alt="..." /></a> -->
                    <div class="card-body">
                        <div class="small text-muted">January 1, 2023</div>
                        <h2 class="card-title">Featured Post Title</h2>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis
                            aliquid atque, nulla? Quos cum ex quis soluta, a laboriosam. Dicta expedita corporis animi
                            vero voluptate voluptatibus possimus, veniam magni quis!</p>
                        <!-- <a class="btn btn-primary" href="#!">Read more →</a> -->
                    </div>
                </div>
<?= $this->endSection(); ?>
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

