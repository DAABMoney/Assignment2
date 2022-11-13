<div id="footer" class="p-2 bg-secondary text-white fixed-bottom">
<p>
    <div class="text-center">
     © <?php
    $copyYear = 2021;
    $curYear = date('Y');
      echo $copyYear . (($copyYear != $curYear) ? '-' . $curYear : '');
  ?> D_Tech
  </p>
    </div>
</div>
</div>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" 
crossorigin="anonymous"></script>
<script src="js/mainjs.js"></script>
<script src="js/validation.js"></script>
<br />
<br />  
</body>
</html>