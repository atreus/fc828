<?php

require_once ("f_blocks.php");
require_once ("content_middle.php");
require_once('utils.php');
require_once('interface.php');
/* Top header f_blocks */
this_header();
/* Beginning of the content table and left column f_blocks */
left_content_start();
left_column_content();
/* End of the left content f_blocks */
left_content_end();
/* Second column in middle content f_blocks */
start_content();

print ('
<div class="xform">
<b class="xb1"></b><b class="xb2"></b><b class="xb3"></b><b class="xb4m"></b><b class="xb5m"></b><b class="xb6m"></b><b class="xb7m"></b>
<div class="xboxmiddle">
            <div align="center"><img src="Temp/beer.png" /></div><div class="middleheight">');

/* Middle content for teams */

print ('</div></div>
<b class="xb7m"></b><b class="xb6m"></b><b class="xb5m"></b><b class="xb4m"></b><b class="xb3"></b><b class="xb2"></b><b class="xb1"></b>
</div>');

start_right();
right_column_content();
this_footer();

($odbc);

?>