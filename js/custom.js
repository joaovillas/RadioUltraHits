$(document).ready(function(){
    var userFeed = new Instafeed({
      get: 'user',
      userId:'1282205290',
      limit:11,
      resolution:'low_resolution',
      sortBy:'most-liked',
      accessToken:'1282205290.1677ed0.4a730ca7196541c0bd45b93450b47dd4',
      template :' <div class="item"> <a href="{{link}}"> <img style="margin-bottom: 100px"  src="{{image}}"/> </a> </div>',
      
    });
    userFeed.run();
  });

  