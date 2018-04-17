
    <div class="cf" id="footer">
      <div class="column three">
        <strong>Phone</strong>
        587-586-0###
      </div><!--column  -->
      <div class="column three">
        <strong>Location</strong>
        Stephen Ave ,Calgary
         AB, Canada
      </div><!--column  -->
      <div class="column three last">
        <strong>Hours</strong>
        <em>Tuesday-Thursday</em><br>
        1:00pm -9:00pm <br><br>
        <strong>Hours</strong>
        <em>Friday-Saturday</em><br>
        4:00pm -11:00pm <br><br>
        <em>Sunday - Monday</em><br>
        Closed<br>

        <br>

        <?php include('includes/store-hours.php'); ?>



      </div><!--column  -->



    </div><!--footer  -->
<small><b><?php date_default_timezone_set('Canada/Mountain'); echo date('D M j, G:i:s, T Y'); ?><br>&copy; <a href="http://jatinn.tech">jatinn.tech</a> <?php echo $companyName ?></a></b></small>
  </div><!--content  -->
</div><!--wrapper  -->

<div class="copyright-info">
  <?php include('./assets/includes/copyright.php'); ?>
</div><!-- copyright-info -->
  </body>
</html>
