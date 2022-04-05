<a href="<?php print $item["url"]; ?>" target="_blank" rel="noopener noreferrer">
  <div class="bg-[#262626] w-full h-52 rounded-lg" style="background-color: <?php print $item["color"]; ?> !important">
    <!--
      Align the icon in the center of the card.
    -->
    <div class="flex justify-center items-center h-full">
      <?php
      if (str_starts_with($item["icon"], "bx")) {
      ?>
        <i class="text-white text-5xl <?php print $item["icon"] ?>"></i>
      <?php
      } else {
      ?>
        <i class="text-white text-4xl <?php print $item["icon"] ?>"></i>
      <?php
      }
      ?>
    </div>
  </div>
  <div class="my-2">
    <p class="text-lg sm:text-2xl font-bold"><?php print $item["name"]; ?></p>
    <p class="text-md text-gray-500">
      <?php
      $url = $item["url"];
      $url = str_replace("https://", "", $url);
      $url = str_replace("http://", "", $url);
      $url = str_replace("mailto:", "", $url);
      $url = str_replace("phone:", "", $url);
      $url = str_replace("tel:", "", $url);
      $url = str_replace("sms:", "", $url);
      $url = str_replace("skype:", "", $url);
      print $url;
      ?>
    </p>
  </div>
</a>