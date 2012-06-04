<?php 
/**
 *
 *
 * @package   mod_githubrepo
 * copyright Siege21.com/Antony Doyle
 * @license GPL3
 */
 defined('_JEXEC') or die('Direct Access to this location is not allowed.');
?>


<div id="ghtexttop"><p><?php echo $txtAbove ?></p></div>

<div id="<?php echo $reponame ?>" class="gh_mod loading">&hellip;</div>
<script>
var reponame = "<?php echo $reponame; ?>";
var repopath = "<?php echo $repopath; ?>";
var reponame1 = "<?php echo $reponame1; ?>";
var repopath1 = "<?php echo $repopath1; ?>";
var reponame2 = "<?php echo $reponame2; ?>";
var repopath2 = "<?php echo $repopath2; ?>";
var reponame3 = "<?php echo $reponame3; ?>";
var repopath3 = "<?php echo $repopath3; ?>";
var reponame4 = "<?php echo $reponame4; ?>";
var repopath4 = "<?php echo $repopath4; ?>";
var reponame5 = "<?php echo $reponame5; ?>";
var repopath5 = "<?php echo $repopath5; ?>";

GHmod.init(reponame, repopath);
</script>

<?php 
if ($reponame1 != NULL) {
?>
<script>
GHmod.init(reponame1, repopath1)
</script>
<div id="ghtexttop"><p><?php echo $txtAbove1 ?></p></div>
<div id="<?php echo $reponame1 ?>" class="gh_mod loading">&hellip;</div>
<? } ?>

<?php 
if ($reponame2 != NULL) {
?>
<script>
GHmod.init(reponame2, repopath2)
</script>
<div id="ghtexttop"><p><?php echo $txtAbove2 ?></p></div>
<div id="<?php echo $reponame2 ?>" class="gh_mod loading">&hellip;</div>
<? } ?>

<?php 
if ($reponame3 != NULL) {
?>
<script>
GHmod.init(reponame3, repopath3)
</script>
<div id="ghtexttop"><p><?php echo $txtAbove3 ?></p></div>
<div id="<?php echo $reponame3 ?>" class="gh_mod loading">&hellip;</div>
<? } ?>

<?php 
if ($reponame4 != NULL) {
?>
<script>
GHmod.init(reponame4, repopath4)
</script>
<div id="ghtexttop"><p><?php echo $txtAbove4 ?></p></div>
<div id="<?php echo $reponame4 ?>" class="gh_mod loading">&hellip;</div>
<? } ?>

<?php 
if ($reponame5 != NULL) {
?>
<script>
GHmod.init(reponame5, repopath5)
</script>
<div id="ghtexttop"><p><?php echo $txtAbove5 ?></p></div>
<div id="<?php echo $reponame5 ?>" class="gh_mod loading">&hellip;</div>
<? } ?>


