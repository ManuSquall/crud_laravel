@include('layout.header')

<!-- SQUALL -->

<!-- ============================================================== -->
<!-- pageheader  -->
<!-- ============================================================== -->
<div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

        <div class="page-header">


            <h2 class="pageheader-title " align="center">Accueil </h2>




        </div>
    </div>
</div>
<!-- ============================================================== -->
<!-- end pageheader  -->
<!-- ============================================================== -->




<!-- ########################################################### -->
<div class="row main">

<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
<div class="card bg-dark text-white">
    <img class="card-img" src="{{asset('../img/client.png')}}"" alt="Card image">
    <div class="card-img-overlay">

        <a href="{$url_base}User/list_client?id={$user->getId()}" class="btn btn-primary">GESTION DES ENTREES</a>
    </div>
</div>
</div>

<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
<div class="card bg-dark text-white">
    <img class="card-img" src="{{asset('../img/compte.jpg')}}" alt="Card image">
    <div class="card-img-overlay">

        <a href="{$url_base}Compte/list_compte?id={$user->getId()}" class="btn btn-primary">GESTION DES SORTIES</a>
    </div>
</div>
</div>


</div>





                    <!-- /SQUALL -->

@include('layout.footer')
