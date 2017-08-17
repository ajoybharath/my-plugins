# PHP script 
#   PNP Template for check_mem.pl  


<!DOCTYPE html>
<html>
  <head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# githubog: http://ogp.me/ns/fb/githubog#">
    <meta charset='utf-8'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>nagios-plugins/check_mem/check_mem.php at master · justintime/nagios-plugins · GitHub</title>
    <link rel="search" type="application/opensearchdescription+xml" href="/opensearch.xml" title="GitHub" />
    <link rel="fluid-icon" href="https://github.com/fluidicon.png" title="GitHub" />
    <link rel="apple-touch-icon" sizes="57x57" href="/apple-touch-icon-114.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="/apple-touch-icon-114.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="/apple-touch-icon-144.png" />
    <link rel="apple-touch-icon" sizes="144x144" href="/apple-touch-icon-144.png" />
    <link rel="logo" type="image/svg" href="http://github-media-downloads.s3.amazonaws.com/github-logo.svg" />
    <meta name="msapplication-TileImage" content="/windows-tile.png">
    <meta name="msapplication-TileColor" content="#ffffff">

    
    
    <link rel="icon" type="image/x-icon" href="/favicon.ico" />

    <meta content="authenticity_token" name="csrf-param" />
<meta content="uGY/gFgo0+3D1uK5ENHbAjXPP+kv1zDMd5eCoBhLczM=" name="csrf-token" />

    <link href="https://a248.e.akamai.net/assets.github.com/assets/github-bced846093783dc329a6bb21c8031d870340444b.css" media="all" rel="stylesheet" type="text/css" />
    <link href="https://a248.e.akamai.net/assets.github.com/assets/github2-36182176b3cf8d21e8b8575917ced76dba218ae6.css" media="all" rel="stylesheet" type="text/css" />
    


      <script src="https://a248.e.akamai.net/assets.github.com/assets/frameworks-d76b58e749b52bc47a4c46620bf2c320fabe5248.js" type="text/javascript"></script>
      <script src="https://a248.e.akamai.net/assets.github.com/assets/github-63b69d5f9490ae130788ccca71a2331694a1449e.js" type="text/javascript"></script>
      
      <meta http-equiv="x-pjax-version" content="fec41c1ca15c77d7116683e928dfb56f">

        <link data-pjax-transient rel='permalink' href='/justintime/nagios-plugins/blob/e3b162e6bb0cd7c6601933eeb0185f02d109739e/check_mem/check_mem.php'>
    <meta property="og:title" content="nagios-plugins"/>
    <meta property="og:type" content="githubog:gitrepository"/>
    <meta property="og:url" content="https://github.com/justintime/nagios-plugins"/>
    <meta property="og:image" content="https://secure.gravatar.com/avatar/29be2ed93ef4cc97565a550d446f4ae9?s=420&amp;d=https://a248.e.akamai.net/assets.github.com%2Fimages%2Fgravatars%2Fgravatar-user-420.png"/>
    <meta property="og:site_name" content="GitHub"/>
    <meta property="og:description" content="Collection of some handy Nagios plugins. Contribute to nagios-plugins development by creating an account on GitHub."/>
    <meta property="twitter:card" content="summary"/>
    <meta property="twitter:site" content="@GitHub">
    <meta property="twitter:title" content="justintime/nagios-plugins"/>

    <meta name="description" content="Collection of some handy Nagios plugins. Contribute to nagios-plugins development by creating an account on GitHub." />

  <link href="https://github.com/justintime/nagios-plugins/commits/master.atom" rel="alternate" title="Recent Commits to nagios-plugins:master" type="application/atom+xml" />

  </head>


  <body class="logged_out page-blob windows vis-public env-production  ">
    <div id="wrapper">

      

      

      

      


        <div class="header header-logged-out">
          <div class="container clearfix">

            <a class="header-logo-wordmark" href="https://github.com/">
              <img alt="GitHub" class="github-logo-4x" height="30" src="https://a248.e.akamai.net/assets.github.com/images/modules/header/logov7@4x.png?1338945075" />
              <img alt="GitHub" class="github-logo-4x-hover" height="30" src="https://a248.e.akamai.net/assets.github.com/images/modules/header/logov7@4x-hover.png?1338945075" />
            </a>

              
