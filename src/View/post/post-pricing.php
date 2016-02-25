<?php
if ($dynamicallyCreateResources) {
    echo '<p>iMoneza will automatically manage this resource for you using your default pricing options.</p>';
}
?>
<p><label><input type="checkbox" value="1" id="show-override-pricing"/>Override Default Pricing Options</label></p>
<div id="override-pricing">
    <label for="pricing-group-id">Pricing Group:</label>
    <select name="pricing-group-id" id="pricing-group-id">
        <?php
        /** @var \iMoneza\Data\PricingGroup $pricingGroup */
        foreach ($pricingGroups as $pricingGroup) {
            $selected = ($pricingGroup == $pricingGroupSelected ? ' selected="selected"' : '');
            printf('<option value="%s"%s>%s</option>', $pricingGroup->getPricingGroupID(), $selected, $pricingGroup->getName());
        }
        ?>
    </select>
</div>