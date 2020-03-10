		<footer class="row">
			<div class="footer">
				<div class="container">

				<!-- ULTIMOS CADSTRADOS 
					<div class="your-class">
					  <div>1</div>
					  <div>2</div>
					  <div>3</div>
					  <div>4</div>
					  <div>5</div>
					  <div>6</div>
					  <div>7</div>
					  <div>8</div>
					  <div>9</div>
					</div> -->


				<h2 style="color: #fff" class="hidden-sm hidden-xs">Últimos Cadastrados</h2>



				<div class="your-class list-inline footer__classes hidden-sm hidden-xs">
					<?php
						

					$usernames = $wpdb->get_results("SELECT usermeta.*, users.* FROM wp_usermeta AS usermeta JOIN wp_users AS users ON(usermeta.user_id = users.ID) WHERE usermeta.meta_key = 'date_registered_hearthseek' ORDER BY usermeta.meta_value DESC LIMIT 15");

					
					foreach ($usernames as $username) {
						//$current_user=get_user_by( 'ID', $username->ID );
						$ranking3 = get_user_meta( $username->ID, 'ranking', true );
						if(get_user_meta( $username->ID, 'location', true ) != '' || get_user_meta( $username->ID, 'location', true ) != NULL){
					    	echo '<a href="#" class="thumbnail col-md-1" onclick="btn_profile_outMap('. $username->ID .');" id="btn-profile-footer" data-toggle="modal" data-target="#userProfile">
					    	<div class="caption bg__lastusers" style="margin: 10px; text-align:center;">
					    			<img id="userMaxRankImg2" width="80px" height="auto" src="'.getRankImg(get_user_meta( $username->ID, 'ranking', true )).'" />
					    			<div class="caption bg__mago" style="    word-wrap: break-word;">'.get_user_meta( $username->ID, 'battletag', true ).'</div>
					    			<div class="caption bg__lastusers">'.get_user_meta( $username->ID, 'location', true ).'</div>
					    		</div></a>';
					    	
						}
					}

					
					?>
				</div>
				<script type="text/javascript">
					$('.your-class').slick({
					  slidesToShow: 9,
					  slidesToScroll: 1,
					  autoplay: true,
					  autoplaySpeed: 4000,
					});
				</script>

				<!-- ULTIMOS CADSTRADOS -->



<div class="row" style="text-align: center;">
					<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- Homepage-top - 970x90 -->
<ins class="adsbygoogle"
     style="display:inline-block;width:970px;height:90px"
     data-ad-client="ca-pub-2260391343159555"
     data-ad-slot="2255846806"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
</div>
				<!--
					<ul class="list-inline footer__classes">
						<li>
							<a href="<?php echo get_post_type_archive_link( 'deck' ); ?>" class="thumbnail">
								<img src="<?php echo get_template_directory_uri(); ?>/img/all-small.png" alt="...">
								<div class="caption bg__all">Todos os Decks</div>
							</a>
						</li>
						<li>
							<a href="<?php echo get_post_type_archive_link( 'deck' ); ?>?classe=Warlock" class="thumbnail">
								<img src="<?php echo get_template_directory_uri(); ?>/img/bruxo-small.png" alt="...">
								<div class="caption bg__bruxo">Bruxo</div>
							</a>
						</li>
						<li>
							<a href="<?php echo get_post_type_archive_link( 'deck' ); ?>?classe=Hunter" class="thumbnail">
								<img src="<?php echo get_template_directory_uri(); ?>/img/cacador-small.png" alt="...">
								<div class="caption bg__cacador">Caçador</div>
							</a>
						</li>
						<li>
							<a href="<?php echo get_post_type_archive_link( 'deck' ); ?>?classe=Druid" class="thumbnail">
								<img src="<?php echo get_template_directory_uri(); ?>/img/druida-small.png" alt="...">
								<div class="caption bg__druida">Druida</div>
							</a>
						</li>
						<li>
							<a href="<?php echo get_post_type_archive_link( 'deck' ); ?>?classe=Warrior" class="thumbnail">
								<img src="<?php echo get_template_directory_uri(); ?>/img/guerreiro-small.png" alt="...">
								<div class="caption bg__guerreiro">Guerreiro</div>
							</a>
						</li>
						<li>
							<a href="<?php echo get_post_type_archive_link( 'deck' ); ?>?classe=Rogue" class="thumbnail">
								<img src="<?php echo get_template_directory_uri(); ?>/img/ladino-small.png" alt="...">
								<div class="caption bg__ladino">Ladino</div>
							</a>
						</li>
						<li>
							<a href="<?php echo get_post_type_archive_link( 'deck' ); ?>?classe=Mage" class="thumbnail">
								<img src="<?php echo get_template_directory_uri(); ?>/img/mago-small.png" alt="...">
								<div class="caption bg__mago">Mago</div>
							</a>
						</li>
						<li>
							<a href="<?php echo get_post_type_archive_link( 'deck' ); ?>?classe=Paladin" class="thumbnail">
								<img src="<?php echo get_template_directory_uri(); ?>/img/paladino-small.png" alt="...">
								<div class="caption bg__paladino">Paladino</div>
							</a>
						</li>
						<li>
							<a href="<?php echo get_post_type_archive_link( 'deck' ); ?>?classe=Priest" class="thumbnail">
								<img src="<?php echo get_template_directory_uri(); ?>/img/sacerdote-small.png" alt="...">
								<div class="caption bg__sacerdote">Sacerdote</div>
							</a>
						</li>
						<li>
							<a href="<?php echo get_post_type_archive_link( 'deck' ); ?>?classe=Shaman" class="thumbnail">
								<img src="<?php echo get_template_directory_uri(); ?>/img/shaman-small.png" alt="...">
								<div class="caption bg__xama">Xamã</div>
							</a>
						</li>
					</ul> -->
					<hr />
					<div class="row footer__content">
						<div class="col-sm-7 col-md-8">
							<div class="row">
								<?php 
								echo str_replace( 'sub-menu', 'sub-menu list-unstyled', wp_nav_menu( array(
									'menu'       => 'MKTV2016 - Rodapé',
									'container'  => FALSE,
									'menu_class' => 'list-unstyled',
									'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
									'echo'       => FALSE
								) ) );
								?>
							</div>
						</div>


