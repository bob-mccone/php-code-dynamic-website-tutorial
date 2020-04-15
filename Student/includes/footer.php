                <div id="footer" class="cf">
                    <div class="column three">
                        <strong>Phone:</strong>
                        888.555.3381
                    </div><!-- column -->
                    <div class="column three">
                        <strong>Location:</strong>
                        111 Wellywood street<br>
                        Wellywood, LI
                    </div><!-- column -->
                    <div class="column three last"><!-- last removes the margin -->
                        <strong>Hours</strong>
                        <em>Tuesday - Thursday</em><br>
                        1pm - 9pm<br><br>
                        <em>Friday - Saturday</em><br>
                        4pm - 11pm<br><br>
                        <em>Sunday - Monday</em><br>
                        Closed<br><br>
                        <?php include('includes/store-hours.php'); ?>
                    </div><!-- column -->
                </div><!-- footer -->
                <small>&copy;<?php echo date('Y'); ?> <?php echo $companyName; ?></small>
            </div><!-- content --> 
        </div><!-- wrapper -->
        <div class="copyright-info">
            <?php include('../../assets/includes/copyright.php'); ?>
        </div><!-- copyright-info -->
    </body>
</html>