<div class="bg">
  <div class="main">
    <header>
      <div class="row-1">
        <h1> <a class="logo" href="index.php"></a> </h1>
        <form id="search-form" action="#" method="post" enctype="multipart/form-data">
          <fieldset>
            <div class="search-form">
              <input type="text" name="search" value="Type Keyword Here" onBlur="if(this.value=='') this.value='Type Keyword Here'" onFocus="if(this.value =='Type Keyword Here' ) this.value=''" />
              <a href="#">Search</a> </div>
          </fieldset>
        </form>
      </div>

<div class="row-2">
        <nav>
          <ul class="menu">
            
        <?php
            	//$pagina = "http://" . $_SERVER["SERVER_NAME"] . $_SERVER["REQUEST_URI"];	
              $urlpagina=$_SERVER["REQUEST_URI"] ;               
              $paginaarray = explode("/", $urlpagina);              
              $pagina=$paginaarray[1];
				
        switch ($pagina) {
				case 'index.php':
					echo ('<li><a class="active" href="index.php">Portada</a></li> 
					<li><a href="portafolio.php">Portafolio</a></li>
            		<li><a href="servicioswebgratis.php">Servicios</a></li>
            		<li><a href="desarrolloaplicacionesandroid.php">Android Apps</a></li>
            		<li class="last-item"><a href="contacts.html">Contacto</a></li>');
					break;												
				
				case 'servicioswebgratis.php':
					echo ('<li><a href="index.php">Portada</a></li> 
					<li><a href="portafolio.php">Portafolio</a></li>
            		<li><a class="active" href="servicioswebgratis.php">Servicios</a></li>
            		<li><a href="desarrolloaplicacionesandroid.php">Android Apps</a></li>
            		<li class="last-item"><a href="contacts.html">Contacto</a></li>');
					break;
				case 'desarrolloaplicacionesandroid.php':
					echo ('<li><a href="index.php">Portada</a></li> 
					<li><a href="portafolio.php">Portafolio</a></li>
            		<li><a href="servicioswebgratis.php">Servicios</a></li>
            		<li><a class="active" href="desarrolloaplicacionesandroid.php">Android Apps</a></li>
            		<li class="last-item"><a href="contacts.html">Contacto</a></li>');
					break;
					
				case 'portafolio.php':
					echo ('<li><a href="index.php">Portada</a></li> 
					<li><a class="active" href="portafolio.php">Portafolio</a></li>
            		<li><a href="servicioswebgratis.php">Servicios</a></li>
            		<li><a href="desarrolloaplicacionesandroid.php">Android Apps</a></li>
            		<li class="last-item"><a href="contacts.html">Contacto</a></li>');

				default:
				   echo ('<li><a href="index.php">Portada</a></li> 
				   			<li><a href="portafolio.php">Portafolio</a></li>
							<li><a href="servicioswebgratis.php">Servicios</a></li>
							<li><a href="desarrolloaplicacionesandroid.php">Android Apps</a></li>
							<li class="last-item"><a href="contacts.html">Contacto</a></li>');
			}
            ?>            
          </ul>
        </nav>
</div>
</header>
