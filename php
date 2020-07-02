文件夹 PATH 列表
卷序列号为 A5EB-573A
E:.
│  .gitattributes
│  .gitignore
│  build.php
│  composer.json
│  composer.lock
│  CONTRIBUTING.md
│  LICENSE.txt
│  php
│  README.md
│  think
│  
├─application
│  │  .htaccess
│  │  command.php
│  │  common.php
│  │  config.php
│  │  database.php
│  │  route.php
│  │  tags.php
│  │  
│  ├─admins
│  │  ├─controller
│  │  │      Account.php
│  │  │      Admin.php
│  │  │      BaseAdmin.php
│  │  │      Document.php
│  │  │      Home.php
│  │  │      Labels.php
│  │  │      Menu.php
│  │  │      Message.php
│  │  │      Roles.php
│  │  │      Site.php
│  │  │      Slide.php
│  │  │      Test.php
│  │  │      User.php
│  │  │      Video.php
│  │  │      
│  │  └─view
│  │      ├─account
│  │      │      login.html
│  │      │      
│  │      ├─admin
│  │      │      add.html
│  │      │      index.html
│  │      │      
│  │      ├─document
│  │      │      add.html
│  │      │      index.html
│  │      │      
│  │      ├─home
│  │      │      index.html
│  │      │      test.html
│  │      │      welcome.html
│  │      │      
│  │      ├─labels
│  │      │      area.html
│  │      │      channel.html
│  │      │      charge.html
│  │      │      
│  │      ├─menu
│  │      │      index.html
│  │      │      
│  │      ├─message
│  │      │      disagree_show.html
│  │      │      index.html
│  │      │      
│  │      ├─roles
│  │      │      add.html
│  │      │      index.html
│  │      │      
│  │      ├─site
│  │      │      index.html
│  │      │      
│  │      ├─slide
│  │      │      add.html
│  │      │      index.html
│  │      │      
│  │      ├─user
│  │      │      add.html
│  │      │      index.html
│  │      │      
│  │      └─video
│  │              add.html
│  │              index.html
│  │              
│  └─index
│      ├─controller
│      │      Index.php
│      │      
│      └─view
│          └─index
│                  document.html
│                  get_detail.html
│                  index.html
│                  login.html
│                  password.html
│                  ppt.html
│                  register.html
│                  search.html
│                  tags.html
│                  video.html
│                  videos.html
│                  
├─extend
│  │  .gitignore
│  │  
│  └─Util
│      └─data
│              Sysdb.php
│              
├─public
│  │  .htaccess
│  │  admins.php
│  │  favicon.ico
│  │  index.php
│  │  robots.txt
│  │  router.php
│  │  
│  ├─static
│  │  │  .DS_Store
│  │  │  .gitignore
│  │  │  
│  │  └─plugins
│  │      │  .DS_Store
│  │      │  
│  │      ├─dist
│  │      │  ├─css
│  │      │  │      bootstrap-theme.css
│  │      │  │      bootstrap-theme.css.map
│  │      │  │      bootstrap-theme.min.css
│  │      │  │      bootstrap-theme.min.css.map
│  │      │  │      bootstrap.css
│  │      │  │      bootstrap.css.map
│  │      │  │      bootstrap.min.css
│  │      │  │      bootstrap.min.css.map
│  │      │  │      
│  │      │  ├─fonts
│  │      │  │      glyphicons-halflings-regular.eot
│  │      │  │      glyphicons-halflings-regular.svg
│  │      │  │      glyphicons-halflings-regular.ttf
│  │      │  │      glyphicons-halflings-regular.woff
│  │      │  │      glyphicons-halflings-regular.woff2
│  │      │  │      
│  │      │  └─js
│  │      │          bootstrap.js
│  │      │          bootstrap.min.js
│  │      │          npm.js
│  │      │          
│  │      ├─js
│  │      │      mouseEvent.js
│  │      │      upDocuments.js
│  │      │      
│  │      └─layui
│  │          │  layui.all.js
│  │          │  layui.js
│  │          │  
│  │          ├─css
│  │          │  │  layui.css
│  │          │  │  layui.mobile.css
│  │          │  │  
│  │          │  └─modules
│  │          │      │  code.css
│  │          │      │  
│  │          │      ├─laydate
│  │          │      │  └─default
│  │          │      │          laydate.css
│  │          │      │          
│  │          │      └─layer
│  │          │          └─default
│  │          │                  icon-ext.png
│  │          │                  icon.png
│  │          │                  layer.css
│  │          │                  loading-0.gif
│  │          │                  loading-1.gif
│  │          │                  loading-2.gif
│  │          │                  
│  │          ├─font
│  │          │      iconfont.eot
│  │          │      iconfont.svg
│  │          │      iconfont.ttf
│  │          │      iconfont.woff
│  │          │      iconfont.woff2
│  │          │      
│  │          ├─images
│  │          │  │  .DS_Store
│  │          │  │  
│  │          │  ├─face
│  │          │  │      0.gif
│  │          │  │      1.gif
│  │          │  │      10.gif
│  │          │  │      11.gif
│  │          │  │      12.gif
│  │          │  │      13.gif
│  │          │  │      14.gif
│  │          │  │      15.gif
│  │          │  │      16.gif
│  │          │  │      17.gif
│  │          │  │      18.gif
│  │          │  │      19.gif
│  │          │  │      2.gif
│  │          │  │      20.gif
│  │          │  │      21.gif
│  │          │  │      22.gif
│  │          │  │      23.gif
│  │          │  │      24.gif
│  │          │  │      25.gif
│  │          │  │      26.gif
│  │          │  │      27.gif
│  │          │  │      28.gif
│  │          │  │      29.gif
│  │          │  │      3.gif
│  │          │  │      30.gif
│  │          │  │      31.gif
│  │          │  │      32.gif
│  │          │  │      33.gif
│  │          │  │      34.gif
│  │          │  │      35.gif
│  │          │  │      36.gif
│  │          │  │      37.gif
│  │          │  │      38.gif
│  │          │  │      39.gif
│  │          │  │      4.gif
│  │          │  │      40.gif
│  │          │  │      41.gif
│  │          │  │      42.gif
│  │          │  │      43.gif
│  │          │  │      44.gif
│  │          │  │      45.gif
│  │          │  │      46.gif
│  │          │  │      47.gif
│  │          │  │      48.gif
│  │          │  │      49.gif
│  │          │  │      5.gif
│  │          │  │      50.gif
│  │          │  │      51.gif
│  │          │  │      52.gif
│  │          │  │      53.gif
│  │          │  │      54.gif
│  │          │  │      55.gif
│  │          │  │      56.gif
│  │          │  │      57.gif
│  │          │  │      58.gif
│  │          │  │      59.gif
│  │          │  │      6.gif
│  │          │  │      60.gif
│  │          │  │      61.gif
│  │          │  │      62.gif
│  │          │  │      63.gif
│  │          │  │      64.gif
│  │          │  │      65.gif
│  │          │  │      66.gif
│  │          │  │      67.gif
│  │          │  │      68.gif
│  │          │  │      69.gif
│  │          │  │      7.gif
│  │          │  │      70.gif
│  │          │  │      71.gif
│  │          │  │      8.gif
│  │          │  │      9.gif
│  │          │  │      
│  │          │  └─resources
│  │          │          .DS_Store
│  │          │          book.jpg
│  │          │          c.jpg
│  │          │          php.jpg
│  │          │          video.png
│  │          │          videos.png
│  │          │          
│  │          └─lay
│  │              └─modules
│  │                      carousel.js
│  │                      code.js
│  │                      colorpicker.js
│  │                      element.js
│  │                      flow.js
│  │                      form.js
│  │                      jquery.js
│  │                      laydate.js
│  │                      layedit.js
│  │                      layer.js
│  │                      laypage.js
│  │                      laytpl.js
│  │                      mobile.js
│  │                      rate.js
│  │                      slider.js
│  │                      table.js
│  │                      transfer.js
│  │                      tree.js
│  │                      upload.js
│  │                      util.js
│  │                      
│  └─uploads
│      ├─20190609
│      │      72ac3c2c5e56080da9fb4dfaf88e44f7.jpg
│      │      a29d3e21e19c217a01640bdb4ba404b7.jpg
│      │      da0a006c00689c67ad75d3ebd2bbebb6.jpg
│      │      
│      ├─20190610
│      │      417f678718b922b399d6b34ea04947ad.jpg
│      │      c43936d4dd96a9f0b6dddc6462806ee4.jpg
│      │      
│      ├─20200219
│      │      043e3c6601774c21ded701aed7378a9c.png
│      │      152c7a46ba222a76cbb71ed1ec05a2ad.png
│      │      320f7020783cfbb18d6eebb7bb69dd8f.png
│      │      42530dcf15dd782a918ba30ea94cb304.png
│      │      47e0821ba6fc20b3b0760012e86d12f5.png
│      │      4e50fe0a91aa14c23aa2879176a12ff5.png
│      │      77d31a770be93c28778c75b3e171cc23.png
│      │      82ee0052dd3989a74cf35012bffac1f5.png
│      │      b4ce5dabb08508d322e0b0ac1eb5dfc9.png
│      │      b9cd62e4eeb0e11f641263d558313f14.png
│      │      
│      ├─20200301
│      │      afb49ecef34070a1b9da86319d0e4bc2.png
│      │      b43e26eb5e5839b259ee30b8bb12071d.png
│      │      e79ae680a8cda3809852ebec6c47732a.png
│      │      
│      ├─20200315
│      │      2605d583cb88460def9ab7aaec6aa1b3.png
│      │      7e324f4725713509fefa215ce9a5b12f.png
│      │      
│      ├─20200324
│      │      24da0c63d97032eb2c8b796d592ffc59.png
│      │      4c27e7331ffefd82f8ad29f4b14d2366.png
│      │      7352482a437113ef8ed57d118efb255d.png
│      │      babb2e30e9da207459297cb6d05abb79.png
│      │      e318b211f2237b7b0f9d38f7976272cf.png
│      │      
│      ├─20200402
│      │      170d3f7bbe5b847e1741e506259b94a7.png
│      │      a70f7c4c89f07fa6500d0089d8b1e261.png
│      │      e38a83f7c18220d75d01a9564a405d74.png
│      │      e691e69b8c8194fdf3905b936f7add4a.png
│      │      
│      ├─20200403
│      │      d6c262b29ecc0458d0d8336dcfaa9567.png
│      │      
│      ├─20200424
│      │      065aa099cdb0a5d4b7ac87edecbf3464.png
│      │      162463e944c73b06badcbaec094b8a67.docx
│      │      1efb499e0cd15348ae75c794eb33616f.png
│      │      2ad14dc74dcc43f67401c453f8fd73e2.docx
│      │      319eba892d01488ac129a21c7c3ac8f2.pdf
│      │      45489876701890e6fceefdf77b113bb0.png
│      │      552ef8203d445e6f7bc8d3d5ea5629f3.png
│      │      612265cea4b51f1059694314b8dc9636.png
│      │      6884168a51034bb64b100d151035699b.png
│      │      7bded6aea0ed1f9b6d1bac1f4f0fb55a.png
│      │      821245500c1a794675af4a81ba9c815e.png
│      │      8944164bf6d499ecd674f7d25e929a6a.png
│      │      8dfff7a544f56777dd3e8007425bc244.png
│      │      cdf3d61a789cd2f07e90f27666c6abc1.pptx
│      │      d8827d862b8f6f0f2153e2f388f18ff3.pdf
│      │      d8ef3999eaa02bfd30b6f9a57a6454d7.docx
│      │      dc5d44f4da3cb59fcebde4548c7efdc0.pdf
│      │      f51a52e0e9912b4006eba5fd1efd971a.docx
│      │      
│      ├─20200425
│      │      0eddd66c2e5f5ad24334b0a2611f8244.pdf
│      │      1966ff898cff3d031fceb99d8978a72d.pptx
│      │      f597303b86f04d2927f85069b5cf991f.pdf
│      │      
│      └─20200528
│              b9937fc9dff61e4a8a4b636f0721af50.pdf
│              f783c59d76c5807e0a9c4b885398fa72.png
│              
├─runtime
│  │  .gitignore
│  │  
│  ├─cache
│  ├─log
│  │  ├─201906
│  │  │      03.log
│  │  │      04.log
│  │  │      05.log
│  │  │      06.log
│  │  │      07.log
│  │  │      08.log
│  │  │      09.log
│  │  │      10.log
│  │  │      11.log
│  │  │      12.log
│  │  │      13.log
│  │  │      1560001588-08.log
│  │  │      1560067842-09.log
│  │  │      
│  │  ├─201909
│  │  │      09.log
│  │  │      10.log
│  │  │      15.log
│  │  │      17.log
│  │  │      18.log
│  │  │      
│  │  ├─202001
│  │  │      08.log
│  │  │      11.log
│  │  │      12.log
│  │  │      23.log
│  │  │      25.log
│  │  │      26.log
│  │  │      27.log
│  │  │      
│  │  ├─202002
│  │  │      05.log
│  │  │      09.log
│  │  │      13.log
│  │  │      19.log
│  │  │      
│  │  ├─202003
│  │  │      01.log
│  │  │      12.log
│  │  │      15.log
│  │  │      19.log
│  │  │      24.log
│  │  │      30.log
│  │  │      31.log
│  │  │      
│  │  ├─202004
│  │  │      01.log
│  │  │      02.log
│  │  │      03.log
│  │  │      12.log
│  │  │      1587738297-24.log
│  │  │      16.log
│  │  │      17.log
│  │  │      24.log
│  │  │      25.log
│  │  │      26.log
│  │  │      30.log
│  │  │      
│  │  ├─202005
│  │  │      02.log
│  │  │      12.log
│  │  │      15.log
│  │  │      1590589360-27.log
│  │  │      25.log
│  │  │      27.log
│  │  │      28.log
│  │  │      31.log
│  │  │      
│  │  └─202006
│  │          06.log
│  │          07.log
│  │          
│  └─temp
│          0233ae4c6cf425af5b74dfbaf52c586a.php
│          04babf84feb75a65cdc270daabfaf8b3.php
│          06c2ebebee1a6b90850dc8144c7fed66.php
│          21759663e19f724551156589105e80fe.php
│          2623e4c2b3eed63ffe2098d94a96cf95.php
│          29f866491d3e327afab1d0b051db4900.php
│          2a36eeef3acb355bf639745df2aa9bf6.php
│          2c16b0c1d915a29f3702a9ce3fc77208.php
│          2eddbc536489fe552c4d5cdcbe87c195.php
│          33bc58eabffb42b7e74c0caff7fdc29e.php
│          37aaa553007791abb1e87bd6098d4079.php
│          37b7f821a330431876e740a7231eb014.php
│          3dbef7222af7276214d54016191a5bef.php
│          4a0f5cef1fc740b3b5f9f69df1e16b58.php
│          4cbedd19e95fe73089578834cef8ca09.php
│          4dfeadd627f14f9ef3784a91eea92048.php
│          52060ff49a1035c13d3d6b9f7675fb43.php
│          61a72e13aac020df593f24b37db9bbbf.php
│          6607c7daea16e9cb06297a1ca2d89f30.php
│          68471943ce9f04c7390b49bc00c13f77.php
│          6d730cb32195e077e5b49afe1aae2dad.php
│          79d13750fbc09f7e3631ca8dabe5b3f9.php
│          7b9609d7c1b0165435b83a1fca84d95f.php
│          7f7872568f355da30a8388090419b5a6.php
│          84c2431735617108bc7762eff7567647.php
│          8e8e6d447f529a113fb63532a5075fd2.php
│          8f17a18a7ad4399f55691c8a27159429.php
│          91c9546e83c144b533e623021e537752.php
│          958cf6693a1fe539ef0b4dd5a600275a.php
│          97a05bd5f077c3cf664ccc87bcb435fd.php
│          9b68ecb481d591ce20ffdaabf465daa3.php
│          9ca31368dcf024b0ee5446a296c917b2.php
│          9dafec43f31250859c6dc932ea7c4020.php
│          a1559d8da2226fb27ceef0057fd05635.php
│          a6a1c170122c563aaf75b2de1f90414c.php
│          b249bbc5966683bef92500e17a10ab80.php
│          b328c2e681fc69ef5d61525a0bb5d49c.php
│          b755c25b94d56e81e37da460539e5c1a.php
│          b76d6cbf3c4627299038fffb7740d9e3.php
│          bb79def9d18597e3232dd90eb0813cd5.php
│          c3149db1ba90080c768afa8dd7c3f2ef.php
│          c4433c664091912fe59c0738163da4e7.php
│          c4d61c857721f72bdd95af8d598eaa45.php
│          c957ea8cd10026525ccaec6cfc7c9d79.php
│          cd299c788c4e93dbd074f07b8b9b52dd.php
│          cecd197fb144117009c8ea469722c59a.php
│          d5b3e3b512e7c1ec3db1ff1a03ed9663.php
│          d997cf948c1ac6629612d2b689764a37.php
│          df84f73b6e94036b90b9d3a865b9d27e.php
│          e1d20af55bfbd5f72babce48fe01c469.php
│          e905ce7e0c5a85179c6f192fb7684834.php
│          ecd992f9313136e642077e616d477b48.php
│          f0077fc26feead26515c7f4074ac079d.php
│          f1eceb1f4f78301a02ef7f9334d87263.php
│          f47a615c708c91dad501d4c3df25aec2.php
│          f69c111ef0fe65c4370f6afa58ba3777.php
│          fa6f77d8901cae61c73675ce23732ec5.php
│          fc02a1893bf8be66f8a7faddcc6b6b6a.php
│          
├─thinkphp
│  │  .gitignore
│  │  .htaccess
│  │  .travis.yml
│  │  base.php
│  │  codecov.yml
│  │  composer.json
│  │  console.php
│  │  CONTRIBUTING.md
│  │  convention.php
│  │  helper.php
│  │  LICENSE.txt
│  │  logo.png
│  │  phpunit.xml
│  │  README.md
│  │  start.php
│  │  
│  ├─.git
│  │  │  config
│  │  │  description
│  │  │  HEAD
│  │  │  index
│  │  │  ORIG_HEAD
│  │  │  packed-refs
│  │  │  
│  │  ├─hooks
│  │  │      applypatch-msg.sample
│  │  │      commit-msg.sample
│  │  │      fsmonitor-watchman.sample
│  │  │      post-update.sample
│  │  │      pre-applypatch.sample
│  │  │      pre-commit.sample
│  │  │      pre-push.sample
│  │  │      pre-rebase.sample
│  │  │      pre-receive.sample
│  │  │      prepare-commit-msg.sample
│  │  │      update.sample
│  │  │      
│  │  ├─info
│  │  │      exclude
│  │  │      refs
│  │  │      
│  │  ├─logs
│  │  │  │  HEAD
│  │  │  │  
│  │  │  └─refs
│  │  │      ├─heads
│  │  │      │      6.0
│  │  │      │      master
│  │  │      │      
│  │  │      └─remotes
│  │  │          └─origin
│  │  │                  HEAD
│  │  │                  
│  │  ├─objects
│  │  │  ├─info
│  │  │  │      packs
│  │  │  │      
│  │  │  └─pack
│  │  │          pack-08d49daad4cd09ee6f6ceac78de824b7aa9273a6.idx
│  │  │          pack-08d49daad4cd09ee6f6ceac78de824b7aa9273a6.pack
│  │  │          
│  │  └─refs
│  │      ├─heads
│  │      │      6.0
│  │      │      master
│  │      │      
│  │      ├─remotes
│  │      │  └─origin
│  │      │          HEAD
│  │      │          
│  │      └─tags
│  ├─lang
│  │      zh-cn.php
│  │      
│  ├─library
│  │  ├─think
│  │  │  │  App.php
│  │  │  │  Build.php
│  │  │  │  Cache.php
│  │  │  │  Collection.php
│  │  │  │  Config.php
│  │  │  │  Console.php
│  │  │  │  Controller.php
│  │  │  │  Cookie.php
│  │  │  │  Db.php
│  │  │  │  Debug.php
│  │  │  │  Env.php
│  │  │  │  Error.php
│  │  │  │  Exception.php
│  │  │  │  File.php
│  │  │  │  Hook.php
│  │  │  │  Lang.php
│  │  │  │  Loader.php
│  │  │  │  Log.php
│  │  │  │  Model.php
│  │  │  │  Paginator.php
│  │  │  │  Process.php
│  │  │  │  Request.php
│  │  │  │  Response.php
│  │  │  │  Route.php
│  │  │  │  Session.php
│  │  │  │  Template.php
│  │  │  │  Url.php
│  │  │  │  Validate.php
│  │  │  │  View.php
│  │  │  │  
│  │  │  ├─cache
│  │  │  │  │  Driver.php
│  │  │  │  │  
│  │  │  │  └─driver
│  │  │  │          File.php
│  │  │  │          Lite.php
│  │  │  │          Memcache.php
│  │  │  │          Memcached.php
│  │  │  │          Redis.php
│  │  │  │          Sqlite.php
│  │  │  │          Wincache.php
│  │  │  │          Xcache.php
│  │  │  │          
│  │  │  ├─config
│  │  │  │  └─driver
│  │  │  │          Ini.php
│  │  │  │          Json.php
│  │  │  │          Xml.php
│  │  │  │          
│  │  │  ├─console
│  │  │  │  │  Command.php
│  │  │  │  │  Input.php
│  │  │  │  │  LICENSE
│  │  │  │  │  Output.php
│  │  │  │  │  
│  │  │  │  ├─bin
│  │  │  │  │      hiddeninput.exe
│  │  │  │  │      README.md
│  │  │  │  │      
│  │  │  │  ├─command
│  │  │  │  │  │  Build.php
│  │  │  │  │  │  Clear.php
│  │  │  │  │  │  Help.php
│  │  │  │  │  │  Lists.php
│  │  │  │  │  │  Make.php
│  │  │  │  │  │  
│  │  │  │  │  ├─make
│  │  │  │  │  │  │  Controller.php
│  │  │  │  │  │  │  Model.php
│  │  │  │  │  │  │  
│  │  │  │  │  │  └─stubs
│  │  │  │  │  │          controller.plain.stub
│  │  │  │  │  │          controller.stub
│  │  │  │  │  │          model.stub
│  │  │  │  │  │          
│  │  │  │  │  └─optimize
│  │  │  │  │          Autoload.php
│  │  │  │  │          Config.php
│  │  │  │  │          Route.php
│  │  │  │  │          Schema.php
│  │  │  │  │          
│  │  │  │  ├─input
│  │  │  │  │      Argument.php
│  │  │  │  │      Definition.php
│  │  │  │  │      Option.php
│  │  │  │  │      
│  │  │  │  └─output
│  │  │  │      │  Ask.php
│  │  │  │      │  Descriptor.php
│  │  │  │      │  Formatter.php
│  │  │  │      │  Question.php
│  │  │  │      │  
│  │  │  │      ├─descriptor
│  │  │  │      │      Console.php
│  │  │  │      │      
│  │  │  │      ├─driver
│  │  │  │      │      Buffer.php
│  │  │  │      │      Console.php
│  │  │  │      │      Nothing.php
│  │  │  │      │      
│  │  │  │      ├─formatter
│  │  │  │      │      Stack.php
│  │  │  │      │      Style.php
│  │  │  │      │      
│  │  │  │      └─question
│  │  │  │              Choice.php
│  │  │  │              Confirmation.php
│  │  │  │              
│  │  │  ├─controller
│  │  │  │      Rest.php
│  │  │  │      Yar.php
│  │  │  │      
│  │  │  ├─db
│  │  │  │  │  Builder.php
│  │  │  │  │  Connection.php
│  │  │  │  │  Expression.php
│  │  │  │  │  Query.php
│  │  │  │  │  
│  │  │  │  ├─builder
│  │  │  │  │      Mysql.php
│  │  │  │  │      Pgsql.php
│  │  │  │  │      Sqlite.php
│  │  │  │  │      Sqlsrv.php
│  │  │  │  │      
│  │  │  │  ├─connector
│  │  │  │  │      Mysql.php
│  │  │  │  │      Pgsql.php
│  │  │  │  │      pgsql.sql
│  │  │  │  │      Sqlite.php
│  │  │  │  │      Sqlsrv.php
│  │  │  │  │      
│  │  │  │  └─exception
│  │  │  │          BindParamException.php
│  │  │  │          DataNotFoundException.php
│  │  │  │          ModelNotFoundException.php
│  │  │  │          
│  │  │  ├─debug
│  │  │  │      Console.php
│  │  │  │      Html.php
│  │  │  │      
│  │  │  ├─exception
│  │  │  │      ClassNotFoundException.php
│  │  │  │      DbException.php
│  │  │  │      ErrorException.php
│  │  │  │      Handle.php
│  │  │  │      HttpException.php
│  │  │  │      HttpResponseException.php
│  │  │  │      PDOException.php
│  │  │  │      RouteNotFoundException.php
│  │  │  │      TemplateNotFoundException.php
│  │  │  │      ThrowableError.php
│  │  │  │      ValidateException.php
│  │  │  │      
│  │  │  ├─log
│  │  │  │  └─driver
│  │  │  │          File.php
│  │  │  │          Socket.php
│  │  │  │          Test.php
│  │  │  │          
│  │  │  ├─model
│  │  │  │  │  Collection.php
│  │  │  │  │  Merge.php
│  │  │  │  │  Pivot.php
│  │  │  │  │  Relation.php
│  │  │  │  │  
│  │  │  │  └─relation
│  │  │  │          BelongsTo.php
│  │  │  │          BelongsToMany.php
│  │  │  │          HasMany.php
│  │  │  │          HasManyThrough.php
│  │  │  │          HasOne.php
│  │  │  │          MorphMany.php
│  │  │  │          MorphOne.php
│  │  │  │          MorphTo.php
│  │  │  │          OneToOne.php
│  │  │  │          
│  │  │  ├─paginator
│  │  │  │  └─driver
│  │  │  │          Bootstrap.php
│  │  │  │          
│  │  │  ├─process
│  │  │  │  │  Builder.php
│  │  │  │  │  Utils.php
│  │  │  │  │  
│  │  │  │  ├─exception
│  │  │  │  │      Failed.php
│  │  │  │  │      Timeout.php
│  │  │  │  │      
│  │  │  │  └─pipes
│  │  │  │          Pipes.php
│  │  │  │          Unix.php
│  │  │  │          Windows.php
│  │  │  │          
│  │  │  ├─response
│  │  │  │      Json.php
│  │  │  │      Jsonp.php
│  │  │  │      Redirect.php
│  │  │  │      View.php
│  │  │  │      Xml.php
│  │  │  │      
│  │  │  ├─session
│  │  │  │  └─driver
│  │  │  │          Memcache.php
│  │  │  │          Memcached.php
│  │  │  │          Redis.php
│  │  │  │          
│  │  │  ├─template
│  │  │  │  │  TagLib.php
│  │  │  │  │  
│  │  │  │  ├─driver
│  │  │  │  │      File.php
│  │  │  │  │      
│  │  │  │  └─taglib
│  │  │  │          Cx.php
│  │  │  │          
│  │  │  └─view
│  │  │      └─driver
│  │  │              Php.php
│  │  │              Think.php
│  │  │              
│  │  └─traits
│  │      ├─controller
│  │      │      Jump.php
│  │      │      
│  │      ├─model
│  │      │      SoftDelete.php
│  │      │      
│  │      └─think
│  │              Instance.php
│  │              
│  ├─tests
│  │  │  .gitignore
│  │  │  mock.php
│  │  │  README.md
│  │  │  
│  │  ├─application
│  │  │  │  config.php
│  │  │  │  database.php
│  │  │  │  route.php
│  │  │  │  
│  │  │  ├─index
│  │  │  │  └─controller
│  │  │  │          Index.php
│  │  │  │          
│  │  │  └─views
│  │  │          display.html
│  │  │          display.phtml
│  │  │          extend.html
│  │  │          extend2.html
│  │  │          include.html
│  │  │          include2.html
│  │  │          layout.html
│  │  │          layout2.html
│  │  │          
│  │  ├─conf
│  │  │      memcached.ini
│  │  │      redis.ini
│  │  │      timezone.ini
│  │  │      
│  │  ├─script
│  │  │      install.sh
│  │  │      
│  │  └─thinkphp
│  │      │  baseTest.php
│  │      │  
│  │      └─library
│  │          ├─think
│  │          │  │  appTest.php
│  │          │  │  buildTest.php
│  │          │  │  cacheTest.php
│  │          │  │  configTest.php
│  │          │  │  controllerTest.php
│  │          │  │  cookieTest.php
│  │          │  │  dbTest.php
│  │          │  │  debugTest.php
│  │          │  │  exceptionTest.php
│  │          │  │  hookTest.php
│  │          │  │  langTest.php
│  │          │  │  loaderTest.php
│  │          │  │  logTest.php
│  │          │  │  paginateTest.php
│  │          │  │  requestTest.php
│  │          │  │  responseTest.php
│  │          │  │  routeTest.php
│  │          │  │  sessionTest.php
│  │          │  │  templateTest.php
│  │          │  │  urlTest.php
│  │          │  │  validateTest.php
│  │          │  │  viewTest.php
│  │          │  │  
│  │          │  ├─behavior
│  │          │  │      One.php
│  │          │  │      Three.php
│  │          │  │      Two.php
│  │          │  │      
│  │          │  ├─cache
│  │          │  │  └─driver
│  │          │  │          cacheTestCase.php
│  │          │  │          fileTest.php
│  │          │  │          liteTest.php
│  │          │  │          memcachedTest.php
│  │          │  │          memcacheTest.php
│  │          │  │          redisTest.php
│  │          │  │          
│  │          │  ├─config
│  │          │  │  │  ConfigInitTrait.php
│  │          │  │  │  
│  │          │  │  └─driver
│  │          │  │      │  iniTest.php
│  │          │  │      │  jsonTest.php
│  │          │  │      │  xmlTest.php
│  │          │  │      │  
│  │          │  │      └─fixtures
│  │          │  │              config.ini
│  │          │  │              config.json
│  │          │  │              config.xml
│  │          │  │              
│  │          │  ├─controller
│  │          │  │      .gitignore
│  │          │  │      
│  │          │  ├─db
│  │          │  │  └─driver
│  │          │  │          .gitignore
│  │          │  │          
│  │          │  ├─lang
│  │          │  │      lang.php
│  │          │  │      
│  │          │  ├─loader
│  │          │  │  └─test
│  │          │  │          Hello.php
│  │          │  │          
│  │          │  ├─log
│  │          │  │  └─driver
│  │          │  │          fileTest.php
│  │          │  │          
│  │          │  ├─model
│  │          │  │      .gitignore
│  │          │  │      
│  │          │  ├─session
│  │          │  │      .gitignore
│  │          │  │      
│  │          │  ├─template
│  │          │  │  ├─driver
│  │          │  │  │      .gitignore
│  │          │  │  │      
│  │          │  │  └─taglib
│  │          │  │          cxTest.php
│  │          │  │          
│  │          │  └─view
│  │          │      ├─driver
│  │          │      │      .gitignore
│  │          │      │      
│  │          │      └─theme
│  │          │          └─index
│  │          │                  template.html
│  │          │                  
│  │          └─traits
│  │              ├─controller
│  │              │      jumpTest.php
│  │              │      
│  │              ├─model
│  │              │      softDeleteTest.php
│  │              │      
│  │              └─think
│  │                      instanceTest.php
│  │                      
│  └─tpl
│          default_index.tpl
│          dispatch_jump.tpl
│          page_trace.tpl
│          think_exception.tpl
│          
└─vendor
    │  .gitignore
    │  autoload.php
    │  
    ├─composer
    │      autoload_classmap.php
    │      autoload_files.php
    │      autoload_namespaces.php
    │      autoload_psr4.php
    │      autoload_real.php
    │      autoload_static.php
    │      ClassLoader.php
    │      installed.json
    │      LICENSE
    │      
    └─topthink
        ├─think-captcha
        │  │  .gitignore
        │  │  composer.json
        │  │  LICENSE
        │  │  README.md
        │  │  
        │  ├─assets
        │  │  ├─bgs
        │  │  │      1.jpg
        │  │  │      2.jpg
        │  │  │      3.jpg
        │  │  │      4.jpg
        │  │  │      5.jpg
        │  │  │      6.jpg
        │  │  │      7.jpg
        │  │  │      8.jpg
        │  │  │      
        │  │  ├─ttfs
        │  │  │      1.ttf
        │  │  │      2.ttf
        │  │  │      3.ttf
        │  │  │      4.ttf
        │  │  │      5.ttf
        │  │  │      6.ttf
        │  │  │      
        │  │  └─zhttfs
        │  │          1.ttf
        │  │          
        │  └─src
        │          Captcha.php
        │          CaptchaController.php
        │          helper.php
        │          
        └─think-installer
            │  .gitignore
            │  composer.json
            │  
            └─src
                    Plugin.php
                    ThinkExtend.php
                    ThinkFramework.php
                    ThinkTesting.php
                    