<ul class="top-nav">
    <li class="explore"><a href="https://github.com/explore">Explore GitHub</a></li>
  <li class="search"><a href="https://github.com/search">Search</a></li>
  <li class="features"><a href="https://github.com/features">Features</a></li>
    <li class="blog"><a href="https://github.com/blog">Blog</a></li>
</ul>


            <div class="header-actions">
                <a class="button primary" href="https://github.com/signup">Sign up for free</a>
              <a class="button" href="https://github.com/login?return_to=%2Fjustintime%2Fnagios-plugins%2Fblob%2Fmaster%2Fcheck_mem%2Fcheck_mem.php">Sign in</a>
            </div>

          </div>
        </div>


      

      


            <div class="site hfeed" itemscope itemtype="http://schema.org/WebPage">
      <div class="hentry">
        
        <div class="pagehead repohead instapaper_ignore readability-menu ">
          <div class="container">
            <div class="title-actions-bar">
              


<ul class="pagehead-actions">



    <li>
      <a href="/login?return_to=%2Fjustintime%2Fnagios-plugins"
        class="minibutton js-toggler-target star-button entice tooltipped upwards"
        title="You must be signed in to use this feature" rel="nofollow">
        <span class="mini-icon mini-icon-star"></span>Star
      </a>
      <a class="social-count js-social-count" href="/justintime/nagios-plugins/stargazers">
        28
      </a>
    </li>
    <li>
      <a href="/login?return_to=%2Fjustintime%2Fnagios-plugins"
        class="minibutton js-toggler-target fork-button entice tooltipped upwards"
        title="You must be signed in to fork a repository" rel="nofollow">
        <span class="mini-icon mini-icon-fork"></span>Fork
      </a>
      <a href="/justintime/nagios-plugins/network" class="social-count">
        16
      </a>
    </li>
</ul>

              <h1 itemscope itemtype="http://data-vocabulary.org/Breadcrumb" class="entry-title public">
                <span class="repo-label"><span>public</span></span>
                <span class="mega-icon mega-icon-public-repo"></span>
                <span class="author vcard">
                  <a href="/justintime" class="url fn" itemprop="url" rel="author">
                  <span itemprop="title">justintime</span>
                  </a></span> /
                <strong><a href="/justintime/nagios-plugins" class="js-current-repository">nagios-plugins</a></strong>
              </h1>
            </div>

            
  <ul class="tabs">
    <li><a href="/justintime/nagios-plugins" class="selected" highlight="repo_source repo_downloads repo_commits repo_tags repo_branches">Code</a></li>
    <li><a href="/justintime/nagios-plugins/network" highlight="repo_network">Network</a></li>
    <li><a href="/justintime/nagios-plugins/pulls" highlight="repo_pulls">Pull Requests <span class='counter'>0</span></a></li>

      <li><a href="/justintime/nagios-plugins/issues" highlight="repo_issues">Issues <span class='counter'>3</span></a></li>



    <li><a href="/justintime/nagios-plugins/graphs" highlight="repo_graphs repo_contributors">Graphs</a></li>


  </ul>
  
