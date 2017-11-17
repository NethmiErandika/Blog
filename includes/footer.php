        </div>

        <div class="col-sm-3 offset-sm-1 blog-sidebar">
          <div class="sidebar-module sidebar-module-inset">
            <h4>About</h4>
            <p><?php echo $site_description; ?></p>
          </div>
          <div class="sidebar-module">
            <h4>Categories</h4>
          <?php if($categories) : ?>  
            <ol class="list-unstyled">
          <?php while($row = $categories->fetch_assoc()) : ?>
              <li><a href="posts.php?category=<?php echo $row['id']; ?>"><?php echo $row['name']; ?></a></li>
          <?php endwhile; ?>
            </ol>
          <?php else : ?> 
            <p>Thre are no categories yet.</p>
          <?php endif; ?> 
          </div>
          <div class="sidebar-module">
            <h4>Elsewhere</h4>
            <ol class="list-unstyled">
              <li><a href="#">Facebook</a></li>
            </ol>
          </div>
        </div>

      </div>

    </div>

    <footer class="blog-footer">
      <p>Pium's Blog Site &copy; 2017 All Right Reserved.</p>
      <p>
        <a href="#">Back to top</a>
      </p>
    </footer>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="../../../../assets/js/vendor/popper.min.js"></script>
    <script src="js/bootstrap.js"></script>

    <script src="../../../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>