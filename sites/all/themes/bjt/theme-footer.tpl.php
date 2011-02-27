        </div>
    </div>
    <footer>

        <?php if (isset($primary_links)) : ?>
          <?php print theme('links', $primary_links, array('class' => 'links primary-links')) ?>
        <?php endif; ?>

        <!--ul id="footer-links">

            <li><a href="<?php echo '/bjt/'; ?>?q=contact">Contact</a></li>
            <li><a href="<?php echo '/bjt/'; ?>?q=despre">Despre Noi</a></li>
            <li><a href="<?php echo '/bjt/'; ?>?q=feedback">Feedback</a></li>

        </ul-->

    </footer>


    <?php print $closure; ?>

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1/jquery.js"></script>
    <?php print $scripts; ?>




</body>
</html>