<div class="tabnav">

  <span class="tabnav-right">
    <ul class="tabnav-tabs">
          <li><a href="/justintime/nagios-plugins/tags" class="tabnav-tab" highlight="repo_tags">Tags <span class="counter blank">0</span></a></li>
    </ul>
    
  </span>

  <div class="tabnav-widget scope">


    <div class="select-menu js-menu-container js-select-menu js-branch-menu">
      <a class="minibutton select-menu-button js-menu-target" data-hotkey="w" data-ref="master">
        <span class="mini-icon mini-icon-branch"></span>
        <i>branch:</i>
        <span class="js-select-button">master</span>
      </a>

      <div class="select-menu-modal-holder js-menu-content js-navigation-container">

        <div class="select-menu-modal">
          <div class="select-menu-header">
            <span class="select-menu-title">Switch branches/tags</span>
            <span class="mini-icon mini-icon-remove-close js-menu-close"></span>
          </div> <!-- /.select-menu-header -->

          <div class="select-menu-filters">
            <div class="select-menu-text-filter">
              <input type="text" id="commitish-filter-field" class="js-filterable-field js-navigation-enable" placeholder="Filter branches/tags">
            </div>
            <div class="select-menu-tabs">
              <ul>
                <li class="select-menu-tab">
                  <a href="#" data-tab-filter="branches" class="js-select-menu-tab">Branches</a>
                </li>
                <li class="select-menu-tab">
                  <a href="#" data-tab-filter="tags" class="js-select-menu-tab">Tags</a>
                </li>
              </ul>
            </div><!-- /.select-menu-tabs -->
          </div><!-- /.select-menu-filters -->

          <div class="select-menu-list select-menu-tab-bucket js-select-menu-tab-bucket css-truncate" data-tab-filter="branches">

            <div data-filterable-for="commitish-filter-field" data-filterable-type="substring">

                <div class="select-menu-item js-navigation-item js-navigation-target selected">
                  <span class="select-menu-item-icon mini-icon mini-icon-confirm"></span>
                  <a href="/justintime/nagios-plugins/blob/master/check_mem/check_mem.php" class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target" data-name="master" rel="nofollow" title="master">master</a>
                </div> <!-- /.select-menu-item -->
            </div>

              <div class="select-menu-no-results">Nothing to show</div>
          </div> <!-- /.select-menu-list -->


          <div class="select-menu-list select-menu-tab-bucket js-select-menu-tab-bucket css-truncate" data-tab-filter="tags">
            <div data-filterable-for="commitish-filter-field" data-filterable-type="substring">

            </div>

            <div class="select-menu-no-results">Nothing to show</div>

          </div> <!-- /.select-menu-list -->

        </div> <!-- /.select-menu-modal -->
      </div> <!-- /.select-menu-modal-holder -->
    </div> <!-- /.select-menu -->

  </div> <!-- /.scope -->

  <ul class="tabnav-tabs">
    <li><a href="/justintime/nagios-plugins" class="selected tabnav-tab" highlight="repo_source">Files</a></li>
    <li><a href="/justintime/nagios-plugins/commits/master" class="tabnav-tab" highlight="repo_commits">Commits</a></li>
    <li><a href="/justintime/nagios-plugins/branches" class="tabnav-tab" highlight="repo_branches" rel="nofollow">Branches <span class="counter ">1</span></a></li>
  </ul>

</div>

  
  
  


            
          </div>
        </div><!-- /.repohead -->

        <div id="js-repo-pjax-container" class="container context-loader-container" data-pjax-container>
          


<!-- blob contrib key: blob_contributors:v21:e8022726a05f85dd4c9b65a46b78cafb -->
<!-- blob contrib frag key: views10/v8/blob_contributors:v21:e8022726a05f85dd4c9b65a46b78cafb -->


