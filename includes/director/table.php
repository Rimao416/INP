<div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title mb-4">Utilisateurs reçemment ajoutés</h4>
                                        <div class="table-responsive">
                                            <?php echo get_all_users($connect,'ORDER BY id DESC LIMIT 5'); ?>
                                        </div>
                                        <a href="utilisateurs.php">Voir tous</a>
                                        
                                        <!-- end table-responsive -->
                                    </div>
                                </div>