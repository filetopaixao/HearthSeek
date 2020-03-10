<!-- Janela de Perfil do Usuário-->
<?php
require_once("../../../../wp-load.php");

if(is_user_logged_in()){

$id_user = $_POST['id'];

$user = get_user_by( 'ID' , $id_user );



?>

<div class="modal-dialog">

  <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <div class="row">
            <div class="col-md-3">
              <img id="userMaxRankImgProfile" width="80px" height="auto" src="<?= getRankImg(get_user_meta( $id_user, 'ranking', true )) ?>" />
            </div>
            <div class="col-md-9">
               <h1 class="modal-title" style="color: #487BBE; font-weight: bold;"><?= strtoupper(get_user_meta( $id_user, 'battletag', true )) ?></h1>
               <p style="color: #878787; font-weight: bold;"><?= strtoupper(get_user_meta( $id_user, 'location', true )) ?></p>
            </div>

        </div>
 
      </div>
      <div class="modal-body" style="font-weight: bold;">
        <p>NOME: <span style="color: #487BBE;"><?= strtoupper($user->display_name) ?></span></p>
       <!-- <p>E-MAIL: <span style="color: #487BBE;"><?= strtoupper($user->user_email) ?></span></p> -->
        <p>SEXO: <span style="color: #487BBE;"><?=  getGender(get_user_meta( $id_user, 'gender', true )) ?></span></p>
        <p>IDADE: <span style="color: #487BBE;"><?= getAge(get_user_meta( $id_user, 'age', true )) ?></span></p>
        <p>HERÓIS MAIS JOGADOS: </p>
        <p>
          <?php 
              $heroesArray = get_user_meta( $id_user, 'heroes', true );

              foreach ($heroesArray as $heroes) {
                echo '<img class="heroesProfile" src="http://marduktv.com.br/wp-content/themes/mktv2016/img/heroes/'. $heroes .'.png" />';
              }

            ?>

        </p>
        <p>FACEBOOK: <span style="color: #487BBE;"><?= strtoupper(get_user_meta( $id_user, 'user-facebook', true )) ?></span></p>
        <p>TWITTER: <span style="color: #487BBE;"><?= strtoupper(get_user_meta( $id_user, 'user-twitter', true )) ?></span></p>
        <p>DISCORD: <span style="color: #487BBE;"><?= strtoupper(get_user_meta( $id_user, 'user-discord', true )) ?></span></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div>  

<?php }else { ?>


           <div class="modal-dialog modal-sm">

              <img src="<?php echo get_template_directory_uri(); ?>/img/cardAlert3.png">


          </div><!-- /.modal-dialog -->
</div>  


<?php } ?>
<!-- fecha modal de usuario -->