<?php if ( count( $parceiros = mk_get_parceiros() ) > 0 ) : ?>
						<!-- Parceiros -->
						<div class="col-sm-5 col-md-4">
						<?= $_SERVER["REQUEST_URI"]; ?>
							<h6>Facebook FanPage</h6>
							<div class="fb-page" data-href="https://www.facebook.com/hearthseek/" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/hearthseek/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/hearthseek/">HearthSeek</a></blockquote></div>
						</div>
						<!-- End: Parceiros -->
						<?php endif; ?>

					</div>
				</div>
			</div>
			<div class="footer__copyright">
				<div class="container">
					<span>© <?php echo date( 'Y' ); ?> All rights reserved. by MardukTV.</span>
					<a href="http://filetopaixao.com.br" target="_blank" class="pull-right" >
						<img style="width: 170px;" src="<?php echo get_template_directory_uri(); ?>/img/footer-logo.png">
					</a>
				</div>
			</div>
		</footer>
		<div class="overlay search-is-visible"></div>

		<!-- Search -->
		<div id="search" class="search">
			<form role="search" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
				<input type="search" placeholder="Pesquisar por..." value="<?php echo get_search_query(); ?>" name="s" />
			</form>
		</div>
		<!-- End: Search -->

		<!-- Login -->
		<div id="form__login" class="form__login">
			<div class="container">
				<form name="form" method="post" action="<?php echo home_url( '/hearthseek' ) ?>" class="text-center">
					<div class="form-group">
						<input type="text" class="form-control" id="usuario" name="user_login" placeholder="NICK" onfocus="this.removeAttribute('readonly');" readonly="">
					</div>
					<div class="form-group">
						<input type="password" class="form-control" id="senha" name="user_pass" placeholder="Senha" onfocus="this.removeAttribute('readonly');" readonly="">
						<input name="auth" value="1" type="hidden" />
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-black-flat">Acessar</button>
						<button type="button" class="btn btn-black-flat fb-login" style="background-color: #3b5998 !important; box-shadow: 0px 3px 0px 0px #3b5998 !important;">
							<i class="fa fa-facebook-square" aria-hidden="true" style="font-size:27px; margin-right: 3px;"></i> Login com facebook
						</button>
						<button type="button" class="btn btn-black-flat nav__register">Criar conta</button>
					</div>
					<div class="form-group forgot_password">
						<i class="fa fa-key" aria-hidden="true"></i><a href="javascript:;" title="Esqueci minha senha"> Esqueci minha senha</a>
					</div>
				</form>
			</div>
		</div>
		<!-- End: Login -->

		<!-- Recuperar Senha -->
		<div id="form__recuperar_senha" class="form__recuperar_senha">
			<div class="container">
				<form name="form" method="post" action="<?php bloginfo('url') ?>" class="text-center">
					<div class="form-group">
						<input type="email" class="form-control" id="email" name="email" placeholder="E-mail" onfocus="this.removeAttribute('readonly');" readonly="" required>
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-black-flat">Enviar</button>
					</div>
				</form>
			</div>
		</div>
		<!-- End: Recuperar Senha -->

		<!-- Register -->

		<?php if(is_user_logged_in()){ ?>
		<div id="form__register" class="form__register">
			<div class="container">
				<form name="form" method="post" action="<?php bloginfo('url') ?>" class="text-center register">
					<div class="form-group">
						<input type="text" class="form-control" id="name" name="user_name" placeholder="Nome" onfocus="this.removeAttribute('readonly');" readonly="" required>
					</div>
					<div class="form-group">
						<input type="text" class="form-control" id="nick" name="user_login" placeholder="Nick" onfocus="this.removeAttribute('readonly');" readonly="" required>
					</div>
					<div class="form-group">
						<input type="email" class="form-control" id="email2" name="email2" placeholder="E-mail" onfocus="this.removeAttribute('readonly');" readonly="" required>
					</div>
					<div class="form-group">
						<input type="text" class="form-control" id="phone" name="phone" placeholder="Telefone">
					</div>

					<div class="form-group">
						<input type="text" class="form-control" id="battletag" name="battletag" placeholder="battletag#1234">
					</div>

					<div class="form-group">
						<input type="text" class="form-control" id="location" name="location" placeholder="Localização">
		<p>Obs*: A localização deve ser preenchida no padrão do Autocomplete do campo acima. Caso fuja do padrão você não aparecerá no mapa.</p>			</div>

					<div class="form-group">
						<input type="hidden" class="form-control" id="lat" name="lat">
					</div>

					<div class="form-group">
						<input type="hidden" class="form-control" id="lng" name="lng">
					</div>

					<div class="row" style="margin-top: 15px; margin-bottom: 15px;">

		                  

		                  <div class="modal-body col-md-6">
		                    <div class="form-group">
		                      <select class="form-control" id="gender" name="gender">  
		                        <option value="male">Masculino</option>
		                        <option value="female">Feminino</option>
		                      </select>
		                    </div>
		                  </div>

		                  <div class="modal-body col-md-6">
		                    <div class="form-group">
		                      <select class="form-control" id="age" name="age">
		                      	<option value="20">8 a 12 anos</option>
		                      	<option value="30">13 a 17 anos</option>
		                        <option value="40">18 a 22 anos</option>
		                        <option value="50">23 a 27 anos</option>
		                        <option value="60">28 a 32 anos</option>
		                        <option value="70">33 a 37 anos</option>
		                        <option value="80">38 a 42 anos</option>
		                        <option value="90">43 a 47 anos</option>
		                        <option value="100">48 a 52 anos</option>
		                        <option value="110">53 a 57 anos</option>
		                        <option value="120">58 a 62 anos</option>
		                        <option value="130">62 anos ou mais</option>
		                      </select>

		                    </div>
		                  </div>
                 	</div>


<div class="row"  style="    background-color: #fff;
    border-radius: 4px 4px 4px 4px;
    padding: 15px;
    margin: 15px 0px 15px 0px;">
<div class="col-md-12">
<label for="userMaxRank">Ranking Máximo Alcançado</label>
</div>
<div class="col-md-10">
	<?php $selected = get_the_author_meta( 'userMaxRank', $user->ID ); ?>
            <?php if($selected != "-1"){
                $selected = $selected +1;
            }?>
            <input class="col-sm-5" type="range" min="-26" max="-1" value="<?php echo esc_attr( get_the_author_meta( 'ranking', $user->ID )); ?>" step="1" name="userMaxRank" id="userMaxRank" class="input">
            <!-- <p class="description">Insira o ranking mais alto que você já alcançou no jogo.</p> -->
	
</div>
            

        <div class="col-md-2">
            <?php
            
            
            $current_user = wp_get_current_user();
            //$imglink = get_user_meta( $current_user->ID, 'ranking', true );
            $ranking = get_user_meta( $current_user->ID, 'ranking', true );
            ?>

            


            <img id="userMaxRankImg" width="80px" height="auto" src="<?php echo getRankImg($ranking)?>"/>
</div>
        <div class="col-md-2">
            <span id="userMaxRankFeedback"></span>
            <script>
            var userMaxRankField = document.getElementById("userMaxRank");
            var userMaxRankFeedback = document.getElementById("userMaxRankFeedback");
            var userMaxRankImg = document.getElementById("userMaxRankImg");
            userMaxRankField.addEventListener('change', function(){
                 switch(userMaxRankField.value){
                         case '-26':
                            //userMaxRankFeedback.innerHTML = "25 - Frango Nervoso";
                            userMaxRankImg.src = "<?php echo get_template_directory_uri() . '/img/ranks/25.png'; ?>";
                         break;
                         case '-25':
                            //userMaxRankFeedback.innerHTML = "24 - Gnomo Leproso";
                            userMaxRankImg.src = "<?php echo get_template_directory_uri() . '/img/ranks/24.png'; ?>";
                         break;
                         case '-24':
                            //userMaxRankFeedback.innerHTML = "23 - Escudeira Argência";
                            userMaxRankImg.src = "<?php echo get_template_directory_uri() . '/img/ranks/23.png'; ?>";
                         break;
                         case '-23':
                            //userMaxRankFeedback.innerHTML = "22 - Murloc Saqueador";
                            userMaxRankImg.src = "<?php echo get_template_directory_uri() . '/img/ranks/22.png'; ?>";
                         break;
                         case '-22':
                            //userMaxRankFeedback.innerHTML = "21 - Pirata dos Mares do Sul";
                            userMaxRankImg.src = "<?php echo get_template_directory_uri() . '/img/ranks/21.png'; ?>";
                         break;
                         case '-21':
                            //userMaxRankFeedback.innerHTML = "20 - Carrega Escudo";
                            userMaxRankImg.src = "<?php echo get_template_directory_uri() . '/img/ranks/20.png'; ?>";
                         break;
                         case '-20':
                            //userMaxRankFeedback.innerHTML = "19 - Engenheira Novata";
                            userMaxRankImg.src = "<?php echo get_template_directory_uri() . '/img/ranks/19.png'; ?>";
                         break;
                         case '-19':
                            //userMaxRankFeedback.innerHTML = "18 - Aprendiz de Feiticeiro";
                            userMaxRankImg.src = "<?php echo get_template_directory_uri() . '/img/ranks/18.png'; ?>";
                         break;
                         case '-18':
                            //userMaxRankFeedback.innerHTML = "17 - Guerreiro Tauren";
                            userMaxRankImg.src = "<?php echo get_template_directory_uri() . '/img/ranks/17.png'; ?>";
                         break;
                         case '-17':
                            //userMaxRankFeedback.innerHTML = "16 - Aventureiro em Missão";
                            userMaxRankImg.src = "<?php echo get_template_directory_uri() . '/img/ranks/16.png'; ?>";
                         break;
                         case '-16':
                            //userMaxRankFeedback.innerHTML = "15 - Guardião de LuaPrata";
                            userMaxRankImg.src = "<?php echo get_template_directory_uri() . '/img/ranks/15.png'; ?>";
                         break;
                         case '-15':
                            //userMaxRankFeedback.innerHTML = "14 - Líder do Raide";
                            userMaxRankImg.src = "<?php echo get_template_directory_uri() . '/img/ranks/14.png'; ?>";
                         break;
                         case '-14':
                            //userMaxRankFeedback.innerHTML = "13 - Corsário Terrível";
                            userMaxRankImg.src = "<?php echo get_template_directory_uri() . '/img/ranks/13.png'; ?>";
                         break;
                         case '-13':
                            //userMaxRankFeedback.innerHTML = "12 - Capitã do brado Guerreiro";
                            userMaxRankImg.src = "<?php echo get_template_directory_uri() . '/img/ranks/12.png'; ?>";
                         break;
                         case '-12':
                            //userMaxRankFeedback.innerHTML = "11 - Caçador Profissional";
                            userMaxRankImg.src = "<?php echo get_template_directory_uri() . '/img/ranks/11.png'; ?>";
                         break;
                         case '-11':
                            //userMaxRankFeedback.innerHTML = "10 - Ogro mago";
                            userMaxRankImg.src = "<?php echo get_template_directory_uri() . '/img/ranks/10.png'; ?>";
                         break;
                         case '-10':
                            //userMaxRankFeedback.innerHTML = "09 - Cavaleiro do Punho de Prata";
                            userMaxRankImg.src = "<?php echo get_template_directory_uri() . '/img/ranks/9.png'; ?>";
                         break;
                         case '-9':
                            //userMaxRankFeedback.innerHTML = "08 - Senhor da Guera Lobo do Gelo";
                            userMaxRankImg.src = "<?php echo get_template_directory_uri() . '/img/ranks/8.png'; ?>";
                         break;
                         case '-8':
                            //userMaxRankFeedback.innerHTML = "07 - Andarilho do Sol";
                            userMaxRankImg.src = "<?php echo get_template_directory_uri() . '/img/ranks/7.png'; ?>";
                         break;
                         case '-7':
                            //userMaxRankFeedback.innerHTML = "06 - Anciente da Guerra";
                            userMaxRankImg.src = "<?php echo get_template_directory_uri() . '/img/ranks/6.png'; ?>";
                         break;
                         case '-6':
                            //userMaxRankFeedback.innerHTML = "05 - Gigante do Mar";
                            userMaxRankImg.src = "<?php echo get_template_directory_uri() . '/img/ranks/5.png'; ?>";
                         break;
                         case '-5':
                            //userMaxRankFeedback.innerHTML = "04 - Gigante da Montanha";
                            userMaxRankImg.src = "<?php echo get_template_directory_uri() . '/img/ranks/4.png'; ?>";
                         break;
                         case '-4':
                            //userMaxRankFeedback.innerHTML = "03 - Gigante Derretido";
                            userMaxRankImg.src = "<?php echo get_template_directory_uri() . '/img/ranks/3.png'; ?>";
                         break;
                         case '-3':
                            //userMaxRankFeedback.innerHTML = "02 - O Cavaleiro Negro";
                            userMaxRankImg.src = "<?php echo get_template_directory_uri() . '/img/ranks/2.png'; ?>";
                         break;
                         case '-2':
                            //userMaxRankFeedback.innerHTML = "01 - Estalajadeiro";
                            userMaxRankImg.src = "<?php echo get_template_directory_uri() . '/img/ranks/1.png'; ?>";
                         break;
                         case '-1':
                            //userMaxRankFeedback.innerHTML = "Lendário";
                            userMaxRankImg.src = "<?php echo get_template_directory_uri() . '/img/ranks/lendario.png'; ?>";
                         break;

                     }
                });
            </script>
            </div>
</div>

					
					<div class="form-group" style="background-color: #fff; border-radius: 4px; padding: 15px;">
					<p style="font-weight: 700;">Selecione os heróis mais jogado por você</p>
							<input  type='checkbox' name='heroes[]' value='jaina' id="jaina"/><label for="jaina"></label>
							<input  type='checkbox' name='heroes[]' value='rexxar' id="rexxar"/><label for="rexxar"></label>
							<input  type='checkbox' name='heroes[]' value='uther' id="uther"/><label for="uther"></label>
							<input  type='checkbox' name='heroes[]' value='garrosh' id="garrosh"/><label for="garrosh"></label>
							<input  type='checkbox' name='heroes[]' value='malfurion' id="malfurion"/><label for="malfurion"></label>
							<input  type='checkbox' name='heroes[]' value='guldan' id="guldan"/><label for="guldan"></label>
							<input  type='checkbox' name='heroes[]' value='thrall' id="thrall"/><label for="thrall"></label>
							<input  type='checkbox' name='heroes[]' value='anduin' id="anduin"/><label for="anduin"></label>
							<input  type='checkbox' name='heroes[]' value='valeera' id="valeera"/><label for="valeera"></label>
							
						

					</div>

					<div class="form-group">
						<input type="text" class="form-control" id="user-facebook" name="user-facebook" placeholder="Facebook">
					</div>

					<div class="form-group">
						<input type="text" class="form-control" id="user-twitch" name="user-twitch" placeholder="Twitch">
					</div>

					<div class="form-group">
						<input type="text" class="form-control" id="user-discord" name="user-discord" placeholder="Discord">
					</div>


					<div class="form-group">
						<input type="password" class="form-control" id="senha" name="password" placeholder="Senha" onfocus="this.removeAttribute('readonly');" readonly="">
					</div> 
					<input type="hidden" name="new_user" value="1" />
					<div class="form-group">
						<button type="button" class="btn btn-black-flat btn-register">Editar</button>
					</div>
				</form>
			</div>
		</div>
		<?php 
				$current_user = wp_get_current_user();
				echo '<script>';
				echo"document.getElementById('name').value ='$current_user->display_name';";
				echo"document.getElementById('nick').value ='$current_user->user_login';";
				$phone = get_user_meta( $current_user->ID, 'phone', true );
				echo"document.getElementById('phone').value ='$phone';";
				echo"document.getElementById('email2').value ='$current_user->user_email';";
				$battletag2 = get_user_meta( $current_user->ID, 'battletag', true );
				echo"document.getElementById('battletag').value ='$battletag2';";
				$ranking2 = get_user_meta( $current_user->ID, 'ranking', true );
				echo"document.getElementById('userMaxRank').value ='$ranking2';";

				$heroes2 = get_user_meta( $current_user->ID, 'heroes', true );
				if (in_array("jaina", $heroes2)) { 
					echo 'document.getElementById("jaina").checked = true;';
				}
				if (in_array("rexxar", $heroes2)) { 
					echo 'document.getElementById("rexxar").checked = true;';
				}
				if (in_array("uther", $heroes2)) { 
					echo 'document.getElementById("uther").checked = true;';
				}
				if (in_array("garrosh", $heroes2)) { 
					echo 'document.getElementById("garrosh").checked = true;';
				}
				if (in_array("malfurion", $heroes2)) { 
					echo 'document.getElementById("malfurion").checked = true;';
				}
				if (in_array("guldan", $heroes2)) { 
					echo 'document.getElementById("guldan").checked = true;';
				}
				if (in_array("thrall", $heroes2)) { 
					echo 'document.getElementById("thrall").checked = true;';
				}
				if (in_array("anduin", $heroes2)) { 
					echo 'document.getElementById("anduin").checked = true;';
				}
				if (in_array("valeera", $heroes2)) { 
					echo 'document.getElementById("valeera").checked = true;';
				}

				$location2 = get_user_meta( $current_user->ID, 'location', true );
				echo"document.getElementById('location').value ='$location2';";

				$facebook2 = get_user_meta( $current_user->ID, 'user-facebook', true );
				echo"document.getElementById('user-facebook').value ='$facebook2';";

				$twitch2 = get_user_meta( $current_user->ID, 'user-twitch', true );
				echo"document.getElementById('user-twitch').value ='$twitch2';";

				$discord2 = get_user_meta( $current_user->ID, 'user-discord', true );
				echo"document.getElementById('user-discord').value ='$discord2';";

				$age = get_user_meta( $current_user->ID, 'age', true );
				echo"document.getElementById('age').value ='$age';";

				$gender = get_user_meta( $current_user->ID, 'gender', true );
				echo"document.getElementById('gender').value ='$gender';";

				

				

				echo '</script>';

		}else{?>
			<div id="form__register" class="form__register">
			<div class="container">
				<form name="form" method="post" action="<?php bloginfo('url') ?>" class="text-center register">
					<div class="form-group">
						<input type="text" class="form-control" id="name" name="user_name" placeholder="Nome" onfocus="this.removeAttribute('readonly');" readonly="" required>
					</div>
					<div class="form-group">
						<input type="text" class="form-control" id="nick" name="user_login" placeholder="Nick" onfocus="this.removeAttribute('readonly');" readonly="" required>
					</div>
					<div class="form-group">
						<input type="text" class="form-control" id="phone" name="phone" placeholder="Telefone">
					</div>
					<div class="form-group">
						<input type="email" class="form-control" id="email" name="email" placeholder="E-mail" onfocus="this.removeAttribute('readonly');" readonly="" required>
					</div>
					<div class="form-group">
						<input type="password" class="form-control" id="senha" name="password" placeholder="Senha" onfocus="this.removeAttribute('readonly');" readonly="">
					</div>
					<input type="hidden" name="new_user" value="1" />
					<div class="form-group">
						<button type="button" class="btn btn-black-flat btn-register">Enviar</button>
					</div>
				</form>
			</div>
		</div>

		<?php } ?>
		

		<!-- End: Register -->

		<!-- Javascript -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.mobile.custom.min.js"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/js/mega-site-navigation.js"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/js/default.min.js"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.maskedinput.min.js"></script>
		<!-- End: Javascript -->
		<script type="text/javascript">
				
				(function(){
					$( 'img', '#noticias' ).addClass( 'img-responsive' );
					window.fbAsyncInit = function() {
						FB.init({
							appId      : '474945709371002',
							version    : 'v2.6'
						});

						FB.XFBML.parse();
					};
				})();

				$('button.fb-login').on('click', function(){
					var $this = $(this);
					$('.alert').remove();
					$form = $('.form__login form');
					
					FB.login(function(response) {
						if (response.authResponse) {
								
							FB.api('/me', {fields: 'email, name'}, function(response) {

								fb_email = response.email;
								$.post(base_url + '/wp-admin/admin-ajax.php', {action:'mktv_authFacebookUser', email:fb_email}, function(data){
									if(!data.error){
										window.location.reload();
									}else{
										$('input[name="user_login"]', $form).attr('placeholder', 'Informe seu nick');
										
										$form.append('<input type="hidden" name="user_name" value="' + response.name + '" />');
										$form.append('<input type="hidden" name="email" value="' + response.email + '" />');
										$form.append('<input type="hidden" name="fbid" value="' + response.id + '" />');
										$form.append('<input type="hidden" name="new_user" value="1" />');
										$('.nav__register', $form).hide();
										$('input[name="user_pass"]', $form).hide();
										$this.hide()
									}
								},'json');
							});
						}
					}, {
					    scope: 'email, public_profile'
					});
				});

				(function(){
					$('form input').on('focus', function(){
						$(this).css('border', 'none');
					});

					$( '.telMask' ).mask( '(99) 9999-9999?9' ).focus(function() {
						
						$( this ).keyup(function() {
							numeros = $( this ).val().replace(/\D/g, '');
							if ( numeros.length == 11 ) { $( this ).mask( '(99) 99999-9999'  ); }
							if ( numeros.length == 10 ) { $( this ).mask( '(99) 9999-9999?9' ); }
						});
					});
				})();

				//Quando há mensagens de erro na tentativa de cadastro
				//Exibe as mensagens no topo do formulário de cadastro
				<?php if( isset($_SESSION['register_return']) ): ?>
				(function(){
					var hasMessage = <?php echo $_SESSION['register_return']['error'] ? 'true' : 'false'?>;
					var msgs = "<?php echo isset($_SESSION['register_return']['message']) ? trim(nl2br($_SESSION['register_return']['message'])) : '';?>";

					if( hasMessage ){
						setTimeout(function(){
							$('form.register').before('<div class="alert alert-danger">' +
									  '<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>' +
									  '<strong>Erro!</strong> ' + msgs +
									'</div>');
							$('.nav__login').trigger('click');
							$('.nav__register').trigger('click');
						}, 3000);
					}
				})();
				<?php 
					unset($_SESSION['register_return']);
					endif;
				?>

				<?php if( isset($_SESSION['login_return']) ):?>
				(function(){
					var hasMessage = <?php echo isset($_SESSION['login_return']['error']) && $_SESSION['login_return']['error'] ? 'true' : 'false'?>;
					var msgs = "<?php echo isset($_SESSION['login_return']) && isset($_SESSION['login_return']['message']) ? trim(nl2br($_SESSION['login_return']['message'])) : '';?>";

					if( hasMessage ){
						setTimeout(function(){
							$('.nav__login').trigger('click');
							$('.form__login form').before('<div class="alert alert-danger">' +
									  '<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>' +
									  '<strong>Erro!</strong> ' + msgs +
									'</div>');
							return;
						}, 3000);
					}
				})();
				<?php 
					unset($_SESSION['login_return']);
					endif;
				?>

				(function(){
					$('form.register .btn-register').on('click', function(e){
						e.preventDefault();
						//Limpa as mensgens de alerta
						$('.alert').remove();
						$form 		= $('form.register');

						var name 	= $('input[name="user_name"]', $form).val();
						var nick 	= $('input[name="user_login"]', $form).val();
						var phone 	= $('input[name="phone"]', $form).val();
						var location = $('input[name="location"]', $form).val();
						<?php
						if(is_user_logged_in()){
						?>
							var email 	= $('input[name="email2"]', $form).val();
						<?php }else{ ?>
							var email 	= $('input[name="email"]', $form).val();
						<?php } ?>
						var password = $('input[name="password"]', $form).val();

						<?php
						//Se está usando o login do facebook, usa o nick para registrar a senha pois
						//o registro de usuário não permite que seja vazia
						?>
						if( $form.find('input[name="fbid"]').length ){
							$('input[name="password"]', $form).val(nick);
						}
						
						
						if( '' !== $.trim(name) && '' !== $.trim(nick) && '' !== $.trim(email) && '' !== $.trim(password) ){
							if(!isEmail(email)){
								alert(email);
								var msg = '<div class="alert alert-danger">' +
								  '<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>' +
								  '<strong>Erro!</strong> O email informado é inválido' +
								'</div>';

								$form.before(msg);

								return false;
							}

							$form.submit();
						}else{

							

									var msg = '<div class="alert alert-danger">' +
										  '<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>' +
										  '<strong>Erro!</strong> Os campos marcados abaixo devem ser prenchidos' +
										'</div>';

									$form.before(msg);

									$.each($form.children(), function(i, v){
										var input = $(v).find('input').get(0);
										if( $(input).attr('type') == 'text' || $(input).attr('type') == 'email' || $(input).attr('type') == 'password' ){
											
											$(input).css('border', '2px solid #880000');
										}
									});
							
						}
					});
				})();

				function isEmail(email){
				    var filter = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
				    return filter.test(email);
				}

				<?php
					//Remove a ação de click do login caso o usuário já esteja
					//autenticado e não exiba o formulário de login e de cadastro
					if( is_user_logged_in() ):
				?>
					(function(){
						$('.nav__login').attr('href', 'javascript:;').addClass('logged').removeClass('nav__login');
					})();
				<?php
					endif;
				?>
			//};				
		</script>
		<script>
			(function(d, s, id) {
			var js, fjs = d.getElementsByTagName(s)[0];
			if (d.getElementById(id)) return;
			js = d.createElement(s); js.id = id;
			js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.6&appId=474945709371002";
			fjs.parentNode.insertBefore(js, fjs);
			}(document, 'script', 'facebook-jssdk'));
		</script>

		<?php wp_footer(); ?>
		
		<?php 
			/*$cur_user = wp_get_current_user();
			$cur_role =  $cur_user->roles[0];
			$cur_mag = "Não";
			if(current_user_can( 'manage_options' ))
				$cur_mag = "SIm";
			echo "<!-- " . $cur_role . " | " .  $cur_mag . " -->";*/
		?>




