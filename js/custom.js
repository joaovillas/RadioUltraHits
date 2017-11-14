$(document).ready(function(){
    var userFeed = new Instafeed({
      get: 'user',
      userId:'1282205290',
      limit:12,
      resolution:'low_resolution',
      sortBy:'most-recent',
      accessToken:'1282205290.1677ed0.4a730ca7196541c0bd45b93450b47dd4',
      template :' <div class="col-md-5 mx-auto " > <a href="{{link}}"> <img style="  margin: 35px auto 0 auto margin-bottom: 10px" width= "360px" height = "auto" src="{{image}}"/> </a> </div>',
      
    });
    userFeed.run();
  });

  

  