<div id="slider">
    <div class="frame-meta">

      <p title="This is a placeholder element" class="js-history-link-replace hidden"></p>

        <div class="breadcrumb">
          <span class='bold'><span itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a href="/justintime/nagios-plugins" class="js-slide-to" data-branch="master" data-direction="back" itemscope="url"><span itemprop="title">nagios-plugins</span></a></span></span><span class="separator"> / </span><span itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a href="/justintime/nagios-plugins/tree/master/check_mem" class="js-slide-to" data-branch="master" data-direction="back" itemscope="url"><span itemprop="title">check_mem</span></a></span><span class="separator"> / </span><strong class="final-path">check_mem.php</strong> <span class="js-zeroclipboard zeroclipboard-button" data-clipboard-text="check_mem/check_mem.php" data-copied-hint="copied!" title="copy to clipboard"><span class="mini-icon mini-icon-clipboard"></span></span>
        </div>

      <a href="/justintime/nagios-plugins/find/master" class="js-slide-to" data-hotkey="t" style="display:none">Show File Finder</a>


        
  <div class="commit file-history-tease">
    <img class="main-avatar" height="24" src="https://secure.gravatar.com/avatar/29be2ed93ef4cc97565a550d446f4ae9?s=140&amp;d=https://a248.e.akamai.net/assets.github.com%2Fimages%2Fgravatars%2Fgravatar-user-420.png" width="24" />
    <span class="author"><a href="/justintime" rel="author">justintime</a></span>
    <time class="js-relative-date" datetime="2011-12-20T13:48:58-08:00" title="2011-12-20 13:48:58">December 20, 2011</time>
    <div class="commit-title">
        <a href="/justintime/nagios-plugins/commit/90710c8baaab0ef0337f73c3baadeac633e132bb" class="message">Update check_mem/check_mem.php</a>
    </div>

    <div class="participation">
      <p class="quickstat"><a href="#blob_contributors_box" rel="facebox"><strong>1</strong> contributor</a></p>
      
    </div>
    <div id="blob_contributors_box" style="display:none">
      <h2>Users on GitHub who have contributed to this file</h2>
      <ul class="facebox-user-list">
        <li>
          <img height="24" src="https://secure.gravatar.com/avatar/29be2ed93ef4cc97565a550d446f4ae9?s=140&amp;d=https://a248.e.akamai.net/assets.github.com%2Fimages%2Fgravatars%2Fgravatar-user-420.png" width="24" />
          <a href="/justintime">justintime</a>
        </li>
      </ul>
    </div>
  </div>


    </div><!-- ./.frame-meta -->

    <div class="frames">
      <div class="frame" data-permalink-url="/justintime/nagios-plugins/blob/e3b162e6bb0cd7c6601933eeb0185f02d109739e/check_mem/check_mem.php" data-title="nagios-plugins/check_mem/check_mem.php at master · justintime/nagios-plugins · GitHub" data-type="blob">

        <div id="files" class="bubble">
          <div class="file">
            <div class="meta">
              <div class="info">
                <span class="icon"><b class="mini-icon mini-icon-text-file"></b></span>
                <span class="mode" title="File Mode">file</span>
                  <span>34 lines (27 sloc)</span>
                <span>1.317 kb</span>
              </div>
              <div class="actions">
                <div class="button-group">
                      <a class="minibutton js-entice" href=""
                         data-entice="You must be signed in and on a branch to make or propose changes">Edit</a>
                  <a href="/justintime/nagios-plugins/raw/master/check_mem/check_mem.php" class="button minibutton " id="raw-url">Raw</a>
                    <a href="/justintime/nagios-plugins/blame/master/check_mem/check_mem.php" class="button minibutton ">Blame</a>
                  <a href="/justintime/nagios-plugins/commits/master/check_mem/check_mem.php" class="button minibutton " rel="nofollow">History</a>
                </div><!-- /.button-group -->
              </div><!-- /.actions -->

            </div>
                <div class="data type-php js-blob-data">
      <table cellpadding="0" cellspacing="0" class="lines">
        <tr>
          <td>
            <pre class="line_numbers"><span id="L1" rel="#L1">1</span>
