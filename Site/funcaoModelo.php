<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge' >
    <title>TesteKauana</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    </head>
<body>
    <?php
        function modeloNav(){
            echo("<nav class='navbar '>

            <a class='navbar-brand' href='#'>
              <img src='https://img.icons8.com/cotton/452/tree.png' width='30' height='30' class='d-inline-block align-top' alt='>
              neTree
            </a>
            <!--  -->
            <form class='form-inline my-2 my-lg-0'>
        <!--  -->&nbsp  
            <input class='form-control mr-sm-2' type='search' placeholder='Pesquisar' aria-label='Pesquisar'>
              <button class='btn btn-outline-success my-2 my-sm-0' type='submit'><svg width='1em' height='1em' viewBox='0 0 16 16' class='bi bi-search' fill='currentColor' xmlns='http://www.w3.org/2000/svg'>
                <path fill-rule='evenodd' d='M10.442 10.442a1 1 0 0 1 1.415 0l3.85 3.85a1 1 0 0 1-1.414 1.415l-3.85-3.85a1 1 0 0 1 0-1.415z'/>
                <path fill-rule='evenodd' d='M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z'/>
              </svg></button>
        <!--  -->&nbsp
        <button class='btn btn-outline-success my-2 my-sm-0' scr='><svg width='1em' height='1em' viewBox='0 0 16 16' class='bi bi-cart2' fill='currentColor' xmlns='http://www.w3.org/2000/svg'>
        <path fill-rule='evenodd' d='M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l1.25 5h8.22l1.25-5H3.14zM5 13a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z'/>
      </svg></button>
        <!--  -->&nbsp
              <button class='btn btn-outline-success my-2 my-sm-0' ><svg width='1em' height='1em' viewBox='0 0 16 16' class='bi bi-person-circle' fill='currentColor' xmlns='http://www.w3.org/2000/svg'>
                <path d='M13.468 12.37C12.758 11.226 11.195 10 8 10s-4.757 1.225-5.468 2.37A6.987 6.987 0 0 0 8 15a6.987 6.987 0 0 0 5.468-2.63z'/>
                <path fill-rule='evenodd' d='M8 9a3 3 0 1 0 0-6 3 3 0 0 0 0 6z'/>
                <path fill-rule='evenodd' d='M8 1a7 7 0 1 0 0 14A7 7 0 0 0 8 1zM0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8z'/>
              </svg></button>
            
            </form>
          </nav>");
        }

        function modeloFoot(){
            echo(" <!-- Footer -->
            <footer class='page-footer font-small'>
            
                <!-- Copyright -->
                <div class='footer-copyright text-center py-3'>Acesse a documentação do site no GitHub:
                  <a href='https://github.com/KauKnappmann/Floricultura-IFC'>Floricultura-IFC-neTree</a>
                </div>
                <!-- Copyright -->
              
              </footer>
              <!-- Footer -->");
        }
    ?>
</body>
</html>