	<footer>
      <div class="container">
      	<div class="row">
      		<div class="col-sm-offset-1 col-sm-4">
      			<img src="img/OrientadorDigital2_rodape.png" alt="logo do rodapé" tabindex="0">
      			<p tabindex="0">Esse portal foi pensado e desenvolvido para auxiliar o cidadão a encontrar informações sobre medicamentos e tratamentos gratuitos. O Orientador Digital é um facilitador para acesso à diversos conteúdos, sendo de responsabilidade dos autores (órgãos públicos ou privados) de manterem os tais informações atualizadas, por isso, sempre consulte os links oficiais para estar sempre em conformidade com as exigências dos órgãos regulamentadores</p>      			
      		</div>
      		<div class="col-sm-offset-2 col-sm-4 empurrar">
      			<h3 tabindex="0" aria-label="Direcionamento para todas as páginas internas do nosso portal">Mapa do Site</h3>
      			<a href="index.php">Home</a><br>
      			<a href="alto_custo.php">Remédios de alto custo</a><br>
      			<a href="uso_continuo.php">Remédios de uso contínuo</a><br>
      			<a href="#">Quem somos</a><br>
      			<a href="contato.php">Contato</a><br>
      		</div>      		
      	</div>
      </div>
      <div class="container-fluid direitos">
		<div class="row">
			<h5 class="text-center" tabindex="0">&copy; Todos os direitos reservados</h5>
		</div>    	
      </div>
    </footer>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    
    <script>
      (function () {
        var Contrast = {
            storage: 'contrastState',
            cssClass: 'contrast',
            currentState: null,
            check: checkContrast,
            getState: getContrastState,
            setState: setContrastState,
            toogle: toogleContrast,
            updateView: updateViewContrast
        };

        window.toggleContrast = function () { Contrast.toogle(); };

        Contrast.check();

        function checkContrast() {
            this.updateView();
        }

        function getContrastState() {
            return localStorage.getItem(this.storage) === 'true';
        }

        function setContrastState(state) {
            localStorage.setItem(this.storage, '' + state);
            this.currentState = state;
            this.updateView();
        }

        function updateViewContrast() {
            var body = document.body;

            if (this.currentState === null)
                this.currentState = this.getState();

            if (this.currentState)
                body.classList.add(this.cssClass);
            else
                body.classList.remove(this.cssClass);
        }

        function toogleContrast() {
            this.setState(!this.currentState);
        }
    })();

    </script>
  </body>
</html>