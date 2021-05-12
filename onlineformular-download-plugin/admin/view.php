<?php echo "<script id='php_data' type='text/template'>" . json_encode(get_posts(array("post_type"=>"flamingo_inbound"))) . "</script>";?>
<div id="app">
  {{ message }}
  <ol>
    <li v-for="post in posts">
      {{ post.post_title }}
    </li>
  </ol>
</div>
<script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
<?php echo '<script src="' . plugin_dir_url( __FILE__ ) . 'index.js"></script>'; ?>