<span id="L2" rel="#L2">2</span>
<span id="L3" rel="#L3">3</span>
<span id="L4" rel="#L4">4</span>
<span id="L5" rel="#L5">5</span>
<span id="L6" rel="#L6">6</span>
<span id="L7" rel="#L7">7</span>
<span id="L8" rel="#L8">8</span>
<span id="L9" rel="#L9">9</span>
<span id="L10" rel="#L10">10</span>
<span id="L11" rel="#L11">11</span>
<span id="L12" rel="#L12">12</span>
<span id="L13" rel="#L13">13</span>
<span id="L14" rel="#L14">14</span>
<span id="L15" rel="#L15">15</span>
<span id="L16" rel="#L16">16</span>
<span id="L17" rel="#L17">17</span>
<span id="L18" rel="#L18">18</span>
<span id="L19" rel="#L19">19</span>
<span id="L20" rel="#L20">20</span>
<span id="L21" rel="#L21">21</span>
<span id="L22" rel="#L22">22</span>
<span id="L23" rel="#L23">23</span>
<span id="L24" rel="#L24">24</span>
<span id="L25" rel="#L25">25</span>
<span id="L26" rel="#L26">26</span>
<span id="L27" rel="#L27">27</span>
<span id="L28" rel="#L28">28</span>
<span id="L29" rel="#L29">29</span>
<span id="L30" rel="#L30">30</span>
<span id="L31" rel="#L31">31</span>
<span id="L32" rel="#L32">32</span>
<span id="L33" rel="#L33">33</span>
<span id="L34" rel="#L34">34</span>
</pre>
          </td>
          <td width="100%">
                  <div class="highlight"><pre><div class='line' id='LC1'><span class="c1">#</span></div><div class='line' id='LC2'><span class="c1"># check_mem.pl PNP4Nagios template</span></div><div class='line' id='LC3'><span class="c1"># v1.1 2011-12-20  </span></div><div class='line' id='LC4'><span class="c1">#</span></div><div class='line' id='LC5'><br/></div><div class='line' id='LC6'><span class="nv">$opt</span><span class="p">[</span><span class="mi">1</span><span class="p">]</span> <span class="o">=</span> <span class="s2">&quot;--title </span><span class="se">\&quot;</span><span class="s2">Statistics for </span><span class="si">$servicedesc</span><span class="s2"> on </span><span class="si">$hostname</span><span class="se">\&quot;</span><span class="s2"> -l 0 -u </span><span class="si">$MAX[2]</span><span class="s2"> &quot;</span><span class="p">;</span></div><div class='line' id='LC7'><br/></div><div class='line' id='LC8'><span class="nv">$def</span><span class="p">[</span><span class="mi">1</span><span class="p">]</span> <span class="o">=</span> <span class="s2">&quot;DEF:total=</span><span class="si">$RRDFILE[1]:$DS[1]</span><span class="s2">:AVERAGE &quot;</span><span class="p">;</span></div><div class='line' id='LC9'><span class="nv">$def</span><span class="p">[</span><span class="mi">1</span><span class="p">]</span> <span class="o">.=</span> <span class="s2">&quot;AREA:</span><span class="si">$ACT[1]#FFFFFF:\&quot;$NAME[1]</span><span class="se">\t\&quot;</span><span class="s2"> &quot;</span><span class="p">;</span></div><div class='line' id='LC10'><br/></div><div class='line' id='LC11'><span class="nv">$def</span><span class="p">[</span><span class="mi">1</span><span class="p">]</span> <span class="o">.=</span> <span class="s2">&quot;DEF:used=</span><span class="si">$RRDFILE[2]:$DS[2]</span><span class="s2">:AVERAGE &quot;</span><span class="p">;</span></div><div class='line' id='LC12'><span class="nv">$def</span><span class="p">[</span><span class="mi">1</span><span class="p">]</span> <span class="o">.=</span> <span class="s2">&quot;AREA:used#ff9999:</span><span class="se">\&quot;</span><span class="si">$NAME[2]</span><span class="se">\t\&quot;</span><span class="s2"> &quot;</span><span class="p">;</span></div><div class='line' id='LC13'><span class="nv">$def</span><span class="p">[</span><span class="mi">1</span><span class="p">]</span> <span class="o">.=</span> <span class="s2">&quot;GPRINT:used:LAST:</span><span class="se">\&quot;</span><span class="s2">%2.2lf &quot;</span><span class="o">.</span><span class="nv">$UNIT</span><span class="p">[</span><span class="mi">2</span><span class="p">]</span><span class="o">.</span><span class="s2">&quot; curr</span><span class="se">\&quot;</span><span class="s2"> &quot;</span><span class="p">;</span></div><div class='line' id='LC14'><span class="nv">$def</span><span class="p">[</span><span class="mi">1</span><span class="p">]</span> <span class="o">.=</span> <span class="s2">&quot;GPRINT:used:MAX:</span><span class="se">\&quot;</span><span class="s2">%2.2lf &quot;</span><span class="o">.</span><span class="nv">$UNIT</span><span class="p">[</span><span class="mi">2</span><span class="p">]</span><span class="o">.</span><span class="s2">&quot; max</span><span class="se">\&quot;</span><span class="s2"> &quot;</span><span class="p">;</span></div><div class='line' id='LC15'><span class="nv">$def</span><span class="p">[</span><span class="mi">1</span><span class="p">]</span> <span class="o">.=</span> <span class="s2">&quot;GPRINT:used:MIN:</span><span class="se">\&quot;</span><span class="s2">%2.2lf &quot;</span><span class="o">.</span><span class="nv">$UNIT</span><span class="p">[</span><span class="mi">2</span><span class="p">]</span><span class="o">.</span><span class="s2">&quot; min</span><span class="se">\\</span><span class="s2">n</span><span class="se">\&quot;</span><span class="s2"> &quot;</span><span class="p">;</span></div><div class='line' id='LC16'><br/></div><div class='line' id='LC17'><span class="nv">$def</span><span class="p">[</span><span class="mi">1</span><span class="p">]</span> <span class="o">.=</span> <span class="s2">&quot;DEF:free=</span><span class="si">$RRDFILE[3]:$DS[3]</span><span class="s2">:AVERAGE &quot;</span><span class="p">;</span></div><div class='line' id='LC18'><span class="nv">$def</span><span class="p">[</span><span class="mi">1</span><span class="p">]</span> <span class="o">.=</span> <span class="s2">&quot;AREA:free#99ff99:</span><span class="se">\&quot;</span><span class="si">$NAME[3]</span><span class="se">\t\&quot;</span><span class="s2">:STACK &quot;</span><span class="p">;</span></div><div class='line' id='LC19'><span class="nv">$def</span><span class="p">[</span><span class="mi">1</span><span class="p">]</span> <span class="o">.=</span> <span class="s2">&quot;GPRINT:free:LAST:</span><span class="se">\&quot;</span><span class="s2">%2.2lf &quot;</span><span class="o">.</span><span class="nv">$UNIT</span><span class="p">[</span><span class="mi">3</span><span class="p">]</span><span class="o">.</span><span class="s2">&quot; curr</span><span class="se">\&quot;</span><span class="s2"> &quot;</span><span class="p">;</span></div><div class='line' id='LC20'><span class="nv">$def</span><span class="p">[</span><span class="mi">1</span><span class="p">]</span> <span class="o">.=</span> <span class="s2">&quot;GPRINT:free:MAX:</span><span class="se">\&quot;</span><span class="s2">%2.2lf &quot;</span><span class="o">.</span><span class="nv">$UNIT</span><span class="p">[</span><span class="mi">3</span><span class="p">]</span><span class="o">.</span><span class="s2">&quot; max</span><span class="se">\&quot;</span><span class="s2"> &quot;</span><span class="p">;</span></div><div class='line' id='LC21'><span class="nv">$def</span><span class="p">[</span><span class="mi">1</span><span class="p">]</span> <span class="o">.=</span> <span class="s2">&quot;GPRINT:free:MIN:</span><span class="se">\&quot;</span><span class="s2">%2.2lf &quot;</span><span class="o">.</span><span class="nv">$UNIT</span><span class="p">[</span><span class="mi">3</span><span class="p">]</span><span class="o">.</span><span class="s2">&quot; min</span><span class="se">\\</span><span class="s2">n</span><span class="se">\&quot;</span><span class="s2"> &quot;</span><span class="p">;</span></div><div class='line' id='LC22'><br/></div><div class='line' id='LC23'><br/></div><div class='line' id='LC24'><span class="c1">################################################################</span></div><div class='line' id='LC25'><span class="c1"># Uncomment the following section to make the Cache</span></div><div class='line' id='LC26'><span class="c1"># appear on the graph</span></div><div class='line' id='LC27'><span class="c1">################################################################</span></div><div class='line' id='LC28'><br/></div><div class='line' id='LC29'><span class="c1"># $def[1] .= &quot;DEF:cache=$RRDFILE[4]:$DS[4]:AVERAGE &quot;;</span></div><div class='line' id='LC30'><span class="c1"># $def[1] .= &quot;AREA:cache#99ccff:\&quot;$NAME[4]\t\&quot; &quot;;</span></div><div class='line' id='LC31'><span class="c1"># $def[1] .= &quot;GPRINT:cache:LAST:\&quot;%2.2lf &quot;.$UNIT[4].&quot; curr\&quot; &quot;;</span></div><div class='line' id='LC32'><span class="c1"># $def[1] .= &quot;GPRINT:cache:MAX:\&quot;%2.2lf &quot;.$UNIT[4].&quot; max\&quot; &quot;;</span></div><div class='line' id='LC33'><span class="c1"># $def[1] .= &quot;GPRINT:cache:MIN:\&quot;%2.2lf &quot;.$UNIT[4].&quot; min\\n\&quot; &quot;;</span></div><div class='line' id='LC34'><span class="cp">?&gt;</span><span class="x"></span></div></pre></div>
          </td>
        </tr>
      </table>
  </div>

          </div>
        </div>

        <a href="#jump-to-line" rel="facebox" data-hotkey="l" class="js-jump-to-line" style="display:none">Jump to Line</a>
        <div id="jump-to-line" style="display:none">
          <h2>Jump to Line</h2>
          <form accept-charset="UTF-8" class="js-jump-to-line-form">
            <input class="textfield js-jump-to-line-field" type="text">
            <div class="full-button">
              <button type="submit" class="button">Go</button>
            </div>
          </form>
        </div>

      </div>
    </div>
