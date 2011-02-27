
<div id="node-<?php print $result['node']->nid; ?>" class=doc-in-list
style="
    margin-bottom: 15px;
    padding: 15px;
    border-bottom: 1px solid #f3f3f3;
">

    <h2
        style="font-size: 1.4em;"><a href="<?php print $url; ?>#document" title="<?php print $title ?>"><?php print $title ?></a></h2>
    
    <div class="meta">
        <?php
        
        $contributors = implode(', ', $result['node']->bjt['creator']); ?>
        <span style="display: inline-block; width: 520px; overflow: hidden; white-space: nowrap;
        text-overflow: ellipsis;
        -webkit-text-overflow: ellipsis;
        -moz-text-overflow: ellipsis;
        " title="<?php echo $contributors; ?>">Autori:
        <?php echo $contributors; ?>
        </span>
    </div>

</div>
