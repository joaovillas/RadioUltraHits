$(document).ready(function(){
    var userFeed = new Instafeed({
      get: 'user',
      userId:'1282205290',
      limit:12,
      resolution:'low_resolution',
      sortBy:'most-recent',
      accessToken:'1282205290.1677ed0.4a730ca7196541c0bd45b93450b47dd4',
      template :' <div class="col-sm-4 mx-auto " > <a href="{{link}}"> <img class="img-responsive" style="padding:30px" width= "360px" height = "360px" src="{{image}}"/> </a> </div>',
      
    });
    userFeed.run();
  });

  

  