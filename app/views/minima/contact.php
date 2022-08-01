<?php $this->view("minima/header",$data);?>
      
      <!-- MAIN -->
      <main role="main">
        <!-- Content -->
        <article>
          <header class="section background-white">
            <div class="line text-center">        
              <h1 class="text-dark text-s-size-30 text-m-size-40 text-l-size-headline text-thin text-line-height-1">Contactanos</h1>
              <p class="margin-bottom-0 text-size-16 text-dark">Puedes ponerte en contacto con nosotros a traves del siguiente formulario, uno de nuestros especialistas se pondra en contacto contigo</p>
            </div>  
          </header>
          <section class="section background-white">
            <div class="s-12 m-12 l-4 center">
              <h4 class="text-size-20 margin-bottom-20 text-dark text-center">Contactanos</h4>
              <form name="contactForm" class="customform" method="post">
                <div class="s-12">
                  <div class="margin">
                    <div class="s-12 m-12 l-6">
                      <input name="name" class="name" placeholder="Nombre" title="Nombre" type="text" required>
                      <p class="name-error form-error">Porfavor ingresa tu nombre</p>
                    </div>
                    <div class="s-12 m-12 l-6">
                      <input name="email" class="required email" placeholder="e-mail" title="email" type="email" required>
                      <p class="email-error form-error">Porfavor ingresa tu e-mail.</p>
                    </div>
                  </div>
                </div>
                <div class="s-12">
                  <textarea name="message" class="required message" placeholder="Mensaje" rows="6" required></textarea>
                  <p class="message-error form-error">Porfavor ingresa tu mensaje.</p>
                </div>
                <div class="s-12"><button class="s-12 submit-form button background-primary text-white" type="submit">Enviar</button></div>
              </form>
            </div>           
          </section>  
          
          
        </article>
      </main>
      
     <?php $this->view("minima/footer",$data);?>