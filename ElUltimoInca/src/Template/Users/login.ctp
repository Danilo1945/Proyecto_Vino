<div class="hide">
    <?= $this->layout = "login"; ?>
</div>

<div class="row">
    <div class="col s12 m2 l2 xl4">
        
    </div>
    
    
     <div class="col s12 m8 l8 xl4">
        
    <div class="col s12 m12 l12 xl12">
        <div class="card darken-1" id="abajo_menu">
            <div class="card-content black-text">
                <span class="card-title Black-text center">Login</span>
                <div class="card-action">
                  <div class="row">
        
     <?= $this->Form->create() ?>
     
      
      <div class="row">
          <div class="input-field">
                    <?= $this->Form->control('Usuario') ?>
                </div>
                <div class="input-field">
                    
                    <?= $this->Form->control('Contraseña') ?>
                </div>
      </div>
     
      
                      <div class="row ">
                          <div class="col s6 m6  l6 xl6 center">
                              <?=$this->Html->link('Inicial Sesión',['controller'=>'socio','action'=>'index','class'=>'btn waves-effect waves-light'])  ?>
                             
                          </div>
                          <div class="col s6 m6 l6 xl6 center">
                            
                          <?=$this->Html->link('Registrarse',['controller'=>'users','action'=>'registro','class'=>'btn waves-effect waves-light'])  ?> 
                          
                          </div>
                          <div class="col s12 m12 l12 xl12 center">
                              <br>
                               <?=$this->Html->link('Olvide mi contraseña',['controller'=>'Menu','action'=>'home','class'=>'waves-effect'])  ?> 
                          
                          </div>
                           <div class="col s12 m12 l12 xl12 center">
                              <br>
                               <?=$this->Html->link('Cancelar',['controller'=>'Menu','action'=>'home','class'=>'waves-effect'])  ?> 
                          
                          </div>
                          <br>
                              
                      </div>
   
        
   
                    <?= $this->Form->end() ?>
                   </div>
                
                </div>
            </div>
        </div>
       

        
    </div>

    </div>
    
    
    
    
     <div class="col s12 m2 l2 xl4">
        
    </div>
</div>



       
    
    
    
    
    
    
