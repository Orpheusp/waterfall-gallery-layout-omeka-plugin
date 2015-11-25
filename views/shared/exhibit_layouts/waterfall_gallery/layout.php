<div class="gallery">
  <?php foreach  ($attachments as $attachment): ?>
    <?php 
      $item = $attachment->getItem();
      $itemLink = record_url($item);
      $itemImageTag = item_image('square_thumbnail');
      $itemTitle = metadata($item, array('Dublin Core', 'Title'));
      $itemDescription = metadata($item, array('Dublin Core', 'Description'), array('snippet'=>250));
      $itemTags = tag_string($item, 'items/browse', '');
    ?>
    <div class="exhibit-item" onclick="window.location='<?php echo $itemLink ?>'">
      <?php echo $itemImageTag; ?>
      <h1><?php echo $itemTitle; ?></h1>
      <p><?php echo $itemDescription; ?></p>
      <div class="tags"><?php echo $itemTags; ?></div>
    </div>
  <?php endforeach ?>
</div>