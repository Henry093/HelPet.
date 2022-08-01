<?php $this->view("minima/header",$data);?>
 
          
          <section class="section background-white">

          	<p><?php check_message() ?></p>
          	
            <div class="s-12 m-12 l-4 center">
              <h4 class="text-size-20 margin-bottom-20 text-dark text-center">Reportar Mascota</h4>
              <form method="post" enctype="multipart/form-data" name="contactForm" class="customform">
                 
                <div class="s-12"> 
                  <input name="title" class="subject" placeholder="Nombre de la mascota" title="Title" type="text" required>
                  <p class="subject-error form-error">Porfavor ingresa el nombre de tu mascota</p><br>
                </div>
                <div class="s-12" required> 
                <p>Selecciona una opcion:</p>
                  <input type="radio" name="option" value="perdida"  >
                  <label for="html">Perdida</label><br>
                  <input type="radio" name="option" value="encontrada">
                  <label for="css">Encontrada</label><br>
                  <p class="subject-error form-error">Porfavor selecciona una opcion</p><br>
                </div>
                <div class="s-12"> 
                  <input name="city" class="subject" placeholder="Ciudad" title="Ciudad" type="text" required>
                  <p class="subject-error form-error">Porfavor ingresa el nombre de tu ciudad</p><br>
                </div>
                <div class="s-12"> 
                  <input name="phone" class="subject" placeholder="Telefono" title="Telefono" type="number" required>
                  <p class="subject-error form-error">Porfavor ingresa el nombre de tu ciudad</p><br>
                </div>
                <div class="s-12">
                  <textarea name="description" class="required message" placeholder="Descripcion de la mascota" rows="5"></textarea>
                  <p class="message-error form-error">Por favor ingresa una descripcion de tu mascota</p>
                </div>
                <div class="s-12"> 
                  <input name="file" class="subject" type="file" required>
                  <p class="subject-error form-error">Por favor selecciona un archivo</p>
                </div>

                
                <div class="s-12"><button class="s-12 submit-form button background-primary text-white" type="submit">Enviar</button></div>
              </form>
            </div>           
          </section> 

<?php $this->view("minima/footer",$data);?>