<nav id="cabecalho">
      <nav class="navbar navbar-default" role="navigation">
            <section class="container">
                  <section>
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <section class="navbar-header">
                              <!-- Esse button aparecerá no mobile para encurtar o menu -->
                              <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#menu-cabecalho">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span> 
                              </button>                          

                        </section> 
                        <!-- O menu que ficará dentro do botão acima é pego id="menu" -->
                        <section class="collapse navbar-collapse" id="menu-cabecalho">
                              <ul class="nav navbar-nav">
                                     
                                                                       
                                    <li><a href="baterpontoentrada.php" class="borda-direita">Marcar Entrada</a></li>                         
                                    <li><a href="#" class="borda-direita">Marcar Saída</a></li>                         
                                    <li><a href="logout.php">Logout</a></li> 
                              </ul>
                        </section>
                  
                  </section>
            </section>
            
      </nav>
      <div class="faixa-cinza">
            
      </div> 
     
      <nav class="container-fluid">
            <nav class="row" id="fundo-branco">
                  <nav class="col-sm-5 col-sm-offset-1 col-md-4 col-md-offset-2">
                        <!-- Inserir aqui a logo da empresa -->
                  </nav>
                  <nav class="col-sm-5 col-md-4 fundo-verde">
                       <p class="lead">Horário de Funcionamento</p>
                       <p>Segunda a sexta-feira de 8:00 às 12:00 e 14:00 as 18:00</p>
                       <p><span class="glyphicon glyphicon-comment"></span id="bom-dia">Bom dia, <?php echo $_SESSION['Username']?> !</p>
                  </nav>
                  
            </nav> 
      </nav>
</nav>