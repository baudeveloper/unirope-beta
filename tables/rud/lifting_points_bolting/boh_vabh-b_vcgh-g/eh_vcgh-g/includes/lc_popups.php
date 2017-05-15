<?php $legImagePath = "/wp-content/themes/unirope/img/"; ?>
<div class="lcPopUps">
<h3>Maximum Transport Load for Different Load Types</h3>
<span class="prodName"><b><?php echo $prodNamePassed ?></b></span>
<span class="prodId">Article-No. <b><?php echo $prodIDPassed ?></b></span>

<span class="prodWll">WLL: <b><?php echo $prodWll ?></b></span>

<div class="clearfix"></div>
<span class="rowHeadVertical" style="margin-left:124px">VERTICAL</span>
<span class="rowHeadSymmetrical">SYMMETRICAL</span>
<span class="rowHeadUnsymmetrical">UNSYMMETRICAL</span>
<table class="lcLegs" cellpadding="0" cellspacing="0" width="123" style="margin-left:184px">
	<thead>
	<tr height="20">
		<td class="emptyBlock">&nbsp;</th>
		<th>1 Leg</th>
	</tr>
	</thead>
	<tbody>
		<tr height="135">
			<td width="123" class="emptyBlockTitle">&nbsp;</td>
		<td><img src="<?php echo $legImagePath; ?>lc_vcgh_1leg_vert1.gif" width="123" height="110" /><br><?php echo $lc_1leg_vert1 ?></td>
		</tr>
	</tbody>
</table>

<table class="lcLegs" cellpadding="0" cellspacing="0" width="247">
	<thead>
	<tr height="20">
		<th colspan="2">2 Legs</th>
	</tr>
	</thead>
	<tbody>
		<tr height="135">
			<td><img src="<?php echo $legImagePath; ?>lc_vcgh_2leg_vert1.gif" width="123" height="110" /><br><?php echo $lc_2leg_vert1 ?></td>
			<td class="emptyBlock">&nbsp;</td>
		</tr>
		<tr height="135">
			<td><img src="<?php echo $legImagePath; ?>lc_vcgh_2leg_sym1.gif" width="123" height="110" /><br><?php echo $lc_2leg_sym1 ?></td>
			<td><img src="<?php echo $legImagePath; ?>lc_vcgh_2leg_sym2.gif" width="123" height="110" /><br><?php echo $lc_2leg_sym2 ?></td>
		</tr>
		<tr height="135">
			<td><img src="<?php echo $legImagePath; ?>lc_vcgh_2leg_unsym.gif" width="123" height="110" /><br><?php echo $lc_2leg_unsym ?></td>
			<td class="emptyBlock">&nbsp;</td>
		</tr>
	</tbody>
</table>

<table class="lcLegs" cellpadding="0" cellspacing="0" width="247">
	<thead>
	<tr height="20">
		<th colspan="2">3-4 Legs*</th>
	</tr>
	</thead>
	<tbody>
		<tr height="135">
			<td><img src="<?php echo $legImagePath; ?>lc_vcgh_4leg_vert1.gif" width="123" height="110" /><br><?php echo $lc_4leg_vert1 ?></td>
		  <td class="emptyBlock">&nbsp;</td>
		</tr>
		<tr height="135">
			<td><img src="<?php echo $legImagePath; ?>lc_vcgh_4leg_sym1.gif" width="123" height="110" /><br><?php echo $lc_4leg_sym1 ?></td>
			<td><img src="<?php echo $legImagePath; ?>lc_vcgh_4leg_sym2.gif" width="123" height="110" /><br><?php echo $lc_4leg_sym2 ?></td>
		</tr>
		<tr height="135">
			<td><img src="<?php echo $legImagePath; ?>lc_vcgh_4leg_unsym.gif" width="123" height="110" /><br><?php echo $lc_4leg_unsym ?></td>
			<td class="emptyBlock">&nbsp;</td>
		</tr>
	</tbody>
</table>
<div class="clearfix"></div>

<div class="footnote">
  <p>Please refer to the specified load direction into our user instructions! <b>*Please note:</b> The values mentioned for 3-4 legs are only achieved when it is guaranteed that the load is evenly spread over more than 2 legs. Otherwise please use the values of 2 legs. See BGR 500 (regulation for the prevention of industrial accidents), chapter 2.8, paragraph 3.5.3.</p></div>
<div class="clearfix"></div>
</div>