</div>

<div id="js-frame-loading-template" class="frame frame-loading large-loading-area" style="display:none;">
  <img class="js-frame-loading-spinner" src="https://a248.e.akamai.net/assets.github.com/images/spinners/octocat-spinner-128.gif?1347543527" height="64" width="64">
</div>


        </div>
      </div>
      <div class="context-overlay"></div>
    </div>

      <div id="footer-push"></div><!-- hack for sticky footer -->
    </div><!-- end of wrapper - hack for sticky footer -->

      <!-- footer -->
      <div id="footer">
  <div class="container clearfix">

      <dl class="footer_nav">
        <dt>GitHub</dt>
        <dd><a href="https://github.com/about">About us</a></dd>
        <dd><a href="https://github.com/blog">Blog</a></dd>
        <dd><a href="https://github.com/contact">Contact &amp; support</a></dd>
        <dd><a href="http://enterprise.github.com/">GitHub Enterprise</a></dd>
        <dd><a href="http://status.github.com/">Site status</a></dd>
      </dl>

      <dl class="footer_nav">
        <dt>Applications</dt>
        <dd><a href="http://mac.github.com/">GitHub for Mac</a></dd>
        <dd><a href="http://windows.github.com/">GitHub for Windows</a></dd>
        <dd><a href="http://eclipse.github.com/">GitHub for Eclipse</a></dd>
        <dd><a href="http://mobile.github.com/">GitHub mobile apps</a></dd>
      </dl>

      <dl class="footer_nav">
        <dt>Services</dt>
        <dd><a href="http://get.gaug.es/">Gauges: Web analytics</a></dd>
        <dd><a href="http://speakerdeck.com">Speaker Deck: Presentations</a></dd>
        <dd><a href="https://gist.github.com">Gist: Code snippets</a></dd>
        <dd><a href="http://jobs.github.com/">Job board</a></dd>
      </dl>

      <dl class="footer_nav">
        <dt>Documentation</dt>
        <dd><a href="http://help.github.com/">GitHub Help</a></dd>
        <dd><a href="http://developer.github.com/">Developer API</a></dd>
        <dd><a href="http://github.github.com/github-flavored-markdown/">GitHub Flavored Markdown</a></dd>
        <dd><a href="http://pages.github.com/">GitHub Pages</a></dd>
      </dl>

      <dl class="footer_nav">
        <dt>More</dt>
        <dd><a href="http://training.github.com/">Training</a></dd>
        <dd><a href="https://github.com/edu">Students &amp; teachers</a></dd>
        <dd><a href="http://shop.github.com">The Shop</a></dd>
        <dd><a href="/plans">Plans &amp; pricing</a></dd>
        <dd><a href="http://octodex.github.com/">The Octodex</a></dd>
      </dl>

      <hr class="footer-divider">


    <p class="right">&copy; 2013 <span title="0.06250s from fe2.rs.github.com">GitHub</span>, Inc. All rights reserved.</p>
    <a class="left" href="https://github.com/">
      <span class="mega-icon mega-icon-invertocat"></span>
    </a>
    <ul id="legal">
        <li><a href="https://github.com/site/terms">Terms of Service</a></li>
        <li><a href="https://github.com/site/privacy">Privacy</a></li>
        <li><a href="https://github.com/security">Security</a></li>
    </ul>

  </div><!-- /.container -->