<!-- Modal Mnsg HearthSeek -->
          <div class="modal fade" id="msgHearthseek">
          	<div class="modal-dialog modal-lg">

			  <div class="modal-content">
			      <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			        <h2>Você já conhece o HearthSeek?</h2>
			 
			      </div>
			      <div class="modal-body">

			      	<p>Sim, o <strong>HearthSeek</strong> agora faz parte da <strong>MKTV</strong>!</p>

			      	<p>Como o HearthStone é um pouco precário na interação com outros jogadores no jogo, criamos essa plataforma online que busca players offline.</p>

					<p>A evolução do cenário competitivo de e-sports, fez com que os atletas digitais procurassem formas mais rápidas de evoluírem, e uma delas, talvez a principal, é reunir um time fisicamente.</p>

					<p>Aprender e experimentar, como jogador, junto com jogadores, <strong>junto fisicamente</strong> com <strong>amigos</strong>, isso sim é o <strong>HearthSeek</strong>.</p>

			      	<p>Está esperando o quê? Busque <strong>jogadores próximos</strong> a você!</p>

			      	<p><img src="<?php echo get_template_directory_uri(); ?>/img/imgHowHearthSeek2.png" style="    width: 100%;"></p>

			      	<p>É bem simples, basta clicar em <strong>"Ir para o HearthSeek"</strong> no final dessa janela. Na página da plataforma é só preencher com seus dados através do botão <strong>"MEUS DADOS"</strong>, mostrado na figura abaixo:</p>

			      	<p><img src="<?php echo get_template_directory_uri(); ?>/img/imgHowHearthSeek.png" style="    width: 100%;"></p>

			      	<p>Após preencher os dados não esqueça de colocar a senha da sua conta antes de cliclar em "Editar".</p>

			      	<p><img src="<?php echo get_template_directory_uri(); ?>/img/imgHowHearthSeek3.png" style="    width: 100%;"></p>

			      	<p>Editado os dados de sua conta você já faz parte do HearthSeek e já pode buscar outros <strong>jogadores próximos</strong> a você. Basta digitar, no campo de pesquisa, a localização no qual deseja procurar jogadores e boa sorte! Você tembém poderá filtrar a busca por <strong>Sexo</strong>, <strong>Idade</strong> e por <strong>Ranking.</strong></p>

			      	<p><img src="<?php echo get_template_directory_uri(); ?>/img/imgHowHearthSeek4.png" style="    width: 100%;"></p>

					<p>Boa sorte galera! Afinal, do começo sofrido ainda sem cartas, sozinho no seu quarto, a evolução óbvia, com o HearthSeek, é pegar rank Lendário e ser campeão nos torneios!</p>
			        
			      </div>
			      <div class="modal-footer">
			      	<a href="http://www.marduktv.com.br/hearthseek/" class="btn btn-default" style="    color: #fff; background-color: #e65100;">Ir para o HearthSeek</a>
			        <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
			      </div>
			    </div><!-- /.modal-content -->
			  </div><!-- /.modal-dialog -->
			</div>





<!--    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBgNOjrq9ODbJANpzVy__fgZxK1KObT4Y0&libraries=places&sensor=false&callback=initMap">
    </script> -->
<script defer src="<?php echo get_template_directory_uri(); ?>/hearthseek/js/oms.min.js"></script>



	</body>
</html>