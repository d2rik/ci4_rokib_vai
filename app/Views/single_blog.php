<div class="">
  <img class="rounded w-full" src="<?= base_url('assets/image/blog_image/') . $blog['thumbnail'] ?>" alt="" />
  <div class="mt-2">
    <div class="">
      <span class="p-1 border border-sky-600 text-xs rounded-sm text-sky-600">
        <?php
        $dateString = esc($blog['created_at']);
        $dateTime = new \DateTime($dateString);

        // Format the DateTime object to the desired format
        $formattedDate = $dateTime->format('M d, Y');
        echo $formattedDate;
        ?>
      </span>
    </div>
    <div class="my-1">
      <h1 class="text-lg font-bold"><?= $blog['title'] ?></h1>
    </div>
    <div>
      <p>
        <?= nl2br(esc($blog['blog'])) ?>
      </p>
    </div>
  </div>
</div>