</div><!-- /.#footer -->


    <div class="fullscreen-overlay js-fullscreen-overlay" id="fullscreen_overlay">
  <div class="fullscreen-container js-fullscreen-container">
    <div class="textarea-wrap">
      <textarea name="fullscreen-contents" id="fullscreen-contents" class="js-fullscreen-contents" placeholder="" data-suggester="fullscreen_suggester"></textarea>
          <div class="suggester-container">
              <div class="suggester fullscreen-suggester js-navigation-container" id="fullscreen_suggester"
                 data-url="/justintime/nagios-plugins/suggestions/commit">
              </div>
          </div>
    </div>
  </div>
  <div class="fullscreen-sidebar">
    <a href="#" class="exit-fullscreen js-exit-fullscreen tooltipped leftwards" title="Exit Zen Mode">
      <span class="mega-icon mega-icon-normalscreen"></span>
    </a>
    <a href="#" class="theme-switcher js-theme-switcher tooltipped leftwards"
      title="Switch themes">
      <span class="mini-icon mini-icon-brightness"></span>
    </a>
  </div>
</div>



    <div id="ajax-error-message" class="flash flash-error">
      <span class="mini-icon mini-icon-exclamation"></span>
      Something went wrong with that request. Please try again.
      <a href="#" class="mini-icon mini-icon-remove-close ajax-error-dismiss"></a>
    </div>

    
    
    <span id='server_response_time' data-time='0.06294' data-host='fe2'></span>
    
  </body>
</html>

