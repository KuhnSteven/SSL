<script>
$(document).ready(function(){
	    $('[data-toggle="popover"]').popover();   
	});
</script>

<!-- Bootstrap Carousel -->
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="/assets/images/nasa1.jpg" class="d-block w-100" alt="incoming crew capsule to ISS">
    </div>
    <div class="carousel-item">
      <img src="/assets/images/nasa2.jpg" class="d-block w-100" alt="ISS Observational Platform over Aurora Borealis">
    </div>
    <div class="carousel-item">
      <img src="/assets/images/nasa3.jpg" class="d-block w-100" alt="interior cabin view looking out to space">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<!-- Tooltip Component Requirements contained together in a wrapping div -->
<div id="modalPopoverDivParent">
    <h1>Tooltip Components</h1>
    <div id="modalPopoverDiv">
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
        Open Modal
        </button>
        <!-- Button popover -->
        <button type="button" class="btn btn-lg btn-danger" data-toggle="popover" title="Popover title" data-content="Popcorn is dangerous in space. Wouldn't want any oil or kernals stuck in the carbon dioxide filters!">Click to toggle popover</button>
    </div>

    <div class="progress">
        <div class="progress-bar progress-bar-striped" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%">75%</div>
    </div>
</div>



<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
        <div class="modal-body">
            <h5>Space is Pretty Great!</h5>
            <p>Did you know? On This Day in Space! July 14, 2015: New Horizons Spacecraft Flies by Pluto.</p>
            <hr>
        </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>