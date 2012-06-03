
    <div class="container-wrapper" id="anime"><!-- dark blue rollovers -->
        <div class="container" >
            <div class="row">
                <div class="span3 panel_acta">
		  <h2><?php __("Against ACTA..."); ?></h2>
                    <dl class="bulletpoints">
                        <?php $id = 1 ?>
                        <?php /* in texts.php */ foreach($actapoints as $point => $details ): ?>
                            
                            <dt>
                                <a href="javascript:void(0)" class="anime_point btn btn-large" rel="item_acta_<?php echo $id; $id++ ?>" perso_id="<?= $id - 1 ?>">
                                   <?php echo $point ?>
                                </a>
                            </dt>
                            <dl class="anime_details" style="display:none">
                                <?= $details ?>
                            </dl>
                        <?php endforeach ?>
                    </dl>
                </div>
                <div class="span6">
                   &nbsp;
                    <div class="anime_display " style="display:none;">
                        <!-- content assigned through js switchAnime() -->
                        <div id="anime_figure"><img id="figure_img" src="images/perso_1.png"/></div>
                        <div id="anime_text"></div>
                    </div>
                </div>
                <div class="span3 panel_beyond">
                    <h2><?php __("...And Beyond!"); ?></h2>
                    <dl class="bulletpoints">
                        <?php $id = 1 ?>
                        <?php /* in texts.php */ foreach($beyondpoints as $point => $details ): ?>
                            <dt>
                                <a href="javascript:void(0)" class="anime_point btn  btn-large" rel="item_beyond_<?= $id; $id++ ?>" perso_id="<?= $id + 2  ?>">
                                    <?= $point ?>
                                </a>
                            </dt>
                            <dl class="anime_details " style="display:none">
                                <?= $details ?>
                            </dl>
                        <?php endforeach ?>
                    </dl>
                </div>
                <div id="panel_rollover">
                    <?php __("⚠ Roll over or click on buttons to see details"); ?>
                </div>
            </div>
        </div>
    </div><!-- /dark blue rollovers -->

