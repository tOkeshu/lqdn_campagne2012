
    <div class="container-wrapper" id="anime"><!-- dark blue rollovers -->
        <div class="container" >
            <div class="row">
                <div class="span3 panel_acta">
		  <h2><?php __("Against ACTA..."); ?></h2>
                    <dl class="bulletpoints">
		      <?php $id = 0; ?>
                        <?php /* in texts.php */ foreach($actapoints as $point => $details ): ?>
                            
                            <dt>
                                <a href="javascript:void(0)" class="anime_point btn btn-large" id="ap<?php $id++; echo $id; ?>">
                                   <?php echo $point ?>
                                </a>
                            </dt>
                        <?php endforeach ?>
                    </dl>
                </div>
                <div class="span6">
                    <div class="anime_display">
       <div class="animed" id="dap99">
          <div class="animel_figure" id="fap99"><img id="figure_img" src="images/united_in_diversity_370.png"/></div>
       </div>
		      <!-- hide/show through switchAnime() -->
		      <?php $id2 = 0; /* in texts.php */ foreach($actapoints as $point => $details ): ?>
		      <div class="animed" id="dap<?php $id2++; echo $id2; ?>">
		        <div class="animel_figure" id="fap<?php echo $id2; ?>"><img id="figure_img" src="images/perso_<?php echo $id2; ?>.png"/></div>
                        <div class="animel_text" id="tap<?php echo $id2; ?>"><?php echo $details; ?></div>
		      </div>
			<?php endforeach ?>
		      <?php  /* in texts.php */ foreach($beyondpoints as $point => $details ): ?>
		      <div class="animed" id="dap<?php $id2++; echo $id2; ?>">
		        <div class="animer_figure" id="fap<?php echo $id2; ?>"><img id="figure_img" src="images/perso_<?php echo $id2; ?>.png"/></div>
                        <div class="animer_text" id="tap<?php echo $id2; ?>"><?php echo $details; ?></div>
		      </div>
			<?php endforeach ?>
                    </div>
                </div>
                <div class="span3 panel_beyond">
                    <h2><?php __("...And Beyond!"); ?></h2>
                    <dl class="bulletpoints">

                        <?php /* in texts.php */ foreach($beyondpoints as $point => $details ): ?>
                            <dt>
                                <a href="javascript:void(0)" class="anime_point btn  btn-large" id="ap<?php $id++; echo $id; ?>">
                                    <?= $point ?>
                                </a>
                            </dt>
                        <?php endforeach ?>
                    </dl>
                </div>
            </div>
        </div>
    </div><!-- /dark blue rollovers -->

