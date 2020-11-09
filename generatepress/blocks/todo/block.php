<a class="listlink" href="<?php block_field( 'link' ); ?>">
<div class="inner">
  <input type="checkbox" name="<?php block_field('task')?>" id="<?php block_field('task')?>">
  <label for="<?php block_field('task')?>">
    <svg viewBox="0 0 32 32" fill="none">
      <rect class="box" width="32" height="32" rx="10" fill="#B42B2B"/>
      <path class="check" d="M22 12L13.75 21L10 16.9091"/>
    </svg>
  </label>
  <div class="logo" id="<?php block_field('difficult')?>">
    <?php block_field( 'logo' ); ?>
    <p> Streaming </p>
    <p id="stream">6:00 KST</p>
  </div>
  <button>
    <a href="<?php block_field( 'link' ); ?>">How-To</a>
  </button>
</div>
</a>
