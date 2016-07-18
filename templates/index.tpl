<div id="content" class="postContent">
  <div itemprop="blogPost" itemscope itemtype="http://schema.org/BlogPosting">

    <!-- Article Schema.org Metadata -->
    <meta itemprop="thumbnailUrl" content="{$index.post.post_thumbnail_meta}" />
    <meta itemprop="description" content="{$index.post.post_excerpt}" />
    <!-- End Article Metadata -->

    {include file='post_header.tpl'}

    <div class="material">
      <a class="printandpdf" href="#">
        <i class="icon-print">Print</i>
        <i class="icon-doc-inv-alt">PDF</i>
      </a>
      <div itemprop="articleBody text">
       {$index.post.post_content}
    </div>

  <script type="text/javascript">

    var isPost          = true;
    var post_ID         = {$index.post.post_ID};
    var post_title      = "{$index.post.post_title}";
    var post_link       = "{$index.post.post_permalink}";
    var post_tags       = {$index.post.post_keywords|@json_encode};
    var post_excerpt    = "{$index.post.post_excerpt}";

  </script>