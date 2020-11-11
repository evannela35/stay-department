<style>
  .link-block {
      box-shadow: 0px 5px <?php block_field('color');?>;
  }
</style>

<a class="listlink" href="<?php block_field( 'link' ); ?>">
<div class="link-block">
  <div class="svg">
    <?php block_field( 'logo' ); ?>
    <p> <?php block_field('task');?> </p>
    <p id="desc"><?php block_field('desc')?></p>
  </div>
  <button>
    <a href="<?php block_field( 'link' ); ?>">How-To</a>
  </button>
</div>
</a>
