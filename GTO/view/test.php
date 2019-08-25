<!DOCTYPE HTML>
<html> 
  <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstap.min.js"></script>
    <link src="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <style>
      .checked{
           color: orange;
           
          
      }
  </style>
  <body>
          <span class="fa fa-star checked" onmouseover="starmark(this)" onclick="starmark(this)" id="1one" style="font-size: 40px; cursor: pointer;"></span>
          <span class="fa fa-star checked" onmouseover="starmark(this)" onclick="starmark(this)" id="2one" style="font-size: 40px; cursor: pointer;"></span>
          <span class="fa fa-star checked" onmouseover="starmark(this)" onclick="starmark(this)" id="3one" style="font-size: 40px; cursor: pointer;"></span>      
          <span class="fa fa-star checked" onmouseover="starmark(this)" onclick="starmark(this)" id="4one" style="font-size: 40px; cursor: pointer;"></span>      
          <span class="fa fa-star checked" onmouseover="starmark(this)" onclick="starmark(this)" id="5one" style="font-size: 40px; cursor: pointer;"></span>
        <br/>
        <textarea class="form-control" style=" margin-left: 20px; width: 300px; height: 100px;" rows="3" placeholder="Enter your comment"></textarea>
        <button style="margin-top:10px; margin-left: 20px;"onclick="showRating()" class="btn btn-lg btn-success">Submit</button>
  </body>
  
  <script type="text/javascript">
    var rating="";
    function starmark(item){
        var count=item.id[0];
        rating=count;
        var subid=item.id.substring(1);
    for(var i=0; i<5; i++){
        if(i<count){
            document.getElementById((i+1)+subid).style.color="orange";  
        }
        else{
           document.getElementById((i+1)+subid).style.color="black";
        }
    }
    }
     function showRating(){
        alert(rating);
     }
    </script>
</html>
