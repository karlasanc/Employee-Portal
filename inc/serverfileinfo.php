<!-- Test Client and Server Info -->
<div class="container-fluid p-2 g-col-6">
  <!--server info-->
  <h1>Server & File Info</h1>
  <?php if ($server): ?>
    <ul class="list-group">
      <?php foreach ($server as $key => $value): ?>
        <li class="list-group-item">
          <strong>
            <?php echo $key; ?>;
          </strong>
          <?php echo $value; ?>
        </li>
      <?php endforeach; ?>
    </ul>
  <?php endif; ?>

  <!--client info-->
  <h1>Client & File Info</h1>
  <?php if ($client): ?>
    <ul class="list-group">
      <?php foreach ($client as $key => $value): ?>
        <li class="list-group-item">
          <strong>
            <?php echo $key; ?>;
          </strong>
          <?php echo $value; ?>
        </li>
      <?php endforeach; ?>
    </ul>
  <?php endif; ?>
</div>

<?php require_once '../inc/footer.php'; ?>