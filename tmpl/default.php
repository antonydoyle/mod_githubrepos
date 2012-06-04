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
GHmod.init(reponame, repopath);
</script>