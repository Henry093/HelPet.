<?php $this->view("minima/header",$data);?>
 
          
          <section class="section background-white">

          	 
          	
            <div class="s-12 m-12 l-4 center">
              <h4 class="text-dark text-s-size-30 text-m-size-40 text-l-size-headline text-thin text-line-height-1 text-center"><?=$data['post']->title?></h4>
               <img src="<?=ROOT.$data['post']->image?>" />
               <br>
               <br>
               <p class="margin-bottom-0 text-size-16 text-dark text-center">
               <?=$data['post']->description?></p><br><br><br>
               <p>Estatus: <?=$data['post']->option?></p><br>
               <p>Ciudad: <?=$data['post']->city?></p><br>
               <p>Telefono de contacto: <?=$data['post']->phone?></p>
            </div>           
          </section> 

<?php $this->view("minima/footer",$data);?>