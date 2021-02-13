<style>
    .carrossel-config img {
        max-height: 380px;
        width: 100%;
    }
    /*  .carrossel-config .carousel-inner{
            max-height:250px ;
            max-width:550px ;

    }*/
</style>
<section>
    <div id="carouselExampleIndicators" class="carousel slide carrossel-config" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="" src="{{asset('img/carrossel/sabonete1.jpg')}}" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="" src="{{asset('img/carrossel/sabonete1.jpg')}}" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="" src="{{asset('img/carrossel/sabonete2.jpg')}}" alt="Third slide">
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
</section>
