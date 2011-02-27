<?php

/**
 * @file node.tpl.php
 *
 * Theme implementation to display a node.
 *
 * Available variables:
 * - $title: the (sanitized) title of the node.
 * - $content: Node body or teaser depending on $teaser flag.
 * - $picture: The authors picture of the node output from
 *   theme_user_picture().
 * - $date: Formatted creation date (use $created to reformat with
 *   format_date()).
 * - $links: Themed links like "Read more", "Add new comment", etc. output
 *   from theme_links().
 * - $name: Themed username of node author output from theme_username().
 * - $node_url: Direct url of the current node.
 * - $terms: the themed list of taxonomy term links output from theme_links().
 * - $submitted: themed submission information output from
 *   theme_node_submitted().
 *
 * Other variables:
 * - $node: Full node object. Contains data that may not be safe.
 * - $type: Node type, i.e. story, page, blog, etc.
 * - $comment_count: Number of comments attached to the node.
 * - $uid: User ID of the node author.
 * - $created: Time the node was published formatted in Unix timestamp.
 * - $zebra: Outputs either "even" or "odd". Useful for zebra striping in
 *   teaser listings.
 * - $id: Position of the node. Increments each time it's output.
 *
 * Node status variables:
 * - $teaser: Flag for the teaser state.
 * - $page: Flag for the full page state.
 * - $promote: Flag for front page promotion state.
 * - $sticky: Flags for sticky post setting.
 * - $status: Flag for published status.
 * - $comment: State of comment settings for the node.
 * - $readmore: Flags true if the teaser content of the node cannot hold the
 *   main body content.
 * - $is_front: Flags true when presented in the front page.
 * - $logged_in: Flags true when the current user is a logged-in member.
 * - $is_admin: Flags true when the current user is an administrator.
 *
 * @see template_preprocess()
 * @see template_preprocess_node()
 */


if ($teaser): ?>
<div id="node-<?php print $node->nid; ?>" class=doc-in-list>

    <?php if (!$page): ?>
        <h2><a href="<?php print $node_url ?>" title="<?php print $title ?>"><?php print $title ?></a></h2>
    <?php endif; ?>
</div>
<?php else: ?>

<h1 style="margin-bottom:10px;"><?php echo $node->title; ?></h1>

<h2 class="description" style="padding-left:20px;"><?php echo $node->bjt['description'][0]; ?></h2>
<div class="clearfix clear-white" id="document">
<?php if (strpos( $node->bjt['teaser'], '.djvu' ) ): ?>


<applet
    codebase="http://hypatia.bjt.ro/java/"
    code="DjVuApplet.class"
    archive="javadjvu.jar"
    class="left"
    width="720"
    height="100%"
    style="border:0px none; margin:0px; width:720px;height:100%">
            <param name="data" value="<?php echo $node->bjt['teaser'];?>">
            <param name="image" value="http://javadjvu.sourceforge.net">
            <param name="cache_archive" value="http://hypatia.bjt.ro/java/javadjvu.jar">
          </applet>

<?php else: ?>

<iframe src="<?php echo $node->bjt['teaser']; ?>" frameborder="0" class="left" style="
    height: 100%;
    position: relative;
    width: 720px;
"></iframe>

<?php endif; ?>
    <div class="left" style="width: 180px;">
        <ul id=doc-meta>
            
            <li><strong>Data:</strong><br /><?php echo $node->bjt['date'][0]; ?>
            <li><strong>Autori:</strong><br />
                <?php echo implode('<br />', $node->bjt['creator']); ?>
            <li><strong>Contribuitori:</strong><br />
                <?php echo implode('<br />', $node->bjt['contributor']); ?>
            <li><strong>Subiecte:</strong><br />
                <?php echo implode('<br />', $node->bjt['subject']); ?>
            <li><strong>Cotă:</strong><br />
                <?php echo $node->bjt['identifier'][0]; ?>
            
        </ul>
    </div>
</div>


<?php endif;
