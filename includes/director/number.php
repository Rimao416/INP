<div class="row">
            <div class="col-md-6 col-xl-3">
                <div class="card">
                    <div class="card-body">
                        <div>
                            <h4 class="mb-1 mt-1"><span data-plugin="counterup"><?=get_total_records($connect,'utilisateurs',);?></span></h4>
                            <p class="text-muted mb-0">Utilisateurs</p>
                        </div>

                        <div class="float-end mt-2">
                            <div id="total-revenue-chart"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end col-->
            <div class="col-md-6 col-xl-3">
                <div class="card">
                    <div class="card-body">
                        <div>
                            <h4 class="mb-1 mt-1"><span data-plugin="counterup"><?=get_gouv_stat($connect,'utilisateurs','gouvernorat')?>/24</span></h4>
                            <p class="text-muted mb-0">Gouvernorats Affectés</p>
                        </div>

                        <div class="float-end mt-2">
                            <div id="orders-chart"> </div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end col-->
            <div class="col-md-6 col-xl-3">
                <div class="card">
                    <div class="card-body">
                        <div>
                            <h4 class="mb-1 mt-1"><span data-plugin="counterup"><?=get_gouv_stat($connect,'utilisateurs','pays')?></span></h4>
                            <p class="text-muted mb-0">Nationalités Affectées</p>
                        </div>

                        <div class="float-end mt-2">
                            <div id="customers-chart"> </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end col-->
            <div class="col-md-6 col-xl-3">
                <div class="card">
                    <div class="card-body">
                        <div>
                            <h4 class="mb-1 mt-1"><span data-plugin="counterup"><?=get_gouv_stat($connect,'utilisateurs','ville')?></span></h4>
                            <p class="text-muted mb-0">Villes Affectées</p>
                        </div>

                        <div class="float-end mt-2">
                            <div id="growth-chart"></div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end col-->